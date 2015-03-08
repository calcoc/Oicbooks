<h2>データ更新</h2> 
<?php   

echo $this->Form->create('TblBook');
echo $this->Form->input('BOOKS_WAREHOUSE',array('label'=>'在庫数'));
echo $this->Form->end('更新');
