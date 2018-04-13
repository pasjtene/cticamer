<?php
// app/config/routing_dev.php
use Symfony\Component\Routing\RouteCollection;

$collection = new RouteCollection();
$collection->addCollection(
$loader->import('@TwigBundle/Resources/config/routing/errors.xml')
);
$collection->addPrefix("/_error");

return $collection;
