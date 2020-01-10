<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB ::table('users') -> get() -> count() == 0)
        {
            DB ::table('users') -> insert(
                [
                    'name'=>'master',
                    'email'=>'master@app.com',
                    'password'=>bcrypt('123456'),
                    'created_at' => Carbon ::now(),
                    'updated_at' => Carbon ::now(),
                ]
            );

        }
        else
        {
            echo "\nError ! there is a master\n";
        }

        factory(User::class, 9)->create();
    }
}
