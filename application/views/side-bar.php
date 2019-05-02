<?php
    
   $user = $this->session->user;
   $org = $this->session->organisation;
   if (isset($org[0]->is_state_university))
      $is_state = $org[0]->is_state_university;
   else 
    $is_state = 0;
	if(isset($org[0]->technical_diploma))
		$technical = $org[0]->technical_diploma;
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
                <i class="nav-icon cui-dashboard"></i> Dashboard
              </a>
            </li>
			  		<li class="nav-item">
                        <a class="nav-link" href="/rating-system/feedback">
                          <i class="nav-icon icon-note"></i>Feedback</a>
                      </li>
			  <!--
			  		<li class="nav-item">
                        <a class="nav-link" href="/rating-system/add-faculty-technical">
                          <i class="nav-icon icon-user-follow"></i>Add-Faculty-Technical</a>
                      </li> -->
			  
			  <li class="nav-item">
                        <a class="nav-link" href="/rating-system/save-timetable">
                          <i class="nav-icon icon-user-follow"></i>Upload Time-Table</a>
                      </li>
            <!-- // -->
            <li class="nav-title">Upload Data </li>
            <?php 
              if ($user_type == "university" && $technical == "diploma") {
                  if ($is_state == 1) {
                    ?>
                <li class="nav-item">
                  <a class="nav-link" href="/rating-system/add-institute">
                    <i class="nav-icon icon-home"></i> Add New Institutes</a>
                </li>
                    <?php
                  }
                ?>
                 <li class="nav-item">
                    <a class="nav-link" href="/rating-system/university-details">
                      <i class="nav-icon icon-pencil"></i>Edit Univesity Details</a>
                  </li>
               
                <li class="nav-item">
                <a class="nav-link" href="/rating-system/add-department">
                    <i class="nav-icon icon-notebook"></i>Add Department</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/rating-system/add-hod">
                    <i class="nav-icon  icon-user-follow"></i>Create HOD Account</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/rating-system/faculty-list">
                    <i class="nav-icon icon-list"></i>Faculty List</a>
                </li><li class="nav-item">
                  <a class="nav-link" href="/rating-system/faculty_promotion">
                    <i class="nav-icon icon-graph"></i>Promotions</a>
                </li>

                  <?php
                    }
                    else if($user_type == 'head-of-department' && $technical == "diploma") {
                      ?>
                    <li class="nav-item">
                      <a class="nav-link" href="/rating-system/hod_details">
                      <i class="nav-icon icon-pencil"></i>Edit Details</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="/rating-system/add-faculty">
                        <i class="nav-icon  icon-user-follow"></i> Add Faculty</a>
                      </li>
                      
                      
                      <li class="nav-item">
                        <a class="nav-link" href="/rating-system/faculty-list">
                        <i class="nav-icon icon-list"></i>Faculty List</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/rating-system/faculty-activity">
                          <i class="nav-icon icon-puzzle"></i>Add/Edit Activities</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/rating-system/faculty-qualifications">
                          <i class="nav-icon icon-graduation"></i>Qualifications</a>
                      </li>
			   
			  			<li class="nav-item">
                        <a class="nav-link" href="/rating-system/save-timetable">
                          <i class="nav-icon icon-user-follow"></i>Upload Time-Table</a>
                      </li>
                      <?php
                    }
                    else if ($user_type == 'faculty' && $technical == "diploma") {
                      ?>
                      <li class="nav-item">
                        <a class="nav-link" href="/rating-system/faculty-details">
                        <i class="nav-icon icon-pencil"></i>Edit Details</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/rating-system/faculty-activity">
                        <i class="nav-icon icon-puzzle"></i>Add/Edit Activities</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/rating-system/faculty-qualifications">
                          <i class="nav-icon icon-graduation"></i>Qualifications</a>
                      </li>

                      <?php
                    }
                    else if($user_type == "admin" && $technical == "diploma") {
                      ?>
                        <li class="nav-item">
                          <a class="nav-link" href="/rating-system/add-university">
                          <i class="nav-icon icon-home"></i> Add University</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/rating-system/faculty-list">
                          <i class="nav-icon icon-list"></i>Faculty List</a>
                      </li>
                                 
                      <?php
                    }

                    else if($user_type == "institute" && $technical == "diploma") {
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
			  
			  
			  <?php 
              if ($user_type == "university" && $technical == "technical") {
                  if ($is_state == 1) {
                    ?>
                <li class="nav-item">
                  <a class="nav-link" href="/rating-system/add-institute">
                    <i class="nav-icon icon-home"></i> Add New Institutes</a>
                </li>
                    <?php
                  }
                ?>
                 <li class="nav-item">
                    <a class="nav-link" href="/rating-system/university-details">
                      <i class="nav-icon icon-pencil"></i>Edit Univesity Details</a>
                  </li>
               
                <li class="nav-item">
                <a class="nav-link" href="/rating-system/add-department">
                    <i class="nav-icon icon-notebook"></i>Add Department</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/rating-system/add-hod">
                    <i class="nav-icon  icon-user-follow"></i>Create HOD Account</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/rating-system/faculty-list">
                    <i class="nav-icon icon-list"></i>Faculty List</a>
                </li><li class="nav-item">
                  <a class="nav-link" href="/rating-system/faculty_promotion">
                    <i class="nav-icon icon-graph"></i>Promotions</a>
                </li>

                  <?php
                    }
                    else if($user_type == 'head-of-department' && $technical == "technical") {
                      ?>
                    <li class="nav-item">
                      <a class="nav-link" href="/rating-system/hod_details">
                      <i class="nav-icon icon-pencil"></i>Edit Details</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="/rating-system/add-faculty-technical">
                        <i class="nav-icon  icon-user-follow"></i> Add Faculty</a>
                      </li>
                      
                      
                      <li class="nav-item">
                        <a class="nav-link" href="/rating-system/faculty-list">
                        <i class="nav-icon icon-list"></i>Faculty List</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/rating-system/faculty-activity">
                          <i class="nav-icon icon-puzzle"></i>Add/Edit Activities</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/rating-system/faculty-qualifications-technical">
                          <i class="nav-icon icon-graduation"></i>Qualifications</a>
                      </li>
			   
			  			<li class="nav-item">
                        <a class="nav-link" href="/rating-system/save-timetable">
                          <i class="nav-icon icon-user-follow"></i>Upload Time-Table</a>
                      </li>
                      <?php
                    }
                    else if ($user_type == 'faculty' && $technical == "technical") {
                      ?>
                      <li class="nav-item">
                        <a class="nav-link" href="/rating-system/faculty-details">
                        <i class="nav-icon icon-pencil"></i>Edit Details</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/rating-system/faculty-activity">
                        <i class="nav-icon icon-puzzle"></i>Add/Edit Activities</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/rating-system/faculty-qualifications-technical">
                          <i class="nav-icon icon-graduation"></i>Qualifications</a>
                      </li>

                      <?php
                    }
                    else if($user_type == "admin" && $technical == "technical") {
                      ?>
                        <li class="nav-item">
                          <a class="nav-link" href="/rating-system/add-university">
                          <i class="nav-icon icon-home"></i> Add University</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/rating-system/faculty-list">
                          <i class="nav-icon icon-list"></i>Faculty List</a>
                      </li>
                                 
                      <?php
                    }

                    else if($user_type == "institute" && $technical == "technical") {
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
			  
			  
			  
			  
          </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
      </div>