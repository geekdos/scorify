**Problem B**

Mouad adore les compétitions de programmation, et chaque fois qu’il entendre quelqu’un parler d’un concours il veut y participer.

La semaine dernière il a entendu par le concours de programmation d'une univesité partenaire de scorify pour choisir les équipes qui vont présenter l'univesité dans une prochaine compétition, malgré que Diaa Alhak lui ait clairement expliqué que c’est un concours dédié pour les étudiants de l'université, il a insisté pour y participer.

Pour le faire il a essayé de deviner le lien du formulaire d’inscription.

Il a cru qu’il a trouvé la logique pour la construction de ces URLs, puisqu’il est un programmeur, il a construit un script qui consulte des URLs en masses et essaie de lui inscrire.

Merci d’aider Ibrahim à savoir pour chacun de ces URLs s’il est valide ou pas.

Un URL est valide si le jeton après le nom de domaine respecte les conditions suivantes:

-- Commence par une chaine de carcatères bien spécifique.

-- Contient 3 mots, séparés par le caractère ‘-‘

-- La longueur du deuxième mot est identique à un entier bien spécifique.

**Spécifications de l’entrée:**

L’entrée contient plusieurs cas de test.

La première ligne contient un entier **T** qui indique le nombre des cas de test, à savoir que: **1≤T≤50**

Chaque cas est décrit comme suit:

Une première ligne contenant: **M C N**

Avec **M (3≤M≤10)** un entier qui indique la longueur du deuxième mot, **C** la chaine de caractères que le jeton doit commencer avec (la longeur de **C** est entre **1 et 5**), et **N (1≤N≤100)** le nombre des jetons à vérifier.

Suivit de **N** lignes, chaque ligne contient un jeton à vérifier sous forme d’une chaine de caractères de taille inférieure ou égale à **80**.

_NB:_ on vous garantit que cette chaine de caractère contient trois mots séparés par le caractère ‘-‘, et que chaque mot ne contient que les caractères alphanumériques.

**Spécifications de la sortie:**

Pour chaque cas afficher une seule ligne contenant le nombre de jetons valides

_STDIN_

This is the content of the STDIN.
<pre>
3
3 N 3
Aty-hj89H-LLLL
N89765-KKK-MMMM
Nazzee-lm1-PPPPPPMPLKOPPL
5 P 4
pPPPPPPP-ABCDE-poipo709H7
P-12345-lkjlkjlkj
Pooo-1poli-HJHG97
Pqqq-12345-00000000000000000000000000000000000
3 Hello 2
HelloAAA-AAA-tyuuu
HELLO-B11-yiyuiuyiu
</pre>

_STDOUT_

Your solution should produce a similar result.

<pre>
2
3
1
</pre>