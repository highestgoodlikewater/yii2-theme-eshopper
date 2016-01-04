<?php

    use yii\helpers\Html;
    use frontend\assets\AppAsset;
    AppAsset::register($this);
    
?>

<?php $this->beginPage(); ?>

<!DOCTYPE html>
<html lang="<?php echo \Yii::$app->language; ?>">
    
    <head>
        
        <meta http-equiv="Content-Type" content="text/html; charset=<?php echo \Yii::$app->charset; ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php echo Html::csrfMetaTags(); ?>
        <title><?php echo Html::encode(!empty($this->title) ? strtoupper($this->title) . ' | ' : null); ?>E-COMMERCE</title>
        
        <script type="text/javascript">
            var baseUrl = '<?php echo \Yii::$app->urlManager->createAbsoluteUrl(['/']); ?>';
        </script>
        
        <?php $this->head(); ?>
        
    </head>
    
    <body>
        
        <div id="loading">
            <img class="loading-img" src="/images/loader.gif">
        </div>
        
        <?php $this->beginBody(); ?>
        
            <!-- Get Header -->
            <header id="header">
                <div class="header_top">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="contactinfo">
                                    <ul class="nav nav-pills">
                                        <li><a href="#"><i class="fa fa-phone"></i> +668-895-0188</a></li>
                                        <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="social-icons pull-right">
                                    <ul class="nav navbar-nav">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
		</div>
                <div class="header-middle">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="logo pull-left">
                                    <a href="/" style="color:#999;">
                                        <h4><i class="fa fa-product-hunt"></i> E-COMMERCE</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="shop-menu pull-right">
                                    <ul class="nav navbar-nav">
                                        <li><a href="/product"><i class="fa fa-product-hunt"></i> Products</a></li>
                                        <li><a href="/payment"><i class="fa fa-paypal"></i> Payment</a></li>
                                        <li><a href="/checkout"><i class="fa fa-send"></i> Checkout</a></li>
                                        <li><a href="/cart" id="shopping-cart"><i class="fa fa-shopping-cart"></i> Cart (0)</a></li>
                                        <?php if(\Yii::$app->user->isGuest): ?>
                                            <li><a href="/site/signup"><i class="fa fa-sign-in"></i> Sign up</a></li>
                                            <li><a href="/site/login"><i class="fa fa-lock"></i> Sign in</a></li>
                                        <?php else: ?>
                                            <li><a href="/site/logout"><i class="fa fa-sign-in"></i> Sign out (<?php echo \Yii::$app->user->identity->username; ?>)</a></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-9">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="mainmenu pull-left">
                                    <ul class="nav navbar-nav collapse navbar-collapse">
                                        <li><a href="/" class="active">Home</a></li>
                                        <li class="dropdown">
                                            <a href="#">Menu<i class="fa fa-angle-down"></i></a>
                                            <ul role="menu" class="sub-menu">
                                                <li><a href="#">Products</a></li>
                                                <li><a href="#">Payment</a></li> 
                                                <li><a href="#">Checkout</a></li> 
                                                <li><a href="#">Cart</a></li> 
                                            </ul>
                                        </li> 
                                        <li><a href="/site/about">About</a></li>
                                        <li><a href="/site/contact">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="search_box pull-right">
                                    <input type="text" placeholder="Search"/>
                                </div>
                            </div>
                        </div>
                    </div>
		</div>
            </header>
            
            <!-- Get Content -->
            <?php echo $content; ?>
            
            <!-- Get Footer -->
            <footer id="footer">
                
                <div class="footer-widget">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="single-widget">
                                    <h2>Column</h2>
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="#">Menu 1 </a></li>
                                        <li><a href="#">Menu 2</a></li>
                                        <li><a href="#">Menu 3</a></li>
                                        <li><a href="#">Menu 4</a></li>
                                        <li><a href="#">Menu 5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="single-widget">
                                    <h2>Column</h2>
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="#">Menu 1</a></li>
                                        <li><a href="#">Menu 2</a></li>
                                        <li><a href="#">Menu 3</a></li>
                                        <li><a href="#">Menu 4</a></li>
                                        <li><a href="#">Menu 5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="single-widget">
                                    <h2>Column</h2>
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="#">Menu 1</a></li>
                                        <li><a href="#">Menu 2</a></li>
                                        <li><a href="#">Menu 3</a></li>
                                        <li><a href="#">Menu 4</a></li>
                                        <li><a href="#">Menu 5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="single-widget">
                                    <h2>Column</h2>
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="#">Menu 1</a></li>
                                        <li><a href="#">Menu 2</a></li>
                                        <li><a href="#">Menu 3</a></li>
                                        <li><a href="#">Menu 4</a></li>
                                        <li><a href="#">Menu 5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-3 col-sm-offset-1">
                                <div class="single-widget">
                                    <h2>About Shopper</h2>
                                    <form action="#" class="searchform">
                                        <input type="text" placeholder="Your email address" />
                                        <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                                        <p>Get the most recent updates from <br />our site and be updated your self...</p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
		</div>
                
                <div class="footer-bottom">
                    <div class="container">
                        <div class="row">
                            <p class="pull-left">Copyright © <?php echo date('Y',time());?> E-COMMERCE. All rights reserved.</p>
                            <p class="pull-right">Designed by <span>Themeum</span></p>
                        </div>
                    </div>
		</div>
                
            </footer>

        <?php $this->endBody(); ?>
        
    </body>
</html>
<?php $this->endPage(); ?>

<!-- end base layouts -- >