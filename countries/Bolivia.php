<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Bolivia implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Bolivia';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'BO';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '591';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'H' => 'Chuquisaca', 'C' => 'Cochabamba', 'B' => 'El Beni',
            'L' => 'La Paz', 'O' => 'Oruro', 'N' => 'Pando',
            'P' => 'Potosí', 'S' => 'Santa Cruz', 'T' => 'Tarija',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'es', 'ay', 'qu',
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
        return 'BOB,BOV';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Sucre';
    }
}
