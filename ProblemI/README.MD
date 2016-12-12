**Problem I**

Il apparait que notre histoire avec les mots croisés ne va pas finir de sitôt :) , cette fois-ci votre mission est un peu plus difficile que la dernière fois.

Votre mission est de remplir une grille des mots croisés en se basant sur une liste des mots sans savoir la position de ces mots!

Rappel sur le principe des mots croisés:

- Trouver le mot qui correspond à l’indication citée.

- Un mot contient au moins deux caractères.

- Il y a des indications pour les mots des lignes et des colonnes.

- Chaque ligne/colonne peut contenir un/plusieurs mots, ou ne peut contenir que des lettres/séparateurs.

**Spécifications de l’entrée:**

Votre programme va être testé sur 3 cas de tests, chaque cas de test est décrit comme suit:

La première ligne contient trois entiers L C et W.

L: le nombre des lignes (strictement entre 0 et 10)

C: le nombre des colonnes (strictement entre 0 et 15)

W: le nombre des mots (strictement entre 0 et 50)

L lignes décrivant la grille: chaque ligne contient C caractères, le caractère ‘.’ Signifie une case vide, le caractère ‘#’ équivalent à une case qui ne reçoit pas de caractère.

La dernière ligne contient les W mots séparés par un ou plusieurs espaces.

A noter que c'est grille normale , ou il ne faut pas envisager des cas extremes (une grille qui ne contient aps de séparateurs par exemple ...)


**Spécifications de la sortie:**

Pour chaque cas de test:

Afficher la grille selon le format suivant:

- L lignes : chaque ligne contiendra C caractère, les caractères sont séparés par un seul espace. Si une case est vide (Noire) représenter la par le caractère ‘#’ (aucun espace supplémentaire n’est toléré à la fin des lignes). Les grilles proposées n’admettent qu’une seule solution.

- Une ligne vide

NB: voici la grille qui correspond au premier exemple


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
stood
he#no
else#
#lost

soi
u#t

soi
u#t
</pre>