<?php
/* Template Name: email */
?>

<form id="newsletter-form" method="post" >
	<div class="newsletter">

		<p>NewsLetter</p>

		<!-- <input type="hidden" name="action" value="my_newsletter_submission"> -->

		<input type="text" name="email" placeholder="E-mail">

		<button type="submit">ENVIAR</button>

	</div>
</form>
<?php 
    if(isset($_POST['submit']))
    {
	$email = $_POST['email'];

	global $wpdb;

	$sql = $wpdb->insert("emailslist", array("email"=>$email));

	if($sql==true)
	{
	    echo "<script>alert('data inserted')</script>";
	}
	else
	{
	    echo "<script>alert('data not inserted')</script>";
	}

    }