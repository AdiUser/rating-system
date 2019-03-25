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
    <title>Faculty List</title>
    <!-- Icons-->
    <link href="/rating-system/assets/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="/rating-system/assets/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="/rating-system/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/rating-system/assets/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="/rating-system/assets/css/style.css" rel="stylesheet">
    <link href="/rating-system/assets/vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/css/iziModal.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" />

    <link rel="stylesheet" href="/rating-system/assets/css/user-model.css">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>

    <script src="/rating-system/assets/jquery/dist/jquery.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/js/iziModal.min.js"></script>
             <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>   


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
    <header class="app-header navbar" style="z-index: 1">
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="https://www.aicte-india.org">
        <img class="navbar-brand-full" src="/rating-system/assets/img/AICTE_Logo.png" width="60" height="50" alt="">
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

      <button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">
        <span class="navbar-toggler-icon"></span>
      </button>
    </header>
    <div class="app-body">
     <?php require_once('side-bar.php')?>
      <main class="main">
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item">
            <a href="/rating-system/hod_details">HOD</a>
          </li>
          <li class="breadcrumb-item">
            <a href="faculty_list">Faculty List</a>
          </li>
        </ol>
        <div class="container-fluid">
          <div class="animated fadeIn">
            <table id="example" class="display table table-responsive-sm table-sm" style="width:100%">
        <thead>
            <tr>
                <th></th>
                <th colspan="2">Details</th>
                <th colspan="3">Facult Promotional Details</th>
            </tr>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Years of Service</th>
                <th>Student Feedback Score (out of 25)</th>
                <th>Salary Group (INR)</th>
            </tr>
        </thead>
        <tbody>

            <?php
                if ($faculties != NULL) {
                    foreach ($faculties as $f) {
                        ?>
                        <tr>
                            <td>
                              <div class="d-flex align-middle">
                                <div class="faculty-img">
                                  <img src="<?=($f->pic)?$f->pic:'https://via.placeholder.com/50';?>" alt="">
                                </div> 
                                <div class="faculty-name">
                                  <a href="#" class="f-name" data-target="<?=$f->faculty_id?>"><?=$f->name?></a>     
                                </div>   
                              </div>
                            </td>
                            <td><?=$f->level_name?></td>
                            <td>
                            <?php 
                                // calculating years between 2 dates.
                                $d = new DateTime($f->date_of_joining);
                                $d2 = new DateTime(date("Y-m-d"));
                                $diff = $d2->diff($d);
                                echo $diff->y." Years, ". $diff->m . " Months "
                            ?>
                            </td>
                            <td>2011/04/25</td>
                            <td><?=$f->level_package_group?></td>
                        </tr>

                        <?php
                    }
                }   
            ?>
            
            
        </tbody>
        
    </table>
           
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
    <div id="user-model">
        <input type="text" id="faculty-id-hidden" style="display: none">
      <div class="user-info d-flex">
        <div class="user-img">
          <img src="https://via.placeholder.com/150" alt="">
        </div>
        <div class="user-text-info">
          <div class="name" id="f-name">
            Aditya Saxena
          </div>
          <div class="date-joining" id="f-d-joining">
            2nd April, 2014
          </div>
          <div class="level" id="f-level">
            Lecturer - 9A 
          </div>
        </div>
         <div class="institute-logo">
        <img src="https://via.placeholder.com/150" alt="" id="f-image">
      </div>
      </div>
      <hr>
      <div class="options-area">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><span class="d-flex"><i class="icons font-1xl cui-note"></i>&nbsp;<h6>Verify Activities and Qualifications</h6></span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><span class="d-flex"><i class="icons font-1xl cui-map"></i>&nbsp;<h6>Qualifications for promotion</h6></span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><span class="d-flex"><i class="icons font-1xl cui-layers"></i>&nbsp;<h6>Add ACR Scores</h6></span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#teaching-process" role="tab" aria-controls="contact" aria-selected="false"><span class="d-flex"><i class="icons font-1xl cui-note"></i>&nbsp;<h6>Add Teaching Process Scores</h6></span></a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5>Qualifications and activities to verify</h5>
              </div>
              <div class="card-body">
                <table class="table table-bordered verify-table" id="activities-table">
                  <thead>
                    <th>Qualification/Activity</th>
                    <th>Proof</th>
                    <th>Entry Type</th>
                    <th>Verify</th>
                  </thead>
                  <tbody id="activities-table-body">
                   
                  </tbody>
                </table>
              </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5>Info</h5>
                </div>
                <div class="card-body">
                    <p class="info-tab">
                        
                        This tab features all the Activities and Qualifications a faculty can add to there profile. Use this control panel to verify the Actvities and Qaulifications added by the faculty.
                        
                    </p>
                </div>
            </div>
        </div>
    </div>
      
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
       <div class="card">
              <div class="card-header">
                <h5>Canditate Qualifications for next level</h5>    
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
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
       <div class="row">
           <div class="col-md-10 offset-1">
                <div class="card">
              <div class="card-header">
                <h5>Add/Edit ACR Activities</h5>
              </div>
              <div class="card-body">
              <form id="activity" method="post">
                <table class="table table-bordered">
                  <thead>
                    <th>Activity Name </th>
                    <th>Year</th>
                    <th>Points</th>
                    <th>Settings</th>
                  </thead>
                  <tbody id="acr-items">
                    
                  </tbody>
                </table>
                <div class="row">
                  <div class="col-md-3">
                    <button class="btn btn-pill btn-block btn-info" type="button" id="dept-activities-add">Add More...</button>
                  </div>
                  <div class="col-md-3">
                     <button class="btn btn-pill btn-block btn-success" id="activity-save-btn"" type="submit">Save <i class="icons font-1xl cui-check paddLeft10"></i></button>

                  </div>
                </div>
                </form>

                <script>
                        $(function(){
                          $("#activity-save-btn").on("click", function(){
                             var dataString = $("#activity").serialize();

                              $.ajax({
                                  type: "POST",
                                  url: "/rating-system/save-acr",
                                  data: dataString,
                                  beforeSend: function() {
                                    alert(dataString);
                                  },
                                  success: function(data){
                                      // alert('Successful!');
                                      alert(data);
                                      $("#acr-items").prepend(data);
                                      $("#activity").trigger("reset");
                                  },
                                  error: function(a,b,c) {
                                    alert("Error");
                                  }

                              });

                              return false;  //stop the actual form post !important!

                          });
                      });
                </script>
              </div>
            </div>
           </div>
       </div>
  </div>
  <div class="tab-pane fade" id="teaching-process" role="tabpanel" aria-labelledby="teaching-process">
    <div class="card">
        <div class="card-header">
            <h5>Teaching Process Scorecard</h5>
        </div>
    <form id="teaching-process-form">
    
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <th>Semester</th>
                    <th>Year</th>
                    <th>Subject Code</th>
                    <th>Scheduled Classes</th>
                    <th>Held Classes</th>
                    <th>Proof</th>
                    <th>Setting</th>
                </thead>
                <tbody id="teaching-process-items">
                    <!-- <tr>
                        <td>
                            <select name="semester[]" id="" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select>
                        </td>
                        <td>
                            <input type="text" name="year[]" class="form-control" placeholder="YYYY-YY">
                        </td>
                        <td>
                            <input type="text" class="form-control" name="subject[]" placeholder="Subject Code...">
                        </td>
                        <td>
                            <input type="number" class="form-control" name="totalClasses[]" placeholder="Total Classes...">
                        </td>
                        <td>
                            <input type="number" class="form-control" name="classes[]" placeholder="Held Clasess..">
                        </td>
                        <td>
                            <input type="file" name="proof[]">
                        </td>
                    </tr> -->
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <div class="row">
              <div class="col-md-3">
                <button class="btn btn-pill btn-block btn-info" type="button" id="teaching-process-add">Add More...</button>
              </div>
              <div class="col-md-3">
                 <button class="btn btn-pill btn-block btn-success" id="teaching-process-save-btn" type="submit">Save <i class="icons font-1xl cui-check paddLeft10"></i></button>

              </div>
            </div>
        </div>
    </form>
        <script>
            var ind = 0;
            $("#teaching-process-add").on("click", function() {
              var id = "str"+ Math.random().toString().split(".")[1];
              var faculty_id = $("#faculty-id-hidden").val();
              var txt = '<tr id="'+id+'">\
                              <td>\
                            <select name="semester[]" id="" class="form-control">\
                                <option value="1">1</option>\
                                <option value="2">2</option>\
                                <option value="3">3</option>\
                                <option value="4">4</option>\
                                <option value="5">5</option>\
                                <option value="6">6</option>\
                                <option value="7">7</option>\
                                <option value="8">8</option>\
                            </select>\
                            <input type="text" value="'+id+'" name="field-id[]" style="display: none">\
                            <input type="text" name="faculty-id[]" value="'+ faculty_id +'" style="display: none">\
                        </td>\
                        <td>\
                            <input type="text" name="year[]" class="form-control" placeholder="YYYY-YY">\
                        </td>\
                        <td>\
                            <input type="text" class="form-control" name="subject[]" placeholder="Subject Code...">\
                        </td>\
                        <td>\
                            <input type="number" class="form-control" name="totalClasses[]" placeholder="Total Classes...">\
                        </td>\
                        <td>\
                            <input type="number" class="form-control" name="classes[]" placeholder="Held Clasess..">\
                        </td>\
                        <td>\
                            <input type="file" name="proof-'+ ind +'">\
                        </td>\
                        <td><button class="btn btn-danger teaching-process-delete" data-delete="'+id+'" >'+
                            '<i class="icons font-1xl d-block cui-circle-x"></i>'+
                          '</button></td>\
                            </tr>';
                           console.log(txt)
                           ind = ind + 1;
              $("#teaching-process-items").append(txt);
            });

            $("#teaching-process-form").submit(function(e){
            e.preventDefault();
             var dataString = new FormData($("#teaching-process-form")[0]);

              $.ajax({
                  type: "POST",
                  url: "teaching-process-add",
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
                    if(data) {
                      iziToast.show({
                          title: 'Success',
                          message: 'Activity Added Successfully',
                          position: 'topCenter',
                          color: 'green',
                          timeout: '2500'
                      });
                      $("#teaching-process-items").prepend(data);
                      $("#teaching-process-form").trigger("reset");
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
     
            $(document).on("click", ".teaching-process-delete", function(e) {
              e.preventDefault();
              var dataset = $(this)[0].dataset;
              $.ajax({
                method: "GET",
                url: "teaching-process-delete",
                data: {id: dataset.id},
                beforeSend: function() {
                  //alert(dataset.id);
                },
                success: function(data) {
                  if(data == 1) {
                      iziToast.show({
                          title: 'Success',
                          message: 'Activity Deleted Successfully',
                          position: 'topCenter',
                          color: 'green',
                          timeout: '2500'
                      });
                  }
                  else if (data == 0) {
                        iziToast.error({
                              title: 'Error',
                              message: 'Could not Delete Activity',
                              position: 'topCenter',
                              color: 'red',
                              timeout: '2500'
                            });
                      }
                  $("#"+dataset.delete).remove();

                  // SHOW FANCY ALERT BOX.
                },
                error: function() {
                  alert("ERROR!");
                }
              });
        }); 

        </script>
    </div>
  </div>
</div>
       
        
      </div>
     

      <hr>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="/rating-system/assets/popper.js/dist/umd/popper.min.js"></script>
    <script src="/rating-system/assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/rating-system/assets/pace-progress/pace.min.js"></script>
    <script src="/rating-system/assets/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
    <script src="/rating-system/assets/@coreui/coreui/dist/js/coreui.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="/rating-system/assets/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.bootstrap4.min.js"></script>
     <script type="text/javascript" src="/rating-system/assets/js/tooltips.js" class="view-script"></script>
    <script>
        function makeList(table, tableBody, activities, qualifications, 
            acr, teaching_process) {
            var txt = "";
            var acrtxt = "";
            var ttxt = "";
            $("#activities-table").show();
            activities.forEach(function(item) {
                txt += "<tr>" +
                 "<td>"+ item.name +"</td>" + 
                 "<td><a href='"+item.report+"'><i class='icons font-1xl d-block cui-file'>&nbsp;Download File</i></a></td>" +
                 "<td>Activity</td>" +
                 "<td><button class='btn btn-block btn-sm btn-success v-btn' type='button' data-qualification='-1' data-activity='"+item.serial+"'>Verify</button></td>" +
                 "</tr>"; 
                      
            });
            qualifications.forEach(function(item) {
                txt += "<tr>" +
                 "<td>"+ item.qualification_name +"</td>" + 
                 "<td><a href='"+item.proof+"'><i class='icons font-1xl d-block cui-file'>&nbsp;Download File</i></a></td>" +
                 "<td>Qualification</td>" +
                 "<td><button class='btn btn-block btn-sm btn-success v-btn' type='button' data-activity='-1' data-qualification='"+item.id+"'>Verify</button></td>" +
                 "</tr>"; 
                      
            });
            acr.forEach(function(item) {
                acrtxt += "<tr>" +
                 "<td>"+ "ACR" +"</td>" + 
                 "<td>"+item.acr_year+"</td>" +
                 "<td>"+item.points+"</td>" +
                 "<td><button class='btn btn-sm btn-danger acr-del-btn' type='button' data-acr='"+item.serial+"'><i class='icons font-1xl d-block cui-circle-x'></i></button></td>" +
                 "</tr>"; 
                      
            });
            teaching_process.forEach(function(item) {
                ttxt += "<tr id="+ item.serial+">" +
                 "<td>"+ item.semester +"</td>" + 
                 "<td>"+item.year+"</td>" +
                 "<td>"+item.subject_code+"</td>" +
                 "<td>"+item.total_classes+"</td>" +
                 "<td>"+item.held_classes+"</td>" +
                 "<td><a href='"+item.teaching_proof+"'><i class='icons font-1xl d-block cui-file'>&nbsp;Download File</i></a></td>" +
                 "<td><button class='btn btn-sm btn-danger teaching-process-delete' type='button' data-id='"+item.serial+"' data-delete='"+item.serial+"'><i class='icons font-1xl d-block cui-circle-x'></i></button></td>" +
                 "</tr>"; 
                      
            });

            if (teaching_process.length > 0)
                $("#teaching-process-items").html(ttxt);

            if (acr.length > 0)
                $("#acr-items").html(acrtxt);
            $("#"+tableBody).html(txt);
        }

        $(document).on("click", ".v-btn", function(e){
            e.preventDefault();
            // e.target.dataset.activity
            console.log(e);

            $.ajax({
                method: "POST",
                url: "/rating-system/verify-activity",
                data: {
                    activity : e.target.dataset.activity, 
                    qualification: e.target.dataset.qualification
                },
                beforeSend: function() {
                  //   loading here.
                },
                success: function(data) {
                    if(data == 1) {
                        alert("s");
                    }
                    else {
                        alert("failed");
                    }
                },
                error: function() {
                    alert("error");                
                }
            });
        });

        $(document).ready(function() {
            $("#example").DataTable();
            $("#user-model").iziModal({
              fullscreen: false,
              width: "80%",
              onOpening: function(modal) {
                // set faculty-id in hidden input for ACR use.
                $("#faculty-id-hidden").val(event.target.dataset.target);
                $.ajax({
                    method: "GET",
                    url: "/rating-system/get-faculty-data",
                    data: {facultyId: event.target.dataset.target, type: 1},
                    beforeSend: function() {
                        console.log({facultyId: event.target.dataset.target, type: 1});
                        modal.startLoading();
                    },
                    success: function(data) {
                        data = JSON.parse(data);

                        // data.activities for activities
                        // data.details for faculty details.
                        // data.qualifications for faculty qalifications.
                        // data.acr for faculty acr.
                        
                        if (data.details.length > 0) {
                            var details = data.details[0];
                            $("#f-name").html(details.name);
                            if (details.email.length  == 0){
                                $("#f-d-joining").html("Email Not Availabel");
                            }
                            else {
                                $("#f-d-joining").html(details.email);
                            }
                            $("#f-level").html(details.level_name);
                        }
                        
                        console.log(data);
                        if (data.activities.length > 0 || 
                            data.qualifications.length > 0 ||
                            data.acr.length > 0 ||
                            data.teaching_process.length > 0
                            ) {
                            makeList("activities-table", 
                                "activities-table-body", 
                                data.activities,
                                data.qualifications,
                                data.acr,
                                data.teaching_process);
                        }
                        else {
                            $("#activities-table").hide();
                            // show no activities present message.
                        }
                        modal.stopLoading();
                    },
                    error: function(a, xhr, b) {
                        console.log(xhr);
                        modal.stopLoading();
                    }
                });
              }
            });
            //$("#user-model").iziModal("open");
            $(".f-name").on('click', function(event){
                event.preventDefault();
                $("#user-model").iziModal("open");
            });

            $(document).on("click", ".dept-activities-delete-new", function(e) {
              e.preventDefault();
              console.log($(this)[0].dataset);
              var dataset = $(this)[0].dataset;
              $.ajax({
                method: "GET",
                url: "/rating-system/HOD/delete-activity",
                data: {id: dataset.id},
                beforeSend: function() {
                  alert(dataset.id);
                },
                success: function(data) {
                  alert('SUCCESS');
                  alert(dataset.delete);
                  $("#"+dataset.delete).remove();

                  // SHOW FANCY ALERT BOX.
                },
                error: function() {
                  alert("ERROR!");
                }
              });
            }); 

             $(".dept-activities-delete-old").on("click", function() {
              console.log($(this)[0].dataset.delete);
            }); 

            $("#dept-activities-add").on("click", function() {
              var id = "str"+ Math.random().toString().split(".")[1];
              var faculty_id = $("#faculty-id-hidden").val();
              var txt = '<tr id="'+id+'">'+
                              '<td><input type="text" name="activity[]" class="form-control" placeholder="Enter Activity name..."><input type="text" value="'+id+'" name="field-id[]" style="display: none"><input type="text" name="faculty-id[]" value="'+ faculty_id +'" style="display: none">'+'</td>'+
                              
                              '<td>'+
                                '<input name="year[]" id="" class="form-control" placeholder="YYYY-YY">'+
                                  
                              '</td>'+
                              '<td><input type="number" name="points[]" class="form-control"></td>'+
                              '<td><button class="btn btn-danger dept-activities-delete-new" data-delete="'+id+'" >'+
                                '<i class="icons font-1xl d-block cui-circle-x"></i>'+
                              '</button></td>'+
                           ' </tr>';
                           console.log(txt)
              $("#acr-items").append(txt);
            });

            
        });
      </script>
  </body>
</html>
