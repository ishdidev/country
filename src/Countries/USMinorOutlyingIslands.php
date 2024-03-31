<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class USMinorOutlyingIslands implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'U.S. Minor Outlying Islands';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'UM';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '1';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '81' => 'Baker Island', '84' => 'Howland Island', '86' => 'Jarvis Island',
            '67' => 'Johnston Atoll', '89' => 'Kingman Reef', '71' => 'Midway Islands',
            '76' => 'Navassa Island', '95' => 'Palmyra Atoll', '79' => 'Wake Island',
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
        return 'USD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return '';
    }
}
