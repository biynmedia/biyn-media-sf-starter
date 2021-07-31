# Biyn Média Symfony Starter

Toutes les commandes listées dans ce document s'exécutent à la racine du projet.

## Configuration de la BDD

- Renommer le fichier `.env.local.dist` en `.env.local`
- Mettre à jour les paramètres de connexion : 

```bash
DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=5.7"
```

## Installation

L'installation se fait à l'aide de la commande :

```bash
bash bin/install.sh
```

et la mise à jour (suite à un changement de branche par exemple) via cette commande :

```bash
bash bin/update.sh
```

Installation Manuel des Assets :

```bash
yarn install
yarn encore dev
```

## Fixtures

L'installation est automatique.
Vous pouvez relancer les fixtures via la commande :

```bash
php bin/console hautelook:fixtures:load -q
```

## Qualité de Code

Vous pouvez lancer une analyse de code via Grump. https://github.com/phpro/grumphp)

```bash
bash ./vendor/bin/grumphp run
```

Vous pouvez activer / désactiver l'analyse automatique avant chaque commit.

```bash
bash ./vendor/bin/grumphp git:init
bash ./vendor/bin/grumphp git:deinit
```

## Tests Fonctionnels

Framework Behat. Voir les dossiers : `features` et `tests/Behat` 

> Documentation : https://docs.behat.org/en/latest/guides.html

Pour voir la liste des étapes pré-définis disponible :

```bash
bash vendor/bin/behat -dl
```

Pour lancer les tests :

```bash
bash bin/test.sh 
```
