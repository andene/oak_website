@layout('layout.layout')
<div class="content">

<div class="row">

    @include('partial.docsMenu')

    <div class="small-9 columns">

        <h2>Controller</h2>
        <p>
            All controllers must extend the \Oak\Controller\BaseController class
        </p>

<h4>Simple controller</h4>
<p>
    The to create a \Oak\View\View object simply pass the path to the view.
</p>

<pre class="prettyprint">
&lt;?hh namespace App\Controller;

class IndexController extends \Oak\Controller\BaseController {

    public function index():\Oak\View\View {
        $view = new \Oak\View\View('index.index');

        return $view;
    }
}
</pre>

<h4>Passing data to view</h4>
<p>
    It's rather easy to pass data to the view. Simply pass two arguments in the with function, the key and the values.
    To retrieve these values in the view you can simply use <code>echo $this->title</code>
</p>
<pre class="prettyprint">
&lt;?hh namespace App\Controller;

class IndexController extends \Oak\Controller\BaseController {

    public function index():\Oak\View\View {
        $view = new \Oak\View\View('index.index');

        $view->with('title', "My title")
             ->with('headline', 'Welcome to OakFramework')

        return $view;
    }
}
</pre>
</div>
</div>

</div>
