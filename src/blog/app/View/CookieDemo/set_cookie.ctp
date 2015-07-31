<!-- File: /app/View/Posts/index.ctp -->

<h1>Cookie Demo - write cookie</h1>
<a href='/'>Home</a><br>
<?php echo $this->Html->link(
    'back to Cookie Demo',
    array('controller' => 'cookie_demo', 'action' => 'index')
); ?>
<br>
<?php echo $this->element('set_cookie_ajax'); ?>
<br>
<?php echo $this->Html->link(
    'Read Cookie',
    array('controller' => 'cookie_demo', 'action' => 'read_cookie')
); ?>

<br>
<br>

<?php echo $this->element('show_cookie'); ?>
