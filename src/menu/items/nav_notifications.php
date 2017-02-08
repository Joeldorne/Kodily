<!--- Notifications menu -->


<div class="ui dropdown item top right pointing">



 <span class="content">
    <i class="alarm outline icon large"></i>

    <div class="ui red circular label">21</div>
    </span>



    <!--Notifications -->


      <div class="menu">

        <div class="header">
          <i class="alarm icon large"></i>
          Notifications
        </div>




        <div class="scrolling menu">

        <?php
        for ($i = 0; $i < 8; $i++) {
?>




<div class="ui feed item">










  <div class="event middle aligned">
      <div class="label">
        <img src="http://semantic-ui.com/images/avatar2/small/matthew.png">
      </div>
      <div class="content">
        <div class="summary">
          <a class="user">
            Joel Dorne
            <a class="date">
              <i class="comment icon floated right"></i>1 Hour Ago
            </a>


        </div>
        <div class="meta">
  </a> I think it would a really good idea to use the same way we did before...
        </div>
      </div>
  </div>
</div>
<div class="ui divider"></div>
  <?php } ?><!-- end of PHP Loop-->
</div>

<a class="ui attached button" href="/notifications/main_notifications.php">See All</a>

</div>






      </div>

<!-- <div class="ui attached button"><i class="alarm icon"></i>See all</div> -->












<!--- Other -->
