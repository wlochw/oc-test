<?php
/**
 * This file is part of the "PasswordEncoder" project.
 * @author Jakub Kanclerz <kuba.kanclerz@creativestyle.pl>
 * Feel free to contact me
 */
namespace Wwloch\Component\Password;
class Encoder
{
    private $encodingMethod;
    public function __construct(EncodingMethod $method)
    {
        $this->encodingMethod = $method;
    }
    public function encodePassword($password)
    {
        return $this->encodingMethod->encode($password);
    }
}