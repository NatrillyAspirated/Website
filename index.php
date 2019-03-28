<?php
// /// For contact form
// if (isset($_POST['name'])) {
//     error_reporting(E_ALL);
//     ini_set('display_errors', 1);
//     $name = strip_tags($_POST['name']);
//     $email = strip_tags($_POST['email']);
//     $subject = strip_tags($_POST['subject']);
//     $message = $name."<br><br>".$email."<br><br>".$message;
//     $message = wordwrap(strip_tags($_POST['message']), 75, "\n");  
//     $headers = "MIME-Version: 1.0" . "\r\n";
//     $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
//     $headers .= 'From: Contact Forms <contact@devreo.info>' . "\r\n";
//     $to = "ryan@devreo.info";
//     //$to = "ryanorourke@yahoo.com";
//     mail($to,$subject,$message,$headers);
//     //header("Location: index.php");
//     //die();
// }
?>


<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <title>Ryan O'Rourke</title>
    <meta name="description" content="Ryan ORourke Portfolio">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/img/favicon.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css?v=<?php echo time();?>">
</head>

<body>
    <section id="top-section">
        <div class="row dr-header">
            <div class="col-md-6">
                <h1>DEVREO</h1>
                <h4>By Ryan O'Rourke</h4>
            </div>
        </div>
        <div class="row dr-title">
            <div class="col-md-12">
                <h1>Web Development, Front to Back</h1>
                <span class="faded-hr"></span>
            </div>
        </div>
    </section>

    <section id="about-section">
        <div class="container-fluid about">
            <div class="row about-content-row" style="overflow: hidden;">
                <div class="col-md-4">
                    <div class="about-item">
                        <h1>Website Management</h1>
                        <h2>My Abilities</h2>
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Domain Registration</h4>
                            </div>
                            <div class="col-md-12">
                                <h4>Web Server Hosting</h4>
                            </div>
                            <div class="col-md-12">
                                <h4>Private Email Creation</h4>
                            </div>
                            <div class="col-md-12">
                                <h4>Digital Ocean, Namecheap and Host Gator</h4>
                            </div>
                            <div class="col-md-12">
                                <h4>Search Engine Optimization (SEO)</h4>
                            </div>
                            <div class="col-md-12">
                                <h4>Database Creation and Maintenance</h4>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="about-item">
                        <h1>Web Development</h1>
                        <h2>Languages & Tools</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <h4>HTML</h4>
                            </div>
                            <div class="col-md-6">
                                <h4>CSS</h4>
                            </div>
                            <div class="col-md-6">
                                <h4>PHP</h4>
                            </div>
                            <div class="col-md-6">
                                <h4>Javascript</h4>
                            </div>
                            <div class="col-md-6">
                                <h4>JQuery</h4>
                            </div>
                            <div class="col-md-6">
                                <h4>JSON</h4>
                            </div>
                            <div class="col-md-6">
                                <h4>PostgreSQL</h4>
                            </div>
                            <div class="col-md-6">
                                <h4>Wordpress</h4>
                            </div>
                            <div class="col-md-6">
                                <h4>Atom</h4>
                            </div>
                            <div class="col-md-6">
                                <h4>VS Code</h4>
                            </div>
                            <div class="col-md-6">
                                <h4>NPM</h4>
                            </div>
                            <div class="col-md-6">
                                <h4>Composer</h4>
                            </div>
                            <div class="col-md-6">
                                <h4>Git</h4>
                            </div>
                            <div class="col-md-6">
                                <h4>SVN</h4>
                            </div>
                            <div class="col-md-6">
                                <h4>Assembla</h4>
                            </div>
                            <div class="col-md-6">
                                <h4>Terminal</h4>
                            </div>
                            <div class="col-md-6">
                                <h4>Bootstrap</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="about-item">
                        <h1>Bug Fixes</h1>

                        <h2>What I Can Fix</h2>
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Code Cleanup & Bugs</h4>
                            </div>
                            <div class="col-md-12">
                                <h4>Web Server Configuration Issues</h4>
                            </div>
                            <div class="col-md-12">
                                <h4>Domain Issues</h4>
                            </div>
                            <div class="col-md-12">
                                <h4>Database Cleanup and Structure Issues</h4>
                            </div>
                            <div class="col-md-12">
                                <h4>Responsive Layout Issues</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
        $d1 = new DateTime('1997-07-4');
        $d2 = new DateTime(date('Y-m-d'));
        $age = $d2->diff($d1)->y;

        $d1 = new DateTime('2012-08-23');
        $d2 = new DateTime(date('Y-m-d'));
        $experience = $d2->diff($d1)->y;

        $d1 = new DateTime('2017-11-15');
        $d2 = new DateTime(date('Y-m-d'));
        $profExperience = $d2->diff($d1)->y;
        $plural = false;
        if ($profExperience > 1) {
            $plural = true;
        }
        ?>

    <section id="bio" class="bio-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Who is Ryan?</h1>
                </div>
                <div class="col-md-12">
                    <p>I am a <?php echo $age;?> year old, full-time Software Developer with <?php echo $experience;?>
                        years of recreational experience and over
                        <?php echo $profExperience; echo " year"; if($plural){echo "s";}?> of professional experience. I
                        love every second of what I do and am
                        constantly trying to elevate my development skills through cleaning up old projects, seeking new
                        knowledge on a daily basis and pushing myself out of my comfort zone.
                    </p>
                    <br>
                    <h2>
                        If you would like to work with me, please contact me below or<br><a
                            href="https://www.fiverr.com/share/VmXVe" target="blank" class="fiverr-link">Visit Me on
                            Fiverr</a>
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio" class="portfolio-section">
        <h1>What am I working on?</h1>
        <p class="portfolio-description">My large projects have all been for internal use. I am working on side projects
            in order to build up my portfolio. See my current projects below.</p>
        <div class="container">
            <div class="row project-row">

                <div class="col-md-6 project-container">
                    <div class="project">
                        <div class="row project-content-row">
                            <div class="col-md-6">
                                <h2>This Website</h2>
                                <div class="text-left">
                                    <p class="project-description">This is my hand-made, personal website. I utilized
                                        Bootstrap and Font Awesome.
                                        Other than that, I created everything from scratch. I am not a web designer, but
                                        I feel like I was able to
                                        make a simplistic portfolio website.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="img/website-mock.png" />
                            </div>
                            <div class="col-md-12 project-tags">
                                <h4>HTML</h4>
                                <h4>CSS</h4>
                                <h4>PHP</h4>
                                <h4>Bootstrap</h4>
                            </div>
                            <div class="col-md-12 project-links text-left">
                                <a href="https://github.com/NatrillyAspirated/Website" target="blank"><i
                                        class="fab fa-github"></i></a>
                                <a href="" target="blank"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Template
                <div class="col-md-6 project-container">
                    <div class="project">
                        <div class="row project-content-row">
                            <div class="col-md-6">
                                <h2>Project Name</h2>
                                <div class="text-left">
                                    <p class="project-description">This is a description about one of the projects that
                                        I will have created. This is a simply a template to demostrate how it will look.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/8/80/Aspect_ratio_-_16x9.svg"
                                    style="background-color: red" />
                            </div>
                            <div class="col-md-12 project-tags">
                                <h4>Project Tag</h4>
                                <h4>Longer Project Tag</h4>
                                <h4>Tag</h4>
                            </div>
                            <div class="col-md-12 project-links text-left">
                                <a href="" target="blank"><i class="fab fa-github"></i></a>
                                <a href="" target="blank"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div> -->

            </div>
        </div>
    </section>

    <section class="contact-me">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Contact Me</h1>
                </div>
            </div>

            <div class="contact-links">
                <a href="mailto:ryan@devreo.info"><i class="fas fa-envelope"></i></a>
                <a href="http://linkedin.com/in/devreo" target="blank"><i class="fab fa-linkedin"></i></a>
                <a href="https://github.com/NatrillyAspirated" target="blank"><i class="fab fa-github"></i></a>
                <a href="https://www.fiverr.com/share/VmXVe" target="blank"><i>fi</i></a>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>&copy; <?php echo date("Y");?> Ryan O'Rourke</h2>
                </div>
                <div class="col-md-6">
                    <h3>Created with the Ryan O'Rourke Framework</h3>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>