<?php

declare(strict_types=1);

namespace App\MaxSubArray;

use InvalidArgumentException;

/**
 * AUTHOR : SANUJA ARIYAPPERUMA
 * PHP VERSION : 8.2.4
 */
final class Solution implements MaxSubarray
{
    /**
     * Description:
     *
     * To implement the solution I have used Kadane's algorithm
     * There are few approaches to achieve this goal, but the time complexity of most of them will be very high
     * Since Kadane's algorithm is the only one having O(n) I build the solution with it
     *
     *
     * @param array $array input array
     * @return int maximum possible sum of contiguous subarray
     * @throws Exception if an empty array was passed
     */
    public function contiguous(array $array): int
    {
        if (empty($array)) {
            throw new InvalidArgumentException("Input array is empty");
        }

        $max_sum = $current_sum = $array[0];

        for ($i = 1; $i < count($array); $i++) {
            $current_sum = max($array[$i] + $current_sum, $array[$i]);
            $max_sum = max($current_sum, $max_sum);
        }

        return $max_sum;
    }
}