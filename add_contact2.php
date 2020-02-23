<?php 
	include "connect.php";
	session_start();
	if(isset($_GET["id"])){
		$id = $_GET["id"];
	}
?>
<?php
$sql7= mysqli_query($conn, "SELECT * FROM tbl_images WHERE tbl_images.profile_idr='".$_SESSION["uname"]."'");
$row7= mysqli_fetch_array($sql7);
mysqli_close($conn);?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>1Devs Inc. | Contacts</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/metro.css" rel="stylesheet" />
	<link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="loader.css" />
<link href="assets/css/style.css" rel="stylesheet" />
	<link href="assets/css/style_responsive.css" rel="stylesheet" />
	<link href="assets/css/style_default.css" rel="stylesheet" id="style_color" />
	<link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />

	<link rel="stylesheet" type="text/css" href="assets/chosen-bootstrap/chosen/chosen.css" />
	<link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
	<link rel="shortcut icon" href="assets/img/LOGO.png" />
	
	   <link rel="stylesheet" type="text/css" href="assets/gritter/css/jquery.gritter.css" />
   <link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
   <link rel="stylesheet" type="text/css" href="assets/chosen-bootstrap/chosen/chosen.css" />
      <link rel="stylesheet" type="text/css" href="assets/jquery-tags-input/jquery.tagsinput.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-timepicker/compiled/timepicker.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-colorpicker/css/colorpicker.css" />
   <link rel="stylesheet" href="assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
   <link rel="stylesheet" href="assets/data-tables/DT_bootstrap.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker.css" />
   <link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
   <link rel="stylesheet" type="text/css" href="scroll.css" />
	
</head>

<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
<div class="loader">
	<div class="preload">
			<div class="logo">
				1Devs<span style="color: red;"> Inc.</span>
			</div>
			<div class="loader-frame">
				<div class="loader1" id="loader1"></div>
				<div class="loader2" id="loader2"></div>
			</div>
		</div>	
