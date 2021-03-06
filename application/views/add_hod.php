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
    <title>HOD</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" />
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
            <a href="add_hod">Create HOD Account</a>
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
                          HOD Details
                      </div>
                      <div class="card-body">
                          <div id="accordion" role="tablist">
                             <div class="card mb-0">
                                  <div class="card-header" id="headingThree" role="tab">
                                      <h5 class="mb-0">
                                          <a class="" data-toggle="collapse" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                            <i class="icons font-1xl mt-5 cui-user-follow paddRight10"></i></i>Add HOD Details</a>
                                      </h5>
                                  </div>
                                  <div class="collapse show" id="collapseThree" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion" style="">
                                    <div class="card-body">
                                    <div class="card">
                                       <form action="" id="hod-add-form">
                                        <div class="card-body">
                                          <div class="form-group row">
                                              <div class="col-md-2">
                                                  <label for="company">Name</label>
                                              </div>
                                              <div class="col-md-8">
                                                  <input class="form-control" name="name" type="text" placeholder="Enter HOD name">
                                              </div>
                                          </div>
                                            
                                            <div class="form-group row">
                                              <div class="col-md-2">
                                                  <label for="street">Date Of Joining</label>
                                              </div>
                                              <div class="col-md-5">
                                                  <input class="form-control" name="date_of_joining" type="date" placeholder="dd/mm/yyyy">
                                              </div>
                                            </div>
                                            <div class="form-group row">
                                              <div class="col-md-2">
                                                  <label for="street">Department</label>
                                              </div>
                                              <div class="col-md-8">
                                                  <!-- <input class="form-control" id="street" type="text" placeholder="Enter department"> -->
                                                  <?php 
                                                  echo "<select name='department' class='form-control'>";
                                                      if($departments != null) {
                                                        
                                                        foreach ($departments as $key => $val) {
                                                                ?>
                                                                  <option value="<?=$val->id?>"><?=$val->department_name;?></option>
                                                                <?php
                                                              }   
                                                           
                                                      }
                                                      echo "<select>";
                                                  ?>
                                                  
                                              </div>
                                            </div>
                                            <!-- <div class="form-group row">
                                              <div class="col-md-2">
                                                  <label for="street">Subject</label>
                                              </div>
                                              <div class="col-md-8">
                                                  <input class="form-control" id="street" type="text" placeholder="Enter suject">
                                              </div>
                                            </div> -->
                                            <!-- <div class="form-group row">
                                              <div class="col-md-2">
                                                  <label for="street">Level</label>
                                              </div>
                                              <div class="col-md-8">
                                                  <input class="form-control" id="street" type="text" placeholder="Enter level">
                                              </div>
                                            </div> -->
                                            <!-- <div class="form-group row">
                                              <div class="col-md-2">
                                                  <label for="street">Faculty ID</label>
                                              </div>
                                              <div class="col-md-8">
                                                  <input class="form-control" id="street" type="text" placeholder="Enter faculty Id">
                                              </div>
                                            </div> -->
                                        </div>
                                        </form>
                                        <div class="card-footer">
                                          <button class="btn btn-sm btn-primary" id="hod-add-btn">
                                              <i class="fa fa-dot-circle-o"></i> Submit</button>
                                          <button class="btn btn-sm btn-danger" type="reset">
                                              <i class="fa fa-ban"></i> Reset</button>
                                      </div>
                                    </div> 
                                  </div>
                                  </div>
                              </div>
                              <script>
                                $("#hod-add-btn").on("click", function(e){
                                  e.preventDefault();
                                  $.ajax({
                                    method: "GET",
                                    url: "save-hod-details",
                                    data: $("#hod-add-form").serialize(),
                                    beforeSend: function() {
                                      alert($("#hod-add-form").serialize());
                                    },  
                                    success: function(data) {
                                      if(data==1) {
                                                    iziToast.show({
                                                        title: 'Success',
                                                        message: 'HOD Added Successfully',
                                                        position: 'topCenter',
                                                        color: 'green',
                                                        timeout: '2500'
                                                    });
                                                  }
                                                  else{
                                                          iziToast.error({
                                                          title: 'Error',
                                                          message: 'Could Not Add HOD',
                                                          position: 'topCenter',
                                                          color: 'red',
                                                          timeout: '2500'
                                                       });
                                                  }
                                      alert(data);

                                      $("#hod-add-form").trigger("reset");
                                    },
                                    error: function() {
                                      alert("errorQ");
                                    }
                                  });
                                });
                              </script>
                              <div class="card mb-0">
                                  <div class="card-header" id="headingOne" role="tab">
                                      <h5 class="mb-0">
                                          <a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                            <i class="fa fa-file-excel-o fa-md paddRight10"></i>Upload an Excel File</a>
                                      </h5>
                                  </div>
                                  <div class="collapse" id="collapseOne" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                      <div class="card-body">
                                          <div class="card">
                                              
                                              <div class="card-body">
                                                  <form action="" method="post">
                                                     <div class="form-group row">
                                                      <label class="col-md-3 col-form-label" for="file-input">File input</label>
                                                      <div class="col-md-9">
                                                      <input id="file-input" type="file" name="file-input">
                                                      </div>
                                                      </div>
                                                  </form>
                                              </div>
                                              <div class="card-footer">
                                                  <button class="btn btn-sm btn-primary" type="submit">
                                                      <i class="fa fa-dot-circle-o"></i>
                                                      Submit
                                                  </button>
                                                  <button class="btn btn-sm btn-danger" type="reset">
                                                      <i class="fa fa-ban"></i>
                                                      Reset
                                                  </button>
												  <button class="btn btn-sm btn-success" type="reset">
                                                      <i class="fa fa-download"></i>
                                                      Template
                                                  </button>
                                              </div>
                                          </div>
                                      </div></div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script> 
    <!-- Plugins and scripts required by this view-->
    <script src="assets/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js"></script>
  </body>
</html>
