<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Argentina implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Argentina';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'AR';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '54';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'B' => 'Buenos Aires', 'K' => 'Catamarca', 'H' => 'Chaco',
            'U' => 'Chubut', 'C' => 'Ciudad Autónoma de Buenos Aires',
            'W' => 'Corrientes', 'X' => 'Córdoba', 'E' => 'Entre Ríos',
            'P' => 'Formosa', 'Y' => 'Jujuy', 'L' => 'La Pampa',
            'F' => 'La Rioja', 'M' => 'Mendoza', 'N' => 'Misiones',
            'Q' => 'Neuquén', 'R' => 'Río Negro', 'A' => 'Salta',
            'J' => 'San Juan', 'D' => 'San Luis', 'Z' => 'Santa Cruz',
            'S' => 'Santa Fe', 'G' => 'Santiago del Estero',
            'V' => 'Tierra del Fuego', 'T' => 'Tucumán',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'es', 'gn',
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
        return 'ARS';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Buenos Aires';
    }
}
