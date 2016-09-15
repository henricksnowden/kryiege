<!DOCTYPE html>
<html>
    <head>
        <title>Trasicio Maina (c) 2016</title>
        <meta name="description" content="website description" />
        <meta name="keywords" content="website keywords, website keywords" />
        <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
        <!-- Slider -->
        <link rel="stylesheet" type="text/css" href="engine1/style.css" />
        <script type="text/javascript" src="engine1/jquery.js"></script>
        <!--Slider -->
    </head>
    <body BACKGROUND="images/cloud.jpg">
        <div id="main">
            <header>
                <div id="strapline">
                    <div id="welcome_slogan">
                        <h3 style = "color:#FF00FF";>KRYIGE HIGH SCHOOL</h3>
                    </div><!--close welcome_slogan-->
                </div><!--close strapline-->	  
                <nav>
                    <div id="menubar">
                        <ul id="nav">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="ourwork.html">About us</a></li>
                            <li><a href="notices.html">Notices</a></li>
                            <li><a href="projects.html">Projects</a></li>
                            <li class="current"><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </div><!--close menubar-->	
                </nav>
            </header>
            <div id="slideshow_container">
                <div class="slideshow">
                    <ul class="slideshow">
                        <li class="show">
                            <img width="940" height="250" src="images/home_1.jpg" alt="Kryige in pictures" /></li>
                        <li>
                            <img width="940" height="250" src="images/home_3.jpg" alt="Kryige in pictures" /></li>
                    </ul>
                </div>
                <!--close slideshow-->
            </div>
            <!--close slideshow_container-->
            <div id="site_content">
                <div class="sidebar_container">
                    <div class="sidebar">
                        <div class="sidebar_item">
                            <h2>
                                New Website</h2>
                            <p>
                                Welcome to our website. Please have a look around, any feedback is much appreciated.</p>
                        </div>
                        <!--close sidebar_item-->
                    </div>
                    <!--close sidebar-->
                    <div class="sidebar">
                        <div class="sidebar_item">
                            <h2>
                                Latest Update</h2>
                            <h3>
                                March 2013</h3>
                            <p>
                                We now have completed our beautiful, more resouceful Chemistry laboratory. It should
                                be ready for use in the upcomming term.</p>
                        </div>
                        <!--close sidebar_item-->
                    </div>
                    <!--close sidebar-->
                    <div class="sidebar">
                        <div class="sidebar_item">
                            <h3>
                                September 2015</h3>
                            <p>
                                Applications for form one intake are now officially open. Contact us for more details.
                                Terms and conditions apply.</p>
                        </div>
                        <!--close sidebar_item-->
                    </div>
                    <!--close sidebar-->
                    <div class="sidebar">
                        <div class="sidebar_item">
                            <h2>
                                Contact</h2>
                            <p>
                                Phone: +254794273</p>
                            <p>
                                Email: <a href="mailto:academics@kryige.ac.ke">academics@kryige.ac.ke</a></p>
                        </div>
                        <!--close sidebar_item-->
                    </div>
                    <!--close sidebar-->
                </div>
                <!--close sidebar_container-->
                <div id="content">
                    <div class="content_item">
                        <form method='POST' action=""> 
<p>   
   <span>Name:<br>
  <input type="text" name="name" placeholder="Your name" required></span><br>
  <span> Email:<br>
  <input type="text" name="email" placeholder="Your email" required></span><br>
   <span> Comments :<br> <textarea class="contact textarea" rows="8" cols="50" name="comments" placeholder="Feedback" required></textarea> </span>

   <input type="submit" name="submit" value="SUBMIT"/>
</form>
<?php
$con = mysqli_connect("localhost", "root", "", "users");

if (mysqli_connect_errno())
{
    echo "Database error";
}
if (isset($_POST['submit']))
{
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['comments']))

$name = $_POST['name'];
$email = $_POST['email'];
$comments = $_POST['comments'];


