
<?php
/*
 * ÉNONCÉ :
 * Créez une classe BlogPost avec les propriétés protected title, content, createdAt (de type DateTime).
 * Ajoutez les getters/setters 
 * Ajouter une méthode getExcerpt($length) qui retourne un extrait du contenu.
 * Instanciez un article, affichez son titre, sa date de création et un extrait de 50 caractères.
*/

// Class BlogPost
class BlogPost {
    protected string $title;
    protected string $content;
    protected DateTime $createdAt;

    public function __construct(string $title, string $content, DateTime $createdAt) {
        $this->title = $title;
        $this->content = $content;
        $this->createdAt = $createdAt;
    }

    // getters
    public function getTitle(): string {
        return $this->title;
    }

    public function getContent(): string {
        return $this->content;
    }

    public function getCreatedAt(): DateTime {
        return $this->createdAt;
    }
    // setters
    public function setTitle(string $title): void {
        $this->title = $title;
    }
    public function setContent(string $content): void {
        $this->content = $content;
    }
    public function setCreatedAt(DateTime $createdAt): void {
        $this->createdAt = $createdAt;
    }

    public function getExcerpt(int $length): string {
        if (strlen($this->content) <= $length) {
            return $this->content;
        }
        return substr($this->content, 0, $length) . '...';
    }
}

// Instanciation d'un article
$article = new BlogPost(
    "Mon premier article",
    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
    new DateTime()
);

// Affichage des informations de l'article
echo "Titre : " . $article->getTitle() . "<br>";
echo "Contenu : " . $article->getContent() . "<br>";
echo "Date de création : " . $article->getCreatedAt()->format('d/m/Y H:i:s') . "<br>";
echo "Extrait de 50 caractères : " . $article->getExcerpt(50) . "<br>";


