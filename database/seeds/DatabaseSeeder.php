<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserTableSeeder::class); //muốn chạy bảng nào trước thì đặt lên đầu
         $this->call(CatsTableSeeder::class); //muốn chạy bảng nào trước thì đặt lên đầu
         $this->call(BreedsTableSeeder::class); //muốn chạy bảng nào trước thì đặt lên đầu
    }
}
