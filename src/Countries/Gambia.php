<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Gambia implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Gambia';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'GM';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '220';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'B' => 'Banjul', 'M' => 'Central River', 'L' => 'Lower River',
            'N' => 'North Bank', 'U' => 'Upper River', 'W' => 'Western',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'en',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'en';
    }

    /**
     * {@inheritdoc}
     */
    public function getContinent(): string
    {
        return 'AF';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'GMD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Banjul';
    }
}
