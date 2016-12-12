**Problem G**

Après avoir remporté la deuxième édition de Code Initiative, notre champion a décidé de conquérir les développeurs du monde!

Pour réaliser ce défi il est obligé de faire des voyages entre plusieurs villes du monde, pour les premières compétions il n’avait aucun problème il se déplace tranquillement dans les villes ou la compétition se déroulera, mais après les trophées successifs, son séjour là-bas est transformé en un enfer, la poursuite des journalistes et des Funs l’empêche de bien préparer les compétitions: pour cela il a décidé de ne pas sortir des aéroports que le jour J, en faisant un voyage par jour.

Une autre contrainte qui se pose pour notre champion c’est qu’il veut minimiser le coût des billets d’avion des vols qui prend. Le cout des billets entre les mêmes aéroports varie selon le jour d’une façon périodique.

Votre mission alors est d’aider notre champion pour lui dire le montant minimale qu’il doit payer pour son vol toute en passant par une suite des aéroports, et en respectant la durée des voyages (qui peux s’étaler sur plusieurs semaines!) ou lui dire que ce n’est pas possible de participer à cette compétition.

**Spécifications de l’entrée:**

’entrée contient plusieurs cas de test. Chaque cas de test est décrit comme suit :

- Une ligne contenant deux entiers n et k : n est le nombre des aéroports intermédiaires possibles, k est le nombre des vols qu’il veut prendre (le nombre des jours: un vol/jour).

Les aéroports sont notés 1, 2, . . . , n, avec 1 l’aéroport de départ et n l’aéroport de destination. n et k des entiers qui vérifient 2≤n≤10 et 1≤k≤1000.

 -n(n-1) lignes décrivent les plannings des vols, chaque ligne décrit le planning entre deux aéroports.

Les n-1 premiers lignes décrivent le plannings correspondent aux vols partants de l’aéroport 1 vers les aéroports (2, 3, . . . , n), respectivement, les n-1 lignes suivantes correspondent aux vols partants de l’aéroport 2 vers les aéroports (1, 3, 4, . . . , n) respectivement . . .etc.

La description d’un planning commence par un entier d, la longueur de la période des prix pour ce vols, avec 1≤d≤30. après il y aura d entiers qui présente le prix du vols pour le jour 1 , 2 , . . . n, Un cout égale à 0 signifie qu’il n’existe aucun vol pour ce jour.

Si par exemple le planning entre deux aéroports est “3 75 0 80” le cout du premier jour est 75, aucun vol le deuxième jour, le cout du vol pour le troisième jour 80, et le cycle se répètent : 75 pour le quatrième jour, pas de vol le cinquième jour, etc.

Le fichier se termine par n = k = 0.

**Spécifications de la sortie:**

Pour chaque cas de test, afficher :

- Une ligne contenant ‘Scenario #N’, avec N le numéro du cas, N commence par 1. (Un seul espace entre scenario et ‘#’)

- La deuxième ligne contient soit ‘No flight possible.’ Si aucun vol n’est possible

Soit ‘The best flight costs x.’, avec x le cout minimum avec k vols.

Après chaque cas afficher une ligne vide.

_STDIN_

This is the content of the STDIN.
<pre>
3 5
2 120 140
3 60 0 70
7 119 100 0 102 115 123 0
4 50 65 55 49
3 0 130 180
3 0 10 18
2 3
2 0 60
1 90
0 0
</pre>

_STDOUT_

Your solution should produce a similar result.

<pre>
Scenario #1
The best flight costs 555.

Scenario #2
No flight possible.
</pre>