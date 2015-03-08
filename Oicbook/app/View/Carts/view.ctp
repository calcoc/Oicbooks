
<div class="row">
	<div class="col-lg-12">
	<ol class="breadcrumb">
		<li><?php echo $this->Html->link('Home','/Tblbooks');?><class="active">>Cart</li>
			</ol>
	</div>
	</div>

<?php echo $this->Form->create('Cart',array('url'=>array('action'=>'update')));?>
<div class="row">
<div class="col-lg-12">
<table class="table">
<thead>
<?php echo $this->Form->submit('更新',array('class'=>'btn btn-warning','div'=>false));?>

<tr>
<th style="width:500px">商品</th>
<th>価格</th>
<th>数量</th>
<th>Total</th>
</tr>
</thead>
<tbody>
<?php $total = 0;?>

<?php foreach($Tblbooks as $TblBook): ?>
	<tr>
	<td><?php echo $this->Html->image($TblBook['TblBook']['BOOKS_IMAGE'],array('id'=>'small'));?>
		<?php echo $TblBook['TblBook']['BOOKS_NAME']; ?></td>
	<td>￥<?php echo $TblBook['TblBook']['BOOKS_PRICE'];?></td>
	<td><div class="col-xs-3">
	<?php echo $this->Form->hidden('Tblbook_id.',array('value'=>$TblBook['TblBook']['id']));?>
	<?php echo $this->Form->input('count.',array('type'=>'number', 'label'=>false,'class'=>'form-control input-sm', 'value'=>$TblBook['TblBook']['count'],'style'=>'width:50px'));?>
	</div></td>
	<td>￥<?php echo $count*$TblBook['TblBook']['BOOKS_PRICE']; ?>
	</td></tr>
	<?php $total = $total + ($count*$TblBook['TblBook']['BOOKS_PRICE']);?>
<?php endforeach ;?>
<tr class="success">
<td colspan=3><?php echo $this->Html->link($count,array('controller'=>'carts','action'=>'view'),array('escape'=>false));?>  (商品)</td>
<td>￥<?php echo $total;?>
</td>
</tr>
</tbody>
</table>
<p class="text-right">
<a class="btn btn-success"><?php echo $this->Html->link("レジへ進む",'payout',array('class'=>'white'));?>
</a>
</p>

</div>
</div>
<?php echo $this->Form->end();?>