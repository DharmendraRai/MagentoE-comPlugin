

<?php
ini_set('display_errors', 1);
$to = 'raijiballia@gmail.com';
 $headers = "From:" . $from;
try {
    mail($to, 'anythingggggggg', 'fddgdgfdgfdg', $headers); // sends the e-mail
} catch (Exception $ex) {
    print_r($ex);
}
die;
print_r(" hey frsm he ys hey rsm hey rsm hey hey rmsa  i willber the ");

/* * L
  server{
  listen        80;
  server_name worldsmost.com  www.worldsmost.com;


  #charset koi8-r;

  #access_log  logs/host.access.log  main;

  location / {
  proxy_read_timeout 300;
  proxy_connect_timeout 300;
  root   /var/www/jal/public;

  index index.php index.html index.htm;

  if (!-e $request_filename) {
  rewrite ^(.+)$ /index.php?q=$1 last;

  }

  }


  location  /learn {
  index index.php index.html index.htm;
  root   /var/www/jal/public;
  try_files $uri $uri/ /learn/index.php;
  }m


  location  /blog {
  index index.php index.html index.htm;
  root   /var/www/jal/public;
  try_files $uri $uri/ /blog/index.php;
  }



  location /phpmyadmin {
  root /usr/share/;
  index index.php index.html index.htm;
  location ~ ^/phpmyadmin/(.+\.php)$ {
  try_files $uri =404;
  root /usr/share/;
  fastcgi_pass 127.0.0.1:9000;
  fastcgi_index index.php;
  fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
  include /etc/nginx/fastcgi_params;
  }
  location ~* ^/phpmyadmin/(.+\.(jpg|jpeg|gif|css|png|js|ico|html|xml|txt))$ {
  root /usr/share/;
  }
  }
  location /phpMyAdmin {
  rewrite ^/* /phpmyadmin last;
  }










  error_page  404              /404.html;
  location = /404.html {
  root   /usr/share/nginx/html;
  }

  # redirect server error pages to the static page /50x.html
  #
  #	error_page   500 502 503 504  /50x.html;
  #	location = /50x.html {
  #		root   /usr/share/nginx/html;
  #	}

  # proxy the PHP scripts to Apache listening on 127.0.0.1:80
  #
  #location ~ \.php$ {
  #    proxy_pass   http://127.0.0.1;
  #}

  # pass the PHP scripts to FastCGI server listening on 127.0.0.1:9000
  #
  location ~ \.php$ {
  root    /var/www/jal/public;
  fastcgi_pass   127.0.0.1:9000;
  fastcgi_connect_timeout 300;
  fastcgi_send_timeout 300;
  fastcgi_read_timeout 300;
  fastcgi_index  index.php;
  fastcgi_buffer_size 128k;
  fastcgi_buffers 4 256k;
  fastcgi_busy_buffers_size 256k;
  fastcgi_param  SCRIPT_FILENAME  $document_root$fastcgi_script_name;
  include        fastcgi_params;
  }

  #location  /  {
  #autoindex  on;
  #}
  # deny access to .htaccess files, if Apache's document root
  # concurs with nginx's one
  #
  #location ~ /\.ht {
  #    deny  all;
  #}

  }
 * */

$ca="\"params\":=\"apiKey\":\"71bj44ssre3hj8g0q8fh3h74d8n8mjg384fjh084ql\",\"timestamp\":1420783227,\"ott\":\"4V0ZqPCw1kovStDBGFSNjUWxnmiR0v9mXpTYgXbXWnhaV1SOOYZWXFqFQQ1vaZZox2AngLYO1MOTTbvr3fvvyo7BJ4UUODUVyNZEelNt6CCg1R8kNTLvxWEVYT5TGTHDB36r_MpzGn-bMFc9JIlG8w,,\",\"email\":\"\",\"action\":\"viewed\",\"products\":[{\"productId\":16,\"sku\":\"SPR-00014\",\"productTitle\":\"Spree Mug\",\"price\":\"13.99\",\"specialPrice\":\"13.99\",\"status\":\"enable\",\"stockAvailability\":10,\"pageURL\":\"/spree/products/45/product/spree_mug.jpeg?1420155390\",\"pictureURL\":null,\"currency\":\"USD\",\"category\":\"4,10\"}]}";
$dc="\params\":=\"apiKey\":\"71bj44ssre3hj8g0q8fh3h74d8n8mjg384fjh084ql\",\"timestamp\":1420783227,\"ott\":\"4V0ZqPCw1kovStDBGFSNjUWxnmiR0v9mXpTYgXbXWnhaV1SOOYZWXFqFQQ1vaZZox2AngLYO1MOTTbvr3fvvyo7BJ4UUODUVyNZEelNt6CCg1R8kNTLvxWEVYT5TGTHDB36r_MpzGn-bMFc9JIlG8w,,\",\"email\":\"\",\"action\":\"viewed\",\"products\":[{\"productId\":16,\"sku\":\"SPR-00014\",\"productTitle\":\"Spree Mug\",\"price\":\"13.99\",\"specialPrice\":\"13.99\",\"status\":\"enable\",\"stockAvailability\":10,\"pageURL\":\"/spree/products/45/product/spree_mug.jpeg?1420155390\",\"pictureURL\":null,\"currency\":\"USD\",\"category\":\"4,10\"}]}";
$bc = 'params:{"products":[{"productId":"Samsung2322","sku":"Samsung2322","productTitle":"Samsung2322","price":"12333","specialPrice:"12","status":"enable","stockAvailability":"1","brandName":"XXX","pageURL":"xxx","pictureURL":"","currency":"INR","category":"categories1,categories2,categories3","qty":"1"},{"productId":"Samsung2","sku":"Samsung2","productTitle":"Samsung2","price":"123","specialPrice":"23","status":"disable","stockAvailability":"1","brandName":"xxx","pageURL":"xxx2","pictureURL":"","currency":"INR","category":"categories1,categories2,categories3","qty":"1"}],"cartInfo":{"orderId":"12rdert","shoppingCartNo":"68778783ad298f1c80c3bafcddeea","subtotalPrice":4352,"totalShipping":0.06,"totalTaxes":0.06,"totalDiscount":0.06,"totalPrice":12,"promocode":"XXX","couponcode":"XXX","abandonedCheckoutUrl":"https:\/\/www.snowdevil.ca\/orders\/18\/6?recovered=1","financialStatus":"paid"},"email":"bharat@getamplify.com","action":"purchased","apiKey":"APIKEY"}';
$bc1=  json_decode($bc,true);
print_r($bc1);
$ca="{\"params\":{\"apiKey\":\"71bj44ssre3hj8g0q8fh3h74d8n8mjg384fjh084ql\",\"timestamp\":1420783227,\"ott\":\"4V0ZqPCw1kovStDBGFSNjUWxnmiR0v9mXpTYgXbXWnhaV1SOOYZWXFqFQQ1vaZZox2AngLYO1MOTTbvr3fvvyo7BJ4UUODUVyNZEelNt6CCg1R8kNTLvxWEVYT5TGTHDB36r_MpzGn-bMFc9JIlG8w,,\",\"email\":\"\",\"action\":\"viewed\",\"products\":[{\"productId\":16,\"sku\":\"SPR-00014\",\"productTitle\":\"Spree Mug\",\"price\":\"13.99\",\"specialPrice\":\"13.99\",\"status\":\"enable\",\"stockAvailability\":10,\"pageURL\":\"/spree/products/45/product/spree_mug.jpeg?1420155390\",\"pictureURL\":null,\"currency\":\"USD\",\"category\":\"4,10\"}]}}";
$bc1=  json_decode($ca,true);
print_r($bc1);
die;

