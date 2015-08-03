

<?php

//try{
ini_set('display_errors', 1);

$output = shell_exec('ls -lart');
echo "<pre>$output</pre>";

$projectId = $_REQUEST['projectId'];
$exQuery = "/home/ubuntu/PredictionIO/bin/pio app new $projectId";
try {
    echo $exQuery;
    $output = shell_exec($exQuery);
    $output1 = explode('\n', $output, 2);
    print_r($output1);
    $output2 = $output1[1];
    print_r($output2);

    $output3 = str_replace('[INFO] [App$]', '', $output1[2]);
    print_r($output3);
    $output4 = explode('\n', $output3);
    print_r($output4);



    echo "<pre>$output</pre>";
} catch (Exception $ex) {
    print_r($ex);
}


$projectId = $_REQUEST['projectId'];
$exQuery = "pio app new $projectId";
echo "<pre>$exQuery</pre>";
$catArr = array();


        $catArr['bfs'] = array('n' => 'BFS', "p" => 0);
        $catArr['last_cat_name'] = array('n' => 'last_cat_name', "p" => 0);
        echo json_encode($catArr);
$str = '{\x0A\x0A     \x22products\x22: [\x0A        {\x0A            \x22productTitle\x22: \x22MacBook\x22,\x0A            \x22sku\x22: \x22Product 16\x22,\x0A            \x22price\x22: \x22500.0000\x22,\x0A            \x22productId\x22: \x2243\x22,\x0A            \x22currency\x22: \x22USD\x22,\x0A            \x22category\x22: {\x0A                \x2218\x22: {\x0A                    \x22n\x22: \x22Laptops &amp; Notebooks\x22,\x0A                    \x22p\x22: 0\x0A                },\x0A                \x2220\x22: {\x0A                    \x22n\x22: \x22Desktops\x22,\x0A                    \x22p\x22: 0\x0A                }\x0A            },\x0A            \x22specialPrice\x22: 500,\x0A            \x22status\x22: \x22enabled\x22,\x0A            \x22productPictureUrl\x22: \x22catalog\x5C/demo\x5C/macbook_1.jpg\x22,\x0A            \x22pageUrl\x22: \x22http:\x5C/\x5C/lopencart.com\x5C/index.php?route=checkout\x5C/checkout?route=product\x5C/product&product_id=43\x22,\x0A            \x22qty\x22: \x222\x22,\x0A            \x22totalProductPrice\x22: \x221000.0000\x22,\x0A            \x22discountPrice\x22: false,\x0A            \x22stockAvailability\x22: \x22Out Of Stock\x22,\x0A            \x22size\x22: false,\x0A            \x22color\x22: false,\x0A            \x22orderId\x22: \x2231\x22,\x0A            \x22orderStatus\x22: \x221\x22\x0A        },\x0A        {\x0A            \x22productTitle\x22: \x22iPhone\x22,\x0A            \x22sku\x22: \x22product 11\x22,\x0A            \x22price\x22: \x22101.0000\x22,\x0A            \x22productId\x22: \x2240\x22,\x0A            \x22currency\x22: \x22USD\x22,\x0A            \x22category\x22: {\x0A                \x2220\x22: {\x0A                    \x22n\x22: \x22Desktops\x22,\x0A                    \x22p\x22: 0\x0A                },\x0A                \x2224\x22: {\x0A                    \x22n\x22: \x22Phones &amp; PDAs\x22,\x0A                    \x22p\x22: 0\x0A                }\x0A            },\x0A            \x22specialPrice\x22: 101,\x0A            \x22status\x22: \x22enabled\x22,\x0A            \x22productPictureUrl\x22: \x22catalog\x5C/demo\x5C/iphone_1.jpg\x22,\x0A            \x22pageUrl\x22: \x22http:\x5C/\x5C/lopencart.com\x5C/index.php?route=checkout\x5C/checkout?route=product\x5C/product&product_id=40\x22,\x0A            \x22qty\x22: \x221\x22,\x0A            \x22totalProductPrice\x22: \x22101.0000\x22,\x0A            \x22discountPrice\x22: false,\x0A            \x22stockAvailability\x22: \x22Out Of Stock\x22,\x0A            \x22size\x22: false,\x0A            \x22color\x22: false,\x0A            \x22orderId\x22: \x2231\x22,\x0A            \x22orderStatus\x22: \x221\x22\x0A        }\x0A    ],\x0A  \x0A    \x22orderInfo\x22: {\x0A        \x22orderId\x22: \x2231\x22,\x0A        \x22subtotalPrice\x22: 1101,\x0A        \x22totalShippingPrice\x22: 5,\x0A        \x22totalTaxes\x22: 0,\x0A        \x22totalDiscount\x22: -10,\x0A        \x22totalPrice\x22: 1096,\x0A        \x22promocode\x22: 1111,\x0A        \x22financialStatus\x22: false,\x0A        \x22paymentType\x22: \x22Cash On Delivery\x22,\x0A        \x22currency\x22: \x22USD\x22\x0A    },\x0A\x0A    \x22email\x22: \x22hjvhjcsa@gmail.com\x22,\x0A\x0A    \x22action\x22: \x22purchased\x22,\x0A\x0A    \x22apiKey\x22: \x22l03jhasj3o84nlshj4w4la52r4g0yl686sy45u6hha\x22\x0A\x0A}';
//echo dec$str;
$result = json_decode($str, JSON_UNESCAPED_UNICODE);
//print_r($result);
die;


