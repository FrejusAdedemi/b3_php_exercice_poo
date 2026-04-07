<?php
/*
 * ÉNONCÉ :
 * Créez une classe Invoice avec les propriétés protected number, client, items (tableau associatif avec description et montant).
 * Ajoutez les méthodes pour ajouter un item, calculer le total, et afficher la facture.
 * Instanciez une facture, ajoutez des items et affichez-la.
*/

class Invoice {
    protected $number;
    protected $client;
    protected $items = [];

    public function __construct(string $number, string $client) {
        $this->number = $number;
        $this->client = $client;
    }

    public function addItem(string $description, float $amount) {
        $this->items[] = ['description' => $description, 'amount' => $amount];
    }

    public function getTotal() : float {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item['amount'];
        }
        return $total;
    }

    public function displayInvoice() : void {
        echo "Facture n°: {$this->number} - Client : {$this->client}<br>";
        echo "<br>";
    
        foreach ($this->items as $item) {
            echo "- {$item['description']}: {$item['amount']} €<br>";
        }
        echo "<br>";
        echo "Total: {$this->getTotal()} €<br>";
    }
}
// Instanciation de la facture
$invoice = new Invoice("F-1-2023", "John Doe");
$invoice->addItem("Produit A", 50.00);
$invoice->addItem("Produit B", 30.00);
$invoice->displayInvoice();

