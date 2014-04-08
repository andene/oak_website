<?hh namespace App\Controller;


class IndexController extends \Oak\Controller\BaseController {

    public string $title;
    public string $request;
    public function __construct():void {
        parent::__construct();

        $this->title = "Oak Framework 0.1.0";
        $this->request = $r = \Container::get('request');
    }

    public function index():\Oak\View\View {

        $view = new \Oak\View\View('index.index');
        $view->with('title', $this->title)
             ->with('headline', 'Welcome to OakFramework')
             ->with('requestUri' , $this->request->getRequestUri());

        return $view;

    }

    public function about() :\Oak\View\View {
        $r = \Container::get('request');

        $view = new \Oak\View\View('index.about');

        $title = "About Oak Framework";
        $headline = "About";

        $view->with('title', $title)
             ->with('headline', $headline)
             ->with('requestUri' , $this->request->getRequestUri());

        return $view;
    }


}
