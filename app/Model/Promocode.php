<?php
App::uses('AppModel', 'Model');
/**
 * Promocode Model
 */
class Promocode extends AppModel {
    public $belongsTo = array(
        'Restaurants' => array(
            'className' => 'Restaurants',
            'foreignKey' => 'res_id'
        )
    );

}
