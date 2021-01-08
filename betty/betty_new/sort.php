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
    
    $sort = $_GET['sort'];
    if($sort == "鬆餅"){
        $active1 = 'class="active"';
    }
    else if($sort == "蛋糕"){
        $active2 = 'class="active"';
    }
    else if($sort == "餅乾"){
        $active3 = 'class="active"';
    }
    else if($sort == "布丁果凍"){
        $active4 = 'class="active"';
    }
    else if($sort == "甜湯"){
        $active5 = 'class="active"';
    }
    else if($sort == "派塔"){
        $active6 = 'class="active"';
    }
    else if($sort == "麵包"){
        $active7 = 'class="active"';
    }
    else if($sort == "巧克力糖果"){
        $active8 = 'class="active"';
    }
    ?>
    <!-- Featured Section Be(gin -->
    <section class="featured spad">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>全部分類</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li><a href="sort.php?sort=鬆餅" <?php echo $active1; ?>>鬆餅</a></li>
                            <li><a href="sort.php?sort=蛋糕" <?php echo $active2; ?>>蛋糕</a></li>
                            <li><a href="sort.php?sort=餅乾" <?php echo $active3; ?>>餅乾</a></li>
                            <li><a href="sort.php?sort=布丁果凍" <?php echo $active4; ?>>布丁果凍</a></li>
                            <li><a href="sort.php?sort=甜湯" <?php echo $active5; ?>>甜湯</a></li>
                            <li><a href="sort.php?sort=派塔" <?php echo $active6; ?>>派塔</a></li>
                            <li><a href="sort.php?sort=麵包" <?php echo $active7; ?>>麵包</a></li>
                            <li><a href="sort.php?sort=巧克力糖果" <?php echo $active8; ?>>巧克力糖果</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            
            <?php
                include "sql.php";
                $link = db();
                if(!$link){
                    echo "db_con_wrong";
                }
                $sql = "SELECT * FROM recipe WHERE rec_sort='$sort'";
                $result = mysqli_query($link, $sql);
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                         ?>
                        <div class="row">
                            <div class="featured__item">
                                <div class="featured__item__pic set-bg" data-setbg="<?php echo $row['rec_image']; ?>">
                                </div>
                                <div class="featured__item__text">
                                    <h6><a href="#"><?php echo $row['rec_name']; ?></a></h6>
                                    <h6><?php echo $row['user_email']; ?></h6>

                                </div>
                            </div>
                        </div>
                        
                        <?php
                    }   
                }   
                mysqli_close($link);
            ?> 
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