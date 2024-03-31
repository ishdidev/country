<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Azerbaijan implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Azerbaijan';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'AZ';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '994';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'ABS' => 'Absheron District', 'AGM' => 'Agdam District', 'AGS' => 'Agdash District',
            'AGC' => 'Aghjabadi District', 'AGA' => 'Agstafa District', 'AGU' => 'Agsu District',
            'AST' => 'Astara District', 'BAB' => 'Babek District', 'BA' => 'Baku', 'BAL' => 'Balakan District',
            'BAR' => 'Barda District', 'BEY' => 'Beylagan District', 'BIL' => 'Bilasuvar District',
            'DAS' => 'Dashkasan District', 'FUZ' => 'Fizuli District', 'GA' => 'Ganja',
            'GAD' => 'Gədəbəy', 'QOB' => 'Gobustan District', 'GOR' => 'Goranboy District', 'GOY' => 'Goychay',
            'GYG' => 'Goygol District', 'HAC' => 'Hajigabul District', 'IMI' => 'Imishli District',
            'ISM' => 'Ismailli District', 'CAB' => 'Jabrayil District', 'CAL' => 'Jalilabad District',
            'CUL' => 'Julfa District', 'KAL' => 'Kalbajar District', 'KAN' => 'Kangarli District',
            'XAC' => 'Khachmaz District', 'XIZ' => 'Khizi District', 'XCI' => 'Khojali District',
            'KUR' => 'Kurdamir District', 'LAC' => 'Lachin District', 'LAN' => 'Lankaran',
            'LA' => 'Lankaran District', 'LER' => 'Lerik District', 'XVD' => 'Martuni',
            'MAS' => 'Masally District', 'MI' => 'Mingachevir', 'NX' => 'Nakhchivan Autonomous Republic',
            'NEF' => 'Neftchala District', 'OGU' => 'Oghuz District', 'ORD' => 'Ordubad District',
            'QAB' => 'Qabala District', 'QAX' => 'Qakh District', 'QAZ' => 'Qazakh District',
            'QBA' => 'Quba District', 'QBI' => 'Qubadli District', 'QUS' => 'Qusar District',
            'SAT' => 'Saatly District', 'SAB' => 'Sabirabad District', 'SAD' => 'Sadarak District',
            'SAL' => 'Salyan District', 'SMX' => 'Samukh District', 'SBN' => 'Shabran District',
            'SAH' => 'Shahbuz District', 'SA' => 'Shaki', 'SAK' => 'Shaki District',
            'SMI' => 'Shamakhi District', 'SKR' => 'Shamkir District', 'SAR' => 'Sharur District',
            'SR' => 'Shirvan', 'SUS' => 'Shusha District', 'SIY' => 'Siazan District',
            'SM' => 'Sumqayit', 'TAR' => 'Tartar District', 'TOV' => 'Tovuz District',
            'UCA' => 'Ujar District', 'YAR' => 'Yardymli District', 'YE' => 'Yevlakh',
            'YEV' => 'Yevlakh District', 'ZAN' => 'Zangilan District', 'ZAQ' => 'Zaqatala District',
            'ZAR' => 'Zardab District',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'az',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'az';
    }

    /**
     * {@inheritdoc}
     */
    public function getContinent(): string
    {
        return 'AS';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'AZN';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Baku';
    }
}
