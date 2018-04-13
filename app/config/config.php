<?php
// app/config/config.php
$container->loadFromExtension('twig', array(
'exception_controller' => 'AppBundle:Exception:showException',
// ...
));
