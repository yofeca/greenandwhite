<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?php echo $pageTitle; ?></title>
        <link rel="stylesheet" href="<?php echo base_url('media/css/bootstrap.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('media/css/cus.styles.css'); ?>">
        <?php
            //echo '@import url("'.base_url('media/css/bootstrap.css').'");'."\n";
            //echo '@import url("'.base_url('media/css/cus.styles.css').'");'."\n";
        ?>

        <script type="text/javascript" src="<?php echo base_url('media/js/jquery-2.0.3.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('media/js/bootstrap.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('media/js/cus-jq.js'); ?>"></script>
    </head>

    <body>
		
		<div id="wrap">
		
        <header>
            <div class="container hidden-sm hidden-xs">
                <div class="row">
                    <div class="col-sm-3 col-md-3 logo">
						<a href="<?php echo base_url('page/home'); ?>">
							<img src="<?php echo base_url('media/img/logo.png'); ?>" />
						</a>
                    </div>

                    <div class="col-sm-6 col-md-6">
                        <div class="input-group">
                            <input type="text" class="form-control input-sm search-box" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default btn-sm search-btn" type="button">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </span>
                        </div> 
                    </div>

                    <div class="col-sm-3 h-links">
                        <a href="" data-toggle="modal" data-target="#loginModal">Login</a>
                        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel">Login</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div id="contact-us-form">
                                            <form role="form">
                                                <div class="form-group">
                                                    <label for="username">Username:</label>
                                                    <input type="text" class="form-control" id="username" placeholder="Enter username...">
                                                </div>
                                                <div class="form-group">
                                                    <label for="password">Password:</label>
                                                    <input type="password" class="form-control" id="password" placeholder="Enter password...">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-success">Login</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="" data-toggle="modal" data-target="#contactUsModal">Contact Us</a>
                        <div class="modal fade" id="contactUsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel">Contact Us</h4>
                                    </div>
									<form role="form" action="<?php echo base_url('page/send_mail'); ?>" method="post">
										<div class="modal-body">
											<div class="form-group">
												<label for="contact-name">Name:</label>
												<input type="text" class="form-control" name="contact-name" placeholder="Enter name.">
											</div>
											<div class="form-group">
												<label for="contact-id-number">ID Number:</label>
												<input type="text" class="form-control" name="contact-id-number" placeholder="Enter School ID No.">
											</div>
											<div class="form-group">
												<label for="contact-email-add">Email:</label>
												<input type="email" class="form-control" name="contact-email-add" placeholder="Enter email.">
											</div>
											<div class="form-group">
												<label for="contact-message">Message:</label>
												<textarea class="form-control" rows="3" name="contact-message" placeholder="Enter message."></textarea>
											</div>
											<?php //echo $contact_us_form; ?>
										</div>
										<div class="modal-footer">
											<button type="submit" class="btn btn-success" id="submit-message">Submit</button>
                                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                    </div>
									</form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </header>

        <nav class="navbar navbar-inverse" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-links">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
					<a class="navbar-brand visible-xs img-responsive" href="<?php echo base_url('page/home'); ?>">
						<img src="<?php echo base_url('media/img/bran-logo.png'); ?>" />
					</a>
                </div>
                <div class="collapse navbar-collapse" id="nav-links">
                    <ul class="nav navbar-nav">
                        <!--<li class="<?php if(strtoupper($pageTitle) == "HOME" ) echo 'active'; ?>"><a href="<?php echo base_url('page/home'); ?>">Home</a></li>-->
                        <li class="<?php if(strtoupper($pageTitle) == "YEARBOOK REGISTRATION") echo 'active'; ?>"><a href="<?php echo base_url('page/yearbook_registration'); ?>">Yearbook Registration</a></li>
                        <li class="<?php if(strtoupper($pageTitle) == "PHOTO PACKAGES") echo 'active'; ?>"><a href="<?php echo base_url('page/photo_packages'); ?>">Photo Packages</a></li>
                        <li class="<?php if(strtoupper($pageTitle) == "PICTORIAL SCHEDULING") echo 'active'; ?>"><a href="<?php echo base_url('page/pictorial_scheduling'); ?>">Pictorial Scheduling</a></li>
                        <li class="<?php if(strtoupper($pageTitle) == "ON-LINE VERIFICATION") echo 'active'; ?>"><a href="<?php echo base_url('page/online_verification'); ?>">Online Verification</a></li>
                        <li class="<?php if(strtoupper($pageTitle) == "PHOTO & YEARBOOK DISTRIBUTION") echo 'active'; ?>"><a href="<?php echo base_url('page/photo_yearbook_distribution'); ?>">Photo & Yearbook Distribution</a></li>
                        <li class="<?php if(strtoupper($pageTitle) == "ABOUT US") echo 'active'; ?>"><a href="<?php echo base_url('page/about_us'); ?>">About Us</a></li>
                        <li class="<?php if(strtoupper($pageTitle) == "FAQ") echo 'active'; ?>"><a href="<?php echo base_url('page/faq'); ?>">FAQ</a></li>
                        <li class="<?php if(strtoupper($pageTitle) == "SPONSORS") echo 'active'; ?>"><a href="<?php echo base_url('page/sponsors'); ?>">Sponsors</a></li>
                    </ul>
                </div>
            </div>
        </nav>