$atr = 'a:64:{i:0;a:6:{s:5:"index";i:0;s:4:"type";s:4:"text";s:2:"id";s:7:"5168157";s:4:"name";s:5:"email";s:8:"emailCol";b:1;s:11:"multiEnable";b:0;}i:1;a:6:{s:5:"index";i:1;s:4:"type";s:4:"text";s:2:"id";s:7:"5168245";s:4:"name";s:28:"df_prefferedtraveltime_multi";s:8:"emailCol";b:0;s:11:"multiEnable";b:1;}i:2;a:6:{s:5:"index";i:2;s:4:"type";s:4:"text";s:2:"id";s:7:"5168246";s:4:"name";s:23:"df_frequentsector_multi";s:8:"emailCol";b:0;s:11:"multiEnable";b:1;}i:3;a:6:{s:5:"index";i:3;s:4:"type";s:6:"number";s:2:"id";s:7:"5168247";s:4:"name";s:18:"df_sectorfrequency";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:4;a:6:{s:5:"index";i:4;s:4:"type";s:7:"xs:date";s:2:"id";s:7:"5168248";s:4:"name";s:18:"df_lastactive_date";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:5;a:6:{s:5:"index";i:5;s:4:"type";s:7:"xs:date";s:2:"id";s:7:"5168249";s:4:"name";s:16:"df_firsttxn_date";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:6;a:6:{s:5:"index";i:6;s:4:"type";s:6:"number";s:2:"id";s:7:"5168250";s:4:"name";s:17:"df_avgbookingdiff";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:7;a:6:{s:5:"index";i:7;s:4:"type";s:6:"number";s:2:"id";s:7:"5168251";s:4:"name";s:13:"df_numtickets";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:8;a:6:{s:5:"index";i:8;s:4:"type";s:6:"number";s:2:"id";s:7:"5168252";s:4:"name";s:11:"df_discount";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:9;a:6:{s:5:"index";i:9;s:4:"type";s:6:"number";s:2:"id";s:7:"5168253";s:4:"name";s:9:"df_amount";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:10;a:6:{s:5:"index";i:10;s:4:"type";s:4:"text";s:2:"id";s:7:"5168254";s:4:"name";s:28:"if_prefferedtraveltime_multi";s:8:"emailCol";b:0;s:11:"multiEnable";b:1;}i:11;a:6:{s:5:"index";i:11;s:4:"type";s:4:"text";s:2:"id";s:7:"5168255";s:4:"name";s:23:"if_frequentsector_multi";s:8:"emailCol";b:0;s:11:"multiEnable";b:1;}i:12;a:6:{s:5:"index";i:12;s:4:"type";s:6:"number";s:2:"id";s:7:"5168256";s:4:"name";s:18:"if_sectorfrequency";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:13;a:6:{s:5:"index";i:13;s:4:"type";s:7:"xs:date";s:2:"id";s:7:"5168257";s:4:"name";s:18:"if_lastactive_date";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:14;a:6:{s:5:"index";i:14;s:4:"type";s:7:"xs:date";s:2:"id";s:7:"5168258";s:4:"name";s:16:"if_firsttxn_date";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:15;a:6:{s:5:"index";i:15;s:4:"type";s:6:"number";s:2:"id";s:7:"5168259";s:4:"name";s:17:"if_avgbookingdiff";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:16;a:6:{s:5:"index";i:16;s:4:"type";s:6:"number";s:2:"id";s:7:"5168260";s:4:"name";s:13:"if_numtickets";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:17;a:6:{s:5:"index";i:17;s:4:"type";s:6:"number";s:2:"id";s:7:"5168261";s:4:"name";s:11:"if_discount";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:18;a:6:{s:5:"index";i:18;s:4:"type";s:6:"number";s:2:"id";s:7:"5168262";s:4:"name";s:9:"if_amount";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:19;a:6:{s:5:"index";i:19;s:4:"type";s:4:"text";s:2:"id";s:7:"5168263";s:4:"name";s:22:"h_frequentsector_multi";s:8:"emailCol";b:0;s:11:"multiEnable";b:1;}i:20;a:6:{s:5:"index";i:20;s:4:"type";s:6:"number";s:2:"id";s:7:"5168264";s:4:"name";s:17:"h_sectorfrequency";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:21;a:6:{s:5:"index";i:21;s:4:"type";s:7:"xs:date";s:2:"id";s:7:"5168265";s:4:"name";s:17:"h_lastactive_date";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:22;a:6:{s:5:"index";i:22;s:4:"type";s:7:"xs:date";s:2:"id";s:7:"5168266";s:4:"name";s:15:"h_firsttxn_date";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:23;a:6:{s:5:"index";i:23;s:4:"type";s:6:"number";s:2:"id";s:7:"5168267";s:4:"name";s:16:"h_avgbookingdiff";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:24;a:6:{s:5:"index";i:24;s:4:"type";s:6:"number";s:2:"id";s:7:"5168268";s:4:"name";s:12:"h_roomnights";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:25;a:6:{s:5:"index";i:25;s:4:"type";s:6:"number";s:2:"id";s:7:"5168269";s:4:"name";s:10:"h_discount";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:26;a:6:{s:5:"index";i:26;s:4:"type";s:6:"number";s:2:"id";s:7:"5168270";s:4:"name";s:8:"h_amount";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:27;a:6:{s:5:"index";i:27;s:4:"type";s:4:"text";s:2:"id";s:7:"5168271";s:4:"name";s:27:"b_prefferedtraveltime_multi";s:8:"emailCol";b:0;s:11:"multiEnable";b:1;}i:28;a:6:{s:5:"index";i:28;s:4:"type";s:4:"text";s:2:"id";s:7:"5168272";s:4:"name";s:22:"b_frequentsector_multi";s:8:"emailCol";b:0;s:11:"multiEnable";b:1;}i:29;a:6:{s:5:"index";i:29;s:4:"type";s:6:"number";s:2:"id";s:7:"5168273";s:4:"name";s:17:"b_sectorfrequency";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:30;a:6:{s:5:"index";i:30;s:4:"type";s:7:"xs:date";s:2:"id";s:7:"5168274";s:4:"name";s:17:"b_lastactive_date";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:31;a:6:{s:5:"index";i:31;s:4:"type";s:7:"xs:date";s:2:"id";s:7:"5168275";s:4:"name";s:15:"b_firsttxn_date";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:32;a:6:{s:5:"index";i:32;s:4:"type";s:6:"number";s:2:"id";s:7:"5168276";s:4:"name";s:16:"b_avgbookingdiff";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:33;a:6:{s:5:"index";i:33;s:4:"type";s:6:"number";s:2:"id";s:7:"5168277";s:4:"name";s:12:"b_numtickets";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:34;a:6:{s:5:"index";i:34;s:4:"type";s:6:"number";s:2:"id";s:7:"5168278";s:4:"name";s:10:"b_discount";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:35;a:6:{s:5:"index";i:35;s:4:"type";s:6:"number";s:2:"id";s:7:"5168279";s:4:"name";s:8:"b_amount";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:36;a:6:{s:5:"index";i:36;s:4:"type";s:4:"text";s:2:"id";s:7:"5168280";s:4:"name";s:18:"overall_couponuser";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:37;a:6:{s:5:"index";i:37;s:4:"type";s:6:"number";s:2:"id";s:7:"5168281";s:4:"name";s:27:"overall_couponusepercentage";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:38;a:6:{s:5:"index";i:38;s:4:"type";s:4:"text";s:2:"id";s:7:"5168282";s:4:"name";s:21:"overall_flavour_multi";s:8:"emailCol";b:0;s:11:"multiEnable";b:1;}i:39;a:6:{s:5:"index";i:39;s:4:"type";s:4:"text";s:2:"id";s:7:"5168283";s:4:"name";s:22:"overall_homecity_multi";s:8:"emailCol";b:0;s:11:"multiEnable";b:1;}i:40;a:6:{s:5:"index";i:40;s:4:"type";s:7:"xs:date";s:2:"id";s:7:"5168284";s:4:"name";s:23:"overall_lastactive_date";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:41;a:6:{s:5:"index";i:41;s:4:"type";s:4:"text";s:2:"id";s:7:"5168285";s:4:"name";s:22:"overall_lastactiveprod";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:42;a:6:{s:5:"index";i:42;s:4:"type";s:4:"text";s:2:"id";s:7:"5168286";s:4:"name";s:15:"overall_crmcall";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:43;a:6:{s:5:"index";i:43;s:4:"type";s:7:"xs:date";s:2:"id";s:7:"5168287";s:4:"name";s:22:"overall_lastemail_date";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:44;a:6:{s:5:"index";i:44;s:4:"type";s:6:"number";s:2:"id";s:7:"5168288";s:4:"name";s:16:"verall_crmemails";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:45;a:6:{s:5:"index";i:45;s:4:"type";s:7:"xs:date";s:2:"id";s:7:"5168289";s:4:"name";s:21:"overall_lastcall_date";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:46;a:6:{s:5:"index";i:46;s:4:"type";s:6:"number";s:2:"id";s:7:"5168290";s:4:"name";s:17:"overall_uniqscore";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:47;a:6:{s:5:"index";i:47;s:4:"type";s:4:"text";s:2:"id";s:7:"5168291";s:4:"name";s:3:"job";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:48;a:6:{s:5:"index";i:48;s:4:"type";s:4:"text";s:2:"id";s:7:"5168292";s:4:"name";s:10:"tags_multi";s:8:"emailCol";b:0;s:11:"multiEnable";b:1;}i:49;a:6:{s:5:"index";i:49;s:4:"type";s:4:"text";s:2:"id";s:7:"5168293";s:4:"name";s:9:"education";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:50;a:6:{s:5:"index";i:50;s:4:"type";s:7:"xs:date";s:2:"id";s:7:"5168294";s:4:"name";s:19:"pipllastupdate_date";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:51;a:6:{s:5:"index";i:51;s:4:"type";s:4:"text";s:2:"id";s:7:"5168295";s:4:"name";s:4:"name";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:52;a:6:{s:5:"index";i:52;s:4:"type";s:4:"text";s:2:"id";s:7:"5168296";s:4:"name";s:7:"address";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:53;a:6:{s:5:"index";i:53;s:4:"type";s:4:"text";s:2:"id";s:7:"5168297";s:4:"name";s:12:"ios_download";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:54;a:6:{s:5:"index";i:54;s:4:"type";s:4:"text";s:2:"id";s:7:"5168298";s:4:"name";s:16:"android_download";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:55;a:6:{s:5:"index";i:55;s:4:"type";s:4:"text";s:2:"id";s:7:"5168299";s:4:"name";s:14:"winph_download";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:56;a:6:{s:5:"index";i:56;s:4:"type";s:4:"text";s:2:"id";s:7:"5168300";s:4:"name";s:20:"overall_first_txn_id";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:57;a:6:{s:5:"index";i:57;s:4:"type";s:4:"text";s:2:"id";s:7:"5168301";s:4:"name";s:18:"h_last_transaction";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:58;a:6:{s:5:"index";i:58;s:4:"type";s:7:"xs:date";s:2:"id";s:7:"5168302";s:4:"name";s:25:"df_slast_transaction_date";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:59;a:6:{s:5:"index";i:59;s:4:"type";s:7:"xs:date";s:2:"id";s:7:"5168303";s:4:"name";s:25:"if_slast_transaction_date";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:60;a:6:{s:5:"index";i:60;s:4:"type";s:7:"xs:date";s:2:"id";s:7:"5168304";s:4:"name";s:24:"h_slast_transaction_date";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:61;a:6:{s:5:"index";i:61;s:4:"type";s:7:"xs:date";s:2:"id";s:7:"5168305";s:4:"name";s:24:"b_slast_transaction_date";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:62;a:6:{s:5:"index";i:62;s:4:"type";s:4:"text";s:2:"id";s:7:"5168306";s:4:"name";s:23:"overall_slastactiveprod";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}i:63;a:6:{s:5:"index";i:63;s:4:"type";s:7:"xs:date";s:2:"id";s:7:"5168307";s:4:"name";s:24:"overall_slastactive_date";s:8:"emailCol";b:0;s:11:"multiEnable";b:0;}}';
$arr = unserialize($atr);
unset($arr[58]);
print_r($arr);
die;

