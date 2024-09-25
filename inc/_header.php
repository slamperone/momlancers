   <!-- Preloader -->
    <div class="preloader">
        <div class="cws_loader">
            <span>LOADING...</span>
            <div class="hex"></div>
            <div class="hex"></div>
            <div class="hex"></div>
            <div class="hex"></div>
            <div class="hex"></div>
            <div class="hex"></div>
            <div class="hex"></div>
        </div>
    </div>
    
    <!-- Main Header-->
    <header class="main-header">
        <!-- Main box -->
        <div class="main-box">
            <div class="menu-box">
                <div class="logo"><a href="./index.php"><img src="images/logo.png" alt="STANDS AVILA" title="FABRICACIÓN DE STANDS" srcset="images/logo-white-big.png 2x"></a></div>

                <!--Nav Box-->
                <div class="nav-outer">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="">
                                    <a href="index.php"><span>Inicio</span></a>
                                    
                                </li>
                                 <li class="">
                                    <a href="./nosotros.php"><span>Nosotros</span></a>
                                    
                                </li>
                     
                                 <li class="">
                                    <a href="./productos.php"><span>Productos</span></a>
                                </li>
                            
                                <li class="">
                                    <a href="./contacto.php"><span>Contacto</span></a>
                                </li>
                                
                    
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->

                    <div class="outer-box clearfix">
                        <!-- Search Btn -->
                        <div class="search-box">
                            <button class="search-btn"><i class="fa fa-search"></i></button>
                        </div>

                        <!-- Shoppping Car -->
                        <div class="cart-btn">
                            <a href="shopping-cart.html"><i class="icon flaticon-shopping-cart-empty-side-view"></i> <span class="count">2</span></a>

                            <div class="shopping-cart">
                                <ul class="shopping-cart-items">
                                    <li class="cart-item">
                                        <img src="https://via.placeholder.com/300x300" alt="#" class="thumb" />
                                        <span class="item-name">Night Security Cam 2Z1</span>
                                        <span class="item-quantity">1 x <span class="item-amount">$84.00</span></span>
                                        <a href="shop-single.html" class="product-detail"></a>
                                        <button class="remove-item"><span class="fa fa-times"></span></button>
                                    </li>

                                    <li class="cart-item">
                                        <img src="https://via.placeholder.com/300x300" alt="#" class="thumb"  />
                                        <span class="item-name">Day Security Camera B2Z1</span>
                                        <span class="item-quantity">1 x <span class="item-amount">$13.00</span></span>
                                        <a href="shop-single.html" class="product-detail"></a>
                                        <button class="remove-item"><span class="fa fa-times"></span></button>
                                    </li>
                                </ul>

                                <div class="cart-footer">
                                    <div class="shopping-cart-total"><strong>Subtotal:</strong> $97.00</div>
                                    <a href="cart.html" class="theme-btn">View Cart</a>
                                    <a href="checkout.html" class="theme-btn">Checkout</a>
                                </div>
                            </div> <!--end shopping-cart -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="outer-box">
                <!--Logo-->
                <div class="logo">
                    <a href="#" title="Sticky Logo"><img src="images/sticky-logo.png" alt="Sticky Logo"></a>
                </div>

                <!--Nav Outer-->
                <div class="nav-outer">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div><!-- End Sticky Menu -->

        <!-- Mobile Header -->
        <div class="mobile-header">
            <div class="logo"><a href="<?=get_site_url(); ?>"><img src="images/logo.png" alt="STANDS AVILA" title="FABRICACIÓN DE STANDS" srcset="images/logo-white-big.png 2x"></a></div>

            <!--Nav Box-->
            <div class="nav-outer clearfix">
                <!--Keep This Empty / Menu will come through Javascript-->
            </div>
        </div>

        <!-- Mobile Menu  -->
        <div class="mobile-menu">            
            <nav class="menu-box">
                <div class="nav-logo"><a href="<?=get_site_url(); ?>"><img src="images/logo.png" alt="STANDS AVILA" title="FABRICACIÓN DE STANDS" srcset="images/logo-white-big.png 2x"></a></div> 
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </nav>
        </div><!-- End Mobile Menu -->

        <!-- Header Search -->
        <div class="search-popup">
            <span class="search-back-drop"></span>
            
            <div class="search-inner">
                <button class="close-search"><span class="fa fa-times"></span></button>
                <form method="post" action="blog-showcase.html">
                    <div class="form-group">
                        <input type="search" name="search-field" value="" placeholder="Search..." required="">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Header Search -->

    </header>
    <!--End Main Header -->