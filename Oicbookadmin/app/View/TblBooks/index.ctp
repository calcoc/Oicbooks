<?php echo $this->Html->link('商品情報更新',array('action'=>'index')); ?>



      <table>
        <tr>
          <th>書籍id</th>
          <th>書籍名</th>
          <th>ISBN</th>
          <th>作者</th>
          <th>出版社</th>
          <th>発売日</th>
          <th>カテゴリ</th>
          <th>ジャンル</th>
          <th>単価</th>
          <th>定価</th>
          <th>セール中の値段</th>
          <th>概要</th>
          <th>在庫</th>
          <th>編集</th>
          <th>削除</th>
        </tr>
           <?php foreach($TblBook as $TblBook): ?>
        <tr>
          <td><?php echo h($TblBook['TblBook']['id']);?></td>
          <td><?php echo h($TblBook['TblBook']['BOOKS_NAME']);?></td>
          <td><?php echo ($TblBook['TblBook']['BOOKS_ISBN']);?></td>
          <td><?php echo ($TblBook['TblBook']['BOOKS_WRITER']);?></td>
          <td><?php echo ($TblBook['TblBook']['BOOKS_COMPANY']);?></td>
          <td><?php echo ($TblBook['TblBook']['BOOKS_DAY']);?></td>
          <td><?php echo ($TblBook['TblBook']['BOOKS_CATEGORY']);?></td>
          <td><?php echo ($TblBook['TblBook']['BOOKS_GENRE']);?></td>
          <td><?php echo ($TblBook['TblBook']['BOOKS_TANKA']);?></td>
          <td><?php echo ($TblBook['TblBook']['BOOKS_PRICE']);?></td>
          <td><?php echo ($TblBook['TblBook']['BOOKS_SALE']);?></td>
          <td><?php echo h($TblBook['TblBook']['BOOKS_COMMENT']);?></td>
          <td><?php echo ($TblBook['TblBook']['BOOKS_WAREHOUSE']);?></td>
          <td><?php echo $this->Html->link('編集',array('action'=>'edit',$TblBook['TblBook']['id'])); ?></td>
          <td><?php echo $this->Html->link('削除',array('action'=>'delete',$TblBook['TblBook']['id'])); ?></td>
        </tr>
   <?php endforeach; ?>

     </table>

<h2>商品情報追加</h2>
<?php echo $this->Html->link('商品追加',array('action'=>'add')); ?>

<h2>商品情報検索</h2>
<?php echo $this->Html->link('商品検索',array('action'=>'search')); ?>




