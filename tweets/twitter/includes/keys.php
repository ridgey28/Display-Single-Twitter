<?php 
/********
If you previously used an older version of this script there are a couple of changes.  You no longer need to edit the display-tweets.php file.  Instead I have added all configurable data to this keys.php file	
**********/

/*PLEASE NOTE: Include retweets and exclude replies are filtered from the tweets after the json file is cached and may affect how many tweets are displayed.  If you currently receive alot of retweets and replies set max tweets to a higher amount.  Unfortunately this problem is limited to the Twitter API and not this script */


	$include_rts = true;// include retweets is set to true by default, if you don't want to include retweets set this to false
	$exclude_replies = true;//Replies are not displayed by default.  If you wish to change this set this to false
	
/*Add your keys here - make sure there are no spaces between your keys and the '' */	
	
	$consumer_key = '';//Add your Twitter Consumer Key here
	$consumer_secret = '';//Add your Twitter Consumer Secret here
	$user_token = '';//Add your Twitter User Token here
	$user_secret ='';//Add your Twitter User Secret here
	
?>