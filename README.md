# Sens Impact
Библиотека проектного кочевника

![Project nomad library](https://cdnb.artstation.com/p/assets/images/images/000/053/303/large/nomad.jpg)

## Установка

1. Если нет composer, установите его. Источник: [эта статья](https://makedev.org/articles/composer.html) <br>
**на Linux и Mac OS X**  выполните следующие 2 команды:
```shell
$ curl -sS https://getcomposer.org/installer | php
$ sudo mv composer.phar /usr/local/bin/composer
```
2. В своем проекте создайте файл `composer.json`, 
добавив в него секцию `require`, а в нее `sens/impact`
с указанием версии таким образом:
```json
{
  "require": {
    "sens/impact": "1.*"
  }
}
```

3. Попробуем подключить библиотеку, создав файл `test.php`
с таким содержимым:
```php
<? require_once 'vendor/autoload.php';

use Sens\Impact\Version;

Version::show();
```

## Пользуйтесь на здоровье!
&copy; &Sigma;&epsilon;&nu;&sigmaf; &Iota;&mu;&pi;&alpha;&kappa;&tau; в [Telegram](https://t.me/sens_impact)
