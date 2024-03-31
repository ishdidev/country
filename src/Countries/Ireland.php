<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Ireland implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Ireland';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'IE';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '353';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'C' => 'Connaught', 'L' => 'Leinster', 'M' => 'Munster',
            'U' => 'Ulster',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'ga', 'en',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'ga';
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
        return 'Dublin';
    }
}
