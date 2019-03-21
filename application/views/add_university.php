<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.1.12
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>AICTE</title>
    <!-- Icons-->
    <link href="assets/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="assets/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
        <script src="assets/jquery/dist/jquery.min.js"></script>

    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header navbar">
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="https://www.aicte-india.org">
        <img class="navbar-brand-full" src="assets/img/AICTE_Logo.png" width="60" height="50" alt="">
       <p style="margin:18px;font-weight:bold">AICTE</p>
      </a>
      <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <ul class="nav navbar-nav ml-auto">
       
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <img class="img-avatar" src="assets/img/AICTE_Logo.png" alt="">
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="#">
              <i class="fa fa-user"></i> Profile</a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-wrench"></i> Settings</a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-lock"></i> Logout</a>
          </div>
        </li>
      </ul>
      
    </header>
    <div class="app-body">
     <?php require_once('side-bar.php')?>
      <main class="main">
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item">
            <a href="/rating-system/user/dashboard">AICTE</a>
          </li>
          <li class="breadcrumb-item">
            <a href="add_university">Add University</a>
          </li>
          <!-- Breadcrumb Menu-->
        </ol>
        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-8 offset-md-0">
                   <div class="card">
                      <div class="card-header">
                          <i class="fa fa-align-justify"></i>
                          <!-- <i class="icons font-2xl d-block mt-5 cui-file"></i> -->
                          Add Universities
                      </div>
                      <div class="card-body">
                          <div id="accordion" role="tablist">
                             <div class="card mb-0">
                                  <div class="card-header" id="headingThree" role="tab">
                                      <h5 class="mb-0">
                                          <a class="" data-toggle="collapse" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                            <i class="icons font-1xl mt-5 cui-user-follow paddRight10"></i>Add University Data</a>
                                      </h5>
                                  </div>
                                  <div class="collapse show" id="collapseThree" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion" style="">
                                    <div class="card-body">
                                        <div class="card">
                                       <form class="form" method="post">
                                        <div class="card-body">
                                          <div class="row">
                                              <div class="col-md-7">
                                                <div class="form-group" method="post">
                                                  <label for="company">University Name</label>
                                                  <input class="form-control" name="uname" id="company" type="text" placeholder="Enter university name">
                                                </div>
                                              </div>
                                              <div class="col-md-5">
                                                <div class="form-group" method="post">
                                                  <label for="vat">University Code</label>
                                                  <input class="form-control" name="ucode" id="vat" type="text" placeholder="PL1234567890">
                                                </div>
                                              </div>
                                            </div>
                                            
                                            <div class="row">
                                              <div class="col-md-4">
                                                <div class="form-group" method="post">
                                                  <label for="street">State</label>
                                                  <input class="form-control" name="ustate" id="street" type="text" placeholder="Select State name">
                                                </div>
                                              </div>
                                              <div class="col-md-4">
                                                <div class="form-group" method="post">
                                                  <label for="street">District</label>
                                                  <input class="form-control" name="udistrict" id="street" type="text" placeholder="Enter district name">
                                                </div>
                                              </div>
                                              <div class="col-md-4">
                                                <div class="form-group" method="post">
                                                  <label for="street">Postal Code</label>
                                                  <input class="form-control" name="postal" id="street" type="text" placeholder="Enter postal code">
                                                </div>
                                              </div>
                                            </div>

                                            
                                            <div class="row">
                                              <div class="col-md-12">
                                                <div class="form-group">
                                                  <div class="row">
                                                    <div class="col-md-4"><label for="">Is this a Central University</label></div>
                                                    <div class="col-md-5">
                                                  <label class="switch switch-label switch-pill switch-outline-success-alt"> 
                                                  <input class="switch-input" id="toggle-inpt" type="checkbox">
                                                  <span class="switch-slider" data-checked="✓" data-unchecked="✕"></span>
                                                  </label>
                                                  <input type="text" name="isState" id="hidden-toggle-inpt" style="display: none">
                                                </div>
                                                </div>
                                                </div>
                                              </div>
                                            </div>
                                            <script>
                                              $("#toggle-inpt").on("change", function() {
                                                if ($(this).prop("checked") === true){ 
                                                    $("#hidden-toggle-inpt").val("1");
                                                }
                                                 else {
                                                    $("#hidden-toggle-inpt").val("0");
                                                  }
                                                  alert($("#hidden-toggle-inpt").val());
                                              });
                                            </script>
                                        </div>
                                        <div class="card-footer">
                                          <button class="btn btn-sm btn-primary" type="submit" name="submit">
                                              <i class="fa fa-dot-circle-o"></i> Submit</button>
                                          <button class="btn btn-sm btn-danger" type="reset">
                                              <i class="fa fa-ban"></i> Reset</button>
                                        </div>
                                        <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "aicte";
                                        
                                        // Create connection
                                        $conn = mysqli_connect($servername, $username, $password, $dbname);
                                        // Check connection
                                        if (!$conn) {
                                            die("Connection failed: " . mysqli_connect_error());
                                        }
                                            if(isset($_POST['submit']))
                                            {
                                            $university_code=$_POST['ucode'];
                                            $university_name=$_POST['uname'];
                                            $state=$_POST['ustate'];
                                            $postal_code=$_POST['postal'];
                                            $district=$_POST['udistrict'];
                                            $isState = $_POST['isState'];

                                            $sql = "INSERT INTO university (university_code, university_name,`state`,district,postal_code,is_state_university)
                                            VALUES ('$university_code', '$university_name','$state','$district','$postal_code','$isState')";
                                           $p = md5($university_code);
                                            $create_login = "INSERT INTO user_login (code, username, password, role) values ('$university_code','$university_code','$p','university')";

                                            
                                        if (mysqli_query($conn, $sql) && mysqli_query($conn, $create_login)) {
                                            
                                        } else {
                                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                        }
                                      }
                                        mysqli_close($conn);
                                       ?>
                                           </form>
                                        </div> 
                                      </div>
                                      
                              </div>
                              </div>
                              <div class="card mb-0">
                                <div class="card-header" id="headingTwo" role="tab">
                                  <h5 class="mb-0">
                                  <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Add Universities via Excel</a>
                                  </h5>
                                  </div>
                                  <div class="collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                      <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="file-input">File input</label>
                                        <div class="col-md-9">
                                        <input id="file-input" type="file" name="file-input">
                                        </div>
                                      </div>  
                                    </div>
                                  </div>
                                </div>
                              </div>

                             
                          </div>
                      </div>
                </div>  
                <div class="col-md-4">
                  <div class="card">
                    <div class="card-header">
                      <strong>Recently Added Universities</strong>
                    </div>
                    <div class="card-body">
                    
                      <div class="list-prev d-flex">
                        <div class="img-section">
                          <img src="assets/img/geu.jpg" alt="">
                        </div>
                        <div class="info-section">
                          <div class="name"><a href="">
                            Graphic Era Deemed to be University
                            </a>
                          </div>
                          <div class="location d-flex">
                            <div class="city">
                              Dehradun
                            </div>
                            <div class="state">
                              Uttrakhand
                            </div>
                          </div>

                        </div>
                      </div><hr>

                      <div class="list-prev d-flex">
                        <div class="img-section">
                          <img src="assets/img/dit.png" alt="">
                        </div>
                        <div class="info-section">
                          <div class="name"><a href="">
                            DIT University
                            </a>
                          </div>
                          <div class="location d-flex">
                            <div class="city">
                              Dehradun
                            </div>
                            <div class="state">
                              Uttrakhand
                            </div>
                          </div>

                        </div>
                      </div><hr>

                      
                    </div>
                    <div class="card-footer">
                      <button class="btn btn-block btn-sm btn-ghost-primary active" type="button" aria-pressed="true">View All</button>
                    </div>
                  </div>
                </div>      
              </div>  
          </div>
        </div>
      </main>
    </div>
    <footer class="app-footer">
      <div>
        <a href="https://www.aicte-india.org">AICTE</a>
        <span>&copy; 2019 AICTE</span>
      </div>
    </footer>
    <!-- CoreUI and necessary plugins-->
    <script src="assets/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/pace-progress/pace.min.js"></script>
    <script src="assets/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
    <script src="assets/@coreui/coreui/dist/js/coreui.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="assets/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js"></script>
  </body>
</html>