$timestamp = '20150722';

if (isValidTimeStamp($timestamp)) {
// If valid time stamp
    $validDate = date('Y-m-d h:i:s', $timestamp);
    echo 'dharam';
} else {

    if (( strtotime($timestamp)) === false) {
        echo "The string ($str) is bogus"; // throw error not valid date
    } else {
//if valid date
        echo "$str == " . date('l dS \o\f F Y h:i:s A', $timestamp);
        $validDate = date('Y-m-d h:i:s', strtotime($timestamp));
        echo 'ggggggggggggggggggggggggggggggggggggggggggggf';
        echo $validDate;
    }
}

function isValidTimeStamp($timestamp) {
    return ((string) (int) $timestamp === $timestamp) && ($timestamp <= PHP_INT_MAX) && ($timestamp >= ~PHP_INT_MAX);
}

die;

$category = array(1, 3, 4);
echo json_encode($category);



die;
$json = '{"category":{
	"circle name ":"assam",
	"context name":"view",
	"":"gfgf"
} }';
$categoryArr = _formateCategory(json_decode($json, true));

function _formateCategory($categoryArr) {
    $catArr = array();
    foreach ($categoryArr as $key => $value) {
        $parent = 0;
        if (!empty($key)) {
            $key = validateCategoryId($key);
            $parent = $key;
            $catArr[] = array_filter(array($key => array("n" => $key, "p" => 0)));
        }
        if (!empty($value))
            $catArr[] = array_filter(array(validateCategoryId($value) => array("n" => $value, "p" => $parent)));
    }
    return $catArr;
}

