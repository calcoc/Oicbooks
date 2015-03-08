<h2>データ更新</h2> 
<?php   

echo $this->Form->create('TblBook');
echo $this->Form->input('BOOKS_ISBN',array('label'=>'ISBN'));
echo $this->Form->input('BOOKS_ISSN',array('label'=>'ISSN'));
echo $this->Form->input('BOOKS_NAME',array('label'=>'商品タイトル'));
echo $this->Form->input('BOOKS_HIRA',array('label'=>'読み仮名（ひら）'));
echo $this->Form->input('BOOKS_KANA',array('label'=>'読み仮名（カナ）'));
echo $this->Form->input('BOOKS_CATEGORY',array('label'=>'カテゴリー'));
echo $this->Form->input('BOOKS_GENRE',array('label'=>'ジャンル'));
echo $this->Form->input('BOOKS_WRITER',array('label'=>'著者'));
echo $this->Form->input('BOOKS_COMPANY',array('label'=>'カンパニー'));
echo $this->Form->input('BOOKS_DAY',array('label'=>'発売日'));
echo $this->Form->input('BOOKS_TANKA',array('label'=>'単価'));
echo $this->Form->input('BOOKS_PRICE',array('label'=>'売値'));
echo $this->Form->input('BOOKS_SALE',array('label'=>'セール価格'));
echo $this->Form->input('BOOKS_IMAGE',array('label'=>'画像url'));
echo $this->Form->input('BOOKS_COMMENT',array('label'=>'コメント'));
echo $this->Form->input('BOOKS_WAREHOUSE',array('label'=>'在庫数'));
echo $this->Form->end('更新');
