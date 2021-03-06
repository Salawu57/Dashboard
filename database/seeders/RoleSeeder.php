<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['name' => 'SuperAdministrator', 'created_at'=> Carbon::now()],
            ['name' => 'Administrator', 'created_at'=> Carbon::now()]
        ]);
    }
}
