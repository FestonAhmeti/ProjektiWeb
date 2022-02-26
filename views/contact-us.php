<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>Contact Form</title>
            <link rel="stylesheet" href="../css/contact-us.css" />
            <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
        </head>
        <body>
            <?php 
                include '../components/header.php';
            ?>
            <!-- Main page for contact us form -->
            <div class="container">
            <span class="big-circle"></span>
            <div class="form">
                <div class="contact-info">
                <h3 class="title">Let's get in touch</h3>
                <p class="text">
                    For every uncertainty or problem you can get in touch with our
                    support team who is in your service 24/7!
                </p>

                <div class="info">
                    <div class="information">
                    <img src="../images/map.png" class="icon" alt="" />
                    <p>HomeGoods Headquarters, LA 12847</p>
                    </div>
                    <div class="information">
                    <img src="../images/email.png" class="icon" alt="" />
                    <p>support@homegoods.com</p>
                    </div>
                    <div class="information">
                    <img src="../images/telephone-call.png" class="icon" alt="" />
                    <p>+1 245-965-485</p>
                    </div>
                </div>

                <div class="social-media">
                    <p>Connect with us :</p>
                    <div class="social-icons">
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    </div>
                </div>
                </div>

                <div class="contact-form">
                <span class="circle one"></span>
                <span class="circle two"></span>

                <form   onsubmit="return validate()" autocomplete="off">
                    <h3 class="title">Contact us</h3>
                    <div id="error_message"></div>
                    <div class="input-container">
                    <input type="text" name="name" id="name" class="input" />
                    <label for="">Username</label>
                    <span>Username</span>
                    </div>
                    <div id="error_message1"></div>
                    <div class="input-container">
                    <input type="email" name="email" id="email" class="input" />
                    <label for="">Email</label>
                    <span>Email</span>
                    </div>
                    <div id="error_message2"></div>
                    <div class="input-container">
                    <input type="tel" name="phone" id="phone" class="input" />
                    <label for="">Phone</label>
                    <span>Phone</span>
                    </div>
                    <div id="error_message3"></div>
                    <div class="input-container textarea">
                    <textarea name="message" id="message" class="input"></textarea>
                    <label for="">Message</label>
                    <span>Message</span>
                    </div>
                    <input type="submit" value="Send" class="btn" />
                </form>
                </div>
            </div>
            </div>
            
            <?php if(isset($_GET['messagesend']) && $_GET['messagesend'] == 'success'){
                echo '<script>alert("Mesazhi juaj u dergua me sukses")</script>';
            } ?>
            <!-- Footer -->

            <?php 
                 include '../components/footer.php'
            ?>

            <script src="../script/contact-us.js"></script>
        </body>
</html>