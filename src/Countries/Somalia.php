<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Somalia implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Somalia';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'SO';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '252';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'AW' => 'Awdal', 'BK' => 'Bakool', 'BN' => 'Banaadir',
            'BR' => 'Bari', 'BY' => 'Bay', 'GA' => 'Galguduud',
            'GE' => 'Gedo', 'HI' => 'Hiiraan', 'JD' => 'Jubbada Dhexe',
            'JH' => 'Jubbada Hoose', 'MU' => 'Mudug', 'NU' => 'Nugaal',
            'SA' => 'Sanaag', 'SD' => 'Shabeellaha Dhexe', 'SH' => 'Shabeellaha Hoose',
            'SO' => 'Sool', 'TO' => 'Togdheer', 'WO' => 'Woqooyi Galbeed',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'so', 'ar',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'so';
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
        return 'SOS';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Mogadishu';
    }
}
