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

	<!-- Bootstrap table CSS -->
	<link href="vendors/bower_components/bootstrap-table/dist/bootstrap-table.css" rel="stylesheet" type="text/css"/>
	
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
								<a href="javascript:void(0);" data-toggle="collapse" data-target="#form_dr"><div class="pull-left"><span class="right-nav-text">Forms</span></div><div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
								<ul id="form_dr" class="collapse collapse-level-2 two-col-list dr-change-pos">
									<li>
										<a href="form-element.html">Basic Forms</a>
									</li>
									<li>
										<a href="form-layout.html">form Layout</a>
									</li>
									<li>
										<a href="form-advanced.html">Form Advanced</a>
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
								<a class="active-page" href="javascript:void(0);" data-toggle="collapse" data-target="#table_dr"><div class="pull-left"><span class="right-nav-text">Tables</span></div><div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
								<ul id="table_dr" class="collapse collapse-level-2 dr-change-pos">
									<li>
										<a href="basic-table.html">Basic Table</a>
									</li>
									<li>
										<a class="active-page" href="bootstrap-table.html">Bootstrap Table</a>
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
					  <h5 class="txt-dark">Bootstrap table</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="index.html">Dashboard</a></li>
						<li><a href="#"><span>table</span></a></li>
						<li class="active"><span>bootstrap table</span></li>
					  </ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default border-panel card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Basic Table</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
										<table data-toggle="table">
											<thead>
												<tr>
													<th>Item ID</th>
													<th>Item Name</th>
													<th>Item Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>Item 1</td>
													<td>$1</td>
												</tr>
												<tr>
													<td>2</td>
													<td>Item 2</td>
													<td>$2</td>
												</tr>
												<tr>
													<td>3</td>
													<td>Item 3</td>
													<td>$3</td>
												</tr>
												<tr>
													<td>4</td>
													<td>Item 4</td>
													<td>$4</td>
												</tr>
												<tr>
													<td>5</td>
													<td>Item 5</td>
													<td>$5</td>
												</tr>
												<tr>
													<td>6</td>
													<td>Item 6</td>
													<td>$6</td>
												</tr>
												<tr>
													<td>7</td>
													<td>Item 7</td>
													<td>$7</td>
												</tr>
											</tbody>
										</table>
									</div>	
								</div>	
							</div>	
						</div>	
					</div>	
				</div>
				<!-- /Row -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default border-panel card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Data from JSON file</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
										<table data-toggle="table" data-buttons-class='default btn-sm btn-outline' data-pagination="true" data-search="true"   data-url="dist/json/bootstrap-table.json" data-height="280" data-mobile-responsive="true" data-sort-order="desc" class="table">
											<thead>
												<tr>
												  <th data-field="id" 
														data-sortable="true"> Id </th>
												  <th data-field="name" 
													  data-sortable="true" data-width="100"> Name </th>
												  <th data-field="price" 
													data-sortable="true"> Price </th>
												</tr>
											</thead>
										</table>
									</div>	
								</div>	
							</div>	
						</div>	
					</div>
				</div>
				<!-- /Row -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default border-panel card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Data from JS</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
										
										<table id="table_js" data-buttons-class='default  btn-outline' data-search="true" data-show-columns="true" data-show-toggle="true" data-click-to-select="true"  data-pagination="true"  data-height="300">
											<thead>
												<tr>
													<th data-field="stargazers_count" data-sortable="true">Stars</th>
													<th data-field="name" data-sortable="true" >Name</th>
													<th data-field="forks_count" data-sortable="true">Forks</th>
													<th data-field="description" data-sortable="true">Description</th>
												</tr>
											</thead>
										</table>
										<div class="form-inline">
											<button id="mybtn_top" type="button" 
													class="btn btn-default btn-outline  mr-10 mt-20">
												Scroll to top
											</button>
											<button id="mybtn_row" type="button" 
													class="btn btn-default btn-outline  mr-10 mt-20">
												Scroll to row index: 
											</button>
												<input id="row_index" type="number" 
													   class="form-control mr-10 mt-20" 
													   value="3" min="0">
											<button id="mybtn_btm" type="button" 
													class="btn btn-default btn-outline  mr-10 mt-20">
												Scroll to bottom
											</button>
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
					<div class="col-sm-12">
						<div class="panel panel-default border-panel card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Table with Radio Button</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
										<table id="table_js_1"  data-click-to-select="true" data-select-item-name="myRadioName" >
											<thead>
												<tr>
													<th data-field="state" data-radio="true"></th>
													<th data-field="stargazers_count" data-sortable="true">Stars</th>
													<th data-field="name" data-sortable="true" >Name</th>
													<th data-field="forks_count" data-sortable="true">Forks</th>
													<th data-field="description" data-sortable="true">Description</th>
												</tr>
											</thead>
										</table>
									</div>	
								</div>	
							</div>	
						</div>	
					</div>
				</div>
				<!-- /Row -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default border-panel card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Table with Checkbox Button</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
										<table id="table_js_2" data-click-to-select="true" data-select-item-name="myChk" >
											<thead>
												<tr>
													<th data-field="state" data-checkbox="true"></th>
													<th data-field="stargazers_count" data-sortable="true">Stars</th>
													<th data-field="name" data-sortable="true" >Name</th>
													<th data-field="forks_count" data-sortable="true">Forks</th>
													<th data-field="description" data-sortable="true">Description</th>
												</tr>
											</thead>
										</table>
									</div>	
								</div>	
							</div>	
						</div>	
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
	
	<!-- JavaScript -->
	
    <!-- jQuery -->
    <script src="<?php echo base_url('assets/admin/vendors/bower_components/jquery/dist/jquery.min.js')?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/admin/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')?>"></script>
    
	<!-- Bootstrap-table JavaScript -->
	<script src="<?php echo base_url('assets/admin/vendors/bower_components/bootstrap-table/dist/bootstrap-table.min.js')?>"></script>
	<script src="<?php echo base_url('assets/admin/demo-1/dist/js/bootstrap-table-data.js')?>"></script>
	
	<!-- Slimscroll JavaScript -->
	<script src="<?php echo base_url('assets/admin/demo-1/dist/js/jquery.slimscroll.js')?>"></script>
	
	<!-- Owl JavaScript -->
	<script src="<?php echo base_url('assets/admin/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js')?>"></script>
	
	<!-- Switchery JavaScript -->
	<script src="<?php echo base_url('assets/admin/vendors/bower_components/switchery/dist/switchery.min.js')?>"></script>
	
	<!-- Fancy Dropdown JS -->
	<script src="<?php echo base_url('assets/admin/demo-1/dist/js/dropdown-bootstrap-extended.js')?>"></script>
	
	<!-- Init JavaScript -->
	<script src="<?php echo base_url('assets/admin/demo-1/dist/js/init.js')?>"></script>
	
	
</body>

</html>
