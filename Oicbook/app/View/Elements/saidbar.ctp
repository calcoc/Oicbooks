<div id="contents">
<div id="sidebar">
  <ul>
      <li><?php  echo $this->Html->link('新刊情報', '/Tblbooks/sale');?></li><br>
      <li><?php  echo $this->Html->link('全商品', '/Tblbooks/sale');?></li>
<br><?php foreach($side as $sides): ;?>
    <li class="menu-item-has-children">
      <a> <?php  echo $this->Html->link($sides['TblBook']['BOOKS_CATEGORY'], '/Tblbooks/sale');?></a>
      <ul class="sub-menu">
        <li><?php  echo $this->Html->link('スポーツ', '/Tblbooks/sale');?></li>
      </ul>
    </li>

  <?php endforeach; ?>
  </ul>
</nav></div>
