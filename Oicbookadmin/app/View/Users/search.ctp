<h1>検索</h1>
 <?php
   echo $this->Form->create('Search',array('action'=>'index','url'=>'index'));
   echo $this->Form->input('会員名検索');
   echo $this->Form->end('検索');
   ?>