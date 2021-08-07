<?php

namespace Database\Factories;

use App\Models\Enfant;
use App\Models\Responsable;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Database\Eloquent\Factories\Factory;

class EnfantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Enfant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['male', 'female']);
        $lastName = $this->faker->lastName();
        $firstName = $this->faker->firstName($gender);
        $birthday = $this->faker->date('Y-m-d', $max = '2014-01-01');
        $register =  $this->faker->date('Y-m-d', $max = 'now');

        return [
            'first_name' => $firstName,
            'last_name' => $lastName,
            'adress'=> $this->faker->streetAddress(),
            'postal_code'=> $this->faker->postcode(),
            'city'=> $this->faker->city(),
            'birthday' => $birthday,
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'register_date' => $register,
            'size' =>$this->faker->randomFloat(2, 1.3,1.6),
            'photo'=>$this->faker->randomElement([0,1]),
            'token' => Crypt::encryptString($lastName." ".$firstName." ".$birthday." ".$register),
            'responsable_id' =>  Responsable::all()->random()->id,

        ];
    }
}
