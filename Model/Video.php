<?php


class Video {
    public $id;
    public $titre;
    public $description;
    public $url;
    public $id_chaine;
    public $date;
    public $vue;

    public function __construct($id = NULL,$titre = NULL,$description = NULL,$url= NULL,$id_chaine= NULL,$date= NULL,$vue= NULL){

        if(!is_null($id)){
            $this->id= $id;
            $this->titre= $titre;
            $this->description= $description;
            $this->url= $url;
            $this->id_chaine= $id_chaine;
            $this->date= $date;
            $this->vue= $vue;
        }
    }

    static public  function GetAllVideos(){
        $requete = "SELECT * FROM video";
        $resultat = Connexion::pdo()->query($requete);
        $resultat = $resultat->fetchAll(PDO::FETCH_CLASS,'Video');
        return $resultat;
    }



}