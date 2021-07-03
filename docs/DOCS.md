# Документация
Писать ее всем лень, зато читать любят все!

![Documentation](https://d33wubrfki0l68.cloudfront.net/8f5837fc1ea5842376df1e8f9689a2e50ba11581/d63cb/assets/images/uploads/uxdocumentation.png)

## Методы
```php
// Возвращает правильное склонение по числу
\Sens\Impact\Utils\Strings::number(5, ['день', 'дня', 'дней']); // 5 дней

// Выводит номер текущей версии библиотеки
\Sens\Impact\Version::show(); // Sens Impact. Version: 1.1.0
```
## Структура библиотеки
```
[d] docs/ (Документация)
|   ├── [f] DOCS.md (Главная страница документации)
[d] src/ (Классы)
|   ├── [d] Utils/ (Утилиты)
|   |   ├── [c] Strings (Строки)
|   |   |   ├── [m] number (Возвращает правильное склонение по числу)
|   ├── [c] Version (Версия)
|   |   ├── [m] show(): void (Выводит номер текущей версии проекта)
```
> d - directory<br>
> f - file<br>
> c - class<br>
> m - method<br>