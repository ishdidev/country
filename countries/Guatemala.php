<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Guatemala implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Guatemala';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'GT';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '502';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'AV' => 'Alta Verapaz', 'BV' => 'Baja Verapaz', 'CM' => 'Chimaltenango',
            'CQ' => 'Chiquimula', 'PR' => 'El Progreso', 'ES' => 'Escuintla',
            'GU' => 'Guatemala', 'HU' => 'Huehuetenango', 'IZ' => 'Izabal',
            'JA' => 'Jalapa', 'JU' => 'Jutiapa', 'PE' => 'Petén', 'QZ' => 'Quetzaltenango',
            'QC' => 'Quiché', 'RE' => 'Retalhuleu', 'SA' => 'Sacatepéquez',
            'SM' => 'San Marcos', 'SR' => 'Santa Rosa', 'SO' => 'Sololá',
            'SU' => 'Suchitepéquez', 'TO' => 'Totonicapán', 'ZA' => 'Zacapa',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'es',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'es';
    }

    /**
     * {@inheritdoc}
     */
    public function getContinent(): string
    {
        return 'NA';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'GTQ';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Guatemala City';
    }
}
