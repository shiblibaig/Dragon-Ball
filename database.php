<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <link rel = stylesheet href = animate.css>
    <link rel="stylesheet" href="main.css">
    <link rel="shortcut icon" type="image/png" href="Dragon Ball.png"/>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>

<div data-role="page">
    <div data-role="header">
        <h1>Dragon-WIKI</h1>
    </div>

    <div data-role="main" ><!--they can have a ui-content class here-->
        <div align="left" class = "mp1"><a href="#dragonBALL" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all ui-icon-check ui-btn-icon-left"><img src="Dragon_Balls_.png" height="200" width="200"/></a>
        </div>
        <div align="left" class = "mp2"><a href="#goku" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all ui-icon-check ui-btn-icon-left"><img src="Goku-main.png" height="300" width="170"></a>
        </div>
        <div align="left" class = "mp3"><a href="#gohan" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all ui-icon-check ui-btn-icon-left"><img src="gohan-main.png" height="300" width="220"></a>
        </div>
        <div align="left" class = "mp4"><a href="#vegeta" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all ui-icon-check ui-btn-icon-left"><img src="Vegeta-main.png" height="300" width="180"></a>
        </div>
        <div align="left" class = "mp5"><a href="#chi-chi" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all ui-icon-check ui-btn-icon-left"><img src="Chi-Chi-main.png" height="300" width="180"></a>
        </div>
        <div class="mp6"><h2>The Beginning >></h2></div>
        <div align="center" data-role="popup" id="dragonBALL" class="ui-content" style=" min-width:250px;">
                <div align="left">
                    <form method="post" action="login.php">
                    <h3 align="center">Dragon Balls</h3>
                       <h4>There are 7 types of dragon balls.</h4>
                       <h4>Named bsed on the number of stars they have on them.</h4>
                    </form>
                </div>
        </div>
        <div align="center" data-role="popup" id="goku" class="ui-content" style=" min-width:250px;">
                <div>
                    <h3>Son Goku</h3>
                    <h4>Lead protagonist, father of Gohan and Goten, husband of Chi Chi.</h4>
                </div>
        </div>
        <div align="center" data-role="popup" id="gohan" class="ui-content" style=" min-width:250px;">
                <div>
                    <h3>Gohan</h3>
                    <h4>Son of Goku and Chi Chi, half Saiyan and not equally enthusiastic about fighting.</h4>
                </div>
        </div>
        <div align="center" data-role="popup" id="vegeta" class="ui-content" style=" min-width:250px;">
                <div>
                    <h3>Vegeta</h3>
                    <h4>Goku's prime nemesis, also a Saiyan.</h4>
                </div>
        </div>
        <div align="center" data-role="popup" id="chi-chi" class="ui-content" style=" min-width:250px;">
                <div>
                    <h3>Chi-Chi</h3>
                    <h4>Goku's wife and human.</h4>
                </div>
        </div>
    </div>
    <form action="mainPage.html">
        <input type="submit" value = "I'm done!">
    </form>
</div>

</body>
</html>
<?php
session_abort();
?>