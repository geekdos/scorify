**Problem C**

"DARET" est l'une des solutions de financement adoptée par des peronnes qui ne veulent pas perdre beaucoup de temps avec le paperasse des banques et de l'administration, ou pour d'autres raisons.

Le principe est simple, c'est que chaque mois tous le monde cotise avec le même montant, et une seule personne qui bénifice à tour de rôle.

Mais pour rentrer dans une "DARET" il faut faire un petit de calcul pour savoir si le montant de cotisation mensuel est inférieur ou égale à la moitié de ce qui reste du revenu mensuel après déduction des charges fixes.

Autre chose pour que "DARET" sera efficace il faut un nombre minimal de participants **Nmin**.

**Spécifications de l’entrée:**

L’entrée contient plusieurs cas de test (moins de **100**).

Chaque cas est décrit sur une ligne sous forme d’une série d’entiers (entre **0 et 1 million**) (Vous aurez entre **4 et 50 entiers**)

Le premier entier désigne la cotisation mensulle demandée, 
le deuxième entier c'est le nombre minimal **Nmin** pour avoir "DARET" , 
les autres sont relatives aux sommes d'argents qui restent aux personnes après déduction des coûts fixes.

**Spécifications de la sortie:**

Pour chaque cas afficher une seule ligne contenant soit:

 --> Le nombre de personnes qui vont participer à "DARET" , si ce nombre est supérieur ou égale au nombre minimal Nmin.

 --> Soit le caractère ‘-’ dans le cas contraire.

_STDIN_

This is the content of the STDIN.
<pre>
5000 3 12000 9000 13000 15000    
2000 5 4000 4500 3000 3500 3000
</pre>

_STDOUT_

Your solution should produce a similar result.

<pre>
3
-
</pre>