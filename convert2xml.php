<?php


$search['delivery_time']     = array('Rendelésre','1');
$replace['delivery_time']    = array('out_of_stock','in_stock');
str_replace($search['delivery_time'], $replace['delivery_time'], $csv);

$search['delivery_cost']     = array('ingyen');
$replace['delivery_cost']    = array('0');
str_replace($search['delivery_cost'], $replace['delivery_cost'], $csv);

/*
?>
<?xml version="1.0"?>
<rss xmlns:g="http://base.google.com/ns/1.0" version="2.0">
	<channel>
		<title>FOTOPLUS</title>
		<link>http://www.fotoplus.hu</link>
		<description>FOTOPLUS webáruház</description>
		
		<item>

			<g:id>740-VOA080AE</g:id>
			<g:title>Nikon Z9</g:title>
			<g:description>Professzionális tükör nélküli full-frame fényképezőgép</g:description>
			<g:link>https://fotoplus.hu/hu/termekeink/fenykepezogepek/cserelheto-objektives-tukor-nelkuli/nikon-z9-vaz</g:link>
			<g:image_link>https://fotoplus.hu/public/upload/fenykepezogepek/tukor_nelkuli/nikon/_large/740-z9body-07.jpg</g:image_link>
			<g:condition>new</g:condition>
			<g:availability>out_of_stock</g:availability>
			<g:price>2199900 HUF</g:price>
			<g:shipping>
				<g:country>HU</g:country>
				<g:price>0 HUF</g:price>
			</g:shipping>

			<g:brand>Nikon</g:brand>
			<g:mpn>VOA080AE</g:mpn>
			
		</item>
	</channel>
</rss>

<?php
*/

?>