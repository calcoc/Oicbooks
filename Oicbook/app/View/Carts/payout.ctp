<?php echo $this->Form->create('TblOrder',array('id'=>'end-form','url'=>array('action'=>'index'))); ?>

<div id="haisouhouhou">
振込方法
<?php $options = array(
    'セブンイレブン銀行振込' => 'セブイレブン銀行振込',
    'ゆうちょ銀行振込' => 'ゆうちょ銀行振込',
    '代金引換' => '代金引換',
    );
echo $this->Form->select('ORDER_HOW', $options);
;?> *必ず選択してください

</div>
<div id="haisouproce">
配送料金
	<ul>
		<li>セブンイレブン銀行振込　：　一律３５０円（＊一部地域を除く）</li>
		<li>ゆうちょ銀行　　　　　　：　一律７００円（＊一部地域を除く）</li>
		<li>代金引換　　　　　　　　：　送料無料</li>
		<li>（一律料金は本州のみになります北海道または沖縄は＋５００円となります）</li>
	</ul>
</div>
<div id="haisoutime">
配達日時
<?php echo $this->Form->input('ORDER_TIME', array('type' => 'datetime', 'label' => '日時', 'dateFormat' => 'YMD', 'timeFormat' => '24', 'monthNames' => false, 'empty' => false, 'interval' => 15, 'minYear' => 2012));
 ?></div>
<li id="ryousyuusyo">
領収書
<?php echo $this->Form->input('ORDER_RECEIPT',array (
	'label' => '発行',
	'type' => 'checkbox',
	//'checked' => 'false',
	));?>
</li>
<ul>
<li>ユーザーネーム：<?php echo $user['username'];?>
<?php  echo $this->Form->hidden('user_id' ,array('value' => $user['id']));
?>
<li>住所：<?php echo $user['addless'];?></li>
<li>メールアドレス<?php echo $user['email'];?></li>
</ul>
<?php echo $this->Form->end('確認'); ?>