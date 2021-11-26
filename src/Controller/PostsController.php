<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Routing\Router;

class PostsController extends AppController
{
   
    public $base_url;

    public function initialize() {
        parent::initialize();
        //$this->viewBuilder()->setLayout("default");
        $this->base_url = Router::url("/", true);
    }
    
    public function index()
    {
        $this->set("baseurl", $this->base_url);
    }

    public function addstudent()
    {
        $this->set("baseurl", $this->base_url);
    }
    
}
