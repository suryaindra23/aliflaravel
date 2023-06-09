<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataBaseController extends Controller
{
    class DecisionTreeHelper
{
    /**
     * Menghitung entropy dari suatu dataset.
     *
     * @param Collection $dataset
     * @param string $targetColumn
     * @return float
     */
    public static function calculateEntropy(Collection $dataset, string $targetColumn): float
    {
        $totalSamples = $dataset->count();
        $classCounts = $dataset->countBy($targetColumn);

        $entropy = 0;

        foreach ($classCounts as $classCount) {
            $probability = $classCount / $totalSamples;
            $entropy -= $probability * log($probability, 2);
        }

        return $entropy;
    }

    /**
     * Menghitung gain untuk setiap atribut pada dataset.
     *
     * @param Collection $dataset
     * @param string $targetColumn
     * @return array
     */
    public static function calculateGain(Collection $dataset, string $targetColumn): array
    {
        $totalSamples = $dataset->count();
        $totalEntropy = self::calculateEntropy($dataset, $targetColumn);
        $attributes = $dataset->keys()->reject(fn ($attribute) => $attribute === $targetColumn);

        $gains = [];

        foreach ($attributes as $attribute) {
            $attributeValues = $dataset->pluck($attribute)->unique();
            $attributeEntropy = 0;

            foreach ($attributeValues as $value) {
                $subset = $dataset->where($attribute, $value);
                $subsetSamples = $subset->count();
                $subsetEntropy = self::calculateEntropy($subset, $targetColumn);
                $attributeEntropy += ($subsetSamples / $totalSamples) * $subsetEntropy;
            }

            $gain = $totalEntropy - $attributeEntropy;
            $gains[$attribute] = $gain;
        }

        return $gains;
    }    
}
