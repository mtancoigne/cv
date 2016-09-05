<?php
use Cake\Routing\Router;

Router::plugin('Cv', function ($routes) {
	$routes->connect(
		'/',
		['controller' => 'Pages', 'action' => 'display', 'manuel.tancoigne']);
});
