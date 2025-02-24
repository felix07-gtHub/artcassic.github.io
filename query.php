<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homepage.css">
    <link rel="icon" href="./IMAGE/LOGO/icon.png">
    
    <script src="artclassic.js" type="text/javascript"></script>
    <title>ARTClassic</title>
</head>
<body>    
        <!--NAVIFATION BAR-->
    <nav>   
        <h1 onclick="toggleMenu(this)">&#9776</h1>   

        <section id="menu">
            <div class="flexbox">
                <div>
                    <a href="#title">HOME</a><br>
                    <a href="#about">ABOUT</a><br>
                    <a href="#people">PEOPLE</a>
                </div>
                
                <div>
                    <a href="#service">SERVICES</a><br>
                    <a href="#gallery">GALLERY</a><br>
                    <a href="#contact">CONTACT</a>
                </div>
            </div>
        </section>
        
        <a href="#title">
            <img src="./IMAGE/LOGO/icon.png" alt="Logo" type="png">
        </a>
        <a href="#about">ABOUT</a>
        <a href="#people">PEOPLE</a>
        <h1 >ARTClassic</h1>
        <a href="#service">SERVICES</a>
        <a href="#gallery">GALLERY</a>
        <a style="margin-right: 25px;" href="#contact">CONTACT</a>
    </nav>
    
    <section id="title">    
        <div id="background">
            <img src="./IMAGE/background.png" alt="Museum" type="png">
        </div>

        <img src="./IMAGE/LOGO/logo.png" alt="Logo" type="png" style="position: relative;">

        <h1>
            WELCOME TO ART CLASSIC
        </h1>

            <!--BUTTON-->
        <a href="#about">
            <input type="button" name="button" value="EXPLORE">
        </a>
    </section>

    <section id="about">    
        <div class="first-div">
            
                <!-- USED GIF TO MINIMIZE LOADING PROCESS. -->
            <img src="./IMAGE/cinematography.gif" alt="Cinematography" type="gif">
            <h1>ABOUT.</h1>
        </div>

        <div class="container">
            <div class="galleries">
                <p>
                    ArtClassic is a website that showcases paintings from famous art movements like
                    Romanticism, Baroque, and Renaissance. It aims to make these works accessible to
                    students, art enthusiasts, and others with a creative spirit. The collection
                    captures the creative, cultural, and historical significance of each era, providing
                    insight into the worlds of the greatest artists.
                </p>
                
                    <!--BUTTON-->
                <a href="#gallery">
                    <input type="button" name="button" value="GALLERIES">
                </a>
            </div>
    
            <div class="galleries2">
                <div>
                    <img src="./IMAGE/RENAISSANCE/botticelli.jpg" alt="botticelli" type="jpg">
                    <img src="./IMAGE/RENAISSANCE/Leo.png" alt="Leo" type="png">
                    <img src="./IMAGE/RENAISSANCE/Masaccio.jpg" alt="Masaccio" type="jpg">

                    <button onclick="previousCarousel0()" style="left: 0;">&#10094;</button>
                    <button onclick="nextCarousel0()">&#10095;</button>

                        <!--IMAGE INDEX INDICATOR -->
                    <div>
                        <div style="background-color: #fff;"></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <div>
                    <img src="./IMAGE/BAROQUE/Caravaggio.jpg" alt="Caravaggio" type="jpg">
                    <img src="./IMAGE/BAROQUE/Diego Rodríguez de Silva y Velázquez.jpg" alt="Diego Rodríguez de Silva y Velázquez" type="jpg">
                    <img src="./IMAGE/BAROQUE/Peter Paul Rubens.jpg" alt="Peter Paul Rubens" type="jpg">

                    <button onclick="previousCarousel1()" style="left: 0;">&#10094;</button>
                    <button onclick="nextCarousel1()">&#10095;</button>

                        <!--IMAGE INDEX INDICATOR -->
                    <div>
                        <div style="background-color: #fff;"></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <div>
                    <img src="./IMAGE/ROMANTICISM/Eugène Delacroix.jfif" alt="Eugène Delacroix" type="jfif">
                    <img src="./IMAGE/ROMANTICISM/Francisco Goya.jfif" alt="Francisco Goya" type="jfif">
                    <img src="./IMAGE/ROMANTICISM/Théodore Géricault.jpg" alt="Théodore Géricault" type="jpg">

                    <button onclick="previousCarousel2()" style="left: 0;">&#10094;</button>
                    <button onclick="nextCarousel2()">&#10095;</button>

                        <!--IMAGE INDEX INDICATOR -->
                    <div>
                        <div style="background-color: #fff;"></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="people">
        <center>
            <div class="header">
                    
                    <!--TITLE-->    
                <h2 style="margin: 0;">OUR 
                    <span style="color: #31241e">TEAMS</span>
                </h2> 
    
                    <!--ITNRO-->        
                <p>
                    Get to know the innovative people working on our project! Every team member
                    contributes special talents, commitment, and enthusiasm to honor and present the enduring beauty
                    of art. We work together to make the wonders of the Renaissance, Baroque, Romantic, and other art
                    periods interesting and approachable for everyone.
                </p>
            </div>
    
            <div class="flexbox">
    
                    <!--------------------------------------------------LOPEZ-------------------------------------------------->
                <div class="column">
                        
                        <!--1X1 PICTURE-->
                    <a href="./lopez.html">
                        <img src="./IMAGE/1X1/lopez.jpg" alt="Lopez 1x1 picture" type="jpg">
                    </a>
    
                        <!--NAME-->
                    <h3>Hi, I'm
                        <span>Lopez</span>
                    </h3>
    
                        <!--POSITION-->
                    <p>Researcher</p>
    
                    <hr style="margin: 0;">
    
                        <!--DESCRIPTION-->
                    <p>
                        A dedicated researcher and strategist, Pio ensures that
                        every detail of the galleries is accurate and impactful.
                    </p>
    
                        <!--CONTACTS-->
                    <div>    
                        <hr>
                        
                        <div>
                            <a style="text-decoration: none;" href="https://www.facebook.com/username">
                                <img src="./IMAGE/ICON/facebook.png" alt="facebook icon" type="png" style="border: none;">
                            </a>
                            <a style="text-decoration: none;" href="https://www.gmail.com/username">
                                <img src="./IMAGE/ICON/gmail.png" alt="gmail icon" type="png" style="border: none;">
                            </a>
                            <a style="text-decoration: none;" href="https://www.instagram com/username">
                                <img src="./IMAGE/ICON//instagram.JPEG" alt="instagram icon" type="JPEG" style="border: none;">
                            </a>
                            <a style="text-decoration: none;" href="https://www.x.com/username">
                                <img src="./IMAGE/ICON/x.JPEG" alt="x icon" type="JPEG" style="border: none;">
                            </a>
                        </div>
                    </div>
    
                </div>            
                    <!---------------------------------------------------------------------------------------------------->
    
                    <!--------------------------------------------------OLAN-------------------------------------------------->
                <div class="column">
                        
                        <!--1X1 PICTURE-->
                    <a href="./olan.html">
                        <img src="./IMAGE/1X1/olan.jpg" alt="Olan 1x1 picture" type="jpg">
                    </a>

                        <!--NAME-->
                    <h3>Hi, I'm
                        <span>Olan</span>
                    </h3>

                        <!--POSITION-->
                    <p>Programmer </p>

                    <hr style="margin: 0;">

                        <!--DESCRIPTION-->
                    <p>
                        A talented programmer who creates the website's essential
                        features, making sure it functions properly and has a user-friendly interface.
                    </p>
    
                        <!--CONTACTS-->
                    <div>    
                        <hr>
                        
                        <div>
                            <a style="text-decoration: none;" href="https://www.facebook.com/username">
                                <img src="./IMAGE/ICON/facebook.png" alt="facebook icon" type="png" style="border: none;">
                            </a>
                            <a style="text-decoration: none;" href="https://www.gmail.com/username">
                                <img src="./IMAGE/ICON/gmail.png" alt="gmail icon" type="png" style="border: none;">
                            </a>
                            <a style="text-decoration: none;" href="https://www.instagram com/username">
                                <img src="./IMAGE/ICON//instagram.JPEG" alt="instagram icon" type="JPEG" style="border: none;">
                            </a>
                            <a style="text-decoration: none;" href="https://www.x.com/username">
                                <img src="./IMAGE/ICON/x.JPEG" alt="x icon" type="JPEG" style="border: none;">
                            </a>
                        </div>
                    </div>

                </div>            
                    <!---------------------------------------------------------------------------------------------------->

    
                    <!--------------------------------------------------PIOL-------------------------------------------------->
                <div class="column">
                            
                        <!--1X1 PICTURE-->
                    <a href="./piol.html">
                        <img src="./IMAGE/1X1/piol.jpg" alt="Piol 1x1 picture" type="jpg">
                    </a>

                        <!--NAME-->
                    <h3>Hi, I'm
                        <span>Piol</span>
                    </h3>

                        <!--POSITION-->
                    <p>Designer</p>

                    <hr style="margin: 0;">

                        <!--DESCRIPTION-->
                    <p>
                        A creative genius with a focus on design and aesthetics,
                        makes the project's visual elements come to life.
                    </p>
    
                        <!--CONTACTS-->
                    <div>    
                        <hr>
                        
                        <div>
                            <a style="text-decoration: none;" href="https://www.facebook.com/username">
                                <img src="./IMAGE/ICON/facebook.png" alt="facebook icon" type="png" style="border: none;">
                            </a>
                            <a style="text-decoration: none;" href="https://www.gmail.com/username">
                                <img src="./IMAGE/ICON/gmail.png" alt="gmail icon" type="png" style="border: none;">
                            </a>
                            <a style="text-decoration: none;" href="https://www.instagram com/username">
                                <img src="./IMAGE/ICON//instagram.JPEG" alt="instagram icon" type="JPEG" style="border: none;">
                            </a>
                            <a style="text-decoration: none;" href="https://www.x.com/username">
                                <img src="./IMAGE/ICON/x.JPEG" alt="x icon" type="JPEG" style="border: none;">
                            </a>
                        </div>
                    </div>

                </div>            
                    <!---------------------------------------------------------------------------------------------------->

    
                    <!--------------------------------------------------VILLAFLROES-------------------------------------------------->
                <div class="column">
                                
                        <!--1X1 PICTURE-->
                    <a href="./villaflores.html">
                        <img src="./IMAGE/1X1/villaflores.jpg" alt="Villaflores 1x1 picture" type="jpg">
                    </a>

                        <!--NAME-->
                    <h3>Hi, I'm
                        <span>Villaflores</span>
                    </h3>

                        <!--POSITION-->
                    <p>Leader</p>

                    <hr style="margin: 0;">

                        <!--DESCRIPTION-->
                    <p>
                        A visionary leader with an eye for detail and a love of the arts,
                        makes sure the group remains motivated and on course.
                    </p>
    
                        <!--CONTACTS-->
                    <div>    
                        <hr>
                        
                        <div>
                            <a style="text-decoration: none;" href="https://www.facebook.com/username">
                                <img src="./IMAGE/ICON/facebook.png" alt="facebook icon" type="png" style="border: none;">
                            </a>
                            <a style="text-decoration: none;" href="https://www.gmail.com/username">
                                <img src="./IMAGE/ICON/gmail.png" alt="gmail icon" type="png" style="border: none;">
                            </a>
                            <a style="text-decoration: none;" href="https://www.instagram com/username">
                                <img src="./IMAGE/ICON//instagram.JPEG" alt="instagram icon" type="JPEG" style="border: none;">
                            </a>
                            <a style="text-decoration: none;" href="https://www.x.com/username">
                                <img src="./IMAGE/ICON/x.JPEG" alt="x icon" type="JPEG" style="border: none;">
                            </a>
                        </div>
                    </div>

                </div>            
                    <!---------------------------------------------------------------------------------------------------->

        </center>
    </section>
    
    <section id="service">
        <center>
            <div class="header">
                    
                    <!--TITLE-->    
                <h2>SERVICES</h2>
    
                    <!--ITNRO-->        
                <p>
                    We provide a variety of services to bring the beauty of
                    classic art to life. Discover the tales behind classic works of art, explore
                    virtual galleries, and study famous art movements like Romanticism, Baroque,
                    and Renaissance. Our platform offers information, motivation, and resources to
                    help you develop a deeper understanding of art history, regardless of whether
                    you're a student, art fan, or just inquisitive.
                </p>
            </div>
            
            <hr style="width: 75%;">
    
            <div class="flexbox">
    
                    <!--------------------------------------------------SERVICE 1-------------------------------------------------->
                <div class="column">
    
                        <!--NAME-->
                    <h3>Art Exhibitions</h3>
    
                        <!--DESCRIPTION-->
                    <p>Virtual tours and carefully chosen galleries featuring works of art from the Renaissance, Baroque, and Romantic eras.</p>
    
                    <div></div>
                </div>            
                    <!---------------------------------------------------------------------------------------------------->
    
                    <!--------------------------------------------------SERVICE 2-------------------------------------------------->
                <div class="column">
    
                        <!--NAME-->
                    <h3>Art Education</h3>

                        <!--DESCRIPTION-->
                    <p>Discover the background, methods, and tales of famous artworks and art movements.</p>

                    <div></div>
                </div>            
                    <!---------------------------------------------------------------------------------------------------->

                    <!--------------------------------------------------SERVICE 3-------------------------------------------------->
                <div class="column">
    
                        <!--NAME-->
                    <h3>Community Engagement</h3>

                        <!--DESCRIPTION-->
                    <p>A platform to connect with art lovers through forums, discussion panels, and social media collaborations</p>

                    <div></div>
                </div>            
                    <!---------------------------------------------------------------------------------------------------->

                    <!--------------------------------------------------SERVICE 4-------------------------------------------------->
                <div class="column">
        
                        <!--NAME-->
                    <h3>Digital Art Archive</h3>

                        <!--DESCRIPTION-->
                    <p>View a variety of vintage artworks in high definition with thorough descriptions and background information.</p>

                    <div></div>
                </div>            
                    <!---------------------------------------------------------------------------------------------------->
            </div>
        </center>
    </section>
    
    <section id="gallery">
        <div></div>

        <center>
            <h1>GALLERY</h1>

            <div class="flexbox">
                
                    <!--------------------------------------------------RENAISSANCE-------------------------------------------------->
                <div class="column">
                    <div>
                        <img src="./IMAGE/RENAISSANCE/renaissance.jpg" alt="Renaissance" type="jpg">
                    </div>

                        <!--BUTTON-->
                    <a href="./renaissance.html">
                        <input type="button" name="button" value="Renaissance">
                    </a>
                </div>            
                    <!---------------------------------------------------------------------------------------------------->

                    <!--------------------------------------------------BAROQUE-------------------------------------------------->
                <div class="column">
                    <div>
                        <img src="./IMAGE/BAROQUE/baroque.jpg" alt="Baroque" type="jpg">
                    </div>

                        <!--BUTTON-->
                    <a href="./baroque.html">
                        <input type="button" name="button" value="Baroque">
                    </a>
                </div>            
                    <!---------------------------------------------------------------------------------------------------->

                    <!--------------------------------------------------ROMANTICISM-------------------------------------------------->
                <div class="column">
                    <div>
                        <img src="./IMAGE/ROMANTICISM/romanticism.jpg" alt="Romanticism" type="jpg">                        
                    </div>

                        <!--BUTTON-->
                    <a href="./romanticism.html">
                        <input type="button" name="button" value="Romanticism">
                    </a>
                </div>            
                    <!---------------------------------------------------------------------------------------------------->
            </div>

            <p>
                Enter a digital library of timeless classics, each image telling a tale. With famous pieces
                from the Romantic, Baroque, and Renaissance periods on display, our galleries delve into
                the richness and passion of art from many eras. Experience the magnificence of the past
                in a contemporary manner.
            </p>
        </center>
    </section>
    
    <section id="contact">
        <div class="flexbox">        
                <!-- contact info div-->
            <div class="contact-info">
                <h1>Contact</h1>
                <em>Please fill out the form below to send us an email.</em>
                <p>
                    We would be delighted to hear from you! Please get in touch
                    if you have any queries, suggestions for collaboration, or criticism. Use the form
                    to the right, social media, or email to contact us, and we will respond as quickly
                    as we can. Together, let's honor the beauty of art!
                </p>
                <h3>E-mail:</h3>
                <p>helloartclassic@gmail.com</p>
            </div>
                <!-- contact form div-->
            <div class="contact-form">
                <form action="query.php" method="POST">
                    <input type="text" name="name" placeholder="NAME" required style="margin-top: 50px;">
                    <input type="text" name="E-MAIL" placeholder="E-MAIL" required>
                    <input type="text" name="SUBJECT" placeholder="SUBJECT" required>
                    <textarea id="message" rows="10" placeholder="Message" required name="message"></textarea>

                        <!--BUTTON-->
                    <input type="submit" name="button" value="SUBMIT">
                </form>

                
            </div>
        </div>
    </section>

        <!--------------------------------------------------FOOTER-------------------------------------------------->
    <section id="footer">
        <div class="flexbox">
            <h1>ARTClassic</h1>

            <hr>
            
            <p style="color: #5b5247;">&copy; All  rights reserved.</p>
        </div>
    </section>
        <!------------------------------------------------------------------------------------------------------------>
</body>

    <?php
        require 'server.php';

        $name = $_POST['name'];
        $email = $_POST['E-MAIL'];
        $subject = $_POST['SUBJECT'];
        $message = $_POST['message'];
        
        $insertQuery = "INSERT INTO feedback (name, email, subject, message) VALUES (:name, :email, :subject, :message)";
            
            $execute = $connection->prepare($insertQuery);
            $execute->execute([
                ":name" => $name,
                ":email" => $email,
                ":subject" => $subject,
                ":message" => $message

            ]);

    ?>

</html>