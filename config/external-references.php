<?php

return [

    /*
    |----------------------------------------------------------------------------------
    | Hidden Attributes
    |----------------------------------------------------------------------------------
    |
    | This configuration file defines the attributes that should be hidden by default
    | in your ExternalReference Eloquent models. Hidden attributes are excluded from
    | the model's array and JSON representations.
    |
    */

    'hidden_attributes' => ['referenceable_type', 'referenceable_id', 'created_at', 'updated_at'],

    /*
    |----------------------------------------------------------------------------------
    | Caching
    |----------------------------------------------------------------------------------
    |
    | In some cases where you have many logics using this package and you don't want all 
    | requests to hit your database, you can enable caching to cache the value of
    | the identifier for a while.
    |
    */
    'caching' => (bool) env('EXTERNAL_REFERENCES_CACHING', false),

    
    /*
    |----------------------------------------------------------------------------------
    | Cache lifespan
    |----------------------------------------------------------------------------------
    |
    | With this option, you can set the cache lifespan in seconds. This defines how long the
    | cache will retain the value of the reference before querying the database again.
    |
    */
    'cache_lifespan' => 30,

];
