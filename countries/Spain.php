<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Spain implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Spain';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'ES';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '34';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'C' => 'A Coruña', 'AB' => 'Albacete', 'A' => 'Alicante',
            'AL' => 'Almería', 'O' => 'Asturias', 'BA' => 'Badajoz',
            'PM' => 'Balears', 'B' => 'Barcelona', 'BU' => 'Burgos',
            'S' => 'Cantabria', 'CS' => 'Castellón', 'CR' => 'Ciudad Real',
            'CU' => 'Cuenca', 'CC' => 'Cáceres', 'CA' => 'Cádiz',
            'CO' => 'Córdoba', 'GI' => 'Girona', 'GR' => 'Granada',
            'GU' => 'Guadalajara', 'SS' => 'Guipúzcoa', 'H' => 'Huelva',
            'HU' => 'Huesca', 'J' => 'Jaén', 'LO' => 'La Rioja',
            'GC' => 'Las Palmas', 'LE' => 'León', 'L' => 'Lleida',
            'LU' => 'Lugo', 'M' => 'Madrid', 'MU' => 'Murcia',
            'MA' => 'Málaga', 'NA' => 'Navarra', 'OR' => 'Ourense',
            'P' => 'Palencia', 'PO' => 'Pontevedra', 'SA' => 'Salamanca',
            'TF' => 'Santa Cruz de Tenerife', 'SG' => 'Segovia',
            'SE' => 'Sevilla', 'SO' => 'Soria', 'T' => 'Tarragona',
            'TE' => 'Teruel', 'TO' => 'Toledo', 'V' => 'Valencia',
            'VA' => 'Valladolid', 'BI' => 'Vizcaya', 'ZA' => 'Zamora',
            'Z' => 'Zaragoza', 'VI' => 'Álava', 'AV' => 'Ávila',
            'CE' => 'Ceuta', 'ML' => 'Melilla', 'AN' => 'Andalucía',
            'AR' => 'Aragón', 'AS' => 'Asturias, Principado de',
            'CN' => 'Canarias', 'CB' => 'Cantabria', 'CL' => 'Castilla y León',
            'CM' => 'Castilla-La Mancha', 'CT' => 'Catalunya', 'EX' => 'Extremadura',
            'GA' => 'Galicia', 'IB' => 'Illes Balears', 'RI' => 'La Rioja',
            'MD' => 'Madrid, Comunidad de', 'MC' => 'Murcia, Región de',
            'NC' => 'Navarra, Comunidad Foral de', 'PV' => 'País Vasco',
            'VC' => 'Valenciana, Comunidad',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'es', 'eu', 'ca', 'gl', 'oc',
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
        return 'EU';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'EUR';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Madrid';
    }
}
