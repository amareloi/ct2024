Token
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
### Création du contrôleur et d'une base de données

- Création du contrôleur
> symfony console make:controller pages

- Création d'une entité (représente une table à 3 colonnes)
> symfony console make:entity Cours  
> > semestre  
> > integer  
> > no  
> 
> > nom  
> > string  
> > 255  
> > no
> 
> > description  
> > string  
> > 255  
> > yes

- Modification du fichier .env : configuration avec sqlite

- Création de la base de données
> symfony console doctrine:database:create

- Création et exécution d'un fichier de requêtes (création de table)
> symfony console make:migration
> symfony console doctrine:migrations:migrate

- Création d'un jeu de fausses données
> symfony composer require orm-fixtures --dev
> symfony console make:fixture
> > AppFixtures
> symfony console doctrine:fixtures:load

- Création d'un CRUD
> symfony console make:crud Cours
> > CoursController  
> > no

### Embellissement et amélioration de l'application

- Installation de WebpackEncore et Boostrap
> symfony composer require symfony/webpack-encore-bundle 
> npm install 
> npm install bootstrap
> npm install bootstrap-icons

- Ajout d'attributs à Cours
>  symfony composer make:entity Cours
> > ects
> > integer
> > no
> 
> > heures_cm
> > integer
> > no
>
> > heures_tp
> > integer
> > no
> 
> > heures_td
> > integer
> > no

- Suppression des tables existantes et nouvelle migration
> symfony console doctrine:schema:drop --force 
> symfony console doctrine:migrations:migrate

- Ajout de Markdown
> symfony composer require twig/markdown-extra

