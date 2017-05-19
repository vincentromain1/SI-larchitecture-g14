
<?php include 'header.php';?>
    <main>
        <div class="tarif-content">
            <h2>Tarifs</h2>
            <ul>
                <li>
                    voir en CHF
                </li>
                <li>
                    voir en €
                </li>
            </ul>
            <table cellspacing="0" cellpadding="0">
                <tbody>
                    <tr>
                        <td>Quantité</td>
                        <td>1</td>
                        <td>5</td>
                        <td>10</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>Prix</td>
                        <td>19 €</td>
                        <td>75 €</td>
                        <td>155 €</td>
                        <td>240 €</td>
                </tbody>
            </table>
            <p>Frais de livraison à ajouter</p>
            <table cellspacing="0" cellpadding="0">
                <tbody>
                    <tr>
                        <td>France</td>
                        <td>3 €</td>
                        <td>15 €</td>
                        <td>30 €</td>
                        <td>60 €</td>
                    </tr>
                    <tr>
                        <td>DROM</td>
                        <td>8 €</td>
                        <td>30 €</td>
                        <td>60 €</td>
                        <td>80 €</td>
                    </tr>
                    <tr>
                        <td>COM</td>
                        <td>10 €</td>
                        <td>45 €</td>
                        <td>85 €</td>
                        <td>130 €</td>
                    </tr>
                    <tr>
                        <td>Europe</td>
                        <td>8 €</td>
                        <td>30 €</td>
                        <td>60 €</td>
                        <td>80 €</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <img src="img/couv_283.jpg" alt="couverture choisie" class="img-couverture-achat">
        <section class="form">
            <ul>
                <li>
                    s'abonner
                </li>
                <li>
                    <a href="tarifs-commande.php" sclass="non-active-tarif">
                    commander un n°
                    </a>
                </li>
            </ul>
            <form action="POST">
                <fieldset>
                    <legend>Combien de n° ?</legend>
                    <input id="item-1" class="radio-inline__input" type="radio" name="accessible-radio" value="item-1" checked="checked" />
                    <label class="radio-inline__label" for="item-1">
      5
  </label>
                    <input id="item-2" class="radio-inline__input" type="radio" name="accessible-radio" value="item-2" />
                    <label class="radio-inline__label" for="item-2">
      10
  </label>
                    <input id="item-3" class="radio-inline__input" type="radio" name="accessible-radio" value="item-3" />
                    <label class="radio-inline__label" for="item-3">
      20
  </label>
                </fieldset>
                <fieldset>
                    <legend>Quel n° ?</legend>
                    <input type="number" name="numero" required>
                </fieldset>
                <fieldset>
                    <legend>Entreprise</legend>
                    <label for="sociale">Raison sociale
                    <input type="text" name="sociale" required>
                    </label>
                    <label for="activite">Activité</label>
                    <input type="text" name="activite" required>
                </fieldset>
                <fieldset>
                    <legend>Personne physique</legend>
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" required>
                    <label for="prenom">Prénom</label>
                    <input type="text" name="prenom" required>
                    <label for="fonction">Fonction</label>
                    <input type="text" name="fonction" required>
                </fieldset>
                <fieldset>
                    <legend>Adresse de facturation</legend>
                    <label for="adresse">adresse</label>
                    <input type="text" name="adresse" required>
                    <label for="postal">Code postal</label>
                    <input type="number" name="postal" required>
                    <label for="ville">Ville</label>
                    <input type="text" name="ville" required>
                    <label for="pays">Pays</label>
                    <input type="text" name="pays" required>
                </fieldset>
                <fieldset>
                    <legend>Adresse de livraison</legend>
                    <label for="adresse">adresse</label>
                    <input type="text" name="adresse" required>
                    <label for="postal">Code postal</label>
                    <input type="text" name="postal" required>
                    <label for="ville">Ville</label>
                    <input type="text" name="ville" required>
                    <label for="pays">Pays</label>
                    <input type="text" name="pays" required>
                </fieldset>
                <fieldset>
                    <legend>Information de contact</legend>
                    <label for="mail">Adresse e-mail</label>
                    <input type="email" name="mail" required>
                    <label for="mail-confirmation">Confirmer l'adresse e-mail</label>
                    <input type="email" name="mail-confirmation" required>
                </fieldset>


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
        </section>
    </main>
</body>
</html>