<?php

declare(strict_types=1);

namespace App\Anagram;

/**
 * AUTHOR : SANUJA ARIYAPPERUMA
 * PHP VERSION : 8.2.4
 */
final class Solution implements Anagram
{
    /**
     * Description:
     *
     * To achieve this goal there are multiple paths available.
     * One path is to sort both strings and compare them with each other. The solution is simple but since we have to
     * choose a sorting algorithm like quick sort or mergesort however it will get O(n log n) time complexity
     *
     * Refining the solution bit deeper, counting character solution can be achieved with a O(n) time complexity
     *
     * @param string $word1
     * @param string $word2
     * @return bool
     */
    public function isAnagram(string $word1, string $word2): bool
    {
        $word1Length = strlen($word1);
        $word2Length = strlen($word2);

        //Check if the letter count on two words are different
        if ($word1Length != $word2Length) {
            return false;
        }

        $count = array();

        for ($i = 0; $i < $word1Length; $i++) {
            $count[$word1[$i]] = ($count[$word1[$i]] ?? 0) + 1;
            $count[$word2[$i]] = ($count[$word2[$i]] ?? 0) - 1;
        }

        foreach ($count as $value) {
            if ($value != 0) {
                return false;
            }
        }
        return true;
    }
}