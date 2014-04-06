<?hh namespace App\Controller;

use \Oak\Controller\BaseController as BaseController;
use \Oak\App\App as App;
use \Logger;

class HelpController extends BaseController{

    public function index(): \Oak\View\View {

        $r = \Container::get('request');
        $view = new \Oak\View\View('help.index');
        $view->with('title', 'Help for Oak')
            ->with('footer', $r->getRequestUri())
             ->with('headline', 'Help!');

        return $view;

    }
}
