<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Ryan O'Rourke</title>
    	<meta name="description" content="Ryan ORourke Portfolio">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/templatemo_misc.css">
        <link rel="stylesheet" href="css/templatemo_style.css">
        <link rel="stylesheet" href="css/owl-carousel.css">

    </head>
    <body>
        <div class="site-main" id="sTop">
            <div class="site-header">
                <div class="main-header">
                    <div class="container">
                        <div id="menu-wrapper">
                            <div class="row">
                                <nav class="navbar navbar-inverse" role="navigation">
                                    <div class="navbar-header">

                                        <a href="#top" class="navbar-brand">Devreo</a>
                                        <div id="main-nav" class="collapse navbar-collapse">
                                            <ul class="menu-first navbar-nav" style="margin-right: 20px;">
                                                <li><a href="#">Home</a></li>
                                                <li><a href="#about">About Me</a></li>
                                                <li><a href="#bottom">Contact Me</a></li>
                                            </ul>
                                        </div> <!-- /.main-menu -->
                                    </div>
                                </nav>
                            </div> <!-- /.row -->
                        </div> <!-- /#menu-wrapper -->
                    </div> <!-- /.container -->
                </div> <!-- /.main-header -->
            </div> <!-- /.site-header -->
        </div> <!-- /.site-main -->


        <div class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="banner-content">
                            <h6>Ryan O'Rourke</h6>
                            <h2 id="bannerTitle">Let's Make Something Great</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section id="about" class="page-section">
            <div class="container-fluid">
                <div class="row" style="overflow: hidden;">
                    <div class="col-md-4">
                        <div class="service-item first-service">
                          <div class="icon">
                              <img src="img/third-service-icon.png" alt="">
                          </div>
                          <h4>Web Design</h4>
                          <p>I can help you represent yourself or your business with a professional, responive website.   </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-item second-service">
                          <div class="icon">
                              <img src="img/first-service-icon.png" alt="">
                          </div>
                          <h4>Mobile</h4>
                          <p>I can help you realize your iOS applications in order to expand your reach.</p>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-item third-service">
                          <div class="icon">
                              <img src="img/second-service-icon.png" alt="">
                          </div>
                          <h4>Databases</h4>
                          <p>My extensive knowledge with SQL databases will allow you to store any information you need.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="portfolio" class="portfolio-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h2>About Me</h2>
                            <span class="faded-hr"></span>
                            <br>
                            <?php
                            $d1 = new DateTime('1997-07-4');
                            $d2 = new DateTime(date());
                            $age = $d2->diff($d1)->y;

                            $d1 = new DateTime('2012-08-23');
                            $d2 = new DateTime(date());
                            $experience = $d2->diff($d1)->y;

                            $d1 = new DateTime('2017-11-15');
                            $d2 = new DateTime(date());
                            $profExperience = $d2->diff($d1)->y;
                            $plural = false;
                            if ($profExperience > 1) {
                              $plural = true;
                            }
                            ?>
                            <h4>I started early</h4>
                            <p>I am a <?php echo $age;?> year old, full-time Software Developer with <?php echo $experience;?> years of experience and over <?php echo $profExperience; echo " year"; if($plural){echo "s";}?> of professional experience. </p>
                            <br>
                            <br>
                            <h4>I'm multilingual</h4>
                            <br>
                            <h6>Fluent In:</h6>
                            <p>English, Spanish, HTML, CSS, PHP, Javascript, JQuery, PostgreSQL, Swift, Java and C#</p>
                            <h6>Proficient In:</h6>
                            <p>Unix</p>
                            <h6>Competent In:</h6>
                            <p>Python, Xojo and Bash</p>
                            <br>
                            <br>
                            <h4>I offer a wide range of services</h4>
                            <p>
                              Web server creation and maintenance<br>
                              Website creation from scatch or using any website builder (Wordpress, Squarespace, Wix, etc.)<br>
                              Private email creation<br>
                              Search Engine Optimization (SEO)<br>
                              SQL Database creation and maintenance<br>
                              Mobile application development<br>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h4 style="color: black;">Contact Me</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <form id="contact" action="#" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                  <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Name..." required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-6">
                                  <fieldset>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Email..." required="">
                                  </fieldset>
                                </div>
                                 <div class="col-md-12">
                                  <fieldset>
                                    <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject..." required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Message..." required=""></textarea>
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <button type="submit" id="form-submit" class="btn">Send your message</button>
                                  </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                            <p>&copy; <?php echo date("Y");?> Ryan O'Rourke <br>
                            <a href="http://www.templatemo.com/tm-508-power">Power Theme</a> by <a href="http://www.html5max.com" target="_parent">HTML5 Max</a></p>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <ul class="social-icons">
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Linkedin</a></li>
                            <li><a href="#">Instagram</a></li>
                        </ul>
                    </div>

                    <div class="col-md-2 col-md-offset-2 col-sm-12">
                        <div class="back-to-top">
                            <a href="#top">
                                <i class="fa fa-angle-up"></i>
                                back to top
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="js/jquery-3.3.1.js"></script>


        <script type="text/javascript">
        $(document).ready(function() {
            // mobile nav toggle
            $('#nav-toggle').on('click', function (event) {
                event.preventDefault();
                $('#main-nav').toggleClass("open");
            });
        });

        </script>
    </body>
</html>
<a id="bottom"></a>
