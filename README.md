# simpleOembed 

* [Website](http://timothyreynolds.co.uk)
* Version: 1.0

## Description

The oEmbed format is designed to allow an embedded representation of a URL on third party sites, specificly embededded content (such as photos or videos).

SimpleOmbed is a php wrapper deisgned to return oEmbed objects from provides by specifying the provide endpoint, content url and format.SimpleOmbed also supports option request peramatters.

SimpleOmbed requires cURL to retirve data and support basic validation.

## Usage 

$ombed = new SimpleOEmbed('http://www.flickr.com/services/oembed/','http://flickr.com/photos/luxagraf/137254255/','xml');

	$data = $ombed->getOEmbedObject();

	print_r($data);
	
	SimpleXMLElement Object
(
    [version] => 1.0
    [type] => photo
    [author_url] => http://www.flickr.com/photos/luxagraf/
    [cache_age] => 3600
    [provider_name] => Flickr
    [provider_url] => http://www.flickr.com/
    [title] => Nepal-Sarangkot_12_16_05_31
    [author_name] => luxagraf
    [width] => 375
    [height] => 500
    [url] => http://farm1.static.flickr.com/50/137254255_008f50c357.jpg
)
