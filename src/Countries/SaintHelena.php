<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class SaintHelena implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Saint Helena';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'SH';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '290';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'AC' => 'Ascension', 'HL' => 'Saint Helena', 'TA' => 'Tristan da Cunha',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'en',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'en';
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
        return 'SHP';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Jamestown';
    }
}
