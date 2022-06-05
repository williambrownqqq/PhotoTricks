<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/collabsStyle.css">
    <link rel="stylesheet" href="styles/galleryHeaderStyle.css">
    <link rel="stylesheet" href="styles/footer.css">
    <!-- icons -->
    <script src="https://kit.fontawesome.com/c18b586157.js" crossorigin="anonymous"></script> 
</head>
<body>
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
    </header>
    <div class="container">
        <div class="CollabTitle">
            <p>Collabs</p>
        </div>
        <div class="card card1">
            <a href="https://www.nomatic.com/collections/camera?utm_source=peters+website&utm_medium=influencer&utm_id=peter+mckinnons+website">
            <div class="card-image">
                <img src="https://images.squarespace-cdn.com/content/v1/53ac5f13e4b0c4e738760606/1638378997299-I5QA8KGG4RAW6XQHYQVO/NomaticBanner72-2.jpg" alt="">
            </div>
                <p>PhotoTricks × Nomatic</p>
                <h3>Camera bags</h3>
                </a>
        </div>
        <div class="card card2">
            <a href="https://mint.ca/store/coins/pure-silver-coloured-coin---peter-mckinnon-photo-series-moraine-lake---mintage-5000-2019-prod3500021">
            <div class="card-image">
                <img src="   https://images.squarespace-cdn.com/content/v1/53ac5f13e4b0c4e738760606/1644508793852-QZKM0577SIUTXJNVYHJ7/CoinPM2K16x6.jpg?format=2500w" alt="">
             
            </div>
            <div class="collabText">
                <p>PhotoTricks × Royal Canadian Mint</p>
                <h3>Moraine Lake Coin</h3>
        </div>
        </a>
        </div>
        <div class="card card3">
            <a href="https://www.red.com/v-raptor">
            <div class="card-image">
                <img src=" https://images.squarespace-cdn.com/content/v1/53ac5f13e4b0c4e738760606/1644509091451-TPGF3GNT0LCBRLVWWJOK/AAPM2K16x6.jpg?format=2500w" alt="">
            </div>
            <div class="collabText">
            <p>PhotoTricks × RED</p>
            <h3>Cool cameras</h3>
        </div>
        </a>
        </div>
        <div class="card card4">
            <a href="https://www.trekbikes.com/us/en_US/remedy/">
            <div class="card-image">
                <img src="https://images.squarespace-cdn.com/content/v1/53ac5f13e4b0c4e738760606/1637773540751-P12WVJI3PUZOYPRJYC5S/ClocksBanner72.jpg?format=2500w" alt="">
            </div>
            <div class="collabText">
                <p>PhotoTricks × Trek</p>
                <h3>Mountain bikes</h3>
        </div>
            </a>
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
                    <ul>
                        <li>Say Hello</li>
                        <li>alexey.zanchenko@gmail.com</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script> 
<script src="jaliswall.js"></script>

<script type="text/javascript">
    $('.wall').jaliswall({
        item: '.wall-item',
        columnClass : '.wall-column'
    });

</script>
<script type="text/javascript" src="navy.js"></script>
</html>
