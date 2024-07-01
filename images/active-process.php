<?php

        require_once 'GoogleSheets/vendor/autoload.php'; // Include the Google Sheets API library

     

session_start();

// configure the Google Client
    $client = new \Google_Client();
    $client->setApplicationName('Google Sheets API');
    $client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
    $client->setAccessType('offline');
    // credentials.json is the key file we downloaded while setting up our Google Sheets API
    $path = 'GoogleSheets/healthcare-explore.json';
    $client->setAuthConfig($path);
    
    // configure the Sheets Service
    $service = new \Google_Service_Sheets($client);
    
    // the spreadsheet id can be found in the url https://docs.google.com/spreadsheets/d/143xVs9lPopFSF4eJQWloDYAndMor/edit
    $spreadsheetId = '1sDQR5VxB015OVFIWgSki5iQfOEfcybW2ej8GvqLCjlQ';
    $spreadsheet = $service->spreadsheets->get($spreadsheetId);

 //include('config.php');
include_once 'config.php'; // parent

if (isset($_POST['submit'])) {
     
        $fname=$_POST['fname'];
       //$last_name=$_POST['lname'];
    $phone = $_POST['phone'];
    $state=$_POST['state'];
     $zipcode=$_POST['zipcode']; // new field
    // $callback_time=$_POST['callback']; // new field
    
      $consent=$_POST['consent'];
    $trusted = $_POST['xxTrustedFormCertUrl']; // xxTrustedFormCertUrl consent
   
    
    
    // // $sql = "INSERT INTO `c`(`phone`,    `trusted`) VALUES ( '$phone',  '$trusted')";
    $sql = "INSERT INTO `healthcare_post_data`(`fname`, `phone`, `state`, `zipcode`,   `trusted`) VALUES ( '$fname', '$phone',  '$state', '$zipcode', '$trusted')";

  
function test_input($data)
{
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
}

  
    if (mysqli_query($conn, $sql)) { //this is the main code for using curl command to send third party data.. this line code start with line 50 to 88...
    
      // Upload to SpreadSheet
    $newRow = [$fname,$phone,$trusted,$state,$zipcode];
    $rows = [$newRow]; // you can append several rows at once
    $valueRange = new \Google_Service_Sheets_ValueRange();
    $valueRange->setValues($rows);
    $range = 'Sheet1'; // the service will detect the last row of this sheet
    $options = ['valueInputOption' => 'USER_ENTERED'];
    $service->spreadsheets_values->append($spreadsheetId, $range, $valueRange, $options);
    //===================================================================================
    
        $datanew = array(
              );
              
              
              
              
              //===============================curl command ==========================

$api_url = 'https://retreaverdata.com/data_writing';


// Define the query parameters
$query_params = array(
    
    'key' => '01530b8e-2b76-4f9e-b5a7-24dc06877639',
    'caller_number' => $phone,
      'retreaver_trusted_form_url'=> $trusted,
     

   
);

// Build the full URL with query parameters
$query_string = http_build_query($query_params);
// $full_url = $api_url . '?' . $query_string;
$full_url = $api_url. '?' .$query_string;

// // Echo the response for testing
  //echo $full_url . "<br>". "<br>";

// // Exit the script for testing (remove this line in a production environment)
//exit;

// Initialize cURL session
$ch = curl_init($full_url);
// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return the response as a string
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Insecure, use only for testing

// Execute the cURL request
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo 'cURL error: ' . curl_error($ch);
}

// Close the cURL session
curl_close($ch);

// Process the response
if ($response !== false) {
    echo 'Response from the API: ' . $response;
} else {
    echo 'Failed to make the API request.';
}
            
            ///=====================================///
              
                 // New cURL request to the second API
        $mapped = array();
        $mapped['apiId'] = '9C1D453A0B3644F888FA6F480733FAA4';
        $mapped['apiPassword'] = '65eb1d1dd00e996895de6139f4f07';
        // $mapped['productId'] = 205;
        // $mapped['price'] = '0.01';
        $mapped['phoneNumber'] = $phone;
        // $mapped['email'] = 'john.n@yahoo.com'; // Use actual email from form if available
        // $mapped['firstName'] = $fname;
        // $mapped['jornayaLeadId'] = '0F0F0F0F-0F0F-0F0F-0F0F-0F0F0F0F0F0F'; // Replace with actual Jornaya Lead ID if available
        
         $mapped['jornayaLeadId'] = $trusted; // Replace with actual Jornaya Lead ID if available
        
        // $mapped['lastName'] = 'Smith'; // Use actual last name from form if available
        $mapped['state'] = $state;
        // $mapped['trustedFormURL'] = $trusted;
        
          $mapped['trustedFormURL'] = $trusted;
        
        $mapped['zip'] = $zipcode;
       
        // $mapped['ipAddress'] = $_SERVER['REMOTE_ADDR'];
        // $mapped['address'] = '123 Main Street'; // Use actual address from form if available
        // $mapped['clickid'] = 'XXX871CF-333E-4B97-A1A3-3C921A61EXXX'; // Replace with actual click ID if available
        // $mapped['tPar'] = 'tPar[affiliateId]=123&tPar[affiliateSubId]=123_444&tPar[transactionId]=123456&tPar[offerId]=offer-2234';
        // $mapped['source'] = 'http://website.xxx'; // Replace with actual source if available
        
        $server_url = "https://leads-inst303-client.phonexa.com/store/setdata";
        
        //=========================//
         $mapped_query_string = http_build_query($mapped);
        //echo "Debug: Second API full URL with query string: " . $server_url . "?" . $mapped_query_string . "<br>";
        // // Exit the script for testing (remove this line in a production environment)
//exit;
       // ========================//
        
        
        $ch = curl_init($server_url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($mapped));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Expect:"));
        curl_setopt($ch, CURLOPT_FAILONERROR, 1);
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 120);
        curl_setopt($ch, CURLINFO_HEADER_OUT, true);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        $Response = curl_exec($ch);
        
        if (curl_errno($ch)) {
            // Error handling
            // echo $full_url;
        } else {
            // Send success
        }
        curl_close($ch);
        
        //=====================================//  
            
            
     
         header("Location: https://healthcare-explore.com/thankyou");
        die();
        
    } else {
        echo "Error: " . $sql . "
    " . mysqli_error($conn);
    }
    mysqli_close($conn);
}





