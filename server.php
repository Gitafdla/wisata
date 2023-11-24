<?php 
// $wfsUrl =  file_get_contents("http://localhost:8080/geoserver/diy/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=diy%3Apersons_full&maxFeatures=50&outputFormat=application%2Fjson"); 

# Ubah URL pada file_get_contents sesuai alamat file pada geoserver  
$wfsUrl =  
//polygon
file_get_contents("http://localhost:8080/geoserver/responsi/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=responsi%3AADMINISTRASIKECAMATAN_AR_50K&outputFormat=application%2Fjson");  
header('Content-type: application/json'); 
echo ($wfsUrl); 