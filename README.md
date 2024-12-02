# Install filament

composer require filament/filament:"^3.2" -W

# Install filament panels

php artisan filament:install --panels

# Create Filament Resource

php artisan make:filament-resource Brand --generate

# Link the storage in public

php artisan storage:link
