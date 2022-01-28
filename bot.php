<?php
error_reporting(0);
$zone = json_decode(file_get_contents("http://ip-api.com/json"),1)["timezone"];if($zone){date_default_timezone_set($zone);}
function Run($url, $httpheader = 0, $post = 0, $proxy = 0){$ch = curl_init();curl_setopt($ch, CURLOPT_URL, $url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);curl_setopt($ch, CURLOPT_COOKIE,TRUE);
	//curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt");
	if($post){curl_setopt($ch, CURLOPT_POST, true);curl_setopt($ch, CURLOPT_POSTFIELDS, $post);}if($httpheader){curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);}if($proxy){curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);curl_setopt($ch, CURLOPT_PROXY, $proxy);}curl_setopt($ch, CURLOPT_HEADER, true);$response = curl_exec($ch);$httpcode = curl_getinfo($ch);if(!$httpcode) return "Curl Error : ".curl_error($ch); else{$header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));$body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));curl_close($ch);return array($header, $body)[1];}}
function Col($str,$color){if($color=="rand"){$color=['h','k','b','u','m'][array_rand(['h','k','b','u','m'])];}$war=array('rw'=>"\033[107m\033[1;31m",'rt'=>"\033[106m\033[1;31m",'ht'=>"\033[0;30m",'p'=>"\033[1;37m",'a'=>"\033[1;30m",'m'=>"\033[1;31m",'h'=>"\033[1;32m",'k'=>"\033[1;33m",'b'=>"\033[1;34m",'u'=>"\033[1;35m",'c'=>"\033[1;36m",'rr'=>"\033[101m\033[1;37m",'rg'=>"\033[102m\033[1;34m",'ry'=>"\033[103m\033[1;30m",'rp1'=>"\033[104m\033[1;37m",'rp2'=>"\033[105m\033[1;37m");return $war[$color].$str."\033[0m";}
function Line(){$len = 36;$var = '─';echo str_repeat($var,$len)."\n";}
function Bn(){global $a,$reg;system('clear');$m="\033[1;31m";$p="\033[1;37m";$k="\033[1;33m";$h="\033[1;32m";$u="\033[1;35m";$b="\033[1;34m";$c="\033[1;36m";$mp="\033[101m\033[1;37m";$cl="\033[0m";$mm="\033[101m\033[1;31m";$hp="\033[1;7m";$z=trim(strtoupper($a[1]));$x=18;$y=strlen($z);$line=str_repeat('_',$x-$y);echo "\n{$m}[{$p}Script{$m}]->{$k}[".$h.$z."{$k}]-[".$h.$a[2].$k."]".$p.$line.".\n{$u}.__              .__.__ 	    {$p}| \n{$u}|__| ______  _  _|__|  |	\n|  |/ __ \ \/ \/ /  |  |\n|  \  ___/\     /|  |  |__\n|__|\___  >\/\_/ |__|____/\n        \/\n{$mm}[{$mp}▶{$mm}]{$cl} {$k}https://www.youtube.com/c/iewil\n{$c}{$hp} >_{$cl}{$b} Team-Function-INDO\n{$p}────────────────────────────────────\nLink Reg : ".$reg."\n\n";}
function Save($namadata){global $a;if(file_exists($a[1]."/".$namadata)){$datauser=file_get_contents($a[1]."/".$namadata);}else{$datauser=readline(col("Input ".$namadata,"m").col(" > ","p")."\n");echo "\n";file_put_contents($a[1]."/".$namadata,$datauser);}return $datauser;}
function Short(){global $a,$server,$disable;$d=date("D");if(file_exists($_SERVER["TMPDIR"]."/".$a[1])){$day=trim(file_get_contents($_SERVER["TMPDIR"]."/".$a[1]));}else{file_put_contents($_SERVER["TMPDIR"]."/".$a[1],$d);$day=trim(file_get_contents($_SERVER["TMPDIR"]."/".$a[1]));}if($d==$day){}else{unlink($a[1]."/key.txt");unlink($_SERVER["TMPDIR"]."/".$a[1]);}$script = file_get_contents($server);$status = explode('|',explode('#'.$a[1].':',$script)[1])[0];if($status == "on"){RETRY:$rand = rand(0,14);$short = json_decode(file_get_contents('https://pastebin.com/raw/EiKBhp8U'),1);$link = file_get_contents($short[$rand]['url']);$pass = trim(explode(' ',explode('Password: ',$link)[1])[0]);$read = file_get_contents($a[1]."/key.txt");if(file_exists($a[1]."/key.txt")){}else{bn();echo col(" Link Password : ","h").col($short[$rand]['short'],'k')."\n";$p = readline(col(" Password : ","h"));if($pass == $p){file_put_contents($a[1]."/key.txt",$p);}else{echo col(" Password salah!","m")."\n";line();goto RETRY;}}}elseif($status == "off" or $status == null){bn();echo col("The script is disabled","m")."\n\n";echo Slow($disable);exit;}}

