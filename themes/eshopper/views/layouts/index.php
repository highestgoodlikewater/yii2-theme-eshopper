<?php

    use yii\widgets\Breadcrumbs;
    use common\widgets\Alert;
    
?>

<?php $this->beginContent( '@app/../themes/eshopper/views/layouts/base.php' ); ?>

    <!-- Slider -->
    <section id="slider">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-COMMERCE</h1>
                                    <h2>Free E-Commerce Template</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="/images/home/girl1.jpg" class="girl img-responsive" alt="" />
                                    <img src="/images/home/pricing.png"  class="pricing" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-COMMERCE</h1>
                                    <h2>100% Responsive Design</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="/images/home/girl2.jpg" class="girl img-responsive" alt="" />
                                    <img src="/images/home/pricing.png"  class="pricing" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-COMMERCE</h1>
                                    <h2>Free Ecommerce Template</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="/images/home/girl3.jpg" class="girl img-responsive" alt="" />
                                    <img src="/images/home/pricing.png" class="pricing" alt="" />
                                </div>
                            </div>
                        </div>
                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <?php echo Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]) ?>
                    <?php echo Alert::widget() ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Content -->
    <section id="content">
        <div class="container">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <div class="brands_products">
                        <h2>Category</h2>
                        <div class="brands-name">
                            <ul class="nav nav-pills nav-stacked">
                                <li>
                                    <a href="/category/1">
                                        Category 01
                                        <span class="pull-right">(0)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/category/2">
                                        Category 02
                                        <span class="pull-right">(0)</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div><br />
                </div>
            </div>
            <div class="col-sm-9">
                <!-- แสดง Content ต่าง ๆ -->
                <?php echo $content; ?> 
            </div>
        </div>
    </section>

<?php $this->endContent(); ?>

<!-- end index layouts -- >