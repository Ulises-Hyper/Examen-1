<?php

class Songs
{
    private PDO $sql;

    public function __construct(PDO $sql)
    {
        $this->sql = $sql;
    }

    //  id_song | song_name | artist   | duration | song_path
    public function addSong($song_name, $artist, $song_path){
        $query = "INSERT INTO songs (song_name, artist, song_path) VALUES (:song_name, :artist, :song_path)";
        $stm = $this->sql->prepare($query);
        $stm->execute([":song_name" => $song_name, ":artist" => $artist, ":song_path" => $song_path]);
    }

    public function getAllSongs() {
        $query = "SELECT song_name, artist, duration, song_path FROM songs";
        $stm = $this->sql->prepare($query);
        $stm->execute();
        
        // Recupera todas las canciones como un arreglo asociativo
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
    
}
