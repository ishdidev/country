<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Turkmenistan implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Turkmenistan';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'TM';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '993';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'A' => 'Ahal', 'S' => 'Aşgabat', 'B' => 'Balkan',
            'D' => 'Daşoguz', 'L' => 'Lebap', 'M' => 'Mary',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'tk', 'ru',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'tk';
    }

    /**
     * {@inheritdoc}
     */
    public function getContinent(): string
    {
        return 'AS';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'TMT';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Ashgabat';
    }
}
