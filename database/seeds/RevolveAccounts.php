<?php

use Illuminate\Database\Seeder;

use App\Department;
use App\User;

class RevolveAccounts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::transaction(function(){
        	$revolve = Department::where('name', 'Revolve')->first()->id;

        	DB::table('users')->insert([
        		[
	        		'employee_number' => '10070649',
	        		'name' => 'Mathew Nalagon',
		        	'email' => 'mathem.nalagon@personiv.com',
		        	'password' => bcrypt('!welcome10'),
		        	'super_user' => false,
		        	'department_id' => $revolve,
		        	'immediate_supervisor_id' => null,
		        	'remember_token' => null,
	        		'created_at' => Carbon\Carbon::now(),
	        		'updated_at' => Carbon\Carbon::now(),
	        	],
	        	[
	        		'employee_number' => '10079070',
	        		'name' => 'Michael Ronan',
		        	'email' => 'michael.ronan@personiv.com',
		        	'password' => bcrypt('!welcome10'),
		        	'super_user' => false,
		        	'department_id' => $revolve,
		        	'immediate_supervisor_id' => null,
		        	'remember_token' => null,
	        		'created_at' => Carbon\Carbon::now(),
	        		'updated_at' => Carbon\Carbon::now(),
	        	],
	        	[
	        		'employee_number' => '10071824',
	        		'name' => 'Clarissa Marie Arce',
		        	'email' => 'clarissa.arce@personiv.com',
		        	'password' => bcrypt('!welcome10'),
		        	'super_user' => false,
		        	'department_id' => $revolve,
		        	'immediate_supervisor_id' => null,
		        	'remember_token' => null,
	        		'created_at' => Carbon\Carbon::now(),
	        		'updated_at' => Carbon\Carbon::now(),
	        	],
	        	[
	        		'employee_number' => '10079073',
	        		'name' => 'Jon Anthony Padre',
		        	'email' => 'jon.padre@personiv.com',
		        	'password' => bcrypt('!welcome10'),
		        	'super_user' => false,
		        	'department_id' => $revolve,
		        	'immediate_supervisor_id' => null,
		        	'remember_token' => null,
	        		'created_at' => Carbon\Carbon::now(),
	        		'updated_at' => Carbon\Carbon::now(),
	        	],
	        	[
	        		'employee_number' => '10070967',
	        		'name' => 'Mary Rose Doyanan',
		        	'email' => 'mary.doyanan@personiv.com',
		        	'password' => bcrypt('!welcome10'),
		        	'super_user' => false,
		        	'department_id' => $revolve,
		        	'immediate_supervisor_id' => null,
		        	'remember_token' => null,
	        		'created_at' => Carbon\Carbon::now(),
	        		'updated_at' => Carbon\Carbon::now(),
	        	],
	        	[
	        		'employee_number' => '10071483',
	        		'name' => 'Arvin Garcia',
		        	'email' => 'arvin.garcia@personiv.com',
		        	'password' => bcrypt('!welcome10'),
		        	'super_user' => false,
		        	'department_id' => $revolve,
		        	'immediate_supervisor_id' => null,
		        	'remember_token' => null,
	        		'created_at' => Carbon\Carbon::now(),
	        		'updated_at' => Carbon\Carbon::now(),
	        	],
	        	[
	        		'employee_number' => '10070962',
	        		'name' => 'Carlito Legarse',
		        	'email' => 'carlito.legarse@personiv.com',
		        	'password' => bcrypt('!welcome10'),
		        	'super_user' => false,
		        	'department_id' => $revolve,
		        	'immediate_supervisor_id' => null,
		        	'remember_token' => null,
	        		'created_at' => Carbon\Carbon::now(),
	        		'updated_at' => Carbon\Carbon::now(),
	        	],
	        	[
	        		'employee_number' => '10071774',
	        		'name' => 'Maico Monjohn Panis',
		        	'email' => 'maico.panis@personiv.com',
		        	'password' => bcrypt('!welcome10'),
		        	'super_user' => false,
		        	'department_id' => $revolve,
		        	'immediate_supervisor_id' => null,
		        	'remember_token' => null,
	        		'created_at' => Carbon\Carbon::now(),
	        		'updated_at' => Carbon\Carbon::now(),
	        	],
	        	[
	        		'employee_number' => '10070958',
	        		'name' => 'Teddie Salmorin',
		        	'email' => 'teddie.salmorin@personiv.com',
		        	'password' => bcrypt('!welcome10'),
		        	'super_user' => false,
		        	'department_id' => $revolve,
		        	'immediate_supervisor_id' => null,
		        	'remember_token' => null,
	        		'created_at' => Carbon\Carbon::now(),
	        		'updated_at' => Carbon\Carbon::now(),
	        	],
	        	[
	        		'employee_number' => '10070277',
	        		'name' => 'Sheameah Lyn Basamot',
		        	'email' => 'sheameah.basamot@personiv.com',
		        	'password' => bcrypt('!welcome10'),
		        	'super_user' => false,
		        	'department_id' => $revolve,
		        	'immediate_supervisor_id' => null,
		        	'remember_token' => null,
	        		'created_at' => Carbon\Carbon::now(),
	        		'updated_at' => Carbon\Carbon::now(),
	        	],
	        	[
	        		'employee_number' => '10071893',
	        		'name' => 'Edgardo Butawan',
		        	'email' => 'edgardo.butawan@personiv.com',
		        	'password' => bcrypt('!welcome10'),
		        	'super_user' => false,
		        	'department_id' => $revolve,
		        	'immediate_supervisor_id' => null,
		        	'remember_token' => null,
	        		'created_at' => Carbon\Carbon::now(),
	        		'updated_at' => Carbon\Carbon::now(),
	        	],
	        	[
	        		'employee_number' => '10071892',
	        		'name' => 'Rose Anne de Castro',
		        	'email' => 'rose.castro@personiv.com',
		        	'password' => bcrypt('!welcome10'),
		        	'super_user' => false,
		        	'department_id' => $revolve,
		        	'immediate_supervisor_id' => null,
		        	'remember_token' => null,
	        		'created_at' => Carbon\Carbon::now(),
	        		'updated_at' => Carbon\Carbon::now(),
	        	],
	        	[
	        		'employee_number' => '10071890',
	        		'name' => 'Rey Cornico',
		        	'email' => 'rey.cornico@personiv.com',
		        	'password' => bcrypt('!welcome10'),
		        	'super_user' => false,
		        	'department_id' => $revolve,
		        	'immediate_supervisor_id' => null,
		        	'remember_token' => null,
	        		'created_at' => Carbon\Carbon::now(),
	        		'updated_at' => Carbon\Carbon::now(),
	        	],
	        	[
	        		'employee_number' => '10071659',
	        		'name' => 'Lysea Alexis Gruela Montehermoso',
		        	'email' => 'lysea.montehermoso@personiv.com',
		        	'password' => bcrypt('!welcome10'),
		        	'super_user' => false,
		        	'department_id' => $revolve,
		        	'immediate_supervisor_id' => null,
		        	'remember_token' => null,
	        		'created_at' => Carbon\Carbon::now(),
	        		'updated_at' => Carbon\Carbon::now(),
	        	],
	        	[
	        		'employee_number' => '10071889',
	        		'name' => 'Raven Willan Lark Columna',
		        	'email' => 'raven.columna@personiv.com',
		        	'password' => bcrypt('!welcome10'),
		        	'super_user' => false,
		        	'department_id' => $revolve,
		        	'immediate_supervisor_id' => null,
		        	'remember_token' => null,
	        		'created_at' => Carbon\Carbon::now(),
	        		'updated_at' => Carbon\Carbon::now(),
	        	],
	        	[
	        		'employee_number' => '10071894',
	        		'name' => 'Leoncio Espiritu',
		        	'email' => 'leoncio.espiritu@personiv.com',
		        	'password' => bcrypt('!welcome10'),
		        	'super_user' => false,
		        	'department_id' => $revolve,
		        	'immediate_supervisor_id' => null,
		        	'remember_token' => null,
	        		'created_at' => Carbon\Carbon::now(),
	        		'updated_at' => Carbon\Carbon::now(),
	        	],
        	]);
        });
    }
}