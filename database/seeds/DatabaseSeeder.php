<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DatabaseSeederProduct::class);
        // $this->call(UserSeeder::class);
    }

    protected function seederAdmin()
    {
        \DB::table('admins')->insert([
            'name'     => 'Admin',
            'email'    => 'duan@gmail.com',
            'username' => 'monkeyphan',
            'phone'    => '0986420994',
            'about'    => 'Xin chào Phan Trung Phú',
            'password' => \Hash::make('0986420994')
        ]);
    }
}
