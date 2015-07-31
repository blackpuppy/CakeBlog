<h2>Cookie Values:</h2>
<?php if (!empty($cookie)): ?>
<dl>
    <!-- <dt>Cookie</dt>
    <dd><?php //echo Debugger::exportVar($cookie, 5); ?></dd> -->
    <dt>Simple</dt>
    <dd><?php echo $time; ?></dd>
    <dt>Complex.Location</dt>
    <dd><?php echo $complex['location']; ?></dd>
    <dt>Complex.Updated</dt>
    <dd><?php echo $complex['updated']; ?></dd>
</dl>
<?php else: ?>
	No cookie is set!
<?php endif; ?>