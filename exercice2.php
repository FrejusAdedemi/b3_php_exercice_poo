<?php
/*
 * ÉNONCÉ :
 * Créez une classe Contact avec les propriétés protected name, email et phone.
 * Ajoutez les getters/setters et une méthode displayContact() qui affiche les infos du contact.
 * Instanciez un contact et affichez ses informations.
*/

class Contact {
    protected $name;
    protected $email;
    protected $phone;

    public function __construct(string $name, string $email, string $phone) {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
    }

    // Getters
    public function getName(): string {
        return $this->name;
    }
    public function getEmail(): string {
        return $this->email;
    }
    public function getPhone(): string {
        return $this->phone;
    }

    // Setters
    public function setName(string $name): void {
        $this->name = $name;
    }
    public function setEmail(string $email): void {
        $this->email = $email;
    }
    public function setPhone(string $phone): void {
        $this->phone = $phone;
    }

    public function displayContact() {
        echo "Nom : {$this->name}<br>";
        echo "Email : {$this->email}<br>";
        echo "Téléphone : {$this->phone}<br>";
    }
}

$contact = new Contact("John Doe", "j7r1H@example.com", "123-456-7890");
$contact->displayContact();

// test des setters
$contact->setName("Jane Doe");
echo "<br>Après modification du nom :<br>";
$contact->displayContact();


