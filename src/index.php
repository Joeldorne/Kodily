<?php

require_once('nav.php');

?>

<!DOCTYPE HTML>

<!-- ==================== Project title ==================== -->

  <div class="ui container ">
      <div class="ui items">
          <div class="item">
              <h1 class="header">Projects</h1>
              <div class="middle aligned content">
                  <div class="ui buttons right floated">
                      <button class="ui button active">
                        <i class="lightning icon"></i>
                          Active
                        <a class="ui green circular label">1</a>
                      </button>
                      <button class="ui button">  <i class="archive icon"></i>Archived <a class="ui red circular label">2</a></button>
                  </div>
              </div>
          </div>
          <div class="ui divider"></div>
      </div>
  </div>

<!-- ==================== End ==================== -->


















    <!--=========== Start Grid   =============== -->
    <div class="ui container ">
        <div class="ui four column grid">
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








					<div class="column">
						<div class="ui card">
							<div class="content">
								<div class="extra content">
									<i class="add icon huge"></i> <button class="ui button" id="addproject">Add Project</button>
								</div>
							</div>
						</div>
					</div>
					<div class="column"></div>
					<div class="column"></div>
					<div class="column"></div>
					<div class="column"></div>
				</div><!--- Project =-->
				<!--- Project End =-->
				<!--- Project =-->
				<!--- Project End =-->



    	</div>




</div>

</div>





<div class="ui grid">
<div class="ui inverted vertical footer segment bottom sticky fixed">
    <div class="ui container">
        Kodily 2017. All Rights Reserved
    </div>
</div>



	</div>
  	</div>

	</div>

  <script>

  $("#addproject").click(function() {
      $('.ui.basic.modal')
          .modal('show');

                 });



           $(function() {
               $('.ui.dropdown').dropdown();
           });




           $("#target").click(function() {
               $('.ui.basic.modal')
                   .modal('show');

                          });


  </script>


</body>





</html>
