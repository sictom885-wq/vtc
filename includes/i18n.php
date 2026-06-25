<?php
/**
 * AUDE VTC — Traductions centralisées
 * Usage : include 'includes/i18n.php'; $t = vtc_t($lang);
 */

function vtc_t(string $lang = 'fr'): array {
    $strings = [

    /* ===== NAVIGATION ===== */
    'nav_apropos'     => ['fr'=>'À Propos',     'en'=>'About',      'de'=>'Über uns'],
    'nav_prestations' => ['fr'=>'Prestations',  'en'=>'Services',   'de'=>'Leistungen'],
    'nav_tarifs'      => ['fr'=>'Tarifs',        'en'=>'Rates',      'de'=>'Preise'],
    'nav_contact'     => ['fr'=>'Contact',       'en'=>'Contact',    'de'=>'Kontakt'],
    'nav_reserver'    => ['fr'=>'Réserver',      'en'=>'Book now',   'de'=>'Buchen'],
    'nav_disponible'  => ['fr'=>'Carcassonne & Occitanie','en'=>'Carcassonne & Occitanie','de'=>'Carcassonne & Okzitanien'],

    /* ===== HERO ===== */
    'hero_tag'        => ['fr'=>'Chauffeur Privé · Carcassonne','en'=>'Private Chauffeur · Carcassonne','de'=>'Privatfahrer · Carcassonne'],
    'hero_title_1'    => ['fr'=>'Votre trajet,',   'en'=>'Your journey,',    'de'=>'Ihre Fahrt,'],
    'hero_title_2'    => ['fr'=>'notre exigence.', 'en'=>'our excellence.',  'de'=>'unser Anspruch.'],
    'hero_desc'       => ['fr'=>'Mercedes hybride, chauffeur expérimenté, tarif connu à l\'avance. Partout en Occitanie, 24h/7j, en français, anglais ou allemand.',
                          'en'=>'Hybrid Mercedes, experienced chauffeur, fixed price upfront. Across Occitanie, 24/7, in French, English or German.',
                          'de'=>'Hybrid-Mercedes, erfahrener Fahrer, Festpreis im Voraus. Durch ganz Okzitanien, 24/7, auf Französisch, Englisch oder Deutsch.'],
    'hero_cta_devis'  => ['fr'=>'Demander un devis','en'=>'Get a quote',      'de'=>'Angebot anfragen'],
    'hero_cta_tel'    => ['fr'=>'06 10 08 20 07',   'en'=>'Call us',          'de'=>'Anrufen'],

    /* ===== TRUST BADGES ===== */
    'trust_dispo'     => ['fr'=>'Disponible 24h/7j','en'=>'Available 24/7',   'de'=>'Verfügbar 24/7'],
    'trust_tarif'     => ['fr'=>'Tarif fixe garanti','en'=>'Fixed price guaranteed','de'=>'Festpreis garantiert'],
    'trust_voiture'   => ['fr'=>'Mercedes hybride', 'en'=>'Hybrid Mercedes',  'de'=>'Hybrid-Mercedes'],
    'trust_langues'   => ['fr'=>'FR · EN · DE',     'en'=>'FR · EN · DE',    'de'=>'FR · EN · DE'],

    /* ===== FORMULAIRE ===== */
    'form_title'      => ['fr'=>'Estimez votre trajet',   'en'=>'Get your quote',         'de'=>'Reise berechnen'],
    'form_subtitle'   => ['fr'=>'Remplissez le formulaire, nous vous répondons sous 2h.',
                          'en'=>'Fill in the form, we\'ll reply within 2 hours.',
                          'de'=>'Formular ausfüllen, wir antworten innerhalb von 2 Stunden.'],
    'form_depart'     => ['fr'=>'Départ',            'en'=>'Pick-up',         'de'=>'Abfahrtsort'],
    'form_arrivee'    => ['fr'=>'Arrivée',            'en'=>'Drop-off',        'de'=>'Ankunftsort'],
    'form_date'       => ['fr'=>'Date',               'en'=>'Date',            'de'=>'Datum'],
    'form_heure'      => ['fr'=>'Heure de prise en charge','en'=>'Pick-up time','de'=>'Abholzeit'],
    'form_nom'        => ['fr'=>'Nom complet',        'en'=>'Full name',       'de'=>'Vollständiger Name'],
    'form_telephone'  => ['fr'=>'Téléphone',          'en'=>'Phone',           'de'=>'Telefon'],
    'form_email'      => ['fr'=>'Email',              'en'=>'Email',           'de'=>'E-Mail'],
    'form_allerretour'=> ['fr'=>'Aller / Retour',     'en'=>'Round trip',      'de'=>'Hin- und Rückfahrt'],
    'form_message'    => ['fr'=>'Informations complémentaires','en'=>'Additional information','de'=>'Weitere Informationen'],
    'form_placeholder_depart'  => ['fr'=>'Adresse ou ville de départ','en'=>'Address or departure city','de'=>'Abfahrtsadresse oder -stadt'],
    'form_placeholder_arrivee' => ['fr'=>'Adresse, aéroport, gare…','en'=>'Address, airport, station…','de'=>'Adresse, Flughafen, Bahnhof…'],
    'form_placeholder_msg'     => ['fr'=>'Nombre de passagers, bagages, numéro de vol…','en'=>'Number of passengers, luggage, flight number…','de'=>'Passagierzahl, Gepäck, Flugnummer…'],
    'form_submit'     => ['fr'=>'Envoyer ma demande', 'en'=>'Send my request', 'de'=>'Anfrage senden'],
    'form_legal'      => ['fr'=>'Réponse sous 2h · Vos données ne sont pas revendues',
                          'en'=>'Reply within 2h · Your data is never sold',
                          'de'=>'Antwort in 2 Stunden · Ihre Daten werden nicht verkauft'],

    /* ===== 4 ÉTAPES ===== */
    'step1' => ['fr'=>'Je demande mon devis en ligne',     'en'=>'I request my quote online',      'de'=>'Ich fordere ein Angebot an'],
    'step2' => ['fr'=>'Je reçois ma confirmation par email','en'=>'I receive my email confirmation','de'=>'Ich erhalte meine E-Mail-Bestätigung'],
    'step3' => ['fr'=>'Je règle à bord ou en ligne',       'en'=>'I pay on board or online',       'de'=>'Ich zahle an Bord oder online'],
    'step4' => ['fr'=>'Je monte à bord en toute sérénité', 'en'=>'I board in complete serenity',   'de'=>'Ich steige entspannt ein'],

    /* ===== À PROPOS ===== */
    'apropos_eyebrow'  => ['fr'=>'À Propos',         'en'=>'About',           'de'=>'Über uns'],
    'apropos_title'    => ['fr'=>'AUDE VTC, votre VTC',  'en'=>'AUDE VTC, your',  'de'=>'AUDE VTC, Ihr'],
    'apropos_title_em' => ['fr'=>'de confiance',     'en'=>'trusted chauffeur','de'=>'Vertrauensfahrer'],
    'apropos_desc'     => ['fr'=>'Basé à Carcassonne, Michel Richard met son expertise du tourisme occitan au service de vos déplacements. Professionnel, discret, multilingue — chaque trajet est une expérience.',
                           'en'=>'Based in Carcassonne, Michel Richard puts his expertise in Occitan tourism at the service of your travels. Professional, discreet, multilingual — every journey is an experience.',
                           'de'=>'Michel Richard, ansässig in Carcassonne, stellt sein Fachwissen im okzitanischen Tourismus in den Dienst Ihrer Reisen. Professionell, diskret, mehrsprachig — jede Fahrt ist ein Erlebnis.'],
    'feat1_title' => ['fr'=>'Tarif fixe, sans surprise','en'=>'Fixed price, no surprises','de'=>'Festpreis, keine Überraschungen'],
    'feat1_desc'  => ['fr'=>'Prix connu à la réservation, quelles que soient les conditions de trafic',
                      'en'=>'Price agreed at booking, regardless of traffic conditions',
                      'de'=>'Preis bei der Buchung vereinbart, unabhängig von den Verkehrsbedingungen'],
    'feat2_title' => ['fr'=>'Disponible 24h/7j',  'en'=>'Available 24/7',    'de'=>'Verfügbar 24/7'],
    'feat2_desc'  => ['fr'=>'Vols tôt, trains tardifs, événements nocturnes — nous sommes là',
                      'en'=>'Early flights, late trains, evening events — we are there',
                      'de'=>'Frühe Flüge, späte Züge, Abendveranstaltungen — wir sind da'],
    'feat3_title' => ['fr'=>'Trilingue FR · EN · DE','en'=>'Trilingual FR · EN · DE','de'=>'Dreisprachig FR · EN · DE'],
    'feat3_desc'  => ['fr'=>'Un accueil personnalisé pour chaque voyageur, quelle que soit sa nationalité',
                      'en'=>'Personalised welcome for every traveller, whatever their nationality',
                      'de'=>'Persönlicher Empfang für jeden Reisenden, unabhängig von seiner Nationalität'],
    'feat4_title' => ['fr'=>'Mercedes Break Hybride','en'=>'Hybrid Mercedes Estate','de'=>'Mercedes Break Hybrid'],
    'feat4_desc'  => ['fr'=>'Confort premium, spacieux, climatisé — vos bagages voyagent avec vous',
                      'en'=>'Premium comfort, spacious, air-conditioned — your luggage travels with you',
                      'de'=>'Premium-Komfort, geräumig, klimatisiert — Ihr Gepäck reist mit Ihnen'],

    /* ===== PRESTATIONS ===== */
    'prest_eyebrow'  => ['fr'=>'Nos Services',       'en'=>'Our Services',    'de'=>'Unsere Leistungen'],
    'prest_title'    => ['fr'=>'Les Prestations',    'en'=>'Our Services',    'de'=>'Unsere Angebote'],
    'prest_title_em' => ['fr'=>'AUDE VTC',           'en'=>'AUDE VTC',        'de'=>'AUDE VTC'],
    'prest_subtitle' => ['fr'=>'De l\'aéroport à votre hôtel, de Carcassonne aux vignobles de Corbières — chaque déplacement mérite le meilleur.',
                         'en'=>'From the airport to your hotel, from Carcassonne to the Corbières vineyards — every journey deserves the best.',
                         'de'=>'Vom Flughafen zu Ihrem Hotel, von Carcassonne zu den Weinbergen der Corbières — jede Fahrt verdient das Beste.'],
    'prest_aeroport_title' => ['fr'=>'Transferts Aéroports','en'=>'Airport Transfers',   'de'=>'Flughafentransfers'],
    'prest_aeroport_desc'  => ['fr'=>'Prise en charge avec panneau nominatif, suivi de vol en temps réel. Aucun supplément en cas de retard.',
                                'en'=>'Pick-up with name board, real-time flight tracking. No surcharge for delays.',
                                'de'=>'Abholung mit Namensschild, Echtzeit-Flugverfolgung. Kein Aufpreis bei Verspätungen.'],
    'prest_gare_title'     => ['fr'=>'Transferts Gares',    'en'=>'Train Station Transfers','de'=>'Bahnhoftransfers'],
    'prest_gare_desc'      => ['fr'=>'Accueil à la sortie du quai avec panneau à votre nom. Suivi du trafic SNCF, attente incluse.',
                                'en'=>'Welcome at the platform exit with your name board. SNCF tracking, waiting time included.',
                                'de'=>'Empfang am Bahnsteigausgang mit Namensschild. Zugverfolgung, Wartezeit inbegriffen.'],
    'prest_tourisme_title' => ['fr'=>'Tourisme & Événements','en'=>'Tourism & Events',    'de'=>'Tourismus & Events'],
    'prest_tourisme_desc'  => ['fr'=>'Découvrez l\'Occitanie à votre rythme : Cité de Carcassonne, Canal du Midi, domaines viticoles, mariages, séminaires.',
                                'en'=>'Discover Occitanie at your pace: Carcassonne, Canal du Midi, vineyards, weddings, seminars.',
                                'de'=>'Entdecken Sie Okzitanien in Ihrem Tempo: Carcassonne, Canal du Midi, Weingüter, Hochzeiten, Seminare.'],
    'prest_voir_tarifs'    => ['fr'=>'Voir les tarifs',   'en'=>'See rates',      'de'=>'Preise ansehen'],
    'prest_decouvrir'      => ['fr'=>'Découvrir',         'en'=>'Discover',       'de'=>'Entdecken'],

    /* ===== TARIFS ===== */
    'tarifs_eyebrow'  => ['fr'=>'Mise à Disposition',  'en'=>'On Demand',      'de'=>'Verfügbarkeit'],
    'tarifs_title'    => ['fr'=>'Tarifs',               'en'=>'Rates',          'de'=>'Preise'],
    'tarifs_title_em' => ['fr'=>'transparents',         'en'=>'transparent',    'de'=>'transparent'],
    'tarifs_subtitle' => ['fr'=>'Prix fixes incluant le carburant, les péages et l\'attente. Aucune surprise à l\'arrivée.',
                          'en'=>'Fixed prices including fuel, tolls and waiting time. No surprises on arrival.',
                          'de'=>'Festpreise einschließlich Kraftstoff, Maut und Wartezeit. Keine Überraschungen bei der Ankunft.'],
    'tarifs_voir_tout'=> ['fr'=>'Voir tous les tarifs','en'=>'View all rates',  'de'=>'Alle Preise ansehen'],
    'tarif_1h'        => ['fr'=>'1 Heure',             'en'=>'1 Hour',         'de'=>'1 Stunde'],
    'tarif_demijour'  => ['fr'=>'Demi-journée',        'en'=>'Half-day',       'de'=>'Halbtag'],
    'tarif_journee'   => ['fr'=>'1 Journée',           'en'=>'Full day',       'de'=>'Ganztag'],
    'tarif_2jours'    => ['fr'=>'2 Jours',             'en'=>'2 Days',         'de'=>'2 Tage'],
    'tarif_km_1h'     => ['fr'=>'jusqu\'à 30 km',      'en'=>'up to 30 km',   'de'=>'bis 30 km'],
    'tarif_km_demij'  => ['fr'=>'jusqu\'à 120 km',     'en'=>'up to 120 km',  'de'=>'bis 120 km'],
    'tarif_km_1j'     => ['fr'=>'jusqu\'à 240 km',     'en'=>'up to 240 km',  'de'=>'bis 240 km'],
    'tarif_km_2j'     => ['fr'=>'jusqu\'à 480 km',     'en'=>'up to 480 km',  'de'=>'bis 480 km'],
    'tarif_populaire' => ['fr'=>'⭐ Le plus choisi',   'en'=>'⭐ Most popular','de'=>'⭐ Am beliebtesten'],

    /* ===== AVIS ===== */
    'avis_title'    => ['fr'=>'Nos clients',          'en'=>'Our customers',   'de'=>'Unsere Kunden'],
    'avis_title_em' => ['fr'=>'recommandent',         'en'=>'recommend us',    'de'=>'empfehlen uns'],
    'avis_count'    => ['fr'=>'Basé sur 16 avis Google','en'=>'Based on 16 Google reviews','de'=>'Basierend auf 16 Google-Bewertungen'],
    'avis_cta'      => ['fr'=>'Laisser un avis Google','en'=>'Leave a Google review','de'=>'Google-Bewertung hinterlassen'],

    /* ===== FOOTER ===== */
    'footer_desc'    => ['fr'=>'Votre chauffeur privé haut de gamme à Carcassonne et en Occitanie. Ponctualité, discrétion et confort.',
                         'en'=>'Your premium private chauffeur in Carcassonne and Occitanie. Punctuality, discretion and comfort.',
                         'de'=>'Ihr erstklassiger Privatfahrer in Carcassonne und Okzitanien. Pünktlichkeit, Diskretion und Komfort.'],
    'footer_services'   => ['fr'=>'Services',        'en'=>'Services',        'de'=>'Leistungen'],
    'footer_dest'       => ['fr'=>'Destinations',   'en'=>'Destinations',    'de'=>'Ziele'],
    'footer_infos'      => ['fr'=>'Informations',   'en'=>'Information',     'de'=>'Informationen'],
    'footer_legal'      => ['fr'=>'Mentions Légales','en'=>'Legal Notice',   'de'=>'Impressum'],
    'footer_privacy'    => ['fr'=>'Confidentialité', 'en'=>'Privacy',        'de'=>'Datenschutz'],
    'footer_copyright'  => ['fr'=>'Tous droits réservés','en'=>'All rights reserved','de'=>'Alle Rechte vorbehalten'],

    /* ===== CONTACT ===== */
    'contact_title'   => ['fr'=>'Réservez votre',    'en'=>'Book your',       'de'=>'Buchen Sie Ihren'],
    'contact_title_em'=> ['fr'=>'chauffeur privé',   'en'=>'private chauffeur','de'=>'Privatfahrer'],
    'contact_subtitle'=> ['fr'=>'Réponse garantie sous 2 heures.',
                          'en'=>'Guaranteed reply within 2 hours.',
                          'de'=>'Garantierte Antwort innerhalb von 2 Stunden.'],
    'contact_sent_title' => ['fr'=>'Message envoyé !','en'=>'Message sent!',   'de'=>'Nachricht gesendet!'],
    'contact_sent_desc'  => ['fr'=>'Nous vous répondons sous 2 heures.',
                              'en'=>'We will reply within 2 hours.',
                              'de'=>'Wir antworten innerhalb von 2 Stunden.'],
    'contact_back'       => ['fr'=>'Retour à l\'accueil','en'=>'Back to home','de'=>'Zurück zur Startseite'],
    'contact_error'      => ['fr'=>'Une erreur s\'est produite. Vérifiez les champs ou appelez-nous directement.',
                             'en'=>'An error occurred. Check the fields or call us directly.',
                             'de'=>'Ein Fehler ist aufgetreten. Überprüfen Sie die Felder oder rufen Sie uns an.'],
    'contact_zone'       => ['fr'=>'Zone de service',  'en'=>'Service area',   'de'=>'Servicegebiet'],
    'contact_zone_desc'  => ['fr'=>'Carcassonne, Castelnaudary & toute l\'Occitanie',
                             'en'=>'Carcassonne, Castelnaudary & all of Occitanie',
                             'de'=>'Carcassonne, Castelnaudary & ganz Okzitanien'],
    'contact_dispo'      => ['fr'=>'Disponibilité',    'en'=>'Availability',   'de'=>'Verfügbarkeit'],
    'contact_dispo_desc' => ['fr'=>'24h/24 · 7j/7 · 365j/an','en'=>'24/7 · 365 days','de'=>'24/7 · 365 Tage'],

    /* ===== MÉTA SEO ===== */
    'meta_home_title' => ['fr'=>'AUDE VTC — Chauffeur Privé Carcassonne & Occitanie | Tarif Fixe 24h/7j',
                          'en'=>'AUDE VTC — Private Chauffeur Carcassonne & Occitanie | Fixed Rate 24/7',
                          'de'=>'AUDE VTC — Privatfahrer Carcassonne & Okzitanien | Festpreis 24/7'],
    'meta_home_desc'  => ['fr'=>'Chauffeur privé VTC à Carcassonne. Transferts aéroports, gares, tourisme Occitanie. Mercedes hybride, tarif fixe, disponible 24h/7j.',
                          'en'=>'Private VTC chauffeur in Carcassonne. Airport, train station transfers, Occitanie tourism. Hybrid Mercedes, fixed rate, available 24/7.',
                          'de'=>'Privatfahrer VTC in Carcassonne. Flughafen- und Bahnhoftransfers, Okzitanien-Tourismus. Hybrid-Mercedes, Festpreis, 24/7 verfügbar.'],

    /* ===== PAGE PRESTATIONS (hub) ===== */
    'pp_meta_title'  => ['fr'=>'Prestations VTC à Carcassonne — Transferts, Tourisme, Événements | AUDE VTC',
                         'en'=>'VTC Services in Carcassonne — Transfers, Tourism, Events | AUDE VTC',
                         'de'=>'VTC-Leistungen in Carcassonne — Transfers, Tourismus, Events | AUDE VTC'],
    'pp_meta_desc'   => ['fr'=>'Toutes les prestations AUDE VTC : transferts aéroport et gare, circuits touristiques en Occitanie, mise à disposition pour événements. Chauffeur privé trilingue, tarif fixe, berline et van.',
                         'en'=>'All AUDE VTC services: airport and train station transfers, Occitanie sightseeing tours, chauffeur hire for events. Trilingual private driver, fixed rate, sedan and van.',
                         'de'=>'Alle Leistungen von AUDE VTC: Flughafen- und Bahnhoftransfers, Ausflüge in Okzitanien, Fahrzeug mit Fahrer für Veranstaltungen. Dreisprachiger Privatfahrer, Festpreis, Limousine und Van.'],
    'pp_eyebrow'     => ['fr'=>'Nos Prestations','en'=>'Our Services','de'=>'Unsere Leistungen'],
    'pp_h1'          => ['fr'=>'Un chauffeur privé pour','en'=>'A private chauffeur for','de'=>'Ein Privatfahrer für'],
    'pp_h1_em'       => ['fr'=>'chaque trajet','en'=>'every journey','de'=>'jede Fahrt'],
    'pp_lead'        => ['fr'=>'Transferts, tourisme, événements : AUDE VTC vous accompagne dans toute l\'Occitanie avec la même exigence de confort, de ponctualité et de discrétion.',
                         'en'=>'Transfers, tourism, events: AUDE VTC accompanies you throughout Occitanie with the same commitment to comfort, punctuality and discretion.',
                         'de'=>'Transfers, Tourismus, Events: AUDE VTC begleitet Sie durch ganz Okzitanien — mit demselben Anspruch an Komfort, Pünktlichkeit und Diskretion.'],

    'pp_aero_title'  => ['fr'=>'Transferts Aéroport','en'=>'Airport Transfers','de'=>'Flughafentransfers'],
    'pp_aero_desc'   => ['fr'=>'Toulouse Blagnac, Carcassonne, Montpellier, Perpignan, Bordeaux. Suivi de vol en temps réel, accueil avec panneau nominatif, tarif fixe sans surprise.',
                         'en'=>'Toulouse Blagnac, Carcassonne, Montpellier, Perpignan, Bordeaux. Real-time flight tracking, meet-and-greet with name sign, fixed rate with no surprises.',
                         'de'=>'Toulouse Blagnac, Carcassonne, Montpellier, Perpignan, Bordeaux. Echtzeit-Flugverfolgung, Empfang mit Namensschild, Festpreis ohne Überraschungen.'],
    'pp_aero_p1'     => ['fr'=>'Suivi de vol & attente incluse','en'=>'Flight tracking & waiting included','de'=>'Flugverfolgung & Wartezeit inklusive'],
    'pp_aero_p2'     => ['fr'=>'Panneau nominatif à l\'arrivée','en'=>'Name sign on arrival','de'=>'Namensschild bei Ankunft'],
    'pp_aero_p3'     => ['fr'=>'Tarif fixe connu à l\'avance','en'=>'Fixed rate known in advance','de'=>'Festpreis im Voraus bekannt'],
    'pp_aero_cta'    => ['fr'=>'Voir les transferts aéroport','en'=>'View airport transfers','de'=>'Flughafentransfers ansehen'],

    'pp_gare_title'  => ['fr'=>'Transferts Gare','en'=>'Train Station Transfers','de'=>'Bahnhoftransfers'],
    'pp_gare_desc'   => ['fr'=>'Carcassonne, Castelnaudary, Toulouse Matabiau, Montpellier, Sète, Béziers. Accueil sur le quai, suivi des horaires SNCF, ponctualité garantie.',
                         'en'=>'Carcassonne, Castelnaudary, Toulouse Matabiau, Montpellier, Sète, Béziers. Platform meet-and-greet, SNCF schedule tracking, guaranteed punctuality.',
                         'de'=>'Carcassonne, Castelnaudary, Toulouse Matabiau, Montpellier, Sète, Béziers. Empfang am Bahnsteig, Überwachung der SNCF-Fahrpläne, garantierte Pünktlichkeit.'],
    'pp_gare_p1'     => ['fr'=>'Suivi des horaires SNCF','en'=>'SNCF schedule tracking','de'=>'SNCF-Fahrplanverfolgung'],
    'pp_gare_p2'     => ['fr'=>'Accueil sur le quai','en'=>'Platform meet-and-greet','de'=>'Empfang am Bahnsteig'],
    'pp_gare_p3'     => ['fr'=>'Liaisons longue distance','en'=>'Long-distance connections','de'=>'Langstreckenverbindungen'],
    'pp_gare_cta'    => ['fr'=>'Voir les transferts gare','en'=>'View station transfers','de'=>'Bahnhoftransfers ansehen'],

    'pp_tour_title'  => ['fr'=>'Tourisme en Occitanie','en'=>'Tourism in Occitanie','de'=>'Tourismus in Okzitanien'],
    'pp_tour_desc'   => ['fr'=>'Cité de Carcassonne, Canal du Midi, vignobles du Languedoc, Pays Cathare. Circuits sur mesure commentés par un chauffeur trilingue passionné de la région.',
                         'en'=>'Cité de Carcassonne, Canal du Midi, Languedoc vineyards, Cathar Country. Tailor-made tours narrated by a trilingual driver passionate about the region.',
                         'de'=>'Cité de Carcassonne, Canal du Midi, Weinberge des Languedoc, Katharerland. Maßgeschneiderte Touren, kommentiert von einem dreisprachigen, regionsbegeisterten Fahrer.'],
    'pp_tour_p1'     => ['fr'=>'Circuits personnalisés à la journée','en'=>'Custom full-day tours','de'=>'Individuelle Tagestouren'],
    'pp_tour_p2'     => ['fr'=>'Chauffeur trilingue FR · EN · DE','en'=>'Trilingual driver FR · EN · DE','de'=>'Dreisprachiger Fahrer FR · EN · DE'],
    'pp_tour_p3'     => ['fr'=>'Patrimoine & œnotourisme','en'=>'Heritage & wine tourism','de'=>'Kulturerbe & Weintourismus'],
    'pp_tour_cta'    => ['fr'=>'Voir les circuits tourisme','en'=>'View sightseeing tours','de'=>'Touren ansehen'],

    'pp_evt_title'   => ['fr'=>'Événements & Mise à Disposition','en'=>'Events & Chauffeur Hire','de'=>'Events & Fahrzeug mit Fahrer'],
    'pp_evt_desc'    => ['fr'=>'Mariages, séminaires, congrès, soirées de gala. Véhicule et chauffeur à votre disposition à la journée ou à l\'heure, pour vous et vos invités.',
                         'en'=>'Weddings, seminars, conferences, gala evenings. Vehicle and chauffeur at your disposal by the hour or day, for you and your guests.',
                         'de'=>'Hochzeiten, Seminare, Kongresse, Galaabende. Fahrzeug und Fahrer stunden- oder tageweise zu Ihrer Verfügung — für Sie und Ihre Gäste.'],
    'pp_evt_p1'      => ['fr'=>'Mise à disposition à la journée','en'=>'Full-day chauffeur hire','de'=>'Tageweise Bereitstellung'],
    'pp_evt_p2'      => ['fr'=>'Berline ou van jusqu\'à 7 places','en'=>'Sedan or van up to 7 seats','de'=>'Limousine oder Van bis 7 Plätze'],
    'pp_evt_p3'      => ['fr'=>'Discrétion & prestige','en'=>'Discretion & prestige','de'=>'Diskretion & Prestige'],
    'pp_evt_cta'     => ['fr'=>'Voir les événements','en'=>'View events','de'=>'Events ansehen'],

    'pp_eng_eyebrow' => ['fr'=>'Pourquoi AUDE VTC','en'=>'Why AUDE VTC','de'=>'Warum AUDE VTC'],
    'pp_eng_title'   => ['fr'=>'L\'exigence du','en'=>'The art of','de'=>'Der Anspruch des'],
    'pp_eng_title_em'=> ['fr'=>'sur-mesure','en'=>'bespoke service','de'=>'Maßgeschneiderten'],
    'pp_eng_lead'    => ['fr'=>'Une alternative haut de gamme au taxi, pensée pour les voyageurs qui attendent ponctualité, confort et attention au détail.',
                         'en'=>'A premium alternative to the taxi, designed for travellers who expect punctuality, comfort and attention to detail.',
                         'de'=>'Eine erstklassige Alternative zum Taxi, für Reisende, die Pünktlichkeit, Komfort und Liebe zum Detail erwarten.'],
    'pp_eng1_t'      => ['fr'=>'Ponctualité garantie','en'=>'Guaranteed punctuality','de'=>'Garantierte Pünktlichkeit'],
    'pp_eng1_d'      => ['fr'=>'Nous anticipons trafic, vols et horaires SNCF pour être là avant vous.','en'=>'We anticipate traffic, flights and SNCF schedules to be there before you.','de'=>'Wir berücksichtigen Verkehr, Flüge und SNCF-Fahrpläne, um vor Ihnen da zu sein.'],
    'pp_eng2_t'      => ['fr'=>'Tarif fixe transparent','en'=>'Transparent fixed rate','de'=>'Transparenter Festpreis'],
    'pp_eng2_d'      => ['fr'=>'Le prix est connu et validé à la réservation. Aucun frais caché.','en'=>'The price is known and confirmed at booking. No hidden fees.','de'=>'Der Preis steht bei der Buchung fest. Keine versteckten Kosten.'],
    'pp_eng3_t'      => ['fr'=>'Chauffeur trilingue','en'=>'Trilingual driver','de'=>'Dreisprachiger Fahrer'],
    'pp_eng3_d'      => ['fr'=>'Français, anglais, allemand — pour accueillir une clientèle internationale.','en'=>'French, English, German — to welcome an international clientele.','de'=>'Französisch, Englisch, Deutsch — für internationale Gäste.'],
    'pp_eng4_t'      => ['fr'=>'Véhicule hybride','en'=>'Hybrid vehicle','de'=>'Hybridfahrzeug'],
    'pp_eng4_d'      => ['fr'=>'Berline et van récents, faible empreinte carbone, trajet silencieux.','en'=>'Recent sedan and van, low carbon footprint, silent ride.','de'=>'Neue Limousine und Van, geringer CO₂-Ausstoß, leise Fahrt.'],

    'pp_cta_title'   => ['fr'=>'Un projet de trajet en tête ?','en'=>'Have a journey in mind?','de'=>'Eine Fahrt im Sinn?'],
    'pp_cta_desc'    => ['fr'=>'Décrivez-nous votre besoin, nous vous répondons avec un tarif précis — 24h/7j.','en'=>'Tell us what you need and we\'ll reply with an exact rate — 24/7.','de'=>'Beschreiben Sie uns Ihren Bedarf, wir antworten mit einem genauen Preis — 24/7.'],
    'pp_cta_devis'   => ['fr'=>'Demander un devis','en'=>'Request a quote','de'=>'Angebot anfragen'],

    ]; // fin $strings

    $result = [];
    foreach ($strings as $key => $langs) {
        $result[$key] = $langs[$lang] ?? $langs['fr'];
    }
    return $result;
}
