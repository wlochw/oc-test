<?php

namespace Wwloch\Password\Method;
use Wwloch\Password\EncodingMethod;
class Sha1Encoding implements EncodingMethod
{
	public function encode($plainText)
	{
		return sha1($plainText);
	}


}