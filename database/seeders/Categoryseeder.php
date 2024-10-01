<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Categoryseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('categories')->insert([
           [
            'name' => 'programing',
            'slug' => 'programing adalah ....',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
           ],
           [
            'name' => 'edtor',
            'slug' => 'editor adalah ....',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
           ],
           [
            'name' => 'desainer',
            'slug' => 'desainer adalah ....',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
           ],
        ]);
    }
}
