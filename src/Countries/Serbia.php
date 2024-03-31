<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Serbia implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Serbia';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'RS';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '381';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'KM' => 'Kosovo-Metohija', 'VO' => 'Vojvodina',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'sr',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'sr';
    }

    /**
     * {@inheritdoc}
     */
    public function getContinent(): string
    {
        return 'EU';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'RSD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Belgrade';
    }
}
