<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use app\models\User;
use backend\models\Subscriber;
use backend\models\Message;
use common\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
AppAsset::register($this);
if (Yii::$app->user->isGuest) {
    return Yii::$app->getResponse()->redirect(['site/login'], 302);
}
$subscriber = Subscriber::find()->orderBy('date DESC')->limit(4)->all();
$messages = Message::find()->orderBy('date DESC')->limit(4)->all();
?>
<?php $this->beginPage()?>
<!DOCTYPE html>
<html lang="<?=Yii::$app->language?>">
<head>
    <meta charset="<?=Yii::$app->charset?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags()?>
    <title><?=Html::encode($this->title)?></title>
    <?php $this->head()?>
</head>
<body>
<?php $this->beginBody()?>
<div class="wrap">
    <body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=Url::toRoute(['site/index'])?>">
        <!-- <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div> -->
        <div class="sidebar-brand-text mx-3"><h3 class="text-left">Sigma Pro</h3></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?=Url::toRoute(['site/index'])?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <li class="nav-item">
        <a class="nav-link" href="<?=Url::toRoute(['menu/index'])?>">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Menu</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=Url::toRoute(['testimonial/index'])?>">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Testimonial</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=Url::toRoute(['subscriber/index'])?>">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Subscribe</span></a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="<?=Url::toRoute(['message/index'])?>">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Message</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>CMS</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Setup</h6>
            <a class="collapse-item" href="<?=Url::toRoute(['contact/index'])?>">Contact</a>
            <a class="collapse-item" href="<?=Url::toRoute(['event/index'])?>">Event</a>
            <a class="collapse-item" href="<?=Url::toRoute(['about-us/index'])?>">About Us</a>
            <a class="collapse-item" href="<?=Url::toRoute(['custom-field/index'])?>">Custom Field</a>
            <a class="collapse-item" href="<?=Url::toRoute(['food-type/index'])?>">Food Type</a>
            <a class="collapse-item" href="<?=Url::toRoute(['chef/index'])?>">Chef</a>
            <h6 class="collapse-header">Setup</h6>
            <a class="collapse-item" href="<?=Url::toRoute(['city/index'])?>">City</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter"><?=Message::find()->count();?>+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  New Messages
                </h6>
                <?php foreach ($messages as $sms): ?>
                  <a class="dropdown-item d-flex align-items-center" href="<?=Url::toRoute(['message/index'])?>">
                    <div class="mr-3">
                      <div class="icon-circle bg-warning">
                        <i class="fas fa-exclamation-triangle text-white"></i>
                      </div>
                    </div>
                    <div>
                      <div class="small text-gray-500"><?= $sms->date ;?></div>
                      <?=Html::encode($sms->text_message) ;?>
                    </div>
                  </a>
                <?php endforeach ?>
                <a class="dropdown-item text-center small text-gray-500" href="<?=Url::toRoute(['message/index'])?>">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  New Subscribe
                </h6>
                <?php foreach ($subscriber as $key => $value): ?>
                  <a class="dropdown-item d-flex align-items-center" href="<?=Url::toRoute(['subscriber/index'])?>">
                    <!-- <div class="dropdown-list-image mr-3">
                      <i class="fa fa-ticket"></i>
                      <div class="status-indicator bg-success"></div>
                    </div> -->
                    <div class="font-weight-bold">
                      <div class="text-truncate"><?=$value->email;?></div>
                      <div class="small text-gray-500"><?=$value->date;?></div>
                    </div>
                  </a>
                <?php endforeach?>
                <a class="dropdown-item text-center small text-gray-500" href="<?=Url::toRoute(['subscriber/index'])?>">Read More</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?=Html::tag('span', Html::encode(common\models\User::findOne(Yii::$app->user->getId())->username), ['class' => 'mr-2 d-none d-lg-inline text-gray-600 small'])?>
                <img class="img-profile rounded-circle" src="<?=Yii::$app->params['backend_url'];?>/assets/img/profile-icon.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?=Url::toRoute(['user/index'])?>">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="<?=Url::toRoute(['custom-content/index'])?>"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings</a>

                <a class="dropdown-item" href="<?=Url::toRoute(['../site/index'], true)?>">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  View Site
                </a>
                <div class="dropdown-divider"></div>
                <?=Html::a('<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout', ['#'], ['class' => 'dropdown-item', 'data-toggle' => 'modal', 'data-target' => '#logoutModal'], ['data' => ['method' => 'post']])?>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
        <!-- Main Content -->
        <div class="container-fluid" style="height: 100%;">

          <?=
Breadcrumbs::widget([
    'homeLink' => [
        'label' => Yii::t('yii', 'Home' . '|'),
        'url' => Yii::$app->homeUrl,
    ],
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
])
?>
          <?=Alert::widget()?>
<?php
$js = <<< JS
  $(".alert").animate({opacity: 1.0}, 3000).fadeOut("slow");
JS;
$this->registerJs($js, yii\web\View::POS_READY);
?>
          <?=$content?>
        </div>
        <!-- End of Main Content -->
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Sigma Pro</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top" style="display: inline;">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Are you sure you want to logout?</div>
        <div class="modal-footer">
          <button class="btn btn-success" type="button" data-dismiss="modal">Cancel</button>
            <?=Html::a('Logout', ['site/logout'], ['class' => 'btn btn-primary', 'data' => ['method' => 'post']])?>
        </div>
      </div>
    </div>
  </div>
</body>
</div>
<?php $this->endBody()?>
</body>
</html>
<?php $this->endPage()?>
