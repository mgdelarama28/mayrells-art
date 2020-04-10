<?php

use Carbon\Carbon;
use App\Models\Users\Admin;
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
	protected $admins = [
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
        DB::beginTransaction();

	        $this->command->info('Seeding Admin Users...');

	        foreach ($this->admins as $key => $admin) {
	        	$vars = [
	        		'first_name' => $admin['first_name'],
	        		'last_name' => $admin['last_name'],
					'email' => $admin['email'],
					'profile_picture_path' => $admin['profile_picture_path'],
	        		'password' => Hash::make($admin['password']),
	        		'email_verified_at' => Carbon::now(),
	        	];

	        	Admin::create($vars);
	        }

	    DB::commit();
    }
}
