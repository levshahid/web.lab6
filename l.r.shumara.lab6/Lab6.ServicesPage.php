<!DOCTYPE html>
<html>
    <head>
        <meta charset="Utf-8">
        <title>Services</title>

        <link rel="stylesheet" href="Style.Lab6.css">
        <script type="text/javascript" src="jquery-3.6.0.js"></script>
        <script type="text/javascript" src="Lab6.Main.script.js"></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Geostar&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Syne&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <?php
                require "header.php"
            ?>
        </header>
        
        <div class="content">
            <div class="container">

                <main>
                    <div class="mainNoMain">
                        <div class="members1">
                            <div class="membersText1">
                                <div class="innerMembersText1">
                                    Info
                                </div>
                            </div>
                            <div class="membersArrow1">
                                <div class="innerMembersArrow1">
                                    <img src="photos/arrowDown.png" alt="">
                                </div>
                            </div>
                        </div>
        
                        <div class="servicePage">
                            <div class="serve">
                                <img class="logo" src="photos/youtube.png" alt=""> <a href="https://www.youtube.com/"> Youtube </a>
                                <br>
                                <img class="logo" src="photos/chrome.jpg" alt=""> <a href="https://www.google.com/"> Google </a>
                                <br>
                                <img class="logo" src="photos/spotify.png" alt=""> <a href="https://www.spotify.com/"> Spotify </a>
                                <br>
                                <img class="logo" src="photos/steam.png" alt=""> <a href="https://store.steampowered.com/?l=russian"> Steam </a>
                            </div>

                            <div class="textOfServe">
                                You can use any of this services to learn web programming!
                                <br>
                                <img class="dude" src="photos/dude.jpg" alt="">
                            </div>
                        </div>
                        
                              
                    </div>
                </main>
            </div>
        </div>

        
        <footer>
            <?php
                require "footer.php"
            ?>
        </footer>
    </body>
</html>