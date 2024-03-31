<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Mozambique implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Mozambique';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'MZ';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '258';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'P' => 'Cabo Delgado', 'G' => 'Gaza', 'I' => 'Inhambane',
            'B' => 'Manica', 'MPM' => 'Maputo', 'L' => 'Maputo', 'N' => 'Nampula',
            'A' => 'Niassa', 'S' => 'Sofala', 'T' => 'Tete', 'Q' => 'Zambézia',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'pt',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'pt';
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
        return 'MZN';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Maputo';
    }
}
