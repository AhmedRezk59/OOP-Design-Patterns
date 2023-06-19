<?php

namespace Src\Patterns\Strategy;

use Src\Patterns\Strategy\Interfaces\ShareBehaviourInterface;

abstract class PhoneCameraApp {
    private ShareBehaviourInterface $shareBehaviour;

    public function take ()
    {
        echo 'Took the picture' . '<br>';
    }

    public abstract function edit();

    public function save ()
    {
        echo 'Saved the picture' . '<br>';
    }

    public function setShareBehaviour (ShareBehaviourInterface $shareBehaviour)
    {
        $this->shareBehaviour = $shareBehaviour;
    }
    public function share ()
    {
        $this->shareBehaviour->share();
    }
}