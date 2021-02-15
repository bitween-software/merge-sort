<?php

namespace Bitween;

class MergeSort
{
    public function sort(array $input): array
    {
        if($this->isEmpty($input) || $this->hasOne($input)) {
            return $input;
        }

        $chunkedInput = $this->split($input);

        $sortedFirstHalve = $this->sort($chunkedInput[0]);
        $sortedSecondHalve = $this->sort($chunkedInput[1]);

        return $this->merge($sortedFirstHalve, $sortedSecondHalve);
    }

    private function merge(array $firstHalve, array $secondHalve): array
    {
        $result = [];

        while (!$this->isBothEmpty($firstHalve, $secondHalve)) {
            if ($this->shouldShiftFromFirstHalve($secondHalve, $firstHalve)) {
                $result[] = array_shift($firstHalve);
            } else {
                $result[] = array_shift($secondHalve);
            }
        }

        return $result;
    }

    private function split(array $input): array
    {
        $inputSize = count($input);
        $splitSize = ceil($inputSize / 2);

        return array_chunk($input, $splitSize);
    }

    private function hasOne(array $input): bool
    {
        return count($input) === 1;
    }

    private function isBothEmpty(array $firstHalve, array $secondHalve): bool
    {
        return $this->isEmpty($firstHalve) && $this->isEmpty($secondHalve);
    }

    private function shouldShiftFromFirstHalve(array $secondHalve, array $firstHalve): bool
    {
        return $this->isEmpty($secondHalve) || (!$this->isEmpty($firstHalve) && $firstHalve[0] <= $secondHalve[0]);
    }

    private function isEmpty(array $firstHalve): bool
    {
        return count($firstHalve) === 0;
    }
}