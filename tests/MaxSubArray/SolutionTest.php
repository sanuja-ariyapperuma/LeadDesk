<?php

declare(strict_types=1);

namespace Tests\MaxSubArray;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use App\MaxSubArray\Solution;
use PHPUnit\Framework\Attributes\DataProvider;

final class SolutionTest extends TestCase
{
    protected Solution $solution;

    protected function setUp(): void
    {
        parent::setUp();

        $this->solution = new Solution();
    }

    public static function sampleProvider(): array
    {
        return [
            [[-2, 1, 5, -6, 3], 6], // Normal condition
            [[1, 2, 3, 4, 5], 15], // Having all elements as the subarray
            [[-1, -2, -3, -4, 5], 5], // Having only one element as the sub array
            [[10], 10], // Giving 1 element array as the input
        ];
    }

    public function testItReturnsExpectedResultsForEmptySubArray(): void
    {
        //Arrange
        $array = [];

        //Assert - Expecting Exceptions
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage("Input array is empty");

        //Act
        $max = $this->solution->contiguous($array);
    }

    /**
     * @throws Exception if an empty array was passed
     */
    #[DataProvider('sampleProvider')]
    public function testItReturnsExpectedResult(array $array, int $expected): void
    {
        //Arrange

        //Act
        $max = $this->solution->contiguous($array);

        //Assert
        $this->assertEquals($expected, $max);
    }

    /**
     * @throws Exception if an empty array was passed
     */
    public function testItReturnsTypeInt()
    {
        //Arrange
        $sample_array = $this->sampleProvider()[0][0];

        //Act
        $max = $this->solution->contiguous($sample_array);

        //Assert
        $this->assertIsInt($max);
    }

}
