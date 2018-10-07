<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="76x76" href="https://sywc.ieee.lk/images/favicon.png" />
	<link rel="icon" type="image/png" href="https://sywc.ieee.lk/images/favicon.png" />
	<title>Registration | IEEE SLSYWC 2018</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/paper-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />

	<!-- Fonts and Icons -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
	<link href="assets/css/themify-icons.css" rel="stylesheet">
	
			
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116916933-4"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-116916933-4');
  </script>
	
</head>

<body>
	<div class="image-container" style="background-image: url('assets/img/paper-1.jpeg')">
		
	    <!--  SLSYWC Branding   -->
	    <a href="http://sywc.ieee.lk">
	         <div class="logo-container">
	            <div class="logo">
	                <img src="assets/img/logo.png" width="28%" >
	            </div>
	           <!-- <div class="brand">
	               IEEE SLSYWC 2018
	            </div> -->
	        </div>
	    </a>

		<!--  Developed by Smart Valley  -->
	<!--	<a href="https:?//sywc.ieee.lk" class="made-with-pk">
			<div class="brand">SV</div>
			<div class="made-with">Powered <strong>by Smart Valley</strong></div>
		</a> -->

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">

		            <!--      Wizard container        -->
		            <div class="wizard-container">

		                <div class="card wizard-card" data-color="red" id="wizardProfile">
							  <!--        You can switch " data-color="orange" "  with one of the next bright colors: "blue", "green", "orange", "red", "azure"          -->
							
							
							
							
		                    <form action="engine/reg.php" method="post" enctype="multipart/form-data">
		              

		                    	<div class="wizard-header text-center">
		                        	<h3 class="wizard-title"><strong>IEEE SLSYWC 2018 Delegate Registration</strong></h3>
									<p class="category">This information will let us know more about you.</p>
		                    	</div>

								<div class="wizard-navigation">
									<div class="progress-with-circle">
									     <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="3" style="width: 21%;"></div>
									</div>
									<ul>
			                            <li>
											<a href="#about" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-user"></i>
												</div>
												About
											</a>
										</li>
			                           
			                            <li>
											<a href="#preferences" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-map"></i>
												</div>
												Preferences
											</a>
										</li>
										
										
										 <li>
											<a href="#account" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-settings"></i>
												</div>
												My IEEE
											</a>
										</li>
										
								<!--		  <li>
											<a href="#address" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-flag"></i>
												</div>
												Finish
											</a>
										</li> -->
			                        </ul>
								</div>
								
								
		                        <div class="tab-content">
		                            <div class="tab-pane" id="about">
		                            	<div class="row">
											<h5 class="info-text"> Please tell us more about yourself.</h5>
											<div class="col-sm-4 col-sm-offset-1">
												<div class="picture-container">
													<div class="picture">
														<img src="assets/img/default-avatar.jpg" class="picture-src" id="wizardPicturePreview" title="" />
														<input type="file" name="Filename" id="wizard-picture" required>
													</div>
													<h6>Choose Profile Picture</h6>
													<small>(Make sure to upload 4x4, < 1MB clear photo of you. Do not upload selfies.)</small>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>First Name <small>(required)</small></label>
													<input pattern="[A-Za-z]{3}" name="firstname" type="text" class="form-control" placeholder="John...">
												</div>
												<div class="form-group">
													<label>Last Name <small>(required)</small></label>
													<input pattern="[A-Za-z]{3}" name="lastname" type="text" class="form-control" placeholder="Smith..." >
												</div>
												<br>	<br>
											</div>
													
											
											<div class="col-sm-10 col-sm-offset-1">
												
												 <div class="form-group">
		                                            <label>Gender</label><br>
		                                            <select name="gender" class="form-control" required>
		                                                <option value="Male">Male </option>
		                                                <option value="Female"> Female </option>
		                                                
		                                            </select>
		                                        </div>
												
												<div class="form-group">
													<label>NIC Number <small>(required)</small></label>
													<input name="nic" type="text" class="form-control" placeholder="19941234567 or 941234567V" maxlength="11" required>
												</div>
												
													<div class="form-group">
		                                            <label>University / Institution</label>
		                                           <select name="university" class="form-control" required>
													   <option value="not selected">Select your university / institution </option>
		                                                <option value="UoP">University of Peradeniya (UoP) </option>
		                                                <option value="UoM"> University of Moratuwa (UoM) </option>
													   <option value="UCSC">University of Colombo School of Computing (UCSC) </option>
		                                                <option value="SLIIT">Sri Lanka Institute of Information Technology (SLIIT) </option>
													     <option value="UoR"> University of Ruhuna (UoR) </option>
													   <option value="UWU">Uva Wellassa University (UWU)</option>
													   
													   <option value="IIT">Informatics Institute of Technology (IIT)</option>
													      <option value="WUSL"> Wayamba University of Sri Lanka (WUSL) </option>
													  
		                                                <option value="KDU"> General Sir John Kotelawala Defence University (KDU) </option>
													   <option value="SUSL">Sabaragamuwa University of Sri Lanka (SUSL) </option>
		                                                <option value="OUSL"> Open University of Sri Lanka (OUSL) </option>
													  
		                                                <option value="UoK">University of Kelaniya (UoK) </option>
													    <option value="NSBM"> National School of Business Management (NSBM) </option>
		                                                <option value="USJP"> University of Sri Jayawardenapura (USJP) </option>
													   
													 <option value="SLTC">Sri Lanka Technological Campus (SLTC)</option>
													  
													   <option value="RUSL">Rajarata University of Sri Lanka (RUSL) </option>
		                      
													    <option value="VCUJ"> Vavuniya Campus of the University of Jaffna (VCUJ) </option>
													    <option value="UNIVOTEC"> University of Vocational Technology (UNIVOTEC) </option>
		                                                
													   <option value="UoJ"> University of Jaffna (UoJ) </option>
													  
													    <option value="Other"> Other </option>
													   
		                                            </select>
		                                        </div>
												
												<div class="form-group">
													<label>Email <small>(required)</small></label>
													<input name="email" type="email" class="form-control" placeholder="delegate@ieee.org">
												</div>
												
												<div class="form-group">
													<label>Phone Number <small>(required)</small></label>
													<input name="phone" type="text" class="form-control" placeholder="0711234567" maxlength="10" required>
												</div>
											
											</div>
											
											
											
										</div>
		                            </div>
										
									
						  <div class="tab-pane" id="preferences">
		                                <div class="row">
		                                    <div class="col-sm-12">
		                                        <h5 class="info-text"> Preferences </h5>
		                                    </div>
		                                    <div class="col-sm-5 col-sm-offset-1">
		                                    	  <div class="form-group">
		                                            <label>Food Preferences</label><br>
		                                            <select name="food" class="form-control">
		                                                <option value="Non-Veg"> Non-Veg </option>
		                                                <option value="Veg"> Veg </option>
		                                                
		                                            </select>
		                                        </div>
		                                    </div>
											
											
		                                    <div class="col-sm-5">
												
		                                         <div class="form-group">
		                                            <label>T-Shirt Size </label>  
													 <small><a href="../resources/chart.png" target="_blank">( <i class="fa fa-external-link"> </i> View Chart ) </a></small>
													 
													 <br>
		                                            <select name="tshirt" class="form-control">
														<option value="xxs"> XXS </option>
		                                                <option value="xs"> XS </option>
		                                                <option value="s"> S </option>
														<option value="m"> M </option>
														<option value="l"> L </option>
		                                                <option value="xl"> XL </option>
													    <option value="xxl"> XXL </option>
		                                            </select>
		                                        </div>
										
		                                    </div>
											
										  <div class="col-sm-5 col-sm-offset-1">
		                                    	  <div class="form-group">
		                                            <label>Your Smart Phone's OS type</label><br>
		                                            <select name="os" class="form-control">
		                                                <option value="Android"> Android </option>
		                                                <option value="IOS"> IOS </option>
														<option value="Windows"> Windows </option>
														<option value="Others"> Other  </option>
														<option value="Generic"> Generic Phone (Not a Smart Phone)  </option>
		                                                
		                                            </select>
		                                        </div>
		                                    </div>
											
											
		                                </div>
		                            </div>
									
							
		                            <div class="tab-pane" id="account">
										
										
										
		                            	<div class="row">
											
											 <div class="col-sm-8 col-sm-offset-2">
											<h5 class="info-text">Your IEEE Information</h5>
										
											<div class="col-sm-12">
												
												<div>
												
													<label>Are you an IEEE Member <small>(required)</small></label>
													
													<select class="form-control" name="membership" required>
													<option>Yes</option>
													<option>No</option>
													
													</select>
												</div>
													
												<br>
													
												<div class="form-group">
													<label>IEEE Membership ID <small>(*If Yes)</small></label>
													<input name="ieeeID" type="text" class="form-control" placeholder="9452125" maxlength="8">
												</div>
												
											</div>
									
										</div>
		                            
										
											</div>
		
		                              
		                                <div class="row">
		                                    <div class="col-sm-8 col-sm-offset-2">
												<div class="form-group">
												 <h5 class="info-text"> If Yes, Your IEEE Category <small>(*Optional)</small></h5>
		                                        <div class="col-sm-4">
		                                            <div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="radio" name="track" value="Student">
		                                                <div class="card card-checkboxes card-hover-effect">
		                                                    <i class="ti-pencil-alt"></i>
															<p>Student</p>
		                                                </div>
		                                            </div>
		                                        </div>
		                                        <div class="col-sm-4">
		                                            <div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="radio" name="track" value="YP">
		                                                <div class="card card-checkboxes card-hover-effect">
		                                                    <i class="ti-pencil-alt"></i>
															<p>Young Professional</p>
		                                                </div>
		                                            </div>
		                                        </div>
		                                        <div class="col-sm-4">
		                                            <div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="radio" name="track" value="WIE">
		                                                <div class="card card-checkboxes card-hover-effect">
		                                                    <i class="ti-pencil-alt"></i>
															<p><b>WIE</b></p>
		                                                </div>
		                                            </div>
		                                        </div>
												</div>
						
		                                    </div>
											
											  <div class="col-sm-8 col-sm-offset-2">
										<div class="form-group">
													<label>If yes, How long have you been in IEEE(years)? <small>(*Optional)</small></label>
													<input name="ieeeTime" type="number" class="form-control" placeholder="Ex: 1" maxlength="2">
												</div>
											</div>
									
											  <div class="col-sm-8 col-sm-offset-2">
		                                        <div class="form-group">
		                                            <label>What are your IEEE Experiences?
