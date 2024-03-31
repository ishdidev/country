<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Tuvalu implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Tuvalu';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'TV';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '688';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'FUN' => 'Funafuti', 'NMG' => 'Nanumanga', 'NMA' => 'Nanumea',
            'NIT' => 'Niutao', 'NUI' => 'Nui', 'NKF' => 'Nukufetau',
            'NKL' => 'Nukulaelae', 'VAI' => 'Vaitupu',
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
        return 'OC';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'AUD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Funafuti';
    }
}
