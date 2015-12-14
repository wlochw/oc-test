<?php

namespace Wwloch\Component\Password\Method;
use Wwloch\Component\Password\EncodingMethod;
class Sha1Encoding implements EncodingMethod
{
	public function encode($plainText)
	{
		return sha1($plainText);
	}


}