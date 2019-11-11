<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/php/utils.php');

$page_data = new page('<h1>This is the content</h1>');

require($_SERVER['DOCUMENT_ROOT'].'/templates/layout.php');
?>
