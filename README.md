# SimpleCRUD Framework

Un micro-framework PHP léger pour les opérations CRUD, inspiré de Laravel et Symfony.

## Prérequis

- PHP 8.2 ou supérieur
- SQLite (ou MySQL/PostgreSQL)

## Installation

1. Clonez le repository
2. Créez la base de données SQLite :
```bash
touch database.sqlite
```

3. Exécutez la migration :
```bash
php migrate.php
```

## Structure du Projet

```
SimpleCRUD/
│
├── app/
│   ├── Controllers/
│   ├── Models/
│   └── Views/
│
├── config/
│   └── database.php
│
├── core/
│   ├── Model.php
│   ├── DB.php
│   └── Router.php
│
├── migrations/
│   └── 2024_04_19_create_users_table.php
│
├── public/
│   ├── index.php
│   └── .htaccess
│
├── routes/
│   └── web.php
│
├── autoload.php
├── migrate.php
└── serve.php
```

## Utilisation

### Démarrer le serveur de développement

```bash
php serve.php
```

### Créer un Modèle

```php
namespace App\Models;

use Core\Model;

class User extends Model
{
    protected string $table = 'users';
    protected array $fillable = ['name', 'email'];
}
```

### Créer un Contrôleur

```php
namespace App\Controllers;

use App\Models\User;

class UserController
{
    public function index()
    {
        $users = User::all();
        require_once __DIR__ . '/../Views/user.php';
    }
}
```

### Définir des Routes

```php
$router->add('GET', '/users', [new UserController(), 'index']);
```

## Fonctionnalités

- Architecture MVC simplifiée
- Système de routage
- ORM basique
- Support SQLite/MySQL/PostgreSQL
- Validation des données
- Protection CSRF

## Sécurité

- Requêtes préparées
- Protection contre les injections SQL
- Échappement des données HTML

## Licence

MIT 