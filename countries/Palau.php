<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Palau implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Palau';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'PW';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '680';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '002' => 'Aimeliik', '004' => 'Airai', '010' => 'Angaur',
            '050' => 'Hatobohei', '100' => 'Kayangel', '150' => 'Koror',
            '212' => 'Melekeok', '214' => 'Ngaraard', '218' => 'Ngarchelong',
            '222' => 'Ngardmau', '224' => 'Ngatpang', '226' => 'Ngchesar',
            '227' => 'Ngeremlengui', '228' => 'Ngiwal', '350' => 'Peleliu',
            '370' => 'Sonsorol',
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
        return 'OC';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'USD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Ngerulmud';
    }
}
