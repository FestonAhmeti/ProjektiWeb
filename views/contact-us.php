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
s
                <form   onsubmit="return validate()" method="POST" action="../programLogic/upload.php" autocomplete="off">
                    <h3 class="title">Contact us</h3>

                    <div id="error_message"></div>
                    <div class="input-container">
                        <input id="emriPlote" type="text" name="name" class="input" />
                        <label for="name">Name</label>
                        <span>Name</span>
                    </div>

                    <div id="error_message1"></div>
                    <div class="input-container">
                        <input id="mbiemri" type="text" name="lastname" class="input">
                        <label for="name">Lastname</label>
                        <span>Lastname</span>
                    </div>

                    <div id="error_message2"></div>
                    <div class="input-container">
                        <input id="emaili" type="email" name="email" class="input">
                        <label for="email">Email</label>
                        <span>Email</span>
                    </div>

                    <div id="error_message3"></div>
                    <div class="input-container textarea">
                        <textarea id="mesazhi" type="text" name="msg" class="input"></textarea>
                        <label for="mesazhi">Message</label>
                        <span>Message</span>
                    </div>
                    <input type="submit"  id="dergo" value="Send"  name="send-msg" class="button" style=" padding: 0.6rem 1.3rem;
                        background-color: #fff;
                        border: 2px solid #fafafa;
                        font-size: 0.95rem;
                        color: #000000;
                        line-height: 1;
                        border-radius: 25px;
                        outline: none;
                        cursor: pointer;
                        transition: 0.3s;
                        margin: 0;"/>

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