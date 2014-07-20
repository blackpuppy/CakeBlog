<!-- File: /app/View/Tags/edit.ctp -->

<h1>Edit Tag</h1>
<?php
    echo $this->Form->create('Tag');
    echo $this->Form->input('name');
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Save Tag');
?>