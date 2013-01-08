<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<?php

	require_once 'idiorm.php';
	require_once 'db.php';
	?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title></title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet/less" href="less/style.less">
	<script src="js/libs/less-1.3.0.min.js"></script>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.2.min.js"><\/script>')</script>

<script src="js/libs/bootstrap/bootstrap.min.js"></script>


<script src="js/script.js"></script>
<script>
	var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
	<!-- Use SimpLESS (Win/Linux/Mac) or LESS.app (Mac) to compile your .less files
	to style.css, and replace the 2 lines above by this one:

	<link rel="stylesheet" href="less/style.css">
	 -->

	<script src="js/libs/modernizr-2.5.3-respond-1.1.0.min.js"></script>
</head>
<body>
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="index.php">Tweet Along</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="/">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
			  <li><a href="chat.php">Chat</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
<div class="span9 chatcontainer">
     <ul class="nav nav-tabs">
  <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
  <li><a href="#superbowl" data-toggle="tab">#SuperBowl</a></li>
  <li><a href="#american" data-toggle="tab">#AmIdol</a></li>
  <?php
	//$events = ORM::for_table('events')->find_many();
	//foreach($events as $event) {
		//echo "<li><a href=\"#".$event->hashtag."\" data-toggle=\"tab\">#".$event->hashtag."</a></li>";
	//}
  ?>
  <li><a href="#create" data-toggle="tab">+Create</a></li>
</ul>
<div class="tab-content">
   
<div id="home" class="tab-pane active">
   <h1> Tweet Along Home</h1>
  <table class="tweets table table-striped">
    <thead>
      <tr>
        <td>
       <h2>Featured Tweets</h2>
        </td>
      </tr>
    </thead>
    <tbody>
      <tr class="span10">
        <td>
          <div class="span2 id">
            <strong>Josh Fishman</strong>
            <a href="#">@joshfishman</a>
      <img src="https://twimg0-a.akamaihd.net/profile_images/74482841/Photo_3_reasonably_small.jpg" class="avatar span1">
    </div>
      <ul class="tweetbuttons unstyled span7">
        <li><a>Reply</a></li>
        <li><a>Retweet</a></li>
        <li><a>Favorite</a></li>
        <li class="timestamp">2m</li>
      </ul>
      <span class="tweet span7">This is the stuff that would be in a tweet. It can be up to 140 characters so I am using almost all of them and a <a href="#">link</a></span>
    </td>
  </tr>
  <tr class="span10">
        <td>
          <div class="span2 id">
            <strong>Josh Fishman</strong>
            <a href="#">@joshfishman</a>
      <img src="https://twimg0-a.akamaihd.net/profile_images/74482841/Photo_3_reasonably_small.jpg" class="avatar span1">
    </div>
      <ul class="tweetbuttons unstyled span7">
        <li><a>Reply</a></li>
        <li><a>Retweet</a></li>
        <li><a>Favorite</a></li>
        <li class="timestamp">2m</li>
      </ul>
      <span class="tweet span7">This is the stuff that would be in a tweet. It can be up to 140 characters so I am using almost all of them and a <a href="#">link</a></span>
    </td>
  </tr>
  <tr class="span10">
        <td>
          <div class="span2 id">
            <strong>Josh Fishman</strong>
            <a href="#">@joshfishman</a>
      <img src="https://twimg0-a.akamaihd.net/profile_images/74482841/Photo_3_reasonably_small.jpg" class="avatar span1">
    </div>
      <ul class="tweetbuttons unstyled span7">
        <li><a>Reply</a></li>
        <li><a>Retweet</a></li>
        <li><a>Favorite</a></li>
        <li class="timestamp">2m</li>
      </ul>
      <span class="tweet span7">This is the stuff that would be in a tweet. It can be up to 140 characters so I am using almost all of them and a <a href="#">link</a></span>
    </td>
  </tr>
