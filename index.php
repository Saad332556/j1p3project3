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
                <a href="#basketball">Basketbal</a>
                <a href="#gaming">Gaming</a>
                <a href="#contact">Contact</a>
                <a href="login.php">Login</a>
                <a href="register.php">Abonneer nu</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i></a>
            </ul>
        </div>
    </div>
    <main>
        <section id="home">
            <div class="slideshow-container">
                <h2>Het laatste nieuws</h2>
                <div class="mySlides fade">
                    <div class="numbertext">Anime</div>
                    <img src="./img/aots4p2.jpeg" style="width:100%">
                    <div class="text">Probably 2 more week for the end of the famous anime Attack On Titan</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">Basketball</div>
                    <img src="./img/75 nba.png" style="width:100%">
                    <div class="text">NBA 75th Anniversary</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">Gaming</div>
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

            </div>
        </section>

        <section id="news">
            <h2>More News</h2>
            <div class="basketball1">
                <img src="./img/56points.jpg">
                <p class="bask_tekst1"> In much more significant games that decided his NBA championship fortunes, LeBron James basked in his greatness by bathing in champagne. This time, James’ teammates dumped water on him
                James ensured the Lakers escaped with a 124-116 win over the Golden State Warriors on Saturday by fulfilling a job description few in NBA history have done before. By finishing with a season-high 56 points while shooting 19-for-31 from the field including six from 3-point range and nearly perfect (12-for-13) from the free-throw line along with 10 rebounds, the 37-year-old James became the oldest player in NBA history to post 50-plus points and 10-plus rebounds in a game. He also became the fourth-oldest player to post a 50-point game.</p>
            </div>
            <div class="basketball2">
                <img src="./img/smh.jpg" alt="">
                <p>The Brooklyn Nets and Philadelphia 76ers have completed a blockbuster trade centered around former Kia NBA MVP James Harden and former All-Star guard Ben Simmons, according to multiple reports.

                Brooklyn receives:

            
                -Ben Simmons
                -Seth Curry
                -Andre Drummond
                -2022 first-round pick (unprotected)
                -2027 first-round pick (protected)
                Philadelphia receives:

                -James Harden
                -Paul Millsap</p>

            </div>
            <div class="basketball3">

            </div>
        </section>
    </main>
<script src="nav.js"></script>
<script src="slideshow.js"></script>
</body>
</html>