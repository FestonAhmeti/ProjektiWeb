<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/products.css">
</head>
<body>
    <?php 
        include '../components/header.php';
    ?>
    <div id="main">
        
        <ul id="nav-rooms">
            <li><a href="">Living Room</a></li>
            <li><a href="">Kitchen</a></li>
            <li><a href="">Bedroom</a></li>
            <li><a href="">Bathroom</a></li>
            <li><a href="">Dining Room</a></li>
            <li><a href="">Lightning</a></li>

        </ul>

        <div class="products-container">
        <div class="products-panel wrapper">
                <?php //foreach($products as $product){ 
                    //$pid = $product['id'];
                ?>
                <input class="hidden" type="text" name="product_id" value=<?php $pid; ?>> 
                    <div class="square">
                        <div>
                            <a href="<?php //echo "view-product.php?pid=$pid" ?>"><img src=<?php echo $product['image']; ?> alt=""></a>
                        </div>
                        <div>
                            <h3><?php //echo $product['emri']; ?></h3>
                            <h2><?php //echo $product['cmimi']; ?>&euro;</h2>
                            <a class="button" href="<?php //echo "view-product.php?pid=$pid" ?>">Shiko Produktin</a>
                        </div>
                    </div>
                <?php //} ?>
            </div>
        </div>

    </div>
    <?php 
        include '../components/footer.php';
    ?>
</body>
</html>