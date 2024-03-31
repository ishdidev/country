<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Nepal implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Nepal';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'NP';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '977';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '2' => 'Madhya Pashchimanchal', '1' => 'Madhyamanchal', '3' => 'Pashchimanchal',
            '4' => 'Purwanchal', '5' => 'Sudur Pashchimanchal',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'ne',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'ne';
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
        return 'NPR';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Kathmandu';
    }
}
