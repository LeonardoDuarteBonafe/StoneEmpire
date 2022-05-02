<!doctype html>
<html lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="style.css" rel="stylesheet">
    <script type="text/javascript" src="main.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <script src="https://smtpjs.com/v3/smtp.js"></script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <link rel="stylesheet" type="text/css" href="lightbox.min.css">
    <script type="text/javascript" src="lightbox-plus-jquery.min.js"></script>

    <link rel="icon" href="Images/Site-Icon/site-icon.webp">
    <title>Stone Empire</title>

    <body class="materials-page">
        <!--<header>
            <nav>
                <div class="logo">
                    <a href="index.html"><img src="Images/Materials/Header/logo.webp"></a>
                </div>
                <div class="mobile-menu">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
                <ul class="nav-list">
<li><a href="http://marcelgranitos.com.br/sobre-nos/" target="_blank">Company</a></li>
<li><a href="#quarry">Materials</a></li>
<li><a href="#enviroments">Kitchen</a></li>
<li><a href="#slab">Bathroom</a></li>
<li><a href="http://marcelgranitos.com.br/contato/" target="_blank">Contact</a></li>
</ul>
                <div class="social">
                    <a href=#>
                        <img src="Images/Materials/Header/facebook-logo.webp">
                    </a>
                    <a href=#>
                        <img src="Images/Materials/Header/instagram-logo.webp">
                    </a>
                </div>
            </nav>
        </header>-->
        
        <?php
        include 'php/navbar.html';
        include 'php/side-menu.html';
        ?>

        <section class="all-materials">
            <div class="title">
                <h2>projects</h2>
                <h1>carried out</h1>
            </div>
            <li class ="menu">
                <ul data-material="all" id="all" class="activeMaterial">all</ul>
                <ul data-material="kitchen" id="kitchen">kitchen</ul>
                <ul data-material="bathroom" id="bathroom">bathroom</ul>
                <ul data-material="fireplace" id="fireplace">fireplace</ul>
                <ul data-material="swimming" id="swimming">swimming pools</ul>
            </li>
            <div class="container-imagens">
                <div class="box productBox kitchen" id="kitchen">
                    <a href="Images/Carried-Out/imagem1.webp" data-lightbox="galeria1" data-title="Kitchen">
                        <img src= "Images/Carried-Out/imagem1.webp">
                    </a>
                    <p>Kitchen</p>
                </div>
                <div class="box productBox kitchen" id="kitchen">
                    <a href="Images/Carried-Out/imagem2.webp" data-lightbox="galeria2" data-title="Kitchen">
                        <img src= "Images/Carried-Out/imagem2.webp">
                    </a>
                    <p>Kitchen</p>
                </div>
                <div class="box productBox fireplace" id="fireplace">
                    <a href="Images/Carried-Out/imagem3.webp" data-lightbox="galeria3" data-title="Fireplace">
                        <img src= "Images/Carried-Out/imagem3.webp">
                    </a>
                    <p>Fireplace</p>
                </div>
                <div class="box productBox kitchen" id="kitchen">
                    <a href="Images/Carried-Out/imagem4.webp" data-lightbox="galeria4" data-title="Kitchen">
                        <img src= "Images/Carried-Out/imagem4.webp">
                    </a>
                    <p>Kitchen</p>
                </div>
                <div class="box productBox kitchen" id="kitchen">
                    <a href="Images/Carried-Out/imagem5.webp" data-lightbox="galeria5" data-title="Kitchen">
                        <img src= "Images/Carried-Out/imagem5.webp">
                    </a>
                    <p>Kitchen</p>
                </div>
                <div class="box productBox bathroom" id="bathroom">
                    <a href="Images/Carried-Out/imagem6.webp" data-lightbox="galeria6" data-title="Bathroom">
                        <img src= "Images/Carried-Out/imagem6.webp">
                    </a>
                    <p>Bathroom</p>
                </div>
                <div class="box productBox kitchen" id="kitchen">
                    <a href="Images/Carried-Out/imagem7.webp" data-lightbox="galeria7" data-title="Kitchen">
                        <img src= "Images/Carried-Out/imagem7.webp">
                    </a>
                    <p>Kitchen</p>
                </div>
                <div class="box productBox bathroom" id="bathroom">
                    <a href="Images/Carried-Out/imagem8.webp" data-lightbox="galeria8" data-title="Bathroom">
                        <img src= "Images/Carried-Out/imagem8.webp">
                    </a>
                    <p>Bathroom</p>
                </div>
                <div class="box productBox kitchen" id="kitchen">
                    <a href="Images/Carried-Out/imagem9.webp" data-lightbox="galeria9" data-title="Kitchen">
                        <img src= "Images/Carried-Out/imagem9.webp">
                    </a>
                    <p>Kitchen</p>
                </div>
                <div class="box productBox bathroom" id="bathroom">
                    <a href="Images/Carried-Out/imagem10.webp" data-lightbox="galeria10" data-title="Bathroom">
                        <img src= "Images/Carried-Out/imagem10.webp">
                    </a>
                    <p>Bathroom</p>
                </div>
                <div class="box productBox kitchen" id="kitchen">
                    <a href="Images/Carried-Out/imagem11.webp" data-lightbox="galeria11" data-title="Kitchen">
                        <img src= "Images/Carried-Out/imagem11.webp">
                    </a>
                    <p>Kitchen</p>
                </div>
                <div class="box productBox kitchen" id="kitchen">
                    <a href="Images/Carried-Out/imagem12.webp" data-lightbox="galeria12" data-title="Kitchen">
                        <img src= "Images/Carried-Out/imagem12.webp">
                    </a>
                    <p>Kitchen</p>
                </div>
                
                <!--
