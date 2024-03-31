<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Namibia implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Namibia';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'NA';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '264';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'ER' => 'Erongo', 'HA' => 'Hardap', 'KA' => 'Karas',
            'KE' => 'Kavango East', 'KW' => 'Kavango West', 'KH' => 'Khomas',
            'KU' => 'Kunene', 'OW' => 'Ohangwena', 'OH' => 'Omaheke',
            'OS' => 'Omusati', 'ON' => 'Oshana', 'OT' => 'Oshikoto',
            'OD' => 'Otjozondjupa', 'CA' => 'Zambezi',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'en', 'af',
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
        return 'NAD,ZAR';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Windhoek';
    }
}
