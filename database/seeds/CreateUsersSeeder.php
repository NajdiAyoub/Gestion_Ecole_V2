<?php
  
use Illuminate\Database\Seeder;
use App\User;
   
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'najdi14.ayoub@gmail.com',
                'role'=>1,
                'langcode'=>'en',

               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'User',
               'email'=>'najdiayoub68@gmail.com',
                'role'=>2,
                'langcode'=>'en',

               'password'=> bcrypt('123456'),
            ],

            [
               'name'=>'User',
                'email'=>'CharlezWilliams@gmail.com',
                 'role'=>3,
                 'langcode'=>'en',

                'password'=> bcrypt('123456'),
             ],

        ];
  
        foreach ($user as $key => $value) {

            User::create($value);
       }
    }

}