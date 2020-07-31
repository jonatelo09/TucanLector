<?php

use Illuminate\Database\Seeder;
use App\Career;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Career::create([
			'name' => 'contador publico',
			'icon' => 'fas fa-calculator',
		]);
		Career::create([
			'name' => 'ing. en gestion empresarial',
			'icon' => 'fas fa-chart-area',
		]);
		Career::create([
			'name' => 'ing. civil',
			'icon' => 'fas fa-road',
		]);
		Career::create([
			'name' => 'lic. en administración',
			'icon' => 'fas fa-chart-bar',
		]);
		Career::create([
			'name' => 'ing. en sistemas computacionales',
			'icon' => 'fas fa-laptop',
		]);
		Career::create([
			'name' => 'ing. mecatronica',
			'icon' => 'fas fa-cogs',
		]);
		Career::create([
			'name' => 'ing. en administración',
			'icon' => 'fas fa-chart-line',
		]);
		Career::create([
			'name' => 'ing. informática',
			'icon' => 'fas fa-desktop',
		]);
		Career::create([
			'name' => 'ing. electromecánica',
			'icon' => 'fas fa-wrench',
		]);
    }
}
