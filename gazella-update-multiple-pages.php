<?php
/* 
 * Remotely update Gazella Wifi Splash pages HTML + CSS for Gazella API 2.0 API
 */

//======================================================================//
// CONFIGURATION
//======================================================================//  

/* This is the token that you can find under your Account Settings */
$apiKey = 'XXXXXXXXXXXXXXXXXXXXXXXXXXX'; // Example: 439_34034030b9393403403

/* Insert your reseller sys login url here */
$sysURL = "XXXXXXXXXXXXXX";   // Example: sys.yoursite.com

/* Insert the location ID / page ID that you'd like to update */ 
$locationID = "XXX";  // Example: 1234


//======================================================================//
// YOUR HTML CONTENT
//======================================================================//

/* Insert your HTML content here, please remember this will completely replace your current HTML content (No JS or Remote img src
allowed or will work */ 
$htmlContent = '<h1>Welcome!</h1>';  // Example: <h1>Welcome!</h1>
  
//======================================================================//
// YOUR CSS
//======================================================================//

/* Insert your HTML content here, please remember this will completely replace your current CSS content */ 
$cssContent = '.btn{ color: black; }';  // Example: .btn{ color: black; }
   

//======================================================================//
// PUT DETAILS
//======================================================================//
 
$url = 'http://'.$sysURL.'/api/v2/me/location/'.$locationID.'/html?key='.$apiKey;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_POSTFIELDS, $htmlContent);
$ch_data = curl_exec($ch);  
curl_close($ch);

if (!empty($ch_data)) {
    $json_data = json_decode($ch_data, true);
    print_r($json_data);
} else {
    echo 'Sorry, but there was a problem connecting to the API to update HTML.'; 
    echo '<br />';	
}
  
   
$url2 = 'http://'.$sysURL.'/api/v2/me/location/'.$locationID.'/css?key='.$apiKey;
$ch = curl_init($url2);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_POSTFIELDS, $cssContent);   
$ch_data = curl_exec($ch);  
curl_close($ch);

if (!empty($ch_data)) {
    $json_data = json_decode($ch_data, true);
    print_r($json_data);
} else {
    echo 'Sorry, but there was a problem connecting to the API to update CSS.';
    echo '<br />';	
} 
 
     
?>