<!DOCTYPE html>
    <html>
    <head>
    <link rel="stylesheet" href="../css/about-us.css">
        <title>About Us | Homegoods</title>
    </head>
    <body>
<?php include '../components/header.php';
include '../programLogic/MessageMapper.php';


    $mapper = new MessageMapper();
    $text = $mapper->getText();

    if(!empty($_SESSION['is_logged_in']) && isset($_SESSION['is_logged_in']) 
        && $_SESSION['is_logged_in'] == 1 && $_SESSION['role'] == 1){ 
            if(isset($_GET['action']) && $_GET['action'] == 'edit') { ?>
                <div class="aboutus-container">
                    <div class="aboutus-card">
                        <div>
                            <h1>About Us</h1>
                            <hr class="divider">
                        </div>
                        <div>
                            <form action="../programLogic/upload.php" method="POST">
                                <input type="text" class="hidden" name="id" value="<?php echo $text['id'] ?>">
                                <textarea name="text">
                                    <?php echo $text['text']?>
                                </textarea>
                                <input type="submit" class="button" name="change-reth-nesh" value="Save Changes">
                            </form>
                        </div>
                    </div>
                </div>
    <?php } else  { ?>
        <div class="aboutus-container">
            <div class="aboutus-card">
                <div>
                    <h1>About Us</h1>
                    <hr class="divider">
                </div>
                <div>
                    <p><?php echo $text['text'] ?></p>
                </div>
            </div>
        </div>
    <?php }
    } else { ?>
        <div class="aboutus-container">
            <div class="aboutus-card">
                <div>
                    <h1>About Us</h1>
                    <hr class="divider">
                </div>
                <div>
                    <p><?php echo $text['text'] ?></p>
                </div>
            </div>
        </div>
    <?php }

include '../components/footer.php'; ?>