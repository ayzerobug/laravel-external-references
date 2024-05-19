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
];
