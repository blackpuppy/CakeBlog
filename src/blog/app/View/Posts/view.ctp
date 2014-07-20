<!-- File: /app/View/Posts/view.ctp -->

<h1><?php echo h($post['Post']['title']); ?></h1>

<p><small>Created: <?php echo $post['Post']['created']; ?></small></p>

<p><?php echo h($post['Post']['body']); ?></p>

<?php
	$tags = array_map(
		function($tag) { return $tag['name']; },
		$post['Tag']
	);
?>
<p>Tags: <?php echo h(implode(', ', $tags)); ?></p>
