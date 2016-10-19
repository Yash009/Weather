<?php
header('Content-Type: text/xml');
echo "<?xml version='1.0' encoding='UTF-8'?>";
$city=$_POST['Body'];
//$country="IN";
//Two digit country code
$url="http://api.openweathermap.org/data/2.5/weather?APPID=eb8d1e4d0ede56c4af30df4e8729e52e&q=".$city."&units=metric&lang=en";
$json=file_get_contents($url);
$data=json_decode($json,true);
$output = "Temperature: ".$output.$data['main']['temp']." C, ".$output.$data['weather'][0]['description'].", Humidity: ".$output.$data['main']['humidity'].", Wind Speed: ".$output.$data['wind']['speed']."kmph";

?>
<Response>
    <Sms>
         <?php echo join($output,',');?>
    </Sms>
</Response>
