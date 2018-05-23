<?php
$link = mysql_connect('mysql08.redehost.com.br', 'seven', 'Senha@123');
if (!$link) {
    die('falha : ' . mysql_error());
}
// make foo the current db
$db_selected = mysql_select_db('seven', $link);
if (!$db_selected) {
    die ('falha: ' . mysql_error());
}
?>