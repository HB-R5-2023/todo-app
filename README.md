# Liste de tâches

## Points abordés

### Création de contrôleurs

[`HomeController`](src/Controller/HomeController.php)
[`AboutController`](src/Controller/AboutController.php)

Sur une [autre branche](https://github.com/HB-R5-2023/todo-app/tree/tasks_static_objects), création d'une classe `Task` puis création d'un tableau d'objets qu'on transmet à la vue. Voir le [contrôleur](https://github.com/HB-R5-2023/todo-app/blob/tasks_static_objects/src/Controller/HomeController.php#L16-L27).

### Twig - Introduction

Moteur de template Twig.

Un template est automatiquement créé lorsqu'on utilise le Maker pour créer une classe de contrôleurs.

Exemple pour le `HomeController`, un template a été créé dans [`templates/home/index.html.twig`](templates/home/index.html.twig)

### Héritage de templates

Un [template de base](templates/base.html.twig) est créé automatiquement lors de la création d'une application Symfony.

Les templates créés ensuite peuvent alors **hériter** du template de base, pour venir y définir leurs propres contenus.

Pour ce faire, on peut réutiliser les `block`s définis dans le template de base.

Voir le [template](templates/about/index.html.twig) de la page `About` par exemple

### Liste d'éléments
