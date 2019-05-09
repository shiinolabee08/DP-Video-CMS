<?php

use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for( $i=0; $i <= 30; $i++ ){
	        DB::table('companies')->insert([
	            'name' => 'Company ' .$i,
	            'email' => 'info@sample_company'.$i.'.co.uk',
	            'logo' => null,
	            'website_url' => 'sample_company'.$i'.co.uk',
	            'created_at' => date('Y-m-d H:i:s')
	        ]);
    	}
    }
}
