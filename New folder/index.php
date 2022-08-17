<?php
require 'field.php';
require 'boolean.php';
require 'text.php';

require 'radio.php';
require 'checkbox.php';
$fields = [
    new App\Field('basefiled'),
    new App\Text('textfield'),
    new App\Boolean('boolean field'),
    new App\Checkbox('checkbox field'),
    new App\Radio('radio field'),
];


foreach ($fields as $field){
    echo $field->Render()."</br>";
}