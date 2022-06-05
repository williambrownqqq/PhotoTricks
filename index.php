<!DOCTYPE html>
<html lang="en">
<head>
    <title>williambrownqqqqq</title>
      <link rel="stylesheet" href="styles/indexStyle.css">
      <link rel="stylesheet" href="styles/about.css">
      <link rel="stylesheet" href="styles/chooseYourCourseStyle.css">
      <link rel="stylesheet" href="styles/LightroomPresetsStyle.css">
      <link rel="stylesheet" href="styles/sliderStyle.css">
      <link rel="stylesheet" href="styles/footer.css">
      <!-- icons -->
      <script src="https://kit.fontawesome.com/c18b586157.js" crossorigin="anonymous"></script> 
      <!-- scroll -->
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>
<body>

      <div class="wrapper">
            <header class="background-image">

                  <nav>
                        <div class="webLogo">
                            <img class="cameraLogo" src ="fragments/cameraLogo.svg">
                        </div>
        
                        <div class="photoTricks">
                        PhotoTricks
                        </div>

                        <div class="menu">
                              <ul id="navID">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="collabs.php">Project</a></li>
                                    <li><a href="gallery.php">Gallery</a></li>
                                    <li ><a id="aboutID">About</a></li>
                                    <li><a href="contacts.php">Contact</a></li>
                              </ul>
                        </div>
                        <div onclick="toggleMenu()" class="burger">
                            <div class="line1"></div>
                            <div class="line2"></div>
                            <div class="line3"></div>
                        </div>
                  </nav>
                <div class="quotexbutton">
                  <div class="quote"><p>20 years later a new story begins, but first,<br> a moment back in time.</p></div>
                <a href="contacts.php" >
                    <button class="button">View Details</button>
                </a>
                </div>

            </header>

            <div id="content" class="content">
                <div class="aboutProject">
                    <p class="aboutTitle">About Project</p>
                <div class="photoANDtext">
                    <div class="aboutTXT">
                        <p>Hello, i’m Alex. With a desire to share my experience and help others, at the start of 2022 I created PhotoTricks - my own internet project that focuses on both the craft and technique of film and digital photography.
        
                        Here you can find both cources and free recourses to improve your skills. Choose courses according to your interests and see the photos made by photographers.
                        
                        As well, you can find different LightRoom presets!
                        
                        </p>
                    </div>
                    <div >
                        <img class="vanPhotoContainer"src ="fragments/van.jpg">
                    </div> 
                </div>
                </div>

                <div class="chooseYourCourse">

                    <p class="title">Choose your course</p>

                    <div class="cards">
                        <a href="https://www.udemy.com/course/learn-landscapes/?utm_source=adwords&utm_medium=udemyads&utm_campaign=LongTail_la.EN_cc.ROW&utm_content=deal4584&utm_term=_._ag_77879424454_._ad_535397279670_._kw__._de_c_._dm__._pl__._ti_dsa-1007766171352_._li_9061020_._pd__._&matchtype=&gclid=CjwKCAjw4ayUBhA4EiwATWyBrmJXWH5unznIMHG_gz5DxPVJjYfyBwAYiM37yPYTQSAH_fdk3JYTdRoCJxgQAvD_BwE">
                        <div class="card-img">
                            <img src="fragments/Landskape.webp" alt="fuji">
                        </div>
                        <div class="card-body">
                            <p>Corey Wolfenbarger</p>
                            <h2>LANDSCAPE PHOTOGRAPHER ON FILM WITH COREY WOLFENBARGER</h2>
                            <div class="grey-block">
                                <p class ="back">Course</p>
                                <p class = "noback">| 20 hours</p>
                            </div>
                        </div>
                    </a>
                    </div>   

                    <div class="cards">
                        <a href="https://fujifilm-dsc.com/en/manual/x-t3/first_step/basic_setup/index.html">
                        <div class="card-img">
                            <img src="fragments/FujiCourse.webp" alt="fuji">
                        </div>
                        <div class="card-body">
                            <p>Peter McKinnon</p>
                            <h2>FUJI X100V SET-UP FOR FILM PHOTOGRAPHY WITH PETER MCKINNON</h2>
                            <div class="grey-block">
                                <p class ="back">Course</p>
                                <p class = "noback">| 120 hours</p>
                            </div>
                        </div>
                    </a>
                    </div>  
                    <div class="cards">
                        <a href="https://markbone.com/">
                        <div class="card-img">
                            <img src="fragments/Workshop.webp" alt="fuji">
                        </div>
                        <div class="card-body">
                            <p>Mark Bone</p>
                            <h2>THE FILM PHOTOGRAPHY WORKSHOP WITH MARK BONE</h2>
                            <div class="grey-block">
                                <p class ="back">Course</p>
                                <p class = "noback">| 90 hours</p>
                            </div>
                        </div>
                    </a>
                    </div>  
                    <div class="cards">
                        <a href="https://www.tracksmith.com/journal/article/joe-greers-decisive-moment">
                        <div class="card-img">
                            <img src="fragments/StreetPhotography.webp" alt="fuji">
                        </div>
                        <div class="card-body">
                            <p>Joe Greer</p>
                            <h2>SUMMER STREET PHOTOGRAPHY ON FILM WITH JOE GREER</h2>
                            <div class="grey-block">
                                <p class ="back">Course</p>
                                <p class = "noback">| 80 hours</p>
                            </div>
                        </div>
                    </a>
                    </div>  
                
                </div>

                <div class="Lightroom-presets">
                    <p class="title">Lightroom presets</p>
                    <div class="LightRoomcards">
                        <a href="https://www.psdly.com/peter-mckinnon-lightroom-presets-v4-2021">
                        <div class="LightRoomcard-img">
                            <img src="fragments/2021V4Vertical4w.jpg" alt="fuji">
                        </div>
                        <div class="LightRoomcard-body">
                            <p>PM Lightroom V4 Presets 2021</p>
                        </div>
                    </a>
                    </div>    
                    <div class="LightRoomcards">
                        <a href="https://freepreset.net/peter-mckinnon-v3-presets.html">
                        <div class="LightRoomcard-img">
                            <img src="fragments/2019v3Presetsw.jpg" alt="fuji">
                        </div>
                        <div class="LightRoomcard-body">
                            <p>PM Lightroom V3 Presets 2019</p>
                        </div>
                    </a>
                    </div> 
                    <div class="LightRoomcards">
                        <a href="https://www.creativebloq.com/features/best-lightroom-presets">
                        <div class="LightRoomcard-img">
                            <img src="fragments/2018FallPresetVertw.jpg" alt="fuji">
                        </div>
                        <div class="LightRoomcard-body">
                            <p>PM Lightroom V2 Presets 2018</p>
                        </div>
                    </a>
                    </div> 
                    <div class="LightRoomcards">
                        <a href="https://elements.envato.com/lp/lightroom-presets/?adposition=&gclid=CjwKCAjw4ayUBhA4EiwATWyBroUeV1eibiVQBesZj8FqaE7j7D4hBBb96l6X0PQKq8g39kcd_pJ8JxoCo8QQAvD_BwE">
                        <div class="LightRoomcard-img">
                            <img src="fragments/2017V1Verticalw.jpg" alt="fuji">
                        </div>
                        <div class="LightRoomcard-body">
                            <p>PM Lightroom V1 Presets 2017</p>
                        </div>
                    </a>
                    </div> 
                </div>

                <div class="partners">
                    <p class="partnersTitle">Our partners</p>
                    <section class="section">

                        <div class="slider">
 
                        <div class="slides">
                            <input type ="radio" name="radio-btn" id="radio1">
                            <input type ="radio" name="radio-btn" id="radio2">
                            <input type ="radio" name="radio-btn" id="radio3">
                            <input type ="radio" name="radio-btn" id="radio4">

                            <div class="slide first">
                                <h1>Kyle McDougall</h1>
                                <div class="imagg">
                                    <img src="fragments/gallery/kyle.jpg" alt="">
                                </div>
                            </div>
                            <div class="slide">
                                <h1>Peter McKinnon</h1>
                                <div class="imagg">
                                    <img src="fragments/gallery/peter.jpg" alt="">
                                </div>
                            </div>
                            <div class="slide">
                                <h1>Willem Verbeck</h1>
                                <div class="imagg">
                                    <img src="fragments/gallery/char.jpg" alt="">
                                </div>
                            </div>
                            <div class="slide">
                                <h1>Joe Greer</h1>
                                <div class="imagg">
                                    <img src="fragments/gallery/calvin.jpg" alt="">
                                </div>
                            </div>

                            <div class="navigation-auto">
                                <div class="auto-b1"></div>
                                <div class="auto-b2"></div>
                                <div class="auto-b3"></div>
                                <div class="auto-b4"></div>
                            </div>

                            <div class="navigation-manual">
                                <label for="radio1" class="manual-btn"></label>
                                <label for="radio2" class="manual-btn"></label>
                                <label for="radio3" class="manual-btn"></label>
                                <label for="radio4" class="manual-btn"></label>
                            </div>

                        </div>
                        
                        </div>
                    </section>
                </div>
            </div>

            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="footer-col">
                            <!-- <h4>address</h4> -->
                            <ul>
                                <li>Workarea</li>
                                <li>8 Builders Avenue</li>
                                <li>Kiev</li>
                                <li>MS 97545 7954</li>
                            </ul>
                        </div>

                        <div class="footer-col">
                            <!-- <h4>social-networks</h4> -->
                            <div class="social-networks">
                                <ul>
                                    <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-square"></i></a>
                                    <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="https://twitter.com/home?lang=ru"><i class="fa-brands fa-twitter"></i></a>
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
      <script type="text/javascript" src="index.js"></script>

      <script type="text/javascript">
        var counter=1;
        setInterval(function(){
            document.getElementById('radio' + counter).checked=true;
            counter++;
            if(counter > 4){
                counter = 1;
            }
        },5000);
      </script>

    

    

</body>
</html>
