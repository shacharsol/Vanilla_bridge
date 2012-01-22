<?php
$user = elgg_get_logged_in_user_entity();
$text="UniqueID=".$user->guid."\n"."Name=".$user->username."\n"."Email=".$user->email."\n";
//echo "UniqueID=".$user->guid."\r\n"."<br/>";
//echo "Name=".$user->username."\r\n"."<br/>";
//echo "Email=".$user->email."\r\n"."<br/>";
//echo "TransientKey=".$user->code."\r\n"."<br/>";
print($text);	
?>