<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Bangladesh implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Bangladesh';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'BD';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '880';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'A' => 'Barisal', 'B' => 'Chittagong', 'C' => 'Dhaka',
            'D' => 'Khulna', 'E' => 'Rajshahi', 'F' => 'Rangpur',
            'G' => 'Sylhet',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'bn',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'bn';
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
        return 'BDT';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Dhaka';
    }
}
