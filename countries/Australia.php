<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Australia implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Australia';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'AU';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '61';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'ACT' => 'Australian Capital Territory', 'NSW' => 'New South Wales',
            'NT' => 'Northern Territory', 'QLD' => 'Queensland', 'SA' => 'South Australia',
            'TAS' => 'Tasmania', 'VIC' => 'Victoria', 'WA' => 'Western Australia',
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
        return 'OC';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'AUD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Canberra';
    }
}
