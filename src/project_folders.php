
<?php require_once('html_head.php'); ?>

<!--=========== Start Grid   =============== -->

<div class="ui four column doubling stackable grid container">


  <?php
  for ($i = 0; $i < 8; $i++) {
  ?>

  <div class="column">

<!-- ===== Card Starts ===== -->

    <div class="ui card">
        <div class="content">
            <div class="header">
                Test Project
<!-- ===== Archive Project ===== -->
                <div class="ui inline right floated">
                  <button class="ui icon button basic" id="target">
                    <i class="archive icon"></i>
                  </button>
                </div>
            </div>
        </div>
<!-- ===== End of Project Header ===== -->

        <div class="content">
  <!-- ===== Progress bar ===== -->
            <div class="ui progress active">
                <div class="bar"></div>
                <div class="progress"></div>
            </div>

<!-- ===== Content ===== -->
            <div class="ui items">

                <div class="item">
                    <div class="header">
                        <i class="calendar Outline icon"></i>

                    </div>
                    <div class="middle aligned content">
                        <div class="text">
                            <p>Last updated: <b>10/09/10</b></p>
                        </div>
                    </div>

                </div>
            </div>

<!-- ===== End of contents ===== -->





</div>





        <div class="ui bottom attached button">
          Open Project
        </div>

      </div>


  </div>




  <?php
  }
  ?>

    </div>
