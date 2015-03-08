<?php
App::uses('AppModel','Model');
App::uses('CakeSession','Model/Datasource');

class Cart extends AppModel{
	public $useTable = false;


	/* add a Tblbook to cart */
	public function addTblBook($TblbookId){
		$allTblBooks = $this->readTblBook();
		if (!is_null($allTblBooks)){
			if (array_key_exists($TblbookId, $allTblBooks)){
			$allTblBooks[$TblbookId]++;
			} else{
				$allTblBooks[$TblbookId] = 1;
			}
		} else{
			$allTblBooks[$TblbookId] = 1;
		}
		$this->saveTblBook($allTblBooks);
	}
	/* get total count of Tblbooks*/
	public function getCount() {
		$allTblBooks = $this->readTblBook();
		if (count($allTblBooks) < 1) {
			return 0;
		}
		$count = 0;
		foreach ($allTblBooks as $Tblbook){
			$count = $count + $Tblbook;
		}
		return $count;
	}

	/*save data to session*/
	public function saveTblBook($data){
		return CakeSession::write('cart',$data);
	}
	/* read cart data from session*/
	public function readTblBook() {
		return CakeSession::read('cart');
	}
}