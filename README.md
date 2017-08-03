# Installition

via `composer`
```
composer require ahmed-aliraqi/laravel-assets:dev-master
```

In your `config/app.php` file add this command in the `providers` array
```
Aliraqi\Assets\Providers\AssetsServiceProvider::class,
```
### Generate the config file :

```
php artisan vendor:publish --tag=laravel-asset,
```

`config/assets.php` file :
```
<?php

return [

    'scripts' => [
        'jquery' => 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js',

        'jquery-ui' => 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js',

        'bootstrap' => 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',

        'vue' => 'https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.4/vue.min.js',

        'select2' => 'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',

        'datatables' => [
            'https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.15/js/jquery.dataTables.min.js',
            'https://cdnjs.cloudflare.com/ajax/libs/fixed-data-table/0.6.4/fixed-data-table.min.js',
        ],
    ],

    'styles' => [
        'bootstrap' => 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',
        'components' => [
          env('APP_URL') . '/css/core.css',
          env('APP_URL') . '/css/fontawesome.css',
          env('APP_URL') . '/css/components.css',
        ],
    ],

];
```

## usage in blade files 

```
{{ scripts('jquery') }} 
```
or 
```
@scripts('jquery')
```
result :
```
<script type="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
```

for multiple paths :
```
@scripts('datatables')
```
result : 
```
<script type="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.15/js/jquery.dataTables.min.js"></script>

<script type="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fixed-data-table/0.6.4/fixed-data-table.min.js"></script>
```

styles files :
---
```
<!-- bootstrap -->
{{ styles('bootstrap') }} 

<!-- components files -->
{{ styles('components') }} 
```
or 
```
<!-- bootstrap -->
@styles('bootstrap')


<!-- components files -->
@styles('components')
```
result :
```
<!-- bootstrap -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">

<!-- components files -->
<link href="http://localhost/css/core.css" rel="stylesheet" type="text/css">
<link href="http://localhost/css/fontawesome.css" rel="stylesheet" type="text/css">
<link href="http://localhost/css/components.css" rel="stylesheet" type="text/css">
```
