<?php
	# Anti Spam Info List
	$spamwords = "/(sex|beastial|bestial|blowjob|clit|cock|cum|cunilingus|cunillingus|cunnilingus|cunt|ejaculate|fag|felatio|fellatio|fuck|fuk|fuks|gangbang|gangbanged|gangbangs|hotsex|jism|jiz|kock|kondum|kum|kunilingus|orgasim|orgasims|orgasm|orgasms|phonesex|phuk|phuq|porn|pussies|pussy|spunk|xxx|teens|teen|viagra|phentermine|tramadol|adipex|advai|alprazolam|ambien|ambian|amoxicillin|antivert|blackjack|backgammon|texas|holdem|poker|carisoprodol|ciara|ciprofloxacin|debt|dating|porn|content-type|bcc:|cc:|document.cookie|onclick|onload|alert|href|script|Indy|Blaiz|libwww-perl|Python|OutfoxBot|User-Agent|PycURL|AlphaServer)/i";
	
	$post_name = $_POST['name'];
	$post_email = $_POST['email'];
	$post_phone = $_POST['phone'];
	$post_message = $_POST['message'];
	
	$post = '/('.$post_name.'|'.$post_message.'|'.$post_email.'|'.$post_phone.')/i';
	
	# ANTI SPAM WORDS CONTROL
	#if(isset($_POST['contact'])) {
	#	include 'includes/mailform/antispam.php';
	#	
	#	if (preg_match($spamwords, $post)) {
	#		$spam = '<strong>Warning!</strong> Known <u>SpamBots</u> and/or <u>Malicious Language</u> are not allowed!';
	#	} else {
  #   include 'includes/mailform/process.php';
	#		$results = '<strong>Thank You!</strong> We received your email, and we\'ll get back to you as soon as possible.';
  # }	
	#}
	
?>