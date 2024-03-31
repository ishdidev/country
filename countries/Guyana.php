<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Guyana implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Guyana';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'GY';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '592';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'BA' => 'Barima-Waini', 'CU' => 'Cuyuni-Mazaruni', 'DE' => 'Demerara-Mahaica',
            'EB' => 'East Berbice-Corentyne', 'ES' => 'Essequibo Islands-West Demerara',
            'MA' => 'Mahaica-Berbice', 'PM' => 'Pomeroon-Supenaam', 'PT' => 'Potaro-Siparuni',
            'UD' => 'Upper Demerara-Berbice', 'UT' => 'Upper Takutu-Upper Essequibo',
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
        return 'SA';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'GYD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Georgetown';
    }
}
