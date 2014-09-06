<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"> 
<head>

	<title>Twitter On My Website</title>
	<meta charset="utf-8" />
	<meta name="author" content="Tracy Ridge" />
	<link href="css/style.css" rel="stylesheet" /><!--CSS Reset-->
	<link href="css/dark.css" rel="stylesheet" /><!--Light Stylesheet, Choose from dark.css, light.css or blue.css-->  
</head>
<body>
<?php 
		include 'twitter/display-tweets.php';//Include the display-tweets file- Ensure that you have the correct path
		
		/*Display_tweets takes 4 arguments
			Replace twitter-id with your twitter username (required)
			Replace style with your preffered date format, default is '', no date will be displayed (optional)
			The 3rd argument is the mount of tweets you wish to fetch, if no number is specified the default is 10 (optional)
			The 4th argument is time in minutes you wish to fetch your tweets from the Twitter API, if no number is specified the default is 60 minutes	(optional)
			
			One example:
			display_tweets('twitter-id','time_since', 20, 60);
			Fetches 20 tweets at 60 minute intervals displaying the time since option
			
			
			For some examples please go to http://www.worldoweb.co.uk/2013/display-your-cached-tweets-using-php-and-oauth
		*/
		
		display_tweets('twitter-id');
	
?>
</body>
</html>