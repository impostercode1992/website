<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="Proven methods to make money online, including freelance work, affiliate marketing, digital products, and remote jobs." />
		<title>NORSATS SYSTEMS</title>
		<link rel="canonical" href="https://norsats.my" />
		<link href="images/favicon.png" rel="icon">
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<script src="https://accounts.google.com/gsi/client" async defer></script>
		<script>
		  function decodeJWT(token) {

			let base64Url = token.split(".")[1];
			let base64 = base64Url.replace(/-/g, "+").replace(/_/g, "/");
			let jsonPayload = decodeURIComponent(
			  atob(base64)
				.split("")
				.map(function (c) {
				  return "%" + ("00" + c.charCodeAt(0).toString(16)).slice(-2);
				})
				.join("")
			);
			return JSON.parse(jsonPayload);
		  }

		  function handleCredentialResponse(response) {

			console.log("Encoded JWT ID token: " + response.credential);

			const responsePayload = decodeJWT(response.credential);

			console.log("Decoded JWT ID token fields:");
			console.log("  Full Name: " + responsePayload.name);
			console.log("  Given Name: " + responsePayload.given_name);
			console.log("  Family Name: " + responsePayload.family_name);
			console.log("  Unique ID: " + responsePayload.sub);
			console.log("  Profile image URL: " + responsePayload.picture);
			console.log("  Email: " + responsePayload.email);
		  }
		</script>		
		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2432288525646006" crossorigin="anonymous"></script>
		<script async src="https://analytics.ahrefs.com/analytics.js" data-key="+3rJP1zXxuBkRX//0S1ixQ"></script>
		<script async custom-element="amp-auto-ads" src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js"></script>
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-G0T0SBE4JH"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'G-G0T0SBE4JH');
		</script>		
	</head>
  <body>
    <!-- g_id_onload contains Google Identity Services settings -->
    <div
      id="g_id_onload"
      data-auto_prompt="false"
      data-callback="handleCredentialResponse"
      data-client_id="53470530043-5gvhfeap2r8e2vjdjbjl82q22u75pq5k.apps.googleusercontent.com"
    ></div>
    <!-- g_id_signin places the button on a page and supports customization -->
    <div class="g_id_signin"></div>
	
<?php
// Define the path to your counter file
$counterFile = 'counter.txt';

// Check if the button was clicked
if (isset($_POST['increment_button'])) {
    // Read the current count
    $currentCount = (int)file_get_contents($counterFile);

    // Increment the count
    $newCount = $currentCount + 1;

    // Write the new count back to the file
    file_put_contents($counterFile, $newCount);
}

// Display the current count (optional)
$displayCount = (int)file_get_contents($counterFile);
echo "Current count: " . $displayCount;
?>
  </body>
</html>
