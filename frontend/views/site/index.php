<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\models\CustomContent;
use backend\models\CustomField;
use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
AppAsset::register($this);
$base_url = Yii::getAlias('@web');
$this->title = 'Sigma-Restaurant';
?>
<style>
  .events {
    background: url(<?=Yii::$app->params['backend_url'] . CustomField::findOne(['key' => 'KL6T8pWM2ar9'])->feature_image;?>) center center no-repeat;
    background-size: cover;
    position: relative;
  }
  .about {
    background: url(<?=Yii::$app->params['backend_url'] . CustomField::findOne(['key' => 'ixN6k7eNYbTa'])->feature_image;?>) center center;
    background-size: cover;
    position: relative;
    padding: 80px 0;
  }
</style>
<main id="main">
  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
          <div class="about-img">
            <?=Html::img(Yii::$app->params['backend_url'] . $about_us->feature_image, ['alt' => 'About Us'])?>
          </div>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <?=Html::tag('h3', Html::encode($about_us->title))?>
          <?=Html::tag('p', Html::encode($about_us->description), ['class' => 'font-italic'])?>
        </div>
      </div>
    </div>
  </section><!-- End About Section -->

  <!-- ======= Why Us Section ======= -->
  <section id="why-us" class="why-us">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <?=Html::tag('h2', Html::encode(CustomContent::findOne(['key' => 'BkdHcUpvaqkF'])->name))?>
        <?=Html::tag('p', Html::encode(CustomContent::findOne(['key' => 'F2Z4Cc2UbBS8'])->name))?>
      </div>

      <div class="row">
        <?php
$i = '1';
foreach ($why_us as $key => $value) {
    ?>
          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <?=Html::tag('span', Html::encode($i))?>
              <?=Html::tag('h4', Html::encode($value->sub_title))?>
              <?=Html::tag('p', Html::encode($value->description))?>
            </div>
          </div>
          <?php
$i++;
}
?>
      </div>

    </div>
  </section><!-- End Why Us Section -->

  <!-- ======= Menu Section ======= -->
  <section id="menu" class="menu section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <?=Html::tag('h2', Html::encode(CustomContent::findOne(['key' => '_x-01Nk01yB0'])->name))?>
        <?=Html::tag('p', Html::encode(CustomContent::findOne(['key' => 'A3r09kxbeyV8'])->name))?>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="menu-flters">
            <li data-filter="*" class="filter-active">All</li>
            <?php
foreach ($food_type as $foodType) {
    ?>
              <li data-filter=".filter-<?=$foodType->name?>"><?=$foodType->name?></li>
              <?php
}
?>
          </ul>
        </div>
      </div>

      <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
        <?php foreach ($menu as $foods): ?>
          <div class="col-lg-6 menu-item filter-<?=Html::encode($foods->foodType->name);?>">
            <?=Html::img(Yii::$app->params['backend_url'] . $foods->feature_image, ['alt' => 'Food Image', 'class' => 'menu-img'])?>
    <div class="menu-content">
      <?=Html::a($foods->name, ['#'])?><?=Html::tag('span', Html::encode($foods->price))?>
            </div>
            <div class="menu-ingredients">
              <?=Html::encode($foods->description);?>
            </div>
          </div>
        <?php endforeach?>
      </div>

    </div>
  </section><!-- End Menu Section -->

  <!-- ======= Events Section ======= -->
  <section id="events" class="events">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <?=Html::tag('h2', Html::encode(CustomContent::findOne(['key' => 'MB1nkUrS9jp5'])->name))?>
        <?=Html::tag('p', Html::encode(CustomContent::findOne(['key' => 'ch-cIncaK13A'])->name))?>
      </div>

      <div class="owl-carousel events-carousel" data-aos="fade-up" data-aos-delay="100">
        <?php foreach ($event as $ev): ?>
          <div class="row event-item">
            <div class="col-lg-6">
             <?=Html::img(Yii::$app->params['backend_url'] . $ev->feature_image, ['class' => 'img-fluid', 'alt' => $ev->name])?>
           </div>
           <div class="col-lg-6 pt-4 pt-lg-0 content">
            <?=Html::tag('h3', Html::encode($ev->name))?>
            <div class="price">
              <p>
                <?=Html::tag('span', Html::encode($ev->price))?>
              </p>
            </div>
            <?=Html::tag('p', Html::encode($ev->description), ['class' => 'font-italic'])?>
          </div>
        </div>
      <?php endforeach?>
    </div>
  </div>
</section><!-- End Events Section -->

<!-- ======= Book A Table Section ======= -->
<section id="book-a-table" class="book-a-table">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <?=Html::tag('h2', Html::encode(CustomContent::findOne(['key' => 'cRVUGEZ-5KCv'])->name))?>
      <?=Html::tag('p', Html::encode(CustomContent::findOne(['key' => 'LPv2iCP3IMO4'])->name))?>
    </div>

    <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
      <div class="form-row">
        <div class="col-lg-4 col-md-6 form-group">
          <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
          <div class="validate"></div>
        </div>
        <div class="col-lg-4 col-md-6 form-group">
          <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
          <div class="validate"></div>
        </div>
        <div class="col-lg-4 col-md-6 form-group">
          <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
          <div class="validate"></div>
        </div>
        <div class="col-lg-4 col-md-6 form-group">
          <input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
          <div class="validate"></div>
        </div>
        <div class="col-lg-4 col-md-6 form-group">
          <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
          <div class="validate"></div>
        </div>
        <div class="col-lg-4 col-md-6 form-group">
          <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
          <div class="validate"></div>
        </div>
      </div>
      <div class="form-group">
        <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
        <div class="validate"></div>
      </div>
      <div class="mb-3">
        <div class="loading">Loading</div>
        <div class="error-message"></div>
        <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
      </div>
      <div class="text-center"><button type="submit">Book a Table</button></div>
    </form>

  </div>
