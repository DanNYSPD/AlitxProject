<?php
class Gral{
	function cook($name,$value,$future=10800){
		setcookie($name, $value, time()+$future, "/", "", 0);
	}
	function json($v,$data){
		return ($v) ? json_encode($data) : json_decode($data);
	}
	function jsonO($v,$data){
		return ($v) ? json_encode($data, JSON_FORCE_OBJECT) : json_decode($data);
	}
	function crypto($v,$data){
		if (!is_array($data))
			$data = ($v) ? base64_encode($data) : base64_decode($data);
		else
			foreach ($data as $i => $v)
				$data[$i] = ($v) ? base64_encode($data[$i]) : base64_decode($data[$i]);
		return $data;
	}
	function utf8($v,$data){
		if (!is_array($data))
			$data = ($v) ? utf8_encode($data) : utf8_decode($data);
		else
			foreach ($data as $i => $v)
				$data[$i] = ($v) ? utf8_encode($data[$i]) : utf8_decode($data[$i]);
		return $data;
	}
	function kill($c,$msn){
		$c->cl();
		die($msn);
	}
	function xss($v){
		$_e = array("'", "<",">","&");
		$_r = array("&#039;", "&lt;", "&gt;","&amp;");
		$v = str_replace($_e, $_r, $v);
		return $v;
	}
	function isn($v){
		if (!is_array($v))
			return is_numeric($v);
		else {
			$v = true;
			for ($i = 0; $i < count($v); $i++)
				if (!is_numeric($v[$i]))
					$v = false;
			return $v;
		}
	}
}
?>