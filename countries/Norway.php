<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Norway implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Norway';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'NO';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '47';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '02' => 'Akershus', '09' => 'Aust-Agder', '06' => 'Buskerud',
            '20' => 'Finnmark', '04' => 'Hedmark', '12' => 'Hordaland',
            '22' => 'Jan Mayen', '15' => 'Møre og Romsdal', '17' => 'Nord-Trøndelag',
            '18' => 'Nordland', '05' => 'Oppland', '03' => 'Oslo',
            '11' => 'Rogaland', '14' => 'Sogn og Fjordane', '21' => 'Svalbard',
            '16' => 'Sør-Trøndelag', '08' => 'Telemark', '19' => 'Troms',
            '10' => 'Vest-Agder', '07' => 'Vestfold', '01' => 'Østfold',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'no', 'nb', 'nn',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'no';
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
        return 'NOK';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Oslo';
    }
}
