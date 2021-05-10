# Laravel Fill Record Package
This package provides a trait that will fill traced columns when saving any or updating Eloquent model.

# Installation
```php
composer require rahmasa/fill-record
```
# usage
use trait in every model has this columns
['created_by_user','updated_by_user','created_by_ip','updated_by_ip]

```php
use Rahmasa\FillRecord\FillRecord;

class Branch extends Model
{
    use FillRecord;
```
