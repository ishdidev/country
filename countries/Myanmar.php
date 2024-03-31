<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Myanmar implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Myanmar [Burma]';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'MM';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '95';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '07' => 'Ayeyarwady', '02' => 'Bago', '14' => 'Chin',
            '11' => 'Kachin', '12' => 'Kayah', '13' => 'Kayin',
            '03' => 'Magway', '04' => 'Mandalay', '15' => 'Mon',
            '16' => 'Rakhine', '01' => 'Sagaing', '17' => 'Shan',
            '05' => 'Tanintharyi', '06' => 'Yangon',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'my',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'my';
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
        return 'MMK';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Naypyidaw';
    }
}