$query = "INSERT INTO `feed`(`name`, `email`, `comments`) VALUES ('$name','$email','$comments')";
if (mysqli_query($con, $query))
{
    echo "Thank you for your comment";
}
 else {
    echo "Sorry, something happened. Please try again."; 
 }
}
?></p>
                    </div>
                    <!--close form_settings-->
                    <!-- Slider -->
                    <div id="wowslider-container1">
                        <div class="ws_images">
                            <ul>
                                <li>
                                    <img src="data1/images/brighton_high_school.jpg" alt="Brighton_High_School" title=""
                                         id="wows1_0" /></li>
                                <li>
                                    <img src="data1/images/brighton_high_school_center_for_the_performing_arts.jpg" alt="Brighton_High_School_Center_for_the_Performing_Arts"
                                         title="" id="wows1_1" /></li>
                                <li>
                                    <img src="data1/images/everett_high_school_lansing,_michigan_2.jpg" alt="Everett_High_School_Lansing,_Michigan_2"
                                         title="" id="wows1_2" /></li>
                                <li>
                                    <img src="data1/images/hyundaisouthafrica.jpg" alt="Hyundai-South-Africa" title=""
                                         id="wows1_3" /></li>
                                <li>
                                    <img src="data1/images/img_1617.jpg" alt="IMG_1617" title="" id="wows1_4" /></li>
                                <li><a href="http://wowslider.net">
                                        <img src="data1/images/slideshow1.jpg" alt="http://wowslider.net/" title=""
                                             id="wows1_6" /></a></li>
                                <li>
                                    <img src="data1/images/slideshow3.jpg" alt="slideshow-3" title="" id="wows1_7" /></li>
                            </ul>
                        </div>
                        <div class="ws_bullets">
                            <div>
                                <a href="#" title="Brighton_High_School"><span>
                                        <img src="data1/tooltips/brighton_high_school.jpg" alt="Brighton_High_School" />1</span></a>
                                <a href="#" title="Brighton_High_School_Center_for_the_Performing_Arts"><span>
                                        <img src="data1/tooltips/brighton_high_school_center_for_the_performing_arts.jpg"
                                             alt="Brighton_High_School_Center_for_the_Performing_Arts" />2</span></a>
                                <a href="#" title="Everett_High_School_Lansing,_Michigan_2"><span>
                                        <img src="data1/tooltips/everett_high_school_lansing,_michigan_2.jpg" alt="Everett_High_School_Lansing,_Michigan_2" />3</span></a>
                                <a href="#" title="Hyundai-South-Africa"><span>
                                        <img src="data1/tooltips/hyundaisouthafrica.jpg" alt="Hyundai-South-Africa" />4</span></a>
                                <a href="#" title="IMG_1617"><span>
                                        <img src="data1/tooltips/img_1617.jpg" alt="IMG_1617" />5</span></a> <a href="#"
                                                                                                        title="McClung+MS+hales1295-97+WIDESCREEN"><span>
                                        <img src="data1/tooltips/mcclung+ms+hales129597+widescreen.jpg" alt="McClung+MS+hales1295-97+WIDESCREEN" />6</span></a>
                                <a href="#" title="slideshow-1"><span>
                                        <img src="data1/tooltips/slideshow1.jpg" alt="slideshow-1" />7</span></a> <a href="#"
                                                                                                             title="slideshow-3"><span>
                                        <img src="data1/tooltips/slideshow3.jpg" alt="slideshow-3" />8</span></a>
                            </div>
                        </div>
                        <div class="ws_script" style="position: absolute; left: -99%">
                            <a href="http://wowslider.net">jquery slideshow</a> by WOWSlider.com v8.7
                        </div>
                        <div class="ws_shadow">
                        </div>
                    </div>
                    <script type="text/javascript" src="engine1/wowslider.js"></script>
                    <script type="text/javascript" src="engine1/script.js"></script>
                    <!-- End Slider -->
                </div>
                <!--close content_item-->
            </div>
            <!--close content-->
        </div>
        <!--close site_content-->
        <footer>
            <a href="index.html">Home</a> | <a href="ourwork.html">About us</a> | <a href="notices.html">Notices</a> | <a href="projects.html">Projects</a> | <a href="contact.html">Contact</a><br/><br/>

        </footer>
    </div>
    <!--close main-->
    <!-- javascript at the bottom for fast page loading -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/image_slide.js"></script>
</body>
</html>
