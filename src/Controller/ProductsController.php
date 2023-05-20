<?php
// src/Controller/ArticlesController.php

namespace App\Controller;
use App\Controller\AppController;
//use Cake\Http\Exception;
//use Cake\View\Helper\HtmlHelper;
//use Cake\View\Helper\UrlHelper;
//use Cake\View\Helper\FormHelper;

class ProductsController extends AppController
{
  //
    public function initialize(): void
    {
        parent::initialize();
        //$this->loadComponent('Maths');
       // Uses in controller: echo $this->Maths->doComplexOperation(3,5);
        $this->loadComponent('Paginator');
        //$this->loadComponent('Flash'); // Include the FlashComponent
        //$this->loadHelper('Html');
        //$this->loadHelper('Form'); 
        //$this->loadHelper('url'); 
       
        $this->viewBuilder()->setLayout('default');
    }
   

    public function index()
    {              

        //$this->loadComponent('Paginator');
        $products = $this->Paginator->paginate($this->Products->find());    

        //dd($products);

        $this->set(compact('products'));
    }

    public function add()
    {      
        //$this->viewBuilder()->setLayout('default');

        $articles = $this->Articles->find();
        $this->set(compact('articles'));
    }    

    public function save()
    {     
        $Article = $this->Articles->newEmptyEntity();
        if ($this->request->is('post')) {
            $Article = $this->Articles->patchEntity($Article, $this->request->getData());
            if ($this->Articles->save($Article)) {
                $this->Flash->success(__('The article has been created.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Failed to create article. Please, try again.'));
        }
        $this->set("title", "Add Article");
        $this->set(compact("atricle"));
    }  


    public function update($id = null)
    {   
        $article = $this->Articles->get($id);
        $this->set(compact('article'));

    }
  

    public function edit($id = null)      
    {            

            $article = $this->Articles->get($id, [
                'contain' => [],
            ]);
            if ($this->request->is(['patch', 'post', 'put'])) {
                $article = $this->Articles->patchEntity($article, $this->request->getData());
                if ($this->Articles->save($article)) {
                    $this->Flash->success(__('The article data has been updated successfully.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The article could not be updated. Please, try again.'));
            }
            $this->set(compact('article'));
            $this->set("title", "Edit Article");
    }    

    public function view($id = null)
    {
      //https://onlinewebtutorblog.com/cakephp-4-crud-tutorial-with-mysql/
      
        $article = $this->Articles->get($id);
        $this->set("title", "List Student");
        $this->set(compact("article"));
    }
/*
    public function listStudents()
    {
      //https://onlinewebtutorblog.com/cakephp-4-crud-tutorial-with-mysql/
      
        $students = $this->Students->find()->toList();
        $this->set("title", "List Student");
        $this->set(compact("students"));
    }
*/

/*
    public function edit($id = null)
        {
            $student = $this->Students->get($id, [
                'contain' => [],
            ]);
            if ($this->request->is(['patch', 'post', 'put'])) {
                $student = $this->Students->patchEntity($student, $this->request->getData());
                if ($this->Students->save($student)) {
                    $this->Flash->success(__('The student data has been updated successfully.'));

                    return $this->redirect(['action' => 'listStudents']);
                }
                $this->Flash->error(__('The student could not be updated. Please, try again.'));
            }
            $this->set(compact('student'));
            $this->set("title", "Edit Student");
    }
*/

    public function delete($id = null)
    {
        $this->request->allowMethod(['post','delete']);
        $article = $this->Articles->get($id);
        if ($this->Articles->delete($article)) {
            $this->Flash->success(__('The article has been deleted.'));
        } else {
            $this->Flash->error(__('The article could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }  


    public function test(){  
      //$id= $this->request->getData('id');

      echo json_encode(['id' => 12]);

      //If template not render use exit
      exit; 
      
    }  

}