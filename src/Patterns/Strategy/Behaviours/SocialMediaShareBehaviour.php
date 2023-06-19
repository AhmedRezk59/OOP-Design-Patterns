<?php

namespace Src\Patterns\Strategy\Behaviours;

use Src\Patterns\Strategy\Interfaces\ShareBehaviourInterface;

class SocialMediaShareBehaviour implements ShareBehaviourInterface {
    
    public function share ()
    {
        echo 'Shared through the social media' . '<br>';
    }
}