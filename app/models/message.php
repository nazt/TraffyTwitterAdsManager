<?php
    class Message extends AppModel
    {
        var $name = 'Message';
        var $belongsTo = array('Type' =>
                 array('className'    => 'Type',
                     'conditions'   => '',
                     'order'        => '',
                     'foreignKey'   => 'type_id'
                 )
             );
    }
?>