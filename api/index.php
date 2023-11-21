<?php

$error = '';
$successMessage = '';

if ($_POST) {


    if (!$_POST['name']) {
        $error .= 'Name is required.<br>';
    }
    if (!$_POST['email']) {
        $error .= 'An email address is required.<br>';
    }
    if (!$_POST['subject']) {
        $error .= 'Subject is required.<br>';
    }
    if (!$_POST['message']) {
        $error .= 'Message is required.<br>';
    }

    if ($_POST['email'] && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
        $error .= 'The email address is invalid.';

    }

    if ($error != '') {
        $error = '<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' . $error . '</div>';
    } else {
        $to = 'fidenki1429@gmail.com';

        $subject = $_POST['subject'];

        $message = $_POST['message'];

        $headers = 'From: '.$_POST['email']   . "\r\n" .
                 'Reply-To: '.$_POST['email']  . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();


        mail($to, $subject, $message, $headers);

        
    }
  
}

?>
 
 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../public/images/favicon.ico">
    <title>JF-Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="../public/css/styles.css">
  </head>
  
  
  <body class="main-content">
    
    <div class="trans-bg"></div>
    <header class="section sec1 header active" id="home">
        <div class="trans-bg"></div>
        <div class="header-content">
            <div class="left-header">
                <div class="h-shape"></div>
                <div class="image">
                    <img src="../public/images/jf-2.png" alt="justfidel">
                </div>
            </div>
            <div class="right-header">
                <h3>I'm</h3>
                <h1 class="name">
                    <span>Fidelis Adang.<br/></span> 
                </h1>
                <h4>A <span id="element"></span></h4>
                <p>
                    I'm a Full-Stack Web Developer and I love Creating Beautiful and Functional Websites.
                    I work with HTML5, CSS, SCSS, Tailwind-CSS, BootStrap, JavaScript, React JS and Node JS (MERN Stack).
                </p>
                
                <div class="btn-container">
                    <a href="./public/folder/resume.pdf" class="main-btn" download>
                        <span class="btn-text">Download CV</span>
                        <span class="btn-icon"><i class="fa-solid fa-download"></i></span>
                    </a>
                </div>
            </div>
       </div>
    </header> 
    
    <main>
        <section class="section sec2 about" id="about">
        <div class="trans-bg"></div>
            <div class="main-title">
                <h2>About <span>me</span><span class="bg-text">my stats</span></h2>
            </div>
            <div class="about-container">
                <div class="left-about">
                    <h4>About me</h4>
                    <p>
                        I am a Web Developer located in Nigeria. I have a serious passion for Designs, UI effects, animations and dynamic user experiences.
