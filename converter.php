<!DOCTYPE html>
<html lang="pt" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Números romanos</title>
</head>
<body>
    <?php
    if(isset($_GET['number'])){
        $number=$_GET['number'];
    }else{
        $numer=null;
    }
    ?>
    <form class="" action="index.php" method="get">
        <label for="">Digite o número decimal</label><br>
        <input type="text" name="number" value="<?php print $number; ?>">
        <button type="submit">Converter</button>
    </form>
    <?php
    require 'vendor/autoload.php';
    $converter = new CrazyCodr\Converters\Roman();
    if($number){
        if(is_numeric($number)){
            print $number.' = '.$converter->toRoman($number);
        }else{
            print $number.' = '.$converter->fromRoman($number);
        }
    }
    ?>
</body>
</html>
