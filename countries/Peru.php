<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Peru implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Peru';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'PE';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '51';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'AMA' => 'Amazonas', 'ANC' => 'Ancash', 'APU' => 'Apurímac',
            'ARE' => 'Arequipa', 'AYA' => 'Ayacucho', 'CAJ' => 'Cajamarca',
            'CUS' => 'Cusco', 'CAL' => 'El Callao', 'HUV' => 'Huancavelica',
            'HUC' => 'Huánuco', 'ICA' => 'Ica', 'JUN' => 'Junín',
            'LAL' => 'La Libertad', 'LAM' => 'Lambayeque', 'LIM' => 'Lima',
            'LOR' => 'Loreto', 'MDD' => 'Madre de Dios', 'MOQ' => 'Moquegua',
            'LMA' => 'Municipalidad Metropolitana de Lima', 'PAS' => 'Pasco',
            'PIU' => 'Piura', 'PUN' => 'Puno', 'SAM' => 'San Martín',
            'TAC' => 'Tacna', 'TUM' => 'Tumbes', 'UCA' => 'Ucayali',
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
        return 'PEN';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Lima';
    }
}
