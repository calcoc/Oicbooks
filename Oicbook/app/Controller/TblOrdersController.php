<?php 
	App::uses('AppController','Controller');
 	class TblOrdersController extends AppController{

 		public function index(){
 			$this->layout = 'default';
            $tbl_book_id = $_SESSION['cart'];
            $tbl_book_id = json_encode($tbl_book_id);

            //登録する値
            $data = array('TblOrder' => array('tbl_book_id' => $tbl_book_id));
            // 登録するフィールド
            $fields = array('tbl_book_id');
            // 新規登録
            $this->TblOrder->save($data, true, $fields);


 			if (empty($_SESSION['Auth'])) {
 					$this->redirect('../');
 			}
			$data = $_POST['data'];
			if (empty($data['TblOrder']['ORDER_HOW'])) {
 					$this->redirect('../carts/payout');
			}
            if (!empty($_SESSION['cart'])) {
                
            }
      if($this->request->is('post')){
     		$this->TblOrder->save($this->request->data);
			}
				$haisou = $this->request->data['TblOrder']['ORDER_HOW'];
        		$this->set('haisou',$haisou);
        		$year = $this->request->data['TblOrder']['ORDER_TIME']['year'];
        		$this->set('year',$year);
        		$month = $this->request->data['TblOrder']['ORDER_TIME']['month'];
        		$this->set('month',$month);
        		$hour = $this->request->data['TblOrder']['ORDER_TIME']['hour'];
        		$this->set('hour',$hour);
        		$min = $this->request->data['TblOrder']['ORDER_TIME']['min'];
        		$this->set('min',$min);
        		$day = $this->request->data['TblOrder']['ORDER_TIME']['day'];
        		$this->set('day',$day);
        		$paper = $this->request->data['TblOrder']['ORDER_RECEIPT'];
        		$this->set('paper',$paper);	
			$_SESSION['cart'] = array();
	}
}