<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Venezuela implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Venezuela';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'VE';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '58';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'Z' => 'Amazonas', 'B' => 'Anzoátegui', 'C' => 'Apure',
            'D' => 'Aragua', 'E' => 'Barinas', 'F' => 'Bolívar',
            'G' => 'Carabobo', 'H' => 'Cojedes', 'Y' => 'Delta Amacuro',
            'W' => 'Dependencias Federales', 'A' => 'Distrito Capital',
            'I' => 'Falcón', 'J' => 'Guárico', 'K' => 'Lara',
            'M' => 'Miranda', 'N' => 'Monagas', 'L' => 'Mérida',
            'O' => 'Nueva Esparta', 'P' => 'Portuguesa', 'R' => 'Sucre',
            'T' => 'Trujillo', 'S' => 'Táchira', 'X' => 'Vargas',
            'U' => 'Yaracuy', 'V' => 'Zulia',
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
        return 'VES';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Caracas';
    }
}
