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
    <title>Feedback</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">
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
	  
	  <div class="container-flui">
	  	<div class="card">
			<div class="card-header">Login Details</div>
			<div class="card-body">
				<div class="row">
					<p>University Id:</p>
				</div>
				<div class="row">
					<div class="col">
						<p>Course:</p>
					</div>
					<div class="col">
						<p>Branch:</p>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<p>Semester:</p>
					</div>
					<div class="col">
						<p>Batch:</p>
					</div>
				</div>
			</div>
		</div>
	  </div>
	  
	  <div class="card">
	  	<div class="card-header">Student Details</div>
		 <div class="card-body">
		  	
<ul class="nav nav-tabs" role="tablist">
<li class="nav-item active">
<a class="nav-link" data-toggle="tab" href="#faculty1" role="tab" aria-controls="faculty1" aria-selected="false">Faculty1</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#faculty2" role="tab" aria-controls="faculty2" aria-selected="false">Faculty2</a>
</li>
<li class="nav-item">
<a class="nav-link " data-toggle="tab" href="#faculty3" role="tab" aria-controls="faculty3" aria-selected="true">Faculty3</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#faculty4" role="tab" aria-controls="faculty4" aria-selected="false">Faculty4</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#faculty5" role="tab" aria-controls="faculty5" aria-selected="false">Faculty5</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#faculty6" role="tab" aria-controls="faculty6" aria-selected="false">Faculty6</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#faculty7" role="tab" aria-controls="faculty7" aria-selected="false">Faculty7</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#faculty8" role="tab" aria-controls="faculty8" aria-selected="false">Faculty8</a>
</li>
</ul>
<div class="tab-content">
<div class="tab-pane active show" id="faculty1" role="tabpanel">
	<div class="card">
			<div class="card-header">Student Details</div>
			<div class="card-body">
				<div class="row">
					<div class="col-sm-8">
						<div class="card">
							<div class="card-body">
								<table class="table table-responsive-sm table-bordered">
									<thead>
										<tr>
											<td style="width: 80%">Qualities</td>
											<td style="width: 13%">Rating</td>
										</tr>
									</thead>
									<tbody>
										<tr>
						<td>Has the Teacher covered entire Syllabus as prescribed by University/ College/ Board?</td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Has the Teacher covered relevant topics beyond syllabus </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Effectiveness of Teacher in terms of :
							(a) Technical content/course content 	
							(b) Communication skills 	
							(c) Use of teaching aids
							</td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Pace on which contents were covered </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Motivation and inspiration for students to learn </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Support for the development of Students’ skill
							(a) Practical demonstration 
							(b) Hands on training </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Clarity of expectations of students </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Feedback provided on Students’ progress </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Willingness to offer help and advice to students. </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card" style="height: 95%">
								<div class="card-header">Comments</div>
								<div class="card-body">
									<div class="form-group">
										<textarea class="form-control" rows="10" name="comment"></textarea>
									</div>
									<select class="form-control" name="" id="">
											<option value="1">Comment1</option>
											<option value="2">Comment2</option>
											<option value="3">Comment3</option>
											<option value="4">Comment4</option>
											<option value="5">Comment5</option>
									</select>
								</div>
						</div>
					</div>
				</div>
		</div>
	</div>	
</div>
<div class="tab-pane" id="faculty2" role="tabpanel">
	<div class="card">
			<div class="card-header">Student Details</div>
			<div class="card-body">
				<div class="row">
					<div class="col-sm-8">
						<div class="card">
							<div class="card-body">
								<table class="table table-responsive-sm table-bordered">
									<thead>
										<tr>
											<td style="width: 80%">Qualities</td>
											<td style="width: 13%">Rating</td>
										</tr>
									</thead>
									<tbody>
										<tr>
						<td>Has the Teacher covered entire Syllabus as prescribed by University/ College/ Board?</td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Has the Teacher covered relevant topics beyond syllabus </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Effectiveness of Teacher in terms of :
							(a) Technical content/course content 	
							(b) Communication skills 	
							(c) Use of teaching aids
							</td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Pace on which contents were covered </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Motivation and inspiration for students to learn </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Support for the development of Students’ skill
							(a) Practical demonstration 
							(b) Hands on training </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Clarity of expectations of students </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Feedback provided on Students’ progress </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Willingness to offer help and advice to students. </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card" style="height: 95%">
								<div class="card-header">Comments</div>
								<div class="card-body">
									<div class="form-group">
										<textarea class="form-control" rows="10" name="comment"></textarea>
									</div>
									<select class="form-control" name="" id="">
											<option value="1">Comment1</option>
											<option value="2">Comment2</option>
											<option value="3">Comment3</option>
											<option value="4">Comment4</option>
											<option value="5">Comment5</option>
									</select>
								</div>
						</div>
					</div>
				</div>
		</div>
	</div>	
