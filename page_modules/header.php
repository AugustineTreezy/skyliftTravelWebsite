<header id="header" class="navbar-static-top">
            <div class="topnav hidden-xs">
                <div class="container">
                    <ul class="quick-menu pull-left">
                        <?php
                         if (!isset($_SESSION["userData"])) { 
                            ?>
                            <li><a href="#travelo-login" class="soap-popupbox">My Account</a></li>
                            <?php

                         }else{
                            ?>
                             <li><a href="my-account.php" >My Account</a></li>

                            <?php
                         }

                        ?>
                        
                        
                    </ul>
                    
                        <?php
                          if (!isset($_SESSION["userData"])) { 
                            ?>
                            <ul class="quick-menu pull-right">
                             <li><a href="#travelo-login" class="soap-popupbox">LOGIN</a></li>
                             <li><a href="#travelo-signup" class="soap-popupbox">SIGNUP</a></li>
                             </ul>
                            
                            <?php                      

                                }else{
                                    $userData=$_SESSION["userData"];
                                    $output = ' ' . $userData["first_name"].' '.$userData['last_name'];
                                    // echo $output;
                                    ?>
                                    <ul class="quick-menu pull-right">
                                        <li class="ribbon">
                                            <a href="#"><?php echo $output;?></a>
                                            <ul class="menu mini uppercase">
                                                <li><a href="my-account.php#dashboard" class="location-reload">Dashboard</a></li>
                                                <li><a href="my-account.php#profile" class="location-reload">Profile</a></li>
                                                <li><a href="my-account.php#settings" class="location-reload">settings</a></li>
                                                <li><a href="logout.php">signout</a></li>
                                            </ul>
                                        </li>                        
                                    </ul>
                                    <?php
                                }

                        ?>                                                
                    
                </div>
            </div>
            
            <div class="main-header">
                
                <a href="#mobile-menu-01" data-toggle="collapse" class="mobile-menu-toggle">
                    Mobile Menu Toggle
                </a>

                <div class="container">
                    <h1 class="logo navbar-brand">
                        <a href="index.php" title="skylift - home">
                            <img src="images/logo/logo.png"  alt="skylift World Travel" />
                        </a>
                    </h1>

                    <nav id="main-menu" role="navigation">
                        <ul class="menu">
                            <li class="menu-item-has-children">
                                <a href="index.php">Home</a>
                                
                            </li>
                            <li class="menu-item-has-children">
                                <a href="hotel-index.php">Hotels</a>                                
                            </li>
                            <li class="menu-item-has-children">
                                <a href="flight-index.php">Flights</a>
                                
                            </li>
                            <li class="menu-item-has-children">
                                <a href="car-index.php">Cars</a>
                                
                            </li>
                            <li class="menu-item-has-children">
                                <a href="tour-index.php">Tours</a>
                                
                            </li>
                           <li class="menu-item-has-children">
                                <a href="contact-us.php">Contact us</a>
                                
                            </li>
                            <li class="menu-item-has-children">
                                <a href="about-us.php">About us</a>
                                
                            </li>
                            
                        </ul>
                    </nav>
                </div>
                
                <nav id="mobile-menu-01" class="mobile-menu collapse">
                    <ul id="mobile-primary-menu" class="menu">
                        <li class="menu-item-has-children">
                            <a href="index.php">Home</a>
                            
                        
                        <li class="menu-item-has-children">
                            <a href="hotel-index.php">Hotels</a>
                            
                        </li>
                        <li class="menu-item-has-children">
                            <a href="flight-index.php">Flights</a>
                            
                        </li>
                        <li class="menu-item-has-children">
                            <a href="car-index.php">Cars</a>
                            
                        </li>
                        <li class="menu-item-has-children">
                                <a href="tour-index.php">Tours</a>
                                
                            </li>
                        <li class="menu-item-has-children">
                            <a href="contact-us.php">Contact us</a>
                            
                        </li>
                        <li class="menu-item-has-children">
                            <a href="about-us.php">About us</a>
                            
                        </li>
                       
                    </ul>
                    
                    <ul class="mobile-topnav container">
                        <?php
                         if (!isset($_SESSION["userData"])) { 
                            ?>
                            <li><a href="#travelo-login">MY ACCOUNT</a></li>
                            <?php

                         }else{
                            ?>
                             <li><a href="my-account.php">MY ACCOUNT</a></li>

                            <?php
                         }

                        ?>
                        <?php
                          if (!isset($_SESSION["userData"])) { 
                            ?>
                            
                             <li><a href="#travelo-login" class="soap-popupbox">LOGIN</a></li>
                             <li><a href="#travelo-signup" class="soap-popupbox">SIGNUP</a></li>
                            
                            
                            <?php                      

                                }else{
                                    $userData=$_SESSION["userData"];
                                    $first_name = $userData['first_name'];
                                    
                                    // echo $output;
                                    ?>
                                    
                                        <li class="ribbon currency menu-color-skin">
                                            <a href="#"><?php echo $first_name;?></a>
                                            <ul class="menu mini">
                                                <li><a href="my-account.php#dashboard" class="location-reload">Dashboard</a></li>
                                                <li><a href="my-account.php#profile" class="location-reload">Profile</a></li>
                                                <li><a href="my-account.php#settings" class="location-reload">settings</a></li>
                                                <li><a href="logout.php">signout</a></li>
                                            </ul>
                                        </li>                        
                                    
                                    <?php
                                }

                        ?>                       
                        
                    </ul>                    
                </nav>
            </div>
            <div id="travelo-signup" class="travelo-signup-box travelo-box">
                <div class="login-social">
                    <?php
                    include 'gLogin.php';
                    $output = '<a href="'.filter_var($authUrl, FILTER_SANITIZE_URL).'" class="button login-googleplus"><i class="soap-icon-googleplus"></i>SignUp with Google+</a>';
                    echo $output;                    
                    ?>
                </div>
                <div class="seperator"><label>OR</label></div>
                <div class="simple-signup">
                    <div class="text-center signup-email-section">
                        <a href="#" class="signup-email"><i class="soap-icon-letter"></i>Sign up with Email</a>
                    </div>
                    <p class="description">By signing up, I agree to skylift's Terms of Service, Privacy Policy, Guest Refund olicy, and Host Guarantee Terms.</p>
                </div>
                <div class="email-signup">
                    <form action="signup-handler.php" method="post">
                        <div class="form-group">
                            <input type="text" name="first_name" class="input-text full-width" placeholder="first name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="last_name" class="input-text full-width" placeholder="last name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="input-text full-width" placeholder="email address" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="input-text full-width" placeholder="password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="confirm_password" class="input-text full-width" placeholder="confirm password" required>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="subscribe" value="true"> Tell me about skylift news
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <p class="description">By signing up, I agree to skylift's Terms of Service, Privacy Policy, Guest Refund Policy, and Host Guarantee Terms.</p>
                        </div>
                        <button type="submit" class="full-width btn-medium">SIGNUP</button>
                    </form>
                </div>
                <div class="seperator"></div>
                <p>Already a skylift member? <a href="#travelo-login" class="goto-login soap-popupbox">Login</a></p>
            </div>
            <div id="travelo-login" class="travelo-login-box travelo-box">
                <div class="login-social">
                    <?php
                    // include 'gLogin.php';
                    $output = '<a href="'.filter_var($authUrl, FILTER_SANITIZE_URL).'" class="button login-googleplus"><i class="soap-icon-googleplus"></i>Login with Google+</a>';
                    echo $output;                    
                    ?>
                </div>
                <div class="seperator"><label>OR</label></div>
                <form method="post" action="login-handler.php">
                    <div class="form-group">
                        <input type="text" name="email" class="input-text full-width" placeholder="email address" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="input-text full-width" placeholder="password" required>
                    </div>
                    <div class="form-group">
                        <a href="#" class="forgot-password pull-right">Forgot password?</a>
                        <div class="checkbox checkbox-inline">
                            <label>
                                <input type="checkbox"> Remember me
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="full-width btn-medium">LOGIN</button>
                </form>
                <div class="seperator"></div>
                <p>Don't have an account? <a href="#travelo-signup" class="goto-signup soap-popupbox">Sign up</a></p>
            </div>
        </header>