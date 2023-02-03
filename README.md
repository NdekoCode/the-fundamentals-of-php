# Apprendre les fondamentaux du PHP

## Qu'est-ce que PHP

**PHP** C'est un acronyme recursif qui veut dire **`(PHP: Hypertext Preprocessor)`** est un langage de programmation libre, principalement utilisé pour produire des pages Web dynamiques via un serveur HTTP mais pouvant également fonctionner comme n'importe quel langage interprété de façon locale. PHP est un langage impératif orienté objet.

PHP est donc un langage que l'on va principalement utiliser pour générer des pages Web dynamique et créer des sites Web dynamiques (mais cela ne veut pas dire que l'on ne pourra pas l'utiliser pour autre chose). C'est un langage qui est interprété et dont qui aura donc besoin d'un interpréteur pour fonctionner.

PHP dispose d'un typage dynamique. Il n'est donc pas nécessaire de déclarer le type des variables et c'est l'ordinateur qui va se charger de définir le type de variable de manière automatique

Depuis PHP 7 il est possible d'indiquer le type des paramètres des fonctions ce qui permet de contre-balancer un des inconvénient de ce type de typage en apportant une meilleur organisation et stabilité du code.

## Quelques utilités

L'assignation d'un tableau dans une variable se fait par valeur et non par reference

```{PHP}
// Va juste faire une assignation par valeur
$notes1 = [10, 13, 15, 15];
$notes2 = $notes1;

```

Mais on peut palier à cella en utilisant l'operateur `&` devant la variable de type tableau ou objet et il va faire maintenant une affectation par reference.

```{PHP}
// Va juste faire une assignation par valeur
$notes1 = [10, 13, 15, 15];
$notes2 = &$notes1; // $note1 et $note2 font maintenant reference à la meme variable

```
