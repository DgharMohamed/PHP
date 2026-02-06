# Livre d'or (Guestbook)

Un simple livre d'or en PHP.

## Comment ça marche

1.  Remplissez le formulaire (Nom, Mail, Commentaire).
2.  Cliquez sur "Envoyer".
3.  Le message est sauvegardé dans le fichier `avis.txt`.
4.  La liste affiche les 5 derniers messages.

## Fichiers

- `index.php` : Toute la logique (formulaire + affichage + sauvegarde).
- `style.css` : Le style jaune.
- `avis.txt` : Le fichier où on stocke les messages.

## Installation

Lancer le serveur PHP :

```bash
php -S localhost:8000
```

Aller sur [http://localhost:8000](http://localhost:8000).