</div>
	<!-- BEGIN HEADER -->
	<div class="header navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- BEGIN LOGO -->
				<a class="brand" href="index_1.php">
				<img src="assets/img/new logo.png" alt="logo" >
				</a>
				<!-- END LOGO -->
				<!-- BEGIN RESPONSIVE MENU TOGGLER -->
				<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
				<img src="assets/img/menu-toggler.png" alt="" />
				</a>          
				<!-- END RESPONSIVE MENU TOGGLER -->				
				<!-- BEGIN TOP NAVIGATION MENU -->					
				<ul class="nav pull-right">
				
				
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<li class="dropdown user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="data:image/jpeg;base64,<?php echo base64_encode($row7['name'] ) ?>" onerror="this.src='assets/img/avatar1.png'" height="21" width="21" class="img-thumnail" />
						<span class="username"><?=$_SESSION["uname"]?></span>
						<i class="icon-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							<li><a href="extra_profile.php"><i class="icon-user"></i> My Profile</a></li>

							<li><a href="index.html"><i class="icon-key"></i> Log Out</a></li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
				<!-- END TOP NAVIGATION MENU -->	
			</div>
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>
	<!-- END HEADER -->
	<!-- BEGIN CONTAINER -->
	<div class="page-container row-fluid">
		<!-- BEGIN SIDEBAR -->
		<div class="page-sidebar nav-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->        	
			<ul>
				<li>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone"></div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				<li>
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<form class="sidebar-search">
						<div class="input-box hide">
							<a href="javascript:;" class="remove"></a>
							<input type="text" placeholder="Search..." />				
							<input type="button" class="submit" value=" " />
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<li class="start ">
					<a href="index_1.php">
					<i class="icon-home"></i> 
					<span class="title">Dashboard</span>
					</a>
				</li>
				<li class="active has-sub">
					<a href="javascript:;">
					<i class="icon-folder-open"></i> 
					<span class="title start active">Sales</span>
					<span class="selected"></span>
					<span class="arrow "></span>
					</a>
					<ul class="sub">
						<li ><a href="accounts.php">Accounts</a></li>
						<li class="selected active"><a href="contacts.php">Contacts</a></li>
						<li ><a href="opportunities.php">Opportunities</a></li>
						<li ><a href="tasks.php">Tasks</a></li>
						<li ><a href="reportss.php">Reports</a></li>
					</ul>
				</li>
				<li class="has-sub ">
					<a href="javascript:;">
					<i class="icon-bar-chart"></i> 
					<span class="title">Marketing</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub">
			<li ><a href="campaign.php">Campaign</a></li>
						<li ><a href="members.php">Members</a></li>
						<li ><a href="tasks_marketing.php">Tasks</a></li>
						<li ><a href="reports.php">Reports</a></li>
					</ul>
				</li>
				
			
			
			
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
		<!-- END SIDEBAR -->
		<!-- BEGIN PAGE -->
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div id="portlet-config" class="modal hide">
				<div class="modal-header">
					<button data-dismiss="modal" class="close" type="button"></button>
					<h3>portlet Settings</h3>
				</div>
				<div class="modal-body">
					<p>Here will be a configuration form</p>
				</div>
			</div>
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN STYLE CUSTOMIZER -->
						  
						<!-- END BEGIN STYLE CUSTOMIZER -->
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							<i class="icon-user"></i>  Contacts
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index_1.php">Home</a> 
								<i class="icon-angle-right"></i>
							</li>
							<li><a href="contacts.php">Contacts</a>&nbsp;&nbsp;</li>
							<i class="icon-angle-right"></i>
							<li>&nbsp;&nbsp;<a href="#">Add Contact</a></li>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
						     <!-- BEGIN PAGE CONTENT-->
  
              
              
              <div class="row-fluid">
               <div class="span12">
                  <div class="portlet box red" >
                     <div class="portlet-title">
                        <h4 style="color: #fff">
                           <i class="icon-reorder"></i> Manage Contact
                        </h4>
                        <div class="tools hidden-phone">
                           <a href="javascript:;" class="collapse"></a>

                        </div>
                     </div>
                 
                     
                      
                     
                     <div class="portlet-body form">
                        <form action="save_contact.php?id=<?=$id?>" id="contacts_validate" method="post" class="form-horizontal">
              

                       <div  class="scrollspy-example"  >
                        <h3 id="scroll1" class="form-section">Details</h3>
			
                              <div class="control-group">
                              <label class="control-label" title="Optional">Salutation</label>
                              <div class="controls">
                                <select name="salutation" class="chosen span6 m-wrap" data-placeholder="Choose Salutation" tabindex="1">
                               		<option value="" selected="selected"></option>
                               		<option value="Mr">Mr</option>
                               		<option value="Mrs">Mrs</option>
                               		<option value="Miss">Miss</option>
                               		<option value="Ms">Ms</option>
                               		<option value="Dr">Dr</option>
                               		<option value="Herr">Herr</option>
                               		<option value="Frau">Frau</option>
                               		<option value="Fraulein">Fraulein</option>
                               		<option value="M">M</option>
                               		<option value="Monsieur">Monsieur</option>
                               		<option value="Madame">Madame</option>
                               		<option value="Mme">Mme</option>
                               		<option value="Signor">Signor</option>
                               		<option value="Signora">Signora</option>
                               		<option value="Professor">Professor</option>
                               	</select>
                              </div>
                           </div>
                   
                           <div class="control-group">
                              <label class="control-label" for="fname" title="Required">First<span class="required" title="Required">*</span></label>
                              <div class="controls">
                                 <input id="fname" placeholder=" " spellcheck="true" name="firstname" type="text" class="span6 m-wrap" minlength="2" maxlength="15" required>
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label" for="middle" title="Optional">Middle</label>
                              <div class="controls">
                                 <input spellcheck="true" name="middle" id="middle" maxlength="15" type="text" class="span6 m-wrap">
                              </div>
                           </div>
                            <div class="control-group">
                              <label class="control-label" for="last" title="Required">Last<span class="required" title="Required">*</span></label>
                              <div class="controls">
                                 <input name="lastname" id="last" minlength="2" spellcheck="true" maxlength="20" type="text" class="span6 m-wrap" required>
                              </div>
                           </div>
                           <h3 id="scroll2" class="form-section">Position</h3>
                           <div class="control-group">
                              <label class="control-label" for="job" title="Optional">Job Title</label>
                              <div class="controls">
                                 <input name="jobtitle" spellcheck="true"  maxlength="20" id="job" type="text" class="span6 m-wrap">
                              </div>
                           </div>
                           
                      
                           <div class="control-group">
                              <label class="control-label" for="dept" title="Optional">Department</label>
                              <div class="controls">
                                 <input name="department" spellcheck="true" maxlength="20" id="dept" type="text" class="span6 m-wrap">
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label" for="man" title="Optional">Manager</label>
                              <div class="controls">
                                 <input name="manager" spellcheck="true" maxlength="20" id="man" type="text" class="span6 m-wrap" />
                              </div>
                           </div>
                         
                                
                         
                                   <div class="control-group">
                              <label class="control-label" for="assistant" title="Optional">Assistant</label>
                              <div class="controls">
                                 <input name="assistant" id="assistant"  minlength="2" maxlength="20" type="text" class="span6 m-wrap">
                              </div>
                           </div>
                            
                                     
                                                  
                                       <div class="control-group">
                              <label class="control-label" for="dec" title="Can you decide for your company?" style="cursor: help">Decision Maker</label>
                              <div class="controls">
                                 <div class="danger-toggle-button">
                                    <input name="decision" id="dec" type="checkbox" class="toggle" checked="checked" />
                                 </div>
                    
                                 </div>
                              </div>
                                <div class="control-group">
                              <label class="control-label">Hold</label>
                              <div class="controls">
                                 <div class="danger-toggle-button">
                                    <input name="hold" type="checkbox" class="toggle" checked="checked" />
                                 </div>
                                    </div>
                              </div>
                    
                             
                        

                                 
                             
                              <h3 id="scroll3" class="form-section">Address</h3>
                              
                                <div class="control-group">
							   <label class="control-label" for="add" title="Optionally Required">Address Line</label>
                              <div class="controls">
                                 <textarea name="address" id="add" maxlength="50" spellcheck="true" class="col-lg-7 m-wrap span6"></textarea>
                              </div>
                           </div>
                         
                              <div class="control-group">
                              <label class="control-label" for="city" title="Optional">City</label>
                              <div class="controls">
                                 <input name="city" id="city" spellcheck="true" maxlength="20"type="text" class="span6 m-wrap">
                              </div>
                           </div>
                           
                                      
                                             
                                    <div class="control-group">
                              <label class="control-label" for="selectcountry" title="Optionally Required">Country</label>
                              <div class="controls">
                              <!--this part is not yet rspn-->
                             
                               <select  name="country" class="chosen span6 m-wrap" data-placeholder="Choose a Country" tabindex="-1" id="selectcountry" required>
									<option value="0"></option>
									<option value=""></option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Antigua">Antigua</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Brazil">Brazil</option><option value="Brunei">Brunei</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burma">Burma</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo">Congo</option><option value="Costa Rica">Costa Rica</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="French Guiana">French Guiana</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Greece">Greece</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guatemala">Guatemala</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Ivory Coast">Ivory Coast</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Korea, Republic of">Korea, Republic of</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Laos">Laos</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macau">Macau</option><option value="Macedonia">Macedonia</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mexico">Mexico</option><option value="Moldova">Moldova</option><option value="Monaco">Monaco</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Namibia">Namibia</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="Netherlands Antilles">Netherlands Antilles</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Nigeria">Nigeria</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines" selected="selected">Philippines</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Romania">Romania</option><option value="Russia">Russia</option><option value="Rwanda">Rwanda</option><option value="Saint Lucia">Saint Lucia</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia">Serbia</option><option value="Seychelles">Seychelles</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="South Africa">South Africa</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="St Kitts and Nevis">St Kitts and Nevis</option><option value="St Pierre and Miquelon">St Pierre and Miquelon</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syria">Syria</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Togo">Togo</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="United States of America">United States of America</option><option value="Unknown">Unknown</option><option value="Uruguay">Uruguay</option><option value="US Virgin Islands">US Virgin Islands</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Yemen">Yemen</option><option value="Yugoslavia">Yugoslavia</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option>
                       </select>
								  </div>
                              </div>
							
                                              <div class="control-group">
                              <label class="control-label" for="zip" title="Optional">Postcode/Zip</label>
                              <div class="controls">
                                 <input name="postcode" id="zip" minlength="4" maxlength="5" type="number" class="span6 m-wrap">
                              </div>
                           </div>  
                              
                           <h3 id="scroll4" class="form-section">Contact Details</h3>    
                         <div class="control-group">
                              <label class="control-label" for="phone" title="Phone Number">Phone</label>
                              <div class="controls">
                                 <input name="phone" id="phone" type="number"  minlength="7" maxlength="15" class="span6 m-wrap">
                              </div>
                           </div>
                             
                              <div class="control-group">
                              <label class="control-label" for="home" title="Home Number">Home</label>
                              <div class="controls">
                                 <input name="home" id="home" type="number"  minlength="7" maxlength="15" class="span6 m-wrap">
                              </div>
                           </div>
                            
                             <div class="control-group">
                              <label class="control-label" for="mobile" title="Optional">Mobile Number</label>
                              <div class="controls">
                                 <input name="mobile" id="mobile"  minlength="7" maxlength="15" type="number" class="span6 m-wrap" placeholder="e.g. (xxx-xxxx-xxxx)">
                              </div>
                           </div>
                             
                              <div class="control-group">
                              <label class="control-label" for="other" title="Optional">Other</label>
                              <div class="controls">
                                 <input name="other" id="other"  minlength="7" maxlength="15" type="number" class="span6 m-wrap">
                              </div>
                           </div>
                             
                              <div class="control-group">
                              <label class="control-label" for="email" title="Optionally Required">Email Address</label>
                              <div class="controls">
                                 <input name="email" id="email" type="email" class="span6 m-wrap" placeholder="e.g. juandelacruz@gmail.com">
                              </div>
                           </div>
                            
                             <div class="control-group">
                              <label class="control-label" for="skype" title="Optional">Skype ID</label>
                              <div class="controls">
                                 <input name="skype" id="skype" type="text" minlength="6" maxlength="30" class="span6 m-wrap">
                              </div>
                           </div>
                             
                             
                     
                                    
                                         
                                         
                                     
                                                
                                                            
                                                                                     
                                                                                                                                       
                                    <div class="control-group">
							   <label class="control-label" for="notes" title="Include your notes">Notes</label>
                              <div class="controls">
                                 <textarea name="notes" id="notes" spellcheck="true" class="col-lg-7 m-wrap span6"></textarea>
                              </div>
                           </div>
                                                             
                                                                                   
                                                  
							</div><!--end for scrollspy-->      
                                    
                                               
                                                                             
                                        <div class="form-actions clearfix">
                                <!--MAGLALAGAY BA AKO NG CANCEL BUTTON?-->
                                 <a href="contacts.php" class="btn button-previous">
                                 <i class="m-icon-swapleft"></i> Cancel 
                                 </a>
                               
                                 <input type="submit" value="Submit" name="save2" class="btn red button-next "><i class="m-icon-swapright m-icon-white"></i>
                              </div>                                                
                                                                                                                    
							
                                 </div><!--close for all-->
                                 	</div>
                              </div>
                            
						 </form>
                           </div>
						        
                     </div>
                  </div>
             
            </div>
            <!-- END PAGE CONTENT-->         
            <!-- END PAGE CONTENT-->  
							
							
							
							
				<!-- END PAGE CONTENT-->
			</div>
			<!-- END PAGE CONTAINER-->			
		</div>
		<!-- END PAGE -->	 	
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<div class="footer">
		2018 &copy; 1Devs Inc.
		<div class="span pull-right">
			<span class="go-top"><i class="icon-angle-up"></i></span>
		</div>
	</div>
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS -->
	<!-- Load javascripts at bottom, this will reduce page load time -->
	<script src="assets/js/jquery-1.8.3.min.js"></script>			
	<script src="assets/breakpoints/breakpoints.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/fancybox/source/jquery.fancybox.pack.js"></script>
	   <script src="assets/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
	<script src="assets/js/jquery.blockui.js"></script>
	<script src="assets/js/jquery.cookie.js"></script>
	<!-- ie8 fixes -->
	<!--[if lt IE 9]>
	<script src="assets/js/excanvas.js"></script>
	<script src="assets/js/respond.js"></script>
	<![endif]-->
	<script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>	
	
	<script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
	<script src="assets/js/app.js"></script>		
	  <script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
   <script type="text/javascript" src="assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script> 
   <script type="text/javascript" src="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
   <script type="text/javascript" src="assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
   <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
   <script type="text/javascript" src="assets/bootstrap-daterangepicker/date.js"></script>
   <script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script> 
   <script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>  
   <script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
   <script src="assets/js/app.js"></script>     
    <script type="text/javascript" src="assets/jquery-validation/dist/jquery.validate.min.js"></script>
   <script type="text/javascript" src="assets/jquery-validation/dist/additional-methods.min.js"></script>
	 <script>
$().ready(function() {
	$("#contacts_validate").validate();
});
</script> 
	
	<script>
		jQuery(document).ready(function() { 			
			// initiate layout and plugins
			App.init();
		});
	</script>
	<script>
$(window).load(function(){
	$(".loader").fadeOut();
})
</script>
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
