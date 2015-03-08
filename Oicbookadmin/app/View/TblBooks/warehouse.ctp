<h2>商品在庫検索</h2>
<?php echo $this->Html->link('在庫検索',array('action'=>'searchwarehouse')); ?>
      <table>
        <tr>
          <th>書籍id</th>
          <th>書籍名</th>
          <th>ISBN</th>
          <th>在庫</th>
          <th>編集</th>
        </tr>
           <?php foreach($TblBook as $TblBook): ?>
        <tr>
          <td><?php echo h($TblBook['TblBook']['id']);?></td>
          <td><?php echo h($TblBook['TblBook']['BOOKS_NAME']);?></td>
          <td><?php echo ($TblBook['TblBook']['BOOKS_ISBN']);?></td>
          <td><?php echo ($TblBook['TblBook']['BOOKS_WAREHOUSE']);?></td>
          <td><?php echo $this->Html->link('編集',array('action'=>'edit',$TblBook['TblBook']['id'])); ?></td>
        </tr>
   <?php endforeach; ?>
        
     </table>
<?php echo $this->Html->link('topへ',array('action'=>'warehouse')); ?>




