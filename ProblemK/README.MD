**Problem K (Bonus I)**

Pour vous aider à résoudre le problème I, nous vous proposons un problèmeintermédiaire.

Avec les mêmes spécifications de l’entrée du problème I, on vous demande tout simplement d’extraire les positions disponibles dans la grille et les représenter sou la forme: X Y L dir, avec:

X le numéro de la ligne (la ligne la plus haute a le numéro 1)

Y le numéro de la colonne (la numérotation commence par 1 du gauche vers la droite)

L le nombre des caractères disponible dans la position

dir = ‘H’ si la position est horizontale, et ‘V’ si la position est verticale.

**Spécifications de l’entrée:**

Votre programme va être testé surplusieurscas de tests, chaque cas de test est décrit comme suit :

La première ligne contient trois entiers L C et W.

L:le nombre des lignes (strictement entre 0 et 10)

C:le nombre des colonnes (strictement entre 0 et 15)

W:le nombre des mots (strictement entre 0 et 50)

L lignes décrivant la grille : chaque ligne contient C caractères, le caractère ‘.’ Signifie une case vide, le caractère ‘#’ équivalent à une case qui ne reçoit pas de caractère.

La dernière ligne contient les W mots séparés par un ou plusieurs espaces.

A noter que c'est grille normale, ou il ne faut pas envisager des cas extrêmes (une grille qui ne contient pas de séparateurs par exemple ...)

**Spécifications de la sortie:**

Pour chaque cas de test :

Afficher les positions disponibles selon la description, une position par ligne, à commencer par les positions horizontales, du gauche vers la droite, puis les positions verticale du haut vers le bas.

Et une ligne de séparation: ‘-------‘

_STDIN_

This is the content of the STDIN.
<pre>
4 5 10
.....
..#..
....#
#....
he stood no ones else so she tell do lost
2 3 3
...
.#.
soi su it
</pre>

_STDOUT_

Your solution should produce a similar result.

<pre>
1 1 5 H
2 1 2 H
2 4 2 H
3 1 4 H
4 2 4 H
1 1 3 V
1 2 4 V
3 3 2 V
1 4 4 V
1 5 2 V
-------
1 1 3 H
1 1 2 V
1 3 2 V
-------
</pre>