<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Mexico implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Mexico';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'MX';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '52';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'DIF' => 'Distrito Federal', 'AGU' => 'Aguascalientes', 'BCN' => 'Baja California',
            'BCS' => 'Baja California Sur', 'CAM' => 'Campeche', 'CHP' => 'Chiapas',
            'CHH' => 'Chihuahua', 'COA' => 'Coahuila', 'COL' => 'Colima',
            'DUR' => 'Durango', 'GUA' => 'Guanajuato', 'GRO' => 'Guerrero',
            'HID' => 'Hidalgo', 'JAL' => 'Jalisco', 'MIC' => 'Michoacán',
            'MOR' => 'Morelos', 'MEX' => 'México', 'NAY' => 'Nayarit',
            'NLE' => 'Nuevo León', 'OAX' => 'Oaxaca', 'PUE' => 'Puebla',
            'QUE' => 'Querétaro', 'ROO' => 'Quintana Roo', 'SLP' => 'San Luis Potosí',
            'SIN' => 'Sinaloa', 'SON' => 'Sonora', 'TAB' => 'Tabasco', 'TAM' => 'Tamaulipas',
            'TLA' => 'Tlaxcala', 'VER' => 'Veracruz', 'YUC' => 'Yucatán',
            'ZAC' => 'Zacatecas',
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
        return 'MXN';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Mexico City';
    }
}