function validateCategoryId($key) {
    $key = trim($key);
    $key = strtolower($key);
    $key = str_replace(' ', '_', $key);
    return $key;
}

print_r($categoryArr);
die;



/*
  THE FOLLOWING CODE WILL PRINT:
  A database_id value of 200 maps to 5K
  A database_id value of 1 maps to 1
  A database_id value of 1987645 maps to 16LOD
 */
/**
 * Translates a number to a short alhanumeric version
 *
 * Translated any number up to 9007199254740992
 * to a shorter version in letters e.g.:
 * 9007199254740989 --> PpQXn7COf
 *
 * specifiying the second argument true, it will
 * translate back e.g.:
 * PpQXn7COf --> 9007199254740989
 *
 * this function is based on any2dec && dec2any by
 * fragmer[at]mail[dot]ru
 * see: http://nl3.php.net/manual/en/function.base-convert.php#52450
 *
 * If you want the alphaID to be at least 3 letter long, use the
 * $pad_up = 3 argument
 *
 * In most cases this is better than totally random ID generators
 * because this can easily avoid duplicate ID's.
 * For example if you correlate the alpha ID to an auto incrementing ID
 * in your database, you're done.
 *
 * The reverse is done because it makes it slightly more cryptic,
 * but it also makes it easier to spread lots of IDs in different
 * directories on your filesystem. Example:
 * $part1 = substr($alpha_id,0,1);
 * $part2 = substr($alpha_id,1,1);
 * $part3 = substr($alpha_id,2,strlen($alpha_id));
 * $destindir = "/".$part1."/".$part2."/".$part3;
 * // by reversing, directories are more evenly spread out. The
 * // first 26 directories already occupy 26 main levels
 *
 * more info on limitation:
 * - http://blade.nagaokaut.ac.jp/cgi-bin/scat.rb/ruby/ruby-talk/165372
 *
 * if you really need this for bigger numbers you probably have to look
 * at things like: http://theserverpages.com/php/manual/en/ref.bc.php
 * or: http://theserverpages.com/php/manual/en/ref.gmp.php
 * but I haven't really dugg into this. If you have more info on those
 * matters feel free to leave a comment.
 *
 * The following code block can be utilized by PEAR's Testing_DocTest
 * <code>
 * // Input //
 * $number_in = 2188847690240;
 * $alpha_in  = "SpQXn7Cb";
 *
 * // Execute //
 * $alpha_out  = alphaID($number_in, false, 8);
 * $number_out = alphaID($alpha_in, true, 8);
 *
 * if ($number_in != $number_out) {
 *   echo "Conversion failure, ".$alpha_in." returns ".$number_out." instead of the ";
 *   echo "desired: ".$number_in."\n";
 * }
 * if ($alpha_in != $alpha_out) {
 *   echo "Conversion failure, ".$number_in." returns ".$alpha_out." instead of the ";
 *   echo "desired: ".$alpha_in."\n";
 * }
 *
 * // Show //
 * echo $number_out." => ".$alpha_out."\n";
 * echo $alpha_in." => ".$number_out."\n";
 * echo alphaID(238328, false)." => ".alphaID(alphaID(238328, false), true)."\n";
 *
 * // expects:
 * // 2188847690240 => SpQXn7Cb
 * // SpQXn7Cb => 2188847690240
 * // aaab => 238328
 *
 * </code>
 *
 * @author  Kevin van Zonneveld &lt;kevin@vanzonneveld.net>
 * @author  Simon Franz
 * @author  Deadfish
 * @author  SK83RJOSH
 * @copyright 2008 Kevin van Zonneveld (http://kevin.vanzonneveld.net)
 * @license   http://www.opensource.org/licenses/bsd-license.php New BSD Licence
 * @version   SVN: Release: $Id: alphaID.inc.php 344 2009-06-10 17:43:59Z kevin $
 * @link    http://kevin.vanzonneveld.net/
 *
 * @param mixed   $in   String or long input to translate
 * @param boolean $to_num  Reverses translation when true
 * @param mixed   $pad_up  Number or boolean padds the result up to a specified length
 * @param string  $pass_key Supplying a password makes it harder to calculate the original ID
 *
 * @return mixed string or long
 */
