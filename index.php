<html>
	<head>
		<title>Калькулятор</title>
		<h1>Вычисление биссектрисы прямоугольного треугольника</h1>
		<link rel="stylesheet" href="calc.css"/>
	</head>
	<body>
		<?php
			if (isset($_GET['side1'])) {
				$side1 = $_GET['side1'];
			} else {
				$side1 = '';
			}
			if (isset($_GET['side2'])) {
				$side2 = $_GET['side2'];
			} else {
				$side2 = '';
			}
			if (isset($_GET['side3'])) {
				$side3 = $_GET['side3'];
			} else {
				$side3 = '';
			}
		?>
		
		<div class= "calcul">
		<form method="GET" action="index.php">
			<input type="text" name="side1"  placeholder="Введите значение стороны 1" value="<?= htmlspecialchars($side1) ?>">
			<input type="text" name="side2" placeholder="Введите значение стороны 2" value="<?= htmlspecialchars($side2) ?>">
			<input type="text" name="side3" placeholder="Введите значение основания" value="<?= htmlspecialchars($side3) ?>">
			<input type="submit" value="Вычислить">
		</form>
		
		<?php	
			if ( $side1 != '' && $side2 != '' && $side3 != '') {
				if (!(INT)($side1) || !(INT)($side2) || !(INT)($side3)){
					echo '<div class="error">';
					$result='Допустимо вводить только числовые значения!';
					echo "Ошибка: $result";
					echo '</div>';
				}elseif ($side1 <=0 || $side2 <=0 || $side3 <=0){
					echo '<div class="error">';
					$result='Значение стороны не может быть отрицательным или равным нулю!';
					echo  "Ошибка: $result";
					echo '</div>';
				}elseif((INT)($side1) && (INT)($side2) && (INT)($side3) > 0){
					$result = (sqrt($side1*$side2*($side1+$side2+$side3)*($side1+$side2-$side3))/($side1+$side2));
					echo  'Биссектриса='. number_format($result,1,',',' ');
				}	
			}
		?>
			<p><img width="500" height="300" src="pic1.png"/> </p>
	</body>
</html>