<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 2, //default author by user seeder class
            'company_category_id' => 1,
            'logo' => 'images/companies/logos/',
            'title' => 'Web App developer',
            'description' => 'With a team of experienced engineers, we have provided consulting service and developing service over a wide range of technology products in the field of advertising (Ad_Tech). Solve problems that are cluttered and backlog to bring business efficiency to customers.',
            'website' => 'dac-datatech.vn/',
            'cover_img' => 'nocover',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ];
    }
}
