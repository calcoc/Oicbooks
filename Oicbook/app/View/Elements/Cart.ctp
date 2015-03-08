<div id="cart">
<?php echo $this->Html->link($this->Html->image('cart.svg' , array('alt' => 'OIC Book','style' =>'width:60px')),'/carts/view',array('escape'=>false));?>
<?php echo $this->Html->link($count,array('controller'=>'carts','action'=>'view'),array('escape'=>false,'class'=>'suu'));?>
</div>

