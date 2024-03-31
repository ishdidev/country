<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Moldova implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Moldova';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'MD';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '373';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'AN' => 'Anenii Noi', 'BS' => 'Basarabeasca', 'BR' => 'Briceni',
            'BA' => 'Bălţi', 'CA' => 'Cahul', 'CT' => 'Cantemir',
            'CU' => 'Chişinău', 'CM' => 'Cimişlia', 'CR' => 'Criuleni',
            'CL' => 'Călăraşi', 'CS' => 'Căuşeni', 'DO' => 'Donduşeni',
            'DR' => 'Drochia', 'DU' => 'Dubăsari', 'ED' => 'Edineţ',
            'FL' => 'Floreşti', 'FA' => 'Făleşti', 'GL' => 'Glodeni',
            'GA' => 'Găgăuzia, Unitatea teritorială autonomă', 'HI' => 'Hînceşti',
            'IA' => 'Ialoveni', 'LE' => 'Leova', 'NI' => 'Nisporeni',
            'OC' => 'Ocniţa', 'OR' => 'Orhei', 'RE' => 'Rezina',
            'RI' => 'Rîşcani', 'SO' => 'Soroca', 'ST' => 'Străşeni',
            'SN' => 'Stînga Nistrului, unitatea teritorială din', 'SI' => 'Sîngerei',
            'TA' => 'Taraclia', 'TE' => 'Teleneşti', 'BD' => 'Tighina',
            'UN' => 'Ungheni', 'SD' => 'Şoldăneşti', 'SV' => 'Ştefan Vodă',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'ro',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'ro';
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
        return 'MDL';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Chișinău';
    }
}
