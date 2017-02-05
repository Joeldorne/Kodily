<!--=========== Start Grid   =============== -->
<div class="ui container ">
    <div class="ui four column grid">

      <?php
      for ($i = 0; $i < 3; $i++) {
      ?>
        <div class="row">

            <!--=========== Start first card =============== -->
            <div class="column">
                <div class="ui card">
                    <div class="content">
                        <div class="header">
                            NHS Bug Fixes
                            <!--Dropdown -->
                            <div class="ui inline right floated">

                                <button class="ui icon button basic"  id="target">
  <i class="archive icon"></i>
</button>
                            </div>

                            <!--Dropdown end -->
                        </div>
                    </div>

                    <div class="content">



                        <div class="ui progress active">
                            <div class="bar"></div>
                            <div class="progress"></div>
                        </div>


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


                        <div class="ui items">

                            <div class="item">
                                <div class="header">
                                    <i class="alarm icon"></i>

                                </div>
                                <div class="middle aligned content">
                                    <div class="text">
                                        <p>Status: <b>Quote<b>s</p>

                                            </div>
                                        </div>
                                        <div class="middle aligned content">
                                            <div class="text">
                                                <p>Created by: <b>Jack<b>s</p>

                                                    </div>
                                                </div>
                                                <div class="middle aligned content">
                                                    <div class="text">
                                                        <p>Date created: <b>10/09/10<b>s</p>

                                                            </div>
                                                        </div>

                                    </div>









                      </div>
                    </div>
                    <div class="ui bottom attached button">
                      Open Project
                    </div>

                  </div>


                  </div>




                  <?php
                  }
                  ?>




        <?php require_once('add_project.php');?>

    </div>


  </div>
  </div>
