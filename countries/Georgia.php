<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Georgia implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Georgia';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'GE';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '995';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'AB' => 'Abkhazia', 'AJ' => 'Ajaria', 'GU' => 'Guria',
            'IM' => 'Imereti', 'KA' => 'K akheti', 'KK' => 'Kvemo Kartli',
            'MM' => 'Mtskheta-Mtianeti', 'RL' => 'Rach a-Lechkhumi-Kvemo Svaneti',
            'SZ' => 'Samegrelo-Zemo Svaneti', 'SJ' => 'Samtskhe-Javakheti',
            'SK' => 'Shida Kartli', 'TB' => 'Tbilisi',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'ka',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'ka';
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
        return 'GEL';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Tbilisi';
    }
}
