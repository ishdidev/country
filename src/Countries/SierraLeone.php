<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class SierraLeone implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Sierra Leone';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'SL';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '232';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'E' => 'Eastern', 'N' => 'Northern', 'S' => 'Southern',
            'W' => 'Western Area',
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
        return 'SLL';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Freetown';
    }
}
