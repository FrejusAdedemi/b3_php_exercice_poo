<?php
/*
 * ÉNONCÉ :
 * Créez une classe Calculator avec des méthodes statiques add, subtract, multiply, divide.
 * Utilisez ces méthodes pour effectuer des opérations sur deux nombres.
*/

class Calculator {
    public static function add(float $a, float $b): float {
        return $a + $b;
    }

    public static function subtract(float $a, float $b): float {
        return $a - $b;
    }

    public static function multiply(float $a, float $b): float {
        return $a * $b;
    }

    public static function divide(float $a, float $b): float {
        if ($b == 0) {
            throw new Exception("la division par zéro n'est pas autorisée.");
        }
        return $a / $b;
    }
}

// Utilisation des méthodes statiques
echo "Calculatrice :<br>";
$Number1 = 10;
$Number2 = 0;
echo "Number1=10, Number2=0<br>";
echo "Addition: " . Calculator::add($Number1, $Number2) . "<br>";
echo "Soustraction: " . Calculator::subtract($Number1, $Number2) . "<br>";
echo "Multiplication: " . Calculator::multiply($Number1, $Number2) . "<br>";
try {
    echo "Division: " . Calculator::divide($Number1, $Number2) . "<br>";
} catch (Exception $e) {
    echo "Erreur: " . $e->getMessage() . "<br>";
}