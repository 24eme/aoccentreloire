<?php
$region = array_shift(explode('.', preg_replace('/https.../', '', $_GET['service']) ));
$region = preg_replace('/[^0-9a-z]/', '', $region);
if ($region == 'viticonnect') {
        $region = str_replace('igp', '', strtolower(array_pop(explode('/', $_GET['service']))));
}
if (!$region) {
	$region = 'confederation';
}
header('Location: /images/logos/logo_igp'.$region.'.png');
