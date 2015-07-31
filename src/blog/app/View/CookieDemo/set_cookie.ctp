<!-- File: /app/View/Posts/index.ctp -->

<h1>Cookie Demo - write cookie</h1>
<a href='/'>Home</a><br>
<?php echo $this->Html->link(
    'back to Cookie Demo',
    array('controller' => 'cookie_demo', 'action' => 'index')
); ?>
<br>
<?php echo $this->Html->link(
    'Read Cookie',
    array('controller' => 'cookie_demo', 'action' => 'read_cookie')
); ?>

<br>
<br>

<h2>Cookie Values Set:</h2>
<dl>
    <dt>Simple</dt>
    <dd><?php echo $time; ?></dd>
    <dt>complex.location</dt>
    <dd><?php echo $complex['location']; ?></dd>
    <dt>complex.updated</dt>
    <dd><?php echo $complex['updated']; ?></dd>
</dl>
