<h1>検索</h1>
 <?php
   echo $this->Form->create('Search',array('action'=>'warehouse','url'=>'warehouse'));
   echo $this->Form->input('商品検索');
   echo $this->Form->end('検索');
   ?>