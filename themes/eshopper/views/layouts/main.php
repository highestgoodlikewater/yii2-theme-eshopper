<?php

    use yii\widgets\Breadcrumbs;
    use common\widgets\Alert;
    
?>

<?php $this->beginContent( '@app/../themes/eshopper/views/layouts/base.php' ); ?>

    <!-- Content -->
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php echo Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]) ?>
                    <?php echo Alert::widget() ?>
                </div>
            </div>  
            <div class="row">
                <div class="col-lg-12">
                    <!-- แสดง Content ต่าง ๆ -->
                    <?php echo $content; ?> 
                </div>
            </div>   
        </div>
    </section>

<?php $this->endContent(); ?>

<!-- end main layouts -- >