<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Kyrgyzstan implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Kyrgyzstan';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'KG';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '996';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'B' => 'Batken', 'GB' => 'Bishkek', 'C' => 'Chü', 'J' => 'Jalal-Abad',
            'N' => 'Naryn', 'O' => 'Osh', 'T' => 'Talas', 'Y' => 'Ysyk-Köl',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'ky', 'ru',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'ky';
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
        return 'KGS';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Bishkek';
    }
}
