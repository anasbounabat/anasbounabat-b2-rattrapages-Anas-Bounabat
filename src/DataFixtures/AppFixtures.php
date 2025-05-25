<?php

namespace App\DataFixtures;

use App\Entity\Restaurant;
use App\Entity\Employee;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        $restaurants = [];

        for ($i = 0; $i < 5; $i++) {
            $restaurant = new Restaurant();
            $restaurant->setName($faker->company);
            $restaurant->setLocation($faker->city);
            $restaurant->setCreatedAt($faker->dateTimeBetween('-1 years', 'now'));
            $restaurant->setUpdatedAt(new \DateTime());

            $manager->persist($restaurant);
            $restaurants[] = $restaurant;
        }

        for ($j = 0; $j < 20; $j++) {
            $employee = new Employee();
            $employee->setName($faker->name);
            $employee->setEmail($faker->unique()->safeEmail);
            $employee->setActive($faker->boolean(80));
            $employee->setCreatedAt($faker->dateTimeBetween('-6 months', 'now'));
            $employee->setUpdatedAt(new \DateTime());
            $employee->setRestaurant($restaurants[array_rand($restaurants)]);

            $manager->persist($employee);
        }

        $manager->flush();
    }
}
