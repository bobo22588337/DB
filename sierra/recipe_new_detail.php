<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>寫食譜</title>

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
    <link rel="stylesheet" href="../css/style.css" type="text/css">

    <!-- sierra.css -->
    <link rel="stylesheet" href="css/sierra.css" type="text/css" charset="utf-8">


</head>

<body>
    
    
    <?php 
    
    include "db.php";
    
    #連 user_email session
    $user_email = user();
    if(!$user_email){
        header("location:#");
    }
    
    ?>

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./shop-grid.html">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">Blog</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                                <li>Free Shipping for all Order of $99</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="img/language.png" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Spanis</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="#"><i class="fa fa-user"></i> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="./index.html">Home</a></li>
                            <li><a href="./shop-grid.html">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.html">Shop Details</a></li>
                                    <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                                    <li><a href="./checkout.html">Check Out</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li class="active"><a href="./blog.html">Blog</a></li>
                            <li><a href="./contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>$150.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <li><a href="#">Fresh Meat</a></li>
                            <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Fruit & Nut Gifts</a></li>
                            <li><a href="#">Fresh Berries</a></li>
                            <li><a href="#">Ocean Foods</a></li>
                            <li><a href="#">Butter & Eggs</a></li>
                            <li><a href="#">Fastfood</a></li>
                            <li><a href="#">Fresh Onion</a></li>
                            <li><a href="#">Papayaya & Crisps</a></li>
                            <li><a href="#">Oatmeal</a></li>
                            <li><a href="#">Fresh Bananas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+65 11.188.888</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- sierra 食譜 START -->
    <section class="write_details write_recipe_pad">
        <div class="container">
            <!-- sierra 寫新食譜 START -->

            <?php            
            #接收從recipe_new_con.php送來的id
            if(isset($_GET['rec_id'])){
                $recipe_id = $_GET['rec_id'];
            }
            
            include "recipe_detail_list.php";
            #抓上面include的值 - START
            
            $check1 = "";
            $check2 = "";
            $check3 = "";
            $check4 = "";
            $check5 = "";
            $check6 = "";
            $check7 = "";
            $check8 = "";
            
            $recipe_name = query("recipe_name");
            $recipe_pic = query("recipe_pic");
            $recipe_sort = query("recipe_sort");
            $recipe_qty = query("recipe_qty");
            $recipe_cooktime = query("recipe_cooktime");
            $food_name = query("food_name");
            $food_qty = query("food_qty");
            $recipe_step = query("recipe_step");
            $recipe_status = query("recipe_status");
            
            #抓上面include的值 - END
            
            #form送出到recipe_new_con,送回的值 - START
            
            if(isset($_GET['rec_name'])){
                $recipe_name = $_GET['rec_name'];
            }
            
            if(isset($_GET['rec_sort'])){
                $recipe_sort = $_GET['rec_sort'];
            }
            
            if(isset($_GET['rec_qty'])){
                $recipe_qty = $_GET['rec_qty'];
            }
            
            if(isset($_GET['rec_cooktime'])){
                $recipe_cooktime = $_GET['rec_cooktime'];
            }
            
            if(isset($_GET['rec_pic'])){
                $recipe_pic = $_GET['rec_pic'];
            }
            
            if(isset($_GET['food_name'])){
                $food_name = unserialize(base64_decode($_GET['food_name']));
            }
            
            if(isset($_GET['food_qty'])){
                $food_qty = unserialize(base64_decode($_GET['food_qty']));
            }
            
            if(isset($_GET['rec_step'])){
                $recipe_step = unserialize(base64_decode($_GET['rec_step']));
            }
            
            #form送出到recipe_new_con,送回的值 - END
            
            if($recipe_sort == "鬆餅"){
                $check1 = 'checked="checked"';
            }
            else if($recipe_sort == "蛋糕"){
                $check2 = 'checked="checked"';
            }
            else if($recipe_sort == "布丁果凍"){
                $check3 = 'checked="checked"';
            }
            else if($recipe_sort == "甜湯"){
                $check4 = 'checked="checked"';
            }
            else if($recipe_sort == "派塔"){
                $check5 = 'checked="checked"';
            }
            else if($recipe_sort == "麵包"){
                $check6 = 'checked="checked"';
            }
            else if($recipe_sort == "巧克力糖果"){
                $check7 = 'checked="checked"';
            }
            else if($recipe_sort == "餅乾"){
                $check8 = 'checked="checked"';
            }
            
            ?>

            <form enctype="multipart/form-data" action="recipe_new_con.php" method="post">

                <input type="hidden" name="rec_id" id="rec_id" value="<?php echo $recipe_id; ?>">
                
                <input type="hidden" name="user_email" id="user_email" value="<?php echo $user_email; ?>">

                <div class="row">
                    <div class="col-lg-8 col-md-7 order-md-1 order-1">
                        <div class="step_button_bg">
                            <input class="write_step_submit" type="submit" value="發布" name="rec_report">
                            <input class="write_step_submit" type="submit" value="儲存" name="rec_save">
                            <input class="write_step_submit" type="submit" value="刪除" name="rec_del">
                            <input class="write_step_submit" type="submit" value="取消" name="rec_cel">
                        </div>

                        <!-- 名稱 -->
                        <div class="step_input_bg1">
                            <p>
                                食譜名稱
                            </p>
                            <input class="write_step_input col-lg-12" type="text" name="rec_name" value="<?php echo $recipe_name; ?>">
                        </div>

                        <!-- 照片 -->
                        <div class="step_input_bg2">
                            <p>
                                上傳照片
                            </p>

                            <div class="pic_input">
                                <img src="<?php echo $recipe_pic; ?>">
                            </div>

                            <input type="file" accept="image/*" name="rec_pic" id="rec_pic" class="file_btn">

                            <input type="hidden" name="rec_pic_text" id="rec_pic_text" value="<?php echo $recipe_pic; ?>">
                        </div>

                        <!-- 分類 -->
                        <div class="step_input_bg3">
                            <p>
                                分類
                            </p>
                            <div>
                                <input type="radio" name="rec_sort" value="1" class="radio_input" <?php echo $check1; ?>>
                                <lable for="rec_sort" class="radio_font">鬆餅</lable>
                                
                                <input type="radio" name="rec_sort" value="2" class="radio_input" <?php echo $check2; ?>>
                                <lable for="rec_sort" class="radio_font">蛋糕</lable>
                                
                                <input type="radio" name="rec_sort" value="3" class="radio_input" <?php echo $check3; ?>>
                                <lable for="rec_sort" class="radio_font">布丁、果凍</lable>
                                
                                <input type="radio" name="rec_sort" value="4" class="radio_input" <?php echo $check4; ?>>
                                <lable for="rec_sort" class="radio_font">甜湯</lable>
                                
                                <input type="radio" name="rec_sort" value="5" class="radio_input" <?php echo $check5; ?>>
                                <lable for="rec_sort" class="radio_font">派塔</lable>
                                
                                <input type="radio" name="rec_sort" value="6" class="radio_input" <?php echo $check6; ?>>
                                <lable for="rec_sort" class="radio_font">麵包</lable>
                                
                                <input type="radio" name="rec_sort" value="7" class="radio_input" <?php echo $check7; ?>>
                                <lable for="rec_sort" class="radio_font">巧克力、糖果</lable>
                                
                                <input type="radio" name="rec_sort" value="8" class="radio_input" <?php echo $check8; ?>>
                                <lable for="rec_sort" class="radio_font">餅乾</lable>
                            </div>
                        </div>

                        <!-- 份量 -->
                        <div class="step_input_bg3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <p>
                                        份量(人份)
                                    </p>
                                    <input class="write_step_input2" type="text" placeholder="人份" name="rec_qty" value="<?php echo $recipe_qty; ?>">
                                </div>
                                <div class="col-lg-6">
                                    <p>
                                        烹調時間(分鐘)
                                    </p>
                                    <input class="write_step_input2" type="text" placeholder="分鐘" name="rec_cooktime" value="<?php echo $recipe_cooktime; ?>">
                                </div>
                            </div>
                        </div>

                        <!-- 食材 -->
                        <!-- food_dynamic_field START-->
                        <div class="step_input_bg4">
                            <p>
                                食材
                            </p>
                            <table id="foodtable_id" class="food_table">
                                <?php
                                
                                for($i = 0; $i < count($food_name); $i++){
                                    ?>
                                    <tr>
                                        <td class="food_td1">
                                            <input class="food_input" type="text" name="food_name[]" placeholder="食材" value="<?php echo $food_name[$i];?>">
                                        </td>
                                        <td class="food_td2">
                                            <input class="food_input" type="text" name="food_qty[]" placeholder="份量" value="<?php echo $food_qty[$i];?>">
                                        </td>
                                        <td>
                                            <input class="food_remove_btn food_remove" type="button" name="food_remove" id="food_remove" value="X">
                                        </td>
                                    </tr>

                                <?php
                                }
                                ?>

                            </table>
                            <input type="button" name="food_add" id="food_add" class="food_add" value="加入食材">
                        </div>
                        <!-- food_dynamic_field END-->

                        <!-- 步驟 -->
                        <!-- step_dynamic_field START-->
                        <div class="step_input_bg5">
                            <p>
                                步驟
                            </p>
                            <table id="steptable_id" class="food_table">

                                <?php
                                for($i = 0; $i < count($recipe_step); $i++){
                                    ?>
                                    <tr>
                                        <td class="step_td1">
                                            <textarea name="rec_step[]" cols="20" rows="5" class="food_input"><?php echo $recipe_step[$i];?></textarea>
                                        </td>
                                        <td>
                                            <input class="food_remove_btn food_remove" type="button" name="step_remove" id="step_remove" value="X">
                                        </td>
                                    </tr>

                                    <?php
                                }
                                ?>
                                
                            </table>
                            <input type="button" name="step_add[]" id="step_add" class="food_add" value="新增步驟">
                        </div>
                        <!-- step_dynamic_field END-->

                    </div>
                </div>
            </form>
            <!-- sierra 寫新食譜 END -->

        </div>
    </section>
    <!-- sierra 食譜 END -->

    <!-- Js Plugins -->
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.nice-select.min.js"></script>
    <script src="../js/jquery-ui.min.js"></script>
    <script src="../js/jquery.slicknav.js"></script>
    <script src="../js/mixitup.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/main.js"></script>

    <!-- sierra js ADD FOOD -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <script>
        var x = 1;
        var step = 1;

        $(document).ready(function() {

            $("#food_add").click(function() {
                x++;

                $("#foodtable_id").append('<tr><td class="food_td1"><input class="food_input" type="text" name="food_name[]" placeholder="食材"></td><td class="food_td2"><input class="food_input" type="text" name="food_qty[]" placeholder="份量"></td><td><input class="food_remove_btn food_remove" type="button" name="food_remove" id="food_remove" value="X"></td></tr>');

            });

            $("#step_add").click(function() {
                step++;

                $("#steptable_id").append('<tr><td class="step_td1"><textarea name="rec_step[]" cols="20" rows="5" class="food_input"></textarea></td><td><input class="food_remove_btn food_remove" type="button" name="step_remove" id="step_remove" value="X"></td></tr>');
            });

            $("#foodtable_id").on('click', '#food_remove', function() {
                $(this).closest('tr').remove();
                x--;
            });

            $("#steptable_id").on('click', '#step_remove', function() {
                $(this).closest('tr').remove();
                step--;
            });
        });

    </script>


</body>

</html>