<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Splasher I Fast build Admin dashboard for any platform</title>
		<meta name="description" content="Splasher is a Dashboard & Admin Site Responsive Template by hencework." />
		<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Splasher Admin, Splasheradmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
		<meta name="author" content="hencework"/>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		
		<!-- Bootstrap Colorpicker CSS -->
		<link href="../vendors/bower_components/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet" type="text/css"/>
		
		<!-- select2 CSS -->
		<link href="../vendors/bower_components/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css"/>
		
		<!-- switchery CSS -->
		<link href="../vendors/bower_components/switchery/dist/switchery.min.css" rel="stylesheet" type="text/css"/>
		
		<!-- bootstrap-select CSS -->
		<link href="../vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>
		
		<!-- bootstrap-tagsinput CSS -->
		<link href="../vendors/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" type="text/css"/>
		
		<!-- bootstrap-touchspin CSS -->
		<link href="../vendors/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" type="text/css"/>
		
		<!-- multi-select CSS -->
		<link href="../vendors/bower_components/multiselect/css/multi-select.css" rel="stylesheet" type="text/css"/>
		
		<!-- Bootstrap Switches CSS -->
		<link href="../vendors/bower_components/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
		
		<!-- Bootstrap Datetimepicker CSS -->
		<link href="../vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css"/>
		 
		
		
		<!-- Custom CSS -->
		<link href="dist/css/style.css" rel="stylesheet" type="text/css">
	</head>
	
	<body>
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->
	
		<div class="wrapper theme-2-active navbar-top-light horizontal-nav">
		<!-- Top Menu Items -->
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<div class="nav-wrap">
				<div class="mobile-only-brand pull-left">
					<div class="nav-header pull-left">
						<div class="logo-wrap">
							<a href="index.html">
								<img class="brand-img" src="../img/logo.png" alt="brand"/>
								<span class="brand-text"><img  src="../img/brand.png" alt="brand"/></span>
							</a>
						</div>
					</div>	
					<a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>
					<a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
					<a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>
					<form id="search_form" role="search" class="top-nav-search collapse pull-left">
						<div class="input-group">
							<input type="text" name="example-input1-group2" class="form-control" placeholder="Search">
							<span class="input-group-btn">
							<button type="button" class="btn  btn-default"  data-target="#search_form" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="zmdi zmdi-search"></i></button>
							</span>
						</div>
					</form>
				</div>
				<div id="mobile_only_nav" class="mobile-only-nav pull-right">
					<ul class="nav navbar-right top-nav pull-right">
						
						
						<li class="dropdown alert-drp">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-notifications top-nav-icon"></i><span class="top-nav-icon-badge"></span></a>
							<ul  class="dropdown-menu alert-dropdown" data-dropdown-in="bounceIn" data-dropdown-out="bounceOut">
								<li>
									<div class="notification-box-head-wrap">
										<span class="notification-box-head pull-left inline-block">notifications</span>
										<a class="txt-danger pull-right clear-notifications inline-block" href="javascript:void(0)"> clear all </a>
										<div class="clearfix"></div>
										<hr class="light-grey-hr ma-0"/>
									</div>
								</li>
								<li>
									<div class="streamline message-nicescroll-bar">
										<div class="sl-item">
											<a href="javascript:void(0)">
												<div class="icon bg-green">
													<i class="ti-briefcase "></i>
												</div>
												<div class="sl-content">
													<span class="inline-block capitalize-font  pull-left truncate head-notifications">
													New subscription created</span>
													<span class="inline-block font-11  pull-right notifications-time">2pm</span>
													<div class="clearfix"></div>
													<p class="truncate">Your customer subscribed for the basic plan. The customer will pay $25 per month.</p>
												</div>
											</a>	
										</div>
										<hr class="light-grey-hr ma-0"/>
										<div class="sl-item">
											<a href="javascript:void(0)">
												<div class="icon bg-yellow">
													<i class="zmdi zmdi-trending-down"></i>
												</div>
												<div class="sl-content">
													<span class="inline-block capitalize-font  pull-left truncate head-notifications txt-warning">Server #2 not responding</span>
													<span class="inline-block font-11 pull-right notifications-time">1pm</span>
													<div class="clearfix"></div>
													<p class="truncate">Some technical error occurred needs to be resolved.</p>
												</div>
											</a>	
										</div>
										<hr class="light-grey-hr ma-0"/>
										<div class="sl-item">
											<a href="javascript:void(0)">
												<div class="icon bg-blue">
													<i class="zmdi zmdi-email"></i>
												</div>
												<div class="sl-content">
													<span class="inline-block capitalize-font  pull-left truncate head-notifications">2 new messages</span>
													<span class="inline-block font-11  pull-right notifications-time">4pm</span>
													<div class="clearfix"></div>
													<p class="truncate"> The last payment for your G Suite Basic subscription failed.</p>
												</div>
											</a>	
										</div>
										<hr class="light-grey-hr ma-0"/>
										<div class="sl-item">
											<a href="javascript:void(0)">
												<div class="sl-avatar">
													<img class="img-responsive" src="../img/avatar.jpg" alt="avatar"/>
												</div>
												<div class="sl-content">
													<span class="inline-block capitalize-font  pull-left truncate head-notifications">Sandy Doe</span>
													<span class="inline-block font-11  pull-right notifications-time">1pm</span>
													<div class="clearfix"></div>
													<p class="truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
												</div>
											</a>	
										</div>
										<hr class="light-grey-hr ma-0"/>
										<div class="sl-item">
											<a href="javascript:void(0)">
												<div class="icon bg-red">
													<i class="zmdi zmdi-storage"></i>
												</div>
												<div class="sl-content">
													<span class="inline-block capitalize-font  pull-left truncate head-notifications txt-danger">99% server space occupied.</span>
													<span class="inline-block font-11  pull-right notifications-time">1pm</span>
													<div class="clearfix"></div>
													<p class="truncate">consectetur, adipisci velit.</p>
												</div>
											</a>	
										</div>
									</div>
								</li>
								<li>
									<div class="notification-box-bottom-wrap">
										<hr class="light-grey-hr ma-0"/>
										<a class="block text-center read-all" href="javascript:void(0)"> read all </a>
										<div class="clearfix"></div>
									</div>
								</li>
							</ul>
						</li>
						<li>
							<a id="open_right_sidebar" href="#"><i class="zmdi zmdi-settings  top-nav-icon"></i></a>
						</li>
						<li class="dropdown auth-drp">
							<a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="../img/user1.png" alt="user_auth" class="user-auth-img img-circle"/><span class="user-online-status"></span><span class="user-auth-name inline-block">micheal hogan <span class="ti-angle-down"></span></span></a>
							<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
								<li>
									<a href="profile.html"><i class="zmdi zmdi-account"></i><span>Profile</span></a>
								</li>
								<li>
									<a href="#"><i class="zmdi zmdi-card"></i><span>my balance</span></a>
								</li>
								<li>
									<a href="inbox.html"><i class="zmdi zmdi-email"></i><span>Inbox</span></a>
								</li>
								<li>
									<a href="#"><i class="zmdi zmdi-settings"></i><span>Settings</span></a>
								</li>
								<li class="divider"></li>
								<li class="sub-menu show-on-hover">
									<a href="#" class="dropdown-toggle pr-0 level-2-drp"><i class="zmdi zmdi-check text-success"></i> available</a>
									<ul class="dropdown-menu open-left-side">
										<li>
											<a href="#"><i class="zmdi zmdi-check text-success"></i><span>available</span></a>
										</li>
										<li>
											<a href="#"><i class="zmdi zmdi-circle-o text-warning"></i><span>busy</span></a>
										</li>
										<li>
											<a href="#"><i class="zmdi zmdi-minus-circle-outline text-danger"></i><span>offline</span></a>
										</li>
									</ul>	
								</li>
								<li class="divider"></li>
								<li>
									<a href="#"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
								</li>
							</ul>
						</li>
					</ul>
				</div>	
				</div>
			</nav>
			<!-- /Top Menu Items -->
			
			<!-- Left Sidebar Menu -->
			<div class="fixed-sidebar-left">
				<ul class="nav navbar-nav side-nav nicescroll-bar">
					<li class="navigation-header">
						<span>Main</span> 
						<hr/>
					</li>
					<li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard_dr"><div class="pull-left"><i class="ti-dashboard mr-20"></i><span class="right-nav-text">Dashboard</span></div><div class="pull-right"><i class="ti-angle-down"></i></div><div class="clearfix"></div></a>
						<ul id="dashboard_dr" class="collapse collapse-level-1">
							<li>
								<a href="index.html">Analytical</a>
							</li>
							<li>
								<a href="index2.html"><div class="pull-left"><span>Cryptocurrency</span></div><div class="pull-right"><span class="label label-success">Hot</span></div><div class="clearfix"></div></a>
							</li>
							<li>
								<a href="profile.html">Profile</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#ecom_dr"><div class="pull-left"><i class="ti-shopping-cart  mr-20"></i><span class="right-nav-text">E-Commerce</span></div><div class="pull-right"><i class="ti-angle-down"></i></div><div class="clearfix"></div></a>
						<ul id="ecom_dr" class="collapse collapse-level-1">
							<li>
								<a href="e-commerce.html">Dashboard</a>
							</li>
							<li>
								<a href="product.html">Products</a>
							</li>
							<li>
								<a href="product-detail.html">Product Detail</a>
							</li>
							<li>
								<a href="add-products.html">Add Product</a>
							</li>
							<li>
								<a href="product-orders.html">Orders</a>
							</li>
							<li>
								<a href="product-cart.html">Cart</a>
							</li>
							<li>
								<a href="product-checkout.html">Checkout</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#app_dr"><div class="pull-left"><i class="ti-image mr-20"></i><span class="right-nav-text">Apps </span></div><div class="pull-right"><i class="ti-angle-down"></i></div><div class="clearfix"></div></a>
						<ul id="app_dr" class="collapse collapse-level-1">
							<li>
								<a href="chats.html">chats</a>
							</li>
							<li>
								<a href="calendar.html">calendar</a>
							</li>
							<li>
								<a href="weather.html">weather</a>
							</li>
							<li>
								<a href="javascript:void(0);" data-toggle="collapse" data-target="#email_dr">Email<div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
								<ul id="email_dr" class="collapse collapse-level-2">
									<li>
										<a href="inbox.html">inbox</a>
									</li>
									<li>
										<a href="inbox-detail.html">detail email</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="javascript:void(0);" data-toggle="collapse" data-target="#contact_dr">Contacts<div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
								<ul id="contact_dr" class="collapse collapse-level-2">
									<li>
										<a href="contact-list.html">list</a>
									</li>
									<li>
										<a href="contact-card.html">cards</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="file-manager.html">File Manager</a>
							</li>
							<li>
								<a href="todo-tasklist.html">To Do/Tasklist</a>
							</li>
						</ul>
					</li>
					<li class="navigation-header mt-20">
						<span>component</span> 
						<hr/>
					</li>
					<li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#ui_dr"><div class="pull-left"><i class="ti-pencil-alt  mr-20"></i><span class="right-nav-text">UI Elements</span></div><div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
						<ul id="ui_dr" class="collapse collapse-level-1 two-col-list">
							<li>
								<a href="panels-wells.html">Panels & Wells</a>
							</li>
							<li>
								<a href="modals.html">Modals</a>
							</li>
							<li>
								<a href="sweetalert.html">Sweet Alerts</a>
							</li>
							<li>
								<a href="notifications.html">notifications</a>
							</li>
							<li>
								<a href="typography.html">Typography</a>
							</li>
							<li>
								<a href="buttons.html">Buttons</a>
							</li>
							<li>
								<a href="accordion-toggle.html">Accordion / Toggles</a>
							</li>
							<li>
								<a href="tabs.html">Tabs</a>
							</li>
							<li>
								<a href="progressbars.html">Progress bars</a>
							</li>
							<li>
								<a href="skills-counter.html">Skills & Counters</a>
							</li>
							<li>
								<a href="pricing.html">Pricing Tables</a>
							</li>
							<li>
								<a href="nestable.html">Nestables</a>
							</li>
							<li>
								<a href="dorpdown.html">Dropdowns</a>
							</li>
							<li>
								<a href="bootstrap-treeview.html">Tree View</a>
							</li>
							<li>
								<a href="carousel.html">Carousel</a>
							</li>
							<li>
								<a href="range-slider.html">Range Slider</a>
							</li>
							<li>
								<a href="grid-styles.html">Grid</a>
							</li>
							<li>
								<a href="bootstrap-ui.html">Bootstrap UI</a>
							</li>
						</ul>
					</li>
					<li>
						<a class="active" href="javascript:void(0);" data-toggle="collapse" data-target="#comp_dr"><div class="pull-left"><i class="ti-check-box  mr-20"></i><span class="right-nav-text">Components</span></div><div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
						<ul id="comp_dr" class="collapse collapse-level-1">
							<li>
								<a class="active-page" href="javascript:void(0);" data-toggle="collapse" data-target="#form_dr"><div class="pull-left"><span class="right-nav-text">Forms</span></div><div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
								<ul id="form_dr" class="collapse collapse-level-2 two-col-list dr-change-pos">
									<li>
										<a href="form-element.html">Basic Forms</a>
									</li>
									<li>
										<a href="form-layout.html">form Layout</a>
									</li>
									<li>
										<a class="active-page" href="form-advanced.html">Form Advanced</a>
									</li>
									<li>
										<a href="form-mask.html">Form Mask</a>
									</li>
									<li>
										<a href="form-picker.html">Form Picker</a>
									</li>
									<li>
										<a href="form-validation.html">form Validation</a>
									</li>
									<li>
										<a href="form-wizard.html">Form Wizard</a>
									</li>
									<li>
										<a href="form-x-editable.html">X-Editable</a>
									</li>
									<li>
										<a href="cropperjs.html">Cropperjs</a>
									</li>
									<li>
										<a href="form-file-upload.html">File Upload</a>
									</li>
									<li>
										<a href="dropzone.html">Dropzone</a>
									</li>
									<li>
										<a href="bootstrap-wysihtml5.html">Bootstrap Wysihtml5</a>
									</li>
									<li>
										<a href="tinymce-wysihtml5.html">Tinymce Wysihtml5</a>
									</li>
									<li>
										<a href="summernote-wysihtml5.html">summernote</a>
									</li>
									<li>
										<a href="typeahead-js.html">typeahead</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="javascript:void(0);" data-toggle="collapse" data-target="#chart_dr"><div class="pull-left"><span class="right-nav-text">Charts </span></div><div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
									<ul id="chart_dr" class="collapse collapse-level-2 dr-change-pos">
										<li>
											<a href="flot-chart.html">Flot Chart</a>
										</li>
										<li>
											<a href="echart.html">Echart Chart</a>
										</li>
										<li>
											<a href="morris-chart.html">Morris Chart</a>
										</li>
										<li>
											<a href="chart.js.html">chartjs</a>
										</li>
										<li>
											<a href="chartist.html">chartist</a>
										</li>
										<li>
											<a href="easy-pie-chart.html">Easy Pie Chart</a>
										</li>
										<li>
											<a href="sparkline.html">Sparkline</a>
										</li>
										<li>
											<a href="peity-chart.html">Peity Chart</a>
										</li>
									</ul>
							</li>
							<li>
								<a href="javascript:void(0);" data-toggle="collapse" data-target="#table_dr"><div class="pull-left"><span class="right-nav-text">Tables</span></div><div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
								<ul id="table_dr" class="collapse collapse-level-2 dr-change-pos">
									<li>
										<a href="basic-table.html">Basic Table</a>
									</li>
									<li>
										<a href="bootstrap-table.html">Bootstrap Table</a>
									</li>
									<li>
										<a href="data-table.html">Data Table</a>
									</li>
									<li>
										<a href="export-table.html">Export Table</a>
									</li>
									<li>
										<a href="responsive-data-table.html">RSPV DataTable</a>
									</li>
									<li>
										<a href="responsive-table.html">Responsive Table</a>
									</li>
									<li>
										<a href="editable-table.html">Editable Table</a>
									</li>
									<li>
										<a href="foo-table.html">Foo Table</a>
									</li>
									<li>
										<a href="jsgrid-table.html">Jsgrid Table</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="javascript:void(0);" data-toggle="collapse" data-target="#icon_dr"><div class="pull-left"><span class="right-nav-text">Icons</span></div><div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
								<ul id="icon_dr" class="collapse collapse-level-2 dr-change-pos">
									<li>
										<a href="fontawesome.html">Fontawesome</a>
									</li>
									<li>
										<a href="themify.html">Themify</a>
									</li>
									<li>
										<a href="linea-icon.html">Linea</a>
									</li>
									<li>
										<a href="simple-line-icons.html">Simple Line</a>
									</li>
									<li>
										<a href="pe-icon-7.html">Pe-icon-7</a>
									</li>
									<li>
										<a href="glyphicons.html">Glyphicons</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="javascript:void(0);" data-toggle="collapse" data-target="#maps_dr"><div class="pull-left"><span class="right-nav-text">maps</span></div><div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
								<ul id="maps_dr" class="collapse collapse-level-2 dr-change-pos">
									<li>
										<a href="vector-map.html">Vector Map</a>
									</li>
									<li>
										<a href="google-map.html">Google Map</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="navigation-header mt-20">
						<span>featured</span> 
						<hr/>
					</li>
					<li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#pages_dr"><div class="pull-left"><i class="ti-shield mr-20"></i><span class="right-nav-text">Pages</span></div><div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
						<ul id="pages_dr" class="collapse collapse-level-1">
							<li>
								<a href="blank.html">Blank Page</a>
							</li>
							<li>
								<a href="javascript:void(0);" data-toggle="collapse" data-target="#auth_dr">Authantication pages<div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
								<ul id="auth_dr" class="collapse collapse-level-2 dr-change-pos">
									<li>
										<a href="login.html">Login</a>
									</li>
									<li>
										<a href="signup.html">Register</a>
									</li>
									<li>
										<a href="forgot-password.html">Recover Password</a>
									</li>
									<li>
										<a href="reset-password.html">reset Password</a>
									</li>
									<li>
										<a href="locked.html">Lock Screen</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="javascript:void(0);" data-toggle="collapse" data-target="#invoice_dr">Invoice<div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
								<ul id="invoice_dr" class="collapse collapse-level-2 dr-change-pos">
									<li>
										<a href="invoice.html">Invoice</a>
									</li>
									<li>
										<a href="invoice-archive.html">Invoice Archive</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="javascript:void(0);" data-toggle="collapse" data-target="#error_dr">error pages<div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
								<ul id="error_dr" class="collapse collapse-level-2 dr-change-pos">
									<li>
										<a href="404.html">Error 404</a>
									</li>
									<li>
										<a href="500.html">Error 500</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="gallery.html">Gallery</a>
							</li>
							<li>
								<a href="timeline.html">Timeline</a>
							</li>
							<li>
								<a href="faq.html">FAQ</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="documentation.html"><div class="pull-left"><i class="ti-book mr-20"></i><span class="right-nav-text">documentation</span></div><div class="clearfix"></div></a>
					</li>
				</ul>
			</div>
			<!-- /Left Sidebar Menu -->
			
			<!-- Right Sidebar Menu -->
			<div class="fixed-sidebar-right">
				<ul class="right-sidebar">
					<li>
						<div  class="tab-struct custom-tab-1">
							<ul role="tablist" class="nav nav-tabs" id="right_sidebar_tab">
								<li class="active" role="presentation"><a aria-expanded="true"  data-toggle="tab" role="tab" id="chat_tab_btn" href="#chat_tab">chat</a></li>
								<li role="presentation" class=""><a  data-toggle="tab" id="messages_tab_btn" role="tab" href="#messages_tab" aria-expanded="false">messages</a></li>
								<li role="presentation" class=""><a  data-toggle="tab" id="todo_tab_btn" role="tab" href="#todo_tab" aria-expanded="false">todo</a></li>
							</ul>
							<div class="tab-content" id="right_sidebar_content">
								<div  id="chat_tab" class="tab-pane fade active in" role="tabpanel">
									<div class="chat-cmplt-wrap">
										<div class="chat-box-wrap">
											<div class="add-friend">
												<a href="javascript:void(0)" class="inline-block txt-grey">
													<i class="zmdi zmdi-more"></i>
												</a>	
												<span class="inline-block txt-dark">users</span>
												<a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-plus"></i></a>
												<div class="clearfix"></div>
											</div>
											<form role="search" class="chat-search pl-15 pr-15 pb-15">
												<div class="input-group">
													<input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="Search">
													<span class="input-group-btn">
													<button type="button" class="btn  btn-default"><i class="zmdi zmdi-search"></i></button>
													</span>
												</div>
											</form>
											<div id="chat_list_scroll">
												<div class="nicescroll-bar">
													<ul class="chat-list-wrap">
														<li class="chat-list">
															<div class="chat-body">
																<a href="javascript:void(0)">
																	<div class="chat-data">
																		<img class="user-img img-circle"  src="../img/user.png" alt="user"/>
																		<div class="user-data">
																			<span class="name block capitalize-font">Clay Masse</span>
																			<span class="time block truncate txt-grey">No one saves us but ourselves.</span>
																		</div>
																		<div class="status away"></div>
																		<div class="clearfix"></div>
																	</div>
																</a>
																<a href="javascript:void(0)">
																	<div class="chat-data">
																		<img class="user-img img-circle"  src="../img/user1.png" alt="user"/>
																		<div class="user-data">
																			<span class="name block capitalize-font">Evie Ono</span>
																			<span class="time block truncate txt-grey">Unity is strength</span>
																		</div>
																		<div class="status offline"></div>
																		<div class="clearfix"></div>
																	</div>
																</a>
																<a href="javascript:void(0)">
																	<div class="chat-data">
																		<img class="user-img img-circle"  src="../img/user2.png" alt="user"/>
																		<div class="user-data">
																			<span class="name block capitalize-font">Madalyn Rascon</span>
																			<span class="time block truncate txt-grey">Respect yourself if you would have others respect you.</span>
																		</div>
																		<div class="status online"></div>
																		<div class="clearfix"></div>
																	</div>
																</a>
																<a href="javascript:void(0)">
																	<div class="chat-data">
																		<img class="user-img img-circle"  src="../img/user3.png" alt="user"/>
																		<div class="user-data">
																			<span class="name block capitalize-font">Mitsuko Heid</span>
																			<span class="time block truncate txt-grey">I’m thankful.</span>
																		</div>
																		<div class="status online"></div>
																		<div class="clearfix"></div>
																	</div>
																</a>
																<a href="javascript:void(0)">
																	<div class="chat-data">
																		<img class="user-img img-circle"  src="../img/user.png" alt="user"/>
																		<div class="user-data">
																			<span class="name block capitalize-font">Ezequiel Merideth</span>
																			<span class="time block truncate txt-grey">Patience is bitter.</span>
																		</div>
																		<div class="status offline"></div>
																		<div class="clearfix"></div>
																	</div>
																</a>
																<a href="javascript:void(0)">
																	<div class="chat-data">
																		<img class="user-img img-circle"  src="../img/user1.png" alt="user"/>
																		<div class="user-data">
																			<span class="name block capitalize-font">Jonnie Metoyer</span>
																			<span class="time block truncate txt-grey">Genius is eternal patience.</span>
																		</div>
																		<div class="status online"></div>
																		<div class="clearfix"></div>
																	</div>
																</a>
																<a href="javascript:void(0)">
																	<div class="chat-data">
																		<img class="user-img img-circle"  src="../img/user2.png" alt="user"/>
																		<div class="user-data">
																			<span class="name block capitalize-font">Angelic Lauver</span>
																			<span class="time block truncate txt-grey">Every burden is a blessing.</span>
																		</div>
																		<div class="status away"></div>
																		<div class="clearfix"></div>
																	</div>
																</a>
																<a href="javascript:void(0)">
																	<div class="chat-data">
																		<img class="user-img img-circle"  src="../img/user3.png" alt="user"/>
																		<div class="user-data">
																			<span class="name block capitalize-font">Priscila Shy</span>
																			<span class="time block truncate txt-grey">Wise to resolve, and patient to perform.</span>
																		</div>
																		<div class="status online"></div>
																		<div class="clearfix"></div>
																	</div>
																</a>
																<a href="javascript:void(0)">
																	<div class="chat-data">
																		<img class="user-img img-circle"  src="../img/user4.png" alt="user"/>
																		<div class="user-data">
																			<span class="name block capitalize-font">Linda Stack</span>
																			<span class="time block truncate txt-grey">Our patience will achieve more than our force.</span>
																		</div>
																		<div class="status away"></div>
																		<div class="clearfix"></div>
																	</div>
																</a>
															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="recent-chat-box-wrap">
											<div class="recent-chat-wrap">
												<div class="panel-heading ma-0">
													<div class="goto-back">
														<a  id="goto_back" href="javascript:void(0)" class="inline-block txt-grey">
															<i class="zmdi zmdi-chevron-left"></i>
														</a>	
														<span class="inline-block txt-dark">ryan</span>
														<a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-more"></i></a>
														<div class="clearfix"></div>
													</div>
												</div>
												<div class="panel-wrapper collapse in">
													<div class="panel-body pa-0">
														<div class="chat-content">
															<ul class="nicescroll-bar pt-20">
																<li class="friend">
																	<div class="friend-msg-wrap">
																		<img class="user-img img-circle block pull-left"  src="../img/user.png" alt="user"/>
																		<div class="msg pull-left">
																			<p>Hello Jason, how are you, it's been a long time since we last met?</p>
																			<div class="msg-per-detail text-right">
																				<span class="msg-time txt-light">2:30 PM</span>
																			</div>
																		</div>
																		<div class="clearfix"></div>
																	</div>	
																</li>
																<li class="self mb-10">
																	<div class="self-msg-wrap">
																		<div class="msg block pull-right"> Oh, hi Sarah I'm have got a new job now and is going great.
																			<div class="msg-per-detail text-right">
																				<span class="msg-time txt-light">2:31 pm</span>
																			</div>
																		</div>
																		<div class="clearfix"></div>
																	</div>	
																</li>
																<li class="self">
																	<div class="self-msg-wrap">
																		<div class="msg block pull-right">  How about you?
																			<div class="msg-per-detail text-right">
																				<span class="msg-time txt-light">2:31 pm</span>
																			</div>
																		</div>
																		<div class="clearfix"></div>
																	</div>	
																</li>
																<li class="friend">
																	<div class="friend-msg-wrap">
																		<img class="user-img img-circle block pull-left"  src="../img/user.png" alt="user"/>
																		<div class="msg pull-left"> 
																			<p>Not too bad.</p>
																			<div class="msg-per-detail  text-right">
																				<span class="msg-time txt-light">2:35 pm</span>
																			</div>
																		</div>
																		<div class="clearfix"></div>
																	</div>	
																</li>
															</ul>
														</div>
														<div class="input-group">
															<input type="text" id="input_msg_send" name="send-msg" class="input-msg-send form-control" placeholder="Type something">
															<div class="input-group-btn emojis">
																<div class="dropup">
																	<button type="button" class="btn  btn-default  dropdown-toggle" data-toggle="dropdown" ><i class="zmdi zmdi-mood"></i></button>
																	<ul class="dropdown-menu dropdown-menu-right">
																		<li><a href="javascript:void(0)">Action</a></li>
																		<li><a href="javascript:void(0)">Another action</a></li>
																		<li class="divider"></li>
																		<li><a href="javascript:void(0)">Separated link</a></li>
																	</ul>
																</div>
															</div>
															<div class="input-group-btn attachment">
																<div class="fileupload btn  btn-default"><i class="zmdi zmdi-attachment-alt"></i>
																	<input type="file" class="upload">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
									
								<div id="messages_tab" class="tab-pane fade" role="tabpanel">
									<div class="message-box-wrap">
										<div class="msg-search">
											<a href="javascript:void(0)" class="inline-block txt-grey">
												<i class="zmdi zmdi-more"></i>
											</a>	
											<span class="inline-block txt-dark">messages</span>
											<a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-search"></i></a>
											<div class="clearfix"></div>
										</div>
										<div class="set-height-wrap">
											<div class="streamline message-box nicescroll-bar">
												<a href="javascript:void(0)">
													<div class="sl-item unread-message">
														<div class="sl-avatar avatar avatar-sm avatar-circle">
															<img class="img-responsive img-circle" src="../img/user.png" alt="avatar"/>
														</div>
														<div class="sl-content">
															<span class="inline-block capitalize-font   pull-left message-per">Clay Masse</span>
															<span class="inline-block font-11  pull-right message-time">12:28 AM</span>
															<div class="clearfix"></div>
															<span class=" truncate message-subject">Themeforest message sent via your envato market profile</span>
															<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsu messm quia dolor sit amet, consectetur, adipisci velit</p>
														</div>
													</div>
												</a>
												<a href="javascript:void(0)">
													<div class="sl-item">
														<div class="sl-avatar avatar avatar-sm avatar-circle">
															<img class="img-responsive img-circle" src="../img/user1.png" alt="avatar"/>
														</div>
														<div class="sl-content">
															<span class="inline-block capitalize-font   pull-left message-per">Evie Ono</span>
															<span class="inline-block font-11  pull-right message-time">1 Feb</span>
															<div class="clearfix"></div>
															<span class=" truncate message-subject">Pogody theme support</span>
															<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
														</div>
													</div>
												</a>
												<a href="javascript:void(0)">
													<div class="sl-item">
														<div class="sl-avatar avatar avatar-sm avatar-circle">
															<img class="img-responsive img-circle" src="../img/user2.png" alt="avatar"/>
														</div>
														<div class="sl-content">
															<span class="inline-block capitalize-font   pull-left message-per">Madalyn Rascon</span>
															<span class="inline-block font-11  pull-right message-time">31 Jan</span>
															<div class="clearfix"></div>
															<span class=" truncate message-subject">Congratulations from design nominees</span>
															<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
														</div>
													</div>
												</a>
												<a href="javascript:void(0)">
													<div class="sl-item unread-message">
														<div class="sl-avatar avatar avatar-sm avatar-circle">
															<img class="img-responsive img-circle" src="../img/user3.png" alt="avatar"/>
														</div>
														<div class="sl-content">
															<span class="inline-block capitalize-font   pull-left message-per">Ezequiel Merideth</span>
															<span class="inline-block font-11  pull-right message-time">29 Jan</span>
															<div class="clearfix"></div>
															<span class=" truncate message-subject">Themeforest item support message</span>
															<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
														</div>
													</div>
												</a>
												<a href="javascript:void(0)">
													<div class="sl-item unread-message">
														<div class="sl-avatar avatar avatar-sm avatar-circle">
															<img class="img-responsive img-circle" src="../img/user4.png" alt="avatar"/>
														</div>
														<div class="sl-content">
															<span class="inline-block capitalize-font   pull-left message-per">Jonnie Metoyer</span>
															<span class="inline-block font-11  pull-right message-time">27 Jan</span>
															<div class="clearfix"></div>
															<span class=" truncate message-subject">Help with beavis contact form</span>
															<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
														</div>
													</div>
												</a>
												<a href="javascript:void(0)">
													<div class="sl-item">
														<div class="sl-avatar avatar avatar-sm avatar-circle">
															<img class="img-responsive img-circle" src="../img/user.png" alt="avatar"/>
														</div>
														<div class="sl-content">
															<span class="inline-block capitalize-font   pull-left message-per">Priscila Shy</span>
															<span class="inline-block font-11  pull-right message-time">19 Jan</span>
															<div class="clearfix"></div>
															<span class=" truncate message-subject">Your uploaded theme is been selected</span>
															<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
														</div>
													</div>
												</a>
												<a href="javascript:void(0)">
													<div class="sl-item">
														<div class="sl-avatar avatar avatar-sm avatar-circle">
															<img class="img-responsive img-circle" src="../img/user1.png" alt="avatar"/>
														</div>
														<div class="sl-content">
															<span class="inline-block capitalize-font   pull-left message-per">Linda Stack</span>
															<span class="inline-block font-11  pull-right message-time">13 Jan</span>
															<div class="clearfix"></div>
															<span class=" truncate message-subject"> A new rating has been received</span>
															<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
														</div>
													</div>
												</a>
											</div>
										</div>
									</div>
								</div>
								<div  id="todo_tab" class="tab-pane fade" role="tabpanel">
									<div class="todo-box-wrap">
										<div class="add-todo">
											<a href="javascript:void(0)" class="inline-block txt-grey">
												<i class="zmdi zmdi-more"></i>
											</a>	
											<span class="inline-block txt-dark">todo list</span>
											<a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-plus"></i></a>
											<div class="clearfix"></div>
										</div>
										<div class="set-height-wrap">
											<!-- Todo-List -->
											<ul class="todo-list nicescroll-bar">
												<li class="todo-item">
													<div class="checkbox checkbox-default">
														<input type="checkbox" id="checkbox01"/>
														<label for="checkbox01">Record The First Episode</label>
													</div>
												</li>
												<li>
													<hr class="light-grey-hr"/>
												</li>
												<li class="todo-item">
													<div class="checkbox checkbox-pink">
														<input type="checkbox" id="checkbox02"/>
														<label for="checkbox02">Prepare The Conference Schedule</label>
													</div>
												</li>
												<li>
													<hr class="light-grey-hr"/>
												</li>
												<li class="todo-item">
													<div class="checkbox checkbox-warning">
														<input type="checkbox" id="checkbox03" checked/>
														<label for="checkbox03">Decide The Live Discussion Time</label>
													</div>
												</li>
												<li>
													<hr class="light-grey-hr"/>
												</li>
												<li class="todo-item">
													<div class="checkbox checkbox-success">
														<input type="checkbox" id="checkbox04" checked/>
														<label for="checkbox04">Prepare For The Next Project</label>
													</div>
												</li>
												<li>
													<hr class="light-grey-hr"/>
												</li>
												<li class="todo-item">
													<div class="checkbox checkbox-danger">
														<input type="checkbox" id="checkbox05" checked/>
														<label for="checkbox05">Finish Up AngularJs Tutorial</label>
													</div>
												</li>
												<li>
													<hr class="light-grey-hr"/>
												</li>
												<li class="todo-item">
													<div class="checkbox checkbox-purple">
														<input type="checkbox" id="checkbox06" checked/>
														<label for="checkbox06">Finish Infinity Project</label>
													</div>
												</li>
												<li>
													<hr class="light-grey-hr"/>
												</li>
											</ul>
											<!-- /Todo-List -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<!-- /Right Sidebar Menu -->
				
			
				
			<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container">
					
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
							<h5 class="txt-dark">form advanced</h5>
						</div>
					
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
							<ol class="breadcrumb">
								<li><a href="index.html">Dashboard</a></li>
								<li><a href="#"><span>forms</span></a></li>
								<li class="active"><span>form-advanced</span></li>
							</ol>
						</div>
						<!-- /Breadcrumb -->
					
					</div>
					<!-- /Title -->
					
					<!-- Row -->
					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-default border-panel card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Bootstrap Select boxes</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<p class="text-muted">Just add bootstrap-select-min.js and same css & add class <code>.selectpicker</code></p>
										<div class="form-wrap mt-40">
											<form>
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label mb-10">Select box</label>
															<select class="selectpicker" data-style="form-control btn-default btn-outline">
																<option>Mustard</option>
																<option>Ketchup</option>
																<option>Relish</option>
															</select>
														</div>	
													</div>
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label mb-10">Select boxes with optgroups</label>
															<select class="selectpicker" data-style="form-control btn-default btn-outline">
																<optgroup label="Picnic">
																	<option>Mustard</option>
																	<option>Ketchup</option>
																	<option>Relish</option>
																</optgroup>
																<optgroup label="Camping">
																	<option>Tent</option>
																	<option>Flashlight</option>
																	<option>Toilet Paper</option>
																</optgroup>
															</select>
														</div>
													</div>	
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label mb-10">Multiple select boxes</label>
															<select class="selectpicker" multiple data-style="form-control btn-default btn-outline">
																<option>Mustard</option>
																<option>Ketchup</option>
																<option>Relish</option>
															</select>
														</div>	
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default border-panel card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Bootstrap Select boxes with colored button</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<p class="text-muted">Just add button class in  data-style like <code>data-style="btn-warning btn-outline"</code></p>
										<div class="form-wrap mt-40">
											<form>
												<div class="row">
													<div class="col-sm-4">
														<div class="form-group">
															<select class="selectpicker" data-style="btn-warning btn-outline">
																<option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
																<option data-tokens="mustard">Burger, Shake and a Smile</option>
																<option data-tokens="frosting">Sugar, Spice and all things nice</option>
															</select>
														</div>
													</div>
													<div class="col-sm-4">
														<div class="form-group">
															<select class="selectpicker" data-style="btn-info btn-outline">
																<option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
																<option data-tokens="mustard">Burger, Shake and a Smile</option>
																<option data-tokens="frosting">Sugar, Spice and all things nice</option>
															</select>
														</div>
													</div>
													<div class="col-sm-4">
														<div class="form-group">
															<select class="selectpicker" data-style="btn-warning btn-outline">
																<option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
																<option data-tokens="mustard">Burger, Shake and a Smile</option>
																<option data-tokens="frosting">Sugar, Spice and all things nice</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-4">
														<div class="form-group mb-0">
															<select class="selectpicker" data-style="btn-danger btn-outline">
																<option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
																<option data-tokens="mustard">Burger, Shake and a Smile</option>
																<option data-tokens="frosting">Sugar, Spice and all things nice</option>
															</select>
														</div>
													</div>
													<div class="col-sm-4">
														<div class="form-group mb-0">
															<select class="selectpicker" data-style="btn-success btn-outline">
																<option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
																<option data-tokens="mustard">Burger, Shake and a Smile</option>
																<option data-tokens="frosting">Sugar, Spice and all things nice</option>
															</select>
														</div>
													</div>
													<div class="col-sm-4">
														<div class="form-group mb-0">
															<select class="selectpicker" data-style="btn-default btn-outline">
																<option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
																<option data-tokens="mustard">Burger, Shake and a Smile</option>
																<option data-tokens="frosting">Sugar, Spice and all things nice</option>
															</select>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default border-panel card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Switchery (sizes)</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<p class="text-muted"> You can add <code> data-size="small",data-size="large"</code> to your input element for different sizes. </p>
										<div class="form-wrap">
											<form>
												<div class="row">
													<div class="col-lg-12">
														<div class="mt-25">
															<input type="checkbox" checked class="js-switch js-switch-1"  data-color="#ffbf36" data-size="small"/>
															<input type="checkbox" checked class="js-switch js-switch-1"  data-color="#ffbf36"/>
															<input type="checkbox" checked class="js-switch js-switch-1"  data-color="#ffbf36" data-size="large"/>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
								<div class="panel panel-default border-panel card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Checkbox Square</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<p class="text-muted"> Bootstrap brand colors, use <code>checkbox</code> </p>
										<div class="row mt-40">
											<div class="col-sm-12">
												<div class="checkbox">
													<input id="checkbox0" type="checkbox">
													<label for="checkbox0"> Default </label>
												</div>
												<div class="checkbox checkbox-custom">
													<input id="checkbox11" type="checkbox" checked>
													<label for="checkbox11"> Custom </label>
												</div>
												<div class="checkbox checkbox-primary">
													<input id="checkbox2" type="checkbox" checked>
													<label for="checkbox2"> Primary </label>
												</div>
												<div class="checkbox checkbox-success">
													<input id="checkbox3" type="checkbox">
													<label for="checkbox3"> Success </label>
												</div>
												<div class="checkbox checkbox-info">
													<input id="checkbox4" type="checkbox">
													<label for="checkbox4"> Info </label>
												</div>
												<div class="checkbox checkbox-warning">
													<input id="checkbox5" type="checkbox" checked>
													<label for="checkbox5"> Warning </label>
												</div>
												<div class="checkbox checkbox-danger">
													<input id="checkbox6" type="checkbox" checked>
													<label for="checkbox6"> Danger </label>
												</div>
												<div class="checkbox checkbox-inverse">
													<input id="checkbox6c" type="checkbox">
													<label for="checkbox6c"> Inverse </label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
								<div class="panel panel-default border-panel card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Radio Clickable</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<p class="text-muted"> All buttons clickable </p>
										<div class="row mt-40">
											<div class="col-sm-12">
												<div class="radio">
													<input type="radio" name="radio1" id="radio11" value="option1" checked>
													<label for="radio11"> Default </label>
												</div>
												<div class="radio radio-custom">
													<input type="radio" name="radio2" id="radio12" value="option2">
													<label for="radio12"> Custom </label>
												</div>
												<div class="radio radio-primary">
													<input type="radio" name="radio3" id="radio13" value="option3">
													<label for="radio13"> Primary </label>
												</div>
												<div class="radio radio-success">
													<input type="radio" name="radio4" id="radio14" value="option4" checked>
													<label for="radio14"> Success </label>
												</div>
												<div class="radio radio-info">
													<input type="radio" name="radio5" id="radio15" value="option5" checked>
													<label for="radio15"> Info </label>
												</div>
												<div class="radio radio-danger">
													<input type="radio" name="radio6" id="radio16" value="option6">
													<label for="radio16"> Danger </label>
												</div>
												<div class="radio radio-warning">
													<input type="radio" name="radio7" id="radio17" value="option7" checked>
													<label for="radio17"> Warning </label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default border-panel card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Radio Disable</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<p class="text-muted">use <code>disabled</code> in input tag for disable state</p>
											<div class="row mt-40">
												<div class="col-sm-12">
													<div class="radio">
														<input type="radio" name="radio21" id="radio21" value="option1" disabled checked>
														<label for="radio21"> Default </label>
													</div>
													<div class="radio radio-custom">
														<input type="radio" name="radio22" disabled id="radio22" value="option2">
														<label for="radio22"> Custom </label>
													</div>
													<div class="radio radio-primary">
														<input type="radio" name="radio23" disabled id="radio23" value="option3">
														<label for="radio23"> Primary </label>
													</div>
													<div class="radio radio-success">
														<input type="radio" name="radio24" disabled id="radio24" value="option4" checked>
														<label for="radio24"> Success </label>
													</div>
												</div>
											</div>
										
									</div>
								</div>
							</div>
							<div class="panel panel-default border-panel card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Bootstrap TouchSpin</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<p class="text-muted"> Use the <code> data-plugin="touchSpin" </code> to create a Bootstrap style spinner.</p>
										<div class="row mt-40">
											<div class="col-md-6">
												<form>
													<div class="form-group">
														<label class="control-label mb-10">Vertical Touchspin</label>
														<input class="vertical-spin" type="text" data-bts-button-down-class="btn btn-default"   data-bts-button-up-class="btn btn-default" value="" name="vertical-spin">
													</div>
													<div class="form-group">
														<label class="control-label mb-10">Postfix</label>
														<input id="tch1" type="text" value="55" name="tch1" data-bts-button-down-class="btn btn-default" data-bts-button-up-class="btn btn-default">
													</div>
													<div class="form-group m-b-0">
														<label class="control-label mb-10">Prefix</label>
														<input id="tch2" type="text" value="0" name="tch2" class=" form-control" data-bts-button-down-class="btn btn-default" data-bts-button-up-class="btn btn-default">
													</div>
												</form>
											</div>
											<div class="col-md-6">
												<form>
													<div class="form-group">
														<label class="control-label mb-10">Init </label>
														<input id="tch3" type="text" value="" name="tch3" data-bts-button-down-class="btn btn-default" data-bts-button-up-class="btn btn-default">
													</div>
													<div class="form-group">
														<label class="control-label mb-10">Value set 30 </label>
														<input id="tch3_22" type="text" value="30" name="tch3_22" data-bts-button-down-class="btn btn-default" data-bts-button-up-class="btn btn-default">
													</div>
													<div class="form-group">
														<label class="control-label mb-10">Button group</label>
														<div class="input-group">
															<input id="tch5" type="text" class="form-control" name="tch5" value="50" data-bts-button-down-class="btn btn-default" data-bts-button-up-class="btn btn-default">
															<div class="input-group-btn">
																<button type="button" class="btn btn-default btn-info  dropdown-toggle" data-toggle="dropdown"> <span class="caret"></span> <span class="sr-only">Toggle Dropdown</span> </button>
																<ul class="dropdown-menu pull-right" role="menu">
																	<li> <a href="#">Action</a> </li>
																	<li> <a href="#">Another action</a> </li>
																	<li> <a href="#">Something else here</a> </li>
																	<li class="divider"></li>
																	<li> <a href="#">Separated link</a> </li>
																</ul>
															</div>
														</div>
													</div>	
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
								<div class="panel panel-default border-panel card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Multiple Select (Pre-selected options)</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<p class="text-muted"> Use a <code>select multiple</code> as your input element.</p>
										<div class="row mt-40">
											<div class="col-sm-12">
												<h5 class="box-title"></h5>
												<select id='pre-selected-options' multiple='multiple'>
													<option value='elem_1'>elem 1</option>
													<option value='elem_2'>elem 2</option>
													<option value='elem_3'>elem 3</option>
													<option value='elem_4' selected>elem 4</option>
													<option value='elem_5' selected>elem 5</option>
													<option value="elem_6">elem 6</option>
													<option value="elem_7">elem 7</option>
													<option value="elem_8">elem 8</option>
													<option value="elem_9">elem 9</option>
													<option value="elem_10">elem 10</option>
													<option value="elem_11">elem 11</option>
													<option value="elem_12">elem 12</option>
													<option value="elem_13">elem 13</option>
													<option value="elem_14">elem 14</option>
													<option value="elem_15">elem 15</option>
													<option value="elem_16">elem 16</option>
													<option value="elem_17">elem 17</option>
													<option value="elem_18">elem 18</option>
													<option value="elem_19">elem 19</option>
													<option value="elem_20">elem 20</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default border-panel card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Multiple Select (Optgroup)</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<p class="text-muted"> Use a <code>select multiple</code> as your input element.</p>
										<div class="row mt-40">
											<div class="col-sm-12">
												<select multiple id="optgroup" name="optgroup[]">
													<optgroup label="Friends">
														<option value="1">Yoda</option>
														<option value="2" selected disabled>Obiwan</option>
													</optgroup>
													<optgroup label="Enemies">
														<option value="3">Palpatine</option>
														<option value="4" disabled>Darth Vader</option>
													</optgroup>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="panel panel-default border-panel card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Select 2</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<p class="text-muted"> Select2 for custom search and select</p>
										<div class="form-wrap mt-40">
											<form>
												<div class="form-group">
													<label class="control-label mb-10">Single select2</label>
													<select class="form-control select2">
														<option>Select</option>
														<optgroup label="Alaskan/Hawaiian Time Zone">
															<option value="AK">Alaska</option>
															<option value="HI">Hawaii</option>
														</optgroup>
														<optgroup label="Pacific Time Zone">
															<option value="CA">California</option>
															<option value="NV">Nevada</option>
															<option value="OR">Oregon</option>
															<option value="WA">Washington</option>
														</optgroup>
														<optgroup label="Mountain Time Zone">
															<option value="AZ">Arizona</option>
															<option value="CO">Colorado</option>
															<option value="ID">Idaho</option>
															<option value="MT">Montana</option>
															<option value="NE">Nebraska</option>
															<option value="NM">New Mexico</option>
															<option value="ND">North Dakota</option>
															<option value="UT">Utah</option>
															<option value="WY">Wyoming</option>
														</optgroup>
														<optgroup label="Central Time Zone">
															<option value="AL">Alabama</option>
															<option value="AR">Arkansas</option>
															<option value="IL">Illinois</option>
															<option value="IA">Iowa</option>
															<option value="KS">Kansas</option>
															<option value="KY">Kentucky</option>
															<option value="LA">Louisiana</option>
															<option value="MN">Minnesota</option>
															<option value="MS">Mississippi</option>
															<option value="MO">Missouri</option>
															<option value="OK">Oklahoma</option>
															<option value="SD">South Dakota</option>
															<option value="TX">Texas</option>
															<option value="TN">Tennessee</option>
															<option value="WI">Wisconsin</option>
														</optgroup>
														<optgroup label="Eastern Time Zone">
															<option value="CT">Connecticut</option>
															<option value="DE">Delaware</option>
															<option value="FL">Florida</option>
															<option value="GA">Georgia</option>
															<option value="IN">Indiana</option>
															<option value="ME">Maine</option>
															<option value="MD">Maryland</option>
															<option value="MA">Massachusetts</option>
															<option value="MI">Michigan</option>
															<option value="NH">New Hampshire</option>
															<option value="NJ">New Jersey</option>
															<option value="NY">New York</option>
															<option value="NC">North Carolina</option>
															<option value="OH">Ohio</option>
															<option value="PA">Pennsylvania</option>
															<option value="RI">Rhode Island</option>
															<option value="SC">South Carolina</option>
															<option value="VT">Vermont</option>
															<option value="VA">Virginia</option>
															<option value="WV">West Virginia</option>
														</optgroup>
													</select>
												</div>	
												
												<div class="form-group mb-0">
													<label class="control-label mb-10">Multiple select boxes</label>
													<select class="select2 select2-multiple" multiple="multiple" data-placeholder="Choose">
														<optgroup label="Alaskan/Hawaiian Time Zone">
															<option value="AK">Alaska</option>
															<option value="HI">Hawaii</option>
														</optgroup>
														<optgroup label="Pacific Time Zone">
															<option value="CA">California</option>
															<option value="NV">Nevada</option>
															<option value="OR">Oregon</option>
															<option value="WA">Washington</option>
														</optgroup>
														<optgroup label="Mountain Time Zone">
															<option value="AZ">Arizona</option>
															<option value="CO">Colorado</option>
															<option value="ID">Idaho</option>
															<option value="MT">Montana</option>
															<option value="NE">Nebraska</option>
															<option value="NM">New Mexico</option>
															<option value="ND">North Dakota</option>
															<option value="UT">Utah</option>
															<option value="WY">Wyoming</option>
														</optgroup>
														<optgroup label="Central Time Zone">
															<option value="AL">Alabama</option>
															<option value="AR">Arkansas</option>
															<option value="IL">Illinois</option>
															<option value="IA">Iowa</option>
															<option value="KS">Kansas</option>
															<option value="KY">Kentucky</option>
															<option value="LA">Louisiana</option>
															<option value="MN">Minnesota</option>
															<option value="MS">Mississippi</option>
															<option value="MO">Missouri</option>
															<option value="OK">Oklahoma</option>
															<option value="SD">South Dakota</option>
															<option value="TX">Texas</option>
															<option value="TN">Tennessee</option>
															<option value="WI">Wisconsin</option>
														</optgroup>
														<optgroup label="Eastern Time Zone">
															<option value="CT">Connecticut</option>
															<option value="DE">Delaware</option>
															<option value="FL">Florida</option>
															<option value="GA">Georgia</option>
															<option value="IN">Indiana</option>
															<option value="ME">Maine</option>
															<option value="MD">Maryland</option>
															<option value="MA">Massachusetts</option>
															<option value="MI">Michigan</option>
															<option value="NH">New Hampshire</option>
															<option value="NJ">New Jersey</option>
															<option value="NY">New York</option>
															<option value="NC">North Carolina</option>
															<option value="OH">Ohio</option>
															<option value="PA">Pennsylvania</option>
															<option value="RI">Rhode Island</option>
															<option value="SC">South Carolina</option>
															<option value="VT">Vermont</option>
															<option value="VA">Virginia</option>
															<option value="WV">West Virginia</option>
														</optgroup>
													</select>
												</div>
											</form>	
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default border-panel card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Switchery (Basic)</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<p class="text-muted"> add the following line <code> class="js-switch" data-color="#13dafe"</code> to your input element. </p>
										<div class="form-wrap">
											<form>
												<div class="row">
													<div class="col-lg-12">
														<div class="mt-25">
															<input type="checkbox" checked class="js-switch js-switch-1" data-color="#DCDCDC"/>
															<input type="checkbox" checked class="js-switch js-switch-1" data-color="#22af47"/>
															<input type="checkbox" checked class="js-switch js-switch-1" data-color="ff6028"/>
															<input type="checkbox" checked class="js-switch js-switch-1" data-color="#ed1b60"/>
															<input type="checkbox" checked class="js-switch js-switch-1" data-color="#ffbf36"/>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default border-panel card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Switchery (secondary color)</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<p class="text-muted"> add the following line <code> class="js-switch" data-color="#13dafe"</code> to your input element. </p>
										<div class="form-wrap">
											<form>
												<div class="row">
													<div class="col-lg-12">
														<div class="mt-25">
															<input type="checkbox" class="js-switch js-switch-1"  data-color="#22af47" data-secondary-color="ff6028" />
															<input type="checkbox" class="js-switch js-switch-1"  data-color="ff6028"  data-secondary-color="#22af47" />
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default border-panel card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Checkbox Circle</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<p class="text-muted"> Add simple <code>checkbox-circle</code> class </p>
										<div class="row mt-40">
											<div class="col-sm-12">
												<div class="checkbox checkbox-circle">
													<input id="checkbox7" type="checkbox">
													<label for="checkbox7"> Simply Rounded </label>
												</div>
												<div class="checkbox checkbox-info checkbox-circle">
													<input id="checkbox8" type="checkbox" checked>
													<label for="checkbox8"> Info </label>
												</div>
												<div class="checkbox checkbox-primary checkbox-circle">
													<input id="checkbox-9" type="checkbox">
													<label for="checkbox-9"> Primary </label>
												</div>
												<div class="checkbox checkbox-success checkbox-circle">
													<input id="checkbox-10" type="checkbox" checked>
													<label for="checkbox-10"> Success </label>
												</div>
												<div class="checkbox checkbox-warning checkbox-circle">
													<input id="checkbox-11" type="checkbox">
													<label for="checkbox-11"> Warning </label>
												</div>
												<div class="checkbox checkbox-danger checkbox-circle">
													<input id="checkbox-12" type="checkbox" checked>
													<label for="checkbox-12"> Danger </label>
												</div>
												<div class="checkbox checkbox-inverse checkbox-circle">
													<input id="checkbox-15" type="checkbox" checked>
													<label for="checkbox-15"> Inverse </label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default border-panel card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Checkbox Disable</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<p class="text-muted">use <code>disabled</code> in input tag for disable state</p>
										<div class="row mt-40">
											<div class="col-sm-12">
												<div class="checkbox">
													<input id="checkbox9" type="checkbox" disabled>
													<label for="checkbox9"> Can't check this </label>
												</div>
												<div class="checkbox checkbox-warning checkbox-circle">
													<input id="checkbox110" type="checkbox" disabled checked>
													<label for="checkbox110"> And this </label>
												</div>
												<div class="checkbox checkbox-info">
													<input id="checkbox12" type="checkbox" disabled checked>
													<label for="checkbox12"> Can't check this </label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default border-panel card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Radio Buttons</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<p class="text-muted"> With bootstrap colors, use <code>radio</code> class.</p>
										<div class="row mt-40">
											<div class="col-sm-12">
												<div class="radio">
													<input type="radio" name="radio" id="radio1" value="option1" checked>
													<label for="radio1"> Default </label>
												</div>
												<div class="radio radio-custom">
													<input type="radio" name="radio" id="radio2" value="option2">
													<label for="radio2"> Custom </label>
												</div>
												<div class="radio radio-primary">
													<input type="radio" name="radio" id="radio3" value="option3">
													<label for="radio3"> Primary </label>
												</div>
												<div class="radio radio-success">
													<input type="radio" name="radio" id="radio4" value="option4">
													<label for="radio4"> Success </label>
												</div>
												<div class="radio radio-info">
													<input type="radio" name="radio" id="radio5" value="option5">
													<label for="radio5"> Info </label>
												</div>
												<div class="radio radio-danger">
													<input type="radio" name="radio" id="radio6" value="option6">
													<label for="radio6"> Danger </label>
												</div>
												<div class="radio radio-warning">
													<input type="radio" name="radio" id="radio7" value="option7">
													<label for="radio7"> Warning </label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default border-panel card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Bootstrap Switches</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="row">
											<div class="form-wrap">
												<form>
													<div class="col-sm-6">
														<div class="form-group">
															
																<label class="control-label mb-10">Default switches</label>
																<div>
																	<input id="check_box_switch" type="checkbox" data-off-text="False" data-on-text="True"  class="bs-switch">
																	<label>This Switch is Set to
																		<span id="check_box_value" ></span>
																	</label>
															</div>	
														</div>	
													</div>	
													
													<div class="col-sm-6">	
														
															<label class="control-label mb-10">Radio switches</label>
															<div>
															<input id="TheCheckBox2" name="GroupedSwitches" class="bs-switch" type="radio" data-off-text="False" data-on-text="True" >
															<input id="TheCheckBox3" name="GroupedSwitches" class="bs-switch" type="radio" data-off-text="False" data-on-text="True" >
															<input id="TheCheckBox4" name="GroupedSwitches" class="bs-switch" type="radio" data-off-text="False" data-on-text="True" >
														</div>
													</div>
												</form>	
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default border-panel card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Input Tags</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<p class="text-muted">Add <code>data-role="tagsinput"</code> to your input field & its automatically change it to a tags input.</p>
										<div class="tags-default mt-40">
											<input type="text" value="Amsterdam,Washington,Sydney" data-role="tagsinput" placeholder="add tags"/>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default border-panel card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Select Tags</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<p class="text-muted">You can also use <code>select multiple</code> to your input field.</p>
										<div class="mt-40">
											<select multiple data-role="tagsinput">
												<option value="Amsterdam">Amsterdam</option>
												<option value="Washington">Washington</option>
												<option value="Sydney">Sydney</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default border-panel card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Input Group Tags</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<p class="text-muted">You can also use group tag <code>data-role="tagsinput"</code> to your input field.</p>
										<div class="input-group mt-40"> <span class="input-group-addon">Tags</span>
											<input type="text" value="Amsterdam,Washington,Sydney" data-role="tagsinput" placeholder="add tags">
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default border-panel card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Multiple Select (Public methods)</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<p class="text-muted"> Use a <code>select multiple</code> as your input element.</p>
										<div class="row mt-40">
											<div class="col-sm-12">
												<select multiple id="public-methods" name="public-methods[]">
													<option value="elem_1">elem 1</option>
													<option value="elem_2" disabled>elem 2</option>
													<option value="elem_3">elem 3</option>
													<option value="elem_4">elem 4</option>
													<option value="elem_5">elem 5</option>
													<option value="elem_6">elem 6</option>
													<option value="elem_7">elem 7</option>
													<option value="elem_8">elem 8</option>
													<option value="elem_9">elem 9</option>
													<option value="elem_10">elem 10</option>
													<option value="elem_11">elem 11</option>
													<option value="elem_12">elem 12</option>
													<option value="elem_13">elem 13</option>
													<option value="elem_14">elem 14</option>
													<option value="elem_15">elem 15</option>
													<option value="elem_16">elem 16</option>
													<option value="elem_17">elem 17</option>
													<option value="elem_18">elem 18</option>
													<option value="elem_19">elem 19</option>
													<option value="elem_20">elem 20</option>
													<option value="elem_21">elem 21</option>
													<option value="elem_22">elem 22</option>
													<option value="elem_23">elem 23</option>
													<option value="elem_24">elem 24</option>
													<option value="elem_25">elem 25</option>
													<option value="elem_26">elem 26</option>
													<option value="elem_27">elem 27</option>
													<option value="elem_28">elem 28</option>
													<option value="elem_29">elem 29</option>
													<option value="elem_30">elem 30</option>
													<option value="elem_31">elem 31</option>
													<option value="elem_32">elem 32</option>
													<option value="elem_33">elem 33</option>
													<option value="elem_34">elem 34</option>
													<option value="elem_35">elem 35</option>
													<option value="elem_36">elem 36</option>
													<option value="elem_37">elem 37</option>
													<option value="elem_38">elem 38</option>
													<option value="elem_39">elem 39</option>
													<option value="elem_40">elem 40</option>
													<option value="elem_41">elem 41</option>
													<option value="elem_42">elem 42</option>
													<option value="elem_43">elem 43</option>
													<option value="elem_44">elem 44</option>
													<option value="elem_45">elem 45</option>
													<option value="elem_46">elem 46</option>
													<option value="elem_47">elem 47</option>
													<option value="elem_48">elem 48</option>
													<option value="elem_49">elem 49</option>
													<option value="elem_50">elem 50</option>
													<option value="elem_51">elem 51</option>
													<option value="elem_52">elem 52</option>
													<option value="elem_53">elem 53</option>
													<option value="elem_54">elem 54</option>
													<option value="elem_55">elem 55</option>
													<option value="elem_56">elem 56</option>
													<option value="elem_57">elem 57</option>
													<option value="elem_58">elem 58</option>
													<option value="elem_59">elem 59</option>
													<option value="elem_60">elem 60</option>
													<option value="elem_61">elem 61</option>
													<option value="elem_62">elem 62</option>
													<option value="elem_63">elem 63</option>
													<option value="elem_64">elem 64</option>
													<option value="elem_65">elem 65</option>
													<option value="elem_66">elem 66</option>
													<option value="elem_67">elem 67</option>
													<option value="elem_68">elem 68</option>
													<option value="elem_69">elem 69</option>
													<option value="elem_70">elem 70</option>
													<option value="elem_71">elem 71</option>
													<option value="elem_72">elem 72</option>
													<option value="elem_73">elem 73</option>
													<option value="elem_74">elem 74</option>
													<option value="elem_75">elem 75</option>
													<option value="elem_76">elem 76</option>
													<option value="elem_77">elem 77</option>
													<option value="elem_78">elem 78</option>
													<option value="elem_79">elem 79</option>
													<option value="elem_80">elem 80</option>
													<option value="elem_81">elem 81</option>
													<option value="elem_82">elem 82</option>
													<option value="elem_83">elem 83</option>
													<option value="elem_84">elem 84</option>
													<option value="elem_85">elem 85</option>
													<option value="elem_86">elem 86</option>
													<option value="elem_87">elem 87</option>
													<option value="elem_88">elem 88</option>
													<option value="elem_89">elem 89</option>
													<option value="elem_90">elem 90</option>
													<option value="elem_91">elem 91</option>
													<option value="elem_92">elem 92</option>
													<option value="elem_93">elem 93</option>
													<option value="elem_94">elem 94</option>
													<option value="elem_95">elem 95</option>
													<option value="elem_96">elem 96</option>
													<option value="elem_97">elem 97</option>
													<option value="elem_98">elem 98</option>
													<option value="elem_99">elem 99</option>
													<option value="elem_100">elem 100</option>
													<option value="elem_101">elem 101</option>
													<option value="elem_102">elem 102</option>
													<option value="elem_103">elem 103</option>
													<option value="elem_104">elem 104</option>
													<option value="elem_105">elem 105</option>
													<option value="elem_106">elem 106</option>
													<option value="elem_107">elem 107</option>
													<option value="elem_108">elem 108</option>
													<option value="elem_109">elem 109</option>
													<option value="elem_110">elem 110</option>
													<option value="elem_111">elem 111</option>
													<option value="elem_112">elem 112</option>
													<option value="elem_113">elem 113</option>
													<option value="elem_114">elem 114</option>
													<option value="elem_115">elem 115</option>
													<option value="elem_116">elem 116</option>
													<option value="elem_117">elem 117</option>
													<option value="elem_118">elem 118</option>
													<option value="elem_119">elem 119</option>
													<option value="elem_120">elem 120</option>
													<option value="elem_121">elem 121</option>
													<option value="elem_122">elem 122</option>
													<option value="elem_123">elem 123</option>
													<option value="elem_124">elem 124</option>
													<option value="elem_125">elem 125</option>
													<option value="elem_126">elem 126</option>
													<option value="elem_127">elem 127</option>
													<option value="elem_128">elem 128</option>
													<option value="elem_129">elem 129</option>
													<option value="elem_130">elem 130</option>
													<option value="elem_131">elem 131</option>
													<option value="elem_132">elem 132</option>
													<option value="elem_133">elem 133</option>
													<option value="elem_134">elem 134</option>
													<option value="elem_135">elem 135</option>
													<option value="elem_136">elem 136</option>
													<option value="elem_137">elem 137</option>
													<option value="elem_138">elem 138</option>
													<option value="elem_139">elem 139</option>
													<option value="elem_140">elem 140</option>
													<option value="elem_141">elem 141</option>
													<option value="elem_142">elem 142</option>
													<option value="elem_143">elem 143</option>
													<option value="elem_144">elem 144</option>
													<option value="elem_145">elem 145</option>
													<option value="elem_146">elem 146</option>
													<option value="elem_147">elem 147</option>
													<option value="elem_148">elem 148</option>
													<option value="elem_149">elem 149</option>
													<option value="elem_150">elem 150</option>
													<option value="elem_151">elem 151</option>
													<option value="elem_152">elem 152</option>
													<option value="elem_153">elem 153</option>
													<option value="elem_154">elem 154</option>
													<option value="elem_155">elem 155</option>
													<option value="elem_156">elem 156</option>
													<option value="elem_157">elem 157</option>
													<option value="elem_158">elem 158</option>
													<option value="elem_159">elem 159</option>
													<option value="elem_160">elem 160</option>
													<option value="elem_161">elem 161</option>
													<option value="elem_162">elem 162</option>
													<option value="elem_163">elem 163</option>
													<option value="elem_164">elem 164</option>
													<option value="elem_165">elem 165</option>
													<option value="elem_166">elem 166</option>
													<option value="elem_167">elem 167</option>
													<option value="elem_168">elem 168</option>
													<option value="elem_169">elem 169</option>
													<option value="elem_170">elem 170</option>
													<option value="elem_171">elem 171</option>
													<option value="elem_172">elem 172</option>
													<option value="elem_173">elem 173</option>
													<option value="elem_174">elem 174</option>
													<option value="elem_175">elem 175</option>
													<option value="elem_176">elem 176</option>
													<option value="elem_177">elem 177</option>
													<option value="elem_178">elem 178</option>
													<option value="elem_179">elem 179</option>
													<option value="elem_180">elem 180</option>
													<option value="elem_181">elem 181</option>
													<option value="elem_182">elem 182</option>
													<option value="elem_183">elem 183</option>
													<option value="elem_184">elem 184</option>
													<option value="elem_185">elem 185</option>
													<option value="elem_186">elem 186</option>
													<option value="elem_187">elem 187</option>
													<option value="elem_188">elem 188</option>
													<option value="elem_189">elem 189</option>
													<option value="elem_190">elem 190</option>
													<option value="elem_191">elem 191</option>
													<option value="elem_192">elem 192</option>
													<option value="elem_193">elem 193</option>
													<option value="elem_194">elem 194</option>
													<option value="elem_195">elem 195</option>
													<option value="elem_196">elem 196</option>
													<option value="elem_197">elem 197</option>
													<option value="elem_198">elem 198</option>
													<option value="elem_199">elem 199</option>
													<option value="elem_200">elem 200</option>
												</select>
												<div class="button-box"> 
													<a id="select-all" class="btn btn-danger btn-outline mr-10 mt-15" href="#">select all</a> 
													<a id="deselect-all" class="btn btn-info btn-outline mr-10 mt-15" href="#">deselect all</a> 
													<a id="add-option" class="btn btn-success btn-outline mr-10 mt-15" href="#">Add option</a> 
													<a id="refresh" class="btn btn-warning btn-outline mr-10 mt-15" href="#">refresh</a> 
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->
				
					<!-- Row -->
					<div class="row">
						<div class="col-md-6">
						</div>
						
						<div class="col-md-6">
						</div>
					</div>
					<!-- /Row -->
					
					<!-- Row -->
					<div class="row">
						<div class="col-md-12">
						</div>
					</div>
					<!-- /Row -->
					
				</div>
				
				<!-- Footer -->
			<footer class="footer pl-30 pr-30">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<p>2018 &copy; Splasher. Pampered by Hencework</p>
						</div>
						<div class="col-sm-6 text-right">
							<p>Follow Us</p>
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
						</div>
					</div>
				</div>
			</footer>
			<!-- /Footer -->
				
			</div>
			<!-- /Main Content -->
			
		</div>
		<!-- /#wrapper -->
		
		<?php include 'jquery.php'; ?>
		
	</body>
</html>