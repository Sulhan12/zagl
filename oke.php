<?php
// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://za.gl/links/go");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "_method=POST&_csrfToken=58b81df140f05a4dd45d797b31053d03b70aab188ffa8366843366a43033bcdc4d55c5a1efbab8498279432064db7e34fd8c71621edd3d6f1ca8fa07fa72c4c1&ad_form_data=ZWQ1MTZkZTgzODNmMGQ5ZjYxZDIzYmFjN2NhMDhkODQ2ZTlhMmY1ZWFkYTA0OGU1ZDRjMzE1OGY5YmYxNmY3MrszUvSIuyriaeivn0E6Wotlgapa3h0TOpLXq0VVP7LnPOP09ZHqYM13aHOUt1vPf%2BuVRjEQAVnTV4Ff%2Bk3kOgCBiI1WAqv3tFqiDUe4ma2JKSoi77g8pWb436ATxzQN8ncl0T2jvopW6GujxBBk8uY55aBuTnG7xyeC6CkzJWXByuVd%2F798qm7bMg%2BfW6tAhbhHrTRTcLG8IdbFrtqCNJAxnZ5UJT8%2Fdx1zEOVcdwQX&_Token%5Bfields%5D=119d62cae3ffd46e9afb268667ee96bb6d07daa2%253Aad_form_data&_Token%5Bunlocked%5D=adcopy_challenge%257Cadcopy_response%257Ccoinhive-captcha-token%257Cg-recaptcha-response");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = "User-Agent: Mozilla/5.0 (Windows NT 6.1; rv:63.0) Gecko/20100101 Firefox/63.0";
$headers[] = "Accept: application/json, text/javascript, */*; q=0.01";
$headers[] = "Accept-Language: id,en-US;q=0.7,en;q=0.3";
$headers[] = "Referer: https://za.gl/t0ffO";
$headers[] = "Content-Type: application/x-www-form-urlencoded; charset=UTF-8";
$headers[] = "X-Requested-With: XMLHttpRequest";
$headers[] = "Connection: keep-alive";
$headers[] = "Cookie: __cfduid=d3833e78e68cef76ad2cb0348375509b81542191873; AppSession=eatik0hos6a4ns4pql3ppjnv86; zagl_publisher=royhul255; scr=1.05; csrfToken=58b81df140f05a4dd45d797b31053d03b70aab188ffa8366843366a43033bcdc4d55c5a1efbab8498279432064db7e34fd8c71621edd3d6f1ca8fa07fa72c4c1; visitor=Q2FrZQ%3D%3D.Mjg5YTZkZDYyNDg5MDY4ZTZkZTg5MDYwMWE4MmU5NWIyMzE3OWQ5ODVlNzAzNTUwM2E0MDcwNzliYmM0MmE1Zq%2B8NJ080Xab3yQ3ITAdUeMDhaysE%2BnSVdhPhVyHFL29C9vn77%2BoeLe4SRa0OOqTZXMIgwhLeI0VqZS7DkuiykPrEWi3w18616TE2RrtV%2FnS;";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
else
{
	echo $result;
}
curl_close ($ch);

?>