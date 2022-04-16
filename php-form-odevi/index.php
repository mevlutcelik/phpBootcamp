<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Ödevi</title>
    <style>
        * {
            font-family: system-ui, sans-serif
        }

        body {
            margin: 2rem;
        }

        input {
            background: initial;
            border: 1px solid rgba(0, 0, 0, 0.1);
            font-size: 0.875rem;
            padding: 0.5rem 0.75rem;
            outline: 0;
            margin-left: 1rem;
            border-radius: 0.5rem;
        }

        button {
            border: 0;
            outline: 0;
            cursor: pointer;
            background-color: #1a73e8;
            color: #fff;
            padding: 0.5rem 0.75rem;
            border-radius: 0.5rem;
            margin-left: 0.5rem;
        }
    </style>
</head>

<body>

    <?php
    function message($str = "", $type = "message")
    {
    ?>
        <div style="color: #fff;padding: 1rem;margin-bottom: 1rem;border-radius: 0.5rem;font-family: system-ui, sans-serif;background-color:<?php echo $type === "error" ? "#f44336" : "#1a73e8"; ?>"><?php echo $str; ?></div>
    <?php
    }
    if (isset($_POST["number"])) {
        $number = @$_POST["number"];
        if ($number === "") {
            message("Lütfen boş bırakmayın!", "error");
        } else {
            if ($number % 3 === 0) {
                message("${number} sayısı 3 ile tam bölünüyor");
            } else {
                $afterNum = $number;
                $afterNum++;
                while ($afterNum % 3 !== 0) {
                    $afterNum++;
                }
                message("${number} sayısı 3 ile tam bölünmüyor. 3 ile ilk bölünecek sayı: ${afterNum}");
            }
        }
    }
    ?>

    <form action="" method="post">
        <label for="number">Sayı girin</label>
        <input type="number" name="number" <?php if(isset($_POST["number"])){echo 'value="'. $_POST["number"].'"';} ?> placeholder="Sayı girin...">
        <button type="submit">Gönder</button>
    </form>
</body>

</html>

<?php

/*function check($value)
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
if(isset($_POST)){
    check(@$_POST['number']);
}*/
?>