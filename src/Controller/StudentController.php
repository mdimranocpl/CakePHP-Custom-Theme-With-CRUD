<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Routing\Router;

class StudentController extends AppController
{
   
    public $base_url;

    public function initialize() {
        parent::initialize();
        //$this->viewBuilder()->setLayout("default");
        $this->base_url = Router::url("/", true);
        $this->loadModel("Student");
    }
    
    public function index()
    {
        $this->set("baseurl", $this->base_url);
        $this->set('students', $this->Student->find('all'));
    }

    public function addnew()
    {
        $this->set("baseurl", $this->base_url);

         $myentity = $this->Student->newEntity();

        if($this->request->is("post")){
            $mydata = $this->request->getData();
            $myentity->name = $mydata['name'];
            $myentity->roll = $mydata['roll'];
            $myentity->address = $mydata['address'];
            $this->Student->save($myentity);
            return $this->redirect(['action' => 'index']);
        }
         $this->set('students', $myentity);
    }

    public function edit($id)
    { 
        $myentity = $this->Student->get($id);
        $this->set(["baseurl"=>$this->base_url, "std"=>$myentity]);
    }
    public function editaction()
    {
        $mydata = $this->request->getData();
        $myentity = $this->Student->get($mydata['id']);

            $myentity->name = $mydata['name'];
            $myentity->roll = $mydata['roll'];
            $myentity->address = $mydata['address'];

            $this->Student->save($myentity);
            return $this->redirect(['action' => 'index']);
        
         $this->set('students', $myentity);
    }

    public function delete($id)
    {
        $this->request->allowMethod(['post','delete']);
        $studentz = $this->Student->get($id);
        $this->Student->delete($studentz);
        return $this->redirect(['action' => 'index']);
    }
}
