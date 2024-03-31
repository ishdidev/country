<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Luxembourg implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Luxembourg';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'LU';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '352';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'D' => 'Diekirch', 'G' => 'Grevenmacher', 'L' => 'Luxembourg',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'fr', 'de', 'lb',
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
        return 'EU';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'EUR';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Luxembourg';
    }
}
