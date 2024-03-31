<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Brazil implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Brazil';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'BR';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '55';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'AC' => 'Acre', 'AL' => 'Alagoas', 'AP' => 'Amapá', 'AM' => 'Amazonas',
            'BA' => 'Bahia', 'CE' => 'Ceará', 'DF' => 'Distrito Federal',
            'ES' => 'Espírito Santo', 'GO' => 'Goiás', 'MA' => 'Maranhão',
            'MT' => 'Mato Grosso', 'MS' => 'Mato Grosso do Sul', 'MG' => 'Minas Gerais',
            'PR' => 'Paraná', 'PB' => 'Paraíba', 'PA' => 'Pará', 'PE' => 'Pernambuco',
            'PI' => 'Piauí', 'RN' => 'Rio Grande do Norte', 'RS' => 'Rio Grande do Sul',
            'RJ' => 'Rio de Janeiro', 'RO' => 'Rondônia', 'RR' => 'Roraima',
            'SC' => 'Santa Catarina', 'SE' => 'Sergipe', 'SP' => 'São Paulo', 'TO' => 'Tocantins',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'pt',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'pt';
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
        return 'BRL';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Brasília';
    }
}