<div class="box productBox fireplace" id="acquamare2">
                    <a href="Images/Materials/Materials/Acquamare2/acquamare2.webp" data-lightbox="galeriaMaterials2" data-title="Acquamare">
                        <img src= "Images/Materials/Materials/Acquamare2/acquamare2.webp">
                    </a>
                    <p>Acquamare</p>
                </div>
                <div class="box productBox kitchen" id="adamantium">
                    <a href="Images/Materials/Materials/Adamantium/adamantium.webp" data-lightbox="galeriaMaterials3" data-title="Adamantium">
                        <img src= "Images/Materials/Materials/Adamantium/adamantium.webp">
                    </a>
                    <p>Adamantium</p>
                </div>
                <div class="box productBox kitchen">
                    <a href="Images/Materials/Materials/Ancara/ancara.webp" data-lightbox="galeriaMaterials4" data-title="Ancara">
                        <img src= "Images/Materials/Materials/Ancara/ancara.webp">
                    </a>
                    <p>Ancara</p>
                </div>
                <div class="box productBox swimming">
                    <a href="Images/Materials/Materials/Calacatta-Crystall/calacatta-crystallo.webp" data-lightbox="galeriaMaterials5" data-title="Calacatta Crystall">
                        <img src= "Images/Materials/Materials/Calacatta-Crystall/calacatta-crystallo.webp">
                    </a>
                    <p>Calacatta Crystall</p>
                </div>
                <div class="box productBox kitchen">
                    <a href="Images/Materials/Materials/Cristallo-Azul/cristallo-azul.webp" data-lightbox="galeriaMaterials6" data-title="Cristallo Azul">
                        <img src= "Images/Materials/Materials/Cristallo-Azul/cristallo-azul.webp">
                    </a>
                    <p>Cristallo Azul</p>
                </div>
                <div class="box productBox bathroom">
                    <a href="Images/Materials/Materials/Cristallo-Polished/cristallo-polished.webp" data-lightbox="galeriaMaterials7" data-title="Cristallo Polished">
                        <img src= "Images/Materials/Materials/Cristallo-Polished/cristallo-polished.webp">
                    </a>
                    <p>Cristallo Polished</p>
                </div>
                <div class="box productBox swimming">
                    <a href="Images/Materials/Materials/Cristallo-Rosa/cristallo-rosa.webp" data-lightbox="galeriaMaterials8" data-title="Cristallo Rosa">
                        <img src= "Images/Materials/Materials/Cristallo-Rosa/cristallo-rosa.webp">
                    </a>
                    <p>Cristallo Rosa</p>
                </div>
                <div class="box productBox kitchen">
                    <a href="Images/Materials/Materials/Crystal-Fantasy/crystal-fantasy.webp" data-lightbox="galeriaMaterials9" data-title="Crystal Fantasy">
                        <img src= "Images/Materials/Materials/Crystal-Fantasy/crystal-fantasy.webp">
                    </a>
                    <p>Crystal Fantasy</p>
                </div>
                <div class="box productBox kitchen">
                    <a href="Images/Materials/Materials/Eclipse/eclipse.webp" data-lightbox="galeriaMaterials10" data-title="Eclipse">
                        <img src= "Images/Materials/Materials/Eclipse/eclipse.webp">
                    </a>
                    <p>Eclipse</p>
                </div>
                <div class="box productBox swimming">
                    <a href="Images/Materials/Materials/Fenix/fenix.webp" data-lightbox="galeriaMaterials11" data-title="Fenix">
                        <img src= "Images/Materials/Materials/Fenix/fenix.webp">
                    </a>
                    <p>Fenix</p>
                </div>
                <div class="box productBox bathroom">
                    <a href="Images/Materials/Materials/Fusion/fusion.webp" data-lightbox="galeriaMaterials12" data-title="Fusion">
                        <img src= "Images/Materials/Materials/Fusion/fusion.webp">
                    </a>
                    <p>Fusion</p>
                </div>
                <div class="box productBox swimming">
                    <a href="Images/Materials/Materials/Maori/maori.webp" data-lightbox="galeriaMaterials13" data-title="Maori">
                        <img src= "Images/Materials/Materials/Maori/maori.webp">
                    </a>
                    <p>Maori</p>
                </div>
                <div class="box productBox swimming">
                    <a href="Images/Materials/Materials/Red-Quartzite/red-quartzite.webp" data-lightbox="galeriaMaterials14" data-title="Red Quartzite">
                        <img src= "Images/Materials/Materials/Red-Quartzite/red-quartzite.webp">
                    </a>
                    <p>Red Quartzite</p>
                </div>
                <div class="box productBox swimming">
                    <a href="Images/Materials/Materials/Sea-Pearl-2cm/sea-pearl-2cm.webp" data-lightbox="galeriaMaterials15" data-title="Sea Pearl 2cm">
                        <img src= "Images/Materials/Materials/Sea-Pearl-2cm/sea-pearl-2cm.webp">
                    </a>
                    <p>Sea Pearl 2cm</p>
                </div>
                <div class="box productBox bathroom">
                    <a href="Images/Materials/Materials/Sea-Pearl-3cm/sea-pearl-3cm.webp" data-lightbox="galeriaMaterials16" data-title="Sea Pearl 3cm">
                        <img src= "Images/Materials/Materials/Sea-Pearl-3cm/sea-pearl-3cm.webp">
                    </a>
                    <p>Sea Pearl 3cm</p>
                </div>
                <div class="box productBox kitchen">
                    <a href="Images/Materials/Materials/Shadow-Storm/shadow-storm.webp" data-lightbox="galeriaMaterials17" data-title="Shadow Storm">
                        <img src= "Images/Materials/Materials/Shadow-Storm/shadow-storm.webp">
                    </a>
                    <p>Shadow Storm</p>
                </div>
                <div class="box productBox kitchen">
                    <a href="Images/Materials/Materials/Statuario/statuario.webp" data-lightbox="galeriaMaterials18" data-title="Statuario">
                        <img src= "Images/Materials/Materials/Statuario/statuario.webp">
                    </a>
                    <p>Statuario</p>
                </div>
                <div class="box productBox kitchen">
                    <a href="Images/Materials/Materials/Taj-Mahal/taj-mahal.webp" data-lightbox="galeriaMaterials19" data-title="Taj Mahal">
                        <img src= "Images/Materials/Materials/Taj-Mahal/taj-mahal.webp">
                    </a>
                    <p>Taj Mahal</p>
                </div>
                <div class="box productBox bathroom">
                    <a href="Images/Materials/Materials/Vulcanic/vulcanic.webp" data-lightbox="galeriaMaterials20" data-title="Vulcanic">
                        <img src= "Images/Materials/Materials/Vulcanic/vulcanic.webp">
                    </a>
                    <p>Vulcanic</p>
                </div>
                <div class="box productBox fireplace">
                    <a href="Images/Materials/Materials/White-Diamond/white-diamond.webp" data-lightbox="galeriaMaterials21" data-title="White Diamond">
                        <img src= "Images/Materials/Materials/White-Diamond/white-diamond.webp">
                    </a>
                    <p>White Diamond</p>
                </div>
                <div class="box productBox kitchen">
                    <a href="Images/Materials/Materials/White-Pearl/white-pearl.webp" data-lightbox="galeriaMaterials22" data-title="White Pearl">
                        <img src= "Images/Materials/Materials/White-Pearl/white-pearl.webp">
                    </a>
                    <p>White Pearl</p>
                </div>
                <div class="box productBox fireplace">
                    <a href="Images/Materials/Materials/White-Soul/white-soul.webp" data-lightbox="galeriaMaterials23" data-title="White Soul">
                        <img src= "Images/Materials/Materials/White-Soul/white-soul.webp">
                    </a>
                    <p>White Soul</p>
                </div>-->
                <!--
