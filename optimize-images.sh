#!/bin/bash
# ============================================================
# AUDE VTC — Optimisation images en WebP
# Prérequis : cwebp (brew install webp / apt install webp)
# Usage : bash optimize-images.sh
# ============================================================

INPUT_DIR="./assets/images"
QUALITY=82  # Bon compromis qualité/poids

echo ""
echo "🖼️  Optimisation images AUDE VTC"
echo "=================================="

if ! command -v cwebp &> /dev/null; then
  echo "⚠️  cwebp non installé."
  echo "   macOS : brew install webp"
  echo "   Ubuntu : sudo apt install webp"
  echo ""
  echo "Fallback : compression JPEG avec mogrify (ImageMagick)..."

  if command -v mogrify &> /dev/null; then
    for f in "$INPUT_DIR"/*.jpg "$INPUT_DIR"/*.jpeg "$INPUT_DIR"/*.png; do
      [ -f "$f" ] || continue
      BEFORE=$(du -h "$f" | cut -f1)
      mogrify -quality 82 -strip "$f"
      AFTER=$(du -h "$f" | cut -f1)
      echo "✅ $(basename $f) : $BEFORE → $AFTER"
    done
  else
    echo "❌ ImageMagick non trouvé non plus. Installe l'un ou l'autre."
  fi
  exit 0
fi

TOTAL_BEFORE=0
TOTAL_AFTER=0

for f in "$INPUT_DIR"/*.jpg "$INPUT_DIR"/*.jpeg "$INPUT_DIR"/*.png; do
  [ -f "$f" ] || continue
  BASENAME=$(basename "$f" | sed 's/\.[^.]*$//')
  WEBP_PATH="$INPUT_DIR/$BASENAME.webp"

  if [ -f "$WEBP_PATH" ]; then
    echo "⏭️  $BASENAME.webp existe déjà"
    continue
  fi

  SIZE_BEFORE=$(stat -f%z "$f" 2>/dev/null || stat -c%s "$f")
  cwebp -q $QUALITY -quiet "$f" -o "$WEBP_PATH"
  SIZE_AFTER=$(stat -f%z "$WEBP_PATH" 2>/dev/null || stat -c%s "$WEBP_PATH")

  SAVING=$(( (SIZE_BEFORE - SIZE_AFTER) * 100 / SIZE_BEFORE ))
  echo "✅ $BASENAME → WebP (-${SAVING}%)"
done

echo ""
echo "=================================="
echo "✅ WebP générés dans : $INPUT_DIR"
echo ""
echo "💡 Les navigateurs modernes chargeront le WebP automatiquement"
echo "   via la balise <picture> dans le HTML (à implémenter)."
