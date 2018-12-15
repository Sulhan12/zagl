<?php
$data = file_get_contents("file/asli.sh");
$data = str_replace("140.227.62.96:3128", $proxy, $data);
$data = str_replace("https://za.gl/4Iew", $link, $data);
$data = str_replace("_method=POST&_csrfToken=5db320307fae77d875047d87d1d773169fe37a40bda385f8e4faa0b3a3f96a1bb4d86f985cf3aeea40ef5b8ccb4bbab6b758a4cc8f20df88085ae637d2baa2de&ad_form_data=MjlkZmY3YmJkMmQ1MzFkODY0MTBiMGNhYjQ2MTA3YWM2Mzc5ODBiMjBhZDFmYjE3MDgwZDk0ZGU1YzJjNjU5ZIyzs5msLkkOV0U5h3hWC2BJhcKOypQoGTZuPlstMItiDlm6xwKorVgJFsgBQvReCLn2tMjd%2BjkVenJnVD9ksknFpphyzqpygjQHCEdl7Xb071uxqJREgO3uRMZi29QiEcnl4AjWTDSAVXGV7ayFFm%2BxDFXu6of%2FvoF0zEwYVGNXCdw%2B2kzo%2FHPLWafTyuVZG6YGCuO1pUdoKmKYQGdgl9n%2FEwxGcF2Q57NMNWV3jDbi&_Token%5Bfields%5D=dea29fe78b73809f37a2ac785ca72e8c3a6cad51%253Aad_form_data&_Token%5Bunlocked%5D=adcopy_challenge%257Cadcopy_response%257Ccoinhive-captcha-token%257Cg-recaptcha-response", $post, $data);

?>