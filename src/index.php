<?php require_once __DIR__."/config.php"; ?>

<?php require_once SITE_ROOT .'/head/main_head.php'; ?>

<div class="ui one column grid">
  <div class="row">
    <div class="column">
<!-- Start of Menu -->
      <div class="ui menu attached inverted ">
              <!-- Kodily Logo -->
              <?php require_once SITE_ROOT .'/menu/items/nav_logo.php'; ?>
              <!-- Project List Dropdown -->

              <!-- Company Dropdown -->
              <? /* php require_once('menu/items/company_dropdown.php');  */ ?>
          <!-- ====== Right Menu ====== -->
          <div class="right menu">
              <!--Notifications Dropdown (Right) -->

              <!-- Profile Dropdown (Right) -->
              <div class="item">
                      <div class="ui primary button" onclick="window.location.href='/projects/main_active_projects.php'">Login</div>
                  </div>

                  <div class="item">
        <div class="ui primary button" onclick="window.location.href='/projects/main_active_projects.php'">Sign Up</div>
    </div>
          </div>
          <!-- End of right menu -->
      </div>

<!-- End of Menu -->
    </div>
  </div>
</div>



<div class="ui alternate stripe vertical segment">
  <div class="ui stackable center aligned grid container">
    <div class="fourteen wide column">
      <h1 class="ui icon header">
        <img class="ui inline icon image" src="/images/icons/rocket.png">
        White Label Digital Service
      </h1>
      <div class="ui stackable center aligned vertically padded grid">
        <div class="eight wide column">
          <h3 class="ui header">Enterprise Ready</h3>
          <p>Build tools, performance logging, support for custom definitions, multiple-levels of theme inheritance—a developer's dream.</p>
          <a class="ui large right labeled primary icon button" href="/introduction/getting-started.html">
            <i class="right chevron icon"></i>
            Get Started Now
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