</tbody>
</table>
  <table class="tweets table table-striped">
    <thead>
      <tr>
        <td>
       <h2>Tweets</h2>
        </td>
      </tr>
    </thead>
    <tbody>
      <tr class="span10">
        <td>
          <div class="span2 id">
            <strong>Josh Fishman</strong>
            <a href="#">@joshfishman</a>
      <img src="https://twimg0-a.akamaihd.net/profile_images/74482841/Photo_3_reasonably_small.jpg" class="avatar span1">
    </div>
      <ul class="tweetbuttons unstyled span7">
        <li><a>Reply</a></li>
        <li><a>Retweet</a></li>
        <li><a>Favorite</a></li>
        <li class="timestamp">2m</li>
      </ul>
      <span class="tweet span7">This is the stuff that would be in a tweet. It can be up to 140 characters so I am using almost all of them and a <a href="#">link</a></span>
    </td>
  </tr>
       <tr class="span10">
        <td>
          <div class="span2 id">
            <strong>Josh Fishman</strong>
            <a href="#">@joshfishman</a>
      <img src="https://twimg0-a.akamaihd.net/profile_images/74482841/Photo_3_reasonably_small.jpg" class="avatar span1">
    </div>
      <ul class="tweetbuttons unstyled span7">
        <li><a>Reply</a></li>
        <li><a>Retweet</a></li>
        <li><a>Favorite</a></li>
        <li class="timestamp">2m</li>
      </ul>
      <span class="tweet span7">This is the stuff that would be in a tweet. It can be up to 140 characters so I am using almost all of them and a <a href="#">link</a></span>
    </td>
  </tr>
   <tr class="span10">
        <td>
          <div class="span2 id">
            <strong>Josh Fishman</strong>
            <a href="#">@joshfishman</a>
      <img src="https://twimg0-a.akamaihd.net/profile_images/74482841/Photo_3_reasonably_small.jpg" class="avatar span1">
    </div>
      <ul class="tweetbuttons unstyled span7">
        <li><a>Reply</a></li>
        <li><a>Retweet</a></li>
        <li><a>Favorite</a></li>
        <li class="timestamp">2m</li>
      </ul>
      <span class="tweet span7">This is the stuff that would be in a tweet. It can be up to 140 characters so I am using almost all of them and a <a href="#">link</a></span>
    </td>
  </tr>
  <tr class="span10">
        <td>
          <div class="span2 id">
            <strong>Josh Fishman</strong>
            <a href="#">@joshfishman</a>
      <img src="https://twimg0-a.akamaihd.net/profile_images/74482841/Photo_3_reasonably_small.jpg" class="avatar span1">
    </div>
      <ul class="tweetbuttons unstyled span7">
        <li><a>Reply</a></li>
        <li><a>Retweet</a></li>
        <li><a>Favorite</a></li>
        <li class="timestamp">2m</li>
      </ul>
      <span class="tweet span7">This is the stuff that would be in a tweet. It can be up to 140 characters so I am using almost all of them and a <a href="#">link</a></span>
    </td>
  </tr>
  <tr class="span10">
        <td>
          <div class="span2 id">
            <strong>Josh Fishman</strong>
            <a href="#">@joshfishman</a>
      <img src="https://twimg0-a.akamaihd.net/profile_images/74482841/Photo_3_reasonably_small.jpg" class="avatar span1">
    </div>
      <ul class="tweetbuttons unstyled span7">
        <li><a>Reply</a></li>
        <li><a>Retweet</a></li>
        <li><a>Favorite</a></li>
        <li class="timestamp">2m</li>
      </ul>
      <span class="tweet span7">This is the stuff that would be in a tweet. It can be up to 140 characters so I am using almost all of them and a <a href="#">link</a></span>
    </td>
  </tr>
  <tr class="span10">
        <td>
          <div class="span2 id">
            <strong>Josh Fishman</strong>
            <a href="#">@joshfishman</a>
      <img src="https://twimg0-a.akamaihd.net/profile_images/74482841/Photo_3_reasonably_small.jpg" class="avatar span1">
    </div>
      <ul class="tweetbuttons unstyled span7">
        <li><a>Reply</a></li>
        <li><a>Retweet</a></li>
        <li><a>Favorite</a></li>
        <li class="timestamp">2m</li>
      </ul>
      <span class="tweet span7">This is the stuff that would be in a tweet. It can be up to 140 characters so I am using almost all of them and a <a href="#">link</a></span>
    </td>
  </tr>
