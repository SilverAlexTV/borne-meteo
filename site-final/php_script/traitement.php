<?php
$host = "host=ec2-54-246-92-116.eu-west-1.compute.amazonaws.com";
$port = "port=5432";
$dbname = "dbname=dn3b7jaiq1jt3";
$username = "user=ldpiwptjtzwnyd";
$password =  "password=0195228c061fd465fd6af6b9dc692173735da847c79dcbb396d364c3ee071964";

$db = pg_connect("$host $port $dbname $username $password");

$reponse = pg_query($db,'SELECT temperature FROM test;');
$resulat = pg_fetch_array($reponse);
print_r ($resulat);

echo '<script language="JavaScript">

  var nl = getNewLine()

  function getNewLine() {
    var agent = navigator.userAgent

    if (agent.indexOf("Win") >= 0)
      return "\r\n"
    else
      if (agent.indexOf("Mac") >= 0)
        return "\r"

    return "\r"

  }

  pagecode = \' { app_id: \'bornemete0\',
    dev_id: \'DEV_ID\',
    hardware_serial: \'XXXXXXXXXXXX\',
    port: 1,
    counter: 0,
    payload_raw: \'VALEUR_EN_BASE64\',
    metadata: { time: \'2018-01-24T09:59:25.070040542Z\' },
    downlink_url: \'https://integrations.thethingsnetwork.org/ttn-eu/api/v2/... 
  }\'

  document.write(pagecode);

  </script>';

echo '<script> function parseFloat(str) {
    var float = 0,
      sign, order, mantiss, exp,
      int = 0,
      multi = 1;
    if (/^0x/.exec(str)) {
      int = parseInt(str, 16);
    } else {
      for (var i = str.length - 1; i >= 0; i -= 1) {
        if (str.charCodeAt(i) > 255) {
          return false;
        }
        int += str.charCodeAt(i) * multi;
        multi *= 256;
      }
    }
    sign = (int >>> 31) ? -1 : 1;
    exp = (int >>> 23 & 0xff) - 127;
    mantissa = ((int & 0x7fffff) + 0x800000).toString(2);
    for (i = 0; i < mantissa.length; i += 1) {
      float += parseInt(mantissa[i]) ? Math.pow(2, exp) : 0;
      exp--;
    }
    return float * sign;
  }
  </script>';
?>