<!DOCTYPE html>
<html lang="it-IT" translate="no">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Pisq - Home</title>
        <link rel="icon" type="image/x-icon" href="/icons/pisqLogo.png">
        <link rel="stylesheet" href="./css/home.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="google" content="notranslate">
        <script src="https://kit.fontawesome.com/f75afac589.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <nav>
                <img src="./icons/sashaLogo.svg" alt="Pisq Logo" id="pisqLogo">
                <a href="./index.html" target="_self">
                    <i class="fa-solid fa-house navIcons"></i>
                    <p class="hdrTxt">Home</p>
                </a>
                <a href="./trending.html" target="_self" class="navIconsDea">
                    <i class="fa-solid fa-fire navIcons"></i>
                    <p class="hdrTxt">Trending</p>
                </a>
                <a href="./newest.html" target="_self" class="navIconsDea">
                    <i class="fa-solid fa-clock navIcons"></i>
                    <p class="hdrTxt">Newest</p>
                </a>
                <a href="./upload.html" target="_self" class="navIconsDea">
                    <i class="fa-solid fa-plus navIcons"></i>
                    <p class="hdrTxt">Upload</p>
                </a>
                <a href="./account.html" target="_self" class="navIconsDea">
                    <i class="fa-solid fa-user navIcons"></i>
                    <p class="hdrTxt">Account</p>
                </a>
            </nav>
        </header>
        <main id="mnCnt">
            <div class="rd1" id="frstclm">
                <?php 
                    $dir = "./imgs";
                    $images = glob($dir . "/*.jpg");

                    for($i = 0; $i < count($images); $i++) {
                        if($i == round(count($images) / 4)) {
                            break;
                        }
                        echo "<figure><img src='". $images[$i] ."' alt='Desc' draggable='false'><div class='imgCont'><div class='bgPanel'></div><div class='usrCnt'><div class='cntInf'><div class='pfpUsr'><img 
                         src='./pfpUsr/usr.jpg' alt='User pfp'></div><div class='nmUsr'><a href='#' target='_self'>deeznuts</a></div></div></div></figure>";
                    }
                ?>
            </div>
            <div class="rd1" id="scnclm">
                <?php 
                    $dir = "./imgs";
                    $images = glob($dir . "/*.jpg");

                    for($i = round(count($images) / 4); $i < round(count($images)/4 * 2); $i++) {
                        if($i == round(count($images) / 4 * 2)) {
                            break;
                        }
                        echo "<figure><img src='". $images[$i] ."' alt='Desc' draggable='false'><div class='imgCont'><div class='bgPanel'></div><div class='usrCnt'><div class='cntInf'><div class='pfpUsr'><img 
                         src='./pfpUsr/usr.jpg' alt='User pfp'></div><div class='nmUsr'><a href='#' target='_self'>deeznuts</a></div></div></div></figure>";
                    }
                ?>
            </div>
            <div class="rd1" id="trdclm ">
            <?php 
                    $dir = "./imgs";
                    $images = glob($dir . "/*.jpg");

                    for($i = round(count($images) / 4 * 2); $i < round(count($images)/4 * 3); $i++) {
                        if($i == round(count($images) / 4 * 3)) {
                            break;
                        }
                        echo "<figure class='scnClms'><img src='". $images[$i] ."' alt='Desc' draggable='false'><div class='imgCont'><div class='bgPanel'></div><div class='usrCnt'><div class='cntInf'><div class='pfpUsr'><img 
                         src='./pfpUsr/usr.jpg' alt='User pfp'></div><div class='nmUsr'><a href='#' target='_self'>deeznuts</a></div></div></div></figure>";
                    }
                ?>
            </div>
            <div class="rd1" id="lstclm">
            <?php 
                    $dir = "./imgs";
                    $images = glob($dir . "/*.jpg");

                    for($i = round(count($images) / 4 * 3); $i < round(count($images)); $i++) {
                        echo "<figure class='rxt scnClms'><img src='". $images[$i] ."' alt='Desc' draggable='false'><div class='imgCont'><div class='bgPanel'></div><div class='usrCnt'><div class='cntInf'><div class='pfpUsr'><img 
                         src='./pfpUsr/usr.jpg' alt='User pfp'></div><div class='nmUsr'><a href='#' target='_self'>deeznuts</a></div></div></div></figure>";
                    }
                ?>
            </div>
        </main>
        <footer>

        </footer>
        <script src="./js/code.js"></script>
        <noscript>Abilita JS</noscript>
    </body>
</html>