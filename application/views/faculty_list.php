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
    <link rel="stylesheet" href="/rating-system/assets/css/user-model.css">
    <!-- Global site tag (gtag.js) - Google Analytics-->
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
                <th>Name</th>
                <th>Position</th>
                <th>Age</th>
                <th>Years of Service</th>
                <th>Student Feedback Score (out of 25)</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                  <div class="d-flex align-middle">
                    <div class="faculty-img">
                      <img src="https://via.placeholder.com/50" alt="">
                    </div> 
                    <div class="faculty-name">
                      <a href="#" class="f-name" data-target="faculty-id">Tiger Nixon</a>     
                    </div>   
                  </div>
                
                </td>
                <td>Lecturer(9)</td>
                <td>32</td>
                <td>4</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>
                  <div class="d-flex align-middle">
                    <div class="faculty-img">
                      <img src="https://via.placeholder.com/50" alt="">
                    </div> 
                    <div class="faculty-name">
                      Tiger Nixon     
                    </div>   
                  </div>
                
                </td>
                <td>Lecturer(9)</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
            </tr>
            <tr>
                <td>
                  <div class="d-flex align-middle">
                    <div class="faculty-img">
                      <img src="https://via.placeholder.com/50" alt="">
                    </div> 
                    <div class="faculty-name">
                      Tiger Nixon     
                    </div>   
                  </div>
                
                </td>

                <td>Lecturer(10)</td>                
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
            </tr>
            <tr>
                <td>
                  <div class="d-flex align-middle">
                    <div class="faculty-img">
                      <img src="https://via.placeholder.com/50" alt="">
                    </div> 
                    <div class="faculty-name">
                      Tiger Nixon     
                    </div>   
                  </div>
                
                </td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012/03/29</td>
                <td>$433,060</td>
            </tr>
            <tr>
                <td>
                  <div class="d-flex align-middle">
                    <div class="faculty-img">
                      <img src="https://via.placeholder.com/50" alt="">
                    </div> 
                    <div class="faculty-name">
                      Tiger Nixon     
                    </div>   
                  </div>
                
                </td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008/11/28</td>
                <td>$162,700</td>
            </tr>
            <tr>
                <td>
                  <div class="d-flex align-middle">
                    <div class="faculty-img">
                      <img src="https://via.placeholder.com/50" alt="">
                    </div> 
                    <div class="faculty-name">
                      Tiger Nixon     
                    </div>   
                  </div>
                
                </td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>2012/12/02</td>
                <td>$372,000</td>
            </tr>
            <tr>
                <td>Herrod Chandler</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
                <td>2012/08/06</td>
                <td>$137,500</td>
            </tr>
            <tr>
                <td>Rhona Davidson</td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
                <td>2010/10/14</td>
                <td>$327,900</td>
            </tr>
            <tr>
                <td>Colleen Hurst</td>
                <td>Javascript Developer</td>
                <td>San Francisco</td>
                <td>39</td>
                <td>2009/09/15</td>
                <td>$205,500</td>
            </tr>
            <tr>
                <td>Sonya Frost</td>
                <td>Software Engineer</td>
                <td>Edinburgh</td>
                <td>23</td>
                <td>2008/12/13</td>
                <td>$103,600</td>
            </tr>
            <tr>
                <td>Jena Gaines</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>30</td>
                <td>2008/12/19</td>
                <td>$90,560</td>
            </tr>
            <tr>
                <td>Quinn Flynn</td>
                <td>Support Lead</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2013/03/03</td>
                <td>$342,000</td>
            </tr>
            <tr>
                <td>Charde Marshall</td>
                <td>Regional Director</td>
                <td>San Francisco</td>
                <td>36</td>
                <td>2008/10/16</td>
                <td>$470,600</td>
            </tr>
            <tr>
                <td>Haley Kennedy</td>
                <td>Senior Marketing Designer</td>
                <td>London</td>
                <td>43</td>
                <td>2012/12/18</td>
                <td>$313,500</td>
            </tr>
            <tr>
                <td>Tatyana Fitzpatrick</td>
                <td>Regional Director</td>
                <td>London</td>
                <td>19</td>
                <td>2010/03/17</td>
                <td>$385,750</td>
            </tr>
            <tr>
                <td>Michael Silva</td>
                <td>Marketing Designer</td>
                <td>London</td>
                <td>66</td>
                <td>2012/11/27</td>
                <td>$198,500</td>
            </tr>
            <tr>
                <td>Paul Byrd</td>
                <td>Chief Financial Officer (CFO)</td>
                <td>New York</td>
                <td>64</td>
                <td>2010/06/09</td>
                <td>$725,000</td>
            </tr>
            <tr>
                <td>Gloria Little</td>
                <td>Systems Administrator</td>
                <td>New York</td>
                <td>59</td>
                <td>2009/04/10</td>
                <td>$237,500</td>
            </tr>
            <tr>
                <td>Bradley Greer</td>
                <td>Software Engineer</td>
                <td>London</td>
                <td>41</td>
                <td>2012/10/13</td>
                <td>$132,000</td>
            </tr>
            <tr>
                <td>Dai Rios</td>
                <td>Personnel Lead</td>
                <td>Edinburgh</td>
                <td>35</td>
                <td>2012/09/26</td>
                <td>$217,500</td>
            </tr>
            <tr>
                <td>Jenette Caldwell</td>
                <td>Development Lead</td>
                <td>New York</td>
                <td>30</td>
                <td>2011/09/03</td>
                <td>$345,000</td>
            </tr>
            <tr>
                <td>Yuri Berry</td>
                <td>Chief Marketing Officer (CMO)</td>
                <td>New York</td>
                <td>40</td>
                <td>2009/06/25</td>
                <td>$675,000</td>
            </tr>
            <tr>
                <td>Caesar Vance</td>
                <td>Pre-Sales Support</td>
                <td>New York</td>
                <td>21</td>
                <td>2011/12/12</td>
                <td>$106,450</td>
            </tr>
            <tr>
                <td>Doris Wilder</td>
                <td>Sales Assistant</td>
                <td>Sidney</td>
                <td>23</td>
                <td>2010/09/20</td>
                <td>$85,600</td>
            </tr>
            <tr>
                <td>Angelica Ramos</td>
                <td>Chief Executive Officer (CEO)</td>
                <td>London</td>
                <td>47</td>
                <td>2009/10/09</td>
                <td>$1,200,000</td>
            </tr>
            <tr>
                <td>Gavin Joyce</td>
                <td>Developer</td>
                <td>Edinburgh</td>
                <td>42</td>
                <td>2010/12/22</td>
                <td>$92,575</td>
            </tr>
            <tr>
                <td>Jennifer Chang</td>
                <td>Regional Director</td>
                <td>Singapore</td>
                <td>28</td>
                <td>2010/11/14</td>
                <td>$357,650</td>
            </tr>
            <tr>
                <td>Brenden Wagner</td>
                <td>Software Engineer</td>
                <td>San Francisco</td>
                <td>28</td>
                <td>2011/06/07</td>
                <td>$206,850</td>
            </tr>
            <tr>
                <td>Fiona Green</td>
                <td>Chief Operating Officer (COO)</td>
                <td>San Francisco</td>
                <td>48</td>
                <td>2010/03/11</td>
                <td>$850,000</td>
            </tr>
            <tr>
                <td>Shou Itou</td>
                <td>Regional Marketing</td>
                <td>Tokyo</td>
                <td>20</td>
                <td>2011/08/14</td>
                <td>$163,000</td>
            </tr>
            <tr>
                <td>Michelle House</td>
                <td>Integration Specialist</td>
                <td>Sidney</td>
                <td>37</td>
                <td>2011/06/02</td>
                <td>$95,400</td>
            </tr>
            <tr>
                <td>Suki Burks</td>
                <td>Developer</td>
                <td>London</td>
                <td>53</td>
                <td>2009/10/22</td>
                <td>$114,500</td>
            </tr>
            <tr>
                <td>Prescott Bartlett</td>
                <td>Technical Author</td>
                <td>London</td>
                <td>27</td>
                <td>2011/05/07</td>
                <td>$145,000</td>
            </tr>
            <tr>
                <td>Gavin Cortez</td>
                <td>Team Leader</td>
                <td>San Francisco</td>
                <td>22</td>
                <td>2008/10/26</td>
                <td>$235,500</td>
            </tr>
            <tr>
                <td>Martena Mccray</td>
                <td>Post-Sales support</td>
                <td>Edinburgh</td>
                <td>46</td>
                <td>2011/03/09</td>
                <td>$324,050</td>
            </tr>
            <tr>
                <td>Unity Butler</td>
                <td>Marketing Designer</td>
                <td>San Francisco</td>
                <td>47</td>
                <td>2009/12/09</td>
                <td>$85,675</td>
            </tr>
            <tr>
                <td>Howard Hatfield</td>
                <td>Office Manager</td>
                <td>San Francisco</td>
                <td>51</td>
                <td>2008/12/16</td>
                <td>$164,500</td>
            </tr>
            <tr>
                <td>Hope Fuentes</td>
                <td>Secretary</td>
                <td>San Francisco</td>
                <td>41</td>
                <td>2010/02/12</td>
                <td>$109,850</td>
            </tr>
            <tr>
                <td>Vivian Harrell</td>
                <td>Financial Controller</td>
                <td>San Francisco</td>
                <td>62</td>
                <td>2009/02/14</td>
                <td>$452,500</td>
            </tr>
            <tr>
                <td>Timothy Mooney</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>37</td>
                <td>2008/12/11</td>
                <td>$136,200</td>
            </tr>
            <tr>
                <td>Jackson Bradshaw</td>
                <td>Director</td>
                <td>New York</td>
                <td>65</td>
                <td>2008/09/26</td>
                <td>$645,750</td>
            </tr>
            <tr>
                <td>Olivia Liang</td>
                <td>Support Engineer</td>
                <td>Singapore</td>
                <td>64</td>
                <td>2011/02/03</td>
                <td>$234,500</td>
            </tr>
            <tr>
                <td>Bruno Nash</td>
                <td>Software Engineer</td>
                <td>London</td>
                <td>38</td>
                <td>2011/05/03</td>
                <td>$163,500</td>
            </tr>
            <tr>
                <td>Sakura Yamamoto</td>
                <td>Support Engineer</td>
                <td>Tokyo</td>
                <td>37</td>
                <td>2009/08/19</td>
                <td>$139,575</td>
            </tr>
            <tr>
                <td>Thor Walton</td>
                <td>Developer</td>
                <td>New York</td>
                <td>61</td>
                <td>2013/08/11</td>
                <td>$98,540</td>
            </tr>
            <tr>
                <td>Finn Camacho</td>
                <td>Support Engineer</td>
                <td>San Francisco</td>
                <td>47</td>
                <td>2009/07/07</td>
                <td>$87,500</td>
            </tr>
            <tr>
                <td>Serge Baldwin</td>
                <td>Data Coordinator</td>
                <td>Singapore</td>
                <td>64</td>
                <td>2012/04/09</td>
                <td>$138,575</td>
            </tr>
            <tr>
                <td>Zenaida Frank</td>
                <td>Software Engineer</td>
                <td>New York</td>
                <td>63</td>
                <td>2010/01/04</td>
                <td>$125,250</td>
            </tr>
            <tr>
                <td>Zorita Serrano</td>
                <td>Software Engineer</td>
                <td>San Francisco</td>
                <td>56</td>
                <td>2012/06/01</td>
                <td>$115,000</td>
            </tr>
            <tr>
                <td>Jennifer Acosta</td>
                <td>Junior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>43</td>
                <td>2013/02/01</td>
                <td>$75,650</td>
            </tr>
            <tr>
                <td>Cara Stevens</td>
                <td>Sales Assistant</td>
                <td>New York</td>
                <td>46</td>
                <td>2011/12/06</td>
                <td>$145,600</td>
            </tr>
            <tr>
                <td>Hermione Butler</td>
                <td>Regional Director</td>
                <td>London</td>
                <td>47</td>
                <td>2011/03/21</td>
                <td>$356,250</td>
            </tr>
            <tr>
                <td>Lael Greer</td>
                <td>Systems Administrator</td>
                <td>London</td>
                <td>21</td>
                <td>2009/02/27</td>
                <td>$103,500</td>
            </tr>
            <tr>
                <td>Jonas Alexander</td>
                <td>Developer</td>
                <td>San Francisco</td>
                <td>30</td>
                <td>2010/07/14</td>
                <td>$86,500</td>
            </tr>
            <tr>
                <td>Shad Decker</td>
                <td>Regional Director</td>
                <td>Edinburgh</td>
                <td>51</td>
                <td>2008/11/13</td>
                <td>$183,000</td>
            </tr>
            <tr>
                <td>Michael Bruce</td>
                <td>Javascript Developer</td>
                <td>Singapore</td>
                <td>29</td>
                <td>2011/06/27</td>
                <td>$183,000</td>
            </tr>
            <tr>
                <td>Donna Snider</td>
                <td>Customer Support</td>
                <td>New York</td>
                <td>27</td>
                <td>2011/01/25</td>
                <td>$112,000</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
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
      <div class="user-info d-flex">
        <div class="user-img">
          <img src="https://via.placeholder.com/150" alt="">
        </div>
        <div class="user-text-info">
          <div class="name">
            Aditya Saxena
          </div>
          <div class="date-joining">
            2nd April, 2014
          </div>
          <div class="level">
            Lecturer - 9A 
          </div>
        </div>
         <div class="institute-logo">
        <img src="https://via.placeholder.com/150" alt="">
      </div>
      </div>
      <hr>
      <div class="options-area">
        <div class="row">
              <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h5>Qualifications and activities to verify</h5>
              </div>
              <div class="card-body">
                <table class="table table-bordered verify-table">
                  <thead>
                    <th>Qualification/Activity</th>
                    <th>Proof</th>
                    <th>Verify</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Completed Master's degree.</td>
                      <td><a href=""><i class="icons font-1xl d-block cui-file"></i></a></td>
                      <td>
                        <button class="btn btn-block btn-sm btn-success v-btn" type="button">Verify</button>
                      </td>
                    </tr>
                    <tr>
                      <td>Completed 3 weeks of MOOC Training</td>
                      <td><a href=""><i class="icons font-1xl d-block cui-file"></i></a></td>
                      <td><button class="btn btn-block btn-sm btn-success v-btn" type="button">Verify</button></td>
                    </tr>
                    <tr>
                      <td>Done 5 Weeks of service on Lecturer Level 9A level.</td>
                      <td><a href=""><i class="icons font-1xl d-block cui-file"></i></a></td>
                      <td><button class="btn btn-block btn-sm btn-success v-btn" type="button">Verify</button></td>
                    </tr>
                    <tr>
                      <td>Participated in CSIT Development Drive</td>
                      <td><a href=""><i class="icons font-1xl d-block cui-file"></i></a></td>
                      <td><button class="btn btn-block btn-sm btn-success v-btn" type="button">Verify</button></td>
                    </tr>
                    <tr>
                      <td>Completed two eight weeks duration MOOCS courses with E-Certification by NPTEL -AICTE</td>
                      <td><a href=""><i class="icons font-1xl d-block cui-file"></i></a></td>
                      <td><button class="btn btn-block btn-sm btn-success v-btn" type="button">Verify</button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          
          <div class="col-md-6">
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
      
        </div>
        <div class="row">
            <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h5>Add/Edit Department Activities</h5>
              </div>
              <div class="card-body">
              <form id="activity" method="post">
                <table class="table table-bordered">
                  <thead>
                    <th>Activity Name </th>
                    <th>Semester</th>
                    <th>Points</th>
                    <th>Settings</th>
                  </thead>
                  <tbody id="dept-activities-item">
                    
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
                                  url: "/rating-system/HOD/save-activities",
                                  data: dataString,
                                  beforeSend: function() {
                                    alert(dataString);
                                  },
                                  success: function(data){
                                      // alert('Successful!');
                                      alert(data);
                                      $("#dept-activities-item").prepend(data);
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
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h5>ACR</h5>
              </div>
              <div class="card-body">
              <form id="activity" method="post">
                <table class="table table-bordered">
                  <thead>
                    <th>Activity Name </th>
                    <th>Year</th>
                    <th>Points</th>
                  </thead>
                  <!--Change the Functions Accordingly to add acr points in acr_points database -->
                  <tbody id="dept-activities-item">   
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
                                  url: "/rating-system/HOD/save-activities",
                                  data: dataString,
                                  beforeSend: function() {
                                    alert(dataString);
                                  },
                                  success: function(data){
                                      // alert('Successful!');
                                      alert(data);
                                      $("#dept-activities-item").prepend(data);
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
     <script src="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/js/iziModal.min.js"></script>
     <script type="text/javascript" src="/rating-system/assets/js/tooltips.js" class="view-script"></script>
    <script>
        
$(document).ready(function() {
    $("#example").DataTable();
    $("#user-model").iziModal({
      fullscreen: true,
      width: "90%",
      onOpening: function(modal) {
      //  console.log(event.target.dataset.target);
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
      var txt = '<tr id="'+id+'">'+
                      '<td><input type="text" name="activity[]" class="form-control" placeholder="Enter Activity name..."><input type="text" value="'+id+'" name="field-id[]" style="display: none">'+'</td>'+
                      
                      '<td>'+
                        '<select name="semester[]" id="" class="form-control">'+
                          '<option value="1">1</option>'+
                          '<option value="2">2</option>'+
                          '<option value="3">3</option>'+
                          '<option value="4">4</option>'+
                          '<option value="5">5</option>'+
                          '<option value="6">6</option>'+
                          '<option value="7">7</option>'+
                          '<option value="8">8</option>'+
                        '</select>'+
                      '</td>'+
                      '<td><input type="number" name="points[]" class="form-control"></td>'+
                      '<td><button class="btn btn-danger dept-activities-delete-new" data-delete="'+id+'" >'+
                        '<i class="icons font-1xl d-block cui-circle-x"></i>'+
                      '</button></td>'+
                   ' </tr>';
                   console.log(txt)
      $("#dept-activities-item").append(txt);
    });

    
});
      </script>
  </body>
</html>
