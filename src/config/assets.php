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
          env('APP_URL') . '/components.css',
        ],
    ],

];