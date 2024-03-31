<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class HeardIslandandMcDonaldIslands implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Heard Island and McDonald Islands';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'HM';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '61';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'Heard Island' => 'Heard Island and Mcdonald Islands',
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
        return 'AN';
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
        return '';
    }
}
