<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/x-icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/lnr-icon.css">

<link rel="stylesheet" href="assets/css/font-awesome.min.css">

<link rel="stylesheet" href="assets/css/style.css">
<title>Dashboard Page</title>

<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
</head>
<body>

<div class="inner-wrapper">

<div id="loader-wrapper">
<div class="loader">
<div class="dot"></div>
<div class="dot"></div>
<div class="dot"></div>
<div class="dot"></div>
<div class="dot"></div>
</div>
</div>

<header class="header">

<div class="top-header-section">
<div class="container-fluid">
<div class="row align-items-center">
<div class="col-lg-3 col-md-3 col-sm-3 col-6">
<div class="logo my-3 my-sm-0">
<a href="index.html">
<img src="assets/img/logo.png" style="border-radius: 15%;" alt="logo image" class="img-fluid" width="100">
</a>
</div>
</div>
<div class="col-lg-9 col-md-9 col-sm-9 col-6 text-right">
<div class="user-block d-none d-lg-block">
<div class="row align-items-center">
<div class="col-lg-12 col-md-12 col-sm-12">
<div class="user-notification-block align-right d-inline-block">
<div class="top-nav-search">
<form>
<input type="text" class="form-control" placeholder="Search here">
<button class="btn" type="submit"><i class="fa fa-search"></i></button>
</form>
</div>
</div>

<div class="user-notification-block align-right d-inline-block">
<ul class="list-inline m-0">
<li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Apply Leave">
<a href="leave.html" class="font-23 menu-style text-white align-middle">
<span class="lnr lnr-briefcase position-relative"></span>
</a>
</li>
</ul>
</div>


<div class="user-info align-right dropdown d-inline-block header-dropdown">
<a href="javascript:void(0)" data-toggle="dropdown" class=" menu-style dropdown-toggle">
<div class="user-avatar d-inline-block">
<img src="assets/img/profiles/img-6.jpg" alt="user avatar" class="rounded-circle img-fluid" width="55">
</div>
</a>

<div class="dropdown-menu notification-dropdown-menu shadow-lg border-0 p-3 m-0 dropdown-menu-right">
<a class="dropdown-item p-2" href="details.html">
<span class="media align-items-center">
<span class="lnr lnr-user mr-3"></span>
<span class="media-body text-truncate">
<span class="text-truncate">Profile</span>
</span>
</span>
</a>
<a class="dropdown-item p-2" href="/view-staff-management-index">
<span class="media align-items-center">
<span class="lnr lnr-cog mr-3"></span>
<span class="media-body text-truncate">
<span class="text-truncate">Settings</span>
</span>
</span>
</a>
<a class="dropdown-item p-2" href="/handle-logout">
<span class="media align-items-center">
<span class="lnr lnr-power-switch mr-3"></span>
<span class="media-body text-truncate">
<span class="text-truncate">Logout</span>
</span>
</span>
</a>
</div>

</div>

</div>
</div>
</div>
<div class="d-block d-lg-none">
<a href="javascript:void(0)">
<span class="lnr lnr-user d-block display-5 text-white" id="open_navSidebar"></span>
</a>

<div class="offcanvas-menu" id="offcanvas_menu">
<span class="lnr lnr-cross float-left display-6 position-absolute t-1 l-1 text-white" id="close_navSidebar"></span>
<div class="user-info align-center bg-theme text-center">
<a href="javascript:void(0)" class="d-block menu-style text-white">
<div class="user-avatar d-inline-block mr-3">
<img src="assets/img/profiles/img-6.jpg" alt="user avatar" class="rounded-circle img-fluid" width="55">
</div>
</a>
</div>
<div class="user-notification-block align-center">
<div class="top-nav-search">
<form>
<input type="text" class="form-control" placeholder="Search here">
<button class="btn" type="submit"><i class="fa fa-search"></i></button>
</form>
</div>
</div>
<hr>
<div class="user-menu-items px-3 m-0">
<a class="px-0 pb-2 pt-0" href="index.html">
<span class="media align-items-center">
<span class="lnr lnr-home mr-3"></span>
<span class="media-body text-truncate text-left">
<span class="text-truncate text-left">Dashboard</span>
</span>
</span>
</a>
<a class="p-2" href="employees.html">
<span class="media align-items-center">
<span class="lnr lnr-users mr-3"></span>
<span class="media-body text-truncate text-left">
<span class="text-truncate text-left">Employees</span>
</span>
</span>
</a>
<a class="p-2" href="employees-list.html">
<span class="media align-items-center">
<span class="lnr lnr-apartment mr-3"></span>
<span class="media-body text-truncate text-left">
<span class="text-truncate text-left">Employees List</span>
</span>
</span>
</a>
<a class="p-2" href="employees-team.html">
<span class="media align-items-center">
<span class="lnr lnr-calendar-full mr-3"></span>
<span class="media-body text-truncate text-left">
<span class="text-truncate text-left">Employees Team</span>
</span>
</span>
</a>
<a class="p-2" href="leave.html">
<span class="media align-items-center">
<span class="lnr lnr-briefcase mr-3"></span>
<span class="media-body text-truncate text-left">
<span class="text-truncate text-left">Leave</span>
</span>
</span>
</a>
<a class="p-2" href="add-employee.html">
<span class="media align-items-center">
<span class="lnr lnr-star mr-3"></span>
<span class="media-body text-truncate text-left">
<span class="text-truncate text-left">Add Employees</span>
</span>
</span>
</a>
<a class="p-2" href="leave-reports.html">
<span class="media align-items-center">
<span class="lnr lnr-rocket mr-3"></span>
<span class="media-body text-truncate text-left">
<span class="text-truncate text-left">Reports</span>
 </span>
