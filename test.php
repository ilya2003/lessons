<form method="post">
    Число 1<input type="text" name="ch1">
    Число 2<input type="text" name="ch2">
    <input type="submit" value="Сложить">
</form>
<?php
$a=$_POST['ch1'];
$v=$_POST['ch2'];

$summ=$a+$v;
echo "Сумма числа ".$a." и числа ".$v." равна ".$summ;

