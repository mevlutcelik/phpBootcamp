<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Ödevi</title>
</head>

<body>
    <form action="" method="post">
        <label for="number">Number</label>
        <input type="number" name="number" placeholder="Number">
        <button type="submit">Sent</button>
    </form>
</body>

</html>

<?php

function check($value)
{
    $firstValue = $value;
    if ($value == "") {
        $result = "Değer boş olamaz.";
    } else {
        if ($value % 3 == 0) {
            $result = "Girilen değer 3 ile bölünebiliyor.";
        } else {
            $value++;
            while ($value % 3 != 0) {
                $value++;
            }
            $result = "<b>Girilen Sayı : " . $firstValue . "</b><br> Girdiğiniz sayı 3 ile bölünemez. Bölünebilecek ilk sayı :" . $value;
        }
    }
    return $result;
}

echo check($_POST['number']);
?>