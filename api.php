<?php
	session_start();
	// error_reporting(E_ALL^E_NOTICE);
	header('Content-Type:text/html;charset=utf-8');
	class api {
		public function user($code)
		{
			$code = $_REQUEST['code'];
			$appid = 'your appid';
			$secret = 'your secret';

			$url = "https://api.weixin.qq.com/sns/jscode2session?appid=".$appid."&secret=".$secret."&js_code=".$code."&grant_type=authorization_code";
			$weixin=file_get_contents($url);
			$jsondecode = json_decode($weixin); //对JSON格式的字符串进行编码
			$array = get_object_vars($jsondecode);//转换成数组
			$openid = $array['openid'];//输出openid

		}
	}
?>