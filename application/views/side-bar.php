<?php
    
   $user = $this->session->user;
   $org = $this->session->organisation;
   if (isset($org[0]->is_state_university))
      $is_state = $org[0]->is_state_university;
   else 
    $is_state = 0;
   $user_type = $user[0]->role;
   $accessControll = 0;

?>
 <div class="sidebar" style="z-index: 1">
        <nav class="sidebar-nav">
          <ul class="nav">
            <!-- basic admin features. -->
            <li class="nav-title">Admin Dashboard</li>
            <li class="nav-item">
              <a class="nav-link" href="/rating-system/user/dashboard">
                <i class="nav-icon icon-speedometer"></i> Dashboard
              </a>
            </li>
            <!-- // -->
            <li class="nav-title">Upload Data </li>
            <?php 
              if ($user_type == "university") {
                  if ($is_state == 1) {
                    ?>
                <li class="nav-item">
                  <a class="nav-link" href="/rating-system/add-institute">
                    <i class="nav-icon icon-drop"></i> Add New Institutes</a>
                </li>
                    <?php
                  }
                ?>
                 <li class="nav-item">
                    <a class="nav-link" href="/rating-system/university-admin">
                      <i class="nav-icon icon-drop"></i>Edit Univesity Details</a>
                  </li>
               
                <li class="nav-item">
                <a class="nav-link" href="/rating-system/add-department">
                    <i class="nav-icon icon-drop"></i>Add Department</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/rating-system/add-hod">
                    <i class="nav-icon icon-drop"></i>Create HOD Account</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="HOD/faculty-list">
                    <i class="nav-icon icon-drop"></i>Faculty List</a>
                </li><li class="nav-item">
                  <a class="nav-link" href="/rating-system/faculty_promotion">
                    <i class="nav-icon icon-drop"></i>Promotions</a>
                </li>

                  <?php
                    }
                    else if($user_type == 'head-of-department') {
                      ?>
                    <li class="nav-item">
                      <a class="nav-link" href="/rating-system/hod_details">
                        <i class="nav-icon icon-drop"></i>Edit Details</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="/rating-system/add-faculty">
                        <i class="nav-icon icon-drop"></i> Add Faculty</a>
                      </li>
                      
                      
                      <li class="nav-item">
                        <a class="nav-link" href="HOD/faculty-list">
                          <i class="nav-icon icon-drop"></i>Faculty List</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/rating-system/faculty-activity">
                          <i class="nav-icon icon-drop"></i>Add/Edit Activities</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/rating-system/facultyQualifications">
                          <i class="nav-icon icon-drop"></i>Qualifications</a>
                      </li>
                      <?php
                    }
                    else if ($user_type == 'faculty') {
                      ?>
                      <li class="nav-item">
                        <a class="nav-link" href="/rating-system/faculty-details">
                        <i class="nav-icon icon-drop"></i>Edit Details</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/rating-system/faculty-activity">
                          <i class="nav-icon icon-drop"></i>Add/Edit Activities</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/rating-system/facultyQualifications">
                          <i class="nav-icon icon-drop"></i>Qualifications</a>
                      </li>

                      <?php
                    }
                    else if($user_type == "admin") {
                      ?>
                        <li class="nav-item">
                          <a class="nav-link" href="/rating-system/add-university">
                          <i class="nav-icon icon-drop"></i> Add University</a>
                        </li>
                                 
                      <?php
                    }

                    else if($user_type == "institute") {
                      ?>
                  <li class="nav-item">
                    <a class="nav-link" href="/rating-system/university-details">
                      <i class="nav-icon icon-drop"></i>Edit Institute Details</a>
                  </li>
               
                <li class="nav-item">
                <a class="nav-link" href="/rating-system/add-department">
                    <i class="nav-icon icon-drop"></i>Add Department</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/rating-system/add-hod">
                    <i class="nav-icon icon-drop"></i>Create HOD Account</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/rating-system/faculty-list">
                    <i class="nav-icon icon-drop"></i>Faculty List</a>
                </li>
                      <?php
                    }
                  ?>
                 <!-- <li class="nav-item">
                  <a class="nav-link" href="/rating-system/add-university">
                    <i class="nav-icon icon-drop"></i> Add University</a>
                                 </li>
                                 
                 
                                 <li class="nav-item">
                  <a class="nav-link" href="/rating-system/faculty">
                    <i class="nav-icon icon-drop"></i>Faculty</a>
                                 </li>
                                 <li class="nav-item">
                  <a class="nav-link" href="/rating-system/facultyQualifications">
                    <i class="nav-icon icon-drop"></i>Qualifications</a>
                                 </li>
                                 
                                 <li class="nav-item">
                                 <a class="nav-link" href="/rating-system/faculty-activity">
                    <i class="nav-icon icon-drop"></i>Activities</a>
                                 </li>
                                
                                 <li class="nav-item">
                                 <a class="nav-link" href="/rating-system/add-institution">
                    <i class="nav-icon icon-drop"></i>Add Institutions</a>
                                 </li>
                                 
                                 
                                 <li class="nav-item">
                                 <a class="nav-link" href="/rating-system/hod_details">
                    <i class="nav-icon icon-drop"></i>HOD</a>
                                 </li>
                                -->
            
            <!-- <li class="nav-item">
              <a class="nav-link" href="typography.html">
                <i class="nav-icon icon-pencil"></i> Typography</a>
            </li> -->
            <!-- <li class="nav-title">Components</li>
            <li class="nav-item nav-dropdown">
              <a class="nav-link nav-dropdown-toggle" href="#">
                <i class="nav-icon icon-puzzle"></i> Base</a>
              <ul class="nav-dropdown-items">
                <li class="nav-item">
                  <a class="nav-link" href="base/breadcrumb.html">
                    <i class="nav-icon icon-puzzle"></i> Breadcrumb</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/cards.html">
                    <i class="nav-icon icon-puzzle"></i> Cards</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/carousel.html">
                    <i class="nav-icon icon-puzzle"></i> Carousel</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/collapse.html">
                    <i class="nav-icon icon-puzzle"></i> Collapse</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/forms.html">
                    <i class="nav-icon icon-puzzle"></i> Forms</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/jumbotron.html">
                    <i class="nav-icon icon-puzzle"></i> Jumbotron</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/list-group.html">
                    <i class="nav-icon icon-puzzle"></i> List group</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/navs.html">
                    <i class="nav-icon icon-puzzle"></i> Navs</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/pagination.html">
                    <i class="nav-icon icon-puzzle"></i> Pagination</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/popovers.html">
                    <i class="nav-icon icon-puzzle"></i> Popovers</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/progress.html">
                    <i class="nav-icon icon-puzzle"></i> Progress</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/scrollspy.html">
                    <i class="nav-icon icon-puzzle"></i> Scrollspy</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/switches.html">
                    <i class="nav-icon icon-puzzle"></i> Switches</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/tables.html">
                    <i class="nav-icon icon-puzzle"></i> Tables</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/tabs.html">
                    <i class="nav-icon icon-puzzle"></i> Tabs</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/tooltips.html">
                    <i class="nav-icon icon-puzzle"></i> Tooltips</a>
                </li>
              </ul>
            </li> -->
           
            
           
          </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
      </div>