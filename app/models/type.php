<?php
    class Type extends AppModel
    {
        var $name = 'Type';
        var $displayField = 'type';
		var $hasMany = 'Message'; 
    }
?>