</label>
		                                            <textarea class="form-control" rows="5" name="ieeeExperience" id="" placeholder="Describe in your words... (Word limit: 2000)" maxlength="2000"></textarea>
		                                        </div>
		                                    </div>
											
										  <div class="col-sm-8 col-sm-offset-2">
		                                         <div class="form-group">
		                                            <label>Have you ever participated IEEE SLSYW Congress?</label><br>
		                                            <select name="slsywcParticipation" class="form-control">
		                                                <option value="yes"> Yes </option>
		                                                <option value="no"> No </option>
		                                            </select>
		                                        </div>
		                                    </div>
											
											   <div class="row">
		                                    <div class="col-sm-8 col-sm-offset-2">
												  <h5 class="info-text"> If yes, in which year(s)? </h5>
		                                        <div class="col-sm-4">
		                                            <div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="radio" name="slsywcYears" value="2017">
		                                                <div class="card card-checkboxes card-hover-effect">
		                                                    <i class="ti-pin"></i>
															<p>2017</p>
		                                                </div>
		                                            </div>
		                                        </div>
		                                        <div class="col-sm-4">
		                                            <div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="radio" name="slsywcYears" value="2016">
		                                                <div class="card card-checkboxes card-hover-effect">
		                                                    <i class="ti-pin"></i>
															<p>2016</p>
		                                                </div>
		                                            </div>
		                                        </div>
		                                        <div class="col-sm-4">
		                                            <div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="radio" name="slsywcYears" value="2015">
		                                                <div class="card card-checkboxes card-hover-effect">
		                                                    <i class="ti-pin"></i>
															<p><b>2015</b></p>
		                                                </div>
		                                            </div>
		                                        </div>
												 <div class="col-sm-4">
		                                            <div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="radio" name="slsywcYears" value="2014">
		                                                <div class="card card-checkboxes card-hover-effect">
		                                                    <i class="ti-pin"></i>
															<p><b>2014</b></p>
		                                                </div>
		                                            </div>
		                                        </div>
												 <div class="col-sm-4">
		                                            <div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="radio" name="slsywcYears" value="2013">
		                                                <div class="card card-checkboxes card-hover-effect">
		                                                    <i class="ti-pin"></i>
															<p><b>2013</b></p>
		                                                </div>
		                                            </div>
		                                        </div>
												 <div class="col-sm-4">
		                                            <div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="radio" name="slsywcYears" value="2012">
		                                                <div class="card card-checkboxes card-hover-effect">
		                                                    <i class="ti-pin"></i>
															<p><b>2012</b></p>
		                                                </div>
		                                            </div>
		                                        </div>
									
												
		                                    </div>
		                                </div>
											
											  <div class="col-sm-8 col-sm-offset-2">
		                                        <div class="form-group">
		                                            <label>What do you expect to gain from this year’s congress 2018?</label>
		                                            <textarea class="form-control" rows="5" name="feedback" id="" placeholder="What's on your mind..? (word Limit: 2000)" maxlength="2000"></textarea>
		                                        </div>
		                                    </div>
		                                  
											
											
											
							
											<div class="col-sm-8 col-sm-offset-2">
											  <div class="checkbox">
												  <label>
													  <input type="checkbox" name="optionsCheckboxes" required>
													  <b>By submitting my information, I agree to the terms & conditions of IEEE SLSYWC.</b>
												  </label>
												 
											  </div>
										  </div>
									
											
											
											
		                                </div>
										
										
										
										
										
		                            </div>
									
									

									
		                        </div>
								
								
		                        <div class="wizard-footer">
		                            <div class="pull-right">
		                                <input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' value='Next' />
		                                <input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd' name='finish' value='Finish' />
		                            </div>

		                            <div class="pull-left">
		                                <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Previous' />
										
										
										
										
		                            </div>
		                            <div class="clearfix"></div>
		                        </div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	    	</div><!-- end row -->
		</div> <!--  big container -->

	    <div class="footer">
	        <div class="container text-center">
				Copyright © 2018 IEEE SLSYWC. All Rights Reserved. | Powered in <a href="https://smartvalley.lk" target="_blank">Smart Valley</a>
	            
	        </div>
	    </div>
	</div>

	<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
     attribution=setup_tool
     page_id="1531952543714674"
     theme_color="#ee163a"
     align="left"
     logged_in_greeting="Hello, ask us anything! We will assist you."
     logged_out_greeting="Hello, ask us anything! We will assist you.">
</div>


<!-- Facebook SDK -->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1&appId=1127666494054743&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>	
		
</body>

	<!--   Core JS Files   -->
	<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="assets/js/paper-bootstrap-wizard.js" type="text/javascript"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="assets/js/jquery.validate.min.js" type="text/javascript"></script>

</html>
