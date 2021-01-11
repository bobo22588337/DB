<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="分類">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dessert Dessert</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
   <!-- <link rel="stylesheet" href="../css/style.css" type="text/css"> -->

    <link rel="stylesheet" href="betty_style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="../img/dessert.png" alt=""></a>
        </div>        
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./betty/index.php">Home</a></li>
                <li><a href="./shop-grid.html">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="../betty/index.php"><img src="../img/dessert.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero__search__form">
                        <form action="#">
                            <input type="text" placeholder="What do yo u need?">
                            <button type="submit" class="site-btn">SEARCH</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                        </ul>
                        <div class="header__top__right__auth">
                            <a href="#"><i class="fa fa-user"></i> Login</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <?php

    $active1 = "";
    $active2 = "";
    $active3 = "";
    $active4 = "";
    $active5 = "";
    $active6 = "";
    $active7 = "";
    $active8 = "";
    $allactive = "";

    if($_GET['method'] == "蛋糕"){
        $filter = ".蛋糕";
        $active1 = 'class="active"';
    }elseif($_GET['method'] == "餅乾"){
        $filter = ".餅乾";
        $active2 = 'class="active"';
    }elseif($_GET['method'] == "布丁果凍"){
        $filter = ".布丁果凍";
        $active3 = 'class="active"';
    }elseif($_GET['method'] == "甜湯"){
        $filter = ".甜湯";
        $active4 = 'class="active"';
    }elseif($_GET['method'] == "巧克力糖果"){
        $filter = ".巧克力糖果";
        $active5 = 'class="active"';
    }elseif($_GET['method'] == "麵包"){
        $filter = ".麵包";
        $active6 = 'class="active"';
    }elseif($_GET['method'] == "鬆餅"){
        $filter = ".鬆餅";
        $active7 = 'class="active"';
    }elseif($_GET['method'] == "塔派"){
        $filter = ".塔派";
        $active8 = 'class="active"';
    }else{
        $filter = "";
        $allactive = 'class="active"';}
    ?>
    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>全部分類</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li <?php echo $allactive ?> data-filter="*"><a href="sort-all.php" style="color:black;">全部</a></li>
                            <li <?php echo $active1 ?> data-filter=".蛋糕"><a href="sort.php?method=蛋糕" style="color:black;">蛋糕</a></li>
                            <li <?php echo $active2 ?> data-filter=".餅乾"><a href="sort.php?method=餅乾" style="color:black;">餅乾</a></li>
                            <li <?php echo $active3 ?> data-filter=".布丁果凍"><a href="sort.php?method=布丁果凍" style="color:black;">布丁&果凍</a></li>
                            <li <?php echo $active4 ?> data-filter=".甜湯"><a href="sort.php?method=甜湯" style="color:black;">甜湯</a></li>
                            <li <?php echo $active5 ?> data-filter=".巧克力糖果"><a href="sort.php?method=巧克力糖果" style="color:black;">巧克力&糖果</a></li>
                            <li <?php echo $active6 ?> data-filter=".麵包"><a href="sort.php?method=麵包" style="color:black;">麵包</a></li>
                            <li <?php echo $active7 ?> data-filter=".鬆餅"><a href="sort.php?method=鬆餅" style="color:black;">鬆餅</a></li>
                            <li <?php echo $active8 ?> data-filter=".塔派"><a href="sort.php?method=塔派" style="color:black;">塔派</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
            <?php
                include "sql.php";
                $link = db();
                if(!$link){
                    echo "db_con_wrong";
                }

                #連 user_email session
                $user_email = user();
                if(empty($user_email)){
                    header("location:../michelle/login.php");
                }
                
                $sort = $_GET['method'];
                $sql = "SELECT * FROM dessert.recipe where rec_sort = '$sort'";
                $result = mysql_query($sql);
                while($row = mysql_fetch_row($result)){

            ?>
            
                <div class="col-lg-3 col-md-4 col-sm-6 mix <?php echo $filter ?>">
                
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="<?php echo $row[2] ?>">
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#"><?php echo $row[1] ?></a></h6>
                            <h6><?php echo $row[8] ?></h6>
                            
                        </div>
                    </div>
                </div>
                <?php
                }
                mysql_close(db());
                ?> 
            </div>
        </div>
        
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Js Plugins -->
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.nice-select.min.js"></script>
    <script src="../js/jquery-ui.min.js"></script>
    <script src="../js/jquery.slicknav.js"></script>
    <script src="../js/mixitup.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/main.js"></script>



</body>

</html>