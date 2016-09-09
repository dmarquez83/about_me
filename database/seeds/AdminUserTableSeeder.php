<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
/**
 * Created by PhpStorm.
 * User: dmarquez
 * Date: 09/09/16
 * Time: 10:56 AM
 */
class AdminUserTableSeeder extends Seeder
{
    public function run(){
        \DB::table('users')->insert(array(
           'first_name'     => 'Root',
           'last_name'     => 'Root',
           'email'    => 'root@about_me.com',
           'password' =>  \Hash::make('123456'),
           'type' =>  'admin',
           'created_at' => new DateTime,
           'updated_at' =>  new Datetime,
        ));
    }
}