# Application E-learning Technisonic

Cette application (en cours de création) a pour but de consulter la fiche d'un
employé et de voir ses certifications en cours de validité, et de voir
également celles arrivant prochainement à échéance.

Les employés s'y connectant pourront effectuer le passage de procédure qualifiée
END (UT et RT), un certificat d'attestation pourra être téléchargé lors de la
réussite (validité 1 an)

## Prérequis

- php 8
- composer 2
- sous VSC extension [draw.io Integration](https://marketplace.visualstudio.com/items?itemName=hediet.vscode-drawio) pour lire le diagramme directemnt dans VSC.
- Une fois la base de données crée, taper la commande `composer fixtures-start`

## Démarrer le projet (mode dev)

- Créer une base de donnée, nommez la comme bon vous semble
- Lancer les data fixtures

    ```bash
    composer require fixtures_start
    ```

Maintenant votre base de donnée comporte quelques données

| Rôle            | Adresse email        | Mot de passe |
|-----------------|----------------------|--------------|
|Utilisateur      | user1@technisonic.fr | password     |
|Admin            | admin@technisonic.fr | password     |

## Informations

Projet prfessionnel d'ordre privé

=> Intégrer au DP ?? ...

## Logique des ROLES

**USER:**

    ☐ En tant que user je peux lire un cours
    ☐ En tant que user je peux faire les questionnaires d'entrainement COFREND
    ☐ En tant que user je peux passer les procédures qualifié dans une technique dont je suis certifié
    ☐ Si je n'ai pas de COFREND la session procédures qualifié n'est pas visible

**FORMATEUR:**

    ☐ Accès aux fonctions user
    ☐ En tant que formateur je peux creer un cours
    ☐ En tant que formateur je peux creer des questionnaires
    ☐ En tant que formateur je sumet mon cours/questionnaire à un chargé d'affaire

**SUPERVISEUR:**

    ☐ Accès aux fonctions de user
    ☐ Accès aux fonctions de formateur
    ☐ En tant que charge d'affaire je peux validé un cours/questionnaire soumis par un formateur
    ☐ En tant que charge d'affaire je ne peux pas validé un cours/questionnaire si il est rédigé par moi même
    ☐ En tant que chargé d'affaire je donne l'accès a la plateforme ou creer moi même un nouvel accès

**ADMIN:**

    ☐ Tous les droits sans restrriction aucune

