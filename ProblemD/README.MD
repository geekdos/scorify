**Problem D**

La Géométrie est toujours amusante, et comme a dit un professeur un jour: au moins on s’amuse à dessiner des formes au pire des cas.

Par définition, un cercle (ou une sphère en 3D) est l’ensemble des points qui s’éloigne exactement de la même distance (appelée rayon) à un point (qui s’appelle le centre).

Aujourd’hui vous aurez une liste des tâches à accomplir, chaque tâche est composée d’un point une distance, et un ensemble de points, le but de savoir combien de ces points est à l’intérieure du cercle (ou sphère) formé par le premier point et a comme rayon la distance donnée.

**Spécifications de l’entrée:**

L’entrée commence par une ligne contenant un entier positif indiquant le nombre de cas de test (au plus 20).

Chaque cas de test contient deux lignes:

La première ligne contient 3 ou 4 entiers (**3 pour 2D et 4 pour 3D**): **R X Y (Z)**

Tous ces entiers sont entre **-1000 et 1000**.

La deuxième ligne contient un ensemble d’entiers qui décrit des points à examiner: **X1 Y1 (Z1) X2 Y2 (Z2) …. Xm Ym (Zm)**

Avec **Xi** , **Yi et Zi** entre **-1000 et 1000**, et **m** entre **1 et 100**.

**Spécifications de la sortie:**

Pour chaque cas de test, afficher une ligne contenant le nombre des points inscrit dans le cercle (ou la sphère) formé par les éléments de la première ligne.

_STDIN_

This is the content of the STDIN.
<pre>
2
1 0 0
1 1 0 0 -1 -1
4 1 1 1
0 0 0 1 1 1 100 100 50 12 0 -1
</pre>

_STDOUT_

Your solution should produce a similar result.

<pre>
1
2
</pre>