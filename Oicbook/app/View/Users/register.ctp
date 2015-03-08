<div class="shinki">
<h1 id="registertitle">新規登録</h1>
<?php echo $this->Form->create('User');?>
<ul id="touroku">
<li><?php echo $this->Form->input('username',array('label' => array('text' => 'お名前','class' => 'control-label'))) ;?></li>
<li><?php echo $this->Form->input('password',array('label' => array('text' => 'パスワード','class' => 'control-label' )));?></li>
<li><?php echo $this->Form->input('addless',array('label' => array('text' => '住所','class' => 'control-label' )));?></li>
<li><?php echo $this->Form->input('email',array('label' => array('text' => 'メールアドレス','class' => 'control-label' )));?></li>
<li><?php echo $this->Form->input('birthday',array('label' => array('text' => 'お誕生日','class' => 'control-label' )));?></li>
</ul>
<?php echo $this->Form->end('入力完了');?>
<?php echo $this->Html->link('ログイン', '/users/login');?>
</div>
