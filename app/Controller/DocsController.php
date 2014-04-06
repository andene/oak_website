<?hh namespace App\Controller;

use \Oak\Controller\Basecontroller;
use \Oak\View\View;

class DocsController extends BaseController {

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

}
