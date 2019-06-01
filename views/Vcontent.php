<?php
$sql = "SELECT content FROM pages WHERE id='{$_GET['page']}'";
$content= db($sql);

if ($content[0]['content']=="Таблица Пифагора") {
    echo $content[0]['content'];
    ?>
    <form method="post">
        Введите число строк:
        <input type="text" name="tr">
        Введите число столбцов:
        <input type="text" name="td">
        <input type="submit" value="Нарисовать таблицу">
    </form>
    <div id="pifagor">
    <?php

        pifagor($_POST['tr'],$_POST['td']);

    echo "</div>";
    }
    else
    {

        echo $content[0]['content'];
    }

