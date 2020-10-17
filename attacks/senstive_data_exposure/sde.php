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
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="#">About</a><a class="nav-link" href="../../attacks/senstive_data_exposure/plaintext.php">User Credentials Sent in Plaintext</a>
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
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="../../attacks/unvalidated_redirects/unvalidated.php">About</a>
                                <a class="nav-link" href="../../attacks/unvalidated_redirects/manual.php">Manual Redirects
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
                            <li class="breadcrumb-item active"><a href="../../attacks/senstive_data_exposure/sde.php">Sensitive Data Exposure</a></li>
                            <li class="breadcrumb-item active">About</li>
                        </ol>
                                        
                    </div>

                    <section class="content">
<span id="c"><b>What is Sensitive Data Exposure?</b></span>

<p>Consider who can gain access to your sensitive data and any backups of that data. This includes the data at rest, in transit and even in your customers’ browsers.
	 Include both external and internal threats. The Sensitive Data can be exposed in the plain text or in any hash format. </p>
 

<span id="c"><b>Attack Vectors</b></span>

<p>Attackers typically don’t break crypto directly. They break something else, such as steal keys, do man-in-the-middle, or steal clear text data off the server, while in transit, or from the user’s browser.  
The most common flaw is simply not encrypting sensitive data. When crypto is employed, weak key generation and management, and weak algorithm usage is common, particularly weak password hashing techniques.
 Browser weaknesses are very common and easy to detect, but hard to exploit on a large scale. External attackers have difficulty detecting server side flaws due to limited access and they are also usually hard to exploit.
 </p>


 <span id="c"><b>Are You Vulnerable To 'Sensitive Data Exposure'?</b></span>
 <p>The first thing you have to determine is which data is sensitive enough to require extra protection. For example, passwords, credit card numbers, health records, and personal information should be protected. For all such data:
<ul>
<li>Is any of this data stored in clear text long term, including backups of this data?</li>
<li>Is any of this data transmitted in clear text, internally or externally? Internet traffic is especially dangerous.</li>
<li>Are any old / weak cryptographic algorithms used?</li>
<li>Are weak crypto keys generated, or is proper key management or rotation missing?</li>
<li>Are any browser security directives or headers missing when sensitive data is provided by / sent to the browser?</li></p>
</ul>

<span id="c"><b>What an attacker can do?</b></span>
<ul>
	<li>Password of a user should not be stored in plaintext in database. It should be hashed using a strong hashing algorithm (Note: MD5 is not a strong hashing algorithm anymore MD5 Collision Vulnerabilities)</li>
<li> User's sensitive information like credit card information, bank details, etc. should be stored using strong encryption algorithm and the decryption key should be kept safely and away from the encrypted data.</li>
<li> User's sensitive information like login credentials, bank details, credit information, etc. should not be sent over the network in plaintext. HTTPS should be used for transmitting sensitive details.</li>
<li> Login details can also be sent over the network by hashing the password with a salt (generated by server) when sent from client side. This method is used in places where implementing HTTPS is not possible and HTTP has to be used.</li>
<li> If a web application stores user’s sensitive information like password in plaintext in database and SQL injection is found by a malicious user in this application then all the username-passwords will be fetched and user accounts are compromised.</li>
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
