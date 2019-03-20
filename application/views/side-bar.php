<?php
    
    $accessControll = 0;

?>
 <div class="sidebar" style="z-index: 1">
        <nav class="sidebar-nav">
          <ul class="nav">
            <!-- basic admin features. -->
            <li class="nav-title">Admin Dashboard</li>
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <i class="nav-icon icon-speedometer"></i> Dashboard
                <span class="badge badge-primary">NEW</span>
              </a>
            </li>
            <!-- // -->
            <li class="nav-title">Upload Data </li>
            <?php 
              if ($accessControll == 0) {
                ?>
                <li class="nav-item">
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
                  <a class="nav-link" href="HOD/faculty-list">
                    <i class="nav-icon icon-drop"></i>Faculty List</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/rating-system/faculty_activity">
                    <i class="nav-icon icon-drop"></i>Activities</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/rating-system/university_admin">
                    <i class="nav-icon icon-drop"></i>Univesity Admin</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/rating-system/add_hod">
                    <i class="nav-icon icon-drop"></i>Create HOD Account</a>
                </li>
                <?php
              }
            ?>
            
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