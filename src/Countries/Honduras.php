<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Honduras implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Honduras';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'HN';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '504';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'AT' => 'Atlántida', 'CH' => 'Choluteca', 'CL' => 'Colón',
            'CM' => 'Comayagua', 'CP' => 'Copán', 'CR' => 'Cortés',
            'EP' => 'El Paraíso', 'FM' => 'Francisco Morazán', 'GD' => 'Gracias a Dios',
            'IN' => 'Intibucá', 'IB' => 'Islas de la Bahía', 'LP' => 'La Paz',
            'LE' => 'Lempira', 'OC' => 'Ocotepeque', 'OL' => 'Olancho',
            'SB' => 'Santa Bárbara', 'VA' => 'Valle', 'YO' => 'Yoro',
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
        return 'HNL';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Tegucigalpa';
    }
}
