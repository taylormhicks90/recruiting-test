<?php

namespace App\Controllers;

use Config\App;

trait ViewManager{

    /**
     * An array of data that will be passed to the view when render is called
     * @var array
     */
    private $view_data = [];

    protected function initViewManager()
    {
        /**
         * @var $config \Config\App
         */
        $config = config(App::class);
        $this->view_data['title'] = $config->appName;
        $this->view_data['path'] = current_url(true)->getPath();
        helper('auth');
        $this->view_data['user'] = user();
        $this->setViewData('appName', $config->appName);
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
    protected final function _render(string $view, array $data = [], array $options = []){
        return view($view,array_merge($this->view_data,$data),$options);
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