</tbody>
  </table>
    <form class=" well form-horizontal">
    <input type="text" class ="span8"><button type="submit" class="btn">Tweet</button>
  </form>
</div><!--Home-->
<div class="tab-pane" id="superbowl">
<h1>#SuperBowl- Conversation about Super Bowl XVI </h1>
  <table class="tweets table table-striped">
    <thead>
      <tr>
        <td>
       <h2>Featured Tweets</h2>
        </td>
      </tr>
    </thead>
    <tbody>
      <tr class="span10">
        <td>
          <div class="span2 id">
            <strong>Josh Fishman</strong>
            <a href="#">@joshfishman</a>
      <img src="https://twimg0-a.akamaihd.net/profile_images/74482841/Photo_3_reasonably_small.jpg" class="avatar span1">
    </div>
      <ul class="tweetbuttons unstyled span7">
        <li><a>Reply</a></li>
        <li><a>Retweet</a></li>
        <li><a>Favorite</a></li>
        <li class="timestamp">2m</li>
      </ul>
      <span class="tweet span7">This is the stuff that would be in a tweet. It can be up to 140 characters so I am using almost all of them and a <a href="#">link</a></span>
    </td>
  </tr>
  <tr class="span10">
        <td>
          <div class="span2 id">
            <strong>Josh Fishman</strong>
            <a href="#">@joshfishman</a>
      <img src="https://twimg0-a.akamaihd.net/profile_images/74482841/Photo_3_reasonably_small.jpg" class="avatar span1">
    </div>
      <ul class="tweetbuttons unstyled span7">
        <li><a>Reply</a></li>
        <li><a>Retweet</a></li>
        <li><a>Favorite</a></li>
        <li class="timestamp">2m</li>
      </ul>
      <span class="tweet span7">This is the stuff that would be in a tweet. It can be up to 140 characters so I am using almost all of them and a <a href="#">link</a></span>
    </td>
  </tr>
  <tr class="span10">
        <td>
          <div class="span2 id">
            <strong>Josh Fishman</strong>
            <a href="#">@joshfishman</a>
      <img src="https://twimg0-a.akamaihd.net/profile_images/74482841/Photo_3_reasonably_small.jpg" class="avatar span1">
    </div>
      <ul class="tweetbuttons unstyled span7">
        <li><a>Reply</a></li>
        <li><a>Retweet</a></li>
        <li><a>Favorite</a></li>
        <li class="timestamp">2m</li>
      </ul>
      <span class="tweet span7">This is the stuff that would be in a tweet. It can be up to 140 characters so I am using almost all of them and a <a href="#">link</a></span>
    </td>
  </tr>