$number_in = 2188847690240;
$alpha_in = "bC7nXQpS";

// Execute //
$alpha_out = alphaID($number_in, false, 8);
print "\$alpha_out = " . $alpha_out . "\n";

$number_out = alphaID($alpha_in, true, 8);
print "\$number_out = " . $number_out . "\n";

function alphaID($in, $to_num = false, $pad_up = false, $pass_key = null) {
    $out = '';
    $index = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $base = strlen($index);

    if ($pass_key !== null) {
        // Although this function's purpose is to just make the
        // ID short - and not so much secure,
        // with this patch by Simon Franz (http://blog.snaky.org/)
        // you can optionally supply a password to make it harder
        // to calculate the corresponding numeric ID

        for ($n = 0; $n < strlen($index); $n++) {
            $i[] = substr($index, $n, 1);
        }

        $pass_hash = hash('sha256', $pass_key);
        $pass_hash = (strlen($pass_hash) < strlen($index) ? hash('sha512', $pass_key) : $pass_hash);

        for ($n = 0; $n < strlen($index); $n++) {
            $p[] = substr($pass_hash, $n, 1);
        }

        array_multisort($p, SORT_DESC, $i);
        $index = implode($i);
    }

    if ($to_num) {
        // Digital number  <<--  alphabet letter code
        $len = strlen($in) - 1;

        for ($t = $len; $t >= 0; $t--) {
            $bcp = bcpow($base, $len - $t);
            $out = $out + strpos($index, substr($in, $t, 1)) * $bcp;
        }

        if (is_numeric($pad_up)) {
            $pad_up--;

            if ($pad_up > 0) {
                $out -= pow($base, $pad_up);
            }
        }
    } else {
        // Digital number  -->>  alphabet letter code
        if (is_numeric($pad_up)) {
            $pad_up--;

            if ($pad_up > 0) {
                $in += pow($base, $pad_up);
            }
        }

        for ($t = ($in != 0 ? floor(log($in, $base)) : 0); $t >= 0; $t--) {
            $bcp = bcpow($base, $t);
            $a = floor($in / $bcp) % $base;
            $out = $out . substr($index, $a, 1);
            $in = $in - ($a * $bcp);
        }
    }

    return $out;
}

