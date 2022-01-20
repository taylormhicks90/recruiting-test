<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\App;
use Config\Services;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = ['auth'];
    /**
     * the current session object
     *
     * @var \CodeIgniter\Session\Session
     */
    protected $session;
    /**
     * An array of data that will be passed to the view when render is called
     * @var array
     */
    private $view_data = [];
    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.
        /**
         * @var $config \Config\App
         */
        $config = config(App::class);
        $this->view_data['title'] = $config->appName;
        $this->view_data['path'] = $this->request->getPath();
        $this->view_data['user'] = user();
        $this->setViewData('appName', $config->appName);
        $this->session = Services::session();
        // E.g.: $this->session = \Config\Services::session();
    }

    protected function getViewData(string $key): mixed
    {
        return $this->view_data[$key];
    }

    protected function setViewData(string $key, mixed $value): void
    {
        $this->view_data[$key] = $value;
    }

    protected function unsetViewData(?string $key){
        if (!is_null($key)){
            unset($this->view_data[$key]);
        }else{
            $this->view_data = [];
        }
    }
    protected function render(string $view, bool $with_view_data = true, array $options = []){
        return view($view,$with_view_data?$this->view_data:[],$options);
    }
    /**
     * @param string $path
     * @param bool $async
     */
    protected function addCSS(string $path, bool $async = false): void{
        array_push($this->view_data['css_files'],['path'=>$path,'async' => $async]);
    }

    /**
     * @param string $path
     */
    protected function removeCSS(string $path):void{
        //TODO: Implement Function
    }

    /**
     * @param string $path
     * @param bool $async
     */
    protected function addJS(string $path, bool $async = false){
        array_push($this->view_data['js_files'],['path'=>$path,'async' => $async]);
    }

    /**
     * @param string $path
     */
    protected function removeJS(string $path): void{
        //TODO: Implement Function
    }

}