</section><!-- End Book A Table Section -->

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Testimonials</h2>
      <p>What they're saying about us</p>
    </div>

    <div class="owl-carousel testimonials-carousel" data-aos="zoom-in" data-aos-delay="100">
      <?php
foreach ($testimonial as $testimonials) {
    ?>
        <div class="testimonial-item">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            <?=$testimonials->description;?>
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <?=Html::img(Yii::$app->params['backend_url'] . $testimonials->feature_image, ['class' => 'testimonial-img', 'alt' => $testimonials->name])?>
          <?=Html::tag('h3', Html::encode($testimonials->name))?>
          <?=Html::tag('h4', Html::encode($testimonials->position))?>
        </div>
        <?php
}
?>
    </div>
  </div>
</section><!-- End Testimonials Section -->

<!-- ======= Gallery Section ======= -->
<section id="gallery" class="gallery">

  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <?=Html::tag('h2', Html::encode(CustomContent::findOne(['key' => 'v8zyxo_vrku7'])->name))?>
      <?=Html::tag('p', Html::encode(CustomContent::findOne(['key' => '37HyJaURg1td'])->name))?>
    </div>
  </div>

  <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
    <div class="row no-gutters">
      <?php foreach ($menu as $menus): ?>
        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="<?=Yii::$app->params['backend_url'] . $menus->feature_image;?>" class="venobox" data-gall="gallery-item">
              <?=Html::img(Yii::$app->params['backend_url'] . $menus->feature_image, ['class' => 'img-fluid', 'alt' => 'Gallery'])?>
            </a>
          </div>
        </div>
      <?php endforeach?>
    </div>

  </div>
</section><!-- End Gallery Section -->

<!-- ======= Chefs Section ======= -->
<section id="chefs" class="chefs">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <?=Html::tag('h2', Html::encode(CustomContent::findOne(['key' => '6RDR080EfxHf'])->name))?>
      <?=Html::tag('p', Html::encode(CustomContent::findOne(['key' => 'QcKgX3JamTMT'])->name))?>
    </div>

    <div class="row">
      <?php foreach ($chefs as $chef): ?>
        <div class="col-lg-4 col-md-6">
          <div class="member" data-aos="zoom-in" data-aos-delay="100">
            <?=Html::img(Yii::$app->params['backend_url'] . $chef->feature_image, ['alt' => $chef->name, 'class' => 'img-fluid'])?>
            <div class="member-info">
              <div class="member-info-content">
                <?=Html::tag('h4', Html::encode($chef->name))?>
                <?=Html::tag('span', Html::encode($chef->position))?>
              </div>
              <div class="social">
                <a href="<?=Html::encode($chef->twitter_link)?>"><i class="icofont-twitter"></i></a>
                <a href="<?=Html::encode($chef->facebook_link)?>"><i class="icofont-facebook"></i></a>
                <a href="<?=Html::encode($chef->instagram_link)?>"><i class="icofont-instagram"></i></a>
                <a href="<?=Html::encode($chef->linkedin_link)?>"><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach?>
    </div>
  </section><!-- End Chefs Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <?=Html::tag('h2', Html::encode($contact->title))?>
        <?=Html::tag('p', Html::encode($contact->short_description))?>
      </div>
    </div>

    <div data-aos="fade-up">
      <iframe class="section_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31054.269067843925!2d103.83885882181814!3d13.363725648356144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31101760ed5ac815%3A0x761d8b9cc8e9ef0!2z4Z6f4Z624Z6A4Z6b4Z6c4Z634Z6R4Z-S4Z6Z4Z624Z6b4Z-Q4Z6ZIOGelOGfgOGem-KAi-GelOGfkuGemuGetuGemQ!5e0!3m2!1sen!2skh!4v1597486331628!5m2!1sen!2skh"></iframe>
    </div>

    <div class="container" data-aos="fade-up">

      <div class="row mt-5">

        <div class="col-lg-4">
          <div class="info">
            <div class="address">
              <i class="icofont-google-map"></i>
              <h4>Location:</h4>
              <?=Html::tag('p', Html::encode($contact->location))?>
            </div>

            <div class="open-hours">
              <i class="icofont-clock-time icofont-rotate-90"></i>
              <h4>Open Hours:</h4>
              <?=Html::tag('p', Html::encode($contact->open_day))?>
            </div>

            <div class="email">
              <i class="icofont-envelope"></i>
              <h4>Email:</h4>
              <?=Html::tag('p', Html::encode($contact->email))?>
            </div>

            <div class="phone">
              <i class="icofont-phone"></i>
              <h4>Call:</h4>
              <?=Html::tag('p', Html::encode($contact->contact))?>
            </div>

          </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">
          <form action="<?= Url::to(['site/send-message']) ;?>" method="post" class="php-email-form">
            <form action='site/send-message' method='POST'>
            <div class="form-row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="col-md-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="8" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
            <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->
  </main><!-- End #main -->