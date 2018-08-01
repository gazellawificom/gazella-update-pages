# gazella-update-pages

Update Gazella Splash pages HTML + CSS remotely 

## Getting Started

If you have a Partner or Reseller account with GazellaWifi.com - These instructions will allow to be able to programmatically update a Location's page contents or styling. This comes in handy when you have multiple pages to update content for and you do not wish to update the content via the web browser one-by-one. Or this also can come in handy if you have dynamic content you'd like to change daily. 

### Server Requirements
Php 5.6 or newer

### Prerequisites

Gazella Partner or Reseller Account:
> Purchase here: https://gazellawifi.com/

Your Gazella API key "$apiKey":
> Get this here: https://sys.yoursystemurl.com/account-settings/

A Page's ID "$locationID":
> If you have users get the "id" from the browser's URL for example the last numbers of the url "1234" would be the "$locationID": http://sys.yoursystemurl.com/locations/edit/?id=1234

### Installing

Upload "gazella-update-single-page.php" into your project folder. Example: yourcustomsite.com/project/gazella-update-single-page.php.
Once the file is uploaded you may then edit "gazella-update-single-page.php" by replacing the variables with the 'XXXXXXX' values in the "// CONFIGURATION" 
section of the file with your own variables:

```
//======================================================================//
// CONFIGURATION
//======================================================================//  

/* This is the token that you can find under your Account Settings */
$apiKey = 'XXXXXXXXXXXXXXXXXXXXXXXXXXX';

/* Insert your reseller sys login url here */
$sysURL = "XXXXXXXXXXXXXX";

/* Insert the user ID that you'd like to authenticate as */ 
$userID = "XXX";
```

### Testing / Example

Now that your file will look something like the code below - you may test it by
simply visiting the file i.e. in your browser navigating to: yourcustomsite.com/project/gazella-update-single-page.php
If successful you will be prompted from our API of success or Error.
 
```
//======================================================================//
// CONFIGURATION
//======================================================================//  

/* This is the token that you can find under your account Settings */
$apiKey = '3948_93V4bbbbba747023450bd'; 

/* Insert your reseller sys login url here */
$sysURL = "sys.gazellawifi.com";

/* Insert the location ID / page ID that you'd like to update */ 
$locationID = "293";

---

/* Insert your HTML content here - please use proper tags, otherwise your page may end up looking funny :) */ 
$htmlContent = '<h1>Welcome!</h1>';  

/* Insert your css content here - please remeber to ensure this is valid CSS as the API does not validate the css scheme for you */ 
$cssContent = '.btn{ color: black; }'; 

 ```   

## Warnings !!!

You may not update the HTML content with any custom <script> or remote src="http://yoururl.com/picture.jpg" as it will not load to the client. This is the same for the custom CSS. If you wish to include a image you must convert / encode the image to Base64

## Versioning

We use Gazella API v2.0 for this example. See Documentation here: https://sys.gazellawifi.com/docs/api/v2/

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details