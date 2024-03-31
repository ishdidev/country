<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Paraguay implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Paraguay';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'PY';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '595';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '16' => 'Alto Paraguay', '10' => 'Alto Paraná', '13' => 'Amambay',
            'ASU' => 'Asunción', '19' => 'Boquerón', '5' => 'Caaguazú',
            '6' => 'Caazapá', '14' => 'Canindeyú', '11' => 'Central',
            '1' => 'Concepción', '3' => 'Cordillera', '4' => 'Guairá',
            '7' => 'Itapúa', '8' => 'Misiones', '9' => 'Paraguarí',
            '15' => 'Presidente Hayes', '2' => 'San Pedro', '12' => 'Ñeembucú',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'es', 'gn',
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
        return 'PYG';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Asunción';
    }
}
