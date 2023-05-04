<html>
<!--Zona de head unde vom incarca toate fisierele css, font-uri, boostrap-->
<head>
    <title>Learn Cube - Best way of learning</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poltawski+Nowy&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css"
        integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
</head>

<body>
    <!--Bara de navigare ce contine logo, meniu si bara de cautare-->
    <div class="top-level-container">
        <div class="logo"><img src="static/imgs/logo/LearnCube.png"></div>
        <div class="menu">
            <ul class="main-menu">
                <a href="#home">
                    <li>Home</li>
                </a>
                <a href="#about">
                    <li>About Us</li>
                </a>
                <a href="#event">
                    <li>Event</li>
                </a>
                <a href="#team">
                    <li>Team</li>
                </a>
                <a href="#contact">
                    <li>Contact Us</li>
                </a>
            </ul>
        </div>
        <div class="fa-bars">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <div class="search-box">
            <input id="search-bar" type="text" placeholder="Search..">
            <img src="static/imgs/search.png" alt="">
        </div>

    </div>
    <!--Zona de continut pentru a crea efectul parallax-->
    <div id="home" class="hero-container">
        <img class="hero" id="hero0" src="static/imgs/hero parallax_1/Rectangle 53.png">
        <img class="hero" id="hero1" src="static/imgs/hero parallax_1/Vector-1.png">
        <img class="hero" id="hero2" data-speed="2" src="static/imgs/hero parallax_1/Vector.png">
        <img class="hero" id="hero3" data-speed="-2" src="static/imgs/hero parallax_1/Group 222.png">
        <img class="hero" id="hero4" data-speed="2" src="static/imgs/hero parallax_1/Group 160.png">
        <img class="hero" id="hero5" data-speed="-2" src="static/imgs/hero parallax_1/Group 161.png">
        <img class="hero" id="hero6" data-speed="2" src="static/imgs/hero parallax_1/Group 158.png">
        <img class="hero" id="hero7" data-speed="-2" src="static/imgs/hero parallax_1/Group 159.png">
        <div class="hero-info">
            <div id="post-title">Anual learning module 2023</div>
            <div id="hero-title">Best programming practice</div>
            <div id="hero-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat.</div>
            <div id="hero-reg">Sign up</div>
        </div>
    </div>


    <!--Zona de continut principala unde se vor afisa toate detalile evenimentului unde se foloseste Bootstrap
    Elemente folosite: 
        - Containers - elemente de baza pentru folosirea sistemului de grid oferit de Bootstrap
        - row - defineste un nou rand 
        - col - defineste o coloana 
    -->
    <div class="main-content">
        <div class="container-lg"> 
            <div class="row">
                <div class="item">
                    <div class="col-md-6 col-image">
                        <img src="static/imgs/main/1.jpg" alt="">
                    </div>
                    <div class="col-md-6">
                        <div id="about" class="item-info">
                            <div id="title">About Us</div>
                            <div id="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                unknown printer took a galley of type and scrambled it to make a type specimen book. It
                                has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
                            <div id="button">Learn More</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-lg">
            <div class="row ">
                <div class="item">
                    <div class="col-md-6">
                        <div id="event" class="item-info">
                            <div id="title">Event</div>
                            <div id="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                unknown printer took a galley of type and scrambled it to make a type specimen book. It
                                has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
                            <img src="static/imgs/main/1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="item-info">
                            <div id="title">More details</div>
                            <div id="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                unknown printer took a galley of type and scrambled it to make a type specimen book. It
                                has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
                            <img src="static/imgs/main/1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <!--Zona de continut principala unde se va afisa echipa - S-a folosit tot sistemul de grid oferit de Boostrap, plus card-uri  -->
        <div id="team" class="text-title">Meet the team</div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="static/imgs/team/john.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">John</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="static/imgs/team/laura.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Laura</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="static/imgs/team/pavel.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Pavel</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Zona de contact un se afiseaza informatii legate de locatie si un formular de contact
        La apasarea butonului Submit se va accesa un fisier php ce ne ajuta sa salvam in baza de date informatile oferite de user
         -->
        <div id="contact" class="text-title">Contact Us</div>
        <div class="container">
            <div class="col-md-6">
                <div class="container py-4">
                    <form id="contactForm" action="php/contact.inc.php" method="post">
                        <div class="mb-3">
                            <label class="form-label" for="name">Name</label>
                            <input class="form-control" id="name" name="name" type="text" placeholder="Name" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="emailAddress">Email Address</label>
                            <input class="form-control" id="emailAddress" name="emailAddress" type="email" placeholder="Email Address" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" type="text" placeholder="Message"
                                style="height: 10rem;"></textarea>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                        </div>
                    </form>

                <!--Mesaj de informare ce va fi populat dupa apsarea botonului Subimit
                    -->
        
            <?php 
                if(array_key_exists('message', $_GET)){
                    ?>
                    <div class="popup-message">
                        <?php
                        $msg = $_GET['message']; 
                        echo $msg;?>
                        <div class="disposable">x</div>
                     </div><?php
                }
            ?>
                </div>
            </div>
            <div class="col-md-6">
                <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no"
                        marginheight="0" marginwidth="0"
                        src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Craiova+(Learn%20Cube)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                            href="https://www.maps.ie/distance-area-calculator.html">distance maps</a></iframe></div>
            </div>
        </div>
            
    </div>
            
    </div>


</body>

<footer>

    <div class="foot-container">
        <div class="foot-content">
            <div id="logowhite"> <img src="static/imgs/logo/LearnCubeWhite.png" alt=""> </div>
            <div class="foot-menu">
                <ul>
                    <li>Home</li>
                    <li>About Us</li>
                    <li>Shop</li>
                    <li>Catalog</li>
                </ul>
            </div>
            <div class="foot-menu">
                <ul>
                    <li>Blogs</li>
                    <li>Resources</li>
                    <li>Team Members</li>
                    <li>Case Studies</li>
                </ul>
            </div>
        </div>
        <p>&copy;Copyright 2023 Edward Cheznoiu </p>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="static/scripts/parallax.js"></script>
    <script src="static/scripts/nav-bar-mobile.js"></script>
    <script src="static/scripts/popup.js"></script>
</footer>

</html>