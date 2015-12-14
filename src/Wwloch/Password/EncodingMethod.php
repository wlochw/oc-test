<?php
/**
 * This file is part of the "PasswordEncoder" project.
 * @author Jakub Kanclerz <kuba.kanclerz@creativestyle.pl>
 * Feel free to contact me
 */
namespace Wwloch\Password;
interface EncodingMethod
{
    public function encode($plainText);
}