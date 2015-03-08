<h1>購入確認いたしました　お買い上げありがとうございます。</h1>

配送方法：
<?php echo $haisou;?><br>
配送時間：
<?php echo $year."年".$month."月".$day."日".$hour."時".$min."分";?><br>
領収書：
<?php echo $paper;?><br>
<ul>
<li>ユーザーネーム：<?php echo $user['username'];?></li>	
<li>住所：<?php echo $user['addless'];?></li>
<li>メールアドレス<?php echo $user['email'];?></li>
</ul>
