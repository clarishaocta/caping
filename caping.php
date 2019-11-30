<?php
// FB : clarisha octa
echo "\033[45m \033[0;32m program tuyul caping\n";
echo "\033[45m \033[0;33m created by : \033[4;34m clarisha octa\n";
echo "\n ";
echo "\n ";
echo "\n ";
echo "\033[01;31m Masukkan UserId/Uid :\033[0;32m ";
$uid 	= trim(fgets(STDIN));
echo "\033[01;31m Masukkan N ID :\033[0;32m ";
$n 	= trim(fgets(STDIN));
echo "\033[01;31m Jumlah 1-100 :\033[0;32m";
$jumlah	= trim(fgets(STDIN));
echo "\033[01;31m Setdelay : \033[0;32m";
$wait	= trim(fgets(STDIN));
    $i=0;
while($i<$jumlah){
			sleep($wait);
			$i++;
			flush();
			
		$news		=	news($uid,$n);
		$video		=	video($uid,$n);
		$share		=	share($uid,$n);
		$code		=	code($uid,$n);
		$klik		=	klik($uid,$n);
	echo "TASK NEWS  $news\n";
	echo "TASK VIDEO $video\n";
	echo "TASK SHARE $share\n";
	echo "TASK CODE  $code\n";
	echo "TASK KLIK  $klik\n";
	
	}

function news($uid,$n){ 
		$rand = rand(1,9999);
		$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://ai.caping.co.id/v2/event/news/view/$rand"); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
				$headers = array();
				$headers[] = "Cookie: u=$uid;n=$n";
				$headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; Redmi 3S Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.126 Mobile Safari/537.36;CapingNews/4.1.4";
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;
}
function video($uid,$n){
		$rand = rand(1,9999);
		$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://ai.caping.co.id/v2/event/video/view/$rand"); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
				$headers = array();
					$headers[] = "Cookie: u=$uid;n=$n";
					$headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; Redmi 3S Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.126 Mobile Safari/537.36;CapingNews/4.1.4";
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;
}
function share($uid,$n){
		$rand = rand(1,9999);
		$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://ai.caping.co.id/v2/event/share/news/$rand"); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
				$headers = array();
					$headers[] = "Cookie: u=$uid;n=$n";
					$headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; Redmi 3S Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.126 Mobile Safari/537.36;CapingNews/4.1.4";
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;
}
function code($uid,$n){
		$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://ai.caping.co.id/v2/event/share/code"); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
				$headers = array();
					$headers[] = "Cookie: u=$uid;n=$n";
					$headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; Redmi 3S Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.126 Mobile Safari/537.36;CapingNews/4.1.4";
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;
}
function klik($uid,$n){
		$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://ai.caping.co.id/v2/event/share/click/push"); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			$headers = array();
					$headers[] = "Cookie: u=$uid;n=$n";
					$headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; Redmi 3S Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.126 Mobile Safari/537.36;CapingNews/4.1.4";
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;
}
?>
