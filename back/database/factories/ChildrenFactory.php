<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Children;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChildrenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Children::class;

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
            'last_name' => $lastName,
            'first_name' => $firstName,
            'birthday'=> $birthday,
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'register_data' => $register,
            'size' => $this->faker->randomFloat(2,1.3,1.7),
            'token'=> Crypt::encryptString($lastName." ".$firstName." ".$birthday." ".$register),
            'user_id' =>  User::all()->random()->id,
            'note' => $this->faker->word()
        ];
    }
}
