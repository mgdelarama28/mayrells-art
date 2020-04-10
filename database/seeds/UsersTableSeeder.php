<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
	protected $users = [
		[
			'first_name' => 'Mayrell Joyce',
			'last_name' => 'Mandac',
			'email' => 'admin@admin.com',
			'profile_picture_path' => 'cover-images/profile-image.jpeg',
			'password' => 'password',
		],
	];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        DB::beginTransaction();

	        $this->command->info('Seeding Admin Users...');

	        foreach ($this->users as $key => $user) {
	        	$vars = [
	        		'first_name' => $user['first_name'],
	        		'last_name' => $user['last_name'],
					'email' => $user['email'],
	        		'password' => Hash::make($user['password']),
					'email_verified_at' => Carbon::now(),
	        	];

	        	User::create($vars);
	        }

	    DB::commit();
    }
}
