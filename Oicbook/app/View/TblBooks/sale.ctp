	<?php foreach ($TblBook as $data): ;?>
	<ul id='sale_all'>
		<li><?php echo $this->Html->link($this->Html->image($data['TblBook']['BOOKS_IMAGE']),
            		array('action'=>'/view',$data['TblBook']['id']),
                    array('escape'=>false,'class'=>'smallimg'));?></li>

	<li><?php echo $this->Html->link($data['TblBook']['BOOKS_NAME'],array('action'=>'/view',$data['TblBook']['id']));?></li>
		<li><?php echo ($data['TblBook']['BOOKS_GENRE']); ?></li>
		<li><?php echo ($data['TblBook']['BOOKS_PRICE']); ?></li>
	</ul>
	<?php endforeach ; ?> 
	<?php  if(empty($TblBook)){echo "検索結果なし!";}?>