<!DOCTYPE html>
<html>
  <head>
    <?php echo $this->Html->charset(); ?>
    <title><?php echo $title_for_layout; ?> / Welcome to OIC-Books</title>
    <?php echo $this->Html->css('main'); ?>

  </head>
  <body>
    <?php echo $this->Html->media('books.mp4',array('loop','autoplay')); ?>
  <div id="container">
    <div id="header">
      
      </div>
      <div id="header_logo">
        <h1>Welcome to OIC-Books...</h1>
      </div>
      <div id="content">
			<?php echo $this->Session->flash(); ?>
        <?php echo $this->fetch('content'); ?>
      </div>
    </div>
  </body>
</html>