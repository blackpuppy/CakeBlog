<?php echo $this->Html->link(
    'Set Cookie (AJAX)',
    '#',
    array('id' => 'set_cookie_ajax')
); ?>

<?php
	$this->Html->scriptStart(array('inline' => false, 'block' => 'scriptBottom'));
?>
jQuery(function() {
	$("#set_cookie_ajax").click(function(event){
		$.get('/cookie_demo/set_cookie_ajax');
		event.preventDefault();
	});
});
<?php $this->Html->scriptEnd(); ?>
