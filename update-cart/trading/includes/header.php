<?php
$contact_stmt = $db->query("SELECT * FROM `tbl_contact_us`");
$contact = $contact_stmt->fetch();
?>
<!-- header 2 -->
<div class="header_area" id="header_contents">
    <header class="main-header header header_v13">
        <div class="header_top">
            <div class="default-container">
                <div class="header_top_inner">
                    <div class="top_left">
                        <ul class="top-links clearfix">
                            <li>
                                <a href="#" class="get_a_quote">Get a best quote </a>
                            <li>
                            <li>Welcome to our company.</li>
                        </ul>
                    </div>
                    <div class="top_right text-right">
                        <ul class="contact_info_two">
                            <li class="single">
                                <p> <span class="icon-telephone"></span> <a
                                        href="tel:+98 060 712 34"><?php echo $contact['phone'] ; ?></a>
                                </p>
                            </li>
                            <li class="single">
                                <p><span class="icon-mail"></span><a
                                        href="mailto:sendmail@creote.com"><?php echo $contact['email'] ; ?></a>
                                </p>
                            </li>
                            <li class="single">
                                <p> <span class="icon-location2"></span>
                                    <?php echo $contact['address'] ; ?></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar_outer get_sticky_header">
            <div class="default-container">
                <nav class="inner_box">
                    <div class="header_logo_box">
                        <a href="index.html" class="logo navbar-brand">
                            <img src="assets/images/logo-default.png" alt="Creote" class="logo_default">
                            <img src="assets/images/logo-default.png" alt="Creote" class="logo__sticky">
                        </a>
                    </div>
                    <div class="navbar_togglers hamburger_menu">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                    <div class="header_content header_content_collapse">

                        <div class="header_menu_box">
                            <div class="navigation_menu">
                                <ul id="myNavbar" class="navbar_nav">
                                    <li
                                        class="menu-item  menu-item-has-children nav-item <?php if($curPageName == "index.php") echo "active" ?>">
                                        <a href="index.php" class="nav-link">
                                            <span>Home</span>
                                        </a>
                                    </li>
                                    <li
                                        class="menu-item menu-item-has-children  nav-item <?php if($curPageName == "buyers.php") echo "active" ?>">
                                        <a href="buyers.php" class="nav-link">
                                            <span>Buyers</span>
                                        </a>
                                    </li>

                                    <li
                                        class="menu-item menu-item-has-children  nav-item <?php if($curPageName == "supplier.php") echo "active" ?>">
                                        <a href="supplier.php" class="nav-link">
                                            <span>Suppliers</span>
                                        </a>
                                    </li>
                                    <li
                                        class="menu-item menu-item-has-children nav-item <?php if($curPageName == "product.php" ) echo "active" ?>">
                                        <a href="product.php" class="nav-link">
                                            <span>Products</span>
                                        </a>
                                    </li>
                                    <!-- <li
                                        class="menu-item  menu-item-has-children  nav-item <?php if($curPageName == "about-us.php") echo "active" ?>">
                                        <a href="about-us.php" class="nav-link">
                                            <span>Abouts</span>
                                        </a>
                                    </li> -->
                                    <?php if(isset($_SESSION['login-customer'])) { ?>
                                    <!-- <li
                                        class="menu-item menu-item-has-children  nav-item <?php if($curPageName == "login.php") echo "active" ?>">
                                        <a href="about-us.php" class="nav-link">
                                            <span>User</span>
                                        </a>
                                    </li> -->

                                    <div class="image-container">
                                        <img src="../assets/icon/profile.png" class="fluid-img" alt="Your Image">
                                        <div class="dropdown">
                                            <select id="fruitsDropdown">
                                                <option value="Apple">Apple</option>
                                                <option value="Banana">Banana</option>
                                                <option value="Orange">Orange</option>
                                                <option value="Mango">Mango</option>
                                                <option value="Grapes">Grapes</option>
                                            </select>
                                        </div>
                                    </div>

                                    <?php }else{ ?>
                                    <li
                                        class="menu-item menu-item-has-children  nav-item <?php if($curPageName == "login.php") echo "active" ?>">
                                        <a href="login.php" class="nav-link">
                                            <span>Login</span>
                                        </a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>

                        </div>


                        <ul class="navbar_right navbar_nav ">
                            <!-- <li>
                                            <button type="button" class="search-toggler"><i
                                                    class="icon-search"></i></button>
                                        </li> -->
                            <!-- <li>
                                            <div class="mini_cart_togglers header_side_cart">
                                                <div class="mini-cart-count">
                                                    0 </div>
                                                <i class="icon-shopping-bag1"></i>
                                            </div>
                                        </li> -->

                            <!-- <li>
                                <button type="button" class="contact-toggler"><i class="icon-menu1"></i></button>
                            </li> -->

                        </ul>
                    </div>

                </nav>


            </div>
        </div>
    </header>
    <!-- end of the loop -->
</div>
<!----header 2 end----->