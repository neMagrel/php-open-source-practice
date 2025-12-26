<?php

namespace App;

/**
 * Простой калькулятор для выполнения арифметических операций.
 */
class Calculator
{
    /**
     * Складывает два числа.
     *
     * @param float $a Первое слагаемое
     * @param float $b Второе слагаемое
     * @return float Сумма чисел
     */
    public function add(float $a, float $b): float
    {
        return $a + $b;
    }

    /**
     * Умножает два числа.
     *
     * @param float $a Первый множитель
     * @param float $b Второй множитель
     * @return float Произведение чисел
     */
    public function multiply(float $a, float $b): float
    {
        return $a * $b;
    }
}
