<?php 
	App::uses('AppController','Controller');
 	class TblBooksController extends AppController{
 		public function index(){
            $this->layout = 'default';
		$BOOK = $this->TblBook->find('all');
		$this->set('book',$BOOK);

		}

		public function sale(){
            $this->layout = 'default';
		$BOOK = $this->TblBook->find('all');
		$this->set('book',$BOOK);

            if($this->request->is('post')){
            $title = $this->request->data['Tbl_books']['search_text'];
             $data=$this->TblBook->find('all',array('conditions'=>array('or'=>array('BOOKS_NAME like'=>'%'.$title.'%','BOOKS_KANA like'=>'%'.$title.'%','BOOKS_HIRA like'=>'%'.$title.'%'))));
            $this->set('TblBook',$data);
            }else{
            $data = $this->TblBook->find('all');
            $this->set('TblBook',$data);
       }
    
		}

		public function view($id){
            $this->layout = 'default';
        if (!$this->TblBook->exists($id)) {
            throw new NotFoundException(__('Invalid Tblbook'));
            }
            $data = null;
            $TblBook = $this->TblBook->read(null,$id);
            $this->set(compact('TblBook'));
            
    }
}
