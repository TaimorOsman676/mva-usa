<?php
session_start();
include_once 'config.php'; // parent


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['submit'])) {
    $fname = test_input($_POST['fname']);
    $lname = test_input($_POST['lname']);
    $email = test_input($_POST['email']);
    $phone = test_input($_POST['phone']);
    $state = test_input($_POST['state']);
    $zipcode = test_input($_POST['zipcode']);
    $has_smartphone = isset($_POST['has_smartphone']) && $_POST['has_smartphone'] === 'yes' ? 'True' : 'False';
    $has_attorney = isset($_POST['has_attorney']) && $_POST['has_attorney'] === 'yes' ? 'True' : 'False';
    $hospitalized_or_treated = isset($_POST['hospitalized_or_treated']) && $_POST['hospitalized_or_treated'] === 'yes' ? 'True' : 'False';
    $person_at_fault = isset($_POST['person_at_fault']) && $_POST['person_at_fault'] === 'yes' ? 'True' : 'False';
    $police_report = isset($_POST['police_report']) && $_POST['police_report'] === 'yes' ? 'True' : 'False';
    $incident_date = isset($_POST['incident_date']);
    $trusted = test_input($_POST['xxTrustedFormCertUrl']);

    $sql = "INSERT INTO `mva-usa.com`(`fname`, `lname`,`email`,`has_smartphone`, `incident_date` , `has_attorney`, `hospitalized_or_treated` ,`person_at_fault`, `police_report` ,`phone`, `state`, `zipcode`, `trusted`) VALUES ( '$fname', '$lname','$email', '$has_smartphone' , '$incident_date', '$has_attorney', '$hospitalized_or_treated' , '$person_at_fault' ,'$police_report','$phone',  '$state', '$zipcode', '$trusted')";


    if (mysqli_query($conn, $sql)) {
        $retreaver_api_url = 'https://retreaverdata.com/data_writing';
        $retreaver_query_params = array(
            'key' => 'b3394228-14f5-4583-b3c4-ee3ccd5caea8',
            'caller_number' => $phone,
            'lead_token' => 'e6dffc40285d49a1a04a3c3fb8df980d',
            'first_name' => $fname,
            'last_name' => $lname,
            'zip' => $zipcode,
            'email' => $email,
            'source_url' => 'https://mva-usa.com',
            'has_smartphone' => $has_smartphone

        );
        $retreaver_query_string = http_build_query($retreaver_query_params);
        $retreaver_full_url = $retreaver_api_url . '?' . $retreaver_query_string;
        $retreaver_ch = curl_init($retreaver_full_url);
        curl_setopt($retreaver_ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($retreaver_ch, CURLOPT_SSL_VERIFYPEER, false);
        $retreaver_response = curl_exec($retreaver_ch);
        if (curl_errno($retreaver_ch)) {
            echo 'cURL error: ' . curl_error($retreaver_ch);
        }
        curl_close($retreaver_ch);
        if ($retreaver_response !== false) {
            echo 'Response from the Retreaver API: ' . $retreaver_response;
        } else {
            echo 'Failed to make the Retreaver API request.';
        }

        $idillo_api_url = 'https://idillo-inc.trackdrive.com/api/v1/leads';
        $idillo_query_params = array(
            'caller_id' => $phone,
            'first_name' => $fname,
            'has_attorney' => $has_attorney,
            'hospitalized_or_treated' => $hospitalized_or_treated,
            'incident_date' => $incident_date,
            'last_name' => $lname,
            'lead_token' => 'e6dffc40285d49a1a04a3c3fb8df980d',
            'person_at_fault' => $person_at_fault,
            'police_report' => $police_report,
            'source_url' => 'https://mva-usa.com',
            'zip' => $zipcode,
        );
        $idillo_query_string = http_build_query($idillo_query_params);
        $idillo_full_url = $idillo_api_url . '?' . $idillo_query_string;
        $idillo_ch = curl_init($idillo_full_url);
        curl_setopt($idillo_ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($idillo_ch, CURLOPT_SSL_VERIFYPEER, false);
        $idillo_response = curl_exec($idillo_ch);
        if (curl_errno($idillo_ch)) {
            echo 'cURL error: ' . curl_error($idillo_ch);
        }
        curl_close($idillo_ch);
        if ($idillo_response !== false) {
            echo 'Response from the Idillo API: ' . $idillo_response;
        } else {
            echo 'Failed to make the Idillo API request.';
        }

        header("Location: https://mva-usa.com/thankyou");
        die();
    } else {
        echo "Error: " . $sql . " " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
