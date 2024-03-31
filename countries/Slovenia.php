<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Slovenia implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Slovenia';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'SI';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '386';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '001' => 'Ajdovščina', '195' => 'Apače', '002' => 'Beltinci',
            '148' => 'Benedikt', '149' => 'Bistrica ob Sotli', '003' => 'Bled',
            '150' => 'Bloke', '004' => 'Bohinj', '005' => 'Borovnica',
            '006' => 'Bovec', '151' => 'Braslovče', '007' => 'Brda',
            '008' => 'Brezovica', '009' => 'Brežice', '152' => 'Cankova',
            '011' => 'Celje', '012' => 'Cerklje na Gorenjskem', '013' => 'Cerknica',
            '014' => 'Cerkno', '153' => 'Cerkvenjak', '196' => 'Cirkulane',
            '018' => 'Destrnik', '019' => 'Divača', '154' => 'Dobje',
            '020' => 'Dobrepolje', '155' => 'Dobrna', '021' => 'Dobrova–Polhov Gradec',
            '156' => 'Dobrovnik', '022' => 'Dol pri Ljubljani', '157' => 'Dolenjske Toplice',
            '023' => 'Domžale', '024' => 'Dornava', '025' => 'Dravograd',
            '026' => 'Duplek', '027' => 'Gorenja vas–Poljane', '028' => 'Gorišnica',
            '207' => 'Gorje', '029' => 'Gornja Radgona', '030' => 'Gornji Grad',
            '031' => 'Gornji Petrovci', '158' => 'Grad', '032' => 'Grosuplje',
            '159' => 'Hajdina', '161' => 'Hodoš', '162' => 'Horjul',
            '160' => 'Hoče–Slivnica', '034' => 'Hrastnik', '035' => 'Hrpelje-Kozina',
            '036' => 'Idrija', '037' => 'Ig', '038' => 'Ilirska Bistrica',
            '039' => 'Ivančna Gorica', '040' => 'Izola', '041' => 'Jesenice',
            '163' => 'Jezersko', '042' => 'Juršinci', '043' => 'Kamnik',
            '044' => 'Kanal', '045' => 'Kidričevo', '046' => 'Kobarid',
            '047' => 'Kobilje', '049' => 'Komen', '164' => 'Komenda',
            '050' => 'Koper', '197' => 'Kosanjevica na Krki', '165' => 'Kostel',
            '051' => 'Kozje', '048' => 'Kočevje', '052' => 'Kranj',
            '053' => 'Kranjska Gora', '166' => 'Križevci', '054' => 'Krško',
            '055' => 'Kungota', '056' => 'Kuzma', '057' => 'Laško',
            '058' => 'Lenart', '059' => 'Lendava', '060' => 'Litija',
            '061' => 'Ljubljana', '062' => 'Ljubno', '063' => 'Ljutomer',
            '208' => 'Log-Dragomer', '064' => 'Logatec', '167' => 'Lovrenc na Pohorju',
            '065' => 'Loška Dolina', '066' => 'Loški Potok', '068' => 'Lukovica',
            '067' => 'Luče', '069' => 'Majšperk', '198' => 'Makole',
            '070' => 'Maribor', '168' => 'Markovci', '071' => 'Medvode',
            '072' => 'Mengeš', '073' => 'Metlika', '074' => 'Mežica',
            '169' => 'Miklavž na Dravskem Polju', '075' => 'Miren–Kostanjevica',
            '170' => 'Mirna Peč', '076' => 'Mislinja', '199' => 'Mokronog–Trebelno',
            '078' => 'Moravske Toplice', '077' => 'Moravče', '079' => 'Mozirje',
            '080' => 'Murska Sobota', '081' => 'Muta', '082' => 'Naklo',
            '083' => 'Nazarje', '084' => 'Nova Gorica', '085' => 'Novo Mesto',
            '086' => 'Odranci', '171' => 'Oplotnica', '087' => 'Ormož',
            '088' => 'Osilnica', '089' => 'Pesnica', '090' => 'Piran',
            '091' => 'Pivka', '172' => 'Podlehnik', '093' => 'Podvelka',
            '092' => 'Podčetrtek', '200' => 'Poljčane', '173' => 'Polzela',
            '094' => 'Postojna', '174' => 'Prebold', '095' => 'Preddvor',
            '175' => 'Prevalje', '096' => 'Ptuj', '097' => 'Puconci',
            '100' => 'Radenci', '099' => 'Radeče', '101' => 'Radlje ob Dravi',
            '102' => 'Radovljica', '103' => 'Ravne na Koroškem', '176' => 'Razkrižje',
            '098' => 'Rače–Fram', '201' => 'Renče-Vogrsko', '209' => 'Rečica ob Savinji',
            '104' => 'Ribnica', '177' => 'Ribnica na Pohorju', '107' => 'Rogatec',
            '106' => 'Rogaška Slatina', '105' => 'Rogašovci', '108' => 'Ruše',
            '178' => 'Selnica ob Dravi', '109' => 'Semič', '110' => 'Sevnica',
            '111' => 'Sežana', '112' => 'Slovenj Gradec', '113' => 'Slovenska Bistrica',
            '114' => 'Slovenske Konjice', '179' => 'Sodražica', '180' => 'Solčava',
            '202' => 'Središče ob Dravi', '115' => 'Starše', '203' => 'Straža',
            '181' => 'Sveta Ana', '204' => 'Sveta Trojica v Slovenskih Goricah',
            '182' => 'Sveti Andraž v Slovenskih Goricah', '116' => 'Sveti Jurij',
            '210' => 'Sveti Jurij v Slovenskih Goricah', '205' => 'Sveti Tomaž',
            '184' => 'Tabor', '010' => 'Tišina', '128' => 'Tolmin', '129' => 'Trbovlje',
            '130' => 'Trebnje', '185' => 'Trnovska Vas', '186' => 'Trzin',
            '131' => 'Tržič', '132' => 'Turnišče', '133' => 'Velenje',
            '187' => 'Velika Polana', '134' => 'Velike Lašče', '188' => 'Veržej',
            '135' => 'Videm', '136' => 'Vipava', '137' => 'Vitanje',
            '138' => 'Vodice', '139' => 'Vojnik', '189' => 'Vransko',
            '140' => 'Vrhnika', '141' => 'Vuzenica', '142' => 'Zagorje ob Savi',
            '143' => 'Zavrč', '144' => 'Zreče', '015' => 'Črenšovci', '016' => 'Črna na Koroškem',
            '017' => 'Črnomelj', '033' => 'Šalovci', '183' => 'Šempeter–Vrtojba',
            '118' => 'Šentilj', '119' => 'Šentjernej', '120' => 'Šentjur',
            '211' => 'Šentrupert', '117' => 'Šenčur', '121' => 'Škocjan',
            '122' => 'Škofja Loka', '123' => 'Škofljica', '124' => 'Šmarje pri Jelšah',
            '206' => 'Šmarješke Toplice', '125' => 'Šmartno ob Paki',
            '194' => 'Šmartno pri Litiji', '126' => 'Šoštanj', '127' => 'Štore',
            '190' => 'Žalec', '146' => 'Železniki', '191' => 'Žetale', '147' => 'Žiri',
            '192' => 'Žirovnica', '193' => 'Žužemberk',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'sl',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'sl';
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
        return 'Ljubljana';
    }
}
