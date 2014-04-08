@layout('layout.layout')
<div class="content">

<div class="row">

    @include('partial.docsMenu')

    <div class="small-9 columns">

        <h2>Routes</h2>
        <p>
            The constructor in the Routes object accepts 3 arguments, the first is the route to be match, the second is the controller or an anonymous function (Closue), and the third is the
            function in the controller class specified in paramater one.

        </p>
        <p>
            The Route oject is located in Namespace Oak\Route (file: /oak/Route/Route.php)
        </p>

        <h4>Routes file</h4>
        <p>
            The routes file is located in <strong>/bootstrap/routes.php</strong>
        </p>
<h4>Create basic routes</h4>
<pre class="prettyprint">
use \Oak\Route\Route;
use \Oak\Route\Routes;

$routes = new Routes();
$routes->addRoute(new Route('/', 'index', 'index'));
$routes->addRoute(new Route('about', 'index', 'about'));
Container::set('routes', $routes);

</pre>

<h4>Create routes with parameters</h4>

<pre class="prettyprint">
use \Oak\Route\Route;
use \Oak\Route\Routes;

$routes = new Routes();
$routes->addRoute(new Route('user/{userID}/{otherParam}', 'user', 'index'));

Container::set('routes', $routes);

</pre>

<h4>Create routes with closures</h4>

<pre class="prettyprint">
use \Oak\Route\Route;
use \Oak\Route\Routes;

$routes = new Routes();

$routes->addRoute(new Route('about/{param1}', function($param1) {
    echo "This is loaded with a closure.";
    echo "Easy access of param1 by using ". echo $param1;
}, null ));

Container::set('routes', $routes);

</pre>



</div>
</div>

</div>
