<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />
	<title>Smart University | Bootstrap Responsive Admin Template</title>
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link href="<?=base_url('resources/dashboard/source/light/fonts/simple-line-icons/simple-line-icons.min.css');?>" rel="stylesheet" type="text/css" />
	<link href="<?=base_url('resources/dashboard/source/light/fonts/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css" />
	<link href="<?=base_url('resources/dashboard/source/light/fonts/material-design-icons/material-icon.css');?>" rel="stylesheet" type="text/css" />
	<!--bootstrap -->
	<link href="<?=base_url('resources/dashboard/source/assets/plugins/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css" />
	<!-- data tables -->
	<link href="<?=base_url('resources/dashboard/source/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css');?>" rel="stylesheet" type="text/css" />
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="<?=base_url('resources/dashboard/source/assets/plugins/material/material.min.css');?>">
	<link rel="stylesheet" href="<?=base_url('resources/dashboard/source/assets/css/material_style.css');?>">
	<!-- Theme Styles -->
	<link href="<?=base_url('resources/dashboard/source/assets/css/theme/light/theme_style.css');?>" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="<?=base_url('resources/dashboard/source/assets/css/theme/light/style.css');?>" rel="stylesheet" type="text/css" />
	<link href="<?=base_url('resources/dashboard/source/assets/css/plugins.min.css');?>" rel="stylesheet" type="text/css" />
	<link href="<?=base_url('resources/dashboard/source/assets/css/responsive.css');?>" rel="stylesheet" type="text/css" />
	<link href="<?=base_url('resources/dashboard/source/assets/css/theme/light/theme-color.css');?>" rel="stylesheet" type="text/css" />
	<!-- favicon -->
	<link rel="shortcut icon" href="<?=base_url('resources/dashboard/source/assets/img/favicon.ico');?>" />
