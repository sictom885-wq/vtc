#!/bin/bash
# ============================================================
# AUDE VTC — Téléchargement automatique des images
# Prérequis : curl, une clé API Pexels GRATUITE
# → S'inscrire sur https://www.pexels.com/api/ (< 2 min)
# Usage : bash download-images.sh TON_API_KEY
# ============================================================

API_KEY="${1:-REMPLACE_PAR_TA_CLE}"
OUTPUT_DIR="./assets/images"
mkdir -p "$OUTPUT_DIR"

if [ "$API_KEY" = "REMPLACE_PAR_TA_CLE" ]; then
  echo "❌ Donne ta clé Pexels en argument : bash download-images.sh TA_CLE"
  echo "   Clé gratuite sur : https://www.pexels.com/api/"
  exit 1
fi

# --- Fonction de téléchargement ---
# Usage: fetch "query" "nom-fichier.jpg" [orientation: landscape|portrait]
fetch() {
  local QUERY="$1"
  local FILENAME="$2"
  local ORIENT="${3:-landscape}"
  local FILEPATH="$OUTPUT_DIR/$FILENAME"

  if [ -f "$FILEPATH" ]; then
    echo "⏭️  $FILENAME existe déjà, on passe."
    return
  fi

  echo -n "⬇️  Téléchargement : $FILENAME ($QUERY)... "

  # Appel API Pexels
  RESPONSE=$(curl -s \
    "https://api.pexels.com/v1/search?query=$(python3 -c "import urllib.parse; print(urllib.parse.quote('$QUERY'))")&per_page=5&orientation=$ORIENT&size=large" \
    -H "Authorization: $API_KEY")

  # Extraction URL (photo large)
  URL=$(echo "$RESPONSE" | python3 -c "
import sys, json
data = json.load(sys.stdin)
photos = data.get('photos', [])
if photos:
    print(photos[0]['src']['large2x'])
else:
    print('')
" 2>/dev/null)

  if [ -z "$URL" ]; then
    echo "❌ Aucun résultat pour '$QUERY'"
    return
  fi

  # Téléchargement
  HTTP_CODE=$(curl -s -L -o "$FILEPATH" -w "%{http_code}" "$URL")

  if [ "$HTTP_CODE" = "200" ]; then
    SIZE=$(du -h "$FILEPATH" | cut -f1)
    echo "✅ OK ($SIZE)"
  else
    echo "❌ Erreur HTTP $HTTP_CODE"
    rm -f "$FILEPATH"
  fi

  # Pause pour respecter le rate limit Pexels
  sleep 0.5
}

echo ""
echo "🚀 AUDE VTC — Téléchargement des images"
echo "========================================"
echo ""

# === IMAGES PRINCIPALES ===

# Hero homepage
fetch "black mercedes car chauffeur night luxury" "hero-bg.jpg" "landscape"

# Chauffeur / à propos
fetch "professional driver suit black car" "chauffeur-mercedes.jpg" "portrait"

# Portrait générique (à remplacer par photo réelle du client)
fetch "professional man suit portrait outdoor" "michel-richard.jpg" "portrait"

# === AÉROPORTS ===
fetch "airplane airport runway departures" "aeroport.jpg" "landscape"
fetch "toulouse blagnac airport terminal" "aeroport-hero.jpg" "landscape"

# === GARES ===
fetch "train station platform railway france" "gare.jpg" "landscape"
fetch "french train TGV station" "gare-hero.jpg" "landscape"

# === TOURISME OCCITANIE ===
fetch "occitanie south france landscape" "occitanie-hero.jpg" "landscape"
fetch "canal du midi france boats trees" "tourisme.jpg" "landscape"

# === CIRCUITS ===
fetch "carcassonne medieval castle fortress" "carcassonne-cite.jpg" "landscape"
fetch "canal du midi france water reflection" "canal-midi.jpg" "landscape"
fetch "languedoc vineyard sunset south france" "vignobles.jpg" "landscape"
fetch "cathar castle ruins mountain france" "pays-cathare.jpg" "landscape"

# === ÉVÉNEMENTS ===
fetch "wedding luxury car chauffeur elegant" "evenement-hero.jpg" "landscape"

# === OG IMAGE (réseaux sociaux 1200x630) ===
fetch "carcassonne castle aerial view" "og-image.jpg" "landscape"

echo ""
echo "========================================"
echo "✅ Terminé ! Images dans : $OUTPUT_DIR"
echo ""
echo "📋 Vérification :"
ls -lh "$OUTPUT_DIR"
echo ""
echo "💡 Pense à :"
echo "   1. Remplacer michel-richard.jpg par la vraie photo du client"
echo "   2. Compresser les images : bash optimize-images.sh"
