<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Chile implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Chile';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'CL';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '56';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'AI' => 'Aisén del General Carlos Ibañez del Campo', 'AN' => 'Antofagasta',
            'AR' => 'Araucanía', 'AP' => 'Arica y Parinacota', 'AT' => 'Atacama',
            'BI' => 'Bío-Bío', 'CO' => 'Coquimbo', 'LI' => 'Libertador General Bernardo O Higgins',
            'LL' => 'Los Lagos', 'LR' => 'Los Ríos', 'MA' => 'Magallanes', 'ML' => 'Maule',
            'RM' => 'Región Metropolitana de Santiago', 'TA' => 'Tarapacá', 'VS' => 'Valparaíso',
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
        return 'CLF,CLP';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Santiago';
    }
}
