<?php 
include_once '../programLogic/ProductMapper.php';
include_once '../programLogic/Product.php';
include_once '../programLogic/UserMapper.php';
include_once '../programLogic/CartMapper.php';
include '../components/header.php';

if(isset($_GET['pid'])){
    $pmapper = new ProductMapper();
    $mapper = new UserMapper();
    $cmapper = new CartMapper();

    $pid=$_GET['pid'];
    $product = $pmapper->getProductsById($pid);
    $admin = $mapper->getUserById($product['admin_id']);
    $productsOfSameCategory = $pmapper->getProductsByCategory($product['kategoria'], $product['id']);

    if(isset($_SESSION['is_logged_in'])==1){
        $userCart = $mapper->getUserByEmail($_SESSION['email']); 
        $cartProducts = $cmapper->getCartProducts($userCart['id']);
    }
    
}?>
<!DOCTYPE html>
    <html>
    <head>
        <link rel="stylesheet" href="../css/view-product.css">
        
    </head>
    <body>
<main id="main">
    <div class="wrapper">
        <div class="view-product">
            <div class="view-product-image">
                <img src="<?= $product['image']?>" alt="">
            </div>
            <div class="product-info">
                <div>
                    <h1><?= $product['emri']?></h1>
                </div>
                <div>
                    <p><b>Category: </b><?= $product['kategoria']?></p>
                    <p><b>Quantity: </b><?= $product['sasia']?> artikuj</p>
                    <p><b>Description: </b><?= $product['pershkrimi']?></p>
                </div>
                <div>
                    <p><b>Price: </b><?= $product['cmimi']?>&euro;</p>
                    <?php
                    if(isset($_SESSION['is_logged_in']) == 1){
                        $isInCart = false;
                        for($i = 0; $i < count($cartProducts); $i = $i + 1){
                            if($product['id'] == $cartProducts[$i]['product_id']){
                             $isInCart = true;
                                break;
                            }
                        }
                        if($isInCart){ ?>
                            <p><b>Product it's in the cart!</b></p>
                        <?php } else if($product['sasia'] == 0) { ?>
                            <p id="nostock">Not in stock!</p>
                        <?php }
                        else { ?>
                            <a href=" <?php echo "../programLogic/upload.php?action=add-to-cart&product-id=".$product['id'] ?>">Shto në shportë</a>
                        <?php }
                    }
                    else if($product['sasia'] == 0){ ?>
                        <p id="nostock">Not in stock!</p>
                    <?php } else if(!isset($_SESSION['is_logged_in'])) { ?>
                        <a href="login.php" class="button">Log In to add to cart!</a>
                    <?php } else { ?>
                        <a href=" <?php echo "../programLogic/upload.php?action=add-to-cart&product-id=".$product['id'] ?>">Shto në shportë</a>
                    <?php } ?>
                </div>
                <div>
                    <?php if($admin != null){ ?>
                        <p>*This product it's posted by:  <?= $admin['first_name'].' '.$admin['last_name']?></p>
                    <?php } ?>
                </div>
            </div>
        </div>

        <?php if(count($productsOfSameCategory) > 1) {?>
            <div class="products-container">
            <div class="section-title">
                    <h3>Similar Products</h3>
                    <hr class="divider">
                </div>
                    <div class="products-panel">
                        <?php foreach($productsOfSameCategory as $catProduct){
                            $pid = $catProduct['id']; ?>
                            <div class="square">
                            <div>
                                <a href="<?php echo "view-product.php?pid=$pid" ?>"><img src=<?php echo $catProduct['image']; ?> alt=""></a>
                            </div>
                            <div>
                                <h3><?php echo $catProduct['emri']; ?></h3>
                                <h2><?php echo $catProduct['cmimi']; ?>&euro;</h2>
                                <a class="button" href="<?php echo "view-product.php?pid=$pid" ?>">Check!</a>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
        <?php } ?>
    </div>
</main>
<?php 
include '../components/footer.php'
?>
