<!-- 
    Xinyi Wang & Yuchen Wang
    01/14/18
    Unnamed Website
-->

<!DOCTYPE html>
<html>
    <head>
        <title>未命名</title>
        <meta charset="utf-8">
        <!--For scaling on mobiles-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--jQuery & Bootstrap-->
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.0.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
                    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
                    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <!--Customized stylesheets and js-->
        <link href="/css/mainstyle.css" type="text/css" rel="stylesheet" />
        <script src="/js/navbar.js" type="text/javascript"></script>
        <script src="/js/gallery.js" type="text/javascript"></script>
        <link href="/css/gallery.css" type="text/css" rel="stylesheet" />
        
        
        <!--<script src="/index.js" type="text/javascript"></script>-->
        <link href="/index.css" type="text/css" rel="stylesheet" />
    </head>

    <body id="frontpage">
    	<!--Navigation Bar-->
        <?php include_once("navbar.html"); ?>

        <!--Welcome Words-->
        <div class="jumbotron" id="logo">
            <h2>欢迎</h2>
        </div>

        <!--Gallery-->
        <!--<div id="gallery" class="jumbotron">       -->
        <!--    <div id="theCarousel" class="carousel slide">-->
        <!--        <ol id="indicators" class="carousel-indicators"></ol>-->
        <!--        <div id="inner" class="carousel-inner"></div>-->
                
        <!--        <a class="left carousel-control" href="#theCarousel" data-slide="prev">-->
        <!--            <span class="glyphicon glyphicon-chevron-left"></span>-->
        <!--        </a>-->
        <!--        <a class="right carousel-control" href="#theCarousel" data-slide="next">-->
        <!--            <span class="glyphicon glyphicon-chevron-right"></span>-->
        <!--        </a>-->
        <!--    </div>-->
        <!--</div>-->
        
        <!--Product Image Gallery-->
        <div class="jumbotron">
            <!--<div class="row" id="productlist"></div>-->
            <div class="row" id="productlist">
                <div class="col-md-6">
                    <div class="thumbnail" id="thumbnail-food">
                        <div class="product-info">
                            <a href="/food.php"><img src="/food/pic/oat.jpg" alt="农产品及食品" class="product-img" id="product-img-food">
                                <p class="product-caption">农产品及食品</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="thumbnail" id="thumbnail-ice">
                        <div class="product-info">
                            <a href="/ice.php"><img src="/ice/pic/14.jpg" alt="冰酒" class="product-img" id="product-img-ice">
                                <p class="product-caption">冰酒</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="thumbnail" id="thumbnail-red">
                        <div class="product-info">
                            <a href="/wine/redwine.php"><img src="/wine/pic/red/1.png" alt="干红葡萄酒" class="product-img" id="product-img-red">
                                <p class="product-caption">干红葡萄酒</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="thumbnail" id="thumbnail-white">
                        <div class="product-info">
                            <a href="/wine/redwine.php"><img src="/wine/pic/white/1.png" alt="干白葡萄酒" class="product-img" id="product-img-white">
                                <p class="product-caption">干白葡萄酒</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
                
        
        </div>
        
        <!--Contact Information-->
        <?php include_once("contact.html"); ?>

    </body>
</html>