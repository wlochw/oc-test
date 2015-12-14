<?php

namespace Wwloch\Component\Password\Method;


use Wwloch\Component\Password\EncodingMethod;

class Sha1Encoding implements EncodingMethod
{
	public function encode($plainText){
		$sha1 = sha1($plainText);
		return $sha1;
	}


}