</span>
</a>
<a class="p-2" href="employees-list">
<span class="media align-items-center">
<span class="lnr lnr-sync mr-3"></span>
<span class="media-body text-truncate text-left">
<span class="text-truncate text-left">Manage</span>
</span>
</span>
</a>
<a class="p-2" href="/view-settings-index">
<span class="media align-items-center">
<span class="lnr lnr-cog mr-3"></span>
<span class="media-body text-truncate text-left">
<span class="text-truncate text-left">Settings</span>
</span>
</span>
</a>
<a class="p-2" href="/view-staff-management-index">
<span class="media align-items-center">
<span class="lnr lnr-user mr-3"></span>
<span class="media-body text-truncate text-left">
<span class="text-truncate text-left">Profile</span>
</span>
</span>
</a>
<a class="p-2" href="index.html">
<span class="media align-items-center">
<span class="lnr lnr-power-switch mr-3"></span>
<span class="media-body text-truncate text-left">
<span class="text-truncate text-left">Logout</span>
</span>
</span>
</a>
</div>
</div>

</div>
</div>
</div>
</div>
</div>

</header>


<div class="page-wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-xl-3 col-lg-4 col-md-12 theiaStickySidebar">
<aside class="sidebar sidebar-user">
<div class="row">
<div class="col-12">
<div class="card ctm-border-radius shadow-sm grow">
<div class="card-body py-4">
<div class="row">
<div class="col-md-12 mr-auto text-left">
<div class="custom-search input-group">
<div class="custom-breadcrumb">
<ol class="breadcrumb no-bg-color d-inline-block p-0 m-0 mb-2">
<li class="breadcrumb-item d-inline-block"><a href="/" class="text-dark">Home</a></li>
<li class="breadcrumb-item d-inline-block active">Dashboard</li>
</ol>
<h4 class="text-dark">Admin Dashboard</h4>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="user-card card shadow-sm bg-white text-center ctm-border-radius grow">
<div class="user-info card-body">
<div class="user-avatar mb-4">
<img src="assets/img/profiles/img-13.jpg" alt="User Avatar" class="img-fluid rounded-circle" width="100">
</div>
<div class="user-details">
<h4><b>Welcome Admin</b></h4>

{{date('D,d M Y')}}
</div>
</div>
</div>

<div class="sidebar-wrapper d-lg-block d-md-none d-none">
<div class="card ctm-border-radius shadow-sm border-none grow">
<div class="card-body">
<div class="row no-gutters">
<div class="col-6 align-items-center text-center">
<a href="/view-home-page-of-staff-account" class="text-white active p-4 first-slider-btn ctm-border-right ctm-border-left ctm-border-top"><span class="lnr lnr-home pr-0 pb-lg-2 font-23"></span><span class="">Homepage</span></a>
</div>
<div class="col-6 align-items-center shadow-none text-center">
<a href="/view-my-leave-history-of-staff-account" class="text-dark p-4 second-slider-btn ctm-border-right ctm-border-top"><span class="lnr lnr-users pr-0 pb-lg-2 font-23"></span><span class="">My Leave History</span></a>
</div>

<div class="col-6 align-items-center shadow-none text-center">
<a href="/view-settings-index-of-staff-account" class="text-dark p-4 ctm-border-right ctm-border-left"><span class="lnr lnr-briefcase pr-0 pb-lg-2 font-23"></span><span class="">Settings</span></a>
</div>
<div class="col-6 align-items-center shadow-none text-center">
<a href="/handle-logout" class="text-dark p-4 last-slider-btn ctm-border-right"><span class="lnr lnr-star pr-0 pb-lg-2 font-23"></span><span class="">Logout</span></a>

</div>
</div>
</div>
</div>
</div>

</aside>
</div>
<div class="col-xl-9 col-lg-8  col-md-12">
<div class="quicklink-sidebar-menu ctm-border-radius shadow-sm bg-white card grow">
<div class="card-body">
<ul class="list-group list-group-horizontal-lg">
<li class="list-group-item text-center active button-5"><a href="index.html" class="text-white">Admin Dashboard</a></li>
<li class="list-group-item text-center button-6"><a class="text-dark" href="/">Employees Dashboard</a></li>
</ul>
</div>
</div>


<br>

@yield('dashboard-admin-content')




<div class="sidebar-overlay" id="sidebar_overlay"></div>

<script src="assets/js/jquery-3.2.1.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/Chart.min.js"></script>
<script src="assets/js/chart.js"></script>

<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

<script src="assets/js/script.js"></script>
</body>

</html>