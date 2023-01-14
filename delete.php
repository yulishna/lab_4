<?php 

    if(isset($_GET['id'])) {

        $xml = simplexml_load_file("data.xml");
        
        $i = 0;
        $id = $_GET['id'];
        foreach($xml->item as $item) {
            if ($item['id'] == $id) {
                unset($xml->item[$i]);
                break;
            }
            $i++;
        }

        $xml->saveXML("data.xml");
        echo '<script>
        alert("Товар успешно удален.")
        </script>';
        header('location:index.php');

    }

?>
