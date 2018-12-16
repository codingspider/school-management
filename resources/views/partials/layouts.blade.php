

@include('partials.header')
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md sidemenu-container-reversed header-white white-sidebar-color logo-indigo">

	
		<!-- end color quick setting -->
		<!-- start page container -->
			<!-- start sidebar menu -->
			<div class="sidebar-container">
				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
					<div id="remove-scroll" class="left-sidemenu">
						<ul class="sidemenu  page-header-fixed" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200"
						 style="padding-top: 20px">
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
										<p> {{ auth('admin')->user()->name }} </p>
										<a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline"> Online</span></a>
									</div>

								</div>
							</li>
							<li class="nav-item start active open">
								<a href="{{ URL::to('/admin/home')}}" class="nav-link nav-toggle">
									<i class="material-icons">dashboard</i>
									<span class="title">Dashboard</span>
									<span class="selected"><a class="dropdown-item" href="/admin/logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form></span>
									
								</a>
								
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">person</i>
									<span class="title">Routine</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
									<a href="{{ URL::to('/routine/view') }}" class="nav-link "> <span class="title">View Routine</span>
									</a>
								</li>
									<li class="nav-item">
										<a href="{{ URL::to('/routine/create') }}" class="nav-link "> <span class="title">Add Routine</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="{{ URL::to('/semester/create') }}" class="nav-link "> <span class="title">Add Semister</span>
										</a>
									</li>
										<li class="nav-item">
										<a href="{{ URL::to('/subject/create') }}" class="nav-link "> <span class="title">Add Subject</span>
										</a>
									</li>
									
									<li class="nav-item">
										<a href="{{ URL::to('/teacher/create')}}" class="nav-link "> <span class="title">Add New Teacher</span>
										</a>
									</li>
									
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">person</i>
									<span class="title">Professors</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="all_professors.html" class="nav-link "> <span class="title">All Professors</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_professor.html" class="nav-link "> <span class="title">Add Professor</span>
										</a>
									</li>
									
									<li class="nav-item">
										<a href="edit_professor.html" class="nav-link "> <span class="title">Edit Professor</span>
										</a>
									</li>
									
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"><i class="material-icons">group</i>
									<span class="title">Students</span><span class="arrow"></span></a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="{{ URL::to('/student/all') }}" class="nav-link "> <span class="title">All Students</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="{{ URL::to('/student/create') }}" class="nav-link "> <span class="title">Add Student</span>
										</a>
									</li>
								
									<li class="nav-item">
										<a href="edit_student.html" class="nav-link "> <span class="title">Edit Student</span>
										</a>
									</li>
									
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">school</i>
									<span class="title">Class</span> <span class="arrow"></span>
									<span class="label label-rouded label-menu label-success">new</span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="all_courses.html" class="nav-link "> <span class="title">All Class</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="{{ URL::to('/class/one')}}" class="nav-link "> <span class="title">One</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_course_bootstrap.html" class="nav-link "> <span class="title">Two</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="edit_course.html" class="nav-link "> <span class="title">Three</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="course_details.html" class="nav-link "> <span class="title">Four</span>
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
								<div class="page-title">Dashboard</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Dashboard</li>
							</ol>
						</div>
					</div>
					<!-- start widget -->
					<div class="state-overview">
						<div class="row">
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-b-green">
									<span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
									<div class="info-box-content">
										<span class="info-box-text">Total Students</span>
										<span class="info-box-number">450</span>
										<div class="progress">
											<div class="progress-bar" style="width: 45%"></div>
										</div>
										<span class="progress-description">
											45% Increase in 28 Days
										</span>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-b-yellow">
									<span class="info-box-icon push-bottom"><i class="material-icons">person</i></span>
									<div class="info-box-content">
										<span class="info-box-text">New Students</span>
										<span class="info-box-number">155</span>
										<div class="progress">
											<div class="progress-bar" style="width: 40%"></div>
										</div>
										<span class="progress-description">
											40% Increase in 28 Days
										</span>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-b-blue">
									<span class="info-box-icon push-bottom"><i class="material-icons">school</i></span>
									<div class="info-box-content">
										<span class="info-box-text">Total Course</span>
										<span class="info-box-number">52</span>
										<div class="progress">
											<div class="progress-bar" style="width: 85%"></div>
										</div>
										<span class="progress-description">
											85% Increase in 28 Days
										</span>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-b-pink">
									<span class="info-box-icon push-bottom"><i class="material-icons">monetization_on</i></span>
									<div class="info-box-content">
										<span class="info-box-text">Fees Collection</span>
										<span class="info-box-number">13,921</span><span>$</span>
										<div class="progress">
											<div class="progress-bar" style="width: 50%"></div>
										</div>
										<span class="progress-description">
											50% Increase in 28 Days
										</span>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
						</div>
					</div>
					<!-- end widget -->
					<!-- chart start -->
					
					@yield('body')



					<!-- end new student list -->
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
												<div class="media-heading-sub">Anaesthetics</div>
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
		

		@include('partials.footer')