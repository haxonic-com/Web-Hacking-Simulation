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
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="#">About</a><a class="nav-link" href="../../attacks/file_inclusion/arbitrary.php">Arbitrary File Upload</a></nav>
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
                            <li class="breadcrumb-item active"><a href="../../attacks/file_inclusion/fi.php">Unrestricted File Upload</a></li>
                            <li class="breadcrumb-item active">About</li>
                        </ol>
                                        
                    </div>

                    <section class="content">
<span id="c"><b>What is "Unrestricted File Upload/File Inclusion Vulnerability"?</b></span>

<p>Uploaded files represent a significant risk to applications. The first step in many .. is to get some code to the system to be attacked. Then the attack only needs to find a way to get the code executed. Using a file upload helps the attacker accomplish the first step.
The consequences of unrestricted file upload can vary, including complete system takeover, an overloaded file system or database, forwarding .. to back-end systems, client-side .., or simple defacement. It depends on what the application does with the uploaded file and especially where it is stored.
There are really two classes of problems here. The first is with the file metadata, like the path and file name. These are generally provided by the transport, such as HTTP multi-part encoding. This data may trick the application into overwriting a critical file or storing the file in a bad location. You must validate the metadata extremely carefully before using it.
The other class of problem is with the file size or content. The range of problems here depends entirely on what the file is used for. See the examples below for some ideas about how files might be misused. To protect against this type of attack, you should analyse everything your application does with files and think carefully about what processing and interpreters are involved.</p>

<span id="c"><b>Risk Factors</b></span>
<ul>
<li>The impact of this vulnerability is high, supposed code can be executed in the server context or on the client side. The likelihood of detection for the attacker is high. The prevalence is common. As a result the severity of this type of vulnerability is high.</li>
<li>It is important to check a file upload module's access controls to examine the risks properly.</li>
<li>Server-side ..: The web server can be compromised by uploading and executing a web-shell which can run commands, browse system files, browse local resources, attack other servers, or exploit the local vulnerabilities, and so forth.</li>
<li>Client-side ..: Uploading malicious files can make the website vulnerable to client-side .. such as XSS or Cross-site Content Hijacking.</li>
<li>Uploaded files can be abused to exploit other vulnerable sections of an application when a file on the same or a trusted server is needed (can again lead to client-side or server-side ..)</li>
<li>Uploaded files might trigger vulnerabilities in broken libraries/applications on the client side (e.g. iPhone MobileSafari LibTIFF Buffer Overflow).</li>
<li>Uploaded files might trigger vulnerabilities in broken libraries/applications on the server side (e.g. ImageMagick flaw that called ImageTragick!).</li>
<li>Uploaded files might trigger vulnerabilities in broken real-time monitoring tools (e.g. Symantec antivirus exploit by unpacking a RAR file)</li>
<li>A malicious file such as a Unix shell script, a windows virus, an Excel file with a dangerous formula, or a reverse shell can be uploaded on the server in order to execute code by an administrator or webmaster later -- on the victim's machine.</li>
<li>An attacker might be able to put a phishing page into the website or deface the website.</li>
<li>The file storage server might be abused to host troublesome files including malwares, illegal software, or adult contents. Uploaded files might also contain malwares' command and control data, violence and harassment messages, or steganographic data that can be used by criminal organisations.</li>
<li>Uploaded sensitive files might be accessible by unauthorised people.</li>
<li>File uploaders may disclose internal information such as server internal paths in their error messages.</li>
</ul>

<span id="c"><b>Arbitrary File Upload</b></span>
<p> As the name suggests Arbitrary File Upload Vulnerabilities is a type of vulnerability which occurs in web applications if the file type uploaded is not checked, filtered or sanitized.
	The main danger of these kind of vulnerabilities is that the attacker can upload a malicious PHP , ASP etc. script and execute it. The main idea is to get the access to the server and execute desired code. for example an Attacker who have gained access to such kind of vulnerability can upload a malicious shell script and further can control the machine to execute desired commands, which would lead to a full compromise of the server and the victim’s server gets owned. </p>

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
