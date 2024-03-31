<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Mauritius implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Mauritius';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'MU';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '230';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'AG' => 'Agalega Islands', 'BR' => 'Beau Bassin-Rose Hill', 'BL' => 'Black River',
            'CC' => 'Cargados Carajos Shoals', 'CU' => 'Curepipe', 'FL' => 'Flacq',
            'GP' => 'Grand Port', 'MO' => 'Moka', 'PA' => 'Pamplemousses', 'PW' => 'Plaines Wilhems',
            'PL' => 'Port Louis', 'PU' => 'Port Louis', 'QB' => 'Quatre Bornes',
            'RR' => 'Rivière du Rempart', 'RO' => 'Rodrigues Island', 'SA' => 'Savanne',
            'VP' => 'Vacoas-Phoenix',
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
        return 'MUR';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Port Louis';
    }
}
