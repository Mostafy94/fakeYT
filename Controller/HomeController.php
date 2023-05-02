<?php
require_once '../config/database/database.php';
Connexion::connect();
require '../Model/Video.php';



$videos = Video::GetAllVideos();





 include '../View/Home.php';