<div class="box productBox kitchen">
                    <img src="Images/Materials/Materials/Material1/imagem2.webp">
                    <p>ACQUAMARE 2</p>
                </div>
                <div class="box productBox kitchen">
                    <img src="Images/Materials/Materials/Material1/imagem3.webp">
                    <p>ACQUAMARE 3</p>
                </div>
                <div class="box productBox kitchen">
                    <img src="Images/Materials/Materials/Material1/imagem4.webp">
                    <p>ACQUAMARE 4</p>
                </div>
                <div class="box productBox kitchen">
                    <img src="Images/Materials/Materials/Material1/imagem5.webp">
                    <p>ACQUAMARE 5</p>
                </div>
                <div class="box productBox kitchen">
                    <img src="Images/Materials/Materials/Material1/imagem1.webp">
                    <p>ACQUAMARE</p>
                </div>
                <div class="box productBox kitchen">
                    <img src="Images/Materials/Materials/Material1/imagem2.webp">
                    <p>ACQUAMARE 2</p>
                </div>
                <div class="box productBox kitchen">
                    <img src="Images/Materials/Materials/Material1/imagem3.webp">
                    <p>ACQUAMARE 3</p>
                </div>
                <div class="box productBox kitchen">
                    <img src="Images/Materials/Materials/Material1/imagem4.webp">
                    <p>ACQUAMARE 4</p>
                </div>
                <div class="box productBox kitchen">
                    <img src="Images/Materials/Materials/Material1/imagem5.webp">
                    <p>ACQUAMARE 5</p>
                </div>
                <div class="box productBox kitchen">
                    <img src="Images/Materials/Materials/Material1/imagem1.webp">
                    <p>ACQUAMARE</p>
                </div>
                <div class="box productBox kitchen">
                    <img src="Images/Materials/Materials/Material1/imagem2.webp">
                    <p>ACQUAMARE 2</p>
                </div>
                <div class="box productBox kitchen">
                    <img src="Images/Materials/Materials/Material1/imagem3.webp">
                    <p>ACQUAMARE 3</p>
                </div>
                <div class="box productBox kitchen">
                    <img src="Images/Materials/Materials/Material1/imagem4.webp">
                    <p>ACQUAMARE 4</p>
                </div>
                <div class="box productBox kitchen">
                    <img src="Images/Materials/Materials/Material1/imagem5.webp">
                    <p>ACQUAMARE 5</p>
                </div>
                <div class="box productBox kitchen">
                    <img src="Images/Materials/Materials/Material1/imagem1.webp">
                    <p>ACQUAMARE</p>
                </div>
                <div class="box productBox kitchen">
                    <img src="Images/Materials/Materials/Material1/imagem2.webp">
                    <p>ACQUAMARE 2</p>
                </div>
                <div class="box productBox kitchen">
                    <img src="Images/Materials/Materials/Material1/imagem3.webp">
                    <p>ACQUAMARE 3</p>
                </div>
                <div class="box productBox kitchen">
                    <img src="Images/Materials/Materials/Material1/imagem4.webp">
                    <p>ACQUAMARE 4</p>
                </div>
                <div class="box productBox kitchen">
                    <img src="Images/Materials/Materials/Material1/imagem5.webp">
                    <p>ACQUAMARE 5</p>
                </div>
-->
            </div>
        </section>

        <?php
        include 'php/footer.html';
        ?>
        
    </body>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</html>
