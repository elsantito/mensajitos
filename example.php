<?php



	include ( "NexmoMessage.php" );


	/**
	 * To send a text message.
	 *
	 */

	// Step 1: Declare new NexmoMessage.
	$nexmo_sms = new NexmoMessage('4907799d', '0330hiZxrqk8yNPQ');

	// Step 2: Use sendText( $to, $from, $message ) method to send a message. 
	$info = $nexmo_sms->sendText( '+12622584913', 'MyApp', 'Hello!' );

	// Step 3: Display an overview of the message
	echo $nexmo_sms->displayOverview($info);

	// Done!
