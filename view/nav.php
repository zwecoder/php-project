<?php require_once "systemgen/db_connect.php"; ?>
<nav class="container-fluid bg-primary">
        <nav class="container navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
              <a class="navbar-brand text-white english" href="index.php">Home</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                 
                  
                  <li class="nav-item">
                    <a class="nav-link text-white english" href="index.php">News</a>
                  </li>
                 <?php generate_navlink(); ?>
                 
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white english" href="#" id="myDD" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php 
                 if(checkSession("email")){
                  echo getSession("username");
                 
                 }else{
                  echo "member";
                 }
                 ?> </a>
                    <ul class="dropdown-menu">
                    <?php
                    if(checkSession("username")){
                       echo "<li><a class='dropdown-item' href='logout.php'>Logout</a></li>";
                      }else{
                      echo "<li><a class='dropdown-item' href='register.php'>Register</a></li>
                      <li><a class='dropdown-item' href='login.php'>Login</a></li>";
                      }?>
                      
                    
                      
                    </ul>
                  </li>
                </ul>
                
              </div>
            </div>
          </nav>
    </nav>