<?php
$tableau = ['A', 'B', 'C', 'D', 'E', 'F', 'G'];
$tableau_nom = ['Mostafa','Hamzea','Jo','Abdel','Eric'];
$tableau_couleur = ['darkkhaki','cornflowerblue','lightblue','lightcoral'];

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="styles.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <title>Document</title>
</head>

<body>
  <header>
    <nav>
      <div>
        <i class="fa-solid fa-outdent"></i>
        <a href="#">
        <img class="logoyt" src="YouTube-White-Full-Color-Logo.wine.svg" alt="" width="150" />
      </a>
    </div>
      

      <div class="bloc_lien">
        <i class="fa-sharp fa-solid fa-house"></i>
        <a href="">Accueil</a>
      </div>

      <div class="bloc_lien">
        <i class="fa-solid fa-toilet-paper"></i>
        <a href="">Shorts</a>
      </div>

      <div class="bloc_lien">
        <i class="fa-brands fa-youtube"></i>
        <a href="">Abonnements</a>
      </div>

      <div class="bloc_lien">
        <i class="fa-brands fa-youtube"></i>
        <a href="">Originals</a>
      </div>

      <div class="bloc_lien">
        <i class="fa-brands fa-spotify"></i>
        <a href="">Youtube Music</a>
      </div>

      <hr style="background-color:#919191; width: 90%; border: none; height: 2px;" />

      <div class="bloc_lien">
        <i class="fa-solid fa-book-open"></i>
        <a href="">Bibliothèque</a>
      </div>

      <div class="bloc_lien">
        <i class="fa-solid fa-clock-rotate-left"></i>
        <a href="">Historique</a>
      </div>

      <div class="bloc_lien">
        <i class="fa-solid fa-film"></i>
        <a href="">Vos Vidéos</a>
      </div>

      <div class="bloc_lien">
        <i class="fa-solid fa-clock"></i>
        <a href="">À Regarder plus tard</a>
      </div>

      <div class="bloc_lien">
        <i class="fa-solid fa-download"></i>
        <a href="">Téléchargements</a>
      </div>

      <div class="bloc_lien">
        <i class="fa-solid fa-list"></i>
        <a href="">Music</a>
      </div>

      <div class="bloc_lien">
        <i class="fa-solid fa-chevron-down"></i>
        <a href="">Plus</a>
      </div>

      <hr style="background-color:#919191; width: 90%; border: none; height: 2px;" />

      <div class="titre">
        <h4 style="color: white; font-weight: 500;">Abonnements</h4>
      </div>


      <?php

      for ($i = 0; $i < 7; $i++) {

        
        $premiere_lettre = $tableau[rand(0, 6)];
        $seconde_lettre = $tableau[rand(0, 6)];
        $nom = $tableau_nom[rand(0, 4)];
        $couleur = $tableau_couleur[rand(0, 3)];
        $initiale = $premiere_lettre . $seconde_lettre;
        echo ' <div class="bloc_chaine">
        <div style="display: flex; flex-direction: row; gap: 18px; align-items: center;">
          <span class="imagechaine" style="background-color:' . $couleur . ' ! important;">' . $initiale . '</span>
          <p>' . $nom . '</p>
        </div>
          <span class="point"></span>
          </div>';
      }

      ?>


      <hr style="background-color:#919191; width: 90%; border: none; height: 2px;" />

      <div class="bloc_lien">
        <i class="fa-sharp fa-solid fa-fire"></i>
        <a href="">Tendances</a>
      </div>

      <div class="bloc_lien">
        <i class="fa-solid fa-music"></i>
        <a href="">Musique</a>
      </div>

      <div class="bloc_lien">
        <i class="fa-solid fa-clapperboard"></i>
        <a href="">Films et TV</a>
      </div>

      <div class="bloc_lien">
        <i class="fa-solid fa-signal"></i>
        <a href="">Direct</a>
      </div>

      <div class="bloc_lien">
        <i class="fa-solid fa-gamepad"></i>
        <a href="">Jeux vidéo</a>
      </div>

      <div class="bloc_lien">
        <i class="fa-sharp fa-solid fa-newspaper"></i>
        <a href="">Actualités</a>
      </div>

      <div class="bloc_lien">
        <i class="fa-solid fa-medal"></i>
        <a href="">Sport</a>
      </div>

      <div class="bloc_lien">
        <i class="fa-solid fa-lightbulb"></i>
        <a href="">Savoirs & Cultures</a>
      </div>

      <div class="bloc_lien">
        <i class="fa-solid fa-shirt"></i>
        <a href="">Mode et beauté</a>
      </div>
      
      <hr style="background-color:#919191; width: 90%; border: none; height: 2px;" />

      <div class="titre">
        <h4 style="color: white; font-weight: 500;">Autres contenus Youtube</h4>
      </div>

      <div class="bloc_lien">
        <img class="logoyt" src="YouTube-Studio-Icon-1-PhotoRoom.png-PhotoRoom (1).png" alt="" width="33">
        <a href="">Youtube Studio</a>
      </div>

      <div class="bloc_lien">
        <img class="logoyt" src="icon-PhotoRoom.png-PhotoRoom.png" alt="" width="26" >
        <a href="">Youtube Music</a>
      </div>

      <div class="bloc_lien">
        <img class="logoyt" src="YouTube-Kids-apk-85x85-PhotoRoom.png-PhotoRoom.png" alt="" width="30" >
        <a href="">Youtube Kids</a>
      </div>
    
      <hr style="background-color:#919191; width: 90%; border: none; height: 2px;" />

      <div class="bloc_lien">
        <i class="fa-solid fa-gear"></i>
        <a href="">Paramètres</a>
      </div>

      <div class="bloc_lien">
        <i class="fa-solid fa-flag"></i>
        <a href="">Historique de signalement</a>
      </div>

      <div class="bloc_lien">
        <i class="fa-solid fa-circle-question"></i>
        <a href="">Aide</a>
      </div>

      <div class="bloc_lien">
        <i class="fa-solid fa-circle-exclamation"></i>
        <a href="">Envoyer des commentaires</a>
      </div>

      <hr style="background-color:#919191; width: 90%; border: none; height: 2px;" />

      <div class="titre">
        <a href="" style="color: #919191; font-weight: 500; font-size: 80% ;">Présentaion</a>
        <a href="" style="color: #919191; font-weight: 500; font-size: 80% ;" >Presse</a>
      </div>
 
      <div class="titre">
        <a href="" style="color: #919191; font-weight: 500; font-size: 80% ;">Droits d'auteur</a>
        <a href="" style="color: #919191; font-weight: 500; font-size: 80% ;" >Nous contacter</a>
      </div>

      <div class="titre">
        <a href="" style="color: #919191; font-weight: 500; font-size: 80% ;">Créateurs</a>
        <a href="" style="color: #919191; font-weight: 500; font-size: 80% ;" >Publicité</a>
      </div>

      <div class="titre">
        <a href="" style="color: #919191; font-weight: 500; font-size: 80% ;">Développeurs</a>
      </div>

      <div class="titre">
        <a href="" style="color: #919191; font-weight: 500; font-size: 80% ;">Signalez un contenu haineux</a>
      </div>

      <div class="titre">
        <a href="" style="color: #919191; font-weight: 500; font-size: 80% ;">conformément à la LCEN</a>
      </div>

      <!-- <hr style=" border: none; height: 2px;" /> -->
      <br>

      <div class="titre">
        <a href="" style="color: #919191; font-weight: 500; font-size: 80% ;">Conditions d'utilisation</a>
      </div>

      <div class="titre">
        <a href="" style="color: #919191; font-weight: 500; font-size: 80% ;">Confidentialité</a>
      </div>

      <div class="titre">
        <a href="" style="color: #919191; font-weight: 500; font-size: 80% ;">Règles et sécurité</a>
      </div>

      <div class="titre">
        <a href="" style="color: #919191; font-weight: 500; font-size: 80% ;">Premiers pas sur Youtube</a>
      </div>

      <div class="titre">
        <a href="" style="color: #919191; font-weight: 500; font-size: 80% ;">Tester de nouvelles</a>
      </div>

      <div class="titre">
        <a href="" style="color: #919191; font-weight: 500; font-size: 80% ;">fonctionnalités</a>
      </div>

      <hr style=" border: none; height: 2px;" />

      <div class="titre">
        <h5 style="color: dimgrey; font-weight: 500; font-size: 75%;">© 2023 Google LLC</h5>
      </div>
    </nav>
  </header>
</body>

</html>