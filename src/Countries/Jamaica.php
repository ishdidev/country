<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Jamaica implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Jamaica';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'JM';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '1876';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '13' => 'Clarendon', '09' => 'Hanover', '01' => 'Kingston',
            '12' => 'Manchester', '04' => 'Portland', '02' => 'Saint Andrew',
            '06' => 'Saint Ann', '14' => 'Saint Catherine', '11' => 'Saint Elizabeth',
            '08' => 'Saint James', '05' => 'Saint Mary', '03' => 'Saint Thomas',
            '07' => 'Trelawny', '10' => 'Westmoreland',
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
        return 'NA';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'JMD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Kingston';
    }
}
