**Problem J**

CashFlow est un jeu de société qui aide à développer la culture de la gestion de l’argent.

Ce jeu est divisé en deux phase, la course des rats ‘Rat Race’ et la piste rapide ‘Fast Track’.

Pour sortir de la course des rats et entrer dans la piste rapide il faut satisfaire l’inégalité suivante:

                               **Le revenu passive ≥ les dépenses**

La définition du revenu passif est: tout revenue qu’on obtient à partir de nos investissements et pas en échange de notre temps (travail), par exemple un ingénieur qui n’a que son salaire a un revenu passif égal à ZERO.

Dans la course des rats il y a plusieurs pistes: des pistes des investissements, des pistes de marché (pour vendre les investissement) , des pistes de dépenses , des pistes de versements de salaire , une piste pour la charité, une piste pour un nouveau bébé(plus de dépenses) et une piste de saisie (on perd notre boulot et on reste à la recherche d’un autre pendant deux mois!!)

Votre mission et de décider si un joueur peux sortir de la course des rats après son atterrissage sur la piste des investissements au milieu d’une partie.

Au début de chaque cas de test, il y a une description de l’état du joueur:

Salaire mensuel(Salary): S

Le revenu passif(Passive Incoming): P.I

La somme des dépenses(Expenses): E

L’argent qu’il a en main(cash on Hand): C.H

Après cette description, vous trouvez une description de l’investissementqu’il a trouvé :

Le coût (Cost): C

Le revenu mensuel(CashFlow): CF

Le joueur peut prendre cette opportunité si l’argent qu’il a en main est supérieur ou égale au coût de cet investissement.

Si le joueur a pris cette opportunité il ajoute le revenu mensuel au revenu passif.

**Spécifications de l’entrée:**

Votre programme va être testé par plusieurs cas de tests, chaque cas de test est décrit comme suit:

Une ligne contenant le nom du joueur: chaine de caractères (aucun espace)

Une ligne contenant le métier du joueur: chaine de caractères (aucun espace)

Une ligne qui contient 4 entiers: S P.I E et C.H, c’est entiers sont compris entre 0 et 1.000.000

Une ligne qui contient 2 entiers: C et CF , c’est entiers sont compris entre 1 et 1.000.000

La signification des entiers et la même cité dans l’explication.

NB: Les situations données dans le fichier d’entrés correspondent tous à des joueurs dans la course des rats (passive income < total expenses)

**Spécifications de la sortie:**

Pour chaque cas de test afficher:

Name : <Nom du joueur> (12 espaces entre Name et‘:’, un seul espace entre ‘:’ et le nom de joueur)

Job : <métier du joueur> (13 espaces entre Job et‘:’, un seul espace entre ‘:’ et le métier de joueur)

Passive income : <le revenu passive après l’éventuel achat de l’opportunité> (2 espaces entre Passive income et‘:’, un seul espace entre ‘:’ et le montant calculé)

Total expenses: <la somme des dépenses> (2 espaces entre Total expenses et‘:’, un seul espace entre ‘:’ et la somme des dépenses)

Cash on Hand : <la somme d’argent en mainaprès l’éventuel achat de l’opportunité> (4 espaces entreCash on Hand et‘:’, un seul espace entre ‘:’ et le montant calculé)

Current Status : <Position> (2 espaces entreCurrent Status et‘:’, un seul espace entre ‘:’ et la position, si le joueur sort de la course de rat Position prendre la valeur ‘FAST TRACK’ sinon ‘RAT RACE’)

Une ligne vide.

NB: les montants d’argent sont affichés avec un séparateur (point) entre chaque 3 chiffres, 10000 sera noté 10.000
_STDIN_

This is the content of the STDIN.
<pre>
Sara
Engineer
5000 700 3000 5000
5000 400
Jhon
Janitor
1500 500 800 3500
3000 350
</pre>

_STDOUT_

Your solution should produce a similar result.

<pre>
Name            : Sara
Job             : Engineer
Passive income  : 1.100
Total expenses  : 3.000
Cash on Hand    : 0
Current Status 	: RAT RACE

Name            : Jhon
Job             : Janitor
Passive income  : 850
Total expenses  : 800
Cash on Hand    : 500
Current Status 	: FAST TRACK
</pre>