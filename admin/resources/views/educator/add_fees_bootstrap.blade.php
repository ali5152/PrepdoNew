@include('educator/header')

			<!-- start page content -->

            <div class="page-content-wrapper">

                <div class="page-content">

                    <div class="page-bar">

                        <div class="page-title-breadcrumb">

                            <div class=" pull-left">

                                <div class="page-title">Add Fees</div>

                            </div>

                            <ol class="breadcrumb page-breadcrumb pull-right">

                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{ url('/EducatorDashboard') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>

                                </li>

                                <li><a class="parent-item" href="#">Fees</a>&nbsp;<i class="fa fa-angle-right"></i>

                                </li>

                                <li class="active">Add Fees</li>

                            </ol>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-12 col-sm-12">

                            <div class="card card-box">

                                <div class="card-head">

                                    <header>Add Fees</header>

                                     <button id = "panel-button" 

				                           class = "mdl-button mdl-js-button mdl-button--icon pull-right" 

				                           data-upgraded = ",MaterialButton">

				                           <i class = "material-icons">more_vert</i>

				                        </button>

				                        <ul class = "mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"

				                           data-mdl-for = "panel-button">

				                           <li class = "mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>

				                           <li class = "mdl-menu__item"><i class="material-icons">print</i>Another action</li>

				                           <li class = "mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>

				                        </ul>

                                </div>

                                <div class="card-body" id="bar-parent">

                                    <form class="form-horizontal">

                                        <div class="form-body">

                                            <div class="form-group row">

                                                <label class="control-label col-md-3">Roll No

                                                    <span class="required"> * </span>

                                                </label>

                                                <div class="col-md-5">

                                                    <input type="text" name="rollno" data-required="1" placeholder="enter roll number" class="form-control input-height" /> </div>

                                            </div>

                                            <div class="form-group row">

                                                <label class="control-label col-md-3">Student Name

                                                    <span class="required"> * </span>

                                                </label>

                                                <div class="col-md-5">

                                                    <input type="text" name="stdName" data-required="1" placeholder="enter student name" class="form-control input-height" /> </div>

                                            </div>

                                            <div class="form-group row">

                                                <label class="control-label col-md-3">Department/Class

                                                    <span class="required"> * </span>

                                                </label>

                                                <div class="col-md-5">

                                                    <select class="form-control input-height" name="select">

                                                        <option value="">Select...</option>

                                                        <option value="Category 1">Mathematics</option>

                                                        <option value="Category 2">Engineering</option>

                                                        <option value="Category 3">Science</option>

                                                        <option value="Category 3">M.B.A.</option>

                                                        <option value="Category 3">Music</option>

                                                    </select>

                                                </div>

                                            </div>

                                            <div class="form-group row">

                                                <label class="control-label col-md-3">Fees Type

                                                    <span class="required"> * </span>

                                                </label>

                                                <div class="col-md-5">

                                                    <select class="form-control input-height" name="selectType">

                                                        <option value="">Select...</option>

                                                        <option value="Category 1">Annual</option>

                                                        <option value="Category 2">Tuition</option>

                                                        <option value="Category 3">Transport</option>

                                                        <option value="Category 3">Exam</option>

                                                        <option value="Category 3">Library</option>

                                                    </select>

                                                </div>

                                            </div>

                                             <div class="form-group row">

                                            <label class="control-label col-md-3">Payment Duration 

                                                </label>

                                                <div class="col-md-5">

                                                <div class="form-check">

											      <label class="form-check-label">

											        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>

											        Monthly

											      </label>

											    </div>

											    <div class="form-check">

											    <label class="form-check-label">

											        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">

											        Session

											      </label>

											    </div>

											    <div class="form-check">

											    <label class="form-check-label">

											        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option2">

											        Yearly

											      </label>

											    </div>

												</div>

                                            </div>

                                            <div class="form-group row">

                                                <label class="control-label col-md-3">Amount

                                                    <span class="required"> * </span>

                                                </label>

                                                <div class="col-md-5">

                                                    <input name="number" type="text" placeholder="enter amount" class="form-control input-height" /> </div>

                                            </div>

                                            <div class="form-group row">

                                                <label class="control-label col-md-3">Collection Date 

                                                </label>

                                                <div class="col-md-5">

                                                    <div class="input-group date form_date " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">

		                                                <input class="form-control input-height" size="16" placeholder="collection date" type="text" value="">

		                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>

		                                            </div>

                                            		<input type="hidden" id="dtp_input2" value="" />

                                                </div>

                                            </div>

                                            <div class="form-group row">

                                                <label class="control-label col-md-3">Payment Method

                                                    <span class="required"> * </span>

                                                </label>

                                                <div class="col-md-5">

                                                    <select class="form-control input-height" name="select">

                                                        <option value="">Select...</option>

                                                        <option value="Category 1">Cash</option>

                                                        <option value="Category 2">Cheque</option>

                                                        <option value="Category 3">Credit Card</option>

                                                        <option value="Category 4">Debit Card</option>

                                                        <option value="Category 5">Netbanking</option>

                                                        <option value="Category 6">Other</option>

                                                    </select>

                                                </div>

                                            </div>

                                            <div class="form-group row">

                                                <label class="control-label col-md-3">Payment Reference Number

                                                    <span class="required"> * </span>

                                                </label>

                                                <div class="col-md-5">

                                                    <input name="number" type="text" placeholder="enter reference amount" class="form-control input-height" /> </div>

                                            </div>

                                            <div class="form-group row">

                                                <label class="control-label col-md-3">Payment Status

                                                    <span class="required"> * </span>

                                                </label>

                                                <div class="col-md-5">

                                                    <select class="form-control input-height" name="select">

                                                        <option value="">Select...</option>

                                                        <option value="Category 1">Paid</option>

                                                        <option value="Category 2">Unpaid</option>

                                                        <option value="Category 3">Pending</option>

                                                    </select>

                                                </div>

                                            </div>

                                            <div class="form-group row">

                                                <label class="control-label col-md-3">Payment Details

                                                </label>

                                                <div class="col-md-5">

                                                    <textarea name="details" placeholder="payment details" class="form-control-textarea" rows="5" ></textarea>

                                                </div>

                                            </div>

										</div>

                                        <div class="form-actions">

                                            <div class="row">

                                                <div class="offset-md-3 col-md-9">

                                                    <button type="submit" class="btn btn-info">Submit</button>

                                                    <button type="button" class="btn btn-default">Cancel</button>

                                                </div>

                                            	</div>

                                        	</div>

                                    </form>

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

                            <a href="#quick_sidebar_tab_1" class="nav-link active tab-icon"  data-toggle="tab"> <i class="material-icons">chat</i>Chat

                                    <span class="badge badge-danger">4</span>

                                </a>

                        </li>

                        <li class="nav-item">

                            <a href="#quick_sidebar_tab_3" class="nav-link tab-icon"  data-toggle="tab"> <i class="material-icons">settings</i> Settings

                            </a>

                        </li>

                    </ul>

                    <div class="tab-content">

                        <!-- Start User Chat --> 

 						<div class="tab-pane active chat-sidebar-chat in active show" role="tabpanel" id="quick_sidebar_tab_1">

                        	<div class="chat-sidebar-list">

	                            <div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd" data-wrapper-class="chat-sidebar-list">

	                                <div class="chat-header"><h5 class="list-heading">Online</h5></div>

	                                <ul class="media-list list-items">

	                                    <li class="media"><img class="media-object" src="assets/img/prof/prof3.jpg" width="35" height="35" alt="...">

	                                        <i class="online dot"></i>

	                                        <div class="media-body">

	                                            <h5 class="media-heading">John Deo</h5>

	                                            <div class="media-heading-sub">Spine Surgeon</div>

	                                        </div>

	                                    </li>

	                                    <li class="media">

	                                        <div class="media-status">

	                                            <span class="badge badge-success">5</span>

	                                        </div> <img class="media-object" src="assets/img/prof/prof1.jpg" width="35" height="35" alt="...">

	                                        <i class="busy dot"></i>

	                                        <div class="media-body">

	                                            <h5 class="media-heading">Rajesh</h5>

	                                            <div class="media-heading-sub">Director</div>

	                                        </div>

	                                    </li>

	                                    <li class="media"><img class="media-object" src="assets/img/prof/prof5.jpg" width="35" height="35" alt="...">

	                                        <i class="away dot"></i>

	                                        <div class="media-body">

	                                            <h5 class="media-heading">Jacob Ryan</h5>

	                                            <div class="media-heading-sub">Ortho Surgeon</div>

	                                        </div>

	                                    </li>

	                                    <li class="media">

	                                        <div class="media-status">

	                                            <span class="badge badge-danger">8</span>

	                                        </div> <img class="media-object" src="assets/img/prof/prof4.jpg" width="35" height="35" alt="...">

	                                        <i class="online dot"></i>

	                                        <div class="media-body">

	                                            <h5 class="media-heading">Kehn Anderson</h5>

	                                            <div class="media-heading-sub">CEO</div>

	                                        </div>

	                                    </li>

	                                    <li class="media"><img class="media-object" src="assets/img/prof/prof2.jpg" width="35" height="35" alt="...">

	                                        <i class="busy dot"></i>

	                                        <div class="media-body">

	                                            <h5 class="media-heading">Sarah Smith</h5>

	                                            <div class="media-heading-sub">Anaesthetics</div>

	                                        </div>

	                                    </li>

	                                    <li class="media"><img class="media-object" src="assets/img/prof/prof7.jpg" width="35" height="35" alt="...">

	                                        <i class="online dot"></i>

	                                        <div class="media-body">

	                                            <h5 class="media-heading">Vlad Cardella</h5>

	                                            <div class="media-heading-sub">Cardiologist</div>

	                                        </div>

	                                    </li>

	                                </ul>

	                                <div class="chat-header"><h5 class="list-heading">Offline</h5></div>

	                                <ul class="media-list list-items">

	                                    <li class="media">

	                                        <div class="media-status">

	                                            <span class="badge badge-warning">4</span>

	                                        </div> <img class="media-object" src="assets/img/prof/prof6.jpg" width="35" height="35" alt="...">

	                                        <i class="offline dot"></i>

	                                        <div class="media-body">

	                                            <h5 class="media-heading">Jennifer Maklen</h5>

	                                            <div class="media-heading-sub">Nurse</div>

	                                            <div class="media-heading-small">Last seen 01:20 AM</div>

	                                        </div>

	                                    </li>

	                                    <li class="media"><img class="media-object" src="assets/img/prof/prof8.jpg" width="35" height="35" alt="...">

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

	                                        </div> <img class="media-object" src="assets/img/prof/prof9.jpg" width="35" height="35" alt="...">

	                                        <i class="offline dot"></i>

	                                        <div class="media-body">

	                                            <h5 class="media-heading">Jeff Adam</h5>

	                                            <div class="media-heading-sub">Compounder</div>

	                                            <div class="media-heading-small">Last seen 3:31 PM</div>

	                                        </div>

	                                    </li>

	                                    <li class="media"><img class="media-object" src="assets/img/prof/prof10.jpg" width="35" height="35" alt="...">

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

                                            <img class="avatar" alt="" src="assets/img/dp.jpg" />

                                            <div class="message">

                                                <span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a> <span class="datetime">9:10</span>

                                                <span class="body-out"> could you send me menu icons ? </span>

                                            </div>

                                        </div>

                                        <div class="post in">

                                            <img class="avatar" alt="" src="assets/img/prof/prof5.jpg" />

                                            <div class="message">

                                                <span class="arrow"></span> <a href="javascript:;" class="name">Jacob Ryan</a> <span class="datetime">9:10</span>

                                                <span class="body"> please give me 10 minutes. </span>

                                            </div>

                                        </div>

                                        <div class="post out">

                                            <img class="avatar" alt="" src="assets/img/dp.jpg" />

                                            <div class="message">

                                                <span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a> <span class="datetime">9:11</span>

                                                <span class="body-out"> ok fine :) </span>

                                            </div>

                                        </div>

                                        <div class="post in">

                                            <img class="avatar" alt="" src="assets/img/prof/prof5.jpg" />

                                            <div class="message">

                                                <span class="arrow"></span> <a href="javascript:;" class="name">Jacob Ryan</a> <span class="datetime">9:22</span>

                                                <span class="body">Sorry for

													the delay. i sent mail to you. let me know if it is ok or not.</span>

                                            </div>

                                        </div>

                                        <div class="post out">

                                            <img class="avatar" alt="" src="assets/img/dp.jpg" />

                                            <div class="message">

                                                <span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a> <span class="datetime">9:26</span>

                                                <span class="body-out"> it is perfect! :) </span>

                                            </div>

                                        </div>

                                        <div class="post out">

                                            <img class="avatar" alt="" src="assets/img/dp.jpg" />

                                            <div class="message">

                                                <span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a> <span class="datetime">9:26</span>

                                                <span class="body-out"> Great! Thanks. </span>

                                            </div>

                                        </div>

                                        <div class="post in">

                                            <img class="avatar" alt="" src="assets/img/prof/prof5.jpg" />

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

                                <div class="chat-header"><h5 class="list-heading">Layout Settings</h5></div>

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

									<div class="chat-header"><h5 class="list-heading">Account Settings</h5></div>

									<div class="settings-list">

					                    <div class="setting-item">

					                        <div class="setting-text">Notifications</div>

					                        <div class="setting-set">

					                            <div class="switch">

					                                <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 

									                  for = "switch-1">

									                  <input type = "checkbox" id = "switch-1" 

									                     class = "mdl-switch__input" checked>

									               	</label>

					                            </div>

					                        </div>

					                    </div>

					                    <div class="setting-item">

					                        <div class="setting-text">Show Online</div>

					                        <div class="setting-set">

					                            <div class="switch">

					                                <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 

									                  for = "switch-7">

									                  <input type = "checkbox" id = "switch-7" 

									                     class = "mdl-switch__input" checked>

									               	</label>

					                            </div>

					                        </div>

					                    </div>

					                    <div class="setting-item">

					                        <div class="setting-text">Status</div>

					                        <div class="setting-set">

					                            <div class="switch">

					                                <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 

									                  for = "switch-2">

									                  <input type = "checkbox" id = "switch-2" 

									                     class = "mdl-switch__input" checked>

									               	</label>

					                            </div>

					                        </div>

					                    </div>

					                    <div class="setting-item">

					                        <div class="setting-text">2 Steps Verification</div>

					                        <div class="setting-set">

					                            <div class="switch">

					                                <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 

									                  for = "switch-3">

									                  <input type = "checkbox" id = "switch-3" 

									                     class = "mdl-switch__input" checked>

									               	</label>

					                            </div>

					                        </div>

					                    </div>

					                </div>

                                    <div class="chat-header"><h5 class="list-heading">General Settings</h5></div>

                                    <div class="settings-list">

					                    <div class="setting-item">

					                        <div class="setting-text">Location</div>

					                        <div class="setting-set">

					                            <div class="switch">

					                                <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 

									                  for = "switch-4">

									                  <input type = "checkbox" id = "switch-4" 

									                     class = "mdl-switch__input" checked>

									               	</label>

					                            </div>

					                        </div>

					                    </div>

					                    <div class="setting-item">

					                        <div class="setting-text">Save Histry</div>

					                        <div class="setting-set">

					                            <div class="switch">

					                                <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 

									                  for = "switch-5">

									                  <input type = "checkbox" id = "switch-5" 

									                     class = "mdl-switch__input" checked>

									               	</label>

					                            </div>

					                        </div>

					                    </div>

					                    <div class="setting-item">

					                        <div class="setting-text">Auto Updates</div>

					                        <div class="setting-set">

					                            <div class="switch">

					                                <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 

									                  for = "switch-6">

									                  <input type = "checkbox" id = "switch-6" 

									                     class = "mdl-switch__input" checked>

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

   @include('educator/footer')