<?php
App::uses('AppController', 'Controller');
class CartsController extends AppController {
	public $uses = array('TblBook','Cart');
	
	public function add() {$this->layout = 'default';
		$this->autoRender = false;
		if ($this->request->is('post')) {
			$this->Cart->addTblBook($this->request->data['Cart']['Tblbook_id']);
		}
		echo $this->Cart->getCount();
	}
	public function view() {$this->layout = 'default';
		$carts = $this->Cart->readTblBook();
		$Tblbooks = array();
			if(!is_null($carts)) {
				foreach($carts as $TblbookId => $count) {
					$Tblbook = $this->TblBook->read(null,$TblbookId);
					$Tblbook['TblBook']['count'] = $count;
					$Tblbooks[] = $Tblbook;
				}
			}
			$this->set('Tblbooks',$Tblbooks);
	}
	public function update() {$this->layout = 'default';
		if($this->request->is('post')){
			if(!empty($this->request->data)) {
				$cart = array();
				foreach ($this->request->data['Cart']['count'] as $index=>$count) {
					if($count > 0){
						$TblbookId = $this->request->data['Cart']['Tblbook_id'][$index];
						$cart[$TblbookId] = $count;
					}
				}
				$this->Cart->saveTblBook($cart);
			}
		}
		$this->redirect(array('action'=>'view'));
	}
	public function payout(){
		$this->layout = 'default';
		}
	
}