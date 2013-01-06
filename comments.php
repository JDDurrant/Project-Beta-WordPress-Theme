<ol class="commentlist">
	<?php wp_list_comments(array(
		'edit_comment_link' => 'Edit',
	)); ?>
</ol>
<?php
	comment_form();
?>