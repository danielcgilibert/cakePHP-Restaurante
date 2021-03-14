<?php

class Mesero extends AppModel
{

    public $validate = array(
        'dni' => array(
            'notEmpty' => array(
                'rule' => 'notBlank'
            ),
            'numeric' => array(
                'rule' => 'numeric',
                'message' => 'solo numeros'
            )
        ),

        'nombre' => array(
            'rule' => 'notBlank'
        ),

        'apellido' => array(
            'rule' => 'notBlank'
        ),

        'telefono' => array(
            'rule' => 'notBlank'
        )
    );
}
