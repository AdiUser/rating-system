
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
    <title>Qualifications</title>
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
            <a href="faculty">Faculty</a>
          </li>
          <li class="breadcrumb-item">
            <a href="facultyQualifications">Qualifications</a>
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
                          Add Qualifications
                      </div>
                      <form action="" method="post">
                      <div class="card-body">
                      <form id="qualification-form">
                      <table class="table-responsive-sm table-bordered">
                      <thead>
                      <tr>
                        <th>Qualifications required for promotion</th>
                        <th>Proof</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php 
                        if ($qualifications) {
                          foreach($qualifications as $qualification) {
                            ?>
                                <tr>
                                  <td>
                                  <div class="form-check" style="margin-bottom:5px">
                                      <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="qualification" value="<?=$qualification['id']?>" <?=$qualification['is_editable']?"":"disabled"?>><?=$qualification['name']?>
                                      </label>
                                    </div>
                                    </td>
                                    <td>
                                      <div class="form-group row">
                                        <div class="col-md-9">
                                          <input class="form-control" id="proof-<?=$qualification['id']?>" type="file" name="proof-<?=$qualification['id']?>">
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                            <?php
                          }
                        }
                      ?>
                        </tbody>
                        </table>
                        </div>
                        <div class="card-footer">
                              <button class="btn btn-sm btn-primary" id="qualification-form-btn" type="button" >
                                  <i class="fa fa-dot-circle-o"></i> Submit</button>
                                    <button class="btn btn-sm btn-danger" type="reset">
                                      <i class="fa fa-ban"></i> Reset</button>
                        </div>  
                        </form>
                        <script type="text/javascript">
                          $("#qualification-form-btn").on("click", function(e) {
                            e.preventDefault();
                            var formData = new FormData();
                            var favorite = [];
                            $.each($("input[name='qualification']:checked"), function(){            
                                favorite.push($(this).val());
                                formData.append("proof-"+$(this).val(),document.getElementById("proof-"+$(this).val()).files[0]);
                            });

                            formData.append('qualification',favorite);
                            $.ajax({
                              method: "POST",
                              url: "update-qualifications",
                              data: formData,
                              cache: false,
                              contentType: false,
                              processData: false,
                              beforeSend: function() {
                                console.log("formData");
                              for(var pair of formData.entries()) {
                                 console.log(pair[0]+ ', '+ pair[1]); 
                              }
                              },
                              success: function(data) {
                                console.log(data);
                              },
                              error: function(a,err,xx) {
                                alert("error");
                              }
                            });
                            //return false;
                          });
                        </script>
                   
                   

                </div> 
                </div> 
                <div class="col-md-4">
                  <div class="card">
                    <div class="card-header">
                      <strong>Recently Added Qualifications</strong>
                    </div>
                    <div class="card-body">
                    <div class="qualifications-list">
                  <div class="q-list-item d-flex">
                    <div class="list-icon green"><i class="icons font-2xl cui-circle-check"></i></div>
                    <div class="list-text">Master’s degree with First Class or equivalent in a relevant subject and has cleared the National Eligibility Test (NET) or some similar test</div>
                  </div> 
                  <div class="q-list-item d-flex">
                    <div class="list-icon green"><i class="icons font-2xl cui-circle-check"></i></div>
                    <div class="list-text">Minimum qualifications for Lecturer (Senior Scale) + Master's Degree with first class or equivalent either at Bachelor's or Masterl's level.</div>
                  </div> 
                  <div class="q-list-item d-flex">
                    <div class="list-icon green"><i class="icons font-2xl cui-circle-check"></i></div>
                    <div class="list-text">Completed two such eight weeks duration MOOCS courses with E-Certification by NPTELAICTE
                    </div>
                  </div>
                  <div class="q-list-item d-flex">
                    <div class="list-icon red"><i class="icons font-2xl cui-circle-x"></i></div>
                    <div class="list-text">Completed two such eight weeks duration MOOCS courses with E-Certification by NPTELAICTE
                    </div>
                  </div> 
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
