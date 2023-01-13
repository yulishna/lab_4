<?php $xml = simplexml_load_file("data.xml");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Flower shop</title>
</head>

<body>

<div class="container">


    <!--Верхнее меню бла бла бла-->
    <div class="head">

        <div class="headLeft">
            <img src="BigPlant.png" alt="BigPlant">
        </div>

        <div class="headRight">

            <div class="headHeader">

                <div class="headHeaderLeft">
                    <div class="iconSearch">
                        <img src="icon_search.png" alt="search">
                    </div>
                    <div class="iconShop">
                        <img src="icon_shop.png" alt="shop">
                    </div>
                </div>
                
                <div class="headHeaderRight">
                    <div class="buttonSingUp">
                        <div>Sign Up</div>
                    </div>
                    <div class="buttonSingIn">
                        <div>Sign In</div>
                    </div>
                </div>
                
            </div>

            <div class="headText">
                <div>Kembang Flower Mantap</div>
                <div>Lorem Ipsum is simply dummy text of the printing
                     and typesetting industry. Lorem Ipsum has been the 
                     industry's standard dummy text ever since the 1500s, </div>
            </div>
            
        </div>

    </div>







    <!--Иконочки-->
    <div class="properties">

        <div class="property1">
            <div class="property_head">
                <img src="icon1.png" alt="icon1">
                <div>Fast Delivery</div>
            </div>
            <div class="property_text">
                <div>Lorem Ipsum is simply dummy text of the
                     printing and typesetting industry. Lorem 
                     Ipsum has been the industry's standard </div>
            </div>
        </div>

        <div class="property2">
            <div class="property_head">
                <img src="icon2.png" alt="icon2">
                <div>Great Customer Service</div>
            </div>
            <div class="property_text">
                <div>Lorem Ipsum is simply dummy text of the
                     printing and typesetting industry. Lorem 
                     Ipsum has been the industry's standard </div>
            </div>
        </div>

        <div class="property3">
            <div class="property_head">
                <img src="icon3.png" alt="icon3">
                <div>Original Plants</div>
            </div>
            <div class="property_text">
                <div>Lorem Ipsum is simply dummy text of the
                     printing and typesetting industry. Lorem 
                     Ipsum has been the industry's standard </div>
            </div>
        </div>

        <div class="property4">
            <div class="property_head">
                <img src="icon4.png" alt="icon4">
                <div>Affordable Price</div>
            </div>
            <div class="property_text">
                <div>Lorem Ipsum is simply dummy text of the 
                    printing and typesetting industry. Lorem 
                    Ipsum has been the industry's standard </div>
            </div>
        </div>

    </div>

    <!--Растеньица-->
    <div class="plants">
        
        <div class="plantsHeader">
            <div>Featured Plants</div>
            <svg width="100%" height="1">
                <rect x="0" y="0" height="1" width="100%" fill="rgb(224,224,224)" />
            </svg>
        </div>

        <div class="plantsPhotoes">

            <?php foreach($xml->item as $item) { ?>

            <div class="plantsPhoto">

                <img src=<?php echo $item->img ?> alt="">
                
                <div class="plantsPhoto__name"><?php echo $item->name ?></div>
                <div class="plantsPhoto__price"><?php echo $item->price ?></div>

                <div class="update">
                    <a href="update.php?id=<?php echo $item['id']?>">Update</a>
                </div>

                <div class="delete">
                    <a href="delete.php?id=<?php echo $item['id']?>">Delete</a>
                </div>
                
            </div>

            <?php } ?>
        
        </div>

        <div class="create"><a href="create.php">Create</a></div>
    
    </div>

    <!--Купить растеньица-->
    <div class="buy">
        <div class="buyLeft">

            <div class="buyLeftText">
            <div>Buy more plants, it helps you to be relaxed </div>
            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi 
                gravida gravida aliquam. Pellentesque et lobortis nisl. Sed et 
                mauris justo. Nulla eu enim non mauris maximus dignissim. 
                Maecenas vitae eros sapien. Quisque pellentesque tempus dignissim.</div>
            </div>

            <div class="buyLeftPhoto">
            <img src="right_plant.png" alt="right_plant">
            </div>
    
        </div>

        <div class="buyRight">
            <img src="plant_left.png" alt="plant_left">
        </div>

    </div>

    <!--Переход на шоп-->
    <div class="get">
        <div class="getLeft">
            <div>Get your favourites plant on our shop now</div>
            <div>Visit Shop</div>
        </div>

        <div class="getRight">
            <img src="back_plant.png" alt="back_plant">
        </div>

    </div>

    <!--Линия разделительная--> 
    <div class="line"> 
        <svg width="110%" height="1"> 
            <rect x="0" y="0" height="1" width="100%" fill="rgba(21, 105, 99, 0.2)" /> 
        </svg> 
    </div>

    <!--Подвал-->
    <div class="footer">
        <div class="footer1">
            
            <div class="footer1_header">PLANTKU</div>
            <div class="footer1_text">
                <div>Plantku House</div>
                <div>Jl. Laksda Adisucipto No.51, Demangan, Kec. 
                    Depok, Kota Yogyakarta, Daerah Istimewa 
                    Yogyakarta 55282</div>
            </div>
        </div>
        <div class="footer2">
            <div class="footer2_header">Perusahaan</div>
            <div class="footer2_text">
                <div>Tentang Kami</div>
                <div>Hubungi Kami</div>
            </div>
        </div>
        <div class="footer3">
            <div class="footer3_header">Produk</div>
            <div class="footer3_text">
                <div>Tanaman</div>
                <div>Tanaman Lain</div>
            </div>
        </div>
        <div class="footer4">
            <div class="footer4_header">Berlangganan Email Kami</div>
            <div class="footer4_buttom">
                <input type="text" id="email" placeholder="Masukan Alamat E-mail"/>
                <input type="submit" value="Submit"/>
            </div>
        </div>
    </div>

</div>

</body>

</html>
