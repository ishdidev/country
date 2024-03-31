<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Madagascar implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Madagascar';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'MG';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '261';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'T' => 'Antananarivo', 'D' => 'Antsiranana', 'F' => 'Fianarantsoa',
            'M' => 'Mahajanga', 'A' => 'Toamasina', 'U' => 'Toliara',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'fr', 'mg',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'fr';
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
        return 'MGA';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Antananarivo';
    }
}
