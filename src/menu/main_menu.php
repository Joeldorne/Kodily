<?php require_once __DIR__."/../config.php"; ?>



<div class="ui one column grid">
  <div class="row">
    <div class="column">
<!-- Start of Menu -->
      <div class="ui menu attached inverted ">
              <!-- Kodily Logo -->
              <?php require_once SITE_ROOT .'/menu/items/nav_logo.php'; ?>
              <!-- Project List Dropdown -->
              <?php require_once SITE_ROOT .'/menu/items/projects_back.php'; ?>
              <!-- Company Dropdown -->
              <? /* php require_once('menu/items/company_dropdown.php');  */ ?>
          <!-- ====== Right Menu ====== -->
          <div class="right menu">
              <!--Notifications Dropdown (Right) -->
              <?php require_once SITE_ROOT .'/menu/items/nav_notifications.php'; ?>
              <!-- Profile Dropdown (Right) -->
              <?php require_once SITE_ROOT .'/menu/items/nav_profile.php'; ?>
          </div>
          <!-- End of right menu -->
      </div>

<!-- End of Menu -->
    </div>
  </div>
</div>
