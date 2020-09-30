# NameGenerator

Erstelle einen zufälligen Namen mit vielen Optionen.

**Optionen:**
 - Wahl zwischen normalem- und "Gamernamen"
 - Wahl zwischen Jungs oder Mädchen Name
 - Wahl zwischen Obst oder [Sonstiges](https://github.com/ChampOfGames/NameGenerator/blob/master/sonstiges.md) Namen
 - Wahl zwischen Zahl am Ende oder nicht


## Usage and Output
```php
require_once("gen.php");
$gen = new name();
$gen->generateName();

/* Output (examples):
 * PeppersEmersyn
 * SamuraiPaisley
 * CherimoyaAmya
 */
```
Mögliche Einstellungen:
```php
$parts = 0 | 1;
$gender "boy" | "girl" | "random";
$other = "fruits" | "other";
$number true | false

$gen->generateName($parts, $gender, $other, $number)
```

## Probleme/Ideen/Fragen

Solltest du ein Probleme, eine Idee oder eine Frage haben einfach eine [Issue](https://github.com/ChampOfGames/NameGenerator/issues) eröffnen und ich antworte so schnell wie möglich.