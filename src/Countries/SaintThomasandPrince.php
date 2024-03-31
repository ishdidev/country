<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class SaintThomasandPrince implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'São Tomé and Príncipe';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'ST';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '239';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'P' => 'Príncipe', 'S' => 'São Tomé',
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
        return 'STN';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'São Tomé';
    }
}
