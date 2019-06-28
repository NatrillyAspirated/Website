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
// asdfasdfsdfhgsdfhgasdfasdg
///asdfasdgasdgasdg

$request = '
<h2>Request our Services</h2>
<form action="POST">
    <label for="name">Your Name</label>
    <input type="text" name="name" id="name">
    <label for="email">Email</label>
    <input type="email" name="email" id="email">
    <label for="phone">Phone Number</label>
    <input type="tel" name="phone" id="phone">
    <label for="message">Message</label>
    <textarea name="message" id="message"></textarea>
    <input type="button" value="Submit">
</form>
<br>

<h4>Owner: Roland Perdue</h4>
<p><a href="Acaciatreecare@hotmail.com">Acaciatreecare@hotmail.com</a></p>
<p><a href="830-480-6265">(830) 480-6265</a></p>
<h5>* We are Fully Insured</h5>
';

$testimonials = [
    [
        "name" => "Ann L.",
        "message" => "I highly recommend Roland Perdue with Acacia Tree Care for any of your tree trimming needs or questions about tree care. Dependable, licensed, trust worthy and a very hard worker. I had received bids from 3 others all coming in way too high and I was feeling pretty discouraged. Roland came out and spent the most time with me. Truly caring about what I wanted and in the end he was half what they bid and I could tell he takes pride in his work. He came out today in this awful weather and did a meticulous job. I am extremely happy and satisfied with his work. His prices are very reasonable."
    ],
    [
        "name" => "Jeremy W.",
        "message" => "Roland with Acacia Tree Care is fabulous. Took care of all the trees on our property that were long overdue from maintenance. He is on time, has great communication and provides guidance on what will look good but also is in the best interest of the tree's health. Highly recommend him to anyone needing tree or landscape care."
    ],
    [
        "name" => "Lee Ann N.",
        "message" => "We just had Roland Perdue cut a couple of dead branches out of a weeping willow. He did a great job and cleaned up the area nicely."
    ],
    [
        "name" => "Susan F.",
        "message" => "Roland and his mate, Tim, did tree trimming for us this week. They did a great job, cleaned up afterwards. Roland is very informed with what he does and give you a good price. I will use him again."
    ],
    [
        "name" => "Amber K.",
        "message" => "Just wanted to let everyone know about a neighbor of ours who does tree service. We are selling our house and Roland came by on short notice and did a great job with our trees! His price was very reasonable after a full days work and the end result did not disappoint. It's nice to support our neighbors."
    ]
]

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Acacia Tree & Landscape Care</title>
    <meta name="description" content="Acacia Tree & Landscape Care">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/img/favicon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css?v=<?php echo time(); ?>">
    <script src="js/jquery-3.3.1.js"></script>
</head>

<body>
    <div class="header">
        <div class="content">
            <div class="logo">
                <img src="img/logo.jpg" alt="" />
            </div>

            <div class="nav">
                <button class="current"
                    onclick="$('.main-container .content').hide(); $('#home').show(); $('button').removeClass('current'); $(this).removeClass('current').addClass('current');">Home</button>
                <button
                    onclick="$('.main-container .content').hide(); $('#services').show(); $('button').removeClass('current'); $(this).removeClass('current').addClass('current');">Services</button>
                <button
                    onclick="$('.main-container .content').hide(); $('#testimonials').show(); $('button').removeClass('current'); $(this).removeClass('current').addClass('current');">Testimonials</button>
                <button
                    onclick="$('.main-container .content').hide(); $('#portfolio').show(); $('button').removeClass('current'); $(this).removeClass('current').addClass('current');">Portfolio</button>
                <!-- <button
                    onclick="$('.main-container .content').hide(); $('#contact-us').show(); $('button').removeClass('current'); $(this).removeClass('current').addClass('current');">Contact
                    Us</button> -->
            </div>

        </div>
    </div>
    <div class="header-separator"></div>
    <div class="main-container">
        <div class="content" id="home">
            <div class="text">
                <h1>Welcome to Acacia Tree and Landscape Care</h1>
                <p>Trees are essential in the balance of nature. They are a beautiful part of Creation and give us
                    pleasure. Trees need tender, loving, professional care to thrive. Acacia Tree and Landscape Care
                    promises to do that for you.</p>

                <p>Acacia is an eco-friendly tree and landscape service company that takes pride in providing quality
                    and thorough work at reasonable prices. Acacia wants to make every effort to reach the clients'
                    expectations for the job we are hired for and Acacia is successful in doing this. All of our
                    clients' will agree.</p>
                <p>Roland Perdue, owner of Acacia Tree and Landscape Care, grew up in Austin, Texas and graduated from
                    the University of Texas in Austin in 1981 with honors, receiving a degree in Biology. He has been in
                    the landscaping and tree service business in and around the Austin area for over 25 years.</p>
            </div>
            <div class="request">
                <img class="full-img" src="img/Roland/on_tree.jpg" alt="">
                <?php echo $request;?>
            </div>
        </div>

        <div class="content" id="services" style="display: none;">
            <div class="text">
                <h1>Our Services</h1>
                <div class="services">
                    <div>
                        <h3>Tree Care</h3>
                        <ul>
                            <li>Consulting</li>
                            <li>Pruning & Shaping</li>
                            <li>Tree Trimming</li>
                            <li>Fertilization</li>
                            <li>Planting</li>
                            <li>Cabling of Limbs and Trunks</li>
                            <li>Stump Grinding</li>
                            <li>Tree Removal</li>
                            <li>Storm Damage</li>
                            <li>Ball Moss Removal</li>
                            <li>Mistletoe Removal</li>
                        </ul>
                    </div>
                    <div>
                        <h3>Landscaping Care</h3>
                        <ul>
                            <li>Consulting</li>
                            <li>Design</li>
                            <li>Planting</li>
                            <li>Shrub Trimming</li>
                            <li>Mulching</li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="request">
                <img class="full-img" src="img/Roland/agave." alt="">
                <?php echo $request;?>
            </div>
        </div>

        <div class="content" id="testimonials" style="display: none;">
            <div class="text">
                <h1>Testimonials</h1>
                <?php
                    foreach ($testimonials as $testimonial) {                        
                        echo '
                        <p>'.$testimonial['message'].'</p>
                        <i>- '.$testimonial['name'].'</i>
                        <br><br><br>
                        ';
                    }
                ?>
            </div>
            <div class="request">
                <img class="full-img" src="img/Roland/agave.png" alt="">
                <?php echo $request;?>
            </div>
        </div>

        <div class="content" id="portfolio">
            <div class="text">
                <h1>Portfolio</h1>
                <?php
                    foreach ($testimonials as $testimonial) {                        
                        
                    }
                ?>
            </div>
            <div class="request">
                <img class="full-img" src="img/Roland/agave.png" alt="">
                <?php echo $request;?>
            </div>
        </div>
    </div>

</body>

<footer>
    <div class="content">
        <h2>&copy; <?php echo date("Y"); ?> Acacia Tree Care</h2>
        <h3>Created by <a href="https://devreo.info">Ryan O'Rourke</a></h3>
    </div>
    </div>
</footer>

</html>