<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Cameroon implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Cameroon';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'CM';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '237';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'AD' => 'Adamaoua', 'CE' => 'Centre', 'ES' => 'East', 'EN' => 'Far North',
            'LT' => 'Littoral', 'NO' => 'North', 'NW' => 'North-West',
            'SU' => 'South', 'SW' => 'South-West', 'OU' => 'West',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'en', 'fr',
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
        return 'XAF';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Yaoundé';
    }
}