</div>
<div class="tab-pane" id="faculty3" role="tabpanel">
	<div class="card">
			<div class="card-header">Student Details</div>
			<div class="card-body">
				<div class="row">
					<div class="col-sm-8">
						<div class="card">
							<div class="card-body">
								<table class="table table-responsive-sm table-bordered">
									<thead>
										<tr>
											<td style="width: 80%">Qualities</td>
											<td style="width: 13%">Rating</td>
										</tr>
									</thead>
									<tbody>
										<tr>
						<td>Has the Teacher covered entire Syllabus as prescribed by University/ College/ Board?</td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Has the Teacher covered relevant topics beyond syllabus </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Effectiveness of Teacher in terms of :
							(a) Technical content/course content 	
							(b) Communication skills 	
							(c) Use of teaching aids
							</td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Pace on which contents were covered </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Motivation and inspiration for students to learn </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Support for the development of Students’ skill
							(a) Practical demonstration 
							(b) Hands on training </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Clarity of expectations of students </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Feedback provided on Students’ progress </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Willingness to offer help and advice to students. </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card" style="height: 95%">
								<div class="card-header">Comments</div>
								<div class="card-body">
									<div class="form-group">
										<textarea class="form-control" rows="10" name="comment"></textarea>
									</div>
									<select class="form-control" name="" id="">
											<option value="1">Comment1</option>
											<option value="2">Comment2</option>
											<option value="3">Comment3</option>
											<option value="4">Comment4</option>
											<option value="5">Comment5</option>
									</select>
								</div>
						</div>
					</div>
				</div>
		</div>
	</div>	
</div>
<div class="tab-pane" id="faculty4" role="tabpanel">
	<div class="card">
			<div class="card-header">Student Details</div>
			<div class="card-body">
				<div class="row">
					<div class="col-sm-8">
						<div class="card">
							<div class="card-body">
								<table class="table table-responsive-sm table-bordered">
									<thead>
										<tr>
											<td style="width: 80%">Qualities</td>
											<td style="width: 13%">Rating</td>
										</tr>
									</thead>
									<tbody>
										<tr>
						<td>Has the Teacher covered entire Syllabus as prescribed by University/ College/ Board?</td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Has the Teacher covered relevant topics beyond syllabus </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Effectiveness of Teacher in terms of :
							(a) Technical content/course content 	
							(b) Communication skills 	
							(c) Use of teaching aids
							</td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Pace on which contents were covered </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Motivation and inspiration for students to learn </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Support for the development of Students’ skill
							(a) Practical demonstration 
							(b) Hands on training </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Clarity of expectations of students </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Feedback provided on Students’ progress </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Willingness to offer help and advice to students. </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card" style="height: 95%">
								<div class="card-header">Comments</div>
								<div class="card-body">
									<div class="form-group">
										<textarea class="form-control" rows="10" name="comment"></textarea>
									</div>
									<select class="form-control" name="" id="">
											<option value="1">Comment1</option>
											<option value="2">Comment2</option>
											<option value="3">Comment3</option>
											<option value="4">Comment4</option>
											<option value="5">Comment5</option>
									</select>
								</div>
						</div>
					</div>
				</div>
		</div>
	</div>
</div>
<div class="tab-pane" id="faculty5" role="tabpanel">
	<div class="card">
			<div class="card-header">Student Details</div>
			<div class="card-body">
				<div class="row">
					<div class="col-sm-8">
						<div class="card">
							<div class="card-body">
								<table class="table table-responsive-sm table-bordered">
									<thead>
										<tr>
											<td style="width: 80%">Qualities</td>
											<td style="width: 13%">Rating</td>
										</tr>
									</thead>
									<tbody>
										<tr>
						<td>Has the Teacher covered entire Syllabus as prescribed by University/ College/ Board?</td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Has the Teacher covered relevant topics beyond syllabus </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Effectiveness of Teacher in terms of :
							(a) Technical content/course content 	
							(b) Communication skills 	
							(c) Use of teaching aids
							</td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Pace on which contents were covered </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Motivation and inspiration for students to learn </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Support for the development of Students’ skill
							(a) Practical demonstration 
							(b) Hands on training </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Clarity of expectations of students </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Feedback provided on Students’ progress </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Willingness to offer help and advice to students. </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card" style="height: 95%">
								<div class="card-header">Comments</div>
								<div class="card-body">
									<div class="form-group">
										<textarea class="form-control" rows="10" name="comment"></textarea>
									</div>
									<select class="form-control" name="" id="">
											<option value="1">Comment1</option>
											<option value="2">Comment2</option>
											<option value="3">Comment3</option>
											<option value="4">Comment4</option>
											<option value="5">Comment5</option>
									</select>
								</div>
						</div>
					</div>
				</div>
		</div>
	</div>	
