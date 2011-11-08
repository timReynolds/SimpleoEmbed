<?php include("simpleOembed.php"); ?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>SimpleOembed</title>
  <meta name="description" content="SimpleOembed">
  <meta name="author" content="Tim Reynolds">
</head>

<body>
  	<h1>SimpleOembed</h1>
  	 
	<h2>Overview</h2>
	<p>The <a href="http://oembed.com/">oEmbed</a> format is designed to allow an embedded representation of a URL on third party sites, specificly embededded content (such as photos or videos).</p> 
	<p>SimpleOmbed is a php wrapper deisgned to return oEmbed objects from provides by specifying the provide endpoint, content url and format.SimpleOmbed also supports option request peramatters.</p>
	<p>SimpleOmbed requires cURL to retirve data and support basic validation.</p>
	<h2>Usage</h2>
	<pre>
	$ombed = new SimpleOEmbed('http://www.flickr.com/services/oembed/','http://flickr.com/photos/luxagraf/137254255/','xml');

	$data = $ombed->getOEmbedObject();

	print_r($data);
	
	
	<?php
			$ombed = new SimpleOEmbed('http://www.flickr.com/services/oembed/','http://flickr.com/photos/luxagraf/137254255/','xml');

			$data = $ombed->getOEmbedObject();

			print_r($data);
	?>
	
	</pre>

	<h2>Examples</h2>

	<h3>Flickr</h3>
	<?php
	$ombedFlickr = new SimpleOEmbed('http://www.flickr.com/services/oembed/','http://flickr.com/photos/luxagraf/137254255/','xml', array('maxwidth'=>'200', 'maxheight'=>'200'));

	$flickrData = $ombed->getOEmbedObject();

	echo "<img src=" . $flickrData->url . " alt=" . $flickrData->title . " />";
	?>

	<h3>YouTube</h3>
	<?php
	$ombedYouYube = new SimpleOEmbed('http://www.youtube.com/oembed','http://www.youtube.com/watch?v=2f2cRWS4M1E','json');

	$youTubeData = $ombedYouYube->getOEmbedObject();

	echo $youTubeData->html;
	?>

	<?php
	$ombedSlideshare = new SimpleOEmbed('http://www.slideshare.net/api/oembed/2','http://www.slideshare.net/haraldf/business-quotes-for-2011','json', array('width'=>'900', 'height'=>'500'));

	$slideshareData = $ombedSlideshare->getOEmbedObject();

	echo $slideshareData->html;
	?>

</body>
</html>
