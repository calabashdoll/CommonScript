# CommonScript Package for PHP Composer #

This is a common script package for php composer beginners tutorial.
## 安装

使用 Composer安装:

```
    composer require "calabashdool/common-script:~0.1.0"
```

## Usage

```php
<?php
    require_once "vendor/autoload.php";

    use Calabash\calabash\Calabash;

    $hello = new Calabash("葫芦王");

    echo $hello->calabash();
```

