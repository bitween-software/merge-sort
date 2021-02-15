<?php

namespace Tests;

use Bitween\MergeSort;
use PHPUnit\Framework\TestCase;

class MergeSortTest extends TestCase
{
    /**
     * @dataProvider provideExamples
     */
    public function testItSortsAnArrayOfNumbers(array $givenInput, array $expectedOutput): void
    {
        $mergeSort = new MergeSort();

        $actualOutput = $mergeSort->sort($givenInput);

        self::assertEquals($expectedOutput, $actualOutput, 'The input array was not sorted correctly.');
    }

    public function provideExamples(): array
    {
        return [
            'A simple example' => [ [ 3, 2, 1 ], [ 1, 2, 3 ] ],
            'An empty array' => [ [], [] ],
            'An array with one element' => [ [1], [1] ]
        ];
    }
}