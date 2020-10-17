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
            <a class="navbar-brand" href="../../index.php"><font                  size="7"                                 face="Revamped" color="white">WAVS</font> </a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fa fa-bars"></i></button>
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
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="#">About</a><a class="nav-link" href="../../attacks/xss/xss_r.php">Reflected XSS</a>
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
                            <li class="breadcrumb-item active"><a href="../../attacks/xss/xss_main.php">Cross-Site Scripting (XSS)</a></li>
                            <li class="breadcrumb-item active">About</li>
                        </ol>
                                        
                    </div>

                    <section class="content">

<span id="c"><b>What is Cross-Site Scripting (XSS)?</b></span>

<p>Cross-Site Scripting (XSS) are a type of injection, in which malicious scripts are injected into otherwise benign and trusted web
  sites. XSS occur when an attacker uses a web application to send malicious code, generally in the form of a browser side script,
  to a different end user. Flaws that allow these to succeed are quite widespread and occur anywhere a web application uses input 
  from a user within the output it generates without validating or encoding it. An attacker can use XSS to send a malicious script
  to an unsuspecting user. The end user’s browser has no way to know that the script should not be trusted, and will execute the
  script. Because it thinks the script came from a trusted source, the malicious script can access any cookies, session tokens, 
  or other sensitive information retained by the browser and used with that site. These scripts can even rewrite the content of 
  the HTML page. For more details on the different types of XSS flaws.</p>
 
 <span id="c"><b>What is the vulnerability?</b></span>
 
 <p>Cross-Site Scripting (XSS) are a type of injection, in which malicious scripts are injected into otherwise benign and trusted
  web sites. XSS occur when an attacker uses a web application to send malicious code, generally in the form of a browser side 
  script, to a different end user. Flaws that allow these to succeed are quite widespread and occur anywhere a web application 
  uses input from a user within the output it generates without validating or encoding it. An attacker can use XSS to send a 
  malicious script to an unsuspecting user. The end user’s browser has no way to know that the script should not be trusted, 
  and will execute the script. Because it thinks the script came from a trusted source, the malicious script can access any 
  cookies, session tokens, or other sensitive information retained by the browser and used with that site. These scripts can 
  even rewrite the content of the HTML page. For more details on the different types of XSS flaws.</p>

<span id="c"><b>Attack Vectors</b></span>

<p>Attacker sends text-based attack scripts that exploit the interpreter in the browser. Almost any source of data can be an 
  attack vector, including internal sources such as data from the database. XSS is the most prevalent web application security 
  flaw. XSS flaws occur when an application includes user supplied data in a page sent to the browser without properly validating
  or escaping that content. Detection of most Server XSS flaws is fairly easy via testing or code analysis. Client XSS is very 
  difficult to identify.</p>

<span id="c"><b>What an attacker can do?</b></span>

<p>If a malicious user is able to execute scripts on an unsuspecting user's web browser because of a vulnerable web application.
 Then the malicious user can redirect him/her to some other website using document.location or access cookies using document.cookies
 or create fake page using HTML to grab sensitive information like user credentials. And the worst of all is exploiting the web
 browser to gain remote code execution or drop a malware. Severity of this vulnerability is critical because it can be utilized
 by a malicious user to execute huge kinds of scripts on a client’s web browser.</p>


<p><span id="c"><b>TYPES</b></span>
<br>
<ul>
<li> <b>Reflected XSS</b><br>
Reflected XSS occurs when user input is immediately returned by a web application in an error message, search result, or any 
other response that includes some or all of the input provided by the user as part of the request, without that data being made 
safe to render in the browser, and without permanently storing the user provided data. In some cases, the user provided data may
 never even leave the browser.</li>

<li> <b>Stored XSS</b><br>
Stored XSS generally occurs when user input is stored on the target server, such as in a database, in a message forum, visitor 
log, comment field, etc. And then a victim is able to retrieve the stored data from the web application without that data being 
made safe to render in the browser. With the advent of HTML5, and other browser technologies, we can envision the attack payload
ng permanently stored in the victim’s browser, such as an HTML5 database, and never being sent to the server at all.</li>

<li> <b>DOM based XSS</b><br>
DOM stands for Document Object Model. This XSS type is exactly what its name suggests. A web application suffers from this type
of XSS when it cannot filter the user input which is further used by a script in the page. This vulnerability allows an attacker
to modify the document object model of the web browser. The main difference between this type of XSS and others is that in other
XSS types the injection string is sent to the server and the response from the server contains the injection string. But in DOM 
based XSS the injection string is NOT present in the response from server. The injection string is used by a script in page 
which causes unexpected behavior from the web application.</li></p></ul>

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
