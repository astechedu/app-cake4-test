<div class="row">
<div class="col-md-2"></div>
<div class="col-md-6">

<h1 class="h1 m-2">Edit</h1>

<?php
	echo $this->Form->create($article, ['type' => 'post', 'action' => 'edit']);
?>

<?php echo $this->Form->control('title', ['type' => 'text','class' => 'form-control m-2','label' => false, 'placeholder' => 'Title']);
?>

<?php echo $this->Form->control('slug', ['type' => 'text','class' => 'form-control m-2','label' => false, 'placeholder' => 'Slug']);
?>

<?php echo $this->Form->control('user_id',['type' => 'text','class' => 'form-control m-2','label' => false, 'placeholder' => 'User Id']);
?>

<?php echo $this->Form->control('body', ['type' => 'text','class' => 'form-control m-2','label' => false, 'placeholder' => 'Body']);
?>

<?php echo $this->Form->button('Add', ['type' => 'submit', 'class' => 'form-control m-2 btn btn-info']); ?>

<?php echo $this->Form->end(); ?>
</div>
</div>