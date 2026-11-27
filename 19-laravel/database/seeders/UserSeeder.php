<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User;
        $user->document = 75123120;
        $user->fullname = 'Gumball';
        $user->gender = 'male';
        $user->birthdate = '2011-05-03';
        $user->phone = '3126560001';
        $user->email = 'Gumball@mail.com';
        $user->password = bcrypt('Gumball@mail.com');
        $user->role = 'Administrator';
        $user->save();

        DB::table('users')->insert([
        "document" => 75123121,
        "fullname" => 'Nicole',
        "gender" => 'female',
        "birthdate" => '1982-10-6',
        "phone" => '3126560048',
        "email" => 'Nicole@mail.com',
        "password" => bcrypt('12345'),
        "created_at"=> now(),
        "updated_at"=> now()
        ]);
    }
}
