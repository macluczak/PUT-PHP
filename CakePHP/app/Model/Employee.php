<?php
App::uses('AppModel', 'Model');
/**
 * Employee Model
 *
 */
class Employee extends AppModel {
    public function comparisonWithField($validationFields = array(), $operator = null, $compareFieldName = '') {
        if (!isset($this->data[$this->name][$compareFieldName])) {
            throw new CakeException(sprintf(__('Can\'t compare to the non-existing field "%s" of model %s.'), $compareFieldName, $this->name));
        }
        $compareTo = $this->data[$this->name][$compareFieldName];
        foreach ($validationFields as $key => $value) {
            if (!Validation::comparison($value, $operator, $compareTo)) {
                return false;
            }
        }
        return true;
    }
    var $validate = array(
    'etat' => array(
        'notBlank' => array(
            'rule' => array('notBlank'),
    
        ),
    ),
    'nazwisko' => array(
        'notBlank' => array(
            'rule' => array('notBlank'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
        ),
    ), 
    'placa_pod' => array(
        'numeric' => array(
            'rule' => array('numeric')
        ),
        'lessThan2000' => array(
            'rule' => array('comparisonWithField', '<', 2000)
        ),
        'greaterThanMy0' => array(
            'rule' => array('comparisonWithField', '>', 0),
           
        ),
    ),
    'placa_pod' => array('ruleMinimum' => array('rule' => array('comparison', '>=', '0'), 'message' => 'Płaca podstawowa musi się zawierać w przedziale <0-2000>'),
			'ruleMaximum' => array('rule' => array('comparison', '<=', '2000'), 'message' => 'Płaca podstawowa musi się zawierać w przedziale <0-2000>'))
    );
    
}
