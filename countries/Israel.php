<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Israel implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Israel';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'IL';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '972';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'D' => 'HaDarom', 'M' => 'HaMerkaz', 'Z' => 'HaTsafon',
            'HA' => 'H̱efa', 'TA' => 'Tel-Aviv', 'JM' => 'Yerushalayim',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'he', 'ar',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'he';
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
        return 'ILS';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Jerusalem';
    }
}
