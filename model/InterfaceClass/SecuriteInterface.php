<?php

namespace model\InterfaceClass;
interface SecuriteInterface
{

    public function VerifyPassword(string $pwd, string $hash):bool;
    public function HashPassword(string $pwd): string;
}