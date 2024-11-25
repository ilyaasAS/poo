<?php
require_once 'Bird.php';
require_once 'Wolf.php';

// Créer un oiseau migrateur
$bird = new Bird("Pigeon", 3, 2, ["graines", "vers"], true);
echo $bird->getNom() . " est un oiseau. " . $bird->description() . "\n";

// Créer un loup solitaire
$wolf = new Wolf("Loup Grise", 5, 4, ["viande"], true);
echo $wolf->getNom() . " est un loup. " . ($wolf->isSolitaire() ? "Il est solitaire." : "Il vit en meute.") . "\n";

// Le loup dévore quelque chose
echo $wolf->devore() . "\n";

// Le loup mange un oiseau
echo $wolf->eatBird($bird) . "\n";

