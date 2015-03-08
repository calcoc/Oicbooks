<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */


?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		OIC BooK
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('matuzaki');
		echo $this->Html->css('cake.generic');
		echo $this->Html->css('owl.carousel');
		echo $this->Html->css('owl.theme');
		echo $this->fetch('css');
		echo $this->fetch('meta');
		echo $this->Html->script('jquery-1.9.1.min');
		echo $this->Html->script('owl.carousel.min'); 
	?>
	
</head>
<body>
	 <div id="wrapper">
		<div id="header">
		<?php 
		echo $this -> element('logo');
		echo $this -> element('navi');
		echo $this -> element('search'); 
		echo $this -> element('Cart'); 
		?>
		</div>
		<?php echo $this -> element('saidbar'); ?> 
		<div id="main">
			<?php echo $this->fetch('content'); ?>
		</div>
		</div>
		<div id = "footer">
			<footer>
			<ul>
				<li>運営情報</li>
				<li>利用規約</li>
				<li>個人情報</li>
				<li>サイトマップ</li>
				<li><a href="/Oicbookadmin/TblBooks" target="_blank">管理者画面</a></li>
			</ul>
			</footer>
			</div>
			</div>
</body>
</html>
