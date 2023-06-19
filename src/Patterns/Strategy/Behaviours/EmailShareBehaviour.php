<?php

namespace Src\Patterns\Strategy\Behaviours;

use Src\Patterns\Strategy\Interfaces\ShareBehaviourInterface;

class EmailShareBehaviour implements ShareBehaviourInterface {
    public function share ()
    {
        echo 'Share through Email' . '<br>';
    }
}