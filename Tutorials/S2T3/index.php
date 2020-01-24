<?php
// PHP Application using variabeles
$firstName = "James";
$lastName = "Harrison";
$helloText = "Hello " . $firstName;

$x = 11;
$y = 2;
$mathsText = $x + $y;

$a = 1;
$b = "1";

$mixedText = $a + $b;
$mixedText .= "<br/>";
$mixedText .= $a . $b;

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>S2T3</title>
</head>


<body>

	<section>

		<h2>PHP Data Test #1</h2>
		<p><?php  echo $helloText;   ?></p>

		<!-- PHP Echo sort tags -->
		<p><?=$helloText?></p>

	</section>

	<section>
		<h2>PHP Data Test #2</h2>

		<p><?=$mathsText?></p>

	</section>

	<section>
		<h2>PHP Data Test #3</h2>

		<p><?=$mixedText?></p>

	</section>

	<section>
		<h2>PHP Data Test #4</h2>

		<p><?= $a+$a.$b?></p>
		<p><?= ($a+$a).$b?></p>
		<p><?= $a+($a.$b)?></p>
		

	</section>


</body>
</html>
