<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* Copyright (C) NAVER <http://www.navercorp.com> */

/**
 *xpressengine 소스 참고
 */

class Ipfilter
{

	public function filter($ip_list = '', $ip = null)
	{
		if (empty($ip)) {
			$ip = $_SERVER['REMOTE_ADDR'];
		}
		$long_ip = ip2long($ip);
		if ($ip_list) {
			foreach ($ip_list as $filter_ip) {
				$range = explode('-', $filter_ip);
				if ( ! isset($range[1]) OR empty($range[1])) { // single address type
					$star_pos = strpos($filter_ip, '*');
					if ($star_pos !== false) { // wild card exist
						if (strncmp($filter_ip, $ip, $star_pos) === 0) {
							return true;
						}
					} elseif (strcmp($filter_ip, $ip) === 0) {
						return true;
					}
				} elseif (ip2long($range[0]) <= $long_ip && ip2long($range[1]) >= $long_ip) {
					return true;
				}
			}
		}
		return false;
	}


	public function validate($ip_list = array())
	{	
		/* 사용가능한 표현
		 * 192.168.2.10 - 4자리의 정확한 ip주소
		 * 192.168.*.* - 와일드카드(*)가 사용된 4자리의 ip주소, a클래스에는 와일드카드 사용불가,
		 * 와일드카드 이후의 아이피주소 허용(단, filter()를 쓸 경우 와일드카드 이후 주소는 무시됨
		 * 192.168.1.1-192.168.1.10 - '-'로 구분된 정확한 4자리의 ip주소 2개
		 */
		$regex = "/^
				(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)
				(?:
					(?:
						(?:\.(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)){3}
						(?:-(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)){1}
						(?:\.(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)){3}
					)
					|
					(?:
						(?:\.(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)|\*)){3}
					)
				)
			$/";
		$regex = str_replace(array("\r\n", "\n", "\r", "\t", " "), '', $regex);

		foreach ($ip_list as $i => $ip) {
			preg_match($regex, $ip, $matches);
			if ( ! count($matches)) {
				return false;
			}
		}
		return true;
	}
}
