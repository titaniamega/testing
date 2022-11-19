<?php

use Illuminate\Database\Seeder;
use App\JabatanModel;

class JabatanSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jabatan = ["Front-End Dev", "Back-End Dev", "Fullstack Dev"];
        for($i = 0;$i < count($jabatan);$i++){
            JabatanModel::insert([
                "name" => $jabatan[$i],
                "created_at" => Carbon\Carbon::now(),
                "updated_at" => Carbon\Carbon::now()
            ]);
        }
    }
}
