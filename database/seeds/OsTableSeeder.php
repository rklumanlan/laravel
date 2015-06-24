<?php

use Illuminate\Database\Seeder;
use App\Framework as Fwork;
use App\OS as Os;
use App\Language as Lang;

class OsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
      // clear table
      Fwork::truncate();
      Fwork::create( [
          'fwork_desc' => 'Bootstrap' ,
          'created_at' => New DateTime ,
          'updated_at' => New DateTime ,
      ] );
      Fwork::create( [
          'fwork_desc' => 'Jquery' ,
          'created_at' => New DateTime ,
          'updated_at' => New DateTime ,
      ] );
      Fwork::create( [
          'fwork_desc' => 'AJAX' ,
          'created_at' => New DateTime ,
          'updated_at' => New DateTime ,
      ] );
      Fwork::create( [
          'fwork_desc' => 'AngularJS' ,
          'created_at' => New DateTime ,
          'updated_at' => New DateTime ,
      ] );
      Fwork::create( [
          'fwork_desc' => 'CodeIgniter' ,
          'created_at' => New DateTime ,
          'updated_at' => New DateTime ,
      ] );
      Fwork::create( [
          'fwork_desc' => 'Laravel' ,
          'created_at' => New DateTime ,
          'updated_at' => New DateTime ,
      ] );
      Fwork::create( [
          'fwork_desc' => 'Ruby on Rails' ,
          'created_at' => New DateTime ,
          'updated_at' => New DateTime ,
      ] );


      // clear table
      OS::truncate();
      OS::create( [
          'os_desc' => 'Windows' ,
          'created_at' => New DateTime ,
          'updated_at' => New DateTime ,
      ] );
      OS::create( [
          'os_desc' => 'MAC OS' ,
          'created_at' => New DateTime ,
          'updated_at' => New DateTime ,
      ] );
      OS::create( [
          'os_desc' => 'Linux' ,
          'created_at' => New DateTime ,
          'updated_at' => New DateTime ,
      ] );
      OS::create( [
          'os_desc' => 'Android' ,
          'created_at' => New DateTime ,
          'updated_at' => New DateTime ,
      ] );
      OS::create( [
          'os_desc' => 'IOS' ,
          'created_at' => New DateTime ,
          'updated_at' => New DateTime ,
      ] );

      // clear table
      Lang::truncate();
      Lang::create( [
          'lang_desc' => 'HTML' ,
          'created_at' => New DateTime ,
          'updated_at' => New DateTime ,
      ] );
      Lang::create( [
          'lang_desc' => 'PHP' ,
          'created_at' => New DateTime ,
          'updated_at' => New DateTime ,
      ] );
      Lang::create( [
          'lang_desc' => 'Javascript' ,
          'created_at' => New DateTime ,
          'updated_at' => New DateTime ,
      ] );
      Lang::create( [
          'lang_desc' => 'MySQL' ,
          'created_at' => New DateTime ,
          'updated_at' => New DateTime ,
      ] );
      Lang::create( [
          'lang_desc' => '.Net' ,
          'created_at' => New DateTime ,
          'updated_at' => New DateTime ,
      ] );
      Lang::create( [
          'lang_desc' => 'Asp.net' ,
          'created_at' => New DateTime ,
          'updated_at' => New DateTime ,
      ] );
      Lang::create( [
          'lang_desc' => 'C' ,
          'created_at' => New DateTime ,
          'updated_at' => New DateTime ,
      ] );
      Lang::create( [
          'lang_desc' => 'C++' ,
          'created_at' => New DateTime ,
          'updated_at' => New DateTime ,
      ] );
      Lang::create( [
          'lang_desc' => 'C#' ,
          'created_at' => New DateTime ,
          'updated_at' => New DateTime ,
      ] );
      Lang::create( [
          'lang_desc' => 'Visual Basic' ,
          'created_at' => New DateTime ,
          'updated_at' => New DateTime ,
      ] );
	}

}
