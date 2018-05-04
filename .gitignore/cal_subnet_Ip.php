<?php
//-------FUNCTION------------------------//
function PrintSubnet($a){
	for($i = 0; $i<count($a); $i++){
		if($a[$i][0]==2)
			echo "<br>".$a[$i][3]."/30 thuộc dải ".$a[$i][1]." port ".$a[$i][2];
		else if($a[$i][0]==6)
			echo "<br>".$a[$i][3]."/29 thuộc dải ".$a[$i][1]." port ".$a[$i][2];
		else if($a[$i][0]==14)
			echo "<br>".$a[$i][3]."/28 thuộc dải ".$a[$i][1]." port ".$a[$i][2];
		else if($a[$i][0]==30)
			echo "<br>".$a[$i][3]."/27 thuộc dải ".$a[$i][1]." port ".$a[$i][2];
		else if($a[$i][0]==62)
			echo "<br>".$a[$i][3]."/26 thuộc dải ".$a[$i][1]." port ".$a[$i][2];
		else if($a[$i][0]==126)
			echo "<br>".$a[$i][3]."/25 thuộc dải ".$a[$i][1]." port ".$a[$i][2];
		else if($a[$i][0]==254)
			echo "<br>".$a[$i][3]."/24 thuộc dải ".$a[$i][1]." port ".$a[$i][2];
		else 
			echo "<br>".$a[$i][3]."/32 thuộc dải ".$a[$i][1]." port ".$a[$i][2];
	}
}
function PrintArr($a,$type){
	if($type==1)
		echo "<hr>". implode("<br>", $a);
	else {
		for($i = 0; $i<count($a); $i++){
			for($j = 0; $j<count($a[$i]); $j++){
				echo "<br> a[$i][$j]". $a[$i][$j];
			}
		}		
	}
}
function checkIpStartSubnet($ip){
	$a = explode("@", "1:32;30;29;28;27;26;25;24@2:32@3:32@4:32@5:32;30@6:32@7:32@8:32@9:32;30;29@10:32@11:32@12:32@13:32;30@14:32@15:32@16:32@17:32;30;29;28@18:32@19:32@20:32@21:32;30@22:32@23:32@24:32@25:32;30;29@26:32@27:32@28:32@29:32;30@30:32@31:32@32:32@33:32;30;29;28;27@34:32@35:32@36:32@37:32;30@38:32@39:32@40:32@41:32;30;29@42:32@43:32@44:32@45:32;30@46:32@47:32@48:32@49:32;30;29;28@50:32@51:32@52:32@53:32;30@54:32@55:32@56:32@57:32;30;29@58:32@59:32@60:32@61:32;30@62:32@63:32@64:32@65:32;30;29;28;27;26@66:32@67:32@68:32@69:32;30@70:32@71:32@72:32@73:32;30;29@74:32@75:32@76:32@77:32;30@78:32@79:32@80:32@81:32;30;29;28@82:32@83:32@84:32@85:32;30@86:32@87:32@88:32@89:32;30;29@90:32@91:32@92:32@93:32;30@94:32@95:32@96:32@97:32;30;29;28;27@98:32@99:32@100:32@101:32;30@102:32@103:32@104:32@105:32;30;29@106:32@107:32@108:32@109:32;30@110:32@111:32@112:32@113:32;30;29;28@114:32@115:32@116:32@117:32;30@118:32@119:32@120:32@121:32;30;29@122:32@123:32@124:32@125:32;30@126:32@127:32@128:32@129:32;30;29;28;27;26;25@130:32@131:32@132:32@133:32;30@134:32@135:32@136:32@137:32;30;29@138:32@139:32@140:32@141:32;30@142:32@143:32@144:32@145:32;30;29;28@146:32@147:32@148:32@149:32;30@150:32@151:32@152:32@153:32;30;29@154:32@155:32@156:32@157:32;30@158:32@159:32@160:32@161:32;30;29;28;27@162:32@163:32@164:32@165:32;30@166:32@167:32@168:32@169:32;30;29@170:32@171:32@172:32@173:32;30@174:32@175:32@176:32@177:32;30;29;28@178:32@179:32@180:32@181:32;30@182:32@183:32@184:32@185:32;30;29@186:32@187:32@188:32@189:32;30@190:32@191:32@192:32@193:32;30;29;28;27;26@194:32@195:32@196:32@197:32;30@198:32@199:32@200:32@201:32;30;29@202:32@203:32@204:32@205:32;30@206:32@207:32@208:32@209:32;30;29;28@210:32@211:32@212:32@213:32;30@214:32@215:32@216:32@217:32;30;29@218:32@219:32@220:32@221:32;30@222:32@223:32@224:32@225:32;30;29;28;27@226:32@227:32@228:32@229:32;30@230:32@231:32@232:32@233:32;30;29@234:32@235:32@236:32@237:32;30@238:32@239:32@240:32@241:32;30;29;28@242:32@243:32@244:32@245:32;30@246:32@247:32@248:32@249:32;30;29@250:32@251:32@252:32@253:32;30@254:32");
	$d = explode(".",$ip);
	for($i=0;$i<count($a);$i++){
		$b = explode(":",$a[$i]);
		if((int)$d[3]==(int)$b[0]){
			$c = $b[1];
			break;
		}		
	}
	return $c;
}
function implodeArray(&$a){	
	$t2 = 2;$t0 = 0;$t1 = 1;$i = 0;$j = 0;$s=3;$k = $s;
	
	$Prev = $a[$i][$t0];
	$c = explode("_",$Prev);
	$c[2] = $c[2] + 1;
	$Prev = implode("_", $c);
	$ipStart = $a[$i][$t2];
	$subnet = checkIpStartSubnet($ipStart);	
	$b[$j][$k] = $a[$i][$t2]; //IP
	$b[$j][0] = ($k-2); // CountIP
	$b[$j][1] = $c[0]; // Subnet Search
	$b[$j][2] = $c[1]; // port Search
	//echo "<br>0.ipStart=".$ipStart."; checkIpStartSubnet=".$subnet."; a[$i][$t1]=".($a[$i][$t1]-1)."; c=".$c[2];
	for($i = 1; $i<count($a); $i++){
		if($Prev != $a[$i][$t0]){
			$k = $s;$j = $j + 1;
			$b[$j][0] = ($k-2); // CountIP
			$b[$j][1] = $c[0]; // Subnet Search
			$b[$j][2] = $c[1]; // port Search
			$ipStart = $a[$i][$t2];
			$subnet = checkIpStartSubnet($ipStart);
			//echo "<br>1.ipStart=".$ipStart."; checkIpStartSubnet=".$subnet."; a[$i][$t1]=".($a[$i][$t1]-1)."; c=".$c[2];
		} else if($subnet == "32"){
			$k = $s;$j = $j + 1;
			$b[$j][0] = ($k-2); // CountIP
			$b[$j][1] = $c[0]; // Subnet Search
			$b[$j][2] = $c[1]; // port Search
			$ipStart = $a[$i][$t2];
		} else if($subnet == "32;30" && ($k-2) == 2){
			$k = $s;$j = $j + 1;
			$b[$j][0] = ($k-2); // CountIP
			$b[$j][1] = $c[0]; // Subnet Search
			$b[$j][2] = $c[1]; // port Search
			$ipStart = $a[$i][$t2];
			$subnet = checkIpStartSubnet($ipStart);
			//echo "<br>2.ipStart=".$ipStart."; checkIpStartSubnet=".$subnet."; a[$i][$t1]=".($a[$i][$t1]-1)."; c=".$c[2];
		} else if($subnet == "32;30;29" && ($k-2) == 6){
			$k = $s;$j = $j + 1;
			$b[$j][0] = ($k-2); // CountIP
			$b[$j][1] = $c[0]; // Subnet Search
			$b[$j][2] = $c[1]; // port Search
			$ipStart = $a[$i][$t2];
			$subnet = checkIpStartSubnet($ipStart);
			//echo "<br>3.ipStart=".$ipStart."; checkIpStartSubnet=".$subnet."; a[$i][$t1]=".($a[$i][$t1]-1)."; c=".$c[2];
		} else if($subnet == "32;30;29;28" && ($k-2) == 14){
			$k = $s;$j = $j + 1;
			$b[$j][0] = ($k-2); // CountIP
			$b[$j][1] = $c[0]; // Subnet Search
			$b[$j][2] = $c[1]; // port Search
			$ipStart = $a[$i][$t2];
			$subnet = checkIpStartSubnet($ipStart);
			//echo "<br>4.ipStart=".$ipStart."; checkIpStartSubnet=".$subnet."; a[$i][$t1]=".($a[$i][$t1]-1)."; c=".$c[2];
		} else if($subnet == "32;30;29;28;27" && ($k-2) == 30){
			$k = $s;$j = $j + 1;
			$b[$j][0] = ($k-2); // CountIP
			$b[$j][1] = $c[0]; // Subnet Search
			$b[$j][2] = $c[1]; // port Search
			$ipStart = $a[$i][$t2];
			//echo "<br>5.ipStart=".$ipStart."; checkIpStartSubnet=".$subnet."; a[$i][$t1]=".($a[$i][$t1]-1)."; c=".$c[2];
		} else if($subnet == "32;30;29;28;27;26" && ($k-2) == 62){
			$k = $s;$j = $j + 1;
			$b[$j][0] = ($k-2); // CountIP
			$b[$j][1] = $c[0]; // Subnet Search
			$b[$j][2] = $c[1]; // port Search
			$ipStart = $a[$i][$t2];
			$subnet = checkIpStartSubnet($ipStart);
			//echo "<br>6.ipStart=".$ipStart."; checkIpStartSubnet=".$subnet."; a[$i][$t1]=".($a[$i][$t1]-1)."; c=".$c[2];
		} else if($subnet == "32;30;29;28;27;26;25" && ($k-2) == 126){
			$k = $s;$j = $j + 1;
			$b[$j][0] = ($k-2); // CountIP
			$b[$j][1] = $c[0]; // Subnet Search
			$b[$j][2] = $c[1]; // port Search
			$ipStart = $a[$i][$t2];
			$subnet = checkIpStartSubnet($ipStart);
			//echo "<br>7.ipStart=".$ipStart."; checkIpStartSubnet=".$subnet."; a[$i][$t1]=".($a[$i][$t1]-1)."; c=".$c[2];
		} else if($subnet == "32;30;29;28;27;26;25;24" && ($k-2) == 254){
			$k = $s;$j = $j + 1;
			$b[$j][0] = ($k-2); // CountIP
			$b[$j][1] = $c[0]; // Subnet Search
			$b[$j][2] = $c[1]; // port Search
			$ipStart = $a[$i][$t2];
			$subnet = checkIpStartSubnet($ipStart);
			//echo "<br>8.ipStart=".$ipStart."; checkIpStartSubnet=".$subnet."; a[$i][$t1]=".($a[$i][$t1]-1)."; c=".$c[2];
		} else {
			$k = $k + 1;
			$b[$j][0] = ($k-2); // CountIP
			$b[$j][1] = $c[0]; // Subnet Search
			$b[$j][2] = $c[1]; // port Search
		}
		$b[$j][$k] = $a[$i][$t2];
		$Prev = $a[$i][$t0];
		$c = explode("_",$Prev);
		$c[2] = $c[2] + 1;
		$Prev = implode("_", $c);
		$subnet = checkIpStartSubnet($ipStart);
	}
	$a = $b;
}
function sortArray(&$a, $type, $k){
	for($i = 0; $i<count($a)-1; $i++){
		for($j = $i+1; $j<count($a); $j++){
			if($type = 1){
				$ai = $a[$i];
				$aj = $a[$j];
			} else {
				$ai = $a[$i][$k];
				$aj = $a[$j][$k];
			}
			if($ai>$aj){
				$c = $a[$i];
				$a[$i] = $a[$j];
				$a[$j] = $c;
			}			
		}
	}
}
function sortStr(&$str, $strPart){
	$a = explode($strPart, $str);
	sortArray($a, 1, 0);
	$str = implode($strPart,$a);
}
function v4CIDRtoMask($cidr) {
	$cidr = $cidr . "/32";
	$a = explode('/', $cidr);
	//echo "IP - " . $a[0] . "<br>";
    //echo "Range - " . $a[1] . "<br>";
    return array($a[0], long2ip(-1 << (32 - (int)$a[1])));
}
function ipv4Breakout ($cidr, &$ip_address_long, &$ip_first, &$ip_last) {
	//global $ip_address;
	//global $ip_nmask;
	$a = v4CIDRtoMask($cidr);
	$ip_address = $a[0];
	$ip_nmask = $a[1];
    //convert ip addresses to long form
    $ip_address_long = ip2long($ip_address);
    $ip_nmask_long = ip2long($ip_nmask);
    //caculate network address
    $ip_net = $ip_address_long & $ip_nmask_long;
    //caculate first usable address
    $ip_host_first = ((~$ip_nmask_long) & $ip_address_long);
    $ip_first = ($ip_address_long ^ $ip_host_first) + 1;
	$ip_first = ip2long(long2ip($ip_first));
    //caculate last usable address
    $ip_broadcast_invert = ~$ip_nmask_long;
    $ip_last = ($ip_address_long | $ip_broadcast_invert) - 1;
	$ip_last = ip2long(long2ip($ip_last));
    //caculate broadcast address
    $ip_broadcast = $ip_address_long | $ip_broadcast_invert;

    //Output
    /*
	$ip_net_short = long2ip($ip_net);
    $ip_first_short = long2ip($ip_first);
    $ip_last_short = long2ip($ip_last);
    $ip_broadcast_short = long2ip($ip_broadcast);
    echo "Network - " . $ip_net_short . "<br>";
    echo "First usable - " . $ip_first_short . "<br>";
    echo "Last usable - " . $ip_last_short . "<br>";
    echo "Broadcast - " . $ip_broadcast_short . "<br>";*/
}
function readTxtFile($filename){
	$myfile = fopen($filename, "r") or die("Unable to open file!");
	$data = fread($myfile,filesize($filename));
	fclose($myfile);
	return $data;
}
function getRangeIpAndPort($str,$strpart1,$strpart2,$strpart3,$strpart4,&$ip){
	$IPArr = explode($strpart1, $str);
	$iIp = -1;
	for ($i = 0; $i<count($IPArr); $i++){
		$a = explode($strpart2, $IPArr[$i]);
		ipv4Breakout ($a[0], $ip0, $ip1, $ip2);
		$p = explode($strpart3, $a[1]);
		$pList = "0";
		for($j = 0; $j < count($p); $j++){
			if(strpos($p[$j],$strpart4 )){
				$p1 = explode($strpart4 ,$p[$j]);
				for($l = $p1[0];$l<=$p1[1];$l++){
					$pList = $pList . $strpart3 . $l;
				}
			} else {
				$pList = $pList . $strpart3 . $p[$j];
			}
		}
		sortStr($pList, $strpart3);
		
		if(!($ip0>=$ip1 && $ip0<=$ip2)){
			$iIp = $iIp + 1;
			$ip[$iIp] = array($a[0], $ip0, $ip0, $pList, $a[1]);
		} else {
			$iIp = $iIp + 1;
			$ip[$iIp] = array($a[0], $ip1, $ip2, $pList, $a[1]);
		}	
	}
}
function getIpAndPort($str,$strpart1,$strpart2,$strpart3,$strpart4,&$ip){
	$IPArr = explode($strpart1, $str);
	$iIp = -1;
	for ($i = 0; $i<count($IPArr); $i++){
		$a = explode($strpart2, $IPArr[$i]);
		ipv4Breakout ($a[0], $ip0, $ip1, $ip2);
		$p = explode($strpart3, $a[1]);
		$pList = "0";
		for($j = 0; $j < count($p); $j++){
			if(strpos($p[$j],$strpart4 )){
				$p1 = explode($strpart4 ,$p[$j]);
				for($l = $p1[0];$l<=$p1[1];$l++){
					$pList = $pList . $strpart3 . $l;
				}
			} else {
				$pList = $pList . $strpart3 . $p[$j];
			}
		}
		sortStr($pList, $strpart3);
		if(!($ip0>=$ip1 && $ip0<=$ip2)){
			$iIp = $iIp + 1;
			$ip[$iIp] = array($a[0], $ip0, $pList, $a[1], $ip1, $ip2);
		}
		for($j = $ip1; $j <= $ip2; $j++){
			$iIp = $iIp + 1;
			$ip[$iIp] = array($a[0], $j, $pList, $a[1], $ip1, $ip2);
		}	
	}
	sortArray($ip, 2, 1);
}
function ipCheckRangeAndPort ($ipAndPort, $ipRangeAndPort, &$IpRange, &$Port){
	/*
	$ipAndPort
	a[120][0] = 10.30.154.18/26
	a[120][1] = 169777723
	a[120][2] = 0;80;81;443;3389
	a[120][3] = 3389;80:81;443
	a[120][4] = 169777409
	a[120][5] = 169777470
	----------------------------
	$ipRangeAndPort
	a[0][0] = 10.30.153.15/26
	a[0][1] = 169777409
	a[0][2] = 169777470
	a[0][3] = 0;80;81;443;3389
	a[0][4] = 3389;80:81;443
	*/
	$kt = false;
	$IpRange = "";
	$Port = $ipAndPort[3];
	for($i=0; $i<count($ipRangeAndPort); $i++){
		if($ipAndPort[1] >= $ipRangeAndPort[$i][1] && $ipAndPort[1] <= $ipRangeAndPort[$i][2] && $ipAndPort[2] == $ipRangeAndPort[$i][3]){
			$kt = true;
			$IpRange = $ipRangeAndPort[$i][0];
			break;
		}
	}
	return $kt;
}
//---------END FUNCTION-------------//
//---------CODE--------------------//
//- khai bao bien bam bang
$strpart1 = "jnj";
$strpart2 = "jtj";
$strpart3 = ";";
$strpart4 = ":";
//$str = readTxtFile("iptables.txt");// read file text
$str = "10.30.153.15/26jtj3389;80;443;82:86jnj10.30.154.18/26jtj3389;80;443;82:86jnj10.60.151.254/32jtj3389;80;443;82:86jnj10.60.152.12/28jtj3389;80;443;82:86jnj10.60.150.34/23jtj3389;80;443;82:86jnj10.240.137.254jtj3389;80;443;82:86jnj127.0.0.1/24jtj3389;80;443;82:86jnj10.61.129.199/28jtj3389;80;443;82:86jnj10.61.128.60/27jtj3389;80;443;82:86jnj192.168.252.123/27jtj3389;80;443;82:86jnj192.168.252.3/24jtj3389;80;443;82:86";
getRangeIpAndPort($str,$strpart1,$strpart2,$strpart3,$strpart4,$ipTable);
//PrintArr($ipTable, 2);
//$str = readTxtFile("IpSearch.txt"); // read file text
$str = "10.30.153.15/29jtj3389;80;443;82:86jnj10.30.154.18/24jtj3389;80;443;82:86jnj127.0.0.254/32jtj3389;80;443;82:86";
getIpAndPort($str,$strpart1,$strpart2,$strpart3,$strpart4,$ip);
//PrintArr($ip, 2);
$j1 = -1;
$j2 = -1;
for($i=0;$i<count($ip);$i++){
	if(ipCheckRangeAndPort ($ip[$i], $ipTable, $IpRange, $Port)){
		$j1 = $j1 + 1;
		$str = implode("_", array($IpRange,$Port,$ip[$i][1]));
		$a1[$j1] = array($str, $ip[$i][1], long2ip($ip[$i][1]), $Port, $IpRange);
	}
	else {
		$j2 = $j2 + 1;
		$str = implode("_", array("NON.IP.RANGE",$Port,$ip[$i][1]));
		$a2[$j2] = array($str, $ip[$i][1], long2ip($ip[$i][1]), $Port, "Không thuộc dải nào");	
	}
}
sortArray($a1, 2, 0);
implodeArray($a1,1);
//PrintArr($a1, 2);
PrintSubnet($a1);
//echo checkIpStartSubnet("10.30.153.1");
sortArray($a2, 2, 0);
implodeArray($a2,1);
//PrintArr($a2, 2);
PrintSubnet($a2);
?>
