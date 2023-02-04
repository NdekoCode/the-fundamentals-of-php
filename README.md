# Apprendre les fondamentaux du PHP

## Qu'est-ce que PHP

**PHP** C'est un acronyme recursif qui veut dire **`(PHP: Hypertext Preprocessor)`** est un langage de programmation libre, principalement utilisé pour produire des pages Web dynamiques via un serveur HTTP mais pouvant également fonctionner comme n'importe quel langage interprété de façon locale. PHP est un langage impératif orienté objet.

PHP est donc un langage que l'on va principalement utiliser pour générer des pages Web dynamique et créer des sites Web dynamiques (mais cela ne veut pas dire que l'on ne pourra pas l'utiliser pour autre chose). C'est un langage qui est interprété et dont qui aura donc besoin d'un interpréteur pour fonctionner.

PHP dispose d'un typage dynamique. Il n'est donc pas nécessaire de déclarer le type des variables et c'est l'ordinateur qui va se charger de définir le type de variable de manière automatique

Depuis PHP 7 il est possible d'indiquer le type des paramètres des fonctions ce qui permet de contre-balancer un des inconvénient de ce type de typage en apportant une meilleur organisation et stabilité du code.

## Quelques utilités

### Affectation des tableaux

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

### Les fonctions

Sachez que si vous avez une variable non definit dans une fonction càd il n'est pas passer en parametre et il n'est pas créer dans la fonction, alors cette variable aura comme valeur `null`

### La variable superglobal $_SERVER

Est un gros gros tableau qui contient des clés particulieres et qui nous donne des informations sur le serveur comme

- `$_SERVER['DOCUMENT_ROOT']` : Nous donne la racine du serveur
- `$_SERVER['REMOTE_ADDR']` : Nous donne l'adresse distante
- `$_SERVER['SERVER_SOFTWARE']` : La version de votre serveur et du type de serveur que vous utilisez
- `$_SERVER['SERVER_NAME']` : Le nom du serveur(en locurence souvent le nom de domaine)
- `$_SERVER['SERVER_PORT']` : Le PORT sur lequel ecoute lu serveur.
- `$_SERVER['REQUEST_URI']` : C'est l'URL qui a été demander par l'utilisateur.
- `$_SERVER['REQUEST_METHOD']` : C'est la methode HTTP qui est utiliser, donc le verbe HTTP qui est utiliser
- `$_SERVER['SCRIPT_NAME']` : C'est le nom du fichier qui est appeler par la requete de l'utilisateur
- `$_SERVER['SCRIPT_FILENAME']` : C'est le chemin complet vers le fichier qui est appeler par la requete de l'utilisateur
- `$_SERVER['PHP_SELF']` : C'est le nom du fichier qui est entrer d'executer le script
- ...

**NB**: PHP essaie toujours de convertir tous ce qui ne correspond pas.
Mais vous pouvez obliger à php d'eviter de faire ces conversions et pour cela il suffit que au debut de votre code PHP vous ajoutez la ligne:
`declare(strict_types=1)`;
Cette ligne permet de dire à PHP, **les types sont strict, empeche toute conversion implicite**
