# Devoir 1 : Abstraction de contenu

Énoncé : cours 3 \
Remise : cours 4 \
Pondération : 5%

Ce devoir vise à évaluer votre maîtrise de l’abstraction de contenu, ainsi que votre capacité à concevoir des gabarits à l’aide de PHP. Pour ce faire, il vous est demandé de concevoir le modèle d’une page détaillant la lexicographie du mot « abstraction » selon le modèle du TLFi (Le Trésor de la Langue Française informatisé).

## Consignes

1. Consultez la page suivante : https://www.cnrtl.fr/definition/abstraction, et identifiez le schéma du contenu. Pour vous aider à repérer les différents éléments, utilisez la fonctionnalité « options d’affichage » (sous la barre de recherche), qui permet de surligner les objets textuels présents sur la page.
2. Dans un fichier nommé `data.php`, définissez le jeu de données qui contient le contenu de votre page suivant le schéma défini à l’étape précédente. Il n’est pas nécessaire de reproduire l’entièreté du contenu ; les notices de prononciation, d’orthographe et d’étymologie peuvent être omises, mais assurez-vous d’inclure au moins deux exemples par définitions.
3. Importez les données dans un fichier `index.php`, et concevez le gabarit d’une page qui permet d’afficher celles-ci. Portez une attention particulière au style des éléments, et ajustez votre balisage de sorte qu’il soit possible de le reproduire.

## Remise

La remise se fera à travers GitHub Classroom. Voici les instructions :

1. Suivez le lien partagé dans Léa, et acceptez l’évaluation sur GitHub Classroom.
2. Un dépôt sera automatiquement créé pour vous. Clonez celui-ci sur votre ordinateur.
3. Une fois terminé, soumettez votre travail en poussant vos *commits* sur le dépôt distant « *origin* ».

## Rubrique d’évaluation

- `2` Le jeu de données contient tout le contenu nécessaire, séparé selon les différents éléments à afficher.
- `2` Le gabarit permet d’afficher le contenu, incluant le style des éléments, et, si nécessaire, tient compte des valeurs non-existantes.
- `1` Le balisage est sémantique et syntaxiquement correct.