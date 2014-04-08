<?hh namespace App\Controller;

use \Oak\Controller\Basecontroller;
use \Oak\View\View;

class DocsController extends \Oak\Controller\BaseController {

public function __construct():void {
    parent::__construct();

    $this->title = "Oak Framework 0.1.0";
    $this->request = $r = \Container::get('request');

}

    public function index(): \Oak\View\View {

        $view = new View('docs.index');
        $view->with('headline', 'Documentation')
             ->with('requestUri' , $this->request->getRequestUri());

        return $view;
    }

    public function one(): \Oak\View\View {

        $view = new View('docs.one');
        $view->with('headline', 'Documentation')
             ->with('requestUri' , $this->request->getRequestUri());

        return $view;
    }

    public function controller(): \Oak\View\View {
        $view = new View('docs.controller');
        $view->with('headline', 'Documentation')
             ->with('requestUri' , $this->request->getRequestUri());

        return $view;
    }

    public function filestructure(): \Oak\View\View {

        $view = new View('docs.filestructure');
        $view->with('headline', 'Documentation')
             ->with('requestUri' , $this->request->getRequestUri());

        return $view;
    }

    public function view(): \Oak\View\View {

        $view = new View('docs.view');
        $view->with('headline', 'Documentation')
             ->with('requestUri' , $this->request->getRequestUri());

        return $view;
    }
    public function misc(): \Oak\View\View {

        $view = new View('docs.misc');
        $view->with('headline', 'Documentation')
             ->with('requestUri' , $this->request->getRequestUri());

        return $view;
    }
}
