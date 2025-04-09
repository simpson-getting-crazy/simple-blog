<?php

declare(strict_types=1);

use App\View\Helper\Crypt;
use Migrations\BaseSeed;
use Cake\Utility\Text;

/**
 * Users seed.
 */
class UsersSeed extends BaseSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/migrations/4/en/seeding.html
     *
     * @return void
     */
    public function run(): void
    {
        $data = [
            'id' => Text::uuid(),
            'name' => 'John Doe',
            'email' => 'user@test.com',
            'password' => Crypt::hashSha512('password'),
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
