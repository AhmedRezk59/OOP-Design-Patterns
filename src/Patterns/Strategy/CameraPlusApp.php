<?php

namespace Src\Patterns\Strategy;

use Src\Patterns\Strategy\Behaviours\SocialMediaShareBehaviour;

class CameraPlusApp extends PhoneCameraApp
{

    public function __construct()
    {
        $this->setShareBehaviour(new SocialMediaShareBehaviour());
    }

    public function edit()
    {
        echo 'Plus edit' . '<br>';
    }
}
