<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class CaymanIslands implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Cayman Islands';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'KY';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '1345';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'Cayman Islands' => 'Cayman Islands',
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
        return 'NA';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'KYD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'George Town';
    }
}
