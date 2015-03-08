<h2>データ更新</h2> 
<?php   

echo $this->Form->create('User');

echo $this->Form->input('username',array('label'=>'ユーザ名'));
echo $this->Form->input('password',array('label'=>'パスワード'));
echo $this->Form->input('addless',array('label'=>'住所'));
echo $this->Form->input('telephone',array('label'=>'電話番号'));
echo $this->Form->input('email',array('label'=>'メールアドレス'));
echo $this->Form->input('birthday',array('label'=>'生年月日'));
echo $this->Form->input('postalcode',array('label'=>'郵便番号'));
echo $this->Form->end('更新');
