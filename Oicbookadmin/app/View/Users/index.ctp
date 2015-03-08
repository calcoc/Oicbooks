<!DOCTYPE html>
<html lang='ja'>
<head>
</head>
<body>
<?php echo $this->Html->link('会員情報検索',array('action'=>'index')); ?>
<table>
        <tr>
          <th>会員id</th>
          <th>名前</th>
          <th>電話番号</th>
          <th>編集</th>
          <th>削除</th>
        </tr>
           <?php foreach($User as $Users): ?>
        <tr>
          <td><?php echo h($Users['User']['id']);?></td>
          <td><?php echo h($Users['User']['username']);?></td>
          <td><?php echo ($Users['User']['telephone']);?></td>
          <td><?php echo $this->Html->link('編集',array('action'=>'edit',$Users['User']['id'])); ?></td>
          <td><?php echo $this->Html->link('削除',array('action'=>'delete',$Users['User']['id'])); ?></td>
        </tr>
   <?php endforeach; ?>

     </table>


<h2>会員情報検索</h2>
<?php echo $this->Html->link('会員情報検索',array('action'=>'search')); ?>

     <?php echo $this->Html->link('<h4><br /><br />管理画面へ</h4>', 
    array('controller' => 'Toppages', 'action' => 'index'), 
    array('escape' => false)); ?>

