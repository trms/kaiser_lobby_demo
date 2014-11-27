<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('DepartmentsTableSeeder');
	}

}


class DepartmentsTableSeeder extends Seeder{

	public function run(){

		DB::table('departments')->delete();

		Department::create([
				'name' => 'California Claims Administration',
				'longname'=>'California Claims Administration',
				'map' => 'map_test.png',
				'floor'=>'8th',
			]);
		Department::create([
				'name' => 'Clinical Review',
				'longname'=>'Clinical Review',
				'map' => 'map_test.png',
				'floor'=>'8th',
			]);
		Department::create([
				'name' => 'HAR Facilities Engineering',
				'longname'=>'HAR Facilities Engineering',
				'map' => 'map_test.png',
				'floor'=>'8th',
			]);
		Department::create([
				'name' => 'National Facilities Services',
				'longname'=>'National Facilities Services (NFS BIO, BPEO, Operations)',
				'map' => 'map_test.png',
				'floor'=>'15th',
			]);
		Department::create([
				'name' => 'Workforce Planning & Development',
				'longname'=>'National Workforce Planning & Development',
				'map' => 'map_test.png',
				'floor'=>'15th',
			]);
		Department::create([
				'name' => 'Medical Services Contracting',
				'longname'=>'Medical Services Contracting',
				'map' => 'map_test.png',
				'floor'=>'15th',
			]);
		Department::create([
				'name' => 'NCAL Service & Delivery BIO',
				'longname'=>'NCAL Service & Delivery BIO',
				'map' => 'map_test.png',
				'floor'=>'17th',
			]);
		Department::create([
				'name' => 'Brand Communications',
				'longname'=>'Brand Communications',
				'map' => 'map_test.png',
				'floor'=>'17th',
			]);
		Department::create([
				'name' => 'Innovation Consultancy',
				'longname'=>'Innovation Consultancy',
				'map' => 'map_test.png',
				'floor'=>'17th',
			]);
		Department::create([
				'name' => 'National Patient Care Services',
				'longname'=>'National Patient Care Services',
				'map' => 'map_test.png',
				'floor'=>'17th',
			]);
		Department::create([
				'name' => 'Regional Compliance',
				'longname'=>'Regional Compliance',
				'map' => 'map_test.png',
				'floor'=>'17th',
			]);
		Department::create([
				'name' => 'National Facilities Services',
				'longname'=>'National Facilities Services (Facilities Planning & Design)',
				'map' => 'map_test.png',
				'floor'=>'19th',
			]);
		Department::create([
				'name' => 'National Functions',
				'longname'=>'National Functions',
				'map' => 'map_test.png',
				'floor'=>'19th',
			]);
		Department::create([
				'name' => 'Learning & Development',
				'longname'=>'Learning & Development',
				'map' => 'map_test.png',
				'floor'=>'19th',
			]);
		Department::create([
				'name' => 'Operations',
				'longname'=>'Operations',
				'map' => 'map_test.png',
				'floor'=>'19th',
			]);
		Department::create([
				'name' => 'Construction Acquisition',
				'longname'=>'Construction Acquisition',
				'map' => 'map_test.png',
				'floor'=>'19th',
			]);
		Department::create([
				'name' => 'Executive Office',
				'longname'=>'Executive Office',
				'map' => 'map_test.png',
				'floor'=>'19th',
			]);
		Department::create([
				'name' => 'Accounting',
				'longname'=>'Accounting',
				'map' => 'map_test.png',
				'floor'=>'19th',
			]);
		Department::create([
				'name' => 'Human Resources',
				'longname'=>'Human Resources',
				'map' => 'map_test.png',
				'floor'=>'19th',
			]);
		Department::create([
				'name' => 'Diversity',
				'longname'=>'Diversity',
				'map' => 'map_test.png',
				'floor'=>'19th',
			]);
		Department::create([
				'name' => 'Legal',
				'longname'=>'Legal',
				'map' => 'map_test.png',
				'floor'=>'19th',
			]);
		Department::create([
				'name' => 'Corporate Real Estate',
				'longname'=>'Corporate Real Estate',
				'map' => 'map_test.png',
				'floor'=>'19th',
			]);

	}

}