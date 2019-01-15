<!DOCTYPE HTML>
<html>

<head>

    <head>
        <meta charset="utf-8">
        <title>AgriDoc</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="CSE499 Project ">
        <link href="scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="scripts/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="scripts/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="scripts/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome.min.css">
        <link href="scripts/carousel/style.css" rel="stylesheet" type="text/css" />
        <link href="scripts/camera/css/camera.css" rel="stylesheet" type="text/css" />
        <link href="http://fonts.googleapis.com/css?family=Syncopate" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Pontano+Sans" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet" type="text/css">
        <link href="styles/custom.css" rel="stylesheet" type="text/css" />
    </head>
</head>

<body id="pageBody">

    <div id="divBoxed" class="container">

        <div class="transparent-bg" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: -1;zoom: 1;"></div>

        <div class="divPanel notop nobottom">
            <div class="row-fluid">
                <div class="span12">

                    <div id="divLogo" class="pull-left">
                        <a href="index.html" id="divSiteTitle">AgriDoc</a><br />
                        <a href="index.html" id="divTagLine">Total Agricultural Solution</a>
                    </div>

                    <div id="divMenuRight" class="pull-right">
                        <div class="navbar">
                            <button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
                            NAVIGATION <span class="icon-chevron-down icon-white"></span>
                        </button>
                            <div class="nav-collapse collapse">
                                <ul class="nav nav-pills ddmenu">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle">Info <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="cgi.html">Categorized General Information</a></li>
                                            <li><a href="cgs.html">Categorized General Solution</a></li>
                                            <li><a href="technical_update.html">Technical Update</a></li>
                                            <li><a href="new_species.html">News on New Species</a></li>
                                            <li><a href="loan.html">Information on Loan</a></li>
                                            <li><a href="stories.html">Success Stories</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="user/index.php">Sign In/Sign Up</a></li>
                                    <li class="active"><a href="contact.php">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row-fluid">
                <div class="span12">
                    <div id="contentInnerSeparator"></div>
                </div>
            </div>
        </div>

        <div class="contentArea">

            <div class="divPanel notop page-content">

                <div class="breadcrumbs">
                    <a href="index.html">Home</a> &nbsp;/&nbsp; <span>Contact</span>
                </div>

                <div class="row-fluid">
                    <div class="span8" id="divMain">

                        <h1>Contact Us</h1>
                        <h3 style="color:#FF6633;">
                            <?php echo @$_GET['msg'];?>
                        </h3>
                        <hr>
                        <!--Start Contact form -->
                        <form name="enq" action="mail.php" method="POST">
                            <fieldset>

                                <input type="text" name="name" id="name" value="" class="input-block-level" placeholder="Name" />
                                <input type="text" name="email" id="email" value="" class="input-block-level" placeholder="Email" />
                                <textarea rows="11" name="message" id="message" class="input-block-level" placeholder="Comments"></textarea>
                                <div class="actions">
                                    <input type="submit" value="Send Your Message" name="submit" id="submitButton" class="btn btn-info pull-right" title="Click here to submit your message!" />
                                </div>

                            </fieldset>
                        </form>
                        <!--End Contact form -->
                    </div>

                    <!--Edit Sidebar Content here-->
                    <div class="span4 sidebar">

                        <div class="sidebox">
                            <h3 class="sidebox-title">Contact Information</h3>
                            <p>
                                <address><strong>AgriDoc</strong><br />
                        Bashundhara Residendial Area<br />
                        Dhaka 1207<br />
                        <abbr title="Phone">P:</abbr> (123) 456 7890 / 456 7891</address>
                                <address>  <strong>Email</strong><br />
                        <a href="mailto:#">info@agridoc.com</a></address>
                            </p>



                        </div>



                    </div>
                    <!--/End Sidebar Content-->


                </div>

                <div id="footerInnerSeparator"></div>
            </div>
        </div>

        <div id="footerOuterSeparator"></div>

        <div id="divFooter" class="footerArea">

            <div class="divPanel">

                <div class="row-fluid">
                    <div class="span3" id="footerArea1">

                        <h3>About AgriDoc</h3>

                        <p>This project is made for CSE 499 course under the surveillance of <br>Dr. Shazzad Hosain
                            <br>Associate Professor <br> North South University</p>

                        <p>
                            <a href="#" title="Terms of Use">Terms of Use</a><br />
                            <a href="#" title="Privacy Policy">Privacy Policy</a><br />
                            <a href="#" title="FAQ">FAQ</a><br />
                            <a href="#" title="Sitemap">Sitemap</a>
                        </p>

                    </div>
                    <div class="span3" id="footerArea2">

                        <h3>Recent News</h3>
                        <p>
                            <a href="technical_update.html" title="">মুরগির জটিল রোগ নির্ণয়ে উদ্ভাবিত দেশি পদ্ধতি</a><br />

                        </p>
                        <p>
                            <a href="technical_update.html" title="">কৃষিতে নতুন বিপ্লব আনবে ‘ই-ভিলেজ’</a><br />

                        </p>
                        <p>
                            <a href="technical_update.html" title="">কৃষিতে নতুন প্রযুক্তি: ইউরিয়ার পরিবর্তে ব্যাকটেরিয়া</a><br />

                        </p>
                        <p>
                            <a href="technical_update.html" title="">নতুন উদ্ভাবিত ধান কাটা সহ মারাই মেশিন</a>
                        </p>

                    </div>
                    <div class="span3" id="footerArea3">

                        <h3>Our Vision</h3>
                        <p>Our vision is to spread this web portal to every farmer of Bangladesh. So that they can be benefited out of it. We will keep improving our portal and upgrade the information with a view to serve the farmers of the country.
                        </p>

                    </div>
                    <div class="span3" id="footerArea4">

                        <h3>Get in Touch</h3>

                        <ul id="contact-info">
                            <li>
                                <i class="general foundicon-phone icon"></i>
                                <span class="field">Phone:</span>
                                <br /> (123) 456 7890 / 456 7891
                            </li>
                            <li>
                                <i class="general foundicon-mail icon"></i>
                                <span class="field">Email:</span>
                                <br />
                                <a href="mailto:info@yourdomain.com" title="Email">info@agridoc.com</a>
                            </li>

                        </ul>

                    </div>
                </div>

                <br /><br />
                <div class="row-fluid">
                    <div class="span12">
                        <p class="copyright">
                            Copyright © 2017 AgriDoc. All Rights Reserved.
                        </p>

                        <p class="social_bookmarks">
                            <a href="www.facebook.com"><i class="social foundicon-facebook"></i> Facebook</a>
                            <a href="twitter.com"><i class="social foundicon-twitter"></i> Twitter</a>
                            <a href="pinterest.com"><i class="social foundicon-pinterest"></i> Pinterest</a>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <br /><br /><br />

    <script src="scripts/jquery.min.js" type="text/javascript"></script>
    <script src="scripts/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="scripts/default.js" type="text/javascript"></script>


    <script src="scripts/carousel/jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script>
    <script type="text/javascript">
        $('#list_photos').carouFredSel({
            responsive: true,
            width: '100%',
            scroll: 2,
            items: {
                width: 320,
                visible: {
                    min: 2,
                    max: 6
                }
            }
        });

    </script>
    <script src="scripts/camera/scripts/camera.min.js" type="text/javascript"></script>
    <script src="scripts/easing/jquery.easing.1.3.js" type="text/javascript"></script>
    <script type="text/javascript">
        function startCamera() {
            $('#camera_wrap').camera({
                fx: 'scrollLeft',
                time: 2000,
                loader: 'none',
                playPause: false,
                navigation: true,
                height: '35%',
                pagination: true
            });
        }
        $(function() {
            startCamera()
        });

    </script>


</body>

</html>
