<?php

// tableau des donnée pour remplir la base de donnée grace à
// database/seeds/ServicesTableSeeder.php

return [
    // HAMMAM ---------------------------------------------------------------------------------
    [
        'nom' => 'Hammam + savon noir',
        'description' => "Hammam sur banc de pierre chaude et bulles de savon noir au miel.",
        'prix' => '32',
        'categorie_id' => '1'
    ],
    [
        'nom' => 'Rituel complet du hammam',
        'description' => "Hammam + savon noir Friction gommante au gant de kessa Enveloppement Rinçage à l'eau de rose",
        'prix' => '82',
        'categorie_id' => '1'
    ],

    // UV -------------------------------------------------------------------------------------
    [
        'nom' => 'UV',
        'description' => "Temps 15 min",
        'prix' => '15',
        'categorie_id' => '2'
    ],
    [
        'nom' => 'UV',
        'description' => "Temps 30 min",
        'prix' => '30',
        'categorie_id' => '2'
    ],
    [
        'nom' => 'UV',
        'description' => "Temps 45 min",
        'prix' => '45',
        'categorie_id' => '2'
    ],
    [
        'nom' => 'UV',
        'description' => "Temps 1h",
        'prix' => '60',
        'categorie_id' => '2'
    ],

    // Soins du Visage ------------------------------------------------------------------------
    [
        'nom' => 'Soin éclat visage',
        'description' => "30 à 45min, Nettoyage, gommage, masque, crème",
        'prix' => '50',
        'categorie_id' => '3'
    ],
    [
        'nom' => 'Soin D-Tox',
        'description' => "Incontounable nettoyage profond de la peau, pour l’oxygéner et La dinaminser. Le peau retrouve tout son éclat",
        'prix' => '105',
        'categorie_id' => '3'
    ],
    [
        'nom' => 'Soin pureté optimale',
        'description' => "Temps : 1h15 à 1h30min, traitement de choc sébo-régulateur pour les peaux présentants un excés de sébum",
        'prix' => '105',
        'categorie_id' => '3'
    ],
    [
        'nom' => 'Soin Dermo Peeling',
        'description' => "(soin rénovateur de peau) Gomme les signes de l’âge, apporte de l’éclat, atténue les taches brunes",
        'prix' => '120',
        'categorie_id' => '3'
    ],
    [
        'nom' => 'Soin désensibilisant',
        'description' => "anti rougeurs 1H15 à 1H30min. Lutte contre les rougeurs diffuses, raffraîchit, appaise, décongestionne et désensibilise",
        'prix' => '105',
        'categorie_id' => '3'
    ],
    [
        'nom' => 'Soin Lifting Rafermissant à la vitamine C',
        'description' => "Temps : 1h15 à 1h30min, restructure et retend visiblement la peau. Celle-ci retrouve tonnicité virtalité et énergie",
        'prix' => '105',
        'categorie_id' => '3'
    ],
    [
        'nom' => 'Soin Beauté Lifting',
        'description' => "Temps : 1h15 à 1h30min, soin lissant et rafermissant au pro-collagène",
        'prix' => '105',
        'categorie_id' => '3'
    ],
    [
        'nom' => 'Soin Age Repair',
        'description' => "Temps 1h15 à 1h30min, soin nettoyant et traitant contre les signes de l’âge",
        'prix' => '135',
        'categorie_id' => '3'
    ],
    [
        'nom' => 'CatioLift',
        'description' => "Temps : 45min, soin effet liftant par « gymnastique fasciale – permet d’obtenir un « effet lifting ». Résultats spectaculaires dès le premier soin. L’ovale du visage se redessine, les traits sont lissés. La qualité de la peau s’améliore. Elle est plus ferme, plus élastique",
        'prix' => '95',
        'categorie_id' => '3'
    ],
    [
        'nom' => 'CatioVital',
        'description' => "Temps : 1h00 à 1h15min, methode de soin unique traitant en profondeur les effets de chaque type de peau avec un triple effet : effet sauna, effet ionisation, effet bien-être du massage aux huiles essentielles",
        'prix' => '85',
        'categorie_id' => '3'
    ],
    [
        'nom' => 'CatioVital double jeunesse',
        'description' => "Temps : 1h15 à 1h30min, tous les effets du catiovital doublé d’un véritable soin anti-âge",
        'prix' => '105',
        'categorie_id' => '3'
    ],
    [
        'nom' => 'Soins contour des Yeux',
        'description' => "Eye Repair (rides, poches, cernes). Regard plus jeune et contour des yeux défatigué",
        'prix' => '42',
        'categorie_id' => '3'
    ],
    [
        'nom' => 'Soins contour des Yeux',
        'description' => "Décongestionnant",
        'prix' => '29',
        'categorie_id' => '3'
    ],
    [
        'nom' => 'Soin raffermissant âge firming',
        'description' => "Peau senssiblement plus ferme, temps 1h15 à 1h30min",
        'prix' => '120',
        'categorie_id' => '3'
    ],

    // Main-Pied ------------------------------------------------------------------------------
    [
        'nom' => "Beauté des mains à l'Orientale",
        'description' => "Temps 45mm à 1h Limage et polissage des ongles Bain aux boutons de roses Brossage au savon noir Gommage Soins du contour de l'ongle Effleurage au baume de karité Pose de base ou vernis",
        'prix' => '45',
        'categorie_id' => '4'
    ],
    [
        'nom' => "Beauté des mains à l'Orientale + option",
        'description' => "Avec vernis semi-permanent",
        'prix' => '65',
        'categorie_id' => '4'
    ],
    [
        'nom' => "Beauté des pieds à l'Orientale",
        'description' => "Temps 45mm à 1h Installé dans un fauteuil massant Limage et polissage des ongles Balnéo avec jets de massage Brossage au savon noir Gommage Effleurage Pose de base ou vernis",
        'prix' => '55',
        'categorie_id' => '4'
    ],
    [
        'nom' => "Beauté des pieds à l'Orientale + option",
        'description' => "Avec vernis semi-permanent",
        'prix' => '75',
        'categorie_id' => '4'
    ],
    [
        'nom' => 'Vernis',
        'description' => "Pose de vernis semi-permanent",
        'prix' => '30',
        'categorie_id' => '4'
    ],
    [
        'nom' => 'Vernis + option',
        'description' => "Limage mise en forme",
        'prix' => '35',
        'categorie_id' => '4'
    ],

    // Épilations -----------------------------------------------------------------------------
    [
        'nom' => 'Demi jambes',
        'description' => "Résine",
        'prix' => '25',
        'categorie_id' => '5'
    ],
    [
        'nom' => 'Demi jambes',
        'description' => "Orientale",
        'prix' => '29',
        'categorie_id' => '5'
    ],
    [
        'nom' => 'Jambes entières',
        'description' => "Résine",
        'prix' => '34',
        'categorie_id' => '5'
    ],
    [
        'nom' => 'Jambes entières',
        'description' => "Orientale",
        'prix' => '42',
        'categorie_id' => '5'
    ],
    [
        'nom' => 'Aisselles',
        'description' => "Résine",
        'prix' => '14',
        'categorie_id' => '5'
    ],
    [
        'nom' => 'Aisselles',
        'description' => "Orientale",
        'prix' => '18',
        'categorie_id' => '5'
    ],
    [
        'nom' => 'Maillot',
        'description' => "Résine",
        'prix' => '14',
        'categorie_id' => '5'
    ],
    [
        'nom' => 'Maillot',
        'description' => "Orientale",
        'prix' => '18',
        'categorie_id' => '5'
    ],
    [
        'nom' => 'Maillot Brésilien',
        'description' => "Résine",
        'prix' => '19',
        'categorie_id' => '5'
    ],
    [
        'nom' => 'Maillot Brésilien',
        'description' => "Orientale",
        'prix' => '29',
        'categorie_id' => '5'
    ],
    [
        'nom' => 'Maillot Intégral',
        'description' => "Orientale",
        'prix' => '40',
        'categorie_id' => '5'
    ],
    [
        'nom' => 'Demi bras',
        'description' => "Résine",
        'prix' => '25',
        'categorie_id' => '5'
    ],
    [
        'nom' => 'Demi bras',
        'description' => "Orientale",
        'prix' => '29',
        'categorie_id' => '5'
    ],
    [
        'nom' => 'Lèvres',
        'description' => "Résine",
        'prix' => '11',
        'categorie_id' => '5'
    ],
    [
        'nom' => 'Lèvres',
        'description' => "Orientale",
        'prix' => '14',
        'categorie_id' => '5'
    ],
    [
        'nom' => 'Sourcils',
        'description' => "Résine",
        'prix' => '12',
        'categorie_id' => '5'
    ],
    [
        'nom' => 'Sourcils',
        'description' => "Orientale",
        'prix' => '14',
        'categorie_id' => '5'
    ],
    [
        'nom' => 'Dos homme',
        'description' => "Résine",
        'prix' => '33',
        'categorie_id' => '5'
    ],
    [
        'nom' => 'Dos homme',
        'description' => "Orientale",
        'prix' => '40',
        'categorie_id' => '5'
    ],
    [
        'nom' => 'Torse homme',
        'description' => "Résine",
        'prix' => '26',
        'categorie_id' => '5'
    ],
    [
        'nom' => 'Torse homme',
        'description' => "Orientale",
        'prix' => '29',
        'categorie_id' => '5'
    ],
    [
        'nom' => 'Teinture de Cils',
        'description' => "Teinte de cils",
        'prix' => '30',
        'categorie_id' => '5'
    ],
    [
        'nom' => 'Permanente de Cils',
        'description' => "La permanente des cils agrandit l'oeil et ouvre ainsi le regard",
        'prix' => '58',
        'categorie_id' => '5'
    ],
    [
        'nom' => 'Maquillage jour',
        'description' => "Maquillage",
        'prix' => '29',
        'categorie_id' => '5'
    ],
    [
        'nom' => 'Maquillage Soir',
        'description' => "Maquillage",
        'prix' => '40',
        'categorie_id' => '5'
    ],

    // Massages -------------------------------------------------------------------------------
    [
        'nom' => 'Le voyages de rêve',
        'description' => "Temps : 1h15 à 1h30 (30mm hammam + exfoliations + 30mm modelage du monde)",
        'prix' => '110',
        'categorie_id' => '6'
    ],
    [
        'nom' => 'Le voyages au bout du monde',
        'description' => "Temps : 1h45 à 2h (30mm hammam + exfoliations + 1h modelage du monde)",
        'prix' => '140',
        'categorie_id' => '6'
    ],
    [
        'nom' => 'Le voyages de Luxe',
        'description' => "Temps : 2h45 à 3h (30mm hammam + exfoliation + 1h de modelage du monde + soins du visage éclat)",
        'prix' => '190',
        'categorie_id' => '6'
    ],
    [
        'nom' => 'Le voyages de Luxe en Orient',
        'description' => "Temps : 2h45 à 3h (rituel complet du hammam + 1h de modelage du monde + soins du visage éclat)",
        'prix' => '195',
        'categorie_id' => '6'
    ],
    [
        'nom' => 'Le voyages de rêve Duo',
        'description' => "Temps : 1h15 à 1h30 (30mm hammam + exfoliations + 30mm modelage du monde) à deux",
        'prix' => '198',
        'categorie_id' => '6'
    ],
    [
        'nom' => 'Le voyages au bout du monde Duo',
        'description' => "Temps : 1h45 à 2h (30mm hammam + exfoliations + 1h modelage du monde) à deux",
        'prix' => '252',
        'categorie_id' => '6'
    ],
    [
        'nom' => 'Le voyages de Luxe Duo',
        'description' => "Temps : 2h45 à 3h (30mm hammam + exfoliation + 1h de modelage du monde + soins du visage éclat) à deux",
        'prix' => '342',
        'categorie_id' => '6'
    ],
    [
        'nom' => 'Le voyages de Luxe en Orient Duo',
        'description' => "Temps : 2h45 à 3h (rituel complet du hammam + 1h de modelage du monde + soins du visage éclat) à deux",
        'prix' => '261',
        'categorie_id' => '6'
    ],
    [
        'nom' => 'Ceremonie du Printemps',
        'description' => "Temps : 1h45min, cette cérémonie commence par un gommage suivi d'un baume enveloppant puis 1h de massage bien-être personnalisé",
        'prix' => '145',
        'categorie_id' => '6'
    ],
    [
        'nom' => 'Gommage du corps',
        'description' => "Rassoul, chocolat, karité (parfums à choisir), froid (jambes légères)",
        'prix' => '45',
        'categorie_id' => '6'
    ],
    [
        'nom' => 'Drainage',
        'description' => "esthétique du corps",
        'prix' => '70',
        'categorie_id' => '6'
    ],
    [
        'nom' => 'Stone Massage bien-être',
        'description' => "aux pierres chaudes 1h30min",
        'prix' => '100',
        'categorie_id' => '6'
    ],
    [
        'nom' => 'Massage bien-être 4 Mains',
        'description' => "Temps : 45min",
        'prix' => '100',
        'categorie_id' => '6'
    ],
    [
        'nom' => 'Massage bien-être',
        'description' => "Temps : 30min",
        'prix' => '40',
        'categorie_id' => '6'
    ],
    [
        'nom' => 'Massage bien-être',
        'description' => "Temps : 1h",
        'prix' => '70',
        'categorie_id' => '6'
    ],
    [
        'nom' => 'Massage bien-être',
        'description' => "Temps : 1h30min",
        'prix' => '100',
        'categorie_id' => '6'
    ],
    [
        'nom' => 'Massage bien-être',
        'description' => "Temps : 2h",
        'prix' => '130',
        'categorie_id' => '6'
    ],
    [
        'nom' => 'Bien-être du dos',
        'description' => "Temps 30min",
        'prix' => '40',
        'categorie_id' => '6'
    ],
    [
        'nom' => 'Les Exfoliations',
        'description' => "Sucre et mangues
        Sucre pétilliant à la mandarine Sable noir et vanille Pierre d'Alun (parfums à choisir) Sel de mer morte",
        'prix' => '55',
        'categorie_id' => '6'
    ],

    // Cellu M6 -------------------------------------------------------------------------------
    [
        'nom' => 'Cellu M6',
        'description' => "1 Séance",
        'prix' => '55',
        'categorie_id' => '7'
    ],
    [
        'nom' => 'Cellu M6',
        'description' => "12 Séances",
        'prix' => '576',
        'categorie_id' => '7'
    ],
    [
        'nom' => 'Cellu M6',
        'description' => "20 Séances",
        'prix' => '900',
        'categorie_id' => '7'
    ],
];
