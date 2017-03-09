# pfthromb360eduau project repository

This repository is using the Pfizer standard repository layout.  The layout is
documented below.

```
    /
    |
    *-- source/ (prod domain name)
    |    |
    |    +-- db/
    |    |    |
    |    |    +-- database.tar.gz - database dump
    |    |
    |    +-- deploy/
    |         |
    |         +-- apache_custom.conf - custom apache configuration
    |         |
    |         +-- modules/
    |         |    |
    |         |    +-- contrib/ - contrib modules
    |         |    |
    |         |    +-- custom/ - custom modules and features
    |         |
    |         +-- themes/
    |         |    |
    |         |    +-- contrib/ - contrib themes
    |         |    |
    |         |    +-- custom/ - custom theme
    |         |
    |         +-- libraries/ - libraries
    |         |
    |         +-- local.settings.php - deprecated settings file (use per environment files below)
    |         |
    |         +-- settings/
    |              |
    |              +-- settings.prod.php - production environment config settings
    |              |
    |              +-- settings.stage.php - stage specific config settings
    |              |
    |              +-- settings.integration.php - integration specific settings
    |              |
    |              +-- settings.dev.php - dev specific config
    |
    +-- tests/ - behat tests
    |
    +-- docs/ - project documentation
    |
    +-- scripts/ - any custom scripts to be run outside of drupal
    |
    +-- README.md - this file
```

