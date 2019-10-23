<?php

use App\Models\Pages;
use Illuminate\Database\Seeder;

/**
 * Class PagesTableSeeder
 */
class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @param  Pages $page The database model class for the pages in the application.
     * @return void
     */
    public function run(Pages $page): void
    {
        $page->create([
            'identifier' => 'petition',
            'title' => 'Laat belgie het de ban op kernwapens ondersteunen.',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pellentesque nec nam aliquam sem et tortor consequat id porta',
        ]);
    }
}
