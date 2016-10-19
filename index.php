<?php
header('Content-Type: text/xml');
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
$city="Newyork";
$output;
//$country="IN"; //Two digit country code$url="http://api.openweathermap.org/data/2.5/weather?APPID=eb8d1e4d0ede56c4af30df4e8729e52e&q=".$city."&units=metric&lang=en";
$json=file_get_contents($url);
$data=json_decode($json,true);
//Get current Temperature in Celsius
var_dump($data);
$output = $output.$data['main']['temp']."<br>";
//Get weather condition
$output = $output.$data['weather'][0]['main']."<br>";
//Get cloud percentage
$output = $output.$data['clouds']['all']."<br>";
//Get wind speed
$output = $output.$data['wind']['speed']."<br>";
?>
<Response>
    <Sms>
         <?php echo $output ?>
    </Sms>
</Response>
