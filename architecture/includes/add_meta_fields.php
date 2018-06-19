<?php

function get_field_add_options($name, $title = '')
{
	global $post;
	$field = get_post_meta($post->ID, $name, true);
	$size = $name == 'quote' ? '40' : '25';
	echo '<div style="float: left; width: 22%; margin: 0; margin-right: 20px;">
		<label for="'.$name.'">'.$title.'</label>
	</div>
	<div style="float: left;">';
	echo '<input type="text" id="'.$name.'" name="'.$name.'" value="'.$field.'" size="'.$size.'" /><br />';
	echo '</div>
	<div style="clear: both;"></div><br />';
}

add_action('admin_init', 'my_meta_box_speakers'); 
function my_meta_box_speakers() { 

        add_meta_box(  
              'my_meta_box_speakers',
              'Additional Field',
              'show_my_metabox',
              array ( 'speakers', 'curators'),
              'normal',
              'high');
}


function show_my_metabox()
{

	global $post;

	echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';
	echo '<div style="display: inline-block; margin: 0 90px 0 10px;">'; 

	get_field_add_options(
	    'company',
	    'Сompany ');

	get_field_add_options(
	    'position',
	    'Position ');

  	get_field_add_options(
		'country',
		'Сountry ');

  	if ( get_current_screen()->post_type == 'curators' ){
  		get_field_add_options(
		'quote',
		'Quote ');
  	}

  	echo '</div>';
}


function save_my_meta($post_id)
{
    if (!isset($_POST['custom_meta_box_nonce']) || !wp_verify_nonce($_POST['custom_meta_box_nonce'], basename(__FILE__)))   
        return $post_id;  
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $post_id;  
    if ('speakers' == $_POST['post_type']) {  
        if (!current_user_can('edit_page', $post_id))  
            return $post_id;  
        } elseif (!current_user_can('edit_post', $post_id)) {  
            return $post_id;  
    }
    $meta_key = array
      ( 'company', 'position', 'country' );

    if ( get_current_screen()->post_type == 'curators' ){
    	array_push($meta_key, "quote");
    }
   
    for ( $i = 0; $i < count($meta_key); $i++ )
    { 
      if ( isset( $_POST[$meta_key[$i]] ) )
        update_post_meta($post_id, $meta_key[$i], $_POST[$meta_key[$i]]);
    }

} 

add_action('save_post', 'save_my_meta');




add_action('admin_init', 'my_meta_box_programs'); 
function my_meta_box_programs() { 

        add_meta_box(  
              'my_meta_box_programs',
              'Additional Field',
              'show_my_metabox_programs',
              'programs',
              'normal',
              'high');
}


function show_my_metabox_programs()
{

	global $post;

	echo '<input type="hidden" name="custom_meta_box_nonce_2" value="'.wp_create_nonce(basename(__FILE__)).'" />';
	echo '<div style="display: inline-block; margin: 0 90px 0 10px;">'; 
	$all_authors = unserialize( get_post_meta($post->ID, 'all_authors', true) );
	if ( $all_authors != '' ){
		foreach (  $all_authors as $author ) {
			$arr_keys = array_keys($author);
	?>
	<div class="group" style="" >
		<button class="delete-author">Delete Author</button>
		<input type="text" name="<?php echo $arr_keys[0] ?>" placeholder="time" value="<?php echo $author[$arr_keys[0]]; ?>">
		<input type="text" name="<?php echo $arr_keys[1] ?>" placeholder="Author" value="<?php echo $author[$arr_keys[1]]; ?>">
		<input type="text" name="<?php echo $arr_keys[2] ?>" placeholder="Title description" value="<?php echo $author[$arr_keys[2]]; ?>">
		<textarea rows="2" cols="40" name="<?php echo $arr_keys[3] ?>" placeholder="Description"><?php echo $author[$arr_keys[3]]; ?></textarea>
	</div>
<?php 
		}
	} ?>
	<button id="add-author">Add Author</button>

	<div class="group clonable" style="display: none">
		<button class="delete-author">Delete Author</button>
		<input type="text" name="time" placeholder="time">
		<input type="text" name="author" placeholder="Author">
		<input type="text" name="title_desc" placeholder="Title description">
		<textarea rows="2" cols="40" name="description" placeholder="Description"></textarea>
	</div>

<?php
	echo '<div style="clear: both;"></div><br />';
  	echo '</div>';
}


function save_my_meta_programs($post_id)
{
    if (!isset($_POST['custom_meta_box_nonce_2']) || !wp_verify_nonce($_POST['custom_meta_box_nonce_2'], basename(__FILE__)))   
        return $post_id;  
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $post_id;  
    if ('programs' == $_POST['post_type']) {  
        if (!current_user_can('edit_page', $post_id))  
            return $post_id;  
        } elseif (!current_user_can('edit_post', $post_id)) {  
            return $post_id;  
    }
   
	$arr = array();
	$arr2 = array();
	$arr3 = array();
	$num = 0;
	foreach ( $_POST as $value => $keys ){
		if (strpos($value, 'time_') !== false) {
			$arr[$num] = $value;
			$num++;
  		}
	}
	$num = 0;
	foreach ( $arr as $uniq ){
		$temp = explode( '_', $uniq );
		$arr2[$num] = $temp[1];
		$num++;
	}
	$num = 0;
	foreach ( $arr2 as $save_aut ){
		$arr3[$num]['time_'.$save_aut.''] = $_POST['time_'.$save_aut.''];
		$arr3[$num]['author_'.$save_aut.''] = $_POST['author_'.$save_aut.''];
		$arr3[$num]['title_desc_'.$save_aut.''] = $_POST['title_desc_'.$save_aut.''];
		$arr3[$num]['description_'.$save_aut.''] = $_POST['description_'.$save_aut.''];
		$num++;
	}
	update_post_meta($post_id, 'all_authors', serialize($arr3));
} 

add_action('save_post', 'save_my_meta_programs');

?>