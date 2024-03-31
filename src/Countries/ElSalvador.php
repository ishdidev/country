<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class ElSalvador implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'El Salvador';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'SV';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '503';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'AH' => 'Ahuachapán', 'CA' => 'Cabañas', 'CH' => 'Chalatenango', 'CU' => 'Cuscatlán',
            'LI' => 'La Libertad', 'PA' => 'La Paz', 'UN' => 'La Unión',
            'MO' => 'Morazán', 'SM' => 'San Miguel', 'SS' => 'San Salvador',
            'SV' => 'San Vicente', 'SA' => 'Santa Ana', 'SO' => 'Sonsonate',
            'US' => 'Usulután',
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
        return 'NA';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'SVC,USD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'San Salvador';
    }
}
