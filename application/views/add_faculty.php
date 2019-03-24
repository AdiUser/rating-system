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
    <title>Faculty</title>
    <!-- Icons-->
    <link href="/rating-system/assets/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="/rating-system/assets/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="/rating-system/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/rating-system/assets/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="/rating-system/assets/css/style.css" rel="stylesheet">
    <link href="/rating-system/assets/vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" />
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
        <script src="/rating-system/assets/jquery/dist/jquery.min.js"></script>

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
            <img class="img-avatar" src="/rating-system/assets/img/index.jpg" alt="">
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
            <a href="hod_details">HOD</a>
          </li>
          <li class="breadcrumb-item">
            <a href="add_faculty">Add Faculty</a>
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
                          Add Faculty
                      </div>
                      <div class="card-body">
                          <div id="accordion" role="tablist">
                             <div class="card mb-0">
                                  <div class="card-header" id="headingThree" role="tab">
                                      <h5 class="mb-0">
                                          <a class="" data-toggle="collapse" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                            <i class="icons font-1xl mt-5 cui-user-follow paddRight10"></i>Add Faculty Account</a>
                                      </h5>
                                  </div>
                                  <div class="collapse show" id="collapseThree" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion" style="">
                                    <form action="" id="add-faculty-form">
                                    <div class="card-body">
                                        <div class="card">
                                       <form class="form" method="post">
                                        <div class="card-body">
                                          <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group" method="post">
                                                  <label for="vat">University Code</label>
                                                  <input class="form-control" name="ucode" id="vat" type="text" placeholder="PL1234567890" value="<?=isset($fac[0]->university_code)?$fac[0]->university_code:''?>" disabled="">
                                                </div>
                                              </div>
                                              <div class="col-md-7">
                                                <div class="form-group" method="post">
                                                  <label for="company">Department</label>
                                                  <input class="form-control" name="uname" id="company" type="text" value="<?=isset($fac[0]->department_name)?$fac[0]->department_name:''?>" disabled="">
                                                  <input type="text" name="department" value="<?=isset($fac[0]->id)?$fac[0]->id:''?>" style="display: none">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                  <label for="">Faculty Name</label>
                                                  <input type="text" class="form-control" name="faculty-name" placeholder="Enter Faculty name...">
                                                </div>
                                              </div>
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                  <label for="">Faculty Level</label>
                                                  <select name="faculty-level" id="" class="form-control">
                                                    <option value="" disabled="" selected="">Select Faculty Level</option>
                                                    <option value="9A">Lecturer - 9A</option>
                                                    <option value="10">Lecturer -10</option>
                                                    <option value="11">Lecturer - 11</option>
                                                    <option value="13A1">Lecturer - 13A1</option>
                                                  </select>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                  <label for="">Faculty Email</label>
                                                  <input type="text" name="faculty-email" class="form-control" placeholder="Enter Faculty email...">
                                                </div>
                                              </div>
                                               <div class="col-md-6">
                                                <div class="form-group">
                                                  <label for="">Joining Date</label>
                                                  <input type="date" name="faculty-joining-date" class="form-control">
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                          <button class="btn btn-sm btn-primary" id="add-faculty-btn" name="faculty-single-input">
                                              <i class="fa fa-dot-circle-o"></i> Submit</button>
                                          <button class="btn btn-sm btn-danger" type="reset">
                                              <i class="fa fa-ban"></i> Reset</button>
                                        </div>
                                       
                                           </form>
                                        </div> 
                                      </div>
                                    </form>
                                      
                              </div>
                              </div>
                              <script>
                                $("#add-faculty-btn").on("click", function(e) {
                                  e.preventDefault();
                                  $.ajax({
                                    method: "GET",
                                    url: "save-faculty",
                                    data: $("#add-faculty-form").serialize(),
                                    beforeSend: function() {
                                      alert($("#add-faculty-form").serialize())
                                    },
                                    success: function(data) {
                                      if(data==1) {
                                        iziToast.show({
                                            title: 'Success',
                                            message: 'Faculty Added Successfully',
                                            position: 'topCenter',
                                            color: 'green',
                                            timeout: '2500'
                                        });
                                      }
                                      else{
                                              iziToast.error({
                                              title: 'Error',
                                              message: 'Could not Add Faculty',
                                              position: 'topCenter',
                                              color: 'red',
                                              timeout: '2500'
                                           });
                                      }
                                    },
                                    error:function() {
                                      alert("error");
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
                      <strong>Recently Added Faculties</strong>
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
    <script src="/rating-system/assets/popper.js/dist/umd/popper.min.js"></script>
    <script src="/rating-system/assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/rating-system/assets/pace-progress/pace.min.js"></script>
    <script src="/rating-system/assets/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
    <script src="/rating-system/assets/@coreui/coreui/dist/js/coreui.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>    <script src="assets/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js"></script>
    <script src="/rating-system/assets/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js"></script>
   
  </body>
</html>
