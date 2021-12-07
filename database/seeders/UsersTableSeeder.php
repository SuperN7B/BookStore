<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = new \App\User([
            'name' => 'Азамат.А',
            'email' => 'azamat@mail.ru',
            'password' => bcrypt('qwerty123'),
            'is_admin' => 0
        ]);
        $user->save();
       
    }
}
