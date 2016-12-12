**Problem E**

Après le succès qu’à connu le problème des mots croisés durant le premier tour, les juges ont décidé de vous proposer les numéros croisés.

Le principe des numéros croisés est simple, c’est le même principe que les mots croisés sauf que les indications sont des opérations qui donnent des entiers. C’est généralement utilisé pour les enfants du primaire pour s’habituer aux opérations arithmétiques.

Rappel sur les numéros croisés:

Le but est de remplir une grille par des chiffres de telle façon que:

- Trouver le nombre qui correspond à l’opération citée.

- Les opérations donnent toujours des résultats sur 2 chiffres (si par exemple l'opération est 1+1 le résultat va être 02).

- Il y a des opérations pour les mots des lignes et des colonnes.

- Chaque ligne/colonne peut contenir un/plusieurs résultats, ou ne peut contenir que des chiffres/séparateurs.

Votre mission est de trouver pour une grille remplise les opérations qui ont générés cette grille.

Pour avoir une seule proposition, vous devez trouver:

- Les opérations d’addition de deux entiers

- Avec le minimum de différence entre les membres de l’opération.

- Le premier membre est le plus petit.

Par exemple si le résultat est 15, on a plusieurs opérations qui donnent 15:

15 = 1+14 = 14+1 = 3 * 5 = 30 / 2 = . . . . .

Mais pour notre problème vous devez afficher 7 + 8 puisque la différence entre 7 et 8 est 1.

**Spécifications de l’entrée:**

Votre programme va être testé par un ou plusieurs cas de tests.

Chaque cas de test est décrit par plusieurs lignes, chaque ligne est soit: ligne de séparation, soit ligne des numéros.

La description de la grille est sous forme desuccession de séparateur/numéros/séparateur/numéro/. . . . . /séparateur

- Une ligne de séparateur est une succession des symboles ‘+’ et ‘-‘(pour illustrer une ligne), le premier et le dernier caractère est ‘+’. Par exemple: ‘+ -+ -+ -+ -+ -+ -+’

- Une ligne de numéros est une série des symboles ‘|’ et des chiffres/caractère ‘#’, exemple ‘|5|4|3|5|#|1’.

A noter que pour le même cas de test, les lignes de séparateurs et des chiffres ont la même longueur.

Les grilles proposées sont des grilles bien formatées avec une longueur et largeurs des cases entre 1 et 30.

**Spécifications de la sortie:**

Pour chaque cas de test, Afficher:

- une ligne contenant ‘CORSSNUMBER :N’, avec N le numéro du cas, le premier cas correspond à .(Un seul espace entre CROSSNUMBER et ‘:’ )

- Une ligne vide.

- Une ligne contenant les dimensions de la grille: ‘L C’ (L le nombre des lignes, C le nombre des colonnes. Un seul espace entre L et C)

- Une ligne vide.

- (2 X L +1) lignes, décrivant la grilles vide comme suit: ligne de séparation/ligne des numéros / . . . . / ligne de séparation.

* La ligne de séparation est de longueur (2 X C + 1), suite des symboles: ‘+ ‘et ‘–‘ , le premier et le dernier caractère sont les +. (cette ligne contient le symbole ‘+’ (C+1) fois, et le symbole ‘-‘ C fois: + - + - + . . . . -+)

* La ligne des chiffres est de longueur (2 X C +1), suite des symboles ‘ |’ (C+1) fois, des espaces pour des cases vides, ou ‘#’ pour les cases de séparations.

- Une ligne vide

- L Lignes: chaque ligne contiendra les opérations demandées pour les lignes séparés par un seul espace, aucun espace supplémentaire n’est autorisé au début et à la fin de la ligne, les additions seront notées comme N1+N2 (aucun espace entre N1 et N2), si la ligne ne contient aucune opération il faut afficher le caractère ‘-‘.

- C Lignes: chaque ligne contiendra les opérations demandées pour les colonnes séparés par un seul espace, aucun espace supplémentaire n’est autorisé au début et à la fin de la ligne, les additions seront notées comme N1+N2 (aucun espace entre N1 et N2), si la ligne ne contient aucune opération il faut afficher le caractère ‘-‘. (Le chiffre le plus significatif corresponds à la case la plus haute)

- Une ligne vide

_STDIN_

This is the content of the STDIN.
<pre>
+-+-+-+-+
|9|1|#|1|
+-+-+-+-+
|1|#|1|#|
+-+-+-+-+
+-+-+-+-+
|1|0|1|#|
+-+-+-+-+
</pre>

_STDOUT_

Your solution should produce a similar result.

<pre>
CROSSNUMBER :1

2 4

+-+-+-+-+
| | |#| |
+-+-+-+-+
| |#| |#|
+-+-+-+-+

45+46
-

45+46
-
-
-

CROSSNUMBER :2

1 4

+-+-+-+-+
| | | |#|
+-+-+-+-+

50+51

-
-
-
-
</pre>