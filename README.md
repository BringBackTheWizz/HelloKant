# HelloKant, A manual...

(A manual/Emmanuel... did you get it ?)

## What is it ?

It's an Object-relational mapping for php.

## How use it ?

step 1 : create a file config.json

```json
{
  "host": "localhost",
  "name": "dbname",
  "user": "root",
  "pass": "OUI"
}
```

step 2 : create your entity

```php
/src/entity

namespace App\Entity;
use HelloKant\Model;

class bar extends Model {
  public $timestamps = false;
  protected $fillable = ["Key1", "Key2", "Key3"];

  public function classmethods(){
     ...
  }
}
```

When your instance is up, you can acces to his properties :

```php

require "vendor/autoload.php";
use App\Entity\Bar;

$foo = new bar();
$foo->name = "The Room";
```

## Use the model

Create

```php
use App\Repository\Bar;


$film = new Bar();
$film->name;


```

Read

```php
use App\Repository\Bar;

$foo = new Bar();
$foo->getById(3);
//OR
$foo->getAll()

```

Update

```php
use App\Repository\Bar;

$foo = new Bar();
$foo->name = "Tommy Wiseau";
$foo->id = 3
$foo->save;

```

Delete

```php
use App\Repository\Bar;

$foo = new Bar();
$foo->delete(3);
```

And last, but not least,
List of name which could be used for this project:

- DumbledORM
- PerfORM
- UnifORM
- thunderstORM
- enORM