</head>
<!-- END HEAD -->

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
	<div class="page-wrapper">
		<!-- start header -->
		<div class="page-header navbar navbar-fixed-top">
			<div class="page-header-inner ">
				<!-- logo start -->
				<div class="page-logo">
					<a href="index.html">
						<span class="logo-icon material-icons fa-rotate-45">school</span>
						<span class="logo-default">Smart</span> </a>
				</div>
				<!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
				</ul>
				<form class="search-form-opened" action="#" method="GET">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search..." name="query">
						<span class="input-group-btn">
							<a href="javascript:;" class="btn submit">
								<i class="icon-magnifier"></i>
							</a>
						</span>
					</div>
				</form>
				<!-- start mobile menu -->
				<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
					<span></span>
				</a>
				<!-- end mobile menu -->
				<!-- start header menu -->
				<div class="top-menu">
					<ul class="nav navbar-nav pull-right">
						<li><a href="javascript:;" class="fullscreen-btn"><i class="fa fa-arrows-alt"></i></a></li>
						<!-- start language menu -->
						<li class="dropdown language-switch">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <img src="../assets/img/flags/gb.png"
								 class="position-left" alt=""> English <span class="fa fa-angle-down"></span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a class="deutsch"><img src="../assets/img/flags/de.png" alt=""> Deutsch</a>
								</li>
								<li>
									<a class="ukrainian"><img src="../assets/img/flags/ua.png" alt=""> Українська</a>
								</li>
								<li>
									<a class="english"><img src="../assets/img/flags/gb.png" alt=""> English</a>
								</li>
								<li>
									<a class="espana"><img src="../assets/img/flags/es.png" alt=""> España</a>
								</li>
								<li>
									<a class="russian"><img src="../assets/img/flags/ru.png" alt=""> Русский</a>
								</li>
							</ul>
						</li>
						<!-- end language menu -->
						<!-- start notification dropdown -->
						<li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
								<i class="fa fa-bell-o"></i>
								<span class="badge headerBadgeColor1"> 6 </span>
							</a>
							<ul class="dropdown-menu">
								<li class="external">
									<h3><span class="bold">Notifications</span></h3>
									<span class="notification-label purple-bgcolor">New 6</span>
								</li>
								<li>
									<ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
										<li>
											<a href="javascript:;">
												<span class="time">just now</span>
												<span class="details">
													<span class="notification-icon circle deepPink-bgcolor"><i class="fa fa-check"></i></span>
													Congratulations!. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">3 mins</span>
												<span class="details">
													<span class="notification-icon circle purple-bgcolor"><i class="fa fa-user o"></i></span>
													<b>John Micle </b>is now following you. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">7 mins</span>
												<span class="details">
													<span class="notification-icon circle blue-bgcolor"><i class="fa fa-comments-o"></i></span>
													<b>Sneha Jogi </b>sent you a message. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">12 mins</span>
												<span class="details">
													<span class="notification-icon circle pink"><i class="fa fa-heart"></i></span>
													<b>Ravi Patel </b>like your photo. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">15 mins</span>
												<span class="details">
													<span class="notification-icon circle yellow"><i class="fa fa-warning"></i></span> Warning! </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">10 hrs</span>
												<span class="details">
													<span class="notification-icon circle red"><i class="fa fa-times"></i></span> Application error. </span>
											</a>
										</li>
									</ul>
									<div class="dropdown-menu-footer">
										<a href="javascript:void(0)"> All notifications </a>
									</div>
								</li>
							</ul>
						</li>
						<!-- end notification dropdown -->
						<!-- start message dropdown -->
						<li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
								<i class="fa fa-envelope-o"></i>
								<span class="badge headerBadgeColor2"> 2 </span>
							</a>
							<ul class="dropdown-menu">
								<li class="external">
									<h3><span class="bold">Messages</span></h3>
									<span class="notification-label cyan-bgcolor">New 2</span>
								</li>
								<li>
									<ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
										<li>
											<a href="#">
												<span class="photo">
													<img src="../assets/img/prof/prof2.jpg" class="img-circle" alt=""> </span>
												<span class="subject">
													<span class="from"> Sarah Smith </span>
													<span class="time">Just Now </span>
												</span>
												<span class="message"> Jatin I found you on LinkedIn... </span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="../assets/img/prof/prof3.jpg" class="img-circle" alt=""> </span>
												<span class="subject">
													<span class="from"> John Deo </span>
													<span class="time">16 mins </span>
												</span>
												<span class="message"> Fwd: Important Notice Regarding Your Domain Name... </span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="../assets/img/prof/prof1.jpg" class="img-circle" alt=""> </span>
												<span class="subject">
													<span class="from"> Rajesh </span>
													<span class="time">2 hrs </span>
												</span>
												<span class="message"> pls take a print of attachments. </span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="../assets/img/prof/prof8.jpg" class="img-circle" alt=""> </span>
												<span class="subject">
													<span class="from"> Lina Smith </span>
													<span class="time">40 mins </span>
												</span>
												<span class="message"> Apply for Ortho Surgeon </span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="../assets/img/prof/prof5.jpg" class="img-circle" alt=""> </span>
												<span class="subject">
													<span class="from"> Jacob Ryan </span>
													<span class="time">46 mins </span>
												</span>
												<span class="message"> Request for leave application. </span>
											</a>
										</li>
									</ul>
									<div class="dropdown-menu-footer">
										<a href="#"> All Messages </a>
									</div>
								</li>
							</ul>
						</li>
						<!-- end message dropdown -->
						<!-- start manage user dropdown -->
						<li class="dropdown dropdown-user">
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
								<img alt="" class="img-circle " src="../assets/img/dp.jpg" />
								<span class="username username-hide-on-mobile"> Kiran </span>
								<i class="fa fa-angle-down"></i>
							</a>
							<ul class="dropdown-menu dropdown-menu-default">
								<li>
									<a href="user_profile.html">
										<i class="icon-user"></i> Profile </a>
								</li>
								<li>
									<a href="#">
										<i class="icon-settings"></i> Settings
									</a>
								</li>
								<li>
									<a href="#">
										<i class="icon-directions"></i> Help
									</a>
								</li>
								<li class="divider"> </li>
								<li>
									<a href="lock_screen.html">
										<i class="icon-lock"></i> Lock
									</a>
								</li>
								<li>
									<a href="login.html">
										<i class="icon-logout"></i> Log Out </a>
								</li>
							</ul>
						</li>
						<!-- end manage user dropdown -->
						<li class="dropdown dropdown-quick-sidebar-toggler">
							<a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">
								<i class="material-icons">more_vert</i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- end header -->
		<!-- start color quick setting -->
		<div class="quick-setting-main">
			<button class="control-sidebar-btn btn" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></button>
			<div class="quick-setting display-none">
				<ul id="themecolors">
					<li>
						<p class="selector-title">Main Layouts</p>
					</li>
					<li class="complete">
						<div class="theme-color layout-theme">
							<a href="#" data-theme="light"><span class="head"></span><span class="cont"></span></a>
							<a href="../dark/all_professors.html" data-theme="dark"><span class="head"></span><span class="cont"></span></a>
						</div>
					</li>
					<li>
						<p class="selector-title">Sidebar Color</p>
					</li>
					<li class="complete">
						<div class="theme-color sidebar-theme">
							<a href="#" data-theme="white"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="dark"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="blue"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="indigo"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="cyan"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="green"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="red"><span class="head"></span><span class="cont"></span></a>
						</div>
					</li>
					<li>
						<p class="selector-title">Header Brand color</p>
					</li>
					<li class="theme-option">
						<div class="theme-color logo-theme">
							<a href="#" data-theme="logo-white"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="logo-dark"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="logo-blue"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="logo-indigo"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="logo-cyan"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="logo-green"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="logo-red"><span class="head"></span><span class="cont"></span></a>
						</div>
					</li>
					<li>
						<p class="selector-title">Header color</p>
					</li>
					<li class="theme-option">
						<div class="theme-color header-theme">
							<a href="#" data-theme="header-white"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="header-dark"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="header-blue"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="header-indigo"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="header-cyan"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="header-green"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="header-red"><span class="head"></span><span class="cont"></span></a>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<!-- end color quick setting -->
		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
			<div class="sidebar-container">
				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
					<div id="remove-scroll" class="left-sidemenu">
						<ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false" data-auto-scroll="true"
						 data-slide-speed="200" style="padding-top: 20px">
							<li class="sidebar-toggler-wrapper hide">
								<div class="sidebar-toggler">
									<span></span>
								</div>
							</li>
							<li class="sidebar-user-panel">
								<div class="user-panel">
									<div class="pull-left image">
										<img src="../assets/img/dp.jpg" class="img-circle user-img-circle" alt="User Image" />
									</div>
									<div class="pull-left info">
										<p> Kiran Patel</p>
										<a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline"> Online</span></a>
									</div>
								</div>
							</li>
							<li class="nav-item start ">
								<a href="#" class="nav-link nav-toggle">
									<i class="material-icons">dashboard</i>
									<span class="title">Dashboard</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item   ">
										<a href="index.html" class="nav-link ">
											<span class="title">Dashboard 1</span>
										</a>
									</li>
									<li class="nav-item ">
										<a href="dashboard2.html" class="nav-link ">
											<span class="title">Dashboard 2</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="dashboard3.html" class="nav-link ">
											<span class="title">Dashboard 3</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="event.html" class="nav-link nav-toggle"> <i class="material-icons">event</i>
									<span class="title">Event Management</span>
								</a>
							</li>
							<li class="nav-item active open">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">person</i>
									<span class="title">Professors</span><span class="selected"></span>
									<span class="arrow open"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item active">
										<a href="<?=base_url('User_List')?>" class="nav-link "> <span class="title">Lista de Aspirantes</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_professor.html" class="nav-link "> <span class="title">Add Professor</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_professor_bootstrap.html" class="nav-link "> <span class="title">Add Professor Bootstrap</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="edit_professor.html" class="nav-link "> <span class="title">Edit Professor</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="professor_profile.html" class="nav-link "> <span class="title">About Professor</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"><i class="material-icons">group</i>
									<span class="title">Students</span><span class="arrow"></span></a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="all_students.html" class="nav-link "> <span class="title">All Students</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_student.html" class="nav-link "> <span class="title">Add Student</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_student_bootstrap.html" class="nav-link "> <span class="title">Add Student Bootstrap</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="edit_student.html" class="nav-link "> <span class="title">Edit Student</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="student_profile.html" class="nav-link "> <span class="title">About Student</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">school</i>
									<span class="title">Courses</span> <span class="arrow"></span>
									<span class="label label-rouded label-menu label-success">new</span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="all_courses.html" class="nav-link "> <span class="title">All Courses</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_course.html" class="nav-link "> <span class="title">Add Course</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_course_bootstrap.html" class="nav-link "> <span class="title">Add Course Bootstrap</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="edit_course.html" class="nav-link "> <span class="title">Edit Course</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="course_details.html" class="nav-link "> <span class="title">About Course</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">local_library</i>
									<span class="title">Library</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="all_assets.html" class="nav-link "> <span class="title">All Library Assets</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_library.html" class="nav-link "> <span class="title">Add Library Asset</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_library_bootstrap.html" class="nav-link "> <span class="title">Add Asset Bootstrap</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="edit_library.html" class="nav-link "> <span class="title">Edit Asset</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">business</i>
									<span class="title">Departments</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="all_department.html" class="nav-link "> <span class="title">All Departments</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_department.html" class="nav-link "> <span class="title">Add Department</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_department_bootstrap.html" class="nav-link "> <span class="title">Add Department Bootstrap</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="edit_department.html" class="nav-link "> <span class="title">Edit Department</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">face</i>
									<span class="title">Staff</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="all_staffs.html" class="nav-link "> <span class="title">All Staff</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_staff.html" class="nav-link "> <span class="title">Add Staff</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_staff_bootstrap.html" class="nav-link "> <span class="title">Add Staff Bootstrap</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="edit_staff.html" class="nav-link "> <span class="title">Edit Staff</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="staff_profile.html" class="nav-link "> <span class="title">Staff Profile</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">airline_seat_individual_suite</i>
									<span class="title">Holiday</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="all_holidays.html" class="nav-link "> <span class="title">All Holiday</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_holiday.html" class="nav-link "> <span class="title">Add Holiday</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_holiday_bootstrap.html" class="nav-link "> <span class="title">Add Holiday Bootstrap</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="edit_holiday.html" class="nav-link "> <span class="title">Edit Holiday</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="holiday_calendar.html" class="nav-link "> <span class="title">Holiday Calendar</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle">
									<i class="material-icons">email</i>
									<span class="title">Email</span>
									<span class="arrow"></span>
									<span class="label label-rouded label-menu label-danger">new</span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="email_inbox.html" class="nav-link ">
											<span class="title">Inbox</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="email_view.html" class="nav-link ">
											<span class="title">View Mail</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="email_compose.html" class="nav-link ">
											<span class="title">Compose Mail</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">monetization_on</i>
									<span class="title">Fees</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="fees_collection.html" class="nav-link "> <span class="title">Fees Collection</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_fees.html" class="nav-link "> <span class="title">Add Fees </span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_fees_bootstrap.html" class="nav-link "> <span class="title">Add Fees Bootstrap</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="fees_receipt.html" class="nav-link "> <span class="title">Fee Receipt</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="widget.html" class="nav-link nav-toggle"> <i class="material-icons">widgets</i>
									<span class="title">Widget</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle">
									<i class="material-icons">dvr</i>
									<span class="title">UI Elements</span>
									<span class="label label-rouded label-menu label-warning">new</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="ui_buttons.html" class="nav-link ">
											<span class="title">Buttons</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="ui_tabs_accordions_navs.html" class="nav-link ">
											<span class="title">Tabs &amp; Accordions</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="ui_typography.html" class="nav-link ">
											<span class="title">Typography</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="notification.html" class="nav-link ">
											<span class="title">Notification</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="ui_icons.html" class="nav-link ">
											<span class="title">Icons</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="ui_panels.html" class="nav-link ">
											<span class="title">Panels</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="ui_grid.html" class="nav-link ">
											<span class="title">Grids</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="calendar.html" class="nav-link ">
											<span class="title">Calender</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="ui_tree.html" class="nav-link ">
											<span class="title">Tree View</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="ui_carousel.html" class="nav-link ">
											<span class="title">Carousel</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle">
									<i class="material-icons">store</i>
									<span class="title">Material Elements</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="material_button.html" class="nav-link ">
											<span class="title">Buttons</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="material_tab.html" class="nav-link ">
											<span class="title">Tabs</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="material_chips.html" class="nav-link ">
											<span class="title">Chips</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="material_grid.html" class="nav-link ">
											<span class="title">Grid</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="material_icons.html" class="nav-link ">
											<span class="title">Icon</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="material_form.html" class="nav-link ">
											<span class="title">Form</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="material_datepicker.html" class="nav-link ">
											<span class="title">DatePicker</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="material_select.html" class="nav-link ">
											<span class="title">Select Item</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="material_loading.html" class="nav-link ">
											<span class="title">Loading</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="material_menu.html" class="nav-link ">
											<span class="title">Menu</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="material_slider.html" class="nav-link ">
											<span class="title">Slider</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="material_tables.html" class="nav-link ">
											<span class="title">Tables</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="material_toggle.html" class="nav-link ">
											<span class="title">Toggle</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="material_badges.html" class="nav-link ">
											<span class="title">Badges</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="javascript:;" class="nav-link nav-toggle">
									<i class="material-icons">subtitles</i>
									<span class="title">Forms </span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="layouts_form.html" class="nav-link ">
											<span class="title">Form Layout</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="advance_form.html" class="nav-link ">
											<span class="title">Advance Component</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="wizard.html" class="nav-link ">
											<span class="title">Form Wizard</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="validation_form.html" class="nav-link ">
											<span class="title">Form Validation</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="editable_form.html" class="nav-link ">
											<span class="title">Editor</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="javascript:;" class="nav-link nav-toggle">
									<i class="material-icons">list</i>
									<span class="title">Data Tables</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="basic_table.html" class="nav-link ">
											<span class="title">Basic Tables</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="advanced_table.html" class="nav-link ">
											<span class="title">Advance Tables</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="export_table.html" class="nav-link ">
											<span class="title">Export Tables</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="child_row_table.html" class="nav-link ">
											<span class="title">Child Row Tables</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="group_table.html" class="nav-link ">
											<span class="title">Grouping</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="tableData.html" class="nav-link ">
											<span class="title">Tables With Sourced Data</span>
										</a>
									</li>
								</ul>
							</li>

							<li class="nav-item">
								<a href="javascript:;" class="nav-link nav-toggle">
									<i class="material-icons">timeline</i>
									<span class="title">Charts</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="charts_echarts.html" class="nav-link ">
											<span class="title">eCharts</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="charts_morris.html" class="nav-link ">
											<span class="title">Morris Charts</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="charts_chartjs.html" class="nav-link ">
											<span class="title">Chartjs</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="javascript:;" class="nav-link nav-toggle">
									<i class="material-icons">map</i>
									<span class="title">Maps</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="google_maps.html" class="nav-link ">
											<span class="title">Google Maps</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="vector_maps.html" class="nav-link ">
											<span class="title">Vector Maps</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="javascript:;" class="nav-link nav-toggle"> <i class="material-icons">description</i>
									<span class="title">Extra pages</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item  ">
										<a href="login.html" class="nav-link "> <span class="title">Login</span>
										</a>
									</li>
									<li class="nav-item  ">
										<a href="sign_up.html" class="nav-link "> <span class="title">Sign Up</span>
										</a>
									</li>
									<li class="nav-item  ">
										<a href="forgot_password.html" class="nav-link "> <span class="title">Forgot Password</span>
										</a>
									</li>
									<li class="nav-item"><a href="user_profile.html" class="nav-link "><span class="title">Profile</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="contact.html" class="nav-link "> <span class="title">Contact Us</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="lock_screen.html" class="nav-link "> <span class="title">Lock Screen</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="page-404.html" class="nav-link "> <span class="title">404 Page</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="page-500.html" class="nav-link "> <span class="title">500 Page</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="blank_page.html" class="nav-link "> <span class="title">Blank Page</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="javascript:;" class="nav-link nav-toggle">
									<i class="material-icons">slideshow</i>
									<span class="title">Multi Level Menu</span>
									<span class="arrow "></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="javascript:;" class="nav-link nav-toggle">
											<i class="fa fa-university"></i> Item 1
											<span class="arrow"></span>
										</a>
										<ul class="sub-menu">
											<li class="nav-item">
												<a href="javascript:;" class="nav-link nav-toggle">
													<i class="fa fa-bell-o"></i> Arrow Toggle
													<span class="arrow "></span>
												</a>
												<ul class="sub-menu">
													<li class="nav-item">
														<a href="javascript:;" class="nav-link">
															<i class="fa fa-calculator"></i> Sample Link 1</a>
													</li>
													<li class="nav-item">
														<a href="#" class="nav-link">
															<i class="fa fa-clone"></i> Sample Link 2</a>
													</li>
													<li class="nav-item">
														<a href="#" class="nav-link">
															<i class="fa fa-cogs"></i> Sample Link 3</a>
													</li>
												</ul>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link">
													<i class="fa fa-file-pdf-o"></i> Sample Link 1</a>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link">
													<i class="fa fa-rss"></i> Sample Link 2</a>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link">
													<i class="fa fa-hdd-o"></i> Sample Link 3</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="javascript:;" class="nav-link nav-toggle">
											<i class="fa fa-gavel"></i> Arrow Toggle
											<span class="arrow"></span>
										</a>
										<ul class="sub-menu">
											<li class="nav-item">
												<a href="#" class="nav-link">
													<i class="fa fa-paper-plane"></i> Sample Link 1</a>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link">
													<i class="fa fa-power-off"></i> Sample Link 1</a>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link">
													<i class="fa fa-recycle"></i> Sample Link 1
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link">
											<i class="fa fa-volume-up"></i> Item 3 </a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- end sidebar menu -->
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Professors List</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="">Professors</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Professors List</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="tabbable-line">
								<!-- <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tab1" data-toggle="tab"> List View </a>
                                    </li>
                                    <li>
                                        <a href="#tab2" data-toggle="tab"> Grid View </a>
                                    </li>
                                </ul> -->
								<ul class="nav customtab nav-tabs" role="tablist">
									<li class="nav-item"><a href="#tab1" class="nav-link active" data-toggle="tab">List View</a></li>
									<li class="nav-item"><a href="#tab2" class="nav-link" data-toggle="tab">Grid View</a></li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane active fontawesome-demo" id="tab1">
										<div class="row">
											<div class="col-md-12">
												<div class="card card-box">
													<div class="card-head">
														<header>All Professors</header>
														<div class="tools">
															<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
															<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
															<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
														</div>
													</div>
													<div class="card-body ">
														<div class="row">
															<div class="col-md-6 col-sm-6 col-6">
																<div class="btn-group">
																	<a href="add_professor.html" id="addRow" class="btn btn-info">
																		Add New <i class="fa fa-plus"></i>
																	</a>
																</div>
															</div>
															<div class="col-md-6 col-sm-6 col-6">
																<div class="btn-group pull-right">
																	<a class="btn deepPink-bgcolor  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
																		<i class="fa fa-angle-down"></i>
																	</a>
																	<ul class="dropdown-menu pull-right">
																		<li>
																			<a href="javascript:;">
																				<i class="fa fa-print"></i> Print </a>
																		</li>
																		<li>
																			<a href="javascript:;">
																				<i class="fa fa-file-pdf-o"></i> Save as PDF </a>
																		</li>
																		<li>
																			<a href="javascript:;">
																				<i class="fa fa-file-excel-o"></i> Export to Excel </a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="table-scrollable">
															<table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
															 id="example4">
																<thead>
																	<tr>
																		<th></th>
																		<th> Name </th>
																		<th> Department </th>
																		<th> Gender </th>
																		<th> Degree </th>
																		<th> Mobile </th>
																		<th> Email </th>
																		<th>Joining Date</th>
																		<th> Action </th>
																	</tr>
																</thead>
																<tbody>
																	<tr class="odd gradeX">
																		<td class="patient-img">
																			<img src="../assets/img/prof/prof1.jpg" alt="">
																		</td>
																		<td>Rajesh</td>
																		<td class="left">Computer</td>
																		<td class="left">Male</td>
																		<td class="left">M.Com, B.Ed</td>
																		<td><a href="tel:4444565756">
																				4444565756 </a></td>
																		<td><a href="mailto:shuxer@gmail.com">
																				rajesh@gmail.com </a></td>
																		<td class="left">22 Feb 2000</td>
																		<td>
																			<a href="<?=base_url('Info_User')?>" class="btn btn-primary btn-xs">
																				<i class="fa fa-pencil"></i>
																			</a>
																			<button class="btn btn-danger btn-xs">
																				<i class="fa fa-trash-o "></i>
																			</button>
																		</td>
																	</tr>
																	<tr class="odd gradeX">
																		<td class="patient-img">
																			<img src="../assets/img/prof/prof10.jpg" alt="">
																		</td>
																		<td>Pooja Patel</td>
																		<td class="left">Mechanical</td>
																		<td class="left">Female</td>
																		<td class="left">M.E.</td>
																		<td><a href="tel:444786876">
																				444786876 </a></td>
																		<td><a href="mailto:shuxer@gmail.com">
																				pooja@gmail.com </a></td>
																		<td class="left">27 Aug 2005</td>
																		<td>
																			<a href="<?=base_url('Info_User')?>" class="btn btn-primary btn-xs">
																				<i class="fa fa-pencil"></i>
																			</a>
																			<button class="btn btn-danger btn-xs">
																				<i class="fa fa-trash-o "></i>
																			</button>
																		</td>
																	</tr>
																	<tr class="odd gradeX">
																		<td class="patient-img">
																			<img src="../assets/img/prof/prof2.jpg" alt="">
																		</td>
																		<td>Sarah Smith</td>
																		<td class="left">Science</td>
																		<td class="left">Female</td>
																		<td class="left">B.Sc., M.Sc.</td>
																		<td><a href="tel:44455546456">
																				44455546456 </a></td>
																		<td><a href="mailto:shuxer@gmail.com">
																				sarah@gmail.com </a></td>
																		<td class="left">05 Jun 2011</td>
																		<td>
																			<a href="edit_professor.html" class="btn btn-primary btn-xs">
																				<i class="fa fa-pencil"></i>
																			</a>
																			<button class="btn btn-danger btn-xs">
																				<i class="fa fa-trash-o "></i>
																			</button>
																		</td>
																	</tr>
																	<tr class="odd gradeX">
																		<td class="patient-img">
																			<img src="../assets/img/prof/prof3.jpg" alt="">
																		</td>
																		<td>John Deo</td>
																		<td class="left">Music</td>
																		<td class="left">Male</td>
																		<td class="left">B.A.</td>
																		<td><a href="tel:444543564">
																				444543564 </a></td>
																		<td><a href="mailto:shuxer@gmail.com">
																				john@gmail.com </a></td>
																		<td class="left">15 Feb 2012</td>
																		<td>
																			<a href="edit_professor.html" class="btn btn-primary btn-xs">
																				<i class="fa fa-pencil"></i>
																			</a>
																			<button class="btn btn-danger btn-xs">
																				<i class="fa fa-trash-o "></i>
																			</button>
																		</td>
																	</tr>
																	<tr class="odd gradeX">
																		<td class="patient-img">
																			<img src="../assets/img/prof/prof4.jpg" alt="">
																		</td>
																		<td>Jay Soni</td>
																		<td class="left">Mathematics</td>
																		<td class="left">10</td>
																		<td class="left">B.B.A., P.H.D.</td>
																		<td><a href="tel:444543564">
																				444543564 </a></td>
																		<td><a href="mailto:shuxer@gmail.com">
																				kenh@gmail.com </a></td>
																		<td class="left">12 Nov 2012</td>
																		<td>
																			<a href="edit_professor.html" class="btn btn-primary btn-xs">
																				<i class="fa fa-pencil"></i>
																			</a>
																			<button class="btn btn-danger btn-xs">
																				<i class="fa fa-trash-o "></i>
																			</button>
																		</td>
																	</tr>
																	<tr class="odd gradeX">
																		<td class="patient-img">
																			<img src="../assets/img/prof/prof5.jpg" alt="">
																		</td>
																		<td>Jacob Ryan</td>
																		<td class="left">Computer</td>
																		<td class="left">Male</td>
																		<td class="left">B.E., M.E.</td>
																		<td><a href="tel:444543564">
																				444543564 </a></td>
																		<td><a href="mailto:shuxer@gmail.com">
																				johnson@gmail.com </a></td>
																		<td class="left">03 Dec 2001</td>
																		<td>
																			<a href="edit_professor.html" class="btn btn-primary btn-xs">
																				<i class="fa fa-pencil"></i>
																			</a>
																			<button class="btn btn-danger btn-xs">
																				<i class="fa fa-trash-o "></i>
																			</button>
																		</td>
																	</tr>
																	<tr class="odd gradeX">
																		<td class="patient-img">
																			<img src="../assets/img/prof/prof6.jpg" alt="">
																		</td>
																		<td>Megha Trivedi</td>
																		<td class="left">Mathematics</td>
																		<td class="left">Female</td>
																		<td class="left">M.COM, M.Ed.</td>
																		<td><a href="tel:444543564">
																				444543564 </a></td>
																		<td><a href="mailto:shuxer@gmail.com">
																				megha@gmail.com </a></td>
																		<td class="left">17 Mar 2013</td>
																		<td>
																			<a href="edit_professor.html" class="btn btn-primary btn-xs">
																				<i class="fa fa-pencil"></i>
																			</a>
																			<button class="btn btn-danger btn-xs">
																				<i class="fa fa-trash-o "></i>
																			</button>
																		</td>
																	</tr>
																	<tr class="odd gradeX">
																		<td class="patient-img">
																			<img src="../assets/img/prof/prof1.jpg" alt="">
																		</td>
																		<td>Rajesh</td>
																		<td class="left">Computer</td>
																		<td class="left">Male</td>
																		<td class="left">M.Com, B.Ed</td>
																		<td><a href="tel:4444565756">
																				4444565756 </a></td>
																		<td><a href="mailto:shuxer@gmail.com">
																				rajesh@gmail.com </a></td>
																		<td class="left">22 Feb 2000</td>
																		<td>
																			<a href="edit_professor.html" class="btn btn-primary btn-xs">
																				<i class="fa fa-pencil"></i>
																			</a>
																			<button class="btn btn-danger btn-xs">
																				<i class="fa fa-trash-o "></i>
																			</button>
																		</td>
																	</tr>
																	<tr class="odd gradeX">
																		<td class="patient-img">
																			<img src="../assets/img/prof/prof10.jpg" alt="">
																		</td>
																		<td>Pooja Patel</td>
																		<td class="left">Mechanical</td>
																		<td class="left">Female</td>
																		<td class="left">M.E.</td>
																		<td><a href="tel:444786876">
																				444786876 </a></td>
																		<td><a href="mailto:shuxer@gmail.com">
																				pooja@gmail.com </a></td>
																		<td class="left">27 Aug 2005</td>
																		<td>
																			<a href="edit_professor.html" class="btn btn-primary btn-xs">
																				<i class="fa fa-pencil"></i>
																			</a>
																			<button class="btn btn-danger btn-xs">
																				<i class="fa fa-trash-o "></i>
																			</button>
																		</td>
																	</tr>
																	<tr class="odd gradeX">
																		<td class="patient-img">
																			<img src="../assets/img/prof/prof2.jpg" alt="">
																		</td>
																		<td>Sarah Smith</td>
																		<td class="left">Science</td>
																		<td class="left">Female</td>
																		<td class="left">B.Sc., M.Sc.</td>
																		<td><a href="tel:44455546456">
																				44455546456 </a></td>
																		<td><a href="mailto:shuxer@gmail.com">
																				sarah@gmail.com </a></td>
																		<td class="left">05 Jun 2011</td>
																		<td>
																			<a href="edit_professor.html" class="btn btn-primary btn-xs">
																				<i class="fa fa-pencil"></i>
																			</a>
																			<button class="btn btn-danger btn-xs">
																				<i class="fa fa-trash-o "></i>
																			</button>
																		</td>
																	</tr>
																	<tr class="odd gradeX">
																		<td class="patient-img">
																			<img src="../assets/img/prof/prof3.jpg" alt="">
																		</td>
																		<td>John Deo</td>
																		<td class="left">Music</td>
																		<td class="left">Male</td>
																		<td class="left">B.A.</td>
																		<td><a href="tel:444543564">
																				444543564 </a></td>
																		<td><a href="mailto:shuxer@gmail.com">
																				john@gmail.com </a></td>
																		<td class="left">15 Feb 2012</td>
																		<td>
																			<a href="edit_professor.html" class="btn btn-primary btn-xs">
																				<i class="fa fa-pencil"></i>
																			</a>
																			<button class="btn btn-danger btn-xs">
																				<i class="fa fa-trash-o "></i>
																			</button>
																		</td>
																	</tr>
																	<tr class="odd gradeX">
																		<td class="patient-img">
																			<img src="../assets/img/prof/prof4.jpg" alt="">
																		</td>
																		<td>Jay Soni</td>
																		<td class="left">Mathematics</td>
																		<td class="left">10</td>
																		<td class="left">B.B.A., P.H.D.</td>
																		<td><a href="tel:444543564">
																				444543564 </a></td>
																		<td><a href="mailto:shuxer@gmail.com">
																				kenh@gmail.com </a></td>
																		<td class="left">12 Nov 2012</td>
																		<td>
																			<a href="edit_professor.html" class="btn btn-primary btn-xs">
																				<i class="fa fa-pencil"></i>
																			</a>
																			<button class="btn btn-danger btn-xs">
																				<i class="fa fa-trash-o "></i>
																			</button>
																		</td>
																	</tr>
																	<tr class="odd gradeX">
																		<td class="patient-img">
																			<img src="../assets/img/prof/prof5.jpg" alt="">
																		</td>
																		<td>Jacob Ryan</td>
																		<td class="left">Computer</td>
																		<td class="left">Male</td>
																		<td class="left">B.E., M.E.</td>
																		<td><a href="tel:444543564">
																				444543564 </a></td>
																		<td><a href="mailto:shuxer@gmail.com">
																				johnson@gmail.com </a></td>
																		<td class="left">03 Dec 2001</td>
																		<td>
																			<a href="edit_professor.html" class="btn btn-primary btn-xs">
																				<i class="fa fa-pencil"></i>
																			</a>
																			<button class="btn btn-danger btn-xs">
																				<i class="fa fa-trash-o "></i>
																			</button>
																		</td>
																	</tr>
																	<tr class="odd gradeX">
																		<td class="patient-img">
																			<img src="../assets/img/prof/prof6.jpg" alt="">
																		</td>
																		<td>Megha Trivedi</td>
																		<td class="left">Mathematics</td>
																		<td class="left">Female</td>
																		<td class="left">M.COM, M.Ed.</td>
																		<td><a href="tel:444543564">
																				444543564 </a></td>
																		<td><a href="mailto:shuxer@gmail.com">
																				megha@gmail.com </a></td>
																		<td class="left">17 Mar 2013</td>
																		<td>
																			<a href="edit_professor.html" class="btn btn-primary btn-xs">
																				<i class="fa fa-pencil"></i>
																			</a>
																			<button class="btn btn-danger btn-xs">
																				<i class="fa fa-trash-o "></i>
																			</button>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="tab2">
										<div class="row">
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="../assets/img/prof/prof10.jpg" class="doctor-pic" alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Pooja Patel </div>
																<div class="name-center"> Mathematics </div>
															</div>
															<p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
															<div>
																<p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="../assets/img/prof/prof1.jpg" class="doctor-pic" alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Rajesh </div>
																<div class="name-center"> Science </div>
															</div>
															<p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai</p>
															<div>
																<p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="../assets/img/prof/prof2.jpg" class="doctor-pic" alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Sarah Smith </div>
																<div class="name-center"> Computer </div>
															</div>
															<p>456, Estern evenue, Courtage area, <br />New York</p>
															<div>
																<p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="../assets/img/prof/prof3.jpg" class="doctor-pic" alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">John Deo </div>
																<div class="name-center"> Engineering </div>
															</div>
															<p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
															<div>
																<p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="../assets/img/prof/prof4.jpg" class="doctor-pic" alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Jay Soni </div>
																<div class="name-center"> Music </div>
															</div>
															<p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai</p>
															<div>
																<p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="../assets/img/prof/prof5.jpg" class="doctor-pic" alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Jacob Ryan </div>
																<div class="name-center"> Commerce </div>
															</div>
															<p>456, Estern evenue, Courtage area, <br />New York</p>
															<div>
																<p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="../assets/img/prof/prof6.jpg" class="doctor-pic" alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Megha Trivedi </div>
																<div class="name-center"> Mechanical </div>
															</div>
															<p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
															<div>
																<p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="../assets/img/prof/prof1.jpg" class="doctor-pic" alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Rajesh </div>
																<div class="name-center"> Science </div>
															</div>
															<p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai</p>
															<div>
																<p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="../assets/img/prof/prof2.jpg" class="doctor-pic" alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Sarah Smith </div>
																<div class="name-center"> Computer </div>
															</div>
															<p>456, Estern evenue, Courtage area, <br />New York</p>
															<div>
																<p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="../assets/img/prof/prof10.jpg" class="doctor-pic" alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Pooja Patel </div>
																<div class="name-center"> Mathematics </div>
															</div>
															<p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
															<div>
																<p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="../assets/img/prof/prof1.jpg" class="doctor-pic" alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Rajesh </div>
																<div class="name-center"> Science </div>
															</div>
															<p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai</p>
															<div>
																<p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="../assets/img/prof/prof3.jpg" class="doctor-pic" alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">John Deo </div>
																<div class="name-center"> Engineering </div>
															</div>
															<p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
															<div>
																<p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
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
					</div>
				</div>
			</div>
			<!-- end page content -->
			<!-- start chat sidebar -->
			<div class="chat-sidebar-container" data-close-on-body-click="false">
				<div class="chat-sidebar">
					<ul class="nav nav-tabs">
						<li class="nav-item">
							<a href="#quick_sidebar_tab_1" class="nav-link active tab-icon" data-toggle="tab"> <i class="material-icons">chat</i>Chat
								<span class="badge badge-danger">4</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="#quick_sidebar_tab_3" class="nav-link tab-icon" data-toggle="tab"> <i class="material-icons">settings</i>
								Settings
							</a>
						</li>
					</ul>
					<div class="tab-content">
						<!-- Start User Chat -->
						<div class="tab-pane active chat-sidebar-chat in active show" role="tabpanel" id="quick_sidebar_tab_1">
							<div class="chat-sidebar-list">
								<div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd" data-wrapper-class="chat-sidebar-list">
									<div class="chat-header">
										<h5 class="list-heading">Online</h5>
									</div>
									<ul class="media-list list-items">
										<li class="media"><img class="media-object" src="../assets/img/prof/prof3.jpg" width="35" height="35" alt="...">
											<i class="online dot"></i>
											<div class="media-body">
												<h5 class="media-heading">John Deo</h5>
												<div class="media-heading-sub">Spine Surgeon</div>
											</div>
										</li>
										<li class="media">
											<div class="media-status">
												<span class="badge badge-success">5</span>
											</div> <img class="media-object" src="../assets/img/prof/prof1.jpg" width="35" height="35" alt="...">
											<i class="busy dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Rajesh</h5>
												<div class="media-heading-sub">Director</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="../assets/img/prof/prof5.jpg" width="35" height="35" alt="...">
											<i class="away dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Jacob Ryan</h5>
												<div class="media-heading-sub">Ortho Surgeon</div>
											</div>
										</li>
										<li class="media">
											<div class="media-status">
												<span class="badge badge-danger">8</span>
											</div> <img class="media-object" src="../assets/img/prof/prof4.jpg" width="35" height="35" alt="...">
											<i class="online dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Kehn Anderson</h5>
												<div class="media-heading-sub">CEO</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="../assets/img/prof/prof2.jpg" width="35" height="35" alt="...">
											<i class="busy dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Sarah Smith</h5>
												<div class="media-heading-sub">Computer</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="../assets/img/prof/prof7.jpg" width="35" height="35" alt="...">
											<i class="online dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Vlad Cardella</h5>
												<div class="media-heading-sub">Cardiologist</div>
											</div>
										</li>
									</ul>
									<div class="chat-header">
										<h5 class="list-heading">Offline</h5>
									</div>
									<ul class="media-list list-items">
										<li class="media">
											<div class="media-status">
												<span class="badge badge-warning">4</span>
											</div> <img class="media-object" src="../assets/img/prof/prof6.jpg" width="35" height="35" alt="...">
											<i class="offline dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Jennifer Maklen</h5>
												<div class="media-heading-sub">Nurse</div>
												<div class="media-heading-small">Last seen 01:20 AM</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="../assets/img/prof/prof8.jpg" width="35" height="35" alt="...">
											<i class="offline dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Lina Smith</h5>
												<div class="media-heading-sub">Ortho Surgeon</div>
												<div class="media-heading-small">Last seen 11:14 PM</div>
											</div>
										</li>
										<li class="media">
											<div class="media-status">
												<span class="badge badge-success">9</span>
											</div> <img class="media-object" src="../assets/img/prof/prof9.jpg" width="35" height="35" alt="...">
											<i class="offline dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Jeff Adam</h5>
												<div class="media-heading-sub">Compounder</div>
												<div class="media-heading-small">Last seen 3:31 PM</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="../assets/img/prof/prof10.jpg" width="35" height="35" alt="...">
											<i class="offline dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Anjelina Cardella</h5>
												<div class="media-heading-sub">Physiotherapist</div>
												<div class="media-heading-small">Last seen 7:45 PM</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<div class="chat-sidebar-item">
								<div class="chat-sidebar-chat-user">
									<div class="page-quick-sidemenu">
										<a href="javascript:;" class="chat-sidebar-back-to-list">
											<i class="fa fa-angle-double-left"></i>Back
										</a>
									</div>
									<div class="chat-sidebar-chat-user-messages">
										<div class="post out">
											<img class="avatar" alt="" src="../assets/img/dp.jpg" />
											<div class="message">
												<span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a> <span class="datetime">9:10</span>
												<span class="body-out"> could you send me menu icons ? </span>
											</div>
										</div>
										<div class="post in">
											<img class="avatar" alt="" src="../assets/img/prof/prof5.jpg" />
											<div class="message">
												<span class="arrow"></span> <a href="javascript:;" class="name">Jacob Ryan</a> <span class="datetime">9:10</span>
												<span class="body"> please give me 10 minutes. </span>
											</div>
										</div>
										<div class="post out">
											<img class="avatar" alt="" src="../assets/img/dp.jpg" />
											<div class="message">
												<span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a> <span class="datetime">9:11</span>
												<span class="body-out"> ok fine :) </span>
											</div>
										</div>
										<div class="post in">
											<img class="avatar" alt="" src="../assets/img/prof/prof5.jpg" />
											<div class="message">
												<span class="arrow"></span> <a href="javascript:;" class="name">Jacob Ryan</a> <span class="datetime">9:22</span>
												<span class="body">Sorry for
													the delay. i sent mail to you. let me know if it is ok or not.</span>
											</div>
										</div>
										<div class="post out">
											<img class="avatar" alt="" src="../assets/img/dp.jpg" />
											<div class="message">
												<span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a> <span class="datetime">9:26</span>
												<span class="body-out"> it is perfect! :) </span>
											</div>
										</div>
										<div class="post out">
											<img class="avatar" alt="" src="../assets/img/dp.jpg" />
											<div class="message">
												<span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a> <span class="datetime">9:26</span>
												<span class="body-out"> Great! Thanks. </span>
											</div>
										</div>
										<div class="post in">
											<img class="avatar" alt="" src="../assets/img/prof/prof5.jpg" />
											<div class="message">
												<span class="arrow"></span> <a href="javascript:;" class="name">Jacob Ryan</a> <span class="datetime">9:27</span>
												<span class="body"> it is my pleasure :) </span>
											</div>
										</div>
									</div>
									<div class="chat-sidebar-chat-user-form">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Type a message here...">
											<div class="input-group-btn">
												<button type="button" class="btn deepPink-bgcolor">
													<i class="fa fa-arrow-right"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End User Chat -->
						<!-- Start Setting Panel -->
						<div class="tab-pane chat-sidebar-settings" role="tabpanel" id="quick_sidebar_tab_3">
							<div class="chat-sidebar-settings-list slimscroll-style">
								<div class="chat-header">
									<h5 class="list-heading">Layout Settings</h5>
								</div>
								<div class="chatpane inner-content ">
									<div class="settings-list">
										<div class="setting-item">
											<div class="setting-text">Sidebar Position</div>
											<div class="setting-set">
												<select class="sidebar-pos-option form-control input-inline input-sm input-small ">
													<option value="left" selected="selected">Left</option>
													<option value="right">Right</option>
												</select>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Header</div>
											<div class="setting-set">
												<select class="page-header-option form-control input-inline input-sm input-small ">
													<option value="fixed" selected="selected">Fixed</option>
													<option value="default">Default</option>
												</select>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Sidebar Menu </div>
											<div class="setting-set">
												<select class="sidebar-menu-option form-control input-inline input-sm input-small ">
													<option value="accordion" selected="selected">Accordion</option>
													<option value="hover">Hover</option>
												</select>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Footer</div>
											<div class="setting-set">
												<select class="page-footer-option form-control input-inline input-sm input-small ">
													<option value="fixed">Fixed</option>
													<option value="default" selected="selected">Default</option>
												</select>
											</div>
										</div>
									</div>
									<div class="chat-header">
										<h5 class="list-heading">Account Settings</h5>
									</div>
									<div class="settings-list">
										<div class="setting-item">
											<div class="setting-text">Notifications</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-1">
														<input type="checkbox" id="switch-1" class="mdl-switch__input" checked>
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Show Online</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-7">
														<input type="checkbox" id="switch-7" class="mdl-switch__input" checked>
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Status</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-2">
														<input type="checkbox" id="switch-2" class="mdl-switch__input" checked>
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">2 Steps Verification</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-3">
														<input type="checkbox" id="switch-3" class="mdl-switch__input" checked>
													</label>
												</div>
											</div>
										</div>
									</div>
									<div class="chat-header">
										<h5 class="list-heading">General Settings</h5>
									</div>
									<div class="settings-list">
										<div class="setting-item">
											<div class="setting-text">Location</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-4">
														<input type="checkbox" id="switch-4" class="mdl-switch__input" checked>
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Save Histry</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-5">
														<input type="checkbox" id="switch-5" class="mdl-switch__input" checked>
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Auto Updates</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-6">
														<input type="checkbox" id="switch-6" class="mdl-switch__input" checked>
													</label>
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
			<!-- end chat sidebar -->
		</div>
		<!-- end page container -->
		<!-- start footer -->
		<div class="page-footer">
			<div class="page-footer-inner"> 2017 &copy; Smart University Theme By
				<a href="mailto:redstartheme@gmail.com" target="_top" class="makerCss">Redstar Theme</a>
			</div>
			<div class="scroll-to-top">
				<i class="icon-arrow-up"></i>
			</div>
		</div>
		<!-- end footer -->
	</div>
	<!-- start js include path -->
	<script src="<?=base_url('resources/dashboard/source/assets/plugins/jquery/jquery.min.js');?>"></script>
	<script src="<?=base_url('resources/dashboard/source/assets/plugins/popper/popper.js');?>"></script>
	<script src="<?=base_url('resources/dashboard/source/assets/plugins/jquery-blockui/jquery.blockui.min.js');?>"></script>
	<script src="<?=base_url('resources/dashboard/source/assets/plugins/jquery-slimscroll/jquery.slimscroll.js');?>"></script>
	<!-- bootstrap -->
	<script src="<?=base_url('resources/dashboard/source/assets/plugins/bootstrap/js/bootstrap.min.js');?>"></script>
	<script src="<?=base_url('resources/dashboard/source/assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js');?>"></script>
	<!-- data tables -->
	<script src="<?=base_url('resources/dashboard/source/assets/plugins/datatables/jquery.dataTables.min.js');?>"></script>
	<script src="<?=base_url('resources/dashboard/source/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js');?>"></script>
	<script src="<?=base_url('resources/dashboard/source/assets/js/pages/table/table_data.js');?>"></script>
	<!-- Common js-->
	<script src="<?=base_url('resources/dashboard/source/assets/js/app.js');?>"></script>
	<script src="<?=base_url('resources/dashboard/source/assets/js/layout.js');?>"></script>
	<script src="<?=base_url('resources/dashboard/source/assets/js/theme-color.js');?>"></script>
	<!-- Material -->
	<script src="<?=base_url('resources/dashboard/source/assets/plugins/material/material.min.js');?>"></script>
	<!-- end js include path -->
</body>

</html>
