<?php

?>

<?php include 'header.php';?>


<main class="contact">
    <div class="contactg">
        <h1>CONTACT</h1>
        <p>Pour nous contacter, veuillez utiliser le formulaire ci-dessous.Merci de renseigner tous les champs.</p>
        <form method="post" action="">
            <br>

                <label for="raison">RAISON SOCIALE : </label>
                <input type="text" name="raison" id="raison" /><br>

                <label for="nom">NOM :</label>
                <input type="text" name="nom" id="nom" /><br>

                <label for="telephone">TELEPHONE :</label>
                <input type="text" name="telephone" id="telephone" /><br>

                <label for="email">EMAIL :</label>
                <input type="email" name="email" id="email" /><br>

            <label for="service">SERVICE :</label>
                <input type="text" name="service" id="service" /> <br>

            <label for="message">MESSAGE :</label>
            <textarea name="message" id="message" rows="10" cols="30">
                Saisir un message.
            </textarea>

            <br>

            <label class="hide-submit">
                <input type="submit">
                <svg id="svgb" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 106 39" style="enable-background:new 0 0 106 39;" xml:space="preserve" width="100%" height="100%">
<style type="text/css">
    .st0{fill:none;stroke:#000000;stroke-width:0.5022;stroke-miterlimit:10;}
    .st1{fill:none;stroke:#00B7CD;stroke-width:0.5022;stroke-miterlimit:10;}
    .st2{fill:none;}
    .st3{font-family:'Acronym-Light';}
    .st4{font-size:13.4615px;}
</style>
                    <rect x="4.5" y="8.9" class="st0" width="93.3" height="25.3"/>
                    <rect x="7.6" y="4.3" class="st1" width="96.1" height="27.3"/>
                    <rect x="14.7" y="14.1" class="st2" width="74.2" height="12.8"/>
                    <text transform="matrix(1 0 0 1 31.4326 23.6978)" class="st3 st4">Valider</text>
</svg>
            </label>
        </form>
    </div>
    <div class="texted">
        <h1>NOTRE HISTOIRE</h1>
        <img src="content/ttjivr1t.bmp" alt="" id="image">
        <div class="paragraphe">
        <p>Depuis 1990, la revue << L'Architecture de votre region >> propose un panorama détaillé de l'architecture d'une régio, d'un territoire ou d'un pays.
            <br><br>
        Les sondages réalisés attestent de sa durée de vieet par son aspect référention, de sa fréquente consultation.</p>
        </div>
    </div>
</main>
