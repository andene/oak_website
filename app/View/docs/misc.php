@layout('layout.layout')
<div class="content">

<div class="row">

    @include('partial.docsMenu')

    <div class="small-9 columns">

        <h4>Misc</h4>

<pre class="prettyprint">
//bootstrap/routes.php

use \Oak\Route\Route;
use \Oak\Route\Routes;

$routes = new Routes();
$routes->addRoute(new Route('user/{userID}/{otherParam}', 'user', 'index'));

Container::set('routes', $routes);

</pre>


</div>
</div>

</div>
