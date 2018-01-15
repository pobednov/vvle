<?
//echo "v";
/*
$data = array('name'=>'Виталий Победнов',
              'email'=>'p@mail.ru',
              'tel'=>'+79818922033',
              'povod'=>'ничего не болит',
              'galoba'=>'ничего не болит ничего не болит ничего не болит ничего не болит ничего не болит '
              );



$ch = curl_init();


//$data = http_build_query($data);

$options = array(CURLOPT_URL => 'http://h2o-profi.ru/api',
                 CURLOPT_POST => true,
                 CURLOPT_RETURNTRANSFER => 0,
                 CURLOPT_POSTFIELDS => $data,
                );

curl_setopt_array($ch, $options);

//$result = curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_exec($ch);
$result = curl_getinfo($ch);
curl_close($ch);

//print_r($result) ;
*/

    $host = "gate.iqsms.ru";
    $port = 80;
    $login = "z1511791341436";
    $password = "520317";
    $phone = "79818922030";
    $text = "тестовая смска самому себе с поделаниями счастья и любви";
    $sender = "emportal.ru";

function send($host, $port, $login, $password, $phone, $text, $sender = false, $wapurl = false )
{
	$fp = fsockopen($host, $port, $errno, $errstr);
	if (!$fp) {
		return "errno: $errno \nerrstr: $errstr\n";
	}
	fwrite($fp, "GET /send/" .
		"?phone=" . rawurlencode($phone) .
		"&text=" . rawurlencode($text) .
		($sender ? "&sender=" . rawurlencode($sender) : "") .
		($wapurl ? "&wapurl=" . rawurlencode($wapurl) : "") .
		"  HTTP/1.0\n");
	fwrite($fp, "Host: " . $host . "\r\n");
	if ($login != "") {
		fwrite($fp, "Authorization: Basic " . 
			base64_encode($login. ":" . $password) . "\n");
	}
	fwrite($fp, "\n");
	$response = "";
	while(!feof($fp)) {
		$response .= fread($fp, 1);
	}
	fclose($fp);
	list($other, $responseBody) = explode("\r\n\r\n", $response, 2);
	return $responseBody;
}

//echo send($host, $port, $login, $password, $phone, $text, $sender = false, $wapurl = false );
?>