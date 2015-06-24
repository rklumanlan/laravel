<?php

use Illuminate\Database\Seeder;
use App\User as Users;


class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker\Factory::create();

	        Users::truncate();

	        foreach(range(1,10) as $index)
	        {
	            Users::create([
	                'email' => $faker->email,
	                'password' => bcrypt('111111'),
					'created_at' => new DateTime,
					'updated_at' => new DateTime
	            ]);
	        }
	}

}