A Well organised person, problem solver and a freelancer with high attention to details. </br></br>I love to learn from other people's experiences and would love to work with positive minded people on various projects to achieve a greater height.
                    </p>
                    <div class="btn-container">
                        <a href="./public/folder/resume.pdf" class="main-btn" download>
                            <span class="btn-text">Download CV</span>
                            <span class="btn-icon"><i class="fa-solid fa-download"></i></span>
                        </a>
                    </div>
                </div>
                <div class="right-about">
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">30+</p>
                            <p class="small-text">Projects <br /> Completed</p>
                        </div>
                    </div>

                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">02+</p>
                            <p class="small-text">Years of <br /> experience</p>
                        </div>
                    </div>

                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">005+</p>
                            <p class="small-text">Happy <br /> clients</p>
                        </div>
                    </div>

                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">02+</p>
                            <p class="small-text">customer <br /> reviews</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="about-stats">
                <h4 class="stat-title">My Skills</h4>

                <div class="progress-bars">

                    <div class="progress-bar">
                        <p class="prog-title">HTML5</p>
                            <div class="progress-con">
                                <p class="prog-text">90%</p>
                                <div class="progress">
                                    <span class="html"></span>
                                </div>
                            </div>
                        </p>
                    </div>

                    <div class="progress-bar">
                        <p class="prog-title">CSS</p>
                            <div class="progress-con">
                                <p class="prog-text">80%</p>
                                <div class="progress">
                                    <span class="css"></span>
                                </div>
                            </div>
                        </p>
                    </div>

                    <div class="progress-bar">
                        <p class="prog-title">JS</p>
                            <div class="progress-con">
                                <p class="prog-text">70%</p>
                                <div class="progress">
                                    <span class="js"></span>
                                </div>
                            </div>
                        </p>
                    </div>

                    <div class="progress-bar">
                        <p class="prog-title">Tailwind CSS</p>
                            <div class="progress-con">
                                <p class="prog-text">75%</p>
                                <div class="progress">
                                    <span class="react"></span>
                                </div>
                            </div>
                        </p>
                    </div>

                    <div class="progress-bar">
                        <p class="prog-title">BOOTSTRAP</p>
                            <div class="progress-con">
                                <p class="prog-text">80%</p>
                                <div class="progress">
                                    <span class="bootstrap"></span>
                                </div>
                            </div>
                        </p>
                    </div>

                    <div class="progress-bar">
                        <p class="prog-title">REACT JS</p>
                            <div class="progress-con">
                                <p class="prog-text">75%</p>
                                <div class="progress">
                                    <span class="react"></span>
                                </div>
                            </div>
                        </p>
                    </div>

                    <div class="progress-bar">
                        <p class="prog-title">NODE</p>
                            <div class="progress-con">
                                <p class="prog-text">75%</p>
                                <div class="progress">
                                    <span class="jq"></span>
                                </div>
                            </div>
                        </p>
                    </div>

                </div>
                
                

            </div>

            <h4 class="stat-title">My Timeline</h4>  

            <div class="timeline">

                <div class="timeline-item">
                    <div class="timeline-icon">
                        <i class="fa-solid fa-briefcase"></i>
                    </div>
                    <p class="timeline-duration">2022 - present</p>
                    <h5>Web Developer <span>- Pistis Connect</span></h5>
                    <p>A Freelancer working on my own projects</p>
                </div>

                <div class="timeline-item">
                    <div class="timeline-icon">
                        <i class="fa-solid fa-briefcase"></i>
                    </div>
                    <p class="timeline-duration">2015 - 2019</p>
                    <h5>Graphics Designer <span>- Design World</span></h5>
                    <p>CorelDraw, Photoshop and Adobe Illustrator</p>
                </div>

                <div class="timeline-item">
                    <div class="timeline-icon">
                        <i class="fa-solid fa-briefcase"></i>
                    </div>
                    <p class="timeline-duration">2010 - 2011</p>
                    <h5>Computer Operator <span>- AfriHub</span></h5>
                    <p>Microsoft Word, Excel and Power-point</p>
                </div>

                <div class="timeline-item">
                    <div class="timeline-icon">
                        <i class="fa-solid fa-briefcase"></i>
                    </div>
                    <p class="timeline-duration">2006 - 2010</p>
                    <h5>BSc. Business Management <span>- University of Calabar</span></h5>
                    <p>A graduate of the University of Calabar, Nigeria</p>
                </div>

                <div class="timeline-item">
                    <div class="timeline-icon">
                        <i class="fa-solid fa-briefcase"></i>
                    </div>
                    <p class="timeline-duration">2002 - 2006</p>
                    <h5>Graphics Designer <span>- G-G Printing</span></h5>
                    <p>A Computer graphics operator, with great color combinations and artistic mind.</p>
                </div>

                

            </div>
        </section>

        <section class="section sec3" id="portfolio">
        <div class="trans-bg"></div>
            <div class="main-title">
                <h2>My <span>Portfolio</span><span class="bg-text">my work</span></h2>
            </div>

            <!-- <p>
                A list of some of my projects
            </p> -->

            <div class="portfolios">

                <div class="portfolio-item">
                    <div class="image">
                        <img  src="../public/images/nl1-w.png" alt="JF-Newsletter">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="https://github.com/JUSTFIDEL/Newsletter-Signup" class="icon" target="_blank" rel="noopener noreferrer">
                                <i class="fa-brands fa-github"></i>
                            </a>
                            <a href="https://newsletter-jfi.onrender.com/" class="icon">
                                <i class="fas fa-link"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="portfolio-item">
                    <div class="image">
                        <img  src="../public/images/tesla11.png" alt="JF-Tesla">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="https://github.com/JUSTFIDEL/jf-tesla-page" class="icon" target="_blank" rel="noopener noreferrer">
                                <i class="fa-brands fa-github"></i>
                            </a>
                            <a href="https://jf-tesla-page.vercel.app/" class="icon">
                                <i class="fas fa-link"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="portfolio-item">
                    <div class="image">
                        <img src="../public/images/manage-w.png" alt="JF-Manage Homepage">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="https://github.com/JUSTFIDEL/jf-manage-tailwind" class="icon" target="_blank" rel="noopener noreferrer">
                                <i class="fa-brands fa-github"></i>
                            </a>
                            <a href="https://manage-page-one.vercel.app" class="icon">
                                <i class="fas fa-link"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="portfolio-item">
                    <div class="image">
                        <img src="../public/images/promptopia.png" alt="JF-Promptopia">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="https://github.com/JUSTFIDEL/jf-promptopedia" class="icon" target="_blank" rel="noopener noreferrer">
                                <i class="fa-brands fa-github"></i>
                            </a>
                            <a href="https://jf-promptopedia.vercel.app/" class="icon">
                                <i class="fas fa-link"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="portfolio-item">
                    <div class="image">
                        <img src="../public/images/dice-w.png" alt="JF-Dicee">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="https://github.com/JUSTFIDEL/dice" class="icon" target="_blank" rel="noopener noreferrer">
                                <i class="fa-brands fa-github"></i>
                            </a>
                            <a href="https://dice-justfidel.vercel.app/" class="icon">
                                <i class="fas fa-link"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="portfolio-item">
                    <div class="image">
                        <img src="../public/images/jf-ecom.png" alt="JF-ecommerce">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="https://github.com/JUSTFIDEL/Justfidel-ecomm" class="icon" target="_blank" rel="noopener noreferrer">
                                <i class="fa-brands fa-github"></i>
                            </a>
                            <a href="https://justfidel-ecomm.vercel.app/" class="icon">
                                <i class="fas fa-link"></i>
                            </a>
                        </div>
                    </div>
                </div>



                <!-- <div class="portfolio-item">
                    <div class="image">
                        <a href="https://justfidel-ecomm.vercel.app/" target="_blank" rel="noopener noreferrer">
                            <img src="images/jf-ecom.png" alt="JF-ecommerce">
                        </a>
                    </div> 
                </div> -->

                

                <!-- <div class="portfolio-item">
                    <div class="image">
                        <img src="images/tindog.png" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="https://justfidel.github.io/tindog" class="icon" target="_blank">
                                <i class="fa-brands fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div> -->
            </div>
        </section>

        <section class="section sec4" id="blogs">
        <div class="trans-bg"></div>
            <div class="blogs-content">
                <div class="main-title">
                    <h2>My <span>Blogs</span><span class="bg-text">my blogs</span></h2>

                    <p>Yet to be Updated!</p>
                </div>
                
                <!-- <div class="blogs">
                    <div class="blog">
                        <img src="images/thumbnail-1.webp" alt="">
                        <div class="blog-text">
                            <h4>
                                How to create a website.
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur 
                                adipisicing elit. Quas quo tempora commodi
                                 consectetur recusandae molestias.
                            </p>
                        </div>
                    </div>

                    <div class="blog">
                        <img src="images/thumbnail-2.webp" alt="">
                        <div class="blog-text">
                            <h4>
                                How to create a website.
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur 
                                adipisicing elit. Quas quo tempora commodi
                                 consectetur recusandae molestias.
                            </p>
                        </div>
                    </div>

                    <div class="blog">
                        <img src="images/thumbnail-3.webp" alt="">
                        <div class="blog-text">
                            <h4>
                                How to create a website.
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur 
                                adipisicing elit. Quas quo tempora commodi
                                 consectetur recusandae molestias.
                            </p>
                        </div>
                    </div>

                    <div class="blog">
                        <img src="images/thumbnail-4.webp" alt="">
                        <div class="blog-text">
                            <h4>
                                How to create a website.
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur 
                                adipisicing elit. Quas quo tempora commodi
                                 consectetur recusandae molestias.
                            </p>
                        </div>
                    </div>

                    <div class="blog">
                        <img src="images/thumbnail-5.webp" alt="">
                        <div class="blog-text">
                            <h4>
                                How to create a website.
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur 
                                adipisicing elit. Quas quo tempora commodi
                                 consectetur recusandae molestias.
                            </p>
                        </div>
                    </div>

                    <div class="blog">
                        <img src="images/thumbnail-6.webp" alt="">
                        <div class="blog-text">
                            <h4>
                                How to create a website.
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur 
                                adipisicing elit. Quas quo tempora commodi
                                 consectetur recusandae molestias.
                            </p>
                        </div>
                    </div>

                    <div class="blog">
                        <img src="images/thumbnail-7.webp" alt="">
                        <div class="blog-text">
                            <h4>
                                How to create a website.
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur 
                                adipisicing elit. Quas quo tempora commodi
                                 consectetur recusandae molestias.
                            </p>
                        </div>
                    </div>

                    <div class="blog">
                        <img src="images/thumbnail-8.webp" alt="">
                        <div class="blog-text">
                            <h4>
                                How to create a website.
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur 
                                adipisicing elit. Quas quo tempora commodi
                                 consectetur recusandae molestias.
                            </p>
                        </div>
                    </div>

                    <div class="blog">
                        <img src="images/thumbnail-9.webp" alt="">
                        <div class="blog-text">
                            <h4>
                                How to create a website.
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur 
                                adipisicing elit. Quas quo tempora commodi
                                 consectetur recusandae molestias.
                            </p>
                        </div>
                    </div>
                </div> -->
                
            </div>
        </section>

        <section class="section sec5 contact" id="contacts">
        <div class="trans-bg"></div>
            <div class="contact-container">
                <div class="main-title">
                    <h2>Contact <span>Me</span><span class="bg-text">my contact</span></h2>
                </div>

                <div class="contact-content-con">
                    <div class="left-contact">
                        <h4>Contact Me</h4>
                        <p>
                            You can reach me at anytime.
                        </p>

                        <div class="contact-info">
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fa-solid fa-location-pin"></i>
                                    <span>Lagos, Nigeria</span>
                                </div>
                            </div>
                                
                            <div class="contact-item">
                                <div class="icon">
                                        <i class="fa-solid fa-envelope"></i>
                                        <span>fidenki1429@gmail.com</span>
                                </div>
                            </div>
                                
                            <div class="contact-item">
                                <div class="icon">
                                        <i class="fa-solid fa-mobile"></i>
                                        <span>+2348121146164</span>
                                </div>
                            </div>
                                
                            <div class="contact-item">
                                <div class="icon">
                                        <i class="fa-solid fa-language"></i>
                                        <span>English</span>
                                </div>
                            </div>
                            
                        </div>
                        

                        <div class="contact-icons">
                            <div class="contact-icon" target="_blank">
                                <a href="https://twitter.com/fideBABA01" target="_blank">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>

                                <a href="https://www.facebook.com/fidelity1010" target="_blank">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>

                                <a href="https://github.com/JUSTFIDEL" target="_blank">
                                    <i class="fa-brands fa-github"></i>
                                </a>

                                <a href="https://www.youtube.com/@fidelisadang9957" target="_blank">
                                    <i class="fa-brands fa-youtube"></i>
                                </a>
                            </div>
                        </div>

                        
                    </div>
                    
                    <div class="right-contact">
                        <!--  onsubmit="sendMail(); reset(); return false;"--> 
                        <div id='error'><? echo $error.$successMessage; ?></div>
                        
                        <form id="my-form" class="contact-form" method="post" action="./api/index.php"> 
                            <div class="input-control i-c-2">
                                <input type="text" placeholder="Your Name" name="name" id="name" required>
                                <input type="email" placeholder="Your Email" name="email" id="email" required>
                            </div>
                            <div class="input-control">
                                <input type="text" placeholder="Enter Subject" name="subject" required id="subject">
                            </div>
                            <div class="input-control">
                                <textarea name="message" id="message" cols="15" rows="8" placeholder="Message here..." required></textarea>
                            </div> 
                            <div class="submit-btn">
                                <input class="button" type="submit" name="submit">
                            </div>
                        </form>
        

                    </div>
                    <div class="copy-right1">&copy;  JustFidel - <script>document.write(new Date().getFullYear());</script></div>
                </div>
                <div class="copy-right">&copy;  JustFidel - <script>document.write(new Date().getFullYear());</script></div>

            </div>
        </section>
    </main>
     
    <div class="controls">
        <div class="control control-1 active-btn" data-id="home">
            <i class="fa-solid fa-house"></i>
        </div>
        <div class="control control-2" data-id="about">
            <i class="fa-regular fa-user"></i>
        </div>
        <div class="control control-3" data-id="portfolio">
            <i class="fa-solid fa-briefcase"></i>
        </div>
        <div class="control control-4" data-id="blogs">
            <i class="fa-solid fa-blog"></i>
        </div>
        <div class="control control-5" data-id="contacts">
            <i class="fa-solid fa-address-card"></i>
        </div>       
    </div>

    <div class="theme-btn">
        <i class="fa-solid fa-circle-half-stroke"></i>
    </div>



    <script defer src="../public/index.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

     <script>
        
        const typed = new Typed('#element', {
          strings: ['FrontEnd Dev.', 'BackEnd Dev.', 'FullStack Dev.'],
          typeSpeed: 100,
          backSpeed: 100,
          backDelay: 1000,
          loop: true
        });

    </script>


  
  </body>
</html>