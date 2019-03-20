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
      <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="assets/img/brand/logo.svg" width="89" height="25" alt="CoreUI Logo">
        <img class="navbar-brand-minimized" src="assets/img/brand/sygnet.svg" width="30" height="30" alt="CoreUI Logo">
      </a>
      <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Dashboard</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Users</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Settings</a>
        </li>
      </ul>
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item d-md-down-none">
          <a class="nav-link" href="#">
            <i class="icon-bell"></i>
            <span class="badge badge-pill badge-danger">5</span>
          </a>
        </li>
        <li class="nav-item d-md-down-none">
          <a class="nav-link" href="#">
            <i class="icon-list"></i>
          </a>
        </li>
        <li class="nav-item d-md-down-none">
          <a class="nav-link" href="#">
            <i class="icon-location-pin"></i>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <img class="img-avatar" src="assets/img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-header text-center">
              <strong>Account</strong>
            </div>
            <a class="dropdown-item" href="#">
              <i class="fa fa-bell-o"></i> Updates
              <span class="badge badge-info">42</span>
            </a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-envelope-o"></i> Messages
              <span class="badge badge-success">42</span>
            </a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-tasks"></i> Tasks
              <span class="badge badge-danger">42</span>
            </a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-comments"></i> Comments
              <span class="badge badge-warning">42</span>
            </a>
            <div class="dropdown-header text-center">
              <strong>Settings</strong>
            </div>
            <a class="dropdown-item" href="#">
              <i class="fa fa-user"></i> Profile</a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-wrench"></i> Settings</a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-usd"></i> Payments
              <span class="badge badge-secondary">42</span>
            </a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-file"></i> Projects
              <span class="badge badge-primary">42</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <i class="fa fa-shield"></i> Lock Account</a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-lock"></i> Logout</a>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler aside-menu-toggler d-md-down-none" type="button" data-toggle="aside-menu-lg-show">
        <span class="navbar-toggler-icon"></span>
      </button>
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
            <a href="#">Admin</a>
          </li>
          <li class="breadcrumb-item active">Dashboard</li>
          <!-- Breadcrumb Menu-->
          <li class="breadcrumb-menu d-md-down-none">
            <div class="btn-group" role="group" aria-label="Button group">
              <a class="btn" href="#">
                <i class="icon-speech"></i>
              </a>
              <a class="btn" href="./">
                <i class="icon-graph"></i>  Dashboard</a>
              <a class="btn" href="#">
                <i class="icon-settings"></i>  Settings</a>
            </div>
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
                                       
                                        <div class="card-body">
                                        <div class="row" style="margin-bottom:20px">
                                          <div class="col-md-3">
                                            <div class="media">
                                              <img src="./assets/index.jpg" style="width:100%">
                                            </div>
                                          </div>
                                          <div class="col-md-9">
                                            <button class="btn btn-primary" type="button" style="margin-top:80px">+ Upload</button>
                                          </div>
                                        </div>
                                          <div class="form-group row">
                                              <div class="col-md-2">
                                                  <label for="company">Name</label>
                                              </div>
                                              <div class="col-md-8">
                                                  <input class="form-control" id="company" type="text" placeholder="Enter HOD name">
                                              </div>
                                          </div>
                                              <div class="form-group row">
                                                  <div class="col-md-2">
                                                      <label for="vat">Contact</label>
                                                  </div>
                                                  <div class="col-md-5">
                                                    <input class="form-control" id="vat" type="text" placeholder="Contact">
                                                  </div>
                                              </div>
                                            
                                            <div class="form-group row">
                                              <div class="col-md-2">
                                                  <label for="street">Address</label>
                                              </div>
                                              <div class="col-md-8">
                                                  <input class="form-control" id="street" type="text" placeholder="Enter your address">
                                              </div>
                                            </div>
                                            <div class="form-group row">
                                              <div class="col-md-2">
                                                  <label for="street">Email</label>
                                              </div>
                                              <div class="col-md-8">
                                                  <input class="form-control" id="street" type="text" placeholder="Enter email">
                                              </div>
                                            </div>
                                            <div class="form-group row">
                                              <div class="col-md-2">
                                                  <label for="street">Date Of Joining</label>
                                              </div>
                                              <div class="col-md-5">
                                                  <input class="form-control" id="street" type="text" placeholder="dd/mm/yyyy">
                                              </div>
                                            </div>
                                            <div class="form-group row">
                                              <div class="col-md-2">
                                                  <label for="street">Department</label>
                                              </div>
                                              <div class="col-md-8">
                                                  <input class="form-control" id="street" type="text" placeholder="Enter department">
                                              </div>
                                            </div>
                                            <div class="form-group row">
                                              <div class="col-md-2">
                                                  <label for="street">Subject</label>
                                              </div>
                                              <div class="col-md-8">
                                                  <input class="form-control" id="street" type="text" placeholder="Enter suject">
                                              </div>
                                            </div>
                                            <div class="form-group row">
                                              <div class="col-md-2">
                                                  <label for="street">Level</label>
                                              </div>
                                              <div class="col-md-8">
                                                  <input class="form-control" id="street" type="text" placeholder="Enter level">
                                              </div>
                                            </div>
                                            <div class="form-group row">
                                              <div class="col-md-2">
                                                  <label for="street">Faculty ID</label>
                                              </div>
                                              <div class="col-md-8">
                                                  <input class="form-control" id="street" type="text" placeholder="Enter faculty Id">
                                              </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                          <button class="btn btn-sm btn-primary" type="submit">
                                              <i class="fa fa-dot-circle-o"></i> Submit</button>
                                          <button class="btn btn-sm btn-danger" type="reset">
                                              <i class="fa fa-ban"></i> Reset</button>
                                      </div>
                                    </div> 
                                  </div>
                                  </div>
                              </div>
                              <div class="card mb-0">
                                  <div class="card-header" id="headingOne" role="tab">
                                      <h5 class="mb-0">
                                          <a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                            <i class=" cui-file h5 paddRight10"></i>Upload an Excel File</a>
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
      <aside class="aside-menu">
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">
              <i class="icon-list"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#messages" role="tab">
              <i class="icon-speech"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#settings" role="tab">
              <i class="icon-settings"></i>
            </a>
          </li>
        </ul>
        <!-- Tab panes-->
        <div class="tab-content">
          <div class="tab-pane active" id="timeline" role="tabpanel">
            <div class="list-group list-group-accent">
              <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small">Today</div>
              <div class="list-group-item list-group-item-accent-warning list-group-item-divider">
                <div class="avatar float-right">
                  <img class="img-avatar" src="assets/img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                </div>
                <div>Meeting with
                  <strong>Lucas</strong>
                </div>
                <small class="text-muted mr-3">
                  <i class="icon-calendar"></i>  1 - 3pm</small>
                <small class="text-muted">
                  <i class="icon-location-pin"></i>  Palo Alto, CA</small>
              </div>
              <div class="list-group-item list-group-item-accent-info">
                <div class="avatar float-right">
                  <img class="img-avatar" src="assets/img/avatars/4.jpg" alt="admin@bootstrapmaster.com">
                </div>
                <div>Skype with
                  <strong>Megan</strong>
                </div>
                <small class="text-muted mr-3">
                  <i class="icon-calendar"></i>  4 - 5pm</small>
                <small class="text-muted">
                  <i class="icon-social-skype"></i>  On-line</small>
              </div>
              <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small">Tomorrow</div>
              <div class="list-group-item list-group-item-accent-danger list-group-item-divider">
                <div>New UI Project -
                  <strong>deadline</strong>
                </div>
                <small class="text-muted mr-3">
                  <i class="icon-calendar"></i>  10 - 11pm</small>
                <small class="text-muted">
                  <i class="icon-home"></i>  creativeLabs HQ</small>
                <div class="avatars-stack mt-2">
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="assets/img/avatars/2.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="assets/img/avatars/3.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="assets/img/avatars/4.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="assets/img/avatars/5.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="assets/img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                </div>
              </div>
              <div class="list-group-item list-group-item-accent-success list-group-item-divider">
                <div>
                  <strong>#10 Startups.Garden</strong> Meetup</div>
                <small class="text-muted mr-3">
                  <i class="icon-calendar"></i>  1 - 3pm</small>
                <small class="text-muted">
                  <i class="icon-location-pin"></i>  Palo Alto, CA</small>
              </div>
              <div class="list-group-item list-group-item-accent-primary list-group-item-divider">
                <div>
                  <strong>Team meeting</strong>
                </div>
                <small class="text-muted mr-3">
                  <i class="icon-calendar"></i>  4 - 6pm</small>
                <small class="text-muted">
                  <i class="icon-home"></i>  creativeLabs HQ</small>
                <div class="avatars-stack mt-2">
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="assets/img/avatars/2.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="assets/img/avatars/3.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="assets/img/avatars/4.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="assets/img/avatars/5.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="assets/img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="assets/img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="assets/img/avatars/8.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane p-3" id="messages" role="tabpanel">
            <div class="message">
              <div class="py-3 pb-5 mr-3 float-left">
                <div class="avatar">
                  <img class="img-avatar" src="assets/img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                  <span class="avatar-status badge-success"></span>
                </div>
              </div>
              <div>
                <small class="text-muted">Lukasz Holeczek</small>
                <small class="text-muted float-right mt-1">1:52 PM</small>
              </div>
              <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
              <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
            </div>
            <hr>
            <div class="message">
              <div class="py-3 pb-5 mr-3 float-left">
                <div class="avatar">
                  <img class="img-avatar" src="assets/img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                  <span class="avatar-status badge-success"></span>
                </div>
              </div>
              <div>
                <small class="text-muted">Lukasz Holeczek</small>
                <small class="text-muted float-right mt-1">1:52 PM</small>
              </div>
              <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
              <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
            </div>
            <hr>
            <div class="message">
              <div class="py-3 pb-5 mr-3 float-left">
                <div class="avatar">
                  <img class="img-avatar" src="assets/img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                  <span class="avatar-status badge-success"></span>
                </div>
              </div>
              <div>
                <small class="text-muted">Lukasz Holeczek</small>
                <small class="text-muted float-right mt-1">1:52 PM</small>
              </div>
              <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
              <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
            </div>
            <hr>
            <div class="message">
              <div class="py-3 pb-5 mr-3 float-left">
                <div class="avatar">
                  <img class="img-avatar" src="assets/img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                  <span class="avatar-status badge-success"></span>
                </div>
              </div>
              <div>
                <small class="text-muted">Lukasz Holeczek</small>
                <small class="text-muted float-right mt-1">1:52 PM</small>
              </div>
              <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
              <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
            </div>
            <hr>
            <div class="message">
              <div class="py-3 pb-5 mr-3 float-left">
                <div class="avatar">
                  <img class="img-avatar" src="assets/img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                  <span class="avatar-status badge-success"></span>
                </div>
              </div>
              <div>
                <small class="text-muted">Lukasz Holeczek</small>
                <small class="text-muted float-right mt-1">1:52 PM</small>
              </div>
              <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
              <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
            </div>
          </div>
          <div class="tab-pane p-3" id="settings" role="tabpanel">
            <h6>Settings</h6>
            <div class="aside-options">
              <div class="clearfix mt-4">
                <small>
                  <b>Option 1</b>
                </small>
                <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                  <input class="switch-input" type="checkbox" checked="">
                  <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                </label>
              </div>
              <div>
                <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
              </div>
            </div>
            <div class="aside-options">
              <div class="clearfix mt-3">
                <small>
                  <b>Option 2</b>
                </small>
                <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                  <input class="switch-input" type="checkbox">
                  <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                </label>
              </div>
              <div>
                <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
              </div>
            </div>
            <div class="aside-options">
              <div class="clearfix mt-3">
                <small>
                  <b>Option 3</b>
                </small>
                <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                  <input class="switch-input" type="checkbox">
                  <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                </label>
              </div>
            </div>
            <div class="aside-options">
              <div class="clearfix mt-3">
                <small>
                  <b>Option 4</b>
                </small>
                <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                  <input class="switch-input" type="checkbox" checked="">
                  <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                </label>
              </div>
            </div>
            <hr>
            <h6>System Utilization</h6>
            <div class="text-uppercase mb-1 mt-4">
              <small>
                <b>CPU Usage</b>
              </small>
            </div>
            <div class="progress progress-xs">
              <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="text-muted">348 Processes. 1/4 Cores.</small>
            <div class="text-uppercase mb-1 mt-2">
              <small>
                <b>Memory Usage</b>
              </small>
            </div>
            <div class="progress progress-xs">
              <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="text-muted">11444GB/16384MB</small>
            <div class="text-uppercase mb-1 mt-2">
              <small>
                <b>SSD 1 Usage</b>
              </small>
            </div>
            <div class="progress progress-xs">
              <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="text-muted">243GB/256GB</small>
            <div class="text-uppercase mb-1 mt-2">
              <small>
                <b>SSD 2 Usage</b>
              </small>
            </div>
            <div class="progress progress-xs">
              <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="text-muted">25GB/256GB</small>
          </div>
        </div>
      </aside>
    </div>
    <footer class="app-footer">
      <div>
        <a href="https://coreui.io">CoreUI</a>
        <span>&copy; 2018 creativeLabs.</span>
      </div>
      <div class="ml-auto">
        <span>Powered by</span>
        <a href="https://coreui.io">CoreUI</a>
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
