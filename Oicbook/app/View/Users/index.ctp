<SCRIPT language="JavaScript">

// 5秒後に指定ページにジャンプする
mnt = 5.5; 
url = "http://localhost/Oicbook//tblbooks/index"; 
function jumpPage() {
  location.href = url;
}
setTimeout("jumpPage()",mnt*1000)

</SCRIPT><br>
<h1 id="welcome">ようこそ！<?php print(h($user['username'])); ?> さん<br>5秒後に移動します</h1><br />
