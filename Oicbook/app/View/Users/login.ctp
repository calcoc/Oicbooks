<h1 id="logintitle">ログイン</h1>


<div class="shinki">
<?php echo $this->Form->create('User'); ?>
<ul id="touroku">
  <li><?php echo $this->Form->input('username',array('label' => array('text' => 'お名前','class' => 'control-label')));?></li>
  <li><?php echo $this->Form->input('password',array('label' => array('text' => 'パスワード','class' => 'control-label')));?></li>
  <li><?php echo $this->Form->end('ログイン',array('label' => array('text' => 'ログイン','class' => 'control-label')));?>	</li>
</ul>
</div>
