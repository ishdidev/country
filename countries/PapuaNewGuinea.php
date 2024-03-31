<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class PapuaNewGuinea implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Papua New Guinea';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'PG';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '675';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'NSB' => 'Bougainville', 'CPM' => 'Central', 'CPK' => 'Chimbu',
            'EBR' => 'East New Britain', 'ESW' => 'East Sepik', 'EHG' => 'Eastern Highlands',
            'EPW' => 'Enga', 'GPK' => 'Gulf', 'MPM' => 'Madang', 'MRL' => 'Manus',
            'MBA' => 'Milne Bay', 'MPL' => 'Morobe', 'NCD' => 'National Capital District',
            'NIK' => 'New Ireland', 'NPP' => 'Northern', 'SAN' => 'Sandaun',
            'SHM' => 'Southern Highlands', 'WBK' => 'West New Britain', 'WPD' => 'Western',
            'WHM' => 'Western Highlands',
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
        return 'PGK';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Port Moresby';
    }
}
