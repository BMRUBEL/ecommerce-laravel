 <!--Start sidebar-wrapper-->
 <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
     <a href="index.html">
      <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
      <h5 class="logo-text">Zit</h5>
    </a>
  </div>
  <ul class="sidebar-menu do-nicescrol">
     <li class="sidebar-header">MAIN NAVIGATION</li>
     <li>
       <a href="index.html">
         <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
       </a>
     </li>

     <li>
       <a href="{{route('hero.index')}}">
         <i class="zmdi zmdi-view-dashboard"></i> <span>Hero Status</span>
       </a>
     </li>
     <li>
       <a href="{{route('featur.index')}}">
         <i class="zmdi zmdi-view-dashboard"></i> <span>Featur Status</span>
       </a>
     </li>
     <li>
       <a href="{{route('vegetable.index')}}">
         <i class="zmdi zmdi-view-dashboard"></i> <span>Vegetable Status</span>
       </a>
     </li>
     <li>
       <a href="{{route('cont.index')}}">
         <i class="zmdi zmdi-view-dashboard"></i> <span>Contact Status</span>
       </a>
     </li>

    
     <li>
       <a href="profile.html">
         <i class="zmdi zmdi-face"></i> <span>Profile</span>
       </a>
     </li>

     <li>
       <a href="login.html" target="_blank">
         <i class="zmdi zmdi-lock"></i> <span>Login</span>
       </a>
     </li>

      <li>
       <a href="register.html" target="_blank">
         <i class="zmdi zmdi-account-circle"></i> <span>Registration</span>
       </a>
     </li>

     {{-- <li class="sidebar-header">LABELS</li>
     <li><a href="javaScript:void();"><i class="zmdi zmdi-coffee text-danger"></i> <span>Important</span></a></li>
     <li><a href="javaScript:void();"><i class="zmdi zmdi-chart-donut text-success"></i> <span>Warning</span></a></li>
     <li><a href="javaScript:void();"><i class="zmdi zmdi-share text-info"></i> <span>Information</span></a></li> --}}

   </ul>

  </div>
  <!--End sidebar-wrapper-->
