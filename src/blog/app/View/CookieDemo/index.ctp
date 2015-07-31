<!-- File: /app/View/Posts/index.ctp -->

<h1>Cookie Demo</h1>
<a href='/'>Home</a><br>
<?php echo $this->Html->link(
    'Set Cookie',
    array('controller' => 'cookie_demo', 'action' => 'set_cookie')
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

<h2>Cookie Values:</h2>
<dl>
    <!-- <dt>Cookie</dt>
    <dd><?php echo Debugger::exportVar($cookie, 5); ?></dd> -->
    <dt>Simple</dt>
    <dd><?php echo $time; ?></dd>
    <dt>Complex.Location</dt>
    <dd><?php echo $complex['location']; ?></dd>
    <dt>Complex.Updated</dt>
    <dd><?php echo $complex['updated']; ?></dd>
</dl>
