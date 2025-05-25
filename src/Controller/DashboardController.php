<?php

namespace App\Controller;

use App\Repository\RestaurantRepository;
use App\Repository\EmployeeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DashboardController extends AbstractController
{
    #[Route('/', name: 'app_dashboard_index', methods: ['GET'])]
    public function index(
        RestaurantRepository $restaurantRepo,
        EmployeeRepository $employeeRepo
    ): Response {
        return $this->render('dashboard/index.html.twig', [
            'nbRestaurants' => $restaurantRepo->countAll(),
            'nbEmployees' => $employeeRepo->countAll(),
            'nbActiveEmployees' => $employeeRepo->count(['active' => true]),
            'employees' => $employeeRepo->findAll(),
            'restaurants' => $restaurantRepo->findAll(),
        ]);
    }
}
