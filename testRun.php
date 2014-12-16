<?php
// Requested file
// Could also be e.g. 'currencies.json' or 'historical/2011-01-01.json'
$callbackUrl = "http://amplify.to/test6";
$temporaryCredentialsRequestUrl = "http://3.basera.com/oauth/initiate?oauth_callback=" . urlencode($callbackUrl);
$adminAuthorizationUrl = 'http://3.basera.com/oauth/authorize';
$accessTokenRequestUrl = 'http://3.basera.com/oauth/token';
$apiUrl = 'http://3.basera.com/api/rest';
$consumerKey = '123abc';
$consumerSecret = '123abcabc';

session_start();
if (!isset($_GET['oauth_token']) && isset($_SESSION['state']) && $_SESSION['state'] == 1) {
    $_SESSION['state'] = 0;
}
try {
    $authType = ($_SESSION['state'] == 2) ? OAUTH_AUTH_TYPE_AUTHORIZATION : OAUTH_AUTH_TYPE_URI;
    $oauthClient = new OAuth($consumerKey, $consumerSecret, OAUTH_SIG_METHOD_HMACSHA1, $authType);
    $oauthClient->enableDebug();

    if (!isset($_GET['oauth_token']) && !$_SESSION['state']) {
        $requestToken = $oauthClient->getRequestToken($temporaryCredentialsRequestUrl);
        $_SESSION['secret'] = $requestToken['oauth_token_secret'];
        $_SESSION['state'] = 1;
        header('Location: ' . $adminAuthorizationUrl . '?oauth_token=' . $requestToken['oauth_token']);
        exit;
    } else if ($_SESSION['state'] == 1) {
        $oauthClient->setToken($_GET['oauth_token'], $_SESSION['secret']);
        $accessToken = $oauthClient->getAccessToken($accessTokenRequestUrl);
        $_SESSION['state'] = 2;
        $_SESSION['token'] = $accessToken['oauth_token'];
        $_SESSION['secret'] = $accessToken['oauth_token_secret'];
        print_r($_SESSION);

        header('Location: ' . $callbackUrl);
        exit;
    } else {
        $oauthClient->setToken($_SESSION['token'], $_SESSION['secret']);

        $resourceUrl = "$apiUrl/products";
        $oauthClient->fetch($resourceUrl, array(), 'GET', array('Content-Type' => 'application/json'));
        $productsList = json_decode($oauthClient->getLastResponse());
        print_r($productsList);
    }
} catch (OAuthException $e) {
    print_r($e->getMessage());
    echo "<br/>";
    print_r($e->lastResponse);
}
die;
$api_url_v1 = "http://3.basera.com/api/soap/?wsdl=1";

$username = 'dharam';
$password = '123abc';

//$proxy = new SoapClient('http://3.basera.com/api/soap/?wsdl=1'); // TODO : change url

$proxy = new SoapClient('http://3.basera.com/api/soap/?wsdl=1', array('trace' => 1, 'connection_timeout' => 120));
try {



    $sessionId = $proxy->login('dharam', '123abc');
//    $sessionId = $proxy->call('login', array('dharam', '123abc'));// TODO : change login and pwd if necessary
    $result = $proxy->call($sessionId, 'customer.list', array(array()));
    print_r($result);
} catch (Exception $exc) {
    print_r($exc);

    var_dump($proxy->__getLastRequest());
    var_dump($proxy->__getLastResponse());
    echo $exc->getTraceAsString();
}
die;
phpinfo();
require_once '/usr/local/netbeans-8.0.1/php/phpstubs/phpruntime/soap.php';
$api_url_v1 = "http://3.basera.com/api/soap/?wsdl=1";
 
$username = 'dharam';
$password = '123abc';
 
$cli = new SoapClient($api_url_v1);
print_r($cli);



//retreive session id from login
$session_id = $cli->login($username, $password);
 
//call customer.list method
$result = $cli->call($session_id, 'customer.list', array(array()));
die;
$a='ved_1977@gmail.com';
$b=clean($a);
print "\$b = " . $b . "\n";


 function clean($string) {
        $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
        return preg_replace('/[^A-Za-z0-9@.\-\_]/', '', $string); // Removes special chars.
    }
    
die;
$file = 'latest.json';
$appId = 'a877d6996497483b91e97f20c849b84e';

// Open CURL session:
$ch = curl_init("http://openexchangerates.org/api/{$file}?app_id={$appId}");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Get the data:
$json = curl_exec($ch);
curl_close($ch);

// Decode JSON response:
 $exchangeRates = json_decode($json);
    foreach ($exchangeRates->rates as $key => $value) {
        print "\$key = " . $key . "\n";

        print "\$value = " . $value . "\n";
      
            
    }
// You can now access the rates inside the parsed object, like so:
printf(
    "1 %s in GBP: %s (as of %s)",
    $exchangeRates->base,
    $exchangeRates->rates->GBP,
 gmdate('H:i jS F, Y', $exchangeRates->timestamp)
);
// -> eg. "1 USD in GBP: 0.643749 (as of 11:01, 3rd January 2012)"
?>