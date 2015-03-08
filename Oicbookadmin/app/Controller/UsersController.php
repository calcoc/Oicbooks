<?php
 class UsersController extends AppController{

   

   public function index(){
    $this->set('User',$this->User->find('all'));

     if($this->request->is('post')){
     $title=$this->request->data['Search']['会員名検索'];
      $data=$this->User->find('all',array('conditions'=>array('username like'=>'%'.$title.'%')));
       $this->set('User',$data);
        }else{
        $data = $this->User->find('all');
         $this->set('User',$data);
       }
  }

   public function search(){
   }

   public function edit($id = null)
{
  $this->User->id=$id;
  if($this->request->is('get'))
  {
       $this->request->data=$this->User->read();
  }
  else
  {
     if($this->User->save($this->request->data))
      {
          $this->Session->setFlash('更新完了');
          $this->redirect(array('action'=>'index'));
     }
      else
      {
          $this->Sessin->setFlash('更新失敗');
       }
    }
 }
  public function delete($id=null)
 {
    $this->User->id=$id;
    if($this->User->delete())
    {
       $this->Session->setFlash('削除完了');
       $this->redirect(array('action'=>'index'));
     }
     else
     {
        $this->Sessin->setFlash('削除失敗');
   }
 }
}