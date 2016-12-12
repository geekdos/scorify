**Problem L (Bonus II)**

Pour continuer à vous donner des indices sur la résolution du problème I, on vous propose un bonus simple aussi.

le but c'est de traiter la liste des mots, et les classer selon leurs tailles.

**Spécifications de l’entrée:**

Votre programme va être testé sur plusieurs cas de tests, chaque cas de test est décrit comme suit:

La première ligne contient trois entiers L C et W.

L: le nombre des lignes (strictement entre 0 et 10)

C: le nombre des colonnes (strictement entre 0 et 15)

W: le nombre des mots (strictement entre 0 et 50)

L lignes décrivant la grille: chaque ligne contient C caractères, le caractère ‘.’ Signifie une case vide, le caractère ‘#’ équivalent à une case qui ne reçoit pas de caractère.

La dernière ligne contient les W mots séparés par un ou plusieurs espaces.

A noter que c'est grille normale , ou il ne faut pas envisager des cas extremes (une grille qui ne contient aps de séparateurs par exemple ...)

**Spécifications de la sortie:**

Pour chaque cas de test afficher les groupes des mots, un groupe par ligne, le groupe qui le plus grand nombre de carcatère et le premier, pour le même groupe afficher les mots selon leurs ordre d'apparition dans l'entrée, sous la forme : l c word1 word2 ... wordc

Avec : l représente la longeur des mots du groupe, et c le nombre des mots dans ce groupe, et biensure wordi les mots du groupe.

et une ligne de séparation : '----'

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
2 3 3
...
.#.
soi su it
</pre>

_STDOUT_

Your solution should produce a similar result.

<pre>
5 1 stood
4 4 ones else tell lost
3 1 she
2 4 he no so do
----
3 1 soi
2 2 su it
----
</pre>