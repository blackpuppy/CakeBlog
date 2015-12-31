<h2><?php echo __d('cake_dev', 'Blog Tutorial'); ?></h2>
<ul>
	<li><?php echo $this->Html->link('Posts', array(
		'controller' => 'posts'
		,'action' => 'index'
	)); ?></li>
	<li><?php echo $this->Html->link('Tags', array(
		'controller' => 'tags'
		,'action' => 'index'
	)); ?></li>
	<li><?php echo $this->Html->link('Cookie Demo', array(
		'controller' => 'cookie_demo'
		,'action' => 'index'
	)); ?></li>
	<li><?php echo $this->Html->link('CacheHelper Demo (using Posts)', array(
		'controller' => 'posts'
		,'action' => 'index'
	)); ?></li>
</ul>
