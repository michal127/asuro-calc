<?php
declare(strict_types=1);

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CalculatorController
{
    /**
     * @Route("/calc/add/{num1}/{num2}", methods={"GET"}, name="app_calc_add")
     */
    public function add(int $num1, int $num2): JsonResponse
    {
        return $this->generateResult($num1 + $num2);
    }

    /**
     * @Route("/calc/subtract/{num1}/{num2}", methods={"GET"}, name="app_calc_subtract")
     */
    public function subtract(int $num1, int $num2): JsonResponse
    {
        return $this->generateResult($num1 - $num2);
    }

    /**
     * @Route("/calc/multiply/{num1}/{num2}", methods={"GET"}, name="app_calc_multiply")
     */
    public function multiply(int $num1, int $num2): JsonResponse
    {
        return $this->generateResult($num1 * $num2);
    }

    /**
     * @Route("/calc/divide/{num1}/{num2}", methods={"GET"}, name="app_calc_divide")
     */
    public function divide(int $num1, int $num2): JsonResponse
    {
        return $this->generateResult($num1 / $num2);
    }

    private function generateResult(float $result): JsonResponse
    {
        return new JsonResponse(['result' => $result]);
    }
}