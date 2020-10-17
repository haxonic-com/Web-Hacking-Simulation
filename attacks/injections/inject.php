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
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="../../attacks/injections/inject.php">About</a>
                                
                                                                <a class="nav-link" href="../../attacks/injections/auth.php">Authentication Bypass</a></nav>



                            </div>



                            


                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                <div class="sb-nav-link-icon"><i class="fa fa-unlock-alt"></i></div>
                                Broken Authentication and Session Management
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i>
                                    </div>
                                </a>
                            <div class="collapse" id="collapse2" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="../../attacks/broken/broken_main.php">About</a>
                                <a class="nav-link" href="../../attacks/broken/lesson1.php">Weak Login Credentials</a></nav>
                            </div>


                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                <div class="sb-nav-link-icon"><i class="fa fa-unlock-alt"></i></div>
                                Cross-Site Scripting (XSS)
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i>
                                    </div>
                                </a>
                            <div class="collapse" id="collapse3" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="../../attacks/xss/xss_main.php">About</a>
                                <a class="nav-link" href="../../attacks/xss/xss_r.php">Reflected XSS</a>
                                    <a class="nav-link" href="../../attacks/xss/xss_s.php">Stored XSS</a></nav>
                            </div>






                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                <div class="sb-nav-link-icon"><i class="fa fa-unlock-alt"></i></div>
                                Security Misconfiguration
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i>
                                    </div>
                                </a>
                            <div class="collapse" id="collapse4" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="../../attacks/security_misconfiguration/sec.php">About</a>
                                <a class="nav-link" href="../../attacks/security_misconfiguration/bruteforce.php">Brute Force Attack</a></nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                <div class="sb-nav-link-icon"><i class="fa fa-unlock-alt"></i></div>
                                Sensitive Data Exposure
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i>
                                    </div>
                                </a>
                            <div class="collapse" id="collapse5" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="../../attacks/senstive_data_exposure/sde.php">About</a>
                                <a class="nav-link" href="../../attacks/senstive_data_exposure/plaintext.php">User Credentials Sent in Plaintext</a>
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
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="../../attacks/missing_function/msflac.php">About</a>
                                <a class="nav-link" href="../../attacks/missing_function/unauthenticated.php">Unauthenticated User Access to Admin
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
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="../../attacks/csrf/csrf_main.php">About</a>
                                <a class="nav-link" href="../../attacks/csrf/gmail.php">CSRF in Gmail
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
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="../../attacks/file_inclusion/fi.php">About</a>
                                <a class="nav-link" href="../../attacks/file_inclusion/arbitrary.php">Arbitrary File Upload</a>
                            </nav>
                            </div>






                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                <div class="sb-nav-link-icon"><i class="fa fa-unlock-alt"></i></div>
                                Click Jacking
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i>
                                    </div>
                                </a>
                            <div class="collapse" id="collapse10" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="../../attacks/click_jacking/click_jack.php">About</a>
                                <a class="nav-link" href="../../attacks/click_jacking/Click.html">Click Jacking Practical</a>
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
                            <li class="breadcrumb-item active"><a href="../../attacks/injections/inject.php">SQL Injection</a></li>
                            <li class="breadcrumb-item active">About</li>
                        </ol>
                                        
                    </div>

                    <section class="content">
<span id="c"><b>What is SQL Injection?</b></span>

<p>Top in the list SQL injection attack consists of insertion or "injection" of either a partial or complete SQL query via the data input or transmitted from the client (browser) to the web application. A successful SQL injection attack can read sensitive data from the database, modify database data (insert/update/delete), execute administration operations on the database (such as shutdown the DBMS), recover the content of a given file existing on the DBMS file system or write files into the file system, and, in some cases, issue commands to the operating system. SQL injection .. are a type of injection attack, in which SQL commands are injected into data-plane input in order to affect the execution of predefined SQL commands.</p>
 
<p>“The act of entering malformed or unexpected data (perhaps into a front-end web form or front-end application for example) so that the back-end SQL database running behind the website or application executes SQL commands that the programmer never intended to permit, possibly allowing an intruder to break into or damage the database.”</p>

 <span id="c"><b>Attack Vectors</b></span>
 <p>Attacker sends simple text-based attacks that exploit the syntax of the targeted interpreter. Almost any source of data can be an injection vector, including internal sources. Injection flaws occur when an application sends untrusted data to an interpreter. Injection flaws are very prevalent, particularly in legacy code. They are often found in SQL, LDAP, Xpath, or NoSQL queries; OS commands; XML parsers, SMTP Headers, program arguments, etc. Injection flaws are easy to discover when examining code, but frequently hard to discover via testing. Scanners and fuzzers can help attackers find injection flaws.</p>

<span id="c"><b>Are You Vulnerable To 'SQL Injections'?</b></span>
<p>The best way to find out if an application is vulnerable to injection is to verify that all use of interpreters clearly separates untrusted data from the command or query. For SQL calls, this means using bind variables in all prepared statements and stored procedures, and avoiding dynamic queries.
Checking the code is a fast and accurate way to see if the application uses interpreters safely. Code analysis tools can help a security analyst find the use of interpreters and trace the data flow through the application. Penetration testers can validate these issues by crafting exploits that confirm the vulnerability.
Automated dynamic scanning which exercises the application may provide insight into whether some exploitable injection flaws exist. Scanners cannot always reach interpreters and have difficulty detecting whether an attack was successful. Poor error handling makes injection flaws easier to discover</p>
<span id="c"><b>TYPES</b></span>
<ul>
<li>AUTHENTICATION BYPASS VIA SQLI</li>
<p>It was discovered that SQL Injection techniques can be used to fool the application into authenticating without the attacker needing valid credentials. SQL Injection vulnerabilities on login pages expose an application to unauthorized access and quite probably at the administrator level, thereby severely compromising the security of the application. It's the most outdated vulnerabilities but still working.</p>

<li>UNION BASED SQL INJECTION</li>
<p>UNION-based .. allow the tester to easily extract information from the database. Because the UNION operator can only be used if both queries have the exact same structure, the attacker must craft a SELECT statement similar to the original query. To do this, a valid table name must be known but it is also necessary to determine the number of columns in the first query and their data type. To simplify learning, this article explains how it can be done when error reporting is enabled. However, the same principle would apply if it was not the case. For more information refer to the last section of the article.</p>

<li>COMMAND EXECUTION</li>
<p>Command injection is an attack in which the goal is execution of arbitrary commands on the host operating system via a vulnerable application. Command injection .. are possible when an application passes unsafe user supplied data (forms, cookies, HTTP headers etc.) to a system shell. In this attack, the attacker-supplied operating system commands are usually executed with the privileges of the vulnerable application. Command injection .. are possible largely due to insufficient input validation.
This attack differs from Code Injection, in that code injection allows the attacker to add his own code that is then executed by the application. In Code Injection, the attacker extends the default functionality of the application without the necessity of executing system commands.</p>
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
