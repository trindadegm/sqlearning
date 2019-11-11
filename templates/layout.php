<!DOCTYPE html>
<html lang="pt_BR">
	<head>
		<meta charset="utf8">
		<title>SQLearning</title>
	</head>

	<body>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/templates/header.php');

if (isset($page_data)) {
	echo $page_data->get_content();
} else {
	echo '<p>Algo deu errado</p>';
}

include($_SERVER['DOCUMENT_ROOT'].'/templates/footer.php');
?>
	</body>
</html>
