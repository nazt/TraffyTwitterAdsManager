<?php
    class AdsType extends AppModel
    {
        var $name = 'AdsType';
        var $displayField = 'type';
		var $hasMany = 'Message'; 
    }
?>