# Guess What

Prérequis : bases de la programmation, PHP 7 ou supérieur installé sur votre machine de dev.




## Objectif

* Conception et mise au point de la logique applicative avec PHP Unit

* Structure de données, recherche d'un élément dans une liste

* Analyse des actions du joueur (fonction du nombre de cartes, aides à la décision)  

  

### Lien GitHub et GitLab

Liens du projet d'origine: https://gitlab.com/okpu/guesswhat
Liens du projet personnelle hébergée sur GitHub : https://github.com/BGuiIlot/Guess



#### Présentations du projet

**Challenge 1 :** 

Vérification de la version PHP et composer avant de démarrer le projet .

Installations de Composer dans le projet Guess What avec la commande: composer install

ensuite update de composer pour éviter les problèmes de version avec la commande : composer update

ensuite installation du plugin PHP Unit et indications de sa version pour permettre de réaliser les tests : php ./bin/phpunit --version

et lancement du premier test et apprentissage des tests unitaires



**Challenge 2 :** 

Ensuite nous devons réalisez les tests unitaire pour qu'il soit correct donc pour faire cela j'ai premièrement ajoutez un nom et une couleurs aux cartes ainsi qu'un ordre comme si dessous : 

![](https://user-images.githubusercontent.com/77786971/133327602-0e67b977-ac07-46ce-a228-2c53b5d33bea.PNG)

![](https://user-images.githubusercontent.com/77786971/133327779-53a84026-e16b-4eb6-a0a2-bae433cc7940.PNG)



ensuite j'ai réalisez les tests la plupart ne mon pas posez de problèmes à par la fonction ToString :

![](https://user-images.githubusercontent.com/77786971/133327925-20100849-c64f-4df4-8d71-dc2bd4211c0f.PNG)

![](https://user-images.githubusercontent.com/77786971/133327978-3a82808f-d79c-43ac-8dd1-d8b961103dd8.PNG)

Mais j'ai réussie à me débrouillez sans crée de fonction dans CardGame32.php et à le faire fonctionnez directement dans la fonction CardTest.php ci-dessus.

et pour savoir quel était la fonction qui ne fonctionnait pas j'ai utilisez la commande: php ./bin/phpunit .\tests\Core\CardTest.php --filter testToString

La page CardTest.php complète sans failure :

![](https://user-images.githubusercontent.com/77786971/133328026-199e1360-82bd-4f55-87ed-97c344407896.PNG)



**Challenge 3 :** 

Au début j'ai réalisez des tests avec un format dur du deck de 32 cartes et les tests ci-dessous fonctionnait :

![](https://user-images.githubusercontent.com/77786971/133328081-fb55d28c-de85-49b8-996e-ce414ccfc19b.PNG)

Mais j'ai voulus réaliser un tableau des cartes avec leurs couleurs mais ceci me créait des erreurs comme vous le voyez :

![](https://user-images.githubusercontent.com/77786971/133328151-98531b87-95bf-47c6-8bc1-2e760755c357.PNG)
 
![](https://user-images.githubusercontent.com/77786971/133328217-f6a99a97-6e64-4aa8-a94a-7c1da2e32a2a.PNG)



A cause de ceci j'ai pris du retard et mon projet c'est arrêtez ici les seules autre fonctions que j'ai réalisez sont cela :

![](https://user-images.githubusercontent.com/77786971/133328262-c2a9d9e2-ffaa-4840-afe1-8950307f56c2.PNG)

Merci d'avoir pris le temp de lire ce rapport malgré le peu de contenue.
