<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products | Homegoods</title>
    <link rel="stylesheet" href="../css/rooms.css">
    <script src="https://kit.fontawesome.com/92572388a0.js" crossorigin="anonymous"></script>

   
    
</head>
<body>
    <button id="to-top-btn"><i class="fas fa-arrow-up"></i></button>
    <script src="../script/totop.js"></script>
    <?php 
        include '../components/header.php';
    ?>
    <div id="newProducts-slider">

            <div class="hero-left">
              <h1>HOMEGOODS</h1>
              <div class="layers">
                <div class="layer layer-displayed" data-scene="1">
                  <span>THE VIMLE</span>
                  <div class="layer__image" ></div>
                  <div class="layer__info">
                    <div>
                      <strong>Name</strong>
                      <strong>Product</strong>
                      <strong>Price</strong>
                      <strong>Color</strong>
                      <strong>Material</strong>
                    </div>
                    <div>
                      <span>VIMLE</span>
                      <span>Sofa</span>
                      <span>150$</span>
                      <span>Black</span>
                      <span>Leather</span>
                    </div>
                  </div>
                </div>
                <div class="layer" data-scene="2">
                  <span>THE KIVIK</span>
                  <div class="layer__image" style="background-image: url(../images/sofa2.webp)"></div>
                  <div class="layer__info">
                    <div>
                        <strong>Name</strong>
                        <strong>Product</strong>
                        <strong>Price</strong>
                        <strong>Color</strong>
                        <strong>Material</strong>
                    </div>
                    <div>
                        <span>KIVIK</span>
                        <span>Sofa</span>
                        <span>170$</span>
                        <span>Beige</span>
                        <span>Hillared</span>
                    </div>
                  </div>
                </div>
                <div class="layer" data-scene="3">
                  <span>THE LANDSKRONA</span>
                  <div class="layer__image" style="background-image: url(../images/sofa3.webp)"></div>
                  <div class="layer__info">
                    <div>
                        <strong>Name</strong>
                        <strong>Product</strong>
                        <strong>Price</strong>
                        <strong>Color</strong>
                        <strong>Material</strong>
                    </div>
                    <div>
                        <span>LANDSKRONA</span>
                        <span>Sofa</span>
                        <span>130$</span>
                        <span>Light Green</span>
                        <span>Gunnared</span>
                    </div>
                  </div>
                </div>
              </div>
              <button onclick="switchLayer(2)"><</button>
              <button onclick="switchLayer()">></button>
            </div>
            <div class="hero-right">
              <div class="layer layer-displayed" data-scene="1"></div>
              <div class="layer" data-scene="2"></div>
              <div class="layer" data-scene="3"></div>
              <div class="photo-frame">
                <div class="layer layer-displayed" style="background-image: url(../images/sofa1b.webp)" data-scene="1"></div>
                <div class="layer" style="background-image: url(../images/sofa2a.webp)" data-scene="2"></div>
                <div class="layer" style="background-image: url(../images/sofa3a.webp)" data-scene="3"></div>
                <div class="cover"></div>
              </div>
              <div class="photo-name">
                <div class="photo-name__wrapper">
                  <div class="layer layer-displayed" data-scene="1">
                    <span class="photo-name__title">VIMLE SOFA</span>
                    <span>BLACK LEATHER</span>
                  </div>
                  <div class="layer" data-scene="2">
                    <span class="photo-name__title">KIVIK SOFA</span>
                    <span>HILLARED BEIGE</span>
                  </div>
                  <div class="layer" data-scene="3 ">
                    <span class="photo-name__title">LANDSKRONA SOFA</span>
                    <span>GUNNARED LIGHT GREEN</span>
                  </div>
                </div>
              </div>
              <div class="photo-frame">
                <div class="layer layer-displayed" style="background-image: url(../images/sofa1a.webp)" data-scene="1"></div>
                <div class="layer" style="background-image: url(../images/sofa2b.webp)" data-scene="2"></div>
                <div class="layer" style="background-image: url(../images/sofa3b.webp)" data-scene="3"></div>
                <div class="cover"></div>
              </div>
            </div>

    </div>

    <!-- New Div -->
    <div class="collection">
      <div class="collection-div">
          <div id="left-side">
              
            <a href="http://localhost:8080/ProjektiWeb/views/view-product.php?pid=10035" id="anchor" ><div class="buttons" id="button1"  ></div></a>
            <div id="button1-div">
                <H6>NEW</H6>
                <h5>MATCHSPEL</h5>
                <p>Gaming Chair</p>
                <h4>150$</h4>
            </div>
            <a href="http://localhost:8080/ProjektiWeb/views/view-product.php?pid=10032" id="anchor2"><div class="buttons" id="button2"></div></a>
            <div id="button2-div">
                <H6>NEW</H6>
                <h5>LEDBERG</h5>
                <p>Led Lights</p>
                <h4>10$</h4>
            </div>
            <a href="http://localhost:8080/ProjektiWeb/views/view-product.php?pid=10033" id="anchor3"><div class="buttons" id="button3"></div></a>
            <div id="button3-div">
                <H6>NEW</H6>
                <h5>UPPSPEL</h5>
                <p>Wheeled Drawer</p>
                <h4>100$</h4>
            </div>
            <a href="http://localhost:8080/ProjektiWeb/views/view-product.php?pid=10034" id="anchor4"><div class="buttons" id="button4"></div></a>
            <div id="button4-div">
                <H6>NEW</H6>
                <h5>LÅNESPELARE</h5>
                <p>Cup Holder</p>
                <h4>10$</h4>
            </div>
            <a href="http://localhost:8080/ProjektiWeb/views/view-product.php?pid=10031" id="anchor5"><div class="buttons" id="button5"></div></a>
            <div id="button5-div">
                <H6>NEW</H6>
                <h5>UPPSPEL</h5>
                <p>Showcase</p>
                <h4>80$</h4>
            </div>

          </div>
          <div id="right-side">
              <h1>GAMING FURNITURE</h1>
              <p>The new range is the result of Homegoods' partnership 
                  with the Republic of Gamers gaming brand, ROG. Together, 
                  we have designed gaming tables, gaming chairs and accessories 
                  that combine high performance, great ergonomics and a modern look.
              </p>
              <button><a href="products.php">Check!</a></button>
          </div>
      </div>
    </div>

    <!-- New Div -->

    <div class="products-grid">
      <div id="product-grid-title">
        <h2>New Ideas!</h2>
      </div>
      <div id="content">

        <div class="one"><button><a href="products.php"><b>Check!</b></a></button></div>
        <div class="two"><button><a href="products.php"><b>Check!</b></a></button></div>
        <div class="three"><button><a href="products.php"><b>Check!</b></a></button></div>
        <div class="four"><button><a href="products.php"><b>Check!</b></a></button></div>
        <div class="five"><button><a href="products.php"><b>Check!</b></a></button></div>
        <div class="six"><button><a href="products.php"><b>Check!</b></a></button></div>
        <div class="seven"><button><a href="products.php"><b>Check!</b></a></button></div>
        <div class="eight"><button><a href="products.php"><b>Check!</b></a></button></div>
        <div class="nine"><button><a href="products.php"><b>Check!</b></a></button></div>
        <div class="ten"><button><a href="products.php"><b>Check!</b></a></button></div>
        <div class="eleven"><button><a href="products.php"><b>Check!</b></a></button></div>
        <div class="twelve"><button><a href="products.php"><b>Check!</b></a></button></div>
        <div class="thirteen"><button><a href="products.php"><b>Check!</b></a></button></div>
        <div class="fourteen"><button><a href="products.php"><b>Check!</b></a></button></div>
        <div class="fifteen"><button><a href="products.php"><b>Check!</b></a></button></div>
        <div class="sixteen"></div>
        
      </div>
    </div>
    <button id="show-hide-button">SHOW MORE!</button>

    <div id="products-grid-2">
      <div id="content2">

        <div class="one"><button><a href="products.php"><b>Check!</b></a></button></div>
        <div class="two"><button><a href="products.php"><b>Check!</b></a></button></div>
        <div class="three"><button><a href="products.php"><b>Check!</b></a></button></div>
        <div class="four"><button><a href="products.php"><b>Check!</b></a></button></div>
        <div class="five"><button><a href="products.php"><b>Check!</b></a></button></div>
        <div class="six"><button><a href="products.php"><b>Check!</b></a></button></div>
        <div class="seven"><button><a href="products.php"><b>Check!</b></a></button></div>
        <div class="eight"><button><a href="products.php"><b>Check!</b></a></button></div>
        <div class="nine"><button><a href="products.php"><b>Check!</b></a></button></div>
        <div class="ten"><button><a href="products.php"><b>Check!</b></a></button></div>
        <div class="eleven"><button><a href="products.php"><b>Check!</b></a></button></div>
        <div class="twelve"><button><a href="products.php"><b>Check!</b></a></button></div>
        <div class="thirteen"><button><a href="products.php"><b>Check!</b></a></button></div>
        <div class="fourteen"><button><a href="products.php"><b>Check!</b></a></button></div>
        <div class="fifteen"><button><a href="products.php"><b>Check!</b></a></button></div>
        <div class="sixteen"></div>
        
      </div>
    </div>

    <div class="rooms-div">
      
        <h2>New ideas to improve your home!</h2>
        <div id="rooms-div-container">
          <div id="one">
            <a href="products.php"><button>Living Room</button></a>
          </div>
          <div id="two">
            <a href="products.php"><button>Bedroom</button></a>
          </div>
          <div id="three">
            <a href="products.php"><button>Kitchen</button></a>
          </div>
          <div id="four">
            <a href="products.php"><button>Bathroom</button></a>
          </div>
          <div id="five">
            <a href="products.php"><button>Dining Room</button></a>
          </div>
          <div id="six">
            <a href="products.php"><button>Lightning</button></a>
          </div>
        </div>
    </div>
    <!-- Footer -->

    <?php 
        include '../components/footer.php';
    ?>


    <script src="../script/products.js"></script>
</body>
</html>