$a = ["iewil","earnshibainu","1.0"];
$reg = "https://bit.ly/3HdU6VA\nCodeRef: pWb28P";
$server = "https://pastebin.com/raw/JGzBgSKe";
$yt = "https://youtu.be/WCtXjyaDsjo";
$disable = col("Script mati karena web update / scam!","m")."\nSupport Channel saya dengan cara\nSubscribe ".col("https://www.youtube.com/c/iewil","k")."\nkarena subscribe itu gratis :D\nUntuk mendapatkan info Script terbaru\nJoin grub via telegram ~> ".col("https://t.me/Iewil_G","c")."\nðŸ‡®ðŸ‡© ".col("Family-Team-Function-INDO","b")."\n";

function Rd($b=0){
	$arr = [0.3,0.4,0.5,0.6];
	if($b==1){
		$c = array_merge($arr,[0.7,0.8,0.9,1]);
		return $c[array_rand($c)];
	}else{
		return $arr[array_rand($arr)];
	}
}
function Host(){return "https://earnlitecoinapp.com/apps/api";}
function Head(){return ["Content-Type: application/json","Host: earnlitecoinapp.com","User-Agent: okhttp/4.9.1"];}
function Get_user($id,$email){
	$url=host()."/get_user.php";
	$data=json_encode(array("user_id"=>$id,"email_id"=>$email));
	return json_decode(Run($url,head(),$data),1);
}
function Spin_points($id,$email,$code){
	$url=host()."/spin_points.php";
	$data=json_encode(array("user_id"=>$id,"email_id"=>$email,"version_name"=>"1.0","version_code"=>$code));
	return json_decode(Run($url,head(),$data),1);
}
function Spin_count($id,$email){
	$url=host()."/spin_count.php";
	$data=json_encode(array("user_id"=>$id,"email_id"=>$email,"points"=>rd(1)));
	return json_decode(Run($url,head(),$data),1);
}
function Dice_count($id,$email){
	$url=host()."/dice_count.php";
	$data=json_encode(array("user_id"=>$id,"email_id"=>$email,"points"=>rd()));
	return json_decode(Run($url,head(),$data),1);
}
function Scratch_count($id,$email){
	$url=host()."/scratch_count.php";
	$data=json_encode(array("user_id"=>$id,"email_id"=>$email,"points"=>rd()));
	return json_decode(Run($url,head(),$data),1);
}
function Tictac_count($id,$email){
	$url=host()."/tictac_points.php";
	$data=json_encode(array("user_id"=>$id,"email_id"=>$email,"points"=>0,77));
	return json_decode(Run($url,head(),$data),1);
}
function Memory_count($id,$email){
	$url=host()."/memory_count.php";
	$data=json_encode(array("user_id"=>$id,"email_id"=>$email,"points"=>rand(1,50)));
	return json_decode(Run($url,head(),$data),1);
}
function Add_Transfer($id,$email,$wallet){
	$url=host()."/insert_trans_id.php";
	$data=json_encode(array("user_id"=>$id,"email_id"=>$email,"trans_id"=>$wallet));
	return json_decode(Run($url,head(),$data),1);
}
function Check_point(){
	$url=host()."/get_point_table.php";
	$data="{}";
	return json_decode(Run($url,head(),$data),1);
}
function Withdraw($id,$email,$point){
	$url=host()."/reedem_request_coinbase.php";
	$data=json_encode(array("user_id"=>$id,"email_id"=>$email,"points"=>$point,"request_type"=>"main"));
	return json_decode(Run($url,head(),$data),1);
}

Short();bn();
$id=Save('User_Id');
$email=Save('Email_Id');
$wallet=Save('Email_Coinbase');
system("termux-open-url ".$yt);
bn();
$r1 = get_user($id,$email);
$point = $r1["data"]["points"];
$email = $r1["data"]["email"];
$reff = $r1["data"]["refer_code"];
$tf = $r1["data"]["transaction_id"];

