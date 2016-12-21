<?php

	if(have_comments()):
	comments_number('No Comments', 'One Comment', '% Comments');
?>
<ul class="blog-post-comments">
	
<?php 
	wp_list_comments('callback=custom_comments');
?>
</ul>
<?php

	endif;
	
	$comments_args = array(
			'label_submit'	=> 'Submit Comment',
			'title_reply'	=> 'Post a Comments',
			'comment_notes_after'	=> ''
		);

	//comment_form($comments_args);



?>

<?php

	 $comment_args = array( 'label_submit'=>'Post Comment',

	'fields' => apply_filters( 'comment_form_default_fields', array(

	'author' => '<div class="col-sm-6 pt-0 pb-0"><div class="form-group">' . 

	        '<input id="author" name="author" type="text" class="form-control" value="" size="30" required placeholder="Enter Name" /></div>',   

	   

	    ) ),

	    'comment_field' => '<div class="col-sm-6"><div class="form-group">' .
	                '<textarea id="comment" name="comment" class="form-control"  rows="7" aria-required="true" required placeholder="Enter Message"></textarea>' .
	                '</div></div>',

	    'comment_notes_after' => '',

	);


	comment_form($comment_args); 

?>