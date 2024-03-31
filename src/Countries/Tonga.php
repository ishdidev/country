<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Tonga implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Tonga';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'TO';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '676';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '01' => ' Eua', '02' => 'Ha apai', '03' => 'Niuas',
            '04' => 'Tongatapu', '05' => 'Vava u',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'en', 'to',
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
        return 'TOP';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Nuku alofa';
    }
}
