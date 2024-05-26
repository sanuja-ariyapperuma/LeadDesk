<?php

declare(strict_types=1);

namespace Tests\Anagram;

use PHPUnit\Framework\TestCase;
use App\Anagram\Solution;

class SolutionTest extends TestCase
{
    protected Solution $solution;

    protected function setUp(): void
    {
        parent::setUp();

        $this->solution = new Solution();
    }

    public function testItReturnTypeBool() : void
    {
        //Arrange

        //Act
        $result = $this->solution->isAnagram("car", "rac");

        //Assert
        $this->assertIsBool($result);
    }

    public function testAnagramForCorrect() : void
    {
        //Arrange

        //Act
        $result = $this->solution->isAnagram("car", "rac");

        //Assert
        $this->assertTrue($result);
    }

    public function testAnagramForIncorrect() : void
    {
        //Arrange

        //Act
        $result = $this->solution->isAnagram("car", "abc");

        //Assert
        $this->assertFalse($result);
    }

    public function testAnagramForDifferentCharacterCountWords():void{
        //Arrange

        //Act
        $result = $this->solution->isAnagram("car", "bicycle");

        //Assert
        $this->assertFalse($result);
    }
}