echo base_convert(65476677676764500000000000000000000008888888888888888888, 10, 36);
die;
$database_id = 200;
$base36value = dec2string($database_id, 36);
echo "A database_id value of 200 maps to $base36value\n";
$database_id = 1;
$base36value = dec2string($database_id, 36);
echo "A database_id value of 1 maps to $base36value\n";
$database_id = 1987645;
$base36value = dec2string($database_id, 36);
echo "A database_id value of 1987645 maps to $base36value\n";

// HERE'S THE FUNCTION THAT DOES THE HEAVY LIFTING...
function dec2string($decimal, $base) {
// convert a decimal number into a string using $base
    //DebugBreak();
    global $error;
    $string = null;

    $base = (int) $base;
    if ($base < 2 | $base > 36 | $base == 10) {
        echo 'BASE must be in the range 2-9 or 11-36';
        exit;
    } // if
    // maximum character string is 36 characters
    $charset = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';

    // strip off excess characters (anything beyond $base)
    $charset = substr($charset, 0, $base);

    if (!ereg('(^[0-9]{1,50}$)', trim($decimal))) {
        $error['dec_input'] = 'Value must be a positive integer with < 50 digits';
        return false;
    } // if

    do {
        // get remainder after dividing by BASE
        $remainder = bcmod($decimal, $base);

        $char = substr($charset, $remainder, 1);   // get CHAR from array
        $string = "$char$string";                    // prepend to output
        //$decimal   = ($decimal - $remainder) / $base;
        $decimal = bcdiv(bcsub($decimal, $remainder), $base);
    } while ($decimal > 0);

    return $string;
}

