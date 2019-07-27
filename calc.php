<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Калькулятор</title>
</head>
<body>
<?php
$x = false;
$y = false;
$x = $_GET['x'];
$y = $_GET['y'];
$operand = $_GET['operand'];
?>
<form>
    <input name="x" pattern="[\d+\.{0-1}]+$" value="<?=$x?>">
    <select name="operand">
        <option>Выбор операции</option>
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    <input name="y" pattern="[\d+\.{0-1}]+$" value=<?=$y?>>
    <button type="submit">Равно</button>
<?php
if ($operand == '+') {
echo 'Сумма равна = ' . ($x + $y);
} elseif ($operand == '-'){
echo 'Разность  равна = ' . ($x - $y);
} elseif ($operand == '*'){
echo 'Произведение равно = ' . ($x * $y);
} elseif ($operand == '/'){
if (0 == $y){
echo 'На ноль делить нельзя!';
} else {
    echo 'Частное равно = ' . ($x / $y);
}
} else {
echo 'Заполните формы и выберете операцию';
}
?>
</form>
</body>
</html>