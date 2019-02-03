<?php

/* @var $this yii\web\View */

$this->title = 'Ivan Demirovic';
?>
        <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>

        <aside id="colorlib-aside" role="complementary" class="border js-fullheight">
            <div class="text-center">
                <div class="author-img" style="background-image: url(images/about.jpg);"></div>
                <h1 id="colorlib-logo"><a href="index.php">Ivan Demirovic</a></h1>
                <span class="position">PHP Developer from Serbia</span>
            </div>

            <?=$this->render('navbar')?>


            <?=$this->render('navfooter')?>

        </aside>

        <div id="colorlib-main">


            <?=$this->render('home')?>


            <?=$this->render('about')?>


            <?=$this->render('services')?>


            <?=$this->render('counters')?>


            <?=$this->render('skills')?>


            <?=$this->render('education')?>


            <?=$this->render('experience')?>


            <?=$this->render('work')?>


<!--            --><?/*=$this->render('blog')*/?>


            <?=$this->render('contact')?>


        </div><!-- end:colorlib-page -->