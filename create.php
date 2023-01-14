<?php 
    if (isset($_POST['submit'])) {
        
        $imgplant = $_POST['plantImg'];
        $nameplant = $_POST['plantName'];
        $price = $_POST['plantPrice'];

        $xml = simplexml_load_file("data.xml");

        $lastEl = $xml->item[($xml->count()) - 1];

        $newPlant = $xml->addChild('item','');
        $newPlant->addChild('img', $imgplant);
        $newPlant->addChild('name', $nameplant);
        $newPlant->addChild('price', $price);
        $newPlant->addAttribute('id', $lastEl['id'] + 1);

        $xml->saveXML('data.xml');
        echo '<script>
        alert("Новый товар успешно добавлен!")
        </script>';

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Товар</title>
</head>
<body>
    <form action="#" method="POST">
        <input type="text" name="plantImg" placeholder="Адрес изображения в папке (с кавычками)">
        <br>
        <br>
        <input type="text" name="plantName" placeholder="Название растения">
        <br>
        <br>
        <input type="text" name="plantPrice" placeholder="Цена (формат: IDR 0.000)">
        <br>
        <br>
        <button type="submit" name="submit">Отправить</button>
    </form>

    <br>
    <a href="index.php">Назад</a>
</body>
</html>
