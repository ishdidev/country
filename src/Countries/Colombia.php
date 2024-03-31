<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Colombia implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Colombia';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'CO';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '57';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'AMA' => 'Amazonas', 'ANT' => 'Antioquia', 'ARA' => 'Arauca',
            'ATL' => 'Atlántico', 'BOL' => 'Bolívar', 'BOY' => 'Boyacá',
            'CAL' => 'Caldas', 'CAQ' => 'Caquetá', 'CAS' => 'Casanare',
            'CAU' => 'Cauca', 'CES' => 'Cesar', 'CHO' => 'Chocó',
            'CUN' => 'Cundinamarca', 'COR' => 'Córdoba', 'DC' => 'Distrito Capital de Bogotá',
            'GUA' => 'Guainía', 'GUV' => 'Guaviare', 'HUI' => 'Huila', 'LAG' => 'La Guajira',
            'MAG' => 'Magdalena', 'MET' => 'Meta', 'NAR' => 'Nariño', 'NSA' => 'Norte de Santander',
            'PUT' => 'Putumayo', 'QUI' => 'Quindío', 'RIS' => 'Risaralda', 'SAP' => 'San Andrés, Providencia y Santa Catalina',
            'SAN' => 'Santander', 'SUC' => 'Sucre', 'TOL' => 'Tolima', 'VAC' => 'Valle del Cauca',
            'VAU' => 'Vaupés', 'VID' => 'Vichada',
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
        return 'SA';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'COP';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Bogotá';
    }
}
