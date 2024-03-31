<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Singapore implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Singapore';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'SG';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '65';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '01' => 'Central Singapore', '02' => 'North East', '03' => 'North West',
            '04' => 'South East', '05' => 'South West',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'en', 'ms', 'ta', 'zh',
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
        return 'AS';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'SGD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Singapore';
    }
}
