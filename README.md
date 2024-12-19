![Open Source Love](https://img.shields.io/badge/open-source-lightgrey?style=for-the-badge&logo=github)
![](https://img.shields.io/badge/Magento-2.4.3-orange?style=for-the-badge&logo=magento)
### Magento 2 DataPatchCreator Page Builder Compatibility Plugin

Plugin for PageBuilder to remove encoding of HTML special characters done by
`Magento\PageBuilder\Model\Filter\Template` class

### Installation

Installation is via `composer`
```
composer require qoliber/m2-datapatchcreator-pagebuilder-compatibility
```

After installing the packages just run:
```
php bin/magento setup:upgrade
```

### Requirements:

* Main Package: https://packagist.org/packages/qoliber/datapatchcreator (installed with the module)
* `PHP 8.1` or higher
* `Magento 2.4.3` or higher

### Tested on:

* `Magento 2.4.3` OpenSource with Page Builder
* `Magento 2.4.3-p1` OpenSource with Page Builder