echo col("Email ","h").col("~> ","m").$email."\n";
echo col("Point ","h").col("~> ","m").$point."\n";
echo col("ID Coinbase ","h").col("~> ","m").$tf."\n";
echo col("reff  ","h").col("~> ","m").$reff."\n";
line();
	
while(true){
	echo col("# Spin","a")."\n";line();Spin:
	get_user($id,$email);
	$r2 = Spin_count($id,$email);
	$msg = $r2["message"];
	if($msg=="Success"){
		echo col("Success    ~> ","h").col($r2["points"],"k")."\n";
		echo col("Claim Left ~> ","h").col($r2["count_left"],"k")."\n";
		line();tmr(5);goto Spin;
	}else{
		$mwr = explode('after ',$msg)[1];
		echo col('Wait ~> ','p').col($mwr,"m")."\n";line();
	}

	echo col("# memory","a")."\n";line();Memory:
	get_user($id,$email);
	$r2 = Memory_count($id,$email);
	$msg = $r2["message"];
	if($msg=="Success"){
		echo col("Success    ~> ","h").col($r2["points"],"k")."\n";
		echo col("Claim Left ~> ","h").col($r2["count_left"],"k")."\n";
		line();tmr(5);goto Memory;
	}else{
		$mwr = explode('after ',$msg)[1];
		echo col('Wait ~> ','p').col($mwr,"m")."\n";line();
	}

	echo col("# Dice","a")."\n";line();Dice:
	get_user($id,$email);
	$r2 = Dice_count($id,$email);
	$msg = $r2["message"];
	if($msg=="Success"){
		echo col("Success    ~> ","h").col($r2["points"],"k")."\n";
		echo col("Claim Left ~> ","h").col($r2["count_left"],"k")."\n";
		line();tmr(5);goto Dice;
	}else{
		$mwr = explode('after ',$msg)[1];
		echo col('Wait ~> ','p').col($mwr,"m")."\n";line();
	}
	
	echo col("# Tictac","a")."\n";line();Tictac:
	get_user($id,$email);
	$r2 = Tictac_count($id,$email);
	$msg = $r2["message"];
	if($msg=="Success"){
		echo col("Success    ~> ","h").col($r2["points"],"k")."\n";
		echo col("Claim Left ~> ","h").col($r2["count_left"],"k")."\n";
		line();tmr(5);goto Tictac;
	}else{
		$mwr = explode('after ',$msg)[1];
		echo col('Wait ~> ','p').col($mwr,"m")."\n";line();
	}

	echo col("# Scratch","a")."\n";line();Scratch:
	get_user($id,$email);
	$r2 = Scratch_count($id,$email);
	$msg = $r2["message"];
	if($msg=="Success"){
		echo col("Success    ~> ","h").col($r2["points"],"k")."\n";
		echo col("Claim Left ~> ","h").col($r2["count_left"],"k")."\n";
		line();tmr(5);goto Scratch;
	}else{
		$mwr = explode('after ',$msg)[1];
		echo col('Wait ~> ','p').col($mwr,"m")."\n";line();
	}
	get_user($id,$email);
	Check_point();
	if($tf==""){
		echo col("# Add ID Coinbase","a")."\n";line();
		$r2 =Add_Transfer($id,$email,$wallet);
		if($r2["message"]=="Success"){
			echo col("Success add ".$wallet,"h")."\n";
			line();
		}
	}
	echo col("# Withdraw","a")."\n";line();
	$point=get_user($id,$email)["data"]["points"];
	if($point>20){
		$r2=Withdraw($id,$email,$point);
		$status=$r2["status_code"];
		$msg=$r2["message"];
		if($status==200){
			echo col("Success    ~> ","h").col($r2["points"],"k")."\n";
			echo col("ID Coinbase ~> ","h").col($tf,"k")."\n";
			line();
		}else{
			$mwr = explode('after ',$msg)[1];
			echo col('Wait ~> ','p').col($mwr,"m")."\n";line();
		}
		
	}
	
	tmr(600);
}

function Tmr($tmr){$timr=time()+$tmr;while(true){echo "\r                       \r";$res=$timr-time(); if($res < 1){break;}echo col(date('i:s',$res),"rand");sleep(1);}}