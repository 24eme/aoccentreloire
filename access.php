<?php

$service = $_GET['service'];
$host = explode('/', $service)[2];

if ($host) {
    switch ($_GET['action']) {
        case 'mdpoublie':
            header("Location: https://".$host."/mot_de_passe_oublie");
            exit;
        case 'creation':
            header("Location: https://".$host."/teledeclarant/code_creation");
            exit;
    }
}
header("Location: https://login.igp.vins.24eme.fr/?service=".$service);
exit;