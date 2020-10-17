<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,'project');

if(mysqli_select_db($link, 'project'))
{
  echo'<a href="./index.php">';
}
else
{
{
 echo "<center><h1><b>WEB APPLICATION BASED VULNERABILITIES SIMULATION<b></h1><br>";  
echo'<body bgcolor="#F8F9F9"><br><br><center>
<a href="reset.php">Create Database</a></center><br><br></body>';
exit("<center><b>Create Database First</b></center>");
}
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>WAVS</title>
      <link href="../../css/styles.css" rel="stylesheet" />
        
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">

<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.15.0/css/mdb.min.css" rel="stylesheet">



        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand-sm bg-dark navbar-dark">
            <a class="navbar-brand" href="../../index.php"><font                  size="7"                                 face="Revamped" color="white">WAVS</font>                       </a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fa fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    
                    <div class="input-group-append">
                        
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-secret"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="../../index.php">Home</a>
                        <!--<a class="dropdown-item" href="../../About.php">Team</a>-->
                        <a class="dropdown-item" href="../../setup.php">Setup/Reset Machine</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <!-- <div class="sb-sidenav-menu-heading">Dashboard</div> -->
                            <br><a class="nav-link"  href="../../index.php">
                                <div class="sb-nav-link-icon"><i class="fa fa-home"></i></div>
                                HOME</a>               
                            <div class="sb-sidenav-menu-heading">Vulnerable Machines</div>










                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                <div class="sb-nav-link-icon"><i class="fa fa-unlock-alt"></i></div>
                                SQL Injection
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i>
                                    </div>
                                </a>
                            <div class="collapse" id="collapse1" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="../../attacks/injections/inject.php">About</a>                                <a class="nav-link" href="../../attacks/injections/auth.php">Authentication Bypass</a></nav>


                            </div>



                            


                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                <div class="sb-nav-link-icon"><i class="fa fa-unlock-alt"></i></div>
                                Broken Authentication and Session Management
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i>
                                    </div>
                                </a>
                            <div class="collapse" id="collapse2" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="../../attacks/broken/broken_main.php">About</a><a class="nav-link" href="../../attacks/broken/lesson1.php">Weak Login Credentials</a></nav>
                            </div>


                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                <div class="sb-nav-link-icon"><i class="fa fa-unlock-alt"></i></div>
                                Cross-Site Scripting (XSS)
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i>
                                    </div>
                                </a>
                            <div class="collapse" id="collapse3" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="../../attacks/xss/xss_main.php">About</a><a class="nav-link" href="../../attacks/xss/xss_r.php">Reflected XSS</a>
                                    <a class="nav-link" href="../../attacks/xss/xss_s.php">Stored XSS</a></nav>
                            </div>






                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                <div class="sb-nav-link-icon"><i class="fa fa-unlock-alt"></i></div>
                                Security Misconfiguration
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i>
                                    </div>
                                </a>
                            <div class="collapse" id="collapse4" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="../../attacks/security_misconfiguration/sec.php">About</a><a class="nav-link" href="../../attacks/security_misconfiguration/bruteforce.php">Brute Force Attack</a></nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                <div class="sb-nav-link-icon"><i class="fa fa-unlock-alt"></i></div>
                                Sensitive Data Exposure
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i>
                                    </div>
                                </a>
                            <div class="collapse" id="collapse5" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="../../attacks/senstive_data_exposure/sde.php">About</a><a class="nav-link" href="../../attacks/senstive_data_exposure/plaintext.php">User Credentials Sent in Plaintext</a>
                                    <a class="nav-link" href="../../attacks/senstive_data_exposure/plaintext_db.php">Plaintext Passwords from Database</a> 
                            </nav>
                            </div>






                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                <div class="sb-nav-link-icon"><i class="fa fa-unlock-alt"></i></div>
                                Missing Function Level Access Control
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i>
                                    </div>
                                </a>
                            <div class="collapse" id="collapse6" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="../../attacks/missing_function/msflac.php">About</a><a class="nav-link" href="../../attacks/missing_function/unauthenticated.php">Unauthenticated User Access to Admin
                                </a>
                            </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                <div class="sb-nav-link-icon"><i class="fa fa-unlock-alt"></i></div>
                                Cross-Site Request Forgery (CSRF)
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i>
                                    </div>
                                </a>
                            <div class="collapse" id="collapse7" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="../../attacks/csrf/csrf_main.php">About</a><a class="nav-link" href="../../attacks/csrf/gmail.php">CSRF in Gmail
                                </a><a class="nav-link" href="../../attacks/csrf/comment.php">CSRF in Comment Box</a>
                            </nav>
                            </div>






                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                <div class="sb-nav-link-icon"><i class="fa fa-unlock-alt"></i></div>
                                Unvalidated Redirects And Forwards
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i>
                                    </div>
                                </a>
                            <div class="collapse" id="collapse8" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="../../attacks/unvalidated_redirects/unvalidated.php">About</a><a class="nav-link" href="../../attacks/unvalidated_redirects/manual.php">Manual Redirects
                                </a><a class="nav-link" href="../../attacks/unvalidated_redirects/automatic.php">Automatic Redirects</a>
                            </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                <div class="sb-nav-link-icon"><i class="fa fa-unlock-alt"></i></div>
                                Unrestricted File Upload
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i>
                                    </div>
                                </a>
                            <div class="collapse" id="collapse9" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="../../attacks/file_inclusion/fi.php">About</a><a class="nav-link" href="../../attacks/file_inclusion/arbitrary.php">Arbitrary File Upload</a></nav>
                            </div>






                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                <div class="sb-nav-link-icon"><i class="fa fa-unlock-alt"></i></div>
                                Click Jacking
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i>
                                    </div>
                                </a>
                            <div class="collapse" id="collapse10" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="../../attacks/click_jacking/click_jack.php">About</a><a class="nav-link" href="../../attacks/click_jacking/Click.html">Click Jacking Practical</a>
                                </nav>
                            </div>



                            <!-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i>
                                </div></a>
                             <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth"
                                        >Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                    ></a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="login.html">Login</a><a class="nav-link" href="register.html">Register</a><a class="nav-link" href="password.html">Forgot Password</a></nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError"
                                        >Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                    ></a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="401.html">401 Page</a><a class="nav-link" href="404.html">404 Page</a><a class="nav-link" href="500.html">500 Page</a></nav>
                                    </div>
                                </nav>
                            </div> -->
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4" align="center"><b>Web Application Vulnerability Simulation</b></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"><a href="../../index.php">Home</a></li>
                            <li class="breadcrumb-item active"><a href="../../attacks/unvalidated_redirects/unvalidated.php">Unvalidated Redirects And Forwards</a></li>
                            <li class="breadcrumb-item active">About</li>
                        </ol>
                                        
                    </div>

                    <section class="content">
<span id="c"><b>What is Unvalidated Redirects And Forwards ?</b></span>
<p>Unvalidated redirects and forwards are possible when a web application accepts untrusted input that could cause the web application to redirect the request to a URL contained within untrusted input. By modifying untrusted URL input to a malicious site, an attacker may successfully launch a phishing scam and steal user credentials. Because the server name in the modified link is identical to the original site, phishing attempts may have a more trustworthy appearance. Unvalidated redirect and forward .. can also be used to maliciously craft a URL that would pass the application’s access control check and then forward the attacker to privileged functions that they would normally not be able to access.
Consider anyone who can trick your users into submitting a request to your website. Any website or other HTML feed that your users use could do this.</p>

<span id="c"><b>Attack Vectors</b></span>
<p>Attacker links to unvalidated redirect and tricks victims into clicking it. Victims are more likely to click on it, since the link is to a valid site. Attacker targets unsafe forward to bypass security checks.
Applications frequently redirect users to other pages, or use internal forwards in a similar manner. Sometimes the target page is specified in an unvalidated parameter, allowing attackers to choose the destination page.
Detecting unchecked redirects is easy. Look for redirects where you can set the full URL. Unchecked forwards are harder, because they target internal pages.</p>

<span id="c"><b>Are You Vulnerable To 'Unvalidated Redirects and Forwards'?</b></span>
<p>The best way to find out if an application has any unvalidated redirects or forwards is to:

Review the code for all uses of redirect or forward (called a transfer in .NET). For each use, identify if the target URL is included in any parameter values. If so, if the target URL isn’t validated against a whitelist, you are vulnerable.
Also, spider the site to see if it generates any redirects (HTTP response codes 300-307, typically 302). Look at the parameters supplied prior to the redirect to see if they appear to be a target URL or a piece of such a URL. If so, change the URL target and observe whether the site redirects to the new target.
If code is unavailable, check all parameters to see if they look like part of a redirect or forward URL destination and test those that do.</p>

<span id="c"><b>Preventing Unvalidated Redirects and Forwards</b></span>
<ul>
	<p>Safe use of redirects and forwards can be done in a number of ways:</p>
<li>Simply avoid using redirects and forwards.</li>
<li>If used, do not allow the url as user input for the destination. This can usually be done. In this case, you should have a method to validate URL.</li>
<li>If user input can’t be avoided, ensure that the supplied value is valid, appropriate for the application, and is authorized for the user. </li>
<li>It is recommended that any such destination input be mapped to a value, rather than the actual URL or portion of the URL, and that server side code translate this value to the target URL. </li>
<li>Sanitize input by creating a list of trusted URL's (lists of hosts or a regex). </li>
<li>Force all redirects to first go through a page notifying users that they are going off of your site, and have them click a link to confirm. </li>
</ul>
</section>


                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; WAVS 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../../js/scripts.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.15.0/js/mdb.min.js"></script>
    
        
        
    </body>
</html>
