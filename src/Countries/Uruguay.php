<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Uruguay implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Uruguay';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'UY';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '598';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'AR' => 'Artigas', 'CA' => 'Canelones', 'CL' => 'Cerro Largo',
            'CO' => 'Colonia', 'DU' => 'Durazno', 'FS' => 'Flores',
            'FD' => 'Florida', 'LA' => 'Lavalleja', 'MA' => 'Maldonado',
            'MO' => 'Montevideo', 'PA' => 'Paysandú', 'RV' => 'Rivera',
            'RO' => 'Rocha', 'RN' => 'Río Negro', 'SA' => 'Salto',
            'SJ' => 'San José', 'SO' => 'Soriano', 'TA' => 'Tacuarembó',
            'TT' => 'Treinta y Tres',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'es',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'es';
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
        return 'UYI,UYU';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Montevideo';
    }
}
