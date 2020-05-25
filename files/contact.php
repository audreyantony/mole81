<!-- SECTION CONTACT -->
<section id="contact">

    <h3>contact</h3>
    <p>Vous pouvez nous joindre au <span class="yellow">06 61 21 44 37</span>,<br> sinon envoyez-nous un message :</p>

    <div>
        <form method="post" action="">
            <!-- DONNEES PERSONNELLES -->
                    <h4>Votre nom :</h4>
                    <input type="text" name="nom" placeholder="Dupont"><br>
                    <h4>Votre email :</h4>
                    <input type="email" name="mail" placeholder="email@adresse.com"><br>
                    <h4>Votre numéro :</h4>
                    <input type="tel" id="phone" name="phone"
                           pattern="[0-9]{10}"
                           required placeholder="01.23.45.67.89">

            <!-- TYPES DE TRAVAUX DÉSIRÉ -->
            <div>
                <h4>Quels sont les travaux désiré :</h4>

                <div>
                    <input type="checkbox" class="checkbox" id="raccordement" name="raccordement">
                    <label for="raccordement">Un raccordement privé</label>

                    <input type="checkbox" class="checkbox" id="septiques" name="septiques">
                    <label for="septiques">Instalation d'une fosse septique</label><br>

                    <input type="checkbox" class="checkbox" id="epuration" name="epuration">
                    <label for="epuration">Aménagement d'une mini station d'épuration</label><br>

                    <input type="checkbox" class="checkbox" id="fondations" name="fondations">
                    <label for="fondations">Pose de fondation</label>

                    <input type="checkbox" class="checkbox" id="fosses" name="fosses">
                    <label for="fosses">Arrangement d'un fossé</label><br>

                    <input type="checkbox" class="checkbox" id="drainage" name="drainage">
                    <label for="drainage">Travaux de drainage</label>

                    <input type="checkbox" class="checkbox" id="demolition" name="demolition">
                    <label for="demolition">Un travail de démolition</label><br>

                    <input type="checkbox" class="checkbox" id="recuperation" name="recuperation">
                    <label for="recuperation">Mise en place d'un système de récupération d'eau de pluie</label><br>

                    <input type="checkbox" class="checkbox" id="piscines" name="piscines">
                    <label for="piscines">Escavation pour une instalation de piscine</label>
                </div>

            </div>

            <!-- QUESTIONS SUPPLÉMENTAIRES -->
            <div>
                <h4>Vos questions :</h4>
                <textarea name="question" cols="40" rows="2"></textarea><br>
                <input type="submit" name="envoyer" value="Envoyer" class="boutonenvoyer">


                <?php
                /* DÉCLARATION DE L'ADRESSE MAIL */
                $mole81="contact@mole81.fr";//ADRESSE MAIL PERSO
                $email="mariejacynthe@delamotte.com";

                if(isset($_POST['envoyer'])) { //BOUTON ENVOYER APPUYÉ
                    //VÉRIFICATION DU CHAMP MAIL
                    if(empty($_POST['mail']) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        echo "Le champ mail n'est pas rempli correctement";

                    }else{
                        $ask = "";
                                    if (!empty($_POST['raccordement'])){
                                        $ask .= "Un raccordement privé | ";
                                        }
                                    if (!empty($_POST['septiques'])){
                                        $ask .= "Instalation d'une fosse septique | ";
                                        }
                                    if (!empty($_POST['epuration'])){
                                        $ask .= "Aménagement d'une mini station d'épuration | ";
                                        }
                                    if (!empty($_POST['fondations'])){
                                        $ask .= "Pose de fondation | ";
                                        }
                                    if (!empty($_POST['fosses'])){
                                        $ask .= "Arrangement d'un fossé | ";
                                        }
                                    if (!empty($_POST['drainage'])){
                                        $ask .= "Travaux de drainage | ";
                                        }
                                    if (!empty($_POST['demolition'])){
                                        $ask .= "Un travail de démolition | ";
                                        }
                                    if (!empty($_POST['recuperation'])){
                                        $ask .= "Mise en place d'un système de récupération d'eau de pluie | ";
                                        }
                                    if (!empty($_POST['piscines'])){
                                        $ask .= "Escavation pour une instalation de piscine | ";
                                        }

                                    //SI TOUT EST BON => SEND

                                    $Entetes = "MIME-Version: 1.0\r\n";
                                    $Entetes .= "Content-type: text/html; charset=UTF-8\n";
                                    $Entetes .= "From: MOLE81website. <".$_POST['mail'].">\r\n";
                                    $Entetes .= "Reply-To:<".$_POST['mail'].">\r\n";
                                    //SÉCURISATION DES CHAMP :
                                    $mail=htmlentities($_POST['mail'],ENT_QUOTES,"UTF-8");
                                    $nom=htmlentities($_POST['nom'],ENT_QUOTES,"UTF-8");
                                    $question="<br> Travaux désiré :<br> $ask"."<br>Message :<br> ".htmlentities($_POST['question'],ENT_QUOTES,"UTF-8");

                                    //ENVOI DU MAIL :
                                    if(mail($mole81,$nom,nl2br($question),$Entetes)) {
                                        echo "Le mail à été envoyé avec succès !";

                                    } else {
                                        echo "Une erreur est survenue, le mail n'a pas été envoyé";
                                    }
                                }
                }
                ?>





                <div>
        </form>
    </div>


</section>


<!-- BOUTON HAUT DE PAGE -->
<div id="buttonbdp">
    <a href="#hdp">
        <button class="boutonhdp">
            ▲
        </button>
    </a>
</div>