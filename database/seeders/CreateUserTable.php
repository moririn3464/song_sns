<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CreateUserTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = 
        [
          [
            'name' => 'test',
            'email' => 'moririn3464@gmail.com',
            'password' => bcrypt('oneok3464'),
          ],
          [
            'name' => 'test2',
            'email' => 'hogehoge@hogehoge.com',
            'password' => bcrypt('oneoklove3464'),
          ]
        ];

        $now = Carbon::now();

        foreach ($params as $param) {
          $param['created_at'] = $now;
          $param['updated_at'] = $now;
          DB::table('users')->insert($param);
        }
    }
}
