<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class NorthMacedonia implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'North Macedonia';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'MK';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '389';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '01' => 'Aerodrom', '02' => 'Aračinovo', '03' => 'Berovo',
            '04' => 'Bitola', '05' => 'Bogdanci', '06' => 'Bogovinje',
            '07' => 'Bosilovo', '08' => 'Brvenica', '09' => 'Butel',
            '77' => 'Centar', '78' => 'Centar Župa', '21' => 'Debar',
            '22' => 'Debarca', '23' => 'Delčevo', '25' => 'Demir Hisar',
            '24' => 'Demir Kapija', '26' => 'Dojran', '27' => 'Dolneni',
            '28' => 'Drugovo', '17' => 'Gazi Baba', '18' => 'Gevgelija',
            '29' => 'Gjorče Petrov', '19' => 'Gostivar', '20' => 'Gradsko',
            '34' => 'Ilinden', '35' => 'Jegunovce', '37' => 'Karbinci',
            '38' => 'Karpoš', '36' => 'Kavadarci', '39' => 'Kisela Voda',
            '40' => 'Kičevo', '41' => 'Konče', '42' => 'Kočani',
            '43' => 'Kratovo', '44' => 'Kriva Palanka', '45' => 'Krivogaštani',
            '46' => 'Kruševo', '47' => 'Kumanovo', '48' => 'Lipkovo',
            '49' => 'Lozovo', '51' => 'Makedonska Kamenica', '52' => 'Makedonski Brod',
            '50' => 'Mavrovo i Rostuša', '53' => 'Mogila', '54' => 'Negotino',
            '55' => 'Novaci', '56' => 'Novo Selo', '58' => 'Ohrid', '57' => 'Oslomej',
            '60' => 'Pehčevo', '59' => 'Petrovec', '61' => 'Plasnica', '62' => 'Prilep',
            '63' => 'Probištip', '64' => 'Radoviš', '65' => 'Rankovce', '66' => 'Resen',
            '67' => 'Rosoman', '68' => 'Saraj', '70' => 'Sopište', '71' => 'Staro Nagoričane',
            '72' => 'Struga', '73' => 'Strumica', '74' => 'Studeničani',
            '69' => 'Sveti Nikole', '75' => 'Tearce', '76' => 'Tetovo',
            '10' => 'Valandovo', '11' => 'Vasilevo', '13' => 'Veles',
            '12' => 'Vevčani', '14' => 'Vinica', '15' => 'Vraneštica',
            '16' => 'Vrapčište', '31' => 'Zajas', '32' => 'Zelenikovo',
            '33' => 'Zrnovci', '79' => 'Čair', '80' => 'Čaška',
            '81' => 'Češinovo-Obleševo', '82' => 'Čučer Sandevo',
            '83' => 'Štip', '84' => 'Šuto Orizari', '30' => 'Želino',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'mk',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'mk';
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
        return 'MKD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Skopje';
    }
}
