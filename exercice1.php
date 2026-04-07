<?php
/*
 * ÉNONCÉ :
 * Créez une classe Book avec les propriétés protected title, author, et price.
 * Ajoutez une méthode displayInfo() qui affiche les informations du livre.
 * Instanciez un livre et affichez ses informations.
*/
class Book {
    protected $title;
    protected $author;
    protected $price;

    public function __construct(string $title, string $author, float $price) {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }

    public function displayInfo() {
        echo "Titre : {$this->title}<br>";
        echo "Auteur : {$this->author}<br>";
        echo "Prix : {$this->price}<br>";
    }
}

$book = new Book("Le Rouge et le Noir", "Stendhal", 19.99);
$book->displayInfo();
