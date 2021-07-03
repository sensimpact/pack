# Sens Impact
Библиотека проектного кочевника

![Sens Impact Logo](https://content.sportslogos.net/logos/1/21/full/oh7bwuxz0kvn1sfmznlguf8fl.gif)

## Установка

1. Если нет composer, установите его (источник [эта статья][1])<br>
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
&copy; &Sigma;&epsilon;&nu;&sigmaf; &Iota;&mu;&pi;&alpha;&kappa;&tau; в [Telegram][2]

[1]: (https://makedev.org/articles/composer.html)
[2]: (https://t.me/sens_impact)
