<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Armenia implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Armenia';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'AM';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '374';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'AG' => 'Aragac̣otn', 'AR' => 'Ararat', 'AV' => 'Armavir',
            'ER' => 'Erevan', 'GR' => 'Geġark unik ', 'KT' => 'Kotayk ',
            'LO' => 'Loṙi', 'SU' => 'Syunik ', 'TV' => 'Tavuš',
            'VD' => 'Vayoć Jor', 'SH' => 'Širak',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'hy', 'ru',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'hy';
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
        return 'AMD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Yerevan';
    }
}
