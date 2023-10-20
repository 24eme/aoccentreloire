<?php
$aoc_contacts = array(
    "chateaumeillant" => array(
        "title" => "Syndicat De Gestion Des Vins De Chateaumeillant",
        "adresse" => "Place de la Mairie 18370 Chateaumeillant",
        "contact" => "06 62 49 64 25 / sdg.vins.chateaumeillant@gmail.comaoc_contacts.png",
        "logo" => "chateaumeillant.png",
    ),
    "giennois" => array(
        "title" => "Association Viticole des Coteaux du Giennois",
        "adresse" => "6 rue de la Mairie 58200 Saint-Père",
        "contact" => "07.85.51.77.15 / ctx.du.giennois@gmail.com",
        "logo" => "giennois.png",
    ),
    "menetousalon" => array(
        "title" => "Union Viticole de Menetou-Salon",
        "adresse" => "21 rue de la Mairie 18510 Menetou-Salon",
        "contact" => "02.48.64.87.26 / menetousalon-vins@wanadoo.fr",
        "logo" => "menetousalon.png",
    ),
    "pouilly" => array(
        "title" => "Syndicat Viticole de l'Aire AOC de Pouilly",
        "adresse" => "Caveau des vignerons - 2 rue des Écoles 58150 Pouilly-sur-Loire",
        "contact" => "pouillyfume@wanadoo.fr",
        "logo" => "pouilly.png",
    ),
    "oivc" => array(
        "title" => "Organisme d'Inspection des Vins du Centre",
        "adresse" => "9 route de Chavignol 18300 Sancerre",
        "contact" => "0248542988",
        "logo" => "oivc.png",
    ),
    "quincy" => array(
        "title" => "Syndicat Viticole de Quincy",
        "adresse" => "4bis route de Cerbois 18120 Quincy",
        "contact" => "02 48 71 36 78 - svquincy@outlook.fr",
        "logo" => "quincy.png",
    ),
    "reuilly" => array(
        "title" => "Syndicat Viticole de Reuilly",
        "adresse" => "24 rue Nationale 36260 Reuilly",
        "contact" => "09 62 54 08 66 / reuillysyndicatviticole@hotmail.com",
        "logo" => "reuilly.png",
    ),
    "sancerre" => array(
        "title" => "Union Viticole Sancerroise",
        "adresse" => "9 route de Chavignol 18300 Sancerre",
        "contact" => "02 48 78 51 03 / contactuvs@sancerreaop.fr",
        "logo" => "sancerre.png",
    ),
);

$aoc_documents = array();

$type_documents = array(
        "TEXTEOFFICIEL" => "Textes officiels",
        "FORMULAIREDECLARATIF" =>"Formulaires déclaratifs",
        "AUTREDOCUMENT" => "Autres documents",
);

foreach($aoc_contacts as $aoc => $details) {
    $docs = array();
    global $docs;
    foreach (scandir('documents/'.$aoc) as $file) {
        if (preg_match('/([0-9-]*)_([A-Z]*)_(.*)(.pdf|.doc)/', $file, $m)) {
            if (isset($type_documents[$m[2]])) {
                $docs[] = array($type_documents[$m[2]], $m[1], $m[3], $m[0]);
            }
        }
    }
    uksort($docs, function ($b, $a) { global $docs;return strcmp($docs[$a][0].$docs[$a][1].$docs[$a][2], $docs[$b][0].$docs[$b][1].$docs[$b][2]); } );
    $aoc_documents[$aoc] = $docs;
}
