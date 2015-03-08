<!DOCTYPE html>
<html lang='ja'>
<head>
</head>
<body>
<h2>会員情報編集</h2>
<ul>
   <?php foreach($TblSale as $TblSale): ?>

   <li><?php echo h($TblSale['TblSale']['id']);?>
       <?php echo h($TblSale['TblSale']['SALES_DAY']);?>
       売上金(<?php echo h($TblSale['TblSale']['SALES_PRICE']);?>)
       <?php echo $this->Html->link('編集',array('action'=>'edit',$TblSale['TblSale']['id'])); ?>

   </li>
   <?php endforeach; ?>
</ul>



