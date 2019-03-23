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
    <title>Activity</title>
    <!-- Icons-->
    <link href="assets/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="assets/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" />
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
          <li class="breadcrumb-item active">
          <a href="faculty_activity">Activities</a></li>
         
        </ol>
        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-8 offset-md-0">
                   <div class="card">
                   <div class="card-header">
                <h5>Add/Edit Department Activities</h5>
              </div>
              <form id="activity-form" method="post" enctype="multipart/form-data">
              <div class="card-body">
                
                <table class="table table-bordered">
                  <thead>
                    <tr><th>Activity Name </th>
                    <th>Activity Type</th>
                    <th>Proof</th>
                    <th>Settings</th>
                  </tr></thead>
                  
                    <tbody id="activities-item">
                      <?php
                          if($activities != null) {
                            foreach($activities as $activity) {
                              $rand = "str".rand(10,4234).rand(3,324234);
                              ?><tr id="<?=$rand?>">
                                  <td><?=$activity->name?></td>
                                  <td><?=$activity->type?></td>
                                  <td><?=$activity->report?></td>
                                  <td>
                                    <button class="btn btn-danger activity-delete" data-id="<?=$activity->serial?>" data-delete="<?=$rand?>">
                                      <i class="icons font-1xl d-block cui-circle-x"></i>
                                    </button>
                                  </td>
                                </tr>
                              <?php
                            }
                          }
                      ?>
                     
                      
                   </tbody>
                 
                </table>
                <div class="row">
                  <div class="col-md-3">
                    <button class="btn btn-pill btn-block btn-info" type="button" id="activity-add">Add More...</button>
                  </div>
                  <div class="col-md-3">
                  <button class="btn btn-pill btn-block btn-success" type="submit" id="activity-save-btn">Save <i class="icons font-1xl cui-check paddLeft10"></i></button>

                  </div>
                </div>
              </div>
            </form>
                 
              </div>  
          </div>
        </div>
      </main>
     
    </div>
    <script>
        $(function(){
          $("#activity-form").submit(function(e){
            e.preventDefault();
             var dataString = new FormData($("#activity-form")[0]);
             console.log($("#activity-form"))
             console.log(dataString)

              $.ajax({
                  type: "POST",
                  url: "save-activities",
                  data: dataString,
                  cache: false,
                  contentType: false,
                  processData: false,
                  beforeSend: function() {
                    console.log("formData");
                    for(var pair of dataString.entries()) {
                       console.log(pair[0]+ ', '+ pair[1]); 
                    }
                  },
                  success: function(data){
                    if(data==1) {
                                            iziToast.show({
                                                title: 'Success',
                                                message: 'Activity Added Successfully',
                                                position: 'topCenter',
                                                color: 'green',
                                                timeout: '2500'
                                            });
                              }
                              else{
                                    iziToast.error({
                                          title: 'Error',
                                          message: 'Could not Add Activity',
                                          position: 'topCenter',
                                          color: 'red',
                                          timeout: '2500'
                                        });
                                  }
                      console.log(data);

                      $("#activities-item").prepend(data);
                      $("#activity-form").trigger("reset");
                  },
                  error: function(a,b,c) {
                    alert("Error");
                  }

              });

              return false;  //stop the actual form post !important!

          });
      });
    </script>
    <script>
      $(document).ready(function(){
          $(document).on("click", ".activity-delete", function(e) {
          e.preventDefault();
          console.log($(this)[0].dataset);
          var dataset = $(this)[0].dataset;
          $.ajax({
            method: "GET",
            url: "delete-activity",
            data: {id: dataset.id},
            beforeSend: function() {
              alert(dataset.id);
            },
            success: function(data) {
              if(data==1) {
                                            iziToast.show({
                                                title: 'Success',
                                                message: 'Activity Deleted Successfully',
                                                position: 'topCenter',
                                                color: 'green',
                                                timeout: '2500'
                                            });
                              }
                              else{
                                    iziToast.error({
                                          title: 'Error',
                                          message: 'Could not Delete Activity',
                                          position: 'topCenter',
                                          color: 'red',
                                          timeout: '2500'
                                        });
                                  }
              alert(dataset.delete);
              $("#"+dataset.delete).remove();

              // SHOW FANCY ALERT BOX.
            },
            error: function() {
              alert("ERROR!");
            }
          });
        }); 

         $(".dept-delete-old").on("click", function() {
          console.log($(this)[0].dataset.delete);
        }); 
         ind = 0;
        $("#activity-add").on("click", function() {
          var id = "str"+ Math.random().toString().split(".")[1];
          
          var txt = '<tr id="'+id+'">'+
                          '<td><input type="text" name="name[]" class="form-control" placeholder="Enter Activity Name..." required><input type="text" value="'+id+'" name="field-id[]" style="display: none">'+'</td>'+
                          
                          '<td>'+
                            '<select name="activity-type[]" class="form-control" required><option value="social">Social Activity</option><option value="departmental">Departmental Activity</option><option value="institutional">Institutional Activity</option></select>'+
                          '</td>'+
                          '<td><input type="file" name="proof-'+ind+'" class="form-control" required></td>'+
                          '<td><button class="btn btn-danger activity-delete" data-delete="'+id+'" >'+
                            '<i class="icons font-1xl d-block cui-circle-x"></i>'+
                          '</button></td>'+
                       ' </tr>';
                       ind = ind + 1;
                       console.log(txt)
          $("#activities-item").append(txt);
        });

      });
    </script>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>   
    <script src="assets/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js"></script>
  </body>
</html>
