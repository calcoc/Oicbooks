<?php
 class TblSalesController extends AppController{

   public function index(){
    $this->set('TblSale',$this->TblSale->find('all'));
  }

public function edit($id = null)
{
  $this->TblSale->id=$id;
  if($this->request->is('get'))
  {
       $this->request->data=$this->TblSale->read();
  }
  else
  {
     if($this->TblSale->save($this->request->data))
      {
          $this->Session->setFlash('編集完了');
          $this->redirect(array('action'=>'index'));
     }
      else
      {
          $this->Sessin->setFlash('更新失敗');
       }
    }
 }

}