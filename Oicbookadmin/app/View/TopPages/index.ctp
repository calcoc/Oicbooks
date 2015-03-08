
   <div id="books"><?php echo $this->Html->link('<li><h2>商品管理</h2></li>', 
    array('controller' => 'TblBooks', 'action' => 'index'), 
    array('escape' => false)); ?>
	</div>
	<div id="users">
  <?php echo $this->Html->link('<li><h2>ユーザ管理</h2></li>', 
    array('controller' => 'Users', 'action' => 'index'), 
    array('escape' => false)); ?>
	</div>
	<div id="zaiko">
  <?php echo $this->Html->link('<li><h2>在庫管理</h2></li>', 
    array('controller' => 'TblBooks', 'action' => 'warehouse'), 
    array('escape' => false)); ?>
	</div>