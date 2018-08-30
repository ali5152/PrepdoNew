@include('educator/header')

			<!-- start page content -->

            <div class="page-content-wrapper">

                <div class="page-content">

                    <div class="page-bar">

                        <div class="page-title-breadcrumb">

                            <div class=" pull-left">

                                <div class="page-title">Student Invoice</div>

                            </div>

                            <ol class="breadcrumb page-breadcrumb pull-right">

                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{ url('/EducatorDashboard') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>

                                <li><a class="parent-item" href="#">Fees</a>&nbsp;<i class="fa fa-angle-right"></i>

                                </li>

                                <li class="active">Invoice</li>

                            </ol>

                        </div>

                    </div>

	                   <div class="row">

	                    <div class="col-md-12">

	                        <div class="white-box">

	                            <h3><b>INVOICE</b> <span class="pull-right">#345766</span></h3>

	                            <hr>

	                            <div class="row">

	                                <div class="col-md-12">

										<div class="pull-left">

											<address>

												<img src="assets/img/invoice_logo.png" alt="logo" class="logo-default" />

												<p class="text-muted m-l-5">

													Aditya University, <br> Opp. Town Hall, <br>

													Sardar Patel Road, <br> Ahmedabad - 380015

												</p>

											</address>

										</div>

										<div class="pull-right text-right">

											<address>

												<p class="addr-font-h3">To,</p>

												<p class="font-bold addr-font-h4">Jayesh Patel</p>

												<p class="text-muted m-l-30">

													207, Prem Sagar Appt., <br> Near Income Tax Office, <br>

													Ashram Road, <br> Ahmedabad - 380057

												</p>

												<p class="m-t-30">

													<b>Invoice Date :</b> <i class="fa fa-calendar"></i> 14th

													July 2017

												</p>

												<p>

													<b>Course  :</b> Engineering

												</p>

											</address>

										</div>

									</div>

	                                <div class="col-md-12">

	                                    <div class="table-responsive m-t-40">

	                                        <table class="table table-hover">

	                                            <thead>

	                                                <tr>

	                                                    <th class="text-center">#</th>

	                                                    <th class="text-right">Fees Type</th>

	                                                    <th class="text-right">Frequency</th>

	                                                    <th class="text-right">Date</th>

	                                                    <th class="text-right">Invoice number</th>

	                                                    <th class="text-right">Amount</th>

	                                                </tr>

	                                            </thead>

	                                            <tbody>

	                                                <tr>

	                                                    <td class="text-center">1</td>

	                                                    <td class="text-right">Annual Fees</td>

	                                                    <td class="text-right">Yearly</td>

	                                                    <td class="text-right">2016-11-19</td>

	                                                    <td class="text-right">#IN-345609865</td>

	                                                    <td class="text-right">$100</td>

	                                                </tr>

	                                                <tr>

	                                                    <td class="text-center">2</td>

	                                                    <td class="text-right">Tuition Fees</td>

	                                                    <td class="text-right">Monthly</td>

	                                                    <td class="text-right">2016-11-19</td>

	                                                    <td class="text-right">#IN-345604565</td>

	                                                    <td class="text-right">$50</td>

	                                                </tr>

	                                            </tbody>

	                                        </table>

	                                    </div>

	                                </div>

	                                <div class="col-md-12">

	                                    <div class="pull-right m-t-30 text-right">

	                                        <p>Sub - Total amount: $150</p>

	                                        <p>Discount : $10 </p>

	                                        <p>Tax (10%) : $14 </p>

	                                        <hr>

	                                        <h3><b>Total :</b> $164</h3> </div>

	                                    <div class="clearfix"></div>

	                                    <hr>

	                                    <div class="text-right">

	                                        <button class="btn btn-danger" type="submit"> Proceed to payment </button>

	                                        <button onclick="javascript:window.print();" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>

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