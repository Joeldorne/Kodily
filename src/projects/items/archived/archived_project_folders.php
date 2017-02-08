

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
                  <button class="ui icon button basic" id="unarchive_project_trigger">
                    <i class="undo icon"></i>
                  </button>
                </div>
            </div>
        </div>
<!-- ===== End of Project Header ===== -->

        <div class="content">
  <!-- ===== Progress bar ===== -->
            <div class="ui progress">
                <div class="bar"></div>
                <div class="progress"></div>
            </div>

<!-- ===== list of items ===== -->
            <div class="ui items">

<!-- ===== Last Updated ===== -->

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


  <!-- ===== Last Updated ===== -->

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

<!-- ===== End of Items ===== -->




</div>
<!-- ===== End of contents ===== -->











        <button class="ui bottom attached button" onclick="window.location.href='/dashboard/main_dashboard.php'">
          Open Project
        </btton>

      </div>


  </div><!-- end of colum -->


  <?php } ?><!-- end of PHP Loop-->




</div><!-- end of grid -->
