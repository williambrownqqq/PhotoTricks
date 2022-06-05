<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contacts</title>
    <link rel="stylesheet" href="styles/contacts.css">
    <link rel="stylesheet" href="styles/footer.css">
    <!-- icons -->
    <script src="https://kit.fontawesome.com/c18b586157.js" crossorigin="anonymous"></script>
    <!-- scroll -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>

<body>
    <div class="wrapper">
        <header>
        <nav class="navy">
            <div class="webLogo">
                <img class="cameraLogo" src="fragments/cameraLogo.svg">
            </div>

            <div class="photoTricks">
                PhotoTricks
            </div>

            <div class="menu">
                <ul id="navID">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="collabs.php">Project</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a id="aboutID">About</a></li>
                    <li><a href="contacts.php">Contact</a></li>
                </ul>
            </div>
            <div onclick="toggleMenu()" class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
        </header>

        <div id="content" class="content">
            <div class="contacts">
                <p class="title">Contacts</p>
                <div class="photoANDtext">
                    <img class="myPhoto" src="fragments/myPhoto.png">
                    <div class="contactsTXT">
                        <p>I am Alex Zanchenko, I am second year KPi software engineer student from Kiev, Ukraine. My
                            hobbies are sport and photography, also a contemporary landscape photograpy.My hobbies is
                            driven by a fascination with society, time, and the ever-changing environments that surround
                            us.</p>

                            <p>With a desire to share my experience and help others, at the start of 2022 I created
                            PhotoTricks—an Internet resource that focuses on both the craft and technique of film
                            photography (and also digital). My goal is to provide a resource for enthusiasts of all
                            skill levels that both educates and entertains.</p>

                            <p>I am also programmer and I developed this layout and the site. I believe that programming
                            skills help me to improve a lot of soft skill.
                            For print inquiries, media, or commissions, please send an email to:
                            alexey.zanchenko@gmail.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
 


                    <footer class="footer">
                        <div class="container">
                            <div class="row">
                                <div class="footer-col">
                                    <ul>
                                        <li>Workarea</li>
                                        <li>8 Builders Avenue</li>
                                        <li>Kiev</li>
                                        <li>MS 97545 7954</li>
                                    </ul>
                                </div>

                                <div class="footer-col">
                                    <div class="social-networks">
                                        <ul>
                                            <a href="https://www.facebook.com/"><i
                                                    class="fa-brands fa-facebook-square"></i></a>
                                            <a href="https://www.instagram.com/"><i
                                                    class="fa-brands fa-instagram"></i></a>
                                            <a href="https://twitter.com/home?lang=ru"><i
                                                    class="fa-brands fa-twitter"></i></a>
                                            <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                                        </ul>
                                    </div>
                                </div>
                                <div class="footer-col">
                                    <!-- <h4>email</h4> -->
                                    <ul>
                                        <li>Say Hello</li>
                                        <li>alexey.zanchenko@gmail.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>



                <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
                <script type="text/javascript" src="navy.js"></script>



</body>

</html>