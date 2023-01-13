<?php

$xml = simplexml_load_file("data.xml");

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'];
    
    foreach ($xml->item as $item) {
        if ($item['id'] == $id) {
            $img = $item->img;
            $name = $item->name;
            $price = $item->price;
            break;
        }
    }
} else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    foreach ($xml->item as $item) {
        if ($item['id'] == $id) {
            $item->img=$_POST['plantImg'];
            $item->name=$_POST['plantName'];
            $item->price=$_POST['plantPrice'];
        }
    }

    $xml->saveXML('data.xml');
    echo '<script>
    alert("Товар успешно обновлен.")
    </script>';
    header('location:index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Обновить</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="plantImg" value="<?php echo $img ?>">
        <br>
        <br>
        <input type="text" name="plantName" value="<?php echo $name ?>">
        <br>
        <br>
        <input type="text" name="plantPrice" value="<?php echo $price ?>">
        <input type="hidden" name="id" value="<?php echo $id?>">
        <br>
        <br>
        <button type="submit" name="submit">Обновить</button>
    </form>
    <br>
    <a href="index.php">Назад</a>
</body>
</html>
