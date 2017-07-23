# ROPLAY

## INSTALLATION

```bash
composer install
php artisan migrate
php artisan vendor:publish --tag=lfm_config
php artisan vendor:publish --tag=lfm_public
```

## Configuration
 * renomer le fichier `.env.example` en `.env`
 * configurer les varriables dans `.env.`