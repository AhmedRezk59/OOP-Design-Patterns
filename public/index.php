<?php

require __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . 'vendor' .DIRECTORY_SEPARATOR . 'autoload.php';


use Src\Patterns\Strategy\BasicCameraApp;
use Src\Patterns\Strategy\Behaviours\EmailShareBehaviour;
use Src\Patterns\Strategy\Behaviours\SocialMediaShareBehaviour;
use Src\Patterns\Strategy\CameraPlusApp;

$camera = new CameraPlusApp();
$camera->take();
$camera->edit();
$camera->save();
$camera->share();
$camera->setShareBehaviour(new EmailShareBehaviour());
$camera->share();
echo '-------------------------------------------------------------------<br>';
$camera = new BasicCameraApp();
$camera->take();
$camera->edit();
$camera->save();
$camera->share();
$camera->setShareBehaviour(new SocialMediaShareBehaviour());
$camera->share();
