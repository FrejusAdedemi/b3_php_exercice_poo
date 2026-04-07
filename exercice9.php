<?php
/*
 * ÉNONCÉ :
 * Créez une classe MusicAlbum avec les propriétés title, artist et tracks (tableau).
 * Ajoutez les getters/setters et une méthode addTrack() pour ajouter un morceau.
 * Ajoutez une méthode displayAlbum() qui affiche les infos et la liste des morceaux.
 * Instanciez un album, ajoutez des morceaux et affichez l'album.
*/

class MusicAlbum {
    protected string $title;
    protected string $artist;
    protected array $tracks = [];

    public function __construct(string $title, string $artist) {
        $this->title = $title;
        $this->artist = $artist;
    }

    public function addTrack(string $track) : void {
        $this->tracks[] = $track;
    }

    public function displayAlbum() : void {
        echo "Album : {$this->title}<br>";
        echo "Artiste: {$this->artist}<br>";
        echo "Morceaux :<br>";
        foreach ($this->tracks as $index => $track) {
            echo ($index + 1) . ". {$track}<br>";
        }
    }
}

// Instanciation de l'album
$album = new MusicAlbum("Random Access Memories", "Daft Punk");
$album->addTrack("Give Life Back to Music");
$album->addTrack("The Game of Love");
$album->addTrack("Instant Crush");
$album->displayAlbum();

