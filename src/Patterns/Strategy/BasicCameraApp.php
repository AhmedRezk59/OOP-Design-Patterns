<?php

namespace Src\Patterns\Strategy;

use Src\Patterns\Strategy\Behaviours\EmailShareBehaviour;

class BasicCameraApp extends PhoneCameraApp {
    
    public function __construct()
    {
        $this->setShareBehaviour(new EmailShareBehaviour());
    }

    public function edit ()
    {
        echo 'No edit' . '<br>';
    }
}