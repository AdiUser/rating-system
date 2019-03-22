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
                      <form action="/rating-system/facultyQualifications" method="post">
                      <div class="card-body">
                      <form action="facultyQualifications.php" method="post">
                      <table class="table-responsive-sm table-bordered">
                      <thead>
                      <tr>
                      <td>Qualification</td>
                      <td>Proof</td>
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
                                        <input type="checkbox" class="form-check-input" name="qualification[]" value="<?=$qualification['id']?>"><?=$qualification['name']?>
                                      </label>
                                    </div>
                                    </td>
                                    <td>
                                      <div class="form-group row">
                                            
                                                <div class="col-md-9">
                                                  <input id="file-input" type="file" name="upload_file">
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
                              <button class="btn btn-sm btn-primary" name="submit" type="submit">
                                  <i class="fa fa-dot-circle-o"></i> Submit</button>
                                    <button class="btn btn-sm btn-danger" type="reset">
                                      <i class="fa fa-ban"></i> Reset</button>
                        </div>  
                        </form>
                   
                   <?php 
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "aicte";
                    $faculty_id = "FACT5672";
                    
                    // Create connection
                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                    // Check connection
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                        if(isset($_POST['submit'])) {
                          
                          $qualification = array($_POST['qualification']);
                         
                          if(!empty($qualification)){
                          $val = implode(",", $qualification[0]);
                          $count = "SELECT COUNT(*) AS count from input_qualification where faculty_id='$faculty_id'";
                          echo "<br>".$count;
                          $xx = mysqli_query($conn, $count);
                          if ($xx) {
                            $count = mysqli_fetch_assoc($xx);
                            if ($count['count'] == 1) {
                              // update
                              $sql = "SELECT qualification from input_qualification  WHERE faculty_id = '$faculty_id' ";
                              $qual = mysqli_query($conn,$sql);
                              if($qual) {
                                $ids = mysqli_fetch_assoc($qual);
                                echo "<pre>".print_r($ids, true);
                                $collection_ids = $ids['qualification'] . "," . $val;
                                echo "<br>--".$collection_ids . "--";
                                $sql = "UPDATE input_qualification SET qualification = '$collection_ids' WHERE faculty_id = '$faculty_id'";
                                echo "<br>".$sql;
                                if(mysqli_query($conn, $sql)) {
                                  // success msg.
                                }
                                else {
                                  die('error! 35');
                                }
                              }
                              else {
                                die("error! 33");
                              }
                              
                            }
                            else {
                              // insert
                              $sql = "INSERT INTO input_qualification (faculty_id,qualification)
                                  VALUES ('$faculty_id','$val')";
                                  
                              if (mysqli_query($conn, $sql)) {
                                
                              } else {
                                  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                              }
                            }
                          }
                          else {
                            die("error! 34");
                          }
                          
                              
                        }
                      }
                    mysqli_close($conn);
                   ?>

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
    <script src="assets/jquery/dist/jquery.min.js"></script>
    <script src="assets/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/pace-progress/pace.min.js"></script>
    <script src="assets/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
    <script src="assets/@coreui/coreui/dist/js/coreui.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="assets/chart.js/dist/Chart.min.js"></script>
    <script src="assets/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
