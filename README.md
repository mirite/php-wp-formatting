# mirite/formatting

Shared formatting settings for PHP CS Fixer.
Used as an enhancement for the WordPress PHPCS standard.

```bash
composer require --dev mirite/formatting
```

Example `.php-cs-fixer.dist.php`:

```php
<?php

use Mirite\Formatting\CS_Fixer_Config;

require_once './vendor/autoload.php';

return CS_Fixer_Config::get_config(__DIR__);

```
