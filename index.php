<?php 

?>
<!DOCTYPE html>
<html>
<head>
    <!-- Meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="all">
    <meta name="language" content="English">
    <meta name="author" content="Saad, Pharell">
    <meta name="description" content="">
    <meta name="keywords" content="AmuseNews, News, Anime, Gaming, Basketball">
    <meta name="copyright" content="copyright">

    <!-- CSS link -->
    <link rel="stylesheet" href="style.css">

    <!-- Hamburger link for small screens -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- Favicon icoon -->
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">

    <!-- Website titel -->
    <title>AmuseNews</title>
</head>
<body>
    <div class="topnav">
        <img src="img/default.png" class="responsive">
        <div class="topnav" id="myTopnav">
            <ul>
                <a href="#home">Home</a>
                <a href="#anime">Anime</a>
                <a href="#basketball">Basketball</a>
                <a href="#gaming">Gaming</a>
                <a href="#contact">Contact</a>
                <div class="topnav-right">
                    <a href="login.php">Login</a>
                    <a href="register.php">Abonneer nu</a>
                </div>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i></a>
            </ul>
        </div>
    </div>
    <main>
        <section id="home">
            <div class="slideshow-container">
                <h2>The latest news</h2>
                <div class="mySlides fade">
                    <img src="./img/aot.jpeg" style="width:100%">
                    <div class="text">Probably 2 more week for the end of the famous anime Attack On Titan</div>
                </div>
                <div class="mySlides fade">
                    <img src="./img/75 nba.png" style="width:100%">
                    <div class="text">NBA 75th Anniversary</div>
                </div>
                <div class="mySlides fade">
                    <img src="./img/EldenRing.jpg" style="width:100%">
                    <div class="text">New game called Elden Ring out now!</div>
                </div>
            </div>
            <br>
            <div style="text-align:center">
                <span class="dot"></span> 
                <span class="dot"></span> 
                <span class="dot"></span> 
            </div>
            <div class="top3news">
                <div class="flexbox">
                    <div class="top3news1">
                        <img src="./img/aots4p2.jpeg" alt="">
                        <p class="top3_text1">The well-known anime (not to be confused with manga!) called Attack on Titan, AKA AoT, is soon to reach it's end sadly. The anime started on April 7th 2013.  </p>
                    </div>
                    <div class="top3news2">
                        <img src="#" alt="">
                        <p class="top3_text2">bla bla bla</p>
                    </div>
                    <div class="top3news3">
                        <img src="#" alt="">
                        <p class="top3_text3">bla bla bla</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="more_news">
            <h2 id="more_news1">More News</h2>
            <h2 id="basketball">Basketball</h2>
            <div class="flexbox">
                <div class="basketball1">
                    <img src="./img/56points.jpg">
                    <h2><strong>LeBron James 56 points</strong></h2>
                    <p class="bask_tekst1"> In much more significant games that decided his NBA championship fortunes, LeBron James basked in his greatness by bathing in champagne. This time, James’ teammates dumped water on him
                    James ensured the Lakers escaped with a 124-116 win over the Golden State Warriors on Saturday by fulfilling a job description few in NBA history have done before. By finishing with a season-high 56 points while shooting 19-for-31 from the field including six from 3-point range and nearly perfect (12-for-13) from the free-throw line along with 10 rebounds, the 37-year-old James became the oldest player in NBA history to post 50-plus points and 10-plus rebounds in a game. He also became the fourth-oldest player to post a 50-point game.</p>
                </div>
                <div class="basketball2">
                    <img src="./img/smh.jpg" alt="">
                    <h2><strong> Simmons&Harden Trade</strong></h2>
                    <p class ="bask_tekst2">The Brooklyn Nets and Philadelphia 76ers have completed a blockbuster trade centered around former Kia NBA MVP James Harden and former All-Star guard Ben Simmons, according to multiple reports.</p>

                    <p class="bask_text2p2"><b>Brooklyn</b> receives:<br>
                    <br>
                    -Ben Simmons<br>
                    -Seth Curry<br>
                    -Andre Drummond<br>
                    -2022 first-round pick (unprotected)<br>
                    -2027 first-round pick (protected)<br>
                    <br>
                    <b>Philadelphia</b> receives:<br>
                    <br>
                    -James Harden<br>
                    -Paul Millsap</p>

                </div>
                <div class="basketball3">
                    <img src="./img/westbrook.jpg" alt="">
                    <h2><strong> Russell Westbrook trade</strong></h2>
                    <p class = "bask_tekst3">The NBA trade deadline came and went this past Thursday. The prospect of the Lakers shaking up their roster went with it. Plenty of reports have since surfaced of what few trade options the Lakers had with their limited assets. That included, confirmation that the much discussed Russell Westbrook for John Wall trade was still on the table for the LA.
                                        It was previously reported that Houston wanted the Lakers 2027 first-round pick in exchange for taking on Westbrook's contract.</p>

                </div>
            </div>
        </section>
    </main>
<script src="nav.js"></script>
<script src="slideshow.js"></script>
</body>
</html>