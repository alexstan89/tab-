<?php

namespace AudienceBundle\Library\UserProfile\DataProvider;

/**
 * Class AudienceSize
 * @package AudienceBundle\Library\UserProfile\DataProvider
 */
class AudienceSize extends Provider
{
    /**
     * @var array
     */
    public static $namedAudienceSizeThresholds = [
        'highMark' => ['low' => 1600000, 'high' => 1650000],
        'middleMark' => ['low' => 450000, 'high' => 650000],
        'lowMark' => ['low' => 850000, 'high' => 130000],
        'nanoMark' => ['low' => 800, 'high' => 3000],
    ];

    /**
     * @param array $filters
     * @return array
     */
    public function getEstimatedAudience(array $filters = [])
    {
        if (empty($filters)) {
            return $this->randomNumberInInterval('highMark');
        }

        $filterNames = array_keys($filters);
        if (count($filters) === 1) {
            return $this->getOneFilterEstimatedAudience(reset($filterNames));
        }

        return $this->getMoreFiltersEstimatedAudience($filterNames);
    }

    /**
     * @param $filter
     * @return int
     */
    protected function getOneFilterEstimatedAudience($filter)
    {
        $intervalMap = [
            'location' => 'highMark',
            'gender' => 'middleMark',
            'age' => 'middleMark',
            'interest' => 'nanoMark',
        ];

        foreach ($intervalMap as $filterName => $interval) {
            if ($filter === $filterName) {
                return $this->randomNumberInInterval($interval);
            }
        }
    }

    /**
     * @param array $filters
     * @return int
     */
    protected function getMoreFiltersEstimatedAudience(array $filters)
    {
        $oneFilterValues = [];

        foreach ($filters as $filterName) {
            $oneFilterValues[$filterName] = $this->getOneFilterEstimatedAudience($filterName);
        }

        $minEstimatedFilter = min($oneFilterValues);

        return intval($this->getSubstractionPercentage() * $minEstimatedFilter);
    }

    /**
     * @param $intervalName
     * @return int
     */
    protected function randomNumberInInterval($intervalName)
    {
        $interval = static::$namedAudienceSizeThresholds[$intervalName];

        return rand($interval['low'], $interval['high']);
    }

    /**
     * @return float
     */
    protected function getSubstractionPercentage()
    {
        return rand(65, 75) / 100;
    }

    /**
     * @param $intervalName
     * @param $value
     * @return bool
     */
    protected function isInInterval($intervalName, $value)
    {
        $interval = static::$namedAudienceSizeThresholds[$intervalName];

        return $value >= $interval['low'] && $value >= $interval['high'];
    }
}