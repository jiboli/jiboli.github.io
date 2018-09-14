<?php
// Chamada recursiva contra bisbilhoteiro

$url = '../';
header( 'Request-URI: '.$url );
header( 'Content-Location: '.$url );
header( 'Location: '.$url );
exit();
?>
