<?php
/*
 * ÉNONCÉ :
 * Un enum est déjà présent, il faudra l'utiliser pour la propriété status de la classe Task.
 * Créez une classe Task avec les propriétés protected title, description et status (par défaut TODO).
 * Ajoutez une méthode markAsDone() qui change le status en DONE.
 * Ajoutez une méthode display() qui affiche les infos de la tâche.
 * Instanciez une tâche, affichez ses infos, puis marquez-la comme terminée et affichez à nouveau.
 * Note : Pour afficher le status, utilisez $this->status->value pour obtenir la valeur de l'enum.
*/

// Enum des status possibles
enum TaskStatus: string
{
    case TODO = "à faire";
    case DONE = "terminée";
}

class Task
{
    protected string $title;
    protected string $description;
    protected TaskStatus $status;

    public function __construct(string $title, string $description)
    {
        $this->title = $title;
        $this->description = $description;
        $this->status = TaskStatus::TODO;
    }

    public function markAsDone(): void
    {
        $this->status = TaskStatus::DONE;
    }

    public function display(): void
    {
        echo "Titre: {$this->title}<br>";
        echo "Description: {$this->description}<br>";
        echo "Status: {$this->status->value}<br>";
    }
}
// Instanciation d'une tâche
$task = new Task("Faire les courses", "Acheter du lait, du pain et des œufs.");
// Affichage des infos de la tâche
echo "<h2>Avant modification:</h2>";
$task->display();
// Marquage de la tâche comme terminee
$task->markAsDone();
echo "<h2>Après modification:</h2>";
// Affichage des infos de la tâche
$task->display();


