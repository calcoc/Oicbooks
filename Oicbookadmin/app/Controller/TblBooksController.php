<?php
 class TblBooksController extends AppController{

   public function index(){
    $this->set('TblBook',$this->TblBook->find('all'));

        if($this->request->is('post')){
     $title=$this->request->data['Search']['商品検索'];
       $data=$this->TblBook->find('all',array('conditions'=>array('or'=>array('BOOKS_NAME like'=>'%'.$title.'%','BOOKS_KANA like'=>'%'.$title.'%','BOOKS_HIRA like'=>'%'.$title.'%'))));
        }else{
        $data = $this->TblBook->find('all');
         $this->set('TblBook',$data);
       }
  }

  public function search(){
 }


  public function warehouse(){
 $this->set('TblBook',$this->TblBook->find('all'));


        if($this->request->is('post')){
     $title=$this->request->data['Search']['商品検索'];
      $data=$this->TblBook->find('all',array('conditions'=>array('BOOKS_NAME like'=>'%'.$title.'%')));
       $this->set('TblBook',$data);
        }else{
        $data = $this->TblBook->find('all');
         $this->set('TblBook',$data);
       }
 }

   public function add(){
    if($this->request->is('post'))
   {
     if($this->TblBook->save($this->request->data))
    {
       $this->Session->setFlash('追加完了');
         $this->redirect(array('action'=>'index'));
    }
    else
    {
        $this->Session->setFlash('追加失敗');
     }
  }
}

   public function edit($id = null)
{
  $this->TblBook->id=$id;
  if($this->request->is('get'))
  {
       $this->request->data=$this->TblBook->read();
  }
  else
  {
     if($this->TblBook->save($this->request->data))
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
    $this->TblBook->id=$id;
    if($this->TblBook->delete())
   {
     $this->Session->setFlash('削除完了');
     $this->redirect(array('action'=>'index'));
    }
    else
    {
        $this->Sessin->setFlash('削除失敗');
   }
}

  public function searchwarehouse(){
 }

   public function warehouseedit($id=null){
  
     $this->TblBook->id=$id;
  if($this->request->is('get'))
  {
       $this->request->data=$this->TblBook->read();
  }
  else
  {
     if($this->TblBook->save($this->request->data))
      {
          $this->Session->setFlash('更新完了');
          $this->redirect(array('action'=>'warehouse'));
     }
      else
      {
          $this->Sessin->setFlash('更新失敗');
       }
    }


 }
}
