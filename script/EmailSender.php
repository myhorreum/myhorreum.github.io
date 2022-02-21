<?php
/* 
   Email Sender
   Version 1.0
   March 19, 2012

   Will Bontrager Software, LLC
   https://www.willmaster.com/
   Copyright 2012 Will Bontrager Software, LLC

   This software is provided "AS IS," without 
   any warranty of any kind, without even any 
   implied warranty such as merchantability 
   or fitness for a particular purpose.
   Will Bontrager Software, LLC grants 
   you a royalty free license to use or 
   modify this software provided this 
   notice appears on all copies. 
*/
 //////////////////////////////
// Two places to customize. //

$AddressToEmailTo = "rnicolai@hawaii.edu";

$SubjectOfEmail = "Found it!!!";

 // End of customization //
//////////////////////////
$content = 'This email sent from script ' . $_SERVER['PHP_SELF'] . "\n\nData received:\n\n";
if( isset($_GET['IP']) ) { $_GET['IP '] = $_SERVER['REMOTE_ADDR']; }
else { $_GET['IP'] = $_SERVER['REMOTE_ADDR']; }
ksort($_GET);
foreach( $_GET as $k => $v ) { $content .= "\t$k = $v\n"; }
mail($AddressToEmailTo,$SubjectOfEmail,$content,"From: $AddressToEmailTo");
?>

