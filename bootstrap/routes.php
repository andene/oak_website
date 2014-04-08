<?hh
use \Oak\Route\Route;
use \Oak\Route\Routes;

$routes = new Routes();

$routes->addRoute(new Route('/', 'index', 'index'));
$routes->addRoute(new Route('about', 'index', 'about'));
$routes->addRoute(new Route('docs', 'docs', 'index'));

$routes->addRoute(new Route('docs/routes', 'docs', 'one'));
$routes->addRoute(new Route('docs/controller', 'docs', 'controller'));
$routes->addRoute(new Route('docs/filestructure', 'docs', 'filestructure'));
$routes->addRoute(new Route('docs/view-partials-layouts', 'docs', 'view'));
$routes->addRoute(new Route('docs/misc', 'docs', 'misc'));



/*$routes->addRoute(new Route('test/{param1}/{param2}', function($param1, $param2) {

$view = new \Oak\View\View('index.index');
$view->with('title', "Closue title")
     ->with('headline', 'Welcome to OakFramework')
     ->with('footer', date('H:i:s'));
     echo $view->render();

    echo "<h1>Closure run from Route</h1>";
    echo "Value 1: " . $param1;
    echo "<br> Value 2: " . $param2;
}, null));


$routes->addRoute(new Route('user/{username}/{id}', 'index', 'about'));
$routes->addRoute(new Route('index/information', 'index', 'information'));
$routes->addRoute(new Route('index/notextist', 'index', 'NotExtist'));
*/

Container::set('routes', $routes);
