<?php

add_action('admin_menu', function(){
	add_menu_page( 'Билеты', 'Билеты', 'manage_options', 'tickets-options', 'tickets_save_options', 'dashicons-welcome-write-blog', 6 ); 
});


function tickets_save_options(){ ?>
	<div class="wrap">
		<h2><?php echo get_admin_page_title() ?></h2>
		<?php $ticets_option = unserialize(get_option('save_price_tickets'));?>
		<table id='tabble_ticket'>
			<tr>
				<th>Type</th>
				<th>Early</th>
			    <th>Regular</th>
			    <th>Late</th>
		    </tr>
		    <tr>
		    	<td><h3>Junior</h3></td>
				<td><input class="" id="jun_ear" type="number" value="<?php echo $ticets_option['junior']['early'] ?>"></td>
				<td><input class="" id="jun_reg" type="number" value="<?php echo $ticets_option['junior']['regular'] ?>"></td>
				<td><input class="" id="jun_late" type="number" value="<?php echo $ticets_option['junior']['late'] ?>"></td>
         	</tr>
         	<tr>
		    	<td><h3>Senior</h3></td>
				<td><input class="" id="sen_ear" type="number" value="<?php echo $ticets_option['senior']['early'] ?>"></td>
				<td><input class="" id="sen_reg" type="number" value="<?php echo $ticets_option['senior']['regular'] ?>"></td>
				<td><input class="" id="sen_late" type="number" value="<?php echo $ticets_option['senior']['late'] ?>"></td>
         	</tr>
         	<tr>
		    	<td><h3>Executive</h3></td>
				<td><input class="" id="exec_ear" type="number" value="<?php echo $ticets_option['executive']['early'] ?>"></td>
				<td><input class="" id="exec_reg" type="number" value="<?php echo $ticets_option['executive']['regular'] ?>"></td>
				<td><input class="" id="exec_late" type="number" value="<?php echo $ticets_option['executive']['late'] ?>"></td>
         	</tr>
		 </table>
		 <label for="merchantAccount" class="merchant-login-label"><h4>MERCHANT LOGIN</h4></label><input style="width:350px" class="merchant-login-input" id="merchantAccount" type="text" value="<?php echo get_option('merchantAccount'); ?>">
		 <label for="merchantSecretKey"><h4>MERCHANT SECRET KEY</h4></label><input style="width:350px" id="merchantSecretKey" type="text" value="<?php echo get_option('merchantSecretKey'); ?>">
		 <p class="submit"><input type="submit" name="" id="save_price_tickets" class="button button-primary" value="Сохранить изменения"></p>
		 <div id="save_res"></div>
	</div>
	<?php
}

?>