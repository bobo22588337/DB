<?php
function head($i){
    if($i == "islogin"){
        ?>
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
                                <input type="text" placeholder="What do you need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="header__cart">
                            <ul>
                                <li><a href="../sierra/user_detail.php?method=love"><i class="fa fa-heart"></i></a></li>
                                <li><a href="../sierra/recipe_new.php"><i class="fa fa-upload"></i></a></li>
                                <li><a href="../sierra/user_detail.php?method=publish"><i class="fa fa-user"></i></a></li>
                            </ul>

                            <div class="header__top__right__auth">
                                <a href="../michelle/logout.php">logout</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </header>
        <!-- Header Section End -->
        <?php
    }
    else if($i == "nologin"){
        ?>
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
                                <input type="text" placeholder="What do you need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="header__cart">
                            <ul>
                                <li><a href="../michelle/login.php"><i class="fa fa-heart"></i></a></li>
                                <li><a href="../michelle/login.php"><i class="fa fa-upload"></i></a></li>
                                <li><a href="../michelle/login.php"><i class="fa fa-user"></i></a></li>
                            </ul>
                            <div class="header__top__right__auth">
                                <a href="../michelle/login.php">Login</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </header>
        <!-- Header Section End -->
        <?php
    }
}
?>