</div>
<div class="tab-pane" id="faculty6" role="tabpanel">
	<div class="card">
			<div class="card-header">Student Details</div>
			<div class="card-body">
				<div class="row">
					<div class="col-sm-8">
						<div class="card">
							<div class="card-body">
								<table class="table table-responsive-sm table-bordered">
									<thead>
										<tr>
											<td style="width: 80%">Qualities</td>
											<td style="width: 13%">Rating</td>
										</tr>
									</thead>
									<tbody>
										<tr>
						<td>Has the Teacher covered entire Syllabus as prescribed by University/ College/ Board?</td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Has the Teacher covered relevant topics beyond syllabus </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Effectiveness of Teacher in terms of :
							(a) Technical content/course content 	
							(b) Communication skills 	
							(c) Use of teaching aids
							</td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Pace on which contents were covered </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Motivation and inspiration for students to learn </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Support for the development of Students’ skill
							(a) Practical demonstration 
							(b) Hands on training </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>

					</tr>
					
					<tr>
						<td>Clarity of expectations of students </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Feedback provided on Students’ progress </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Willingness to offer help and advice to students. </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card" style="height: 95%">
								<div class="card-header">Comments</div>
								<div class="card-body">
									<div class="form-group">
										<textarea class="form-control" rows="10" name="comment"></textarea>
									</div>
									<select class="form-control" name="" id="">
											<option value="1">Comment1</option>
											<option value="2">Comment2</option>
											<option value="3">Comment3</option>
											<option value="4">Comment4</option>
											<option value="5">Comment5</option>
									</select>
								</div>
						</div>
					</div>
				</div>
		</div>
	</div>	
</div>
<div class="tab-pane" id="faculty7" role="tabpanel">
	<div class="card">
			<div class="card-header">Student Details</div>
			<div class="card-body">
				<div class="row">
					<div class="col-sm-8">
						<div class="card">
							<div class="card-body">
								<table class="table table-responsive-sm table-bordered">
									<thead>
										<tr>
											<td style="width: 80%">Qualities</td>
											<td style="width: 13%">Rating</td>
										</tr>
									</thead>
									<tbody>
										<tr>
						<td>Has the Teacher covered entire Syllabus as prescribed by University/ College/ Board?</td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Has the Teacher covered relevant topics beyond syllabus </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Effectiveness of Teacher in terms of :
							(a) Technical content/course content 	
							(b) Communication skills 	
							(c) Use of teaching aids
							</td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Pace on which contents were covered </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Motivation and inspiration for students to learn </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Support for the development of Students’ skill
							(a) Practical demonstration 
							(b) Hands on training </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Clarity of expectations of students </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Feedback provided on Students’ progress </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Willingness to offer help and advice to students. </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card" style="height: 95%">
								<div class="card-header">Comments</div>
								<div class="card-body">
									<div class="form-group">
										<textarea class="form-control" rows="10" name="comment"></textarea>
									</div>
									<select class="form-control" name="" id="">
											<option value="1">Comment1</option>
											<option value="2">Comment2</option>
											<option value="3">Comment3</option>
											<option value="4">Comment4</option>
											<option value="5">Comment5</option>
									</select>
								</div>
						</div>
					</div>
				</div>
		</div>
	</div>	
</div>
<div class="tab-pane" id="faculty8" role="tabpanel">
	<div class="card">
			<div class="card-header">Student Details</div>
			<div class="card-body">
				<div class="row">
					<div class="col-sm-8">
						<div class="card">
							<div class="card-body">
								<table class="table table-responsive-sm table-bordered">
									<thead>
										<tr>
											<td style="width: 80%">Qualities</td>
											<td style="width: 13%">Rating</td>
										</tr>
									</thead>
									<tbody>
										<tr>
						<td>Has the Teacher covered entire Syllabus as prescribed by University/ College/ Board?</td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Has the Teacher covered relevant topics beyond syllabus </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Effectiveness of Teacher in terms of :
							(a) Technical content/course content 	
							(b) Communication skills 	
							(c) Use of teaching aids
							</td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Pace on which contents were covered </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Motivation and inspiration for students to learn </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Support for the development of Students’ skill
							(a) Practical demonstration 
							(b) Hands on training </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Clarity of expectations of students </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Feedback provided on Students’ progress </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Willingness to offer help and advice to students. </td>
						<td>
							<select class="form-control" name="" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card" style="height: 95%">
								<div class="card-header">Comments</div>
								<div class="card-body">
									<div class="form-group">
										<textarea class="form-control" rows="10" name="comment"></textarea>
									</div>
									<select class="form-control" name="" id="">
											<option value="1">Comment1</option>
											<option value="2">Comment2</option>
											<option value="3">Comment3</option>
											<option value="4">Comment4</option>
											<option value="5">Comment5</option>
									</select>
								</div>
						</div>
					</div>
				</div>
		</div>
	</div>	
</div>
</div>

		  </div>
	  </div>
	  
    <footer class="app-footer">
      <div>
        <a href="https://aicte-india.org">AICTE</a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>  
  </body>
</html>
