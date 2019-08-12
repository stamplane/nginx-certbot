<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rui Wang - Web Developer</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">


    <link rel="shortcut icon" href="img/favicon.ico" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">Rui Wang</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Portfolio</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img id="profile-img" class="img-responsive img-circle" src="img/me1.png" alt="">
                     <ul class="list-inline">

                            <li>
                                <a href="https://www.linkedin.com/in/ruiwanglinkedin" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/rui.wang.7146" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://github.com/ruiwanggit" class="btn-social btn-outline"><i class="fa fa-fw fa-github"></i></a>
                            </li>
                           <!--  <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li> -->
                            
                            <!-- <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                            </li> -->
                        </ul>
                    <div class="intro-text">
                        <!-- <span class="name">Start Bootstrap</span> -->
                        <!-- <hr class="star-light"> -->
                        <span class="skills">Software Engineer - Web Developer</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="title">Portfolio</h2>
                    <hr >
                </div>
            </div>


            <div class="row">
                <div class="col-md-3 col-sm-3 portfolio-item">
                    <div class="flip-container">
                        <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                            <div class="card">
                                <div class="face front">
                                    <img src="img/portfolio1/footprint2.png" class="img-responsive" alt="">
                                    <div class="portfolio-caption">
                                    </div>
                                </div>

                                <div class="face back">
                                    <p class="project-name">Footprint and xTrace</p>
                                    <p class="project-des">tracking and trace solution for Supplychain</p>
                                    <p class="project-des">backed by Blockchain</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3 portfolio-item">
                    <div class="flip-container">
                        <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                            <div class="card">
                                <div class="face front">
                                    <img src="img/portfolio1/ciscoblockchain.png" class="img-responsive" alt="">
                                    <div class="portfolio-caption">
                                    </div>
                                </div>

                                <div class="face back">
                                    <p class="project-name">Blockchain dev portal</p>
                                    <p class="project-des">online developer portal</p>
                                    <p class="project-des">React, Redux, Express, Mongo and Blockchain</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3 portfolio-item">
                    <div class="flip-container">
                        <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                            <div class="card">
                                <div class="face front">
                                    <img src="img/portfolio1/keevo.png" class="img-responsive" alt="">
                                    <div class="portfolio-caption">
                                    </div>
                                </div>
                                <div class="face back">
                                    <p class="project-name">Keevo Wallet</p>
                                    <p class="project-des">hardware wallet to store coins</p>
                                    <p class="project-des">built with Electron</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3 portfolio-item">
                    <div class="flip-container">
                        <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                            <div class="card">
                                <div class="face front">
                                    <img src="img/portfolio1/painscale.png" class="img-responsive" alt="">
                                    <div class="portfolio-caption">
                                    </div>
                                </div>
                                <div class="face back">
                                    <p class="project-name">Painscale</p>
                                    <p class="project-des">pain management solution</p>
                                    <p class="project-des">built with React and Redux</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3 portfolio-item">
                    <div class="flip-container">
                        <a href="#portfolioModal11" class="portfolio-link" data-toggle="modal">
                            <div class="card">
                                <div class="face front">
                                    <img src="img/portfolio1/forum.png" class="img-responsive" alt="">
                                    <div class="portfolio-caption">
                                    </div>
                                </div>

                                <div class="face back">
                                    <p class="project-name">Forum</p>
                                    <p class="project-des">Angular, Express, Node, MongoDB, HTML, CSS, Bootstrap</p>
                                    <p class="project-des">MEAN Stack</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>



                <div class="col-md-3 col-sm-3 portfolio-item">
                    <div class="flip-container">
                        <a href="#portfolioModal12" class="portfolio-link" data-toggle="modal">
                        <div class="card">                                
                                <div class="face front"> 
                                    <img src="img/portfolio1/user_dashboard_screenshot.png" class="img-responsive" alt="">
                                    <!-- <p class="text-center">User Dashboard </p>     -->                                        
                                </div>
                                <div class="face back">
                                     <p class="project-name">User Dashboard</h4>
                                     <p class="project-des">PHP</p>
                                     <p class="project-des">LAMP Stack</p>
                                </div>                            
                        </div>
                        </a>
                    </div>
                </div>


                <div class="col-md-3 col-sm-3 portfolio-item">
                    <div class="flip-container">
                        <a href="#portfolioModal13" class="portfolio-link" data-toggle="modal">
                            <div class="card">
                                <div class="face front">
                                    <img src="img/portfolio1/mychat_screenshot.png" class="img-responsive" alt="">
                                   
                                </div>

                                <div class="face back">
                                    <p class="project-name">MyChat Room</p>
                                    <p class="project-des">JavaScript</p>
                                    <p class="project-des">MEAN Stack</p>
                                </div>

                            </div>
                        </a>
                    </div>
                </div>


                <div class="col-md-3 col-sm-3 portfolio-item">
                    <div class="flip-container">
                        <a href="#portfolioModal14" class="portfolio-link" data-toggle="modal">
                            <div class="card">
                                <div class="face front">
                                     <img src="img/portfolio1/notes_app_screenshot.png" class="img-responsive" alt="">
                                    

                                </div>

                                <div class="face back">
                                     <p class="project-name">Notes App</p>
                                     <p class="project-des">PHP</p>
                                     <p class="project-des">LAMP Stack</p>
                                </div>

                            </div>
                        </a>
                           
                        
                    </div>
                </div>



                <div class="col-md-3 col-sm-3 portfolio-item">
                    <div class="flip-container">
                        <a href="#portfolioModal15" class="portfolio-link" data-toggle="modal">
                            <div class="card">
                                <div class="face front">
                                      <img src="img/portfolio1/js_circle_screenshot.png" class="img-responsive" alt="">
                                    <div class="portfolio-caption">
                                        
                                    </div>

                                </div>

                                <div class="face back">
                                     <p class="project-name">JS Ball</p>
                                     <p class="project-des">Javascript</p>
                                     <p class="project-des">Animation</p>
                                </div>

                            </div>
                        </a>
                           
                        
                    </div>
                </div>
            </div>
        </div>

        

    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class = "title about">About</h2>
                    <hr class="small">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p>I am a self-driven Software Developer currently holding a Master degree of Science in Engineering, Telecommunication and Networking. Confucius's quote: "Choose a job you love, and you will never have to work a day in your life". I am fortunate to have found my passion in coding and would like to apply my skills and leverage my proficiency in multiple programming lanuages and framworks to build great products from my heart.    </p>
                </div>
                <!-- <div class="col-lg-4">
                    <p>Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
                </div> -->
              <!--   <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="#" class="btn btn-lg btn-outline">
                        <i class="fa fa-download"></i> Download Theme
                    </a>
                </div> -->
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="title">Contact Me</h2>
                    <!-- <hr class="star-primary"> -->

                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12 btn-submit">
                                <button type="submit" class="btn  btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->
  <!-- Portfolio Modal 5 -->
  <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Footprint and xTrace</h2>
                            <p class="item-intro text-muted">React, Redux, Express, MQTT</p>
                            <p>Supply chain tracking and trace solution for Cisco Optical modules</p>
                            <p>(Project is deployed on AWS using Docker and Rancher)</p>
                            <ul class="list-inline social-buttons">
                                <li>Demo:</li>
                                <li><a target="_blank" href="https://footprint.verachain.io"><i class="fa fa-photo fa-3x"></i></a></li>
                            </ul>
                            
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
  <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Cisco Blockchain developer portal</h2>
                            <p class="item-intro text-muted">React, Redux, Express, Mongo</p>
                            <p>Online developer portal to manage cisco blockchain and its smartcontract</p>
                            <p>(Project is deployed on AWS)</p>
                            <ul class="list-inline social-buttons">
                                <li>Demo:</li>
                                <li><a target="_blank" href="https://sc.demo3.verachain.io/"><i class="fa fa-photo fa-3x"></i></a></li>
                                <!-- https://www.cisco.com/c/en/us/solutions/digital-transformation/blockchain/index.html -->
                            </ul>
                            
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Portfolio Modal 3 -->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Keevo Wallet</h2>
                            <p class="item-intro text-muted">Electron Desktop App</p>
                            <p>Hardware Wallet used to store coins like bitcoin, ether etc.. securly</p>
                            <!-- <p>Electron desktop app</p> -->
                            <ul class="list-inline social-buttons">
                                <li>Demo:</li>
                                <li><a target="_blank" href="https://keevowallet.com/"><i class="fa fa-photo fa-3x"></i></a></li>
                            </ul>
                            
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Painscale</h2>
                            <p class="item-intro text-muted">React Web app</p>
                            <p>Chronic Pain management</p>
                            <ul class="list-inline social-buttons">
                                <li>Demo:</li>
                                <li><a target="_blank" href="https://painscale.com/"><i class="fa fa-photo fa-3x"></i></a></li>
                            </ul>
                            
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

      <!-- Portfolio Modal 11 -->
    <div class="portfolio-modal modal fade" id="portfolioModal11" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Forum</h2>
                            <p class="item-intro text-muted">Angular, Express, Node, MongoDB, HTML, CSS, Bootstrap </p>
                            <p>Forum, a single page application built by MEAN stack as part of LinkNow web project for LibertyinNorthKorean </p>
                            <p>(Project is deployed using Nginx.)</p>
                            <ul class="list-inline social-buttons">
                                <li>View the code here: </li>
                                <li><a target="_blank" href="https://github.com/muz3/link"><i class="fa fa-github fa-3x"></i></a></li>
                            </ul>
                            
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 12 -->
    <div class="portfolio-modal modal fade" id="portfolioModal12" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal-body">
                            <h2>User Dashboard</h2>
                            <p class="item-intro text-muted">php, jquery,codeigniter, mysql, html, css, bootstrap</p>
                            <p>User Dashboard is a user management app. It allows users to login and register, manager users, leave message and comment on other users wall. </p>
                            <p>(Project is deployed using Nginx + CentOS.)</p>
                            <ul class="list-inline social-buttons">
                                <li>View the code here: </li>
                                <li><a target="_blank" href="https://github.com/muz3/User_Dashboard"><i class="fa fa-github fa-3x"></i></a></li>
                            </ul>
                            <!-- <iframe src="http://www.ruiwangbook.com:81"></iframe> -->
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Portfolio Modal 13 -->
    <div class="portfolio-modal modal fade" id="portfolioModal13" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal-body">
                            <h2>MyChat Room</h2>
                            <p class="item-intro text-muted">node.js, express.js, socket.io, jquery, html, css, bootstrap</p>
                            <p>MyChat Room is a single page javascript application that allows users to chat with other users and also join group chat in realtime using socket connections. </p>
                            <p>(Project is deployed using Nginx.)</p>
                            <ul class="list-inline social-buttons">
                                <li>View the code here: </li>
                                <li><a target="_blank" href="https://github.com/muz3/MyChat"><i class="fa fa-github fa-3x"></i></a></li>
                            </ul>
                            <!-- <iframe src="http://www.ruiwangbook.com:3000"></iframe> -->
                            
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 14 -->
    <div class="portfolio-modal modal fade" id="portfolioModal14" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Notes App</h2>
                            <p class="item-intro text-muted">PHP, codeigniter, jquery, ajax, mysql, html, css, bootstrap</p>
                            <p>Notes app allows users to make new post it notes to keep track of daily activities. All forms are submitted using ajax requests to prevent the page from refreshing everytime an event is triggered.</p>
                            <p>(Project is deployed using AWS.)</p>
                            <ul class="list-inline social-buttons">
                                <li>View the code here: </li>
                                <li><a target="_blank" href="https://github.com/muz3/Note_App"><i class="fa fa-github fa-3x"></i></a></li>
                            </ul>
                            <!-- <iframe src="http://www.ruiwangbook.com:85"></iframe> -->
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Portfolio Modal 15 -->
    <div class="portfolio-modal modal fade" id="portfolioModal15" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>JS Ball</h2>
                            <p class="item-intro text-muted"> Mouse click on the window to create each JS Ball. User can controll size of the ball, and balls collided with each other will disappear.</p>
                            <p>(Project is deployed on DigitalOcean cloud server.)</p>
                            <ul class="list-inline social-buttons">
                                <li>View the code here: </li>
                                <li><a target="_blank" href="https://github.com/muz3/JS_Balls"><i class="fa fa-github fa-3x"></i></a></li>
                            </ul>
                            <!-- <iframe src="http://www.ruiwangbook.com:84"></iframe> -->
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 
    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Education</h3>
                        <p>University of Pennsylvania, Master of Science in Engineering, Telecommunication and Networking</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">

                            <li>
                                <a href="https://www.linkedin.com/in/ruiwanglinkedin" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/rui.wang.7146" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://github.com/ruiwanggit" class="btn-social btn-outline"><i class="fa fa-fw fa-github"></i></a>
                            </li>
                           <!--  <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li> -->
                            
                            <!-- <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                            </li> -->
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Contact Info</h3>
                        <p>wangr3@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; stamplane.com 2015
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    
    

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>

</body>

</html>