die;
$personalizeSMS = "The text you want to filter www.betaout.com goes here. http://google.com";
_find_http($personalizeSMS);

function _find_http($personalizeSMS) {
    try {

        preg_match_all('#\bhttps?://[^\s()<>]+(?:\([\w\d]+\)|([^[:punct:]\s]|/))#', $personalizeSMS, $matchedHTTP);
//        $matchedHTTP = $matchedHTTP[0];
        $matchedHTTP = array_unique($matchedHTTP);
        print_r($matchedHTTP);
    } catch (Exception $ex) {

    }
}

function _find_http1($personalizeSMS) {
    try {

        preg_match_all('#\bhttps?://[^\s()<>]+(?:\([\w\d]+\)|([^[:punct:]\s]|/))#', $personalizeSMS, $matchedHTTP);
//        $matchedHTTP = $matchedHTTP[0];
        $matchedHTTP = array_unique($matchedHTTP);
        print_r($matchedHTTP);
    } catch (Exception $ex) {

    }
}

$result = TRUE ? '1' : false ? '2' : '3';
echo $result;







die;
$count = 0;
$notfound = 0;
$faballey = array(62901, 62904, 62905, 62907, 62908, 62909, 62910, 62911, 62913, 62920, 62921, 62922, 62926, 62927, 62928, 62929, 62931, 62932, 62933, 62935, 62936, 62937, 62940, 62941, 62942, 62944, 62945, 62947, 62948, 62949, 62950, 62953, 62954, 62956, 62957, 62958, 62968, 62969, 62970, 62971, 62974, 62975, 62976, 62977, 62978, 62979, 62980, 62981, 62982, 62983, 62984, 62985, 62986, 62987, 62988, 62989, 62991, 62992, 62993, 62994, 62995, 62996, 62997, 62998, 63002, 63003, 63004, 63005, 63006, 63008, 63009, 63011, 63012, 63013, 63014, 63016, 63019, 63022, 63023, 63024, 63025, 63026, 63027, 63028, 63029, 63030, 63032, 63033, 63034, 63035, 63037, 63038, 63039, 63042, 63043, 63044, 63045, 63046, 63047, 63048, 63050, 63052, 63054, 63055, 63056, 63057, 63058, 63059, 63060, 63061, 63062, 63063, 63064, 63065, 63066, 63069, 63074, 63075, 63076, 63077, 63079, 63080, 63081, 63082, 63083, 63084, 63086, 63087, 63088, 63091, 63093, 63094, 63095, 63096, 63097, 63098, 63099, 63100, 63101, 63102, 63104, 63105, 63107, 63108, 63109, 63110, 63111, 63112, 63113, 63114, 63115, 63117, 63118, 63119, 63120, 63121, 63122, 63123, 63124, 63126, 63127, 63128, 63129, 63130, 63131, 63132, 63133, 63136, 63137, 63140, 63141, 63142, 63144, 63145, 63146, 63148, 63150, 63151, 63153, 63154);
$beta = array(62923, 62926, 62931, 62929, 62933, 62937, 62940, 63002, 62939, 62944, 62948, 62949, 62951, 62969, 62953, 62957, 62985, 62971, 62970, 62977, 62974, 62975, 62980, 63099, 63013, 62981, 62982, 63006, 62989, 63032, 62994, 62995, 62997, 62998, 63000, 63037, 63005, 63004, 63029, 63008, 63009, 63012, 63011, 63016, 63019, 63023, 63026, 63035, 63044, 63045, 63046, 63047, 63048, 63049, 63081, 63057, 63061, 63063, 63062, 63066, 63074, 63069, 63075, 63079, 63080, 63082, 63083, 63084, 63087, 63092, 63091, 63095, 63097, 63100, 63102, 63105, 63107, 63108, 63109, 63111, 63110, 63112, 63114, 63113, 63115, 63117, 63118, 63119, 63124, 63121, 63123, 63122, 63126, 63130, 63127, 63128, 63129, 63132, 63133, 63136, 63137, 63140, 63146, 63141);
foreach ($faballey as $value) {

    if (in_array($value, $beta)) {
        $foundArr[] = $value;
        $count++;
    } else {
        print "\$value = " . $value . "\n";

        $NotfoundArr[] = $value;
        $notfound++;
    }
}
print "\$found= " . $count . "\n";
print "\$notfound = " . $notfound . "\n";

echo implode(',', $NotfoundArr);
die;

$sourceFilePath = 'http://d3l2031tfshpe7.cloudfront.net/images/Product/TOP01460A/2.jpg?v=2.0.0.1';
$contents = file_get_contents($sourceFilePath);
var_dump($contents);
die;
$client = new GearmanClient();
// add the default server
$client->addServer("localhost ", 4730);
// print the output of the job. first parameter is the job name, second one is the parameter
print $client->do("process_string", "Hello Gearman from Client!");

# set some arbitrary application data
$data['foo'] = 'bar';

# add two tasks
$task = $client->addTask("reverse", "foo", $data);
$task2 = $client->addTaskLow("reverse", "bar", NULL);

# run the tasks in parallel (assuming multiple workers)
if (!$client->runTasks()) {
    echo "ERROR " . $client->error() . "\n";
    exit;
}

echo "DONE\n";
?>