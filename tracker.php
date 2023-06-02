<?php
error_reporting(0);
$ip = $_POST['searchData'];

// Set the API endpoint URL
$api_endpoint = "http://ip-api.com/json/{$ip}";

$json = file_get_contents($api_endpoint);
$json_data = json_decode($json, true);

$status = $json_data['status'];
$country = $json_data['country'];
$countryCode = $json_data['countryCode'];
$region = $json_data['region'];
$regionName = $json_data['regionName'];
$city = $json_data['city'];
// $zip = $json_data['zip'];
$lat = $json_data['lat'];
$lon = $json_data['lon'];
$timezone = $json_data['timezone'];
$isp = $json_data['isp'];
$org = $json_data['org'];
$as = $json_data['as'];
$query = $json_data['query'];

// Create a table-like structure to display the extracted user location information
echo "<style>
        table {
          border-collapse: collapse;
          width: 100%;
        }
        th, td {
          padding: 10px;
          text-align: left;
          border-bottom: 1px solid #ddd;
        }
      
      </style>";
echo "<table>
        <tr id='th'>
          <th>Name</th>
          <th>Value</th>
        </tr>
        <tr>
          <td>IP</td>
          <td>$ip</td>
        </tr>
        <tr>
          <td>Status</td>
          <td>$status</td>
        </tr>
        <tr>
          <td>Country</td>
          <td>$country</td>
        </tr>
        <tr>
          <td>Country Code</td>
          <td>$countryCode</td>
        </tr>
        <tr>
          <td>Region</td>
          <td>$region</td>
        </tr>
        <tr>
          <td>Region Name</td>
          <td>$regionName</td>
        </tr>
        <tr>
          <td>City</td>
          <td>$city</td>
        </tr>
       
        <tr>
          <td>Latitude</td>
          <td>$lat</td>
        </tr>
        <tr>
          <td>Longitude</td>
          <td>$lon</td>
        </tr>
        <tr>
          <td>Timezone</td>
          <td>$timezone</td>
        </tr>
        <tr>
          <td>ISP</td>
          <td>$isp</td>
        </tr>
        <tr>
          <td>Organization</td>
          <td>$org</td>
        </tr>
        <tr>
          <td>AS</td>
          <td>$as</td>
        </tr>
        <tr>
          <td>Query</td>
          <td>$query</td>
        </tr>
      </table>";
?>
