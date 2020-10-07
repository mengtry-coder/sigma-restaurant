<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\models\Contact;
use backend\models\CustomContent;
use backend\models\CustomField;
use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;

$contact = Contact::findOne(1);

AppAsset::register($this);
?>
<?php $this->beginPage()?>
<!DOCTYPE html>
<html lang="<?=Yii::$app->language?>">
<head>
    <meta charset="<?=Yii::$app->charset?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- HTML Meta Tags -->
    <?=Html::tag('title', Html::encode(CustomContent::findOne(['key' => 'KlBEc1PQ98eN'])->name))?>
    <meta name="description" content="<?=Html::encode(CustomContent::findOne(['key' => 'wjEX0NO2vKWt'])->name);?>">
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="<?=Html::encode(CustomContent::findOne(['key' => 'RjMTITobzqqq'])->name);?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?=Html::encode(CustomContent::findOne(['key' => 'GUNwGDpq5470'])->name);?>">
    <meta property="og:description" content="<?=Html::encode(CustomContent::findOne(['key' => 'bp_PTmIPzPt0'])->name);?>">
    <meta property="og:image" content="<?=Yii::$app->params['backend_url'] . CustomField::findOne(['key' => 'CkXyf8Pro20L'])->feature_image;?>">

    <?php $this->registerCsrfMetaTags()?>
    <title><?=Html::encode($this->title)?></title>
    <?php $this->head()?>
</head>
<body>
<?php $this->beginBody()?>

<style>
#hero {
  width: 100%;
  height: 100vh;
  background: url(<?=Yii::$app->params['backend_url'] . CustomField::findOne(1)->feature_image;?>) top center;
  background-size: cover;
  position: relative;
  padding: 0;
}
</style>
  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-phone"></i> <?=Html::tag('span', Html::encode($contact->contact))?>
        <span class="d-none d-lg-inline-block"><i class="icofont-clock-time icofont-rotate-180"></i> <?=Html::tag('span', Html::encode($contact->open_day))?></span>
      </div>
      <!-- <div class="languages">
        <ul>
          <li>En</li>
          <li><a href="#">De</a></li>
        </ul>
      </div> -->
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="<?=Url::toRoute(['site/index'])?>"><?=Html::tag('p', Html::encode($contact->brand_name))?></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?=Url::toRoute(['site/index'])?>">Home</a></li>
          <li><a href="<?=Url::toRoute(['site/index#about'])?>">About</a></li>
          <li><a href="<?=Url::toRoute(['site/index#gallery'])?>">Gallery</a></li>
          <li><a href="<?=Url::toRoute(['site/index#chefs'])?>">Chefs</a></li>
          <li class="drop-down"><a href="#">Service</a>
            <ul>
              <li><a href="<?=Url::toRoute(['site/index#menu'])?>">Menu</a></li>
              <li><a href="<?=Url::toRoute(['site/index#events'])?>">Events</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>
          <li class="book-a-table text-center"><a href="#book-a-table">Book a table</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-left" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <?=Html::tag('span', Html::encode($contact->brand_name))?></h1>
          <?=Html::tag('h2', Html::encode($contact->description))?>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
            <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Book a Table</a>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center" data-aos="zoom-in" data-aos-delay="200">
          <a href="<?=Html::encode(CustomContent::findOne(['key' => '-TWp3eYH9-R-'])->name);?>" class="venobox play-btn" data-vbtype="video" data-autoplay="true"></a>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->
    <?=Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
])?>
    <?=Alert::widget()?>
    <?=$content?>
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <?=Html::tag('h3', Html::encode($contact->brand_name))?>
              <p>
               <?=Html::encode($contact->location);?><br>
                <strong>Phone:</strong> <?=Html::encode($contact->contact);?><br>
                <strong>Email:</strong> <?=Html::encode($contact->email);?><br>
              </p>
              <div class="social-links mt-3">
                <a href="<?=Html::encode($contact->twitter_url);?>" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="<?=Html::encode($contact->facebook_url);?>" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="<?=Html::encode($contact->instagram_url);?>" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="<?=Html::encode($contact->skype_url);?>" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="<?=Html::encode($contact->linkedin_url);?>" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <?=Html::tag('h4', Html::encode(CustomContent::findOne(['key' => 'kpNl-VrHLgZm'])->name))?>
            <ul>
              <li class="active"><i class="bx bx-chevron-right"></i> <a href="<?=Url::toRoute(['index'])?>">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#menu">Menu</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#events">Events</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#gallery">Gallery</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#chefs">Chefs</a></li>
            </ul>
          </div>

          <!-- <div class="col-lg-3 col-md-6 footer-links">
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="<?=Url::toRoute(['index'])?>">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div> -->

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <?=Html::tag('h4', Html::encode(CustomContent::findOne(['key' => 'kr8j5A7yGHIe'])->name))?>
            <?=Html::tag('p', Html::encode(CustomContent::findOne(['key' => 'VuuEWtnYEMGA'])->name))?>
            <form action="<?=Url::toRoute(['subscribe'])?>" method="post">
              <input type="email" required name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Sigma Pro</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
        Designed by <a href="https://bootstrapmade.com/">Meas Mengtry (Jerric)</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
<?php $this->endBody()?>
</body>
<?php $this->endPage()?>
