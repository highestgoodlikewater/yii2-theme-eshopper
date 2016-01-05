<?php

    use common\widgets\Alert;
    
?>

<?php $this->beginContent( '@app/../themes/eshopper/views/layouts/base.php' ); ?>

    <!-- Content -->
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php echo Alert::widget() ?>
                </div>
            </div> 
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <div class="brands_products">
                            <h2>Category</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                   <li>
                                        <a href="/category/1">
                                            Category 01
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/category/2">
                                            Category 02
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
        </div>
    </section>

<?php $this->endContent(); ?>

<!-- end product layouts -- >