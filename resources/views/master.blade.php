@include('partials.head')

@include('partials.header')
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md sidemenu-container-reversed header-white white-sidebar-color logo-indigo">

	
	<!-- end color quick setting -->
	<!-- start page container -->
	<div class="page-container">
		<!-- start sidebar menu -->
		<div class="sidebar-container">
			<div class="sidemenu-container navbar-collapse collapse fixed-menu">
				<div id="remove-scroll" class="left-sidemenu">
					<ul class="sidemenu  page-header-fixed" data-keep-expanded="false" data-auto-scroll="	true" data-slide-speed="200"
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
									
									<a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline"> Online</span></a>

								</div>
									<div class="pull-left info">
									
								{{ auth('admin')->user()->name }}
									
								</div>
							</div>
						</li>
						<li class="nav-item start active open">
							<a href="{{ URL::to('/admin/home')}}" class="nav-link nav-toggle">
								<i class="material-icons">dashboard</i>
								<span class="title">Dashboard</span>
								
							</a>
							
						</li>
						<li class="nav-item">
							<a href="event.html" class="nav-link nav-toggle"> <i class="material-icons">event</i>
								<span class="title">Event Management</span>
							</a>
						</li>

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
									<a href="{{ URL::to('/teacher/create') }}" class="nav-link "> <span class="title">Add New Teacher</span>
									</a>
								</li>
								
								<li class="nav-item">
									<a href="edit_professor.html" class="nav-link "> <span class="title">Edit Professor</span>
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
									<a href="{{ URL::to('/student/all') }}" class="nav-link "> <span class="title">All Students</span>
									</a>
								</li>
								<li class="nav-item">
									<a href="{{ URL::to('/student/create') }}" class="nav-link "> <span class="title">Add Student</span>
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
								<span class="title">Class</span> <span class="arrow"></span>
								<span class="label label-rouded label-menu label-success">new</span>
							</a>
							<ul class="sub-menu">
								<li class="nav-item">
									<a href="all_courses.html" class="nav-link "> <span class="title">All Class</span>
									</a>
								</li>
								<li class="nav-item">
									<a href="add_course.html" class="nav-link "> <span class="title">One</span>
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
				<div class="row">
					<div class="col-sm-8">
						<div class="card card-box">
							<div class="card-head">
								<header>University Survey</header>
								<div class="tools">
									<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
									<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
									<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
								</div>
							</div>
							<div class="card-body no-padding height-9">
								<div class="row">
									<canvas id="canvas1"></canvas>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card card-box">
							<div class="card-head">
								<header>University Survey</header>
								<div class="tools">
									<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
									<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
									<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
								</div>
							</div>
							<div class="card-body no-padding height-9">
								<div class="row">
									<canvas id="chartjs_pie"></canvas>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Chart end -->
				<!-- start course list -->
				
				<!-- End course list -->
				
				<!-- start new student list -->
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="card  card-box">
							<div class="card-head">
								<header>New Student List</header>
								<div class="tools">
									<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
									<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
									<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
								</div>
							</div>
							<div class="card-body ">
								<div class="table-wrap">
									<div class="table-responsive">
										<table class="table display product-overview mb-30" id="support_table">
											<thead>
												<tr>
													<th>No</th>
													<th>Name</th>
													<th>Assigned Professor</th>
													<th>Date Of Admit</th>
													<th>Fees</th>
													<th>Branch</th>
													<th>Edit</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>Jens Brincker</td>
													<td>Kenny Josh</td>
													<td>27/05/2016</td>
													<td>
														<span class="label label-sm label-success">paid</span>
													</td>
													<td>Mechanical</td>
													<td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit"><i class="fa fa-check"></i></a>
														<a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
												</tr>
												<tr>
													<td>2</td>
													<td>Mark Hay</td>
													<td> Mark</td>
													<td>26/05/2017</td>
													<td>
														<span class="label label-sm label-warning">unpaid </span>
													</td>
													<td>Science</td>
													<td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit"><i class="fa fa-check"></i></a>
														<a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
												</tr>
												<tr>
													<td>3</td>
													<td>Anthony Davie</td>
													<td>Cinnabar</td>
													<td>21/05/2016</td>
													<td>
														<span class="label label-sm label-success ">paid</span>
													</td>
													<td>Commerce</td>
													<td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit"><i class="fa fa-check"></i></a>
														<a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
												</tr>
												<tr>
													<td>4</td>
													<td>David Perry</td>
													<td>Felix </td>
													<td>20/04/2016</td>
													<td>
														<span class="label label-sm label-danger">unpaid</span>
													</td>
													<td>Mechanical</td>
													<td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit"><i class="fa fa-check"></i></a>
														<a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
												</tr>
												<tr>
													<td>5</td>
													<td>Anthony Davie</td>
													<td>Beryl</td>
													<td>24/05/2016</td>
													<td>
														<span class="label label-sm label-success ">paid</span>
													</td>
													<td>M.B.A.</td>
													<td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit"><i class="fa fa-check"></i></a>
														<a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
												</tr>
												<tr>
													<td>6</td>
													<td>Alan Gilchrist</td>
													<td>Joshep</td>
													<td>22/05/2016</td>
													<td>
														<span class="label label-sm label-warning ">unpaid</span>
													</td>
													<td>Science</td>
													<td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit"><i class="fa fa-check"></i></a>
														<a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
												</tr>
												<tr>
													<td>7</td>
													<td>Mark Hay</td>
													<td>Jayesh</td>
													<td>18/06/2016</td>
													<td>
														<span class="label label-sm label-success ">paid</span>
													</td>
													<td>Commerce</td>
													<td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit"><i class="fa fa-check"></i></a>
														<a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
												</tr>
												<tr>
													<td>8</td>
													<td>Sue Woodger</td>
													<td>Sharma</td>
													<td>17/05/2016</td>
													<td>
														<span class="label label-sm label-danger">unpaid</span>
													</td>
													<td>Mechanical</td>
													<td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit"><i class="fa fa-check"></i></a>
														<a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- end new student list -->
			</div>
		</div>
		<!-- end page content -->
		<!-- start chat sidebar -->
		
		<!-- end chat sidebar -->
	</div>
	<!-- end page container -->
	

	@include('partials.footer')