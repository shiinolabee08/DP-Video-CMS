<?php

use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for( $i=0; $i <= 20; $i++ ){
	        DB::table('employees')->insert([
	            'first_name' => 'Sample',
	            'last_name' => 'Employee' .$i,
	            'email' => 'sample_employee'.$i.'@gmail.com',
	            'phone' => '07759149471',
	            'company_id' => mt_rand(1,2),
	            'created_at' => date('Y-m-d H:i:s')
	        ]);
    	}
    }
}
