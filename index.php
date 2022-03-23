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
                        <h2 class="bask_titel1"><b>Attack on Titan</b></h2>
                        <p class="top3_text1">
                            The well-known anime (not to be confused with manga!) called Attack on Titan, AKA AoT, is soon to reach it's end sadly.
                            The anime started on April 7th 2013.
                        </p>
                    </div>
                    <div class="top3news2">
                        <img src="./img/NBA-75.jpg" alt="">
                        <h2 class="bask_titel1"><b>NBA's 75th anniversary</b></h2>
                        <p class="top3_text2">
                            NBA All-Star Weekend was a showcase of today's superstars, but it was also a celebration of the best players throughout 75
                            years of league history.
                        </p>
                        
                        <p class="top3_text2">
                            Earlier in the 2021-22 season, the NBA unveiled its 75th Anniversary Team, a squad full of iconic players representing different points in 
                            the evolution of basketball.
                            ESPN's NBA expert panel voted on thousands of head-to-head player matchups, taking into consideration the quality and quantity of their NBA
                            contributions.
                        </p>
                    </div>
                    <div class="top3news3">
                        <img src="#" alt="">
                        <h2 class="bask_titel1"><b>New game: Elden Ring !?</b></h2>
                        <p class="top3_text3">Lorem ipsum</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="more_news">
            <h2 id="more_news1">More News</h2>
            <h2 id="basketball">Basketball</h2>
            <div class="flexbox">
                <div class="basketball1">
                    <img src="./img/56points.jpg" class="responsive">
                    <h2 class="bask_titel1"><b>LeBron James 56 points</b></h2>
                    <p class="bask_text1"> 
                        In much more significant games that decided his NBA championship fortunes, LeBron James basked in his greatness by bathing in
                        champagne. This time, James’ teammates dumped water on him
                    </p>

                    <p class="bask_text1">
                        James ensured the Lakers escaped with a 124-116 win over the Golden State Warriors on Saturday by fulfilling a job description
                        few in NBA history have done before. 
                    </p>
                    <p class="bask_text1">    
                        By finishing with a season-high 56 points while shooting 19-for-31 from the field including six from
                        3-point range and nearly perfect (12-for-13) from the free-throw line along with 10 rebounds, the 37-year-old James became the oldest player in
                        NBA history to post 50-plus points and 10-plus rebounds in a game. He also became the fourth-oldest player to post a 50-point game.
                    </p>
                </div>
                <div class="basketball2">
                    <img src="./img/smh.jpg" class="responsive">
                    <h2 class="bask_titel2"><b> Simmons & Harden Trade</b></h2>
                    <p class ="bask_text2">
                        The Brooklyn Nets and Philadelphia 76ers have completed a blockbuster trade centered around former Kia NBA MVP James Harden and former All-Star
                        guard Ben Simmons, according to multiple reports.
                    </p>

                    <p class="bask_text2p2"><b>Brooklyn</b> receives:</p>
                    
                    <p class="bask_text2p2">
                        -Ben Simmons<br>
                        -Seth Curry<br>
                        -Andre Drummond<br>
                        -2022 first-round pick (unprotected)<br>
                        -2027 first-round pick (protected)<br>
                    </p>
                    
                    <p class="bask_text2p2"><b>Philadelphia</b> receives:</p>

                    <p class="bask_text2p3">
                        -James Harden<br>
                        -Paul Millsap<br>
                    </p>

                </div>
                <div class="basketball3">
                    <img src="./img/westbrook.jpg" class="responsive">
                    <h2 class="bask_titel3"><b> Russell Westbrook trade</b></h2>
                    <p class = "bask_text3">
                        The NBA trade deadline came and went this past Thursday. The prospect of the Lakers shaking up their roster went with it. Plenty of reports have
                        since surfaced of what few trade options the Lakers had with their limited assets. That included, confirmation that the much discussed Russell
                        Westbrook for John Wall trade was still on the table for the LA.
                    </p>
                      
                    <p class = "bask_text3">
                        It was previously reported that Houston wanted the Lakers 2027 first-round pick in exchange for taking on Westbrook's contract.
                    </p>
                </div>
            </div>
            <h2 id="gaming">Gaming</h2>
            <div class="flexbox">
                <div class="gaming1">
                    <img src="./img/gta 6.jpg">
                    <h2 class="game_titel1"><b>GTA 6 Leak</b></h2>
                    <p class="game_text1">
                        It's almost a shock that GTA 6 is officially happening. Earlier this year, developer Rockstar
                        Games confirmed that "active development for the next entry in the Grand Theft Auto series is well underway."
                        However, it was a tiny note in a recent blog post, rather than a full-blown reveal.
                    </p>

                    <p class="game_text1">
                        For years now there's been so many GTA 6 rumors and gossip doing the rounds that it feels surreal to have
                        anything officially confirmed. We've had leaks suggesting elements of the game's story, setting, features, and
                        other details, so it will be exciting to see what's revealed next by Rockstar. 
                    </p>
                </div>
                <div class="gaming2">
                    <img src="./img/Ps-Plus-.jpg" alt="">
                    <h2 class="game_titel1"><b> PS Plus Games April</b></h2>
                    <p class ="game_text2">ach and every month, as the midway shifts toward the end, many fans become excited for the
                        next PS Plus free game reveal. No two months are created equal, however, and many haven’t seemed too happy with
                        PS Plus so far this year—except for March. PS Plus’ free games for February 2022 were exceptionably
                        controversial, giving out niche or not-full games.
                    </p>

                    <p class ="game_text2">Typically, March releases for PS Plus follow a “big” pattern where it’s one of the best
                        months of the year. It seems safe to say that March 2022 may not have been the biggest March in recent years,
                        but it was still a solid month. Hopefully, what follows in April proves to be the same. There’s no telling what
                        Sony will reveal, expectedly on March 30, but here are a few games that could do well on the service.
                    </p>
                </div>
                <div class="gaming3">
                    <img src="./img/2k23.png" alt="">
                    <h2 class="game_titel1"><b>2k23 Leaks</b></h2>
                    <p class = "game_text3">NBA 2K23 may still be months away, but even the continued success of NBA 2K22 isn't going
                        to slow down the conversation about what's coming next.
                    </p>
                </div>
            </div>
        </section>
    </main>
<script src="nav.js"></script>
<script src="slideshow.js"></script>
</body>
</html>