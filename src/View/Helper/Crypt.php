<?php

declare(strict_types=1);

namespace App\View\Helper;

use Authentication\PasswordHasher\DefaultPasswordHasher;

class Crypt
{
    /**
     * Hashes a password using SHA-512 encryption
     *
     * @param string $password
     * @return string|null
     * @uses \Cake\Auth\DefaultPasswordHasher
     */
    public static function hashSha512(string $password): ?string
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher())->hash($password);
        }

        return null;
    }
}
