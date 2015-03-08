<h2>在庫編集</h2>
<?php

echo $this->Form->create('TblSale');
echo $this->Form->input('SALES_DAY',array('label'=>'売上日'));
echo $this->Form->input('SALES_PRICE',array('label'=>'売上金'));
echo $this->Form->end('更新');

?>