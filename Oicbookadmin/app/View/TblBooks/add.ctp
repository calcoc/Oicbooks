<!DOCTYPE html>
<html lang='ja'>
<head>
</head>
<body>
<h2>商品情報追加</h2>
<?php
echo $this->Form->create('TblBook');
echo $this->Form->input('BOOKS_NAME',array('label'=>'商品タイトル'));
echo $this->Form->input('BOOKS_ISBN',array('label'=>'ISBN'));
echo $this->Form->input('BOOKS_ISSN',array('label'=>'ISSN'));
echo $this->Form->input('BOOKS_HIRA',array('label'=>'読み仮名（ひらがな）'));
echo $this->Form->input('BOOKS_KANA',array('label'=>'読み仮名（カタカナ）'));
echo $this->Form->input('BOOKS_CATEGORY',array('label'=>'カテゴリー'));
echo $this->Form->input('BOOKS_GENRE',array('label'=>'ジャンル'));
echo $this->Form->input('BOOKS_WRITER',array('label'=>'著者'));
echo $this->Form->input('BOOKS_COMPANY',array('label'=>'出版社'));
echo $this->Form->input('BOOKS_DAY',array('label'=>'発売日'));
echo $this->Form->input('BOOKS_TANKA',array('label'=>'単価'));
echo $this->Form->input('BOOKS_PRICE',array('label'=>'販売価格'));
echo $this->Form->input('BOOKS_SALE',array('label'=>'セール価格'));
echo $this->Form->input('BOOKS_IMAGE',array('label'=>'表紙画像画像URL'));
echo $this->Form->input('BOOKS_COMMENT',array('label'=>'一言コメント'));
echo $this->Form->input('BOOKS_WAREHOUSE',array('label'=>'在庫数'));
echo $this->Form->end('追加');





?>
</body>
</html>
