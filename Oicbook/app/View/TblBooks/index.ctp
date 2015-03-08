<script>
	$(document).ready(function() {
	$("#owl").owlCarousel({
items : 6,//並べる個数

    itemsDesktop : [1199,4],//デスクトップ大
    itemsDesktopSmall : [980,3],//デスクトップ小
    itemsTablet: [768,2],//タブレット大
    itemsTabletSmall: true,//タブレット小
    itemsMobile : [479,1],//スマホ
    singleItem : false,//アイテムをひとつにする
    itemsScaleUp : false,//アイテムを自動的に大きくする
		//Pagination
    pagination : true, //ページネーション
    paginationNumbers: true, //ページネーションにナンバー付与
        //Autoplay
    autoPlay : true, //自動プレイ
    stopOnHover : true,//ホバーでストップさせるか否か
 
	});
});
</script>
<div id="headimg">
	<?php echo $this->Html->image('headbook.png',array('alt' =>'OICBook'));?>
</div>

<h2>あなたにオススメ</h2>
	<div id="owl" class="owl-carousel">
	<?php foreach ($book as $data): ;?>
	<ul>
	<li><?php echo $this->Html->link($this->Html->image($data['TblBook']['BOOKS_IMAGE']),
            		array('action'=>'view',$data['TblBook']['id']),
                    array('escape'=>false,'class'=>'thumbnail'));?></li>
		<li><?php echo ($data['TblBook']['BOOKS_NAME']); ?></li>
		<li><?php echo ($data['TblBook']['BOOKS_GENRE']); ?></li>
		<li>￥<?php echo ($data['TblBook']['BOOKS_PRICE']); ?>円</li>
	</ul>
	<?php endforeach ; ?> 
	</div>

<h2>総合ランキング</h2>
	<div id="owl" class="owl-carousel">
	<?php foreach ($book as $data): ;?>
	<ul>
	<li><?php echo $this->Html->link($this->Html->image($data['TblBook']['BOOKS_IMAGE']),
            		array('action'=>'view',$data['TblBook']['id']),
                    array('escape'=>false,'class'=>'thumbnail'));?></li>
		<li><?php echo ($data['TblBook']['BOOKS_NAME']); ?></li>
		<li><?php echo ($data['TblBook']['BOOKS_GENRE']); ?></li>
		<li>￥<?php echo ($data['TblBook']['BOOKS_PRICE']); ?>円</li>
	</ul>
	<?php endforeach ; ?> 
	</div>

<h2>男女別ランキング</h2>
	<div id="owl" class="owl-carousel">
	<?php foreach ($book as $data): ;?>
	<ul>
	<li><?php echo $this->Html->link($this->Html->image($data['TblBook']['BOOKS_IMAGE']),
            		array('action'=>'view',$data['TblBook']['id']),
                    array('escape'=>false,'class'=>'thumbnail'));?></li>
		<li><?php echo ($data['TblBook']['BOOKS_NAME']); ?></li>
		<li><?php echo ($data['TblBook']['BOOKS_GENRE']); ?></li>
		<li>￥<?php echo ($data['TblBook']['BOOKS_PRICE']); ?>円</li>
	</ul>
	<?php endforeach ; ?> 
	</div>
