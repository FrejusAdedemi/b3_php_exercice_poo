<?php
/*
 * ÉNONCÉ :
 * Importer votre classe Book de l'exercice 1.
 * Créez une classe Library qui gère un tableau de livres (Book).
 * Ajoutez une méthode pour ajouter un livre, 
 * Ajouter une méthode pour afficher tous les livres
 * Ajouter une méthode pour compter le nombre de livres.
 * Instanciez une bibliothèque, ajoutez des livres et affichez-les.
 * Afficher le nombre total de livres dans la bibliothèque.
*/
require_once 'exercice1.php';

class Library {
    private $books = [];

    public function addBook(Book $book) : void {
        $this->books[] = $book;
    }

    public function displayBooks() : void {
        foreach ($this->books as $book) {
            echo "<br>";
            $book->displayInfo();
            echo "<br>";
        }
    }

    public function countBooks() : int {
        return count($this->books);
    }
}
// Instanciation de la bibliothèque
$library = new Library();
$library->addBook(new Book("1984", "George Orwell", 1949));
$library->addBook(new Book("To Kill a Mockingbird", "Harper Lee", 1960));
$library->addBook(new Book("Pride and Prejudice", "Jane Austen", 1813));
// Affichage des livres
echo "<br>";
echo "Livres dans la bibliothèque :<br>";
$library->displayBooks();
// Comptage du nombre de livres
echo "Nombre de livres dans la bibliothèque : " . $library->countBooks();

