<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Ecuador implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Ecuador';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'EC';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '593';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'A' => 'Azuay', 'B' => 'Bolívar', 'C' => 'Carchi',
            'F' => 'Cañar', 'H' => 'Chimborazo', 'X' => 'Cotopaxi',
            'O' => 'El Oro', 'E' => 'Esmeraldas', 'W' => 'Galápagos',
            'G' => 'Guayas', 'I' => 'Imbabura', 'L' => 'Loja',
            'R' => 'Los Ríos', 'M' => 'Manabí', 'S' => 'Morona-Santiago',
            'N' => 'Napo', 'D' => 'Orellana', 'Y' => 'Pastaza',
            'P' => 'Pichincha', 'SE' => 'Santa Elena', 'SD' => 'Santo Domingo de los Tsáchilas',
            'U' => 'Sucumbíos', 'T' => 'Tungurahua', 'Z' => 'Zamora-Chinchipe',
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
        return 'USD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Quito';
    }
}