</tbody>
</table>
  <table class="tweets table table-striped">
    <thead>
      <tr>
        <td>
       <h2>Tweets</h2>
        </td>
      </tr>
    </thead>
    <tbody>
      <tr class="span10">
        <td>
          <div class="span2 id">
            <strong>Josh Fishman</strong>
            <a href="#">@joshfishman</a>
      <img src="https://twimg0-a.akamaihd.net/profile_images/74482841/Photo_3_reasonably_small.jpg" class="avatar span1">
    </div>
      <ul class="tweetbuttons unstyled span7">
        <li><a>Reply</a></li>
        <li><a>Retweet</a></li>
        <li><a>Favorite</a></li>
        <li class="timestamp">2m</li>
      </ul>
      <span class="tweet span7">This is the stuff that would be in a tweet. It can be up to 140 characters so I am using almost all of them and a <a href="#">link</a></span>
    </td>
  </tr>
       <tr class="span10">
        <td>
          <div class="span2 id">
            <strong>Josh Fishman</strong>
            <a href="#">@joshfishman</a>
      <img src="https://twimg0-a.akamaihd.net/profile_images/74482841/Photo_3_reasonably_small.jpg" class="avatar span1">
    </div>
      <ul class="tweetbuttons unstyled span7">
        <li><a>Reply</a></li>
        <li><a>Retweet</a></li>
        <li><a>Favorite</a></li>
        <li class="timestamp">2m</li>
      </ul>
      <span class="tweet span7">This is the stuff that would be in a tweet. It can be up to 140 characters so I am using almost all of them and a <a href="#">link</a></span>
    </td>
  </tr>
   <tr class="span10">
        <td>
          <div class="span2 id">
            <strong>Josh Fishman</strong>
            <a href="#">@joshfishman</a>
      <img src="https://twimg0-a.akamaihd.net/profile_images/74482841/Photo_3_reasonably_small.jpg" class="avatar span1">
    </div>
      <ul class="tweetbuttons unstyled span7">
        <li><a>Reply</a></li>
        <li><a>Retweet</a></li>
        <li><a>Favorite</a></li>
        <li class="timestamp">2m</li>
      </ul>
      <span class="tweet span7">This is the stuff that would be in a tweet. It can be up to 140 characters so I am using almost all of them and a <a href="#">link</a></span>
    </td>
  </tr>
  <tr class="span10">
        <td>
          <div class="span2 id">
            <strong>Josh Fishman</strong>
            <a href="#">@joshfishman</a>
      <img src="https://twimg0-a.akamaihd.net/profile_images/74482841/Photo_3_reasonably_small.jpg" class="avatar span1">
    </div>
      <ul class="tweetbuttons unstyled span7">
        <li><a>Reply</a></li>
        <li><a>Retweet</a></li>
        <li><a>Favorite</a></li>
        <li class="timestamp">2m</li>
      </ul>
      <span class="tweet span7">This is the stuff that would be in a tweet. It can be up to 140 characters so I am using almost all of them and a <a href="#">link</a></span>
    </td>
  </tr>
  <tr class="span10">
        <td>
          <div class="span2 id">
            <strong>Josh Fishman</strong>
            <a href="#">@joshfishman</a>
      <img src="https://twimg0-a.akamaihd.net/profile_images/74482841/Photo_3_reasonably_small.jpg" class="avatar span1">
    </div>
      <ul class="tweetbuttons unstyled span7">
        <li><a>Reply</a></li>
        <li><a>Retweet</a></li>
        <li><a>Favorite</a></li>
        <li class="timestamp">2m</li>
      </ul>
      <span class="tweet span7">This is the stuff that would be in a tweet. It can be up to 140 characters so I am using almost all of them and a <a href="#">link</a></span>
    </td>
  </tr>
  <tr class="span10">
        <td>
          <div class="span2 id">
            <strong>Josh Fishman</strong>
            <a href="#">@joshfishman</a>
      <img src="https://twimg0-a.akamaihd.net/profile_images/74482841/Photo_3_reasonably_small.jpg" class="avatar span1">
    </div>
      <ul class="tweetbuttons unstyled span7">
        <li><a>Reply</a></li>
        <li><a>Retweet</a></li>
        <li><a>Favorite</a></li>
        <li class="timestamp">2m</li>
      </ul>
      <span class="tweet span7">This is the stuff that would be in a tweet. It can be up to 140 characters so I am using almost all of them and a <a href="#">link</a></span>
    </td>
  </tr>
</tbody>
  </table>
    <form class=" well form-horizontal">
    <input type="text" class ="span8"><button type="submit" class="btn">Tweet</button>
  </form>

  </div><!--/superbowl-->
  <div class="tab-pane" id="american">
  </div><!--/american-->
  
  <?php
	$events = ORM::for_table('events')->find_many();
	foreach($events as $event) {
		echo "<div class=\"tab-pane\" id=\"".$event->hashtag."\">
  </div><!--/".$event->hashtag."-->";
	}
  ?>
   <div class="tab-pane" id="create">

    <?php 
      include "createevent.php";
    ?>
  </div><!--/create-->
  <form>
  
  
</div><!--/chatcontainer-->
<div class="span3" id="sidebar">

  </div>
     
      <hr>

      <footer>
        <p>&copy; Tweet Along 2012</p>
      </footer>
     </div>
   <!-- /container -->


</body>
</html>
