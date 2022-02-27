<?php 
    include '../components/header.php';
    include_once '../programLogic/UserMapper.php';
    include_once '../programLogic/ProductMapper.php';
    include_once '../programLogic/MessageMapper.php';
    include_once '../programLogic/Admin.php';

    if(!isset($_SESSION['is_logged_in']) || $_SESSION['role'] == 0){
        header("Location: index.php");
    }
    else if (isset($_SESSION['is_logged_in']) && $_SESSION['role'] == 1){
        $mapper =  new UserMapper();
        $userList = $mapper->getAllUsers();
        $user = $mapper->getUserByEmail($_SESSION['email']);
        $pmapper = new ProductMapper();
        $productList = $pmapper->getAllProducts();
        $msgmapper = new MessageMapper();
        $msgList = $msgmapper->getAllMessages(); 
        $msgUnread = $msgmapper->getUnreadMessages();
        // $sliderImg = $pmapper->getSliderImages();
        $categories = $pmapper->getAllCategories();
        // $brandImages = $pmapper->getBrandImages();
    ?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>Contact Form</title>
            <link rel="stylesheet" href="../css/dashboard.css" />
            <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
        </head>
        <body>
    <main id='main'>

    <?php if(isset($_GET['action']) == false){?>
        <div class="dashboard-container">
            <div class="dashboard-panel wrapper">
                <div class="greet">
                    <h3>Welcome to admin dashboard, <?= $user['first_name']?></h3>
                </div>
                <div class="square">
                    <img src="../images/dashboard-icons/add-product.png" alt="">
                    <a href="dashboard.php?action=add-product">Add Product</a>
                </div>
                <div class="square">
                    <img src="../images/dashboard-icons/look-products.png" alt="">
                    <a href="dashboard.php?action=view-products">Check Products</a>
                </div>
                <div class="square">
                <img src="../images/dashboard-icons/users.png" alt="">
                    <a href="dashboard.php?action=view-users">Check Users</a>
                </div>
                <div class="square">
                    <img src="../images/dashboard-icons/unread-message.png" alt="">
                    <a href="dashboard.php?action=unread-messages">Unread Messages</a>
                </div>  
                <div class="square">
                    <img src="../images/dashboard-icons/read-message.png" alt="">
                    <a href="dashboard.php?action=all-messages">Opened Messages</a>
                </div>
                <div class="square">
                    <img src="../images/dashboard-icons/add-category.png" alt="">
                    <a href="dashboard.php?action=add-category">Add Category</a>
                </div>
                
            </div>
        </div>

    <?php } else if (isset($_GET['action']) && $_GET['action'] == 'view-products'){ ?>
        <div class="db-container">
            <table class="db-table">
                <thead>
                    <tr>
                        <th colspan="6">Products</th>
                    </tr>
                    <tr>    
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th colspan="3">Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($productList as $product){ ?>
                        <tr>
                            <td>
                                <?php echo $product['emri']; ?>
                            </td>
                            <td>
                                <?php echo $product['cmimi']; ?> &euro;
                            </td>
                            <td>
                                <?php echo $product['sasia']; ?> products
                            </td>
                            <td>
                                <a href="<?php echo "../programLogic/modifikimet.php?action=delete-product&prod-id=".$product['id']; ?>" onclick="return confirm('Are you sure you want to delete this product?');">Delete
                                </a>
                            </td>
                            <td>
                                <?php if($product['is_promoted'] == 0) { ?>
                                    <a href="<?php echo "../programLogic/modifikimet.php?action=promote-product&prod-id=".$product['id']; ?>">Promote
                                    </a>
                                <?php } else if($product['is_promoted'] == 1){ ?>
                                    <a href="<?php echo "../programLogic/modifikimet.php?action=demote-product&prod-id=".$product['id']; ?>">Remove from Promotion
                                    </a>
                                <?php }?>
                            </td>
                            <td>
                                <a href="<?php echo "../programLogic/modifikimet.php?action=edit-product&prod-id=".$product['id']; ?>">Edit
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    <?php } else if (isset($_GET['action']) && $_GET['action'] == 'add-product'){ 
            if(isset($_GET['upload']) && $_GET['upload'] == 'success'){
                echo '<script>alert("Produkti u shtua me sukses")</script>';
            }
            else if (isset($_GET['upload']) && $_GET['upload'] == 'error'){
                echo '<script>alert("Produkti nuk u shtua")</script>';
            }?>
        <div class="edit-product-main">
            <form method="POST" action="../programLogic/upload.php" enctype="multipart/form-data" class="edit-product-card">
                <h2>Add Product</h2>
                <hr class="divider">
                <label for="name">Name</label>
                <input type="text" name="name" value="" required>
                <label for="price">Price</label>
                <input type="number" step="any" name="price" value="" required>
                <label for="desc">Description</label>
                <textarea name="desc" value="" required></textarea>
                <label for="qty">Quantity</label>
                <input type="number" name="qty" value="<?= $product['sasia'] ?>" required>
                <label for="cat">Choose Category</label>
                <select name="cat" required>
                    <option value=""></option>
                    <?php foreach($categories as $category): ?>
                        <option value="<?= $category['emri']?>"><?= $category['emri']?></option>
                    <?php endforeach; ?>
                </select>
                <label for="image">Upload photo</label>
                <input type="file" name="image" required>
                <input class="button" type="submit" name="add-product-btn" value="Add Product">
                <a href="dashboard.php">Cancel</a>
            </form>
        </div>   
    <?php } else if(isset($_GET['action']) && $_GET['action'] == 'view-users') { ?>
        <div class="db-container">
            <table class="db-table">
                <thead>
                    <tr>
                        <th colspan="6">Users</th>
                    </tr>
                    <tr class="users-email-col">
                        <th>Name</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th colspan="3">Options</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($userList as $user){ ?>
                    <tr class="users-email-col">
                        <td>
                            <?php echo $user['first_name']; ?>
                        </td>
                        <td>
                            <?php echo $user['last_name']; ?>
                        </td>
                        <td>
                            <?php echo $user['email']; ?>
                        </td>
                        <td><a href="<?php echo "../programLogic/modifikimet.php?action=delete-user&user-id=".$user['id']; ?>" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a></td>
                        <?php if($user['is_admin'] == 1) {?>
                            <td><a href="<?php echo "../programLogic/modifikimet.php?action=remove-admin&user-id=".$user['id']; ?>" onclick="return confirm('Are you sure you want to remove this user as Admin?');">Remove Admin</a></td>
                        <?php } else { ?>
                            <td><a href="<?php echo "../programLogic/modifikimet.php?action=make-admin&user-id=".$user['id']; ?>" onclick="return confirm('Are you sure you want to make this user admin?');">Make Admin</a></td>
                        <?php } ?>
                        <td><a href="<?php echo "../programLogic/modifikimet.php?action=edit-user&user-id=".$user['id']; ?>">Edit</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>    
        </div>
    <?php } else if(isset($_GET['action']) && $_GET['action'] == 'unread-messages') { ?>
        <div class="db-container">
            <table class="db-table">
                <thead>
                    <tr>
                        <th colspan="5">Unread Messages</th>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th colspan="2">Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($msgUnread as $msg){ ?>
                        <tr>
                            <td>
                                <?php echo $msg['emri']; ?>
                            </td>
                            <td>
                                <?php echo $msg['mbiemri']; ?>
                            </td>
                            <td>
                                <?php echo $msg['email']; ?>
                            </td>
                            <td><a href="<?php echo "../programLogic/modifikimet.php?action=delete-msg&msg-id=".$msg['id']; ?>" onclick="return confirm('Are you sure you want to delete this message?');">Delete</a></td>
                            <td><a href="<?="view-message.php?action=view&msg_id=".$msg['id']?>">Read</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table> 
        </div>
    <?php } else if(isset($_GET['action']) && $_GET['action'] == 'all-messages') { ?>
        <div class="db-container">
            <table class="db-table">
                <thead>
                    <tr>
                        <th colspan="5">All Mesages</th>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th colspan="2">Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($msgList as $msg){ ?>
                        <tr>
                            <td>
                                <?php echo $msg['emri']; ?>
                            </td>
                            <td>
                                <?php echo $msg['mbiemri']; ?>
                            </td>
                            <td>
                                <?php echo $msg['email']; ?>
                            </td>
                            <td><a href="<?php echo "../programLogic/modifikimet.php?action=delete-msg&msg-id=".$msg['id']; ?>" onclick="return confirm('Are you sure you want to delete this message?');">Delete</a></td>
                            <td><a href="<?="view-message.php?action=view&msg_id=".$msg['id']?>">Read</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table> 
        </div>
    <?php } else if(isset($_GET['action']) && $_GET['action'] == 'add-category') { 
        if(isset($_GET['upload']) && $_GET['upload'] == 'success'){
            echo '<script>alert("Category added successfully!")</script>';
        }
        else if (isset($_GET['upload']) && $_GET['upload'] == 'error'){
            echo '<script>alert("Category already exists!")</script>';
        }?>
        <div class="edit-product-main">
            <form method="POST" action="../programLogic/upload.php" enctype="multipart/form-data" class="edit-product-card">
                <h2>Add Category</h2>
                <hr class="divider">
                <label for="name">Name</label>
                <input type="text" name="kategoria" value="" required>
                <input class="button" type="submit" name="add-category-btn" value="Add Category">
                <a href="dashboard.php">Cancel</a>
            </form>
        </div>     
        <div class="db-container">
            <table class="db-table">
                <thead>
                    <tr>
                        <th colspan="2">Categories</th>
                    </tr>
                    <tr>    
                        <th>Photo</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($categories as $category){ ?>
                        <tr>
                            <td>
                                <?php echo $category['emri']; ?>
                            </td>
                            <td><a href="<?php echo "../programLogic/modifikimet.php?action=delete-category&category=".$category['emri']; ?>" onclick="return confirm('Are you sure you want to delete this category?');">Delete</a></td>
                        </tr>
                    <?php } ?>
                </tbody>                
            </table>
        </div>   
    
    
    <?php }?>
        </main>
<?php } else {
        echo "Error 404";
} include '../components/footer.php'; ?>