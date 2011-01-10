<?php
header('Content-Type: image/svg+xml', true);
echo('<?xml version="1.0" standalone="no"?>');
?>

<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg">
	<defs>
		<linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%">
			<stop offset="0%" style="stop-color:rgb(200, 200, 200); stop-opacity:1"/>
			<stop offset="100%" style="stop-color:rgb(240, 240, 240); stop-opacity:1"/>
		</linearGradient>
	</defs>
	<rect x="0" y="0" width="100%" height="100%" style="fill:url(#gradient)"/>
</svg>