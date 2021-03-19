<?php

return [
    'namespace'       => 'App\Models',
    'base_class_name' => \Illuminate\Database\Eloquent\Model::class,
    'output_path'     => '\app\Models',
    'no_timestamps'   => true,
    'date_format'     => null,
    'connection'      => null,
    'backup'          => null,
    'db_types' => [
        'enum' => 'string',
    ],
];
