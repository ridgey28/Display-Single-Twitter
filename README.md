Display-Single-Twitter
======================

PHP Script to Display Single Twitter Feed on your Website

<h2>Prequisites</h2>

  <ul><li>You should already have a consumer key, consumer secret, access token and access token secret.
  If not please go to http://www.worldoweb.co.uk/2012/create-a-twitter-app-for-the-new-api for a little guide into creating the Twitter App</li>.
<li>PHP Server with CURL – I have tested it using PHP 5.3+</li>
<li>A little knowledge of PHP and CSS are beneficial but not essential.</li>
</ul>


Unzip and copy the folder tweets and all it’s contents to your server.
tmhOAuth.php is a PHP authentication script to allow you to make a secure call to the twitter API.
cacert.pem enables you to access the twitter API using SSL. You can also download a copy from the following: http://curl.haxx.se/ca/cacert.pem


<h2>Adding Keys and Tokens</h2>

Once you have copied the files to your server I suggest that you test the installation before deploying it on your live website. Open up keys.php in the includes folder. Add your consumer key, consumer secret, user token and user secret. You can also change the settings for displaying retweets and exclude replies if you wish. Please note that replies and retweets are filtered from the maximum tweets that are set. If you have lots of retweets and replies set max_tweets to a higher amount, unfortunately this is due to the Twitter API and not this script! Save and close.

<h2>Calling the function</h2>

Now open index.php in the tweets folder and add your twitter username to in place of twitter-id. Save and close.

```php
    //Include the display-tweets file- Ensure that you have the correct path
    include 'twitter/display-tweets.php';
    
    //Function to display your tweets
    display_tweets('twitter-id');
```

Further information and options can be found on my blog
http://www.worldoweb.co.uk/2013/display-your-cached-tweets-using-php-and-oauth
