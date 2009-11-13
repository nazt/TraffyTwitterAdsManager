<?php
    class Player extends AppModel
    {
        var $name = 'Player';

        var $belongsTo = array('Team' =>
                 array('className'    => 'Team',
                     'conditions'   => '',
                     'order'        => '',
                     'foreignKey'   => 'team_id'
                 )
             );
    }
?>