$json = '{
   "params":{
      "apiKey":"71bj44ssre3hj8g0q8fh3h74d8n8mjg384fjh084ql",
      "timestamp":1420783227,
      "ott":"4V0ZqPCw1kovStDBGFSNjUWxnmiR0v9mXpTYgXbXWnhaV1SOOYZWXFqFQQ1vaZZox2AngLYO1MOTTbvr3fvvyo7BJ4UUODUVyNZEelNt6CCg1R8kNTLvxWEVYT5TGTHDB36r_MpzGnbMFc9JIlG8w,,",
      "email":"",
      "action":"viewed",
      "products":[
         {
            "productId":16,
            "sku":"SPR00014",
            "productTitle":"SpreeMug",
            "price":"13.99",
            "specialPrice":"13.99",
            "status":"enable",
            "stockAvailability":10,
            "pageURL":"/spree/products/45/product/spree_mug.jpeg?1420155390",
            "pictureURL":null,
            "currency":"USD",
            "category":"4, 10"
         }
      ]
   }
}';
$json2 = "{\"params\":{\"apiKey\":\"71bj44ssre3hj8g0q8fh3h74d8n8mjg384fjh084ql\",\"timestamp\":1420783227,\"ott\":\"4V0ZqPCw1kovStDBGFSNjUWxnmiR0v9mXpTYgXbXWnhaV1SOOYZWXFqFQQ1vaZ
Zox2AngLYO1MOTTbvr3fvvyo7BJ4UUODUVyNZEelNt6CCg1R8kNTLvxWEVYT5TGTHDB36r_MpzGn-bMFc9JIlG8w,,\",\"email\":\"\",\"action\":\"viewed\",\"products\":[{\"productId\":16,\"sku\":\"
SPR-00014\",\"productTitle\":\"Spree Mug\",\"price\":\"13.99\",\"specialPrice\":\"13.99\",\"status\":\"enable\",\"stockAvailability\":10,\"pageURL\":\"/spree/products/45/pr
oduct/spree_mug.jpeg?1420155390\",\"pictureURL\":null,\"currency\":\"USD\",\"category\":\"4,10\"}]}}";
print_r($json);
echo "\n\n";
$json3 = json_decode($json2);
print_r($json3);
$output = '{"params":{"apiKey":"71bj44ssre3hj8g0q8fh3h74d8n8mjg384fjh084ql","timestamp":1420783227,"ott":"4V0ZqPCw1kovStDBGFSNjUWxnmiR0v9mXpTYgXbXWnhaV1SOOYZWXFqFQQ1vaZ
Zox2AngLYO1MOTTbvr3fvvyo7BJ4UUODUVyNZEelNt6CCg1R8kNTLvxWEVYT5TGTHDB36r_MpzGn-bMFc9JIlG8w,,","email":"","action":"viewed","products":[{"productId":16,"sku":"
SPR-00014","productTitle":"Spree Mug","price":"13.99","specialPrice":"13.99","status":"enable","stockAvailability":10,"pageURL":"/spree/products/45/pr
oduct/spree_mug.jpeg?1420155390","pictureURL":null,"currency":"USD","category":"4,10"}]}}';
print_r($output);

die;
$lpd_compaire_value = gmdate('Y-m-d', time()) . " 00:00:00";
print "$lpd_compaire_value = " . $lpd_compaire_value . "n";

$lpd_compaire_value_lt = gmdate('Y-m-d', (time() - 180 * 86400)) . " 00:00:00";
print "$lpd_compaire_value_lt = " . $lpd_compaire_value_lt . "n";

