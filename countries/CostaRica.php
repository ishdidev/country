<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class CostaRica implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Costa Rica';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'CR';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '506';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'A' => 'Alajuela', 'C' => 'Cartago', 'G' => 'Guanacaste',
            'H' => 'Heredia', 'L' => 'Limón', 'P' => 'Puntarenas', 'SJ' => 'San José',
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
        return 'CRC';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'San José';
    }
}
