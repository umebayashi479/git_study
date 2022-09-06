<?php
$animal = array("犬", "猫", "カワウソ");
?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
</head>
<body>
<?php
foreach ($animal as $value) :
	echo $value . '<br>';
endforeach;
?>
</body>
</html>
