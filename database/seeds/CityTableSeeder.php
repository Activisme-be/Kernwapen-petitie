<?php

use App\Models\City;
use App\Models\Postal;
use App\Models\Province;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use League\Csv\Reader;
use League\Csv\Statement;

class CityTableSeeder extends Seeder
{
    public function run(City $cities, Province $province, Postal $postal, Statement $statement): void
    {
        $resourceStub  = Reader::createFromPath(database_path('seeds/stubs/belgian-cities-geocoded.csv'), 'r')
            ->setHeaderOffset(0);

        foreach ($statement->process($resourceStub) as $city) {
            DB::transaction(function () use ($cities, $province, $postal, $city): void {

                // Data preparation
                $province = $province->firstOrCreate(['name' => $city['province']]);
                $postal   = $postal->firstOrCreate(['code' => $city['postal']]);
                $city     = $cities->firstOrCreate($this->cityInformation($city));

                // Relation attachments
                $city->setPostal($postal)->setProvince($province)->save();
            }, 4);
        }
    }

    private function cityInformation(array $city): array
    {
        return ['name' => $city['name'], 'lat' => $city['lat'], 'lng' => $city['lng']];
    }
}
