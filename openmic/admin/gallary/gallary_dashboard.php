<?php require_once("../../dbconnect.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
	  <link rel="icon" href="images/favicon.ico" type="image/ico" />
    <title>Mango Webies :: Openmic</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <META NAME="ROBOTS" CONTENT="INDEX,FOLLOW"></META>
    <link rel="stylesheet" type="text/css" href="../../css/font-awesome.min.css">
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/custom.min.css" rel="stylesheet">

    <style type="text/css">
    .img-wrap {
        position: relative;
    }
    .img-wrap img{
        width : 100%;
          border-radius: 30px; 
          padding: 10px;
    }
    .btn-myy{
      opacity: 1;
      color: #000000;
      background: #efefef;
      border-radius: 30%; 
    }
    .img-wrap .close {
        right:9px;
        top:5px;
        position: absolute;
        z-index: 100;
    }
    </style>
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <img src="../../images/mango-webies.png" alt="..." style="width: 98%;padding: 5px;" >
            </div>
            <div class="clearfix"></div>
            <div class="profile clearfix">
              <div class="profile_pic">
                
              </div>
              <div class="profile_info">
               
              </div>
            </div>

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <br> 
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="../../index.php">OpenMic</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Schedule <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="../schedule/schedule_dashboard.php">Dashboard</a></li>
                      <li><a href="../schedule/addschedule.html">Add Schedule</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Gallary <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="gallary_dashboard.php">Dashboard</a></li>
                      <li><a href="addimages.html">Add Images</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

           
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    Prahar Pandya
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                   
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>

                
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
        <div class="right_col" role="main">
            <div class="x_panel">
                  <div class="x_title">
                    <h2>Gallary  <small>Dashboard</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                     
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    
<?php
  $execute=mysqli_query($connect,"SELECT * FROM gallary");
  while($datarow = mysqli_fetch_array($execute)){
    $id = $datarow["id"];
    $image = $datarow["image"];?>

                    <div class="img-wrap col-md-4">
                      <span class="close btn btn-myy" onclick="remove_image('<?php echo $id; ?>')">&times;</span>
                      <img src="../../uploads/<?php echo $image; ?>">
                    </div>
  <?php } ?>
                  </div>
            </div>
        </div>
    </div>
  </div>


 <script src="../../js/jquery.js"></script>
<script>
          function remove_image(id) {
            var url = 'ajax_remove_image.php';
            var ajaxurl = url;
            var data = {
            'action': 'my_action',
            'id': id,
            };

            jQuery.post(ajaxurl, data, function(response) {});
            location.reload(true);
          }
</script>
    <!-- <B></B>ootstrap -->
    <script src="../../js/bootstrap.min.js"></script>
  
    <script src="../../js/date.js"></script>
   
    <!-- Custom Theme Scripts -->
    <script src="../../js/custom.min.js"></script>
  </body>
</html>
