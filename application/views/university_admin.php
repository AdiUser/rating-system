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
    <title>University Admin</title>
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
            <img class="img-avatar" src="assets/img/index.jpg" alt="">
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
            <a href="university_admin">University</a>
          </li>
          <li class="breadcrumb-item">
            <a href="university_admin">University Details</a>
          </li>

        </ol>
        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-8 offset-md-0">
                   <div class="card">
                      <div class="card-header">
                          <i class="fa fa-align-justify"></i>
                          <!-- <i class="icons font-2xl d-block mt-5 cui-file"></i> -->
                            University Details
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
                                    <?php $o = $org[0]; ?>

                                  <div class="collapse show" id="collapseThree" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion" style="">
                                    <div class="card-body">
                                        <div class="card">
                                        <div class="card-body">
                                        <div class="row" style="margin-bottom:20px">
                                          <div class="col-md-3">
                                            <div class="media">
                                              <img src="<?=isset($o->logo)?$o->logo:'./assets/index.jpg'?>" id="user-img">

                                            </div>
                                          </div>
                                          <div class="col-md-9">
                                            <form action="" id="img-submit">
                                            <input type="file" id="pic" onchange="readURL(this);" name="file_upload" style="display: none;">
                                            </form>
                                            <!-- <h2 style="text-align:center"><?=$o->university_name?></h2> -->
                                            <button class="btn btn-primary"id="upload-btn" type="button" style="margin-top:50px">+ Upload</button>
                                          </div>
                                        </div>
                                        <script>
                                            $("#upload-btn").on("click", function() {
                                              $("#pic").click();
                                            });

                                            function readURL(input) {
                                                if (input.files && input.files[0]) {
                                                    var reader = new FileReader();

                                                    reader.onload = function (e) {
                                                        $('#user-img')
                                                            .attr('src', e.target.result)
                                                            .width(120)
                                                            .height(120);
                                                    };

                                                    reader.readAsDataURL(input.files[0]);
                                                    console.log($("#pic").val());
                                                    $("#img-submit").submit();
                                                    
                                                }
                                            }
                                            $("#img-submit").submit(function(e) {
                                              e.preventDefault();
                                              $.ajax({
                                                method: "POST",
                                                url: "save-university-img",
                                                data: new FormData(this),
                                                processData:false,
                                                contentType:false,
                                                cache:false,
                                                async:false,
                                                beforeSend: function(){
                                                  var formData = new FormData(this);
                                                  for (var [key, value] of formData.entries()) { 
                                                    console.log(key, value);
                                                  }
                                                },
                                                success: function(data) {
                                                  alert(data);
                                                },
                                                error: function() {
                                                  alert("error");
                                                }

                                              });
                                            });

                                          </script>
                                            <form class="form" id="details">

                                          <div class="row">
                                              <div class="col-md-7">
                                                <div class="form-group" method="post">
                                                  <label for="company">University Name</label>
                                                  <input class="form-control" name="name" type="text" placeholder="Enter your University name" value="<?=isset($o->university_name)?$o->university_name:''?>" required>
                                                </div>
                                              </div>
                                              <div class="col-md-5">
                                                <div class="form-group" method="post">
                                                  <label for="vat">University Code</label>
                                                  <input class="form-control" name="ucode" id="vat" type="text" placeholder="University Code..." value="<?=isset($o->university_code)?$o->university_code:''?>" disabled required>
                                                </div>
                                              </div>
                                            </div>
                                            
                                            <div class="row">
                                              <div class="col-md-4">
                                                <div class="form-group" method="post">
                                                  <label for="street">State</label>
                                                  <input class="form-control" name="state" id="street" type="text" placeholder="Enter State..." value="<?=isset($o->state)?$o->state:''?>" required>
                                                </div>
                                              </div>
                                              <div class="col-md-4">
                                                <div class="form-group" method="post">
                                                  <label for="street">District</label>
                                                  <input class="form-control" name="district" id="street" type="text" placeholder="Enter district name" value="<?=isset($o->district)?$o->district:''?>" required>
                                                </div>
                                              </div>
                                              <div class="col-md-4">
                                                <div class="form-group" method="post">
                                                  <label for="street">Postal Code</label>
                                                  <input class="form-control" name="postal_code" id="street" type="text" placeholder="Enter postal code" value="<?=isset($o->postal_code)?$o->postal_code:''?>" required>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md">
                                                <div class="form-group" method="post">
                                                  <label for="company">University Address</label>
                                                  <input class="form-control" name="address" id="company" type="text" placeholder="Enter your university address" value="<?=isset($o->address)?$o->address:''?>" required>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group" method="post">
                                                  <label for="company">Contact Number</label>
                                                  <input class="form-control" name="contact" id="company" type="text" placeholder="Enter contact number..." value="<?=isset($o->contact)?$o->contact:''?>" required>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md">
                                                <div class="form-group" method="post">
                                                  <label for="company">Email</label>
                                                  <input class="form-control" name="email" id="company" type="text" placeholder="Enter university email address" value="<?=isset($o->email)?$o->email:''?>">
                                                </div>
                                              </div>
                                            </div>
                                          </form>
                                            
                                        </div>
                                        <div class="card-footer">
                                          <button class="btn btn-sm btn-primary" id="update-details-btn">
                                              <i class="fa fa-dot-circle-o"></i> Update Details</button>
                                          <button class="btn btn-sm btn-danger" type="reset">
                                              <i class="fa fa-ban"></i> Reset</button>
                                        </div>
                                        <script>
                                          $("#update-details-btn").on("click",function(e){
                                            e.preventDefault();
                                            var formData = $("#details").serialize();
                                            $.ajax({
                                              method: "GET",
                                              url: "update-university-profile",
                                              data: formData,
                                              beforeSend: function() {
                                                alert(formData);
                                              },
                                              success: function() {
                                                alert("done");
                                              },
                                              error: function(){
                                                alert("error");
                                              }
                                            });
                                          });
                                        </script>
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
                          <img src="https://via.placeholder.com/90" alt="">
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
                          <img src="https://via.placeholder.com/90" alt="">
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

                      <div class="list-prev d-flex">
                        <div class="img-section">
                          <img src="https://via.placeholder.com/90" alt="">
                        </div>
                        <div class="info-section">
                          <div class="name"><a href="">
                            Dehradun University
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
                      </div>
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
      <div >
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
    <script src="assets/chart.js/dist/Chart.min.js"></script>
    <script src="assets/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js"></script>
  </body>
</html>
