 <?php
 $wfsUrl =
file_get_contents("https://geoportal.slemankab.go.id/geoserver/geonode/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=geonode%3Aa__3404_5KB_PT_Jaringan_Persampahan_Sleman_2022&maxFeatures=50&outputFormat=application%2Fjson");

 # Ubah URL pada file_get_contents sesuai alamat file pada geoserver
//  $wfsUrl =
// file_get_contents("http://localhost:8080/geoserver/SLEMAN_COVID19_MAP/ows?service=WFS&version=1.0.0&re
// quest=GetFeature&typeName=SLEMAN_COVID19_MAP%3AFAS_KESEHATAN_PT_SLEMAN_RSRUJUKAN_Proj&out
// putFormat=application%2Fjson");

 header('Content-type: application/json');
 echo ($wfsUrl);
 # Jika terdapat &maxFeatures=50 pada url wfs geojson, dihapus supaya jumlah feature tidak dibatasi
 ?>