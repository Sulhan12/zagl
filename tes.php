<?php
echo str_replace("\n", "\n", file_get_contents("text.txt"));
$url = readline();


function ambil($awal,$akhir,$page)
{
	$pisah = explode($awal, $page);
	$pisah = explode($akhir, $pisah['1']);
	return $pisah['0'];
}
$ckfile = "cookie.txt";
fopen($ckfile, "w");
$proxy = readline("Masukkan Proxy : ");
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_PROXY, $proxy);     // PROXY details with port
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
$headers = array();
$headers[] = "User-Agent: Mozilla/5.0 (Windows NT 6.1; rv:63.0) Gecko/20100101 Firefox/63.0";
$headers[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8";
$headers[] = "Accept-Language: id,en-US;q=0.7,en;q=0.3";
$headers[] = "Connection: keep-alive";
$headers[] = "Upgrade-Insecure-Requests: 1";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_COOKIEJAR, $ckfile);
curl_setopt($ch, CURLOPT_COOKIEFILE, $ckfile);
$data = curl_exec($ch);

// Post Data Yang Diambil pada Page 1
$method = ambil('<input type="hidden" name="_method" value="','" />',$data);
$csrf = ambil('<input type="hidden" name="_csrfToken" autocomplete="off" value="','" />',$data);
$token = ambil('<input type="hidden" name="_Token[fields]" autocomplete="off" value="','" />',$data);
$token1 = ambil('<input type="hidden" name="_Token[unlocked]" autocomplete="off" value="','" />',$data);
$add = ambil('<input type="hidden" name="ad_form_data" value="','" />',$data);
$da = "_method=$method&_csrfToken=$csrf&_Token[fields]=$token&_Token[unlocked]=$token1&ad_form_data=$add";
$post = urlencode($da);
$data = file_get_contents("file/asli.sh");
$data = str_replace("140.227.62.96:3128", $proxy, $data);
$data = str_replace("https://za.gl/4Iew", $url, $data);
$data = str_replace("_method=POST&_csrfToken=5db320307fae77d875047d87d1d773169fe37a40bda385f8e4faa0b3a3f96a1bb4d86f985cf3aeea40ef5b8ccb4bbab6b758a4cc8f20df88085ae637d2baa2de&ad_form_data=MjlkZmY3YmJkMmQ1MzFkODY0MTBiMGNhYjQ2MTA3YWM2Mzc5ODBiMjBhZDFmYjE3MDgwZDk0ZGU1YzJjNjU5ZIyzs5msLkkOV0U5h3hWC2BJhcKOypQoGTZuPlstMItiDlm6xwKorVgJFsgBQvReCLn2tMjd%2BjkVenJnVD9ksknFpphyzqpygjQHCEdl7Xb071uxqJREgO3uRMZi29QiEcnl4AjWTDSAVXGV7ayFFm%2BxDFXu6of%2FvoF0zEwYVGNXCdw%2B2kzo%2FHPLWafTyuVZG6YGCuO1pUdoKmKYQGdgl9n%2FEwxGcF2Q57NMNWV3jDbi&_Token%5Bfields%5D=dea29fe78b73809f37a2ac785ca72e8c3a6cad51%253Aad_form_data&_Token%5Bunlocked%5D=adcopy_challenge%257Cadcopy_response%257Ccoinhive-captcha-token%257Cg-recaptcha-response", $post, $data);

fwrite(fopen("t.sh", "w+"), $data);
//shell_exec("start sh t.sh");
?>