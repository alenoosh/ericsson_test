<?php

	namespace ericsson\test;

	class NumberLookup {

   		function __construct() {}

		function getCountryInformation($filter = '') {

			$countryArray = Array(
							    '376' => Array(
									            'country_name' => 'ANDORRA',
									            'country_code' => 'AD'
										     ),
							    '971' => Array(
									            'country_name' => 'UNITED ARAB EMIRATES',
									            'country_code' => 'AE'
									         ),
							    '93' => Array(
									            'country_name' => 'AFGHANISTAN',
									            'country_code' => 'AF'
									        ),
							    '1268' => Array(
									            'country_name' => 'ANTIGUA AND BARBUDA',
									            'country_code' => 'AG'
									          ),
							    '1264' => Array(
									            'country_name' => 'ANGUILLA',
									            'country_code' => 'AI'
										      ),
							    '355' => Array(
									            'country_name' => 'ALBANIA',
									            'country_code' => 'AL'
										     ),
							    '374' => Array(
									            'country_name' => 'ARMENIA',
									            'country_code' => 'AM'
										     ),
							    '599' => Array(
									            'country_name' => 'NETHERLANDS ANTILLES',
									            'country_code' => 'AN'
									         ),
							    '244' => Array(
									            'country_name' => 'ANGOLA',
									            'country_code' => 'AO'
									         ),
							    '672' => Array(
									            'country_name' => 'ANTARCTICA',
									            'country_code' => 'AQ'
									         ),
							    '54' => Array(
									            'country_name' => 'ARGENTINA',
									            'country_code' => 'AR'
									        ),
							    '1684' => Array(
									            'country_name' => 'AMERICAN SAMOA',
									            'country_code' => 'AS'
									          ),
								'43' => Array(
									            'country_name' => 'AUSTRIA',
									            'country_code' => 'AT'
									        ),
							    '61' => Array(
									            'country_name' => 'CHRISTMAS ISLAND',
									            'country_code' => 'CX'
									        ),
								'297' => Array(
									            'country_name' => 'ARUBA',
									            'country_code' => 'AW'
									         ),
							    '994' => Array(
									            'country_name' => 'AZERBAIJAN',
									            'country_code' => 'AZ'
										     ),
							    '387' => Array(
									            'country_name' => 'BOSNIA AND HERZEGOVINA',
									            'country_code' => 'BA'
										     ),
							    '1246' => Array(
									            'country_name' => 'BARBADOS',
									            'country_code' => 'BB'
									          ),
							    '880' => Array(
									            'country_name' => 'BANGLADESH',
									            'country_code' => 'BD'
									         ),
							    '32' => Array(
									            'country_name' => 'BELGIUM',
									            'country_code' => 'BE'
									        ),
							    '226' => Array(
									            'country_name' => 'BURKINA FASO',
									            'country_code' => 'BF'
										     ),
							    '359' => Array(
									            'country_name' => 'BULGARIA',
									            'country_code' => 'BG'
									         ),
							    '973' => Array(
									            'country_name' => 'BAHRAIN',
									            'country_code' => 'BH'
									         ),
							    '257' => Array(
									            'country_name' => 'BURUNDI',
									            'country_code' => 'BI'
									         ),
							    '229' => Array(
									            'country_name' => 'BENIN',
									            'country_code' => 'BJ'
									         ),
								'590' => Array(
									            'country_name' => 'SAINT BARTHELEMY',
									            'country_code' => 'BL'
									         ),
							    '1441' => Array(
									            'country_name' => 'BERMUDA',
										        'country_code' => 'BM'
									          ),
							    '673' => Array(
									            'country_name' => 'BRUNEI DARUSSALAM',
									            'country_code' => 'BN'
									         ),
							    '591' => Array(
									            'country_name' => 'BOLIVIA',
									            'country_code' => 'BO'
									         ),
							    '55' => Array(
									            'country_name' => 'BRAZIL',
									            'country_code' => 'BR'
									        ),
							    '1242' => Array(
									            'country_name' => 'BAHAMAS',
									            'country_code' => 'BS'
									          ),
							    '975' => Array(
									            'country_name' => 'BHUTAN',
									            'country_code' => 'BT'
									         ),
								'267' => Array(
									            'country_name' => 'BOTSWANA',
									            'country_code' => 'BW'
        									 ),
							    '375' => Array(
									            'country_name' => 'BELARUS',
									            'country_code' => 'BY'
									         ),
							    '501' => Array(
									            'country_name' => 'BELIZE',
									            'country_code' => 'BZ'
									         ),
							    '1' => Array(
									            'country_name' => 'UNITED STATES',
									            'country_code' => 'US'
									       ),
							    '243' => Array(
									            'country_name' => 'CONGO, THE DEMOCRATIC REPUBLIC OF THE',
									            'country_code' => 'CD'
									         ),
							    '236' => Array(
									            'country_name' => 'CENTRAL AFRICAN REPUBLIC',
									            'country_code' => 'CF'
										     ),
							    '242' => Array(
									            'country_name' => 'CONGO',
									            'country_code' => 'CG'
									         ),
							    '41' => Array(
									            'country_name' => 'SWITZERLAND',
									            'country_code' => 'CH'
									        ),
							    '225' => Array(
									            'country_name' => 'COTE D IVOIRE',
									            'country_code' => 'CI'
										     ),
							    '682' => Array(
									            'country_name' => 'COOK ISLANDS',
									            'country_code' => 'CK'
									         ),
							    '56' => Array(
									            'country_name' => 'CHILE',
									            'country_code' => 'CL'
									        ),
							    '237' => Array(
									            'country_name' => 'CAMEROON',
									            'country_code' => 'CM'
									         ),
							    '86' => Array(
									            'country_name' => 'CHINA',
									            'country_code' => 'CN'
									        ),
							    '57' => Array(
									            'country_name' => 'COLOMBIA',
									            'country_code' => 'CO'
									        ),
							    '506' => Array(
									            'country_name' => 'COSTA RICA',
									            'country_code' => 'CR'
									         ),
							    '53' => Array(
									            'country_name' => 'CUBA',
									            'country_code' => 'CU'
									        ),
							    '238' => Array(
									            'country_name' => 'CAPE VERDE',
									            'country_code' => 'CV'
									         ),
							    '357' => Array(
									            'country_name' => 'CYPRUS',
									            'country_code' => 'CY'
									         ),
							    '420' => Array(
									            'country_name' => 'CZECH REPUBLIC',
									            'country_code' => 'CZ'
									         ),
							    '49' => Array(
									            'country_name' => 'GERMANY',
									            'country_code' => 'DE'
									        ),
							    '253' => Array(
									            'country_name' => 'DJIBOUTI',
									            'country_code' => 'DJ'
									         ),
							    '45' => Array(
									            'country_name' => 'DENMARK',
									            'country_code' => 'DK'
									        ),
							    '1767' => Array(
									            'country_name' => 'DOMINICA',
									            'country_code' => 'DM'
									          ),
							    '1809' => Array(
									            'country_name' => 'DOMINICAN REPUBLIC',
									            'country_code' => 'DO'
										      ),
							    '213' => Array(
									            'country_name' => 'ALGERIA',
									            'country_code' => 'DZ'
									         ),
							    '593' => Array(
									            'country_name' => 'ECUADOR',
									            'country_code' => 'EC'
									         ),
							    '372' => Array(
									            'country_name' => 'ESTONIA',
									            'country_code' => 'EE'
									         ),
							    '20' => Array(
									            'country_name' => 'EGYPT',
									            'country_code' => 'EG'
									        ),
							    '291' => Array(
									            'country_name' => 'ERITREA',
									            'country_code' => 'ER'
									         ),
							    '34' => Array(
									            'country_name' => 'SPAIN',
									            'country_code' => 'ES'
									        ),
							    '251' => Array(
									            'country_name' => 'ETHIOPIA',
									            'country_code' => 'ET'
									         ),
							    '358' => Array(
									            'country_name' => 'FINLAND',
									            'country_code' => 'FI'
									         ),
							    '679' => Array(
									            'country_name' => 'FIJI',
									            'country_code' => 'FJ'
									         ),
							    '500' => Array(
									            'country_name' => 'FALKLAND ISLANDS (MALVINAS)',
									            'country_code' => 'FK'
									         ),
							    '691' => Array(
									            'country_name' => 'MICRONESIA, FEDERATED STATES OF',
									            'country_code' => 'FM'
									         ),
								'298' => Array(
									            'country_name' => 'FAROE ISLANDS',
									            'country_code' => 'FO'
									         ),
							    '33' => Array(
									            'country_name' => 'FRANCE',
									            'country_code' => 'FR'
								            ),
							    '241' => Array(
									            'country_name' => 'GABON',
									            'country_code' => 'GA'
									         ),
							    '44' => Array(
									            'country_name' => 'ISLE OF MAN',
									            'country_code' => 'IM'
									        ),
							    '1473' => Array(
									            'country_name' => 'GRENADA',
									            'country_code' => 'GD'
									          ),
							    '995' => Array(
									            'country_name' => 'GEORGIA',
									            'country_code' => 'GE'
									         ),
							    '233' => Array(
									            'country_name' => 'GHANA',
									            'country_code' => 'GH'
									         ),
							    '350' => Array(
									            'country_name' => 'GIBRALTAR',
									            'country_code' => 'GI'
									         ),
							    '299' => Array(
									            'country_name' => 'GREENLAND',
									            'country_code' => 'GL'
									         ),
							    '220' => Array(
									            'country_name' => 'GAMBIA',
									            'country_code' => 'GM'
									         ),
							    '224' => Array(
									            'country_name' => 'GUINEA',
									            'country_code' => 'GN'
									         ),
							    '240' => Array(
									            'country_name' => 'EQUATORIAL GUINEA',
									            'country_code' => 'GQ'
									         ),
							    '30' => Array(
									            'country_name' => 'GREECE',
									            'country_code' => 'GR'
										    ),
								'502' => Array(
									            'country_name' => 'GUATEMALA',
									            'country_code' => 'GT'
									         ),
							    '1671' => Array(
									            'country_name' => 'GUAM',
									            'country_code' => 'GU'
									          ),
							    '245' => Array(
									            'country_name' => 'GUINEA-BISSAU',
									            'country_code' => 'GW'
									         ),
							    '592' => Array(
									            'country_name' => 'GUYANA',
									            'country_code' => 'GY'
									         ),
							    '852' => Array(
									            'country_name' => 'HONG KONG',
									            'country_code' => 'HK'
									         ),
							    '504' => Array(
									            'country_name' => 'HONDURAS',
									            'country_code' => 'HN'
									         ),
							    '385' => Array(
									            'country_name' => 'CROATIA',
									            'country_code' => 'HR'
									         ),
							    '509' => Array(
									            'country_name' => 'HAITI',
									            'country_code' => 'HT'
									         ),
							    '36' => Array(
									            'country_name' => 'HUNGARY',
									            'country_code' => 'HU'
									        ),
							    '62' => Array(
									            'country_name' => 'INDONESIA',
									            'country_code' => 'ID'
									        ),
							    '353' => Array(
									            'country_name' => 'IRELAND',
									            'country_code' => 'IE'
									         ),
								'972' => Array(
									            'country_name' => 'ISRAEL',
									            'country_code' => 'IL'
									         ),
							    '91' => Array(
									            'country_name' => 'INDIA',
									            'country_code' => 'IN'
									        ),
							    '964' => Array(
									            'country_name' => 'IRAQ',
									            'country_code' => 'IQ'
									         ),
							    '98' => Array(
									            'country_name' => 'IRAN, ISLAMIC REPUBLIC OF',
									            'country_code' => 'IR'
									        ),
							    '354' => Array(
									            'country_name' => 'ICELAND',
									            'country_code' => 'IS'
									         ),
							    '39' => Array(
									            'country_name' => 'HOLY SEE (VATICAN CITY STATE)',
									            'country_code' => 'VA'
									        ),
							    '1876' => Array(
									            'country_name' => 'JAMAICA',
									            'country_code' => 'JM'
									          ),
							    '962' => Array(
									            'country_name' => 'JORDAN',
									            'country_code' => 'JO'
									         ),
							    '81' => Array(
									            'country_name' => 'JAPAN',
									            'country_code' => 'JP'
									        ),
							    '254' => Array(
									            'country_name' => 'KENYA',
									            'country_code' => 'KE'
									         ),
							    '996' => Array(
									            'country_name' => 'KYRGYZSTAN',
									            'country_code' => 'KG'
									         ),
							    '855' => Array(
									            'country_name' => 'CAMBODIA',
									            'country_code' => 'KH'
									         ),
							    '686' => Array(
									            'country_name' => 'KIRIBATI',
									            'country_code' => 'KI'
									         ),
							    '269' => Array(
									            'country_name' => 'COMOROS',
									            'country_code' => 'KM'
									         ),
							    '1869' => Array(
									            'country_name' => 'SAINT KITTS AND NEVIS',
									            'country_code' => 'KN'
									          ),
							    '850' => Array(
									            'country_name' => 'KOREA DEMOCRATIC PEOPLES REPUBLIC OF',
									            'country_code' => 'KP'
									         ),
								'82' => Array(
									            'country_name' => 'KOREA REPUBLIC OF',
									            'country_code' => 'KR'
									        ),
							    '965' => Array(
									            'country_name' => 'KUWAIT',
									            'country_code' => 'KW'
									         ),
							    '1345' => Array(
									            'country_name' => 'CAYMAN ISLANDS',
									            'country_code' => 'KY'
									          ),
								'7' => Array(
									            'country_name' => 'RUSSIAN FEDERATION',
									            'country_code' => 'RU'
									       ),
							    '856' => Array(
									            'country_name' => 'LAO PEOPLES DEMOCRATIC REPUBLIC',
									            'country_code' => 'LA'
									         ),
							    '961' => Array(
									            'country_name' => 'LEBANON',
									            'country_code' => 'LB'
									         ),
							    '1758' => Array(
									            'country_name' => 'SAINT LUCIA',
									            'country_code' => 'LC'
										      ),
							    '423' => Array(
									            'country_name' => 'LIECHTENSTEIN',
									            'country_code' => 'LI'
									         ),
							    '94' => Array(
									            'country_name' => 'SRI LANKA',
									            'country_code' => 'LK'
								            ),
							    '231' => Array(
									            'country_name' => 'LIBERIA',
									            'country_code' => 'LR'
									         ),
							    '266' => Array(
									            'country_name' => 'LESOTHO',
									            'country_code' => 'LS'
									         ),
							    '370' => Array(
									            'country_name' => 'LITHUANIA',
									            'country_code' => 'LT',
									         ),
							    '352' => Array(
									            'country_name' => 'LUXEMBOURG',
									            'country_code' => 'LU'
									         ),
							    '371' => Array(
									            'country_name' => 'LATVIA',
									            'country_code' => 'LV'
									         ),
							    '218' => Array(
									            'country_name' => 'LIBYAN ARAB JAMAHIRIYA',
									            'country_code' => 'LY'
									         ),
							    '212' => Array(
									            'country_name' => 'MOROCCO',
									            'country_code' => 'MA'
									         ),
							    '377' => Array(
									            'country_name' => 'MONACO',
									            'country_code' => 'MC'
									         ),
							    '373' => Array(
									            'country_name' => 'MOLDOVA, REPUBLIC OF',
									            'country_code' => 'MD'
									         ),
							    '382' => Array(
									            'country_name' => 'MONTENEGRO',
									            'country_code' => 'ME'
									         ),
								'1599' => Array(
									            'country_name' => 'SAINT MARTIN',
									            'country_code' => 'MF'
									          ),
							    '261' => Array(
									            'country_name' => 'MADAGASCAR',
									            'country_code' => 'MG'
									         ),
							    '692' => Array(
									            'country_name' => 'MARSHALL ISLANDS',
									            'country_code' => 'MH'
									         ),
							    '389' => Array(
									            'country_name' => 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF',
									            'country_code' => 'MK'
									         ),
							    '223' => Array(
									            'country_name' => 'MALI',
										        'country_code' => 'ML'
									         ),
							    '95' => Array(
									            'country_name' => 'MYANMAR',
									            'country_code' => 'MM'
								            ),
							    '976' => Array(
									            'country_name' => 'MONGOLIA',
									            'country_code' => 'MN'
									         ),
							    '853' => Array(
									            'country_name' => 'MACAU',
									            'country_code' => 'MO'
									         ),
							    '1670' => Array(
									            'country_name' => 'NORTHERN MARIANA ISLANDS',
									            'country_code' => 'MP'
									          ),
							    '222' => Array(
									            'country_name' => 'MAURITANIA',
									            'country_code' => 'MR'
									         ),
							    '1664' => Array(
									            'country_name' => 'MONTSERRAT',
									            'country_code' => 'MS'
									          ),
							    '356' => Array(
									            'country_name' => 'MALTA',
									            'country_code' => 'MT'
									         ),
							    '230' => Array(
									            'country_name' => 'MAURITIUS',
									            'country_code' => 'MU'
									         ),
							    '960' => Array(
									            'country_name' => 'MALDIVES',
									            'country_code' => 'MV'
									         ),
							    '265' => Array(
									            'country_name' => 'MALAWI',
									            'country_code' => 'MW'
									         ),
								'52' => Array(
									            'country_name' => 'MEXICO',
									            'country_code' => 'MX'
									        ),
							    '60' => Array(
									            'country_name' => 'MALAYSIA',
									            'country_code' => 'MY'
									        ),
							    '258' => Array(
									            'country_name' => 'MOZAMBIQUE',
									            'country_code' => 'MZ'
									         ),
							    '264' => Array(
									            'country_name' => 'NAMIBIA',
									            'country_code' => 'NA'
									         ),
							    '687' => Array(
									            'country_name' => 'NEW CALEDONIA',
									            'country_code' => 'NC'
									         ),
							    '227' => Array(
									            'country_name' => 'NIGER',
									            'country_code' => 'NE'
									         ),
							    '234' => Array(
									            'country_name' => 'NIGERIA',
									            'country_code' => 'NG'
									         ),
							    '505' => Array(
									            'country_name' => 'NICARAGUA',
									            'country_code' => 'NI'
									         ),
							    '31' => Array(
									            'country_name' => 'NETHERLANDS',
									            'country_code' => 'NL'
									        ),
							    '47' => Array(
									            'country_name' => 'NORWAY',
									            'country_code' => 'NO'
									        ),
							    '977' => Array(
									            'country_name' => 'NEPAL',
									            'country_code' => 'NP'
									         ),
							    '674' => Array(
									            'country_name' => 'NAURU',
									            'country_code' => 'NR'
									         ),
							    '683' => Array(
									            'country_name' => 'NIUE',
									            'country_code' => 'NU'
									         ),
							    '64' => Array(
									            'country_name' => 'NEW ZEALAND',
									            'country_code' => 'NZ'
									        ),
							    '968' => Array(
									            'country_name' => 'OMAN',
									            'country_code' => 'OM'
									         ),
							    '507' => Array(
									            'country_name' => 'PANAMA',
									            'country_code' => 'PA'
										     ),
							    '51' => Array(
									            'country_name' => 'PERU',
									            'country_code' => 'PE'
									        ),
							    '689' => Array(
									            'country_name' => 'FRENCH POLYNESIA',
									            'country_code' => 'PF'
									         ),
							    '675' => Array(
									            'country_name' => 'PAPUA NEW GUINEA',
									            'country_code' => 'PG'
									         ),
							    '63' => Array(
									            'country_name' => 'PHILIPPINES',
									            'country_code' => 'PH'
									        ),
								'92' => Array(
									            'country_name' => 'PAKISTAN',
									            'country_code' => 'PK'
									        ),
							    '48' => Array(
									            'country_name' => 'POLAND',
									            'country_code' => 'PL'
									        ),
							    '508' => Array(
									            'country_name' => 'SAINT PIERRE AND MIQUELON',
									            'country_code' => 'PM'
									         ),
							    '870' => Array(
									            'country_name' => 'PITCAIRN',
									            'country_code' => 'PN'
									         ),
							    '351' => Array(
									            'country_name' => 'PORTUGAL',
									            'country_code' => 'PT'
									         ),
							    '680' => Array(
									            'country_name' => 'PALAU',
									            'country_code' => 'PW'
									         ),
							    '595' => Array(
									            'country_name' => 'PARAGUAY',
									            'country_code' => 'PY'
									         ),
							    '974' => Array(
									            'country_name' => 'QATAR',
									            'country_code' => 'QA'
									         ),
							    '40' => Array(
									            'country_name' => 'ROMANIA',
									            'country_code' => 'RO'
									        ),
							    '381' => Array(
									            'country_name' => 'KOSOVO',
									            'country_code' => 'XK'
									         ),
							    '250' => Array(
									            'country_name' => 'RWANDA',
									            'country_code' => 'RW'
									         ),
							    '966' => Array(
									            'country_name' => 'SAUDI ARABIA',
									            'country_code' => 'SA'
									         ),
							    '677' => Array(
									            'country_name' => 'SOLOMON ISLANDS',
									            'country_code' => 'SB'
									         ),
							    '248' => Array(
									            'country_name' => 'SEYCHELLES',
									            'country_code' => 'SC'
									         ),
							    '249' => Array(
									            'country_name' => 'SUDAN',
									            'country_code' => 'SD'
									         ),
							    '46' => Array(
									            'country_name' => 'SWEDEN',
									            'country_code' => 'SE'
									        ),
							    '65' => Array(
									            'country_name' => 'SINGAPORE',
									            'country_code' => 'SG'
									        ),
							    '290' => Array(
									            'country_name' => 'SAINT HELENA',
									            'country_code' => 'SH'
									         ),
							    '386' => Array(
									            'country_name' => 'SLOVENIA',
									            'country_code' => 'SI'
									         ),
							    '421' => Array(
									            'country_name' => 'SLOVAKIA',
									            'country_code' => 'SK'
									         ),
							    '232' => Array(
									            'country_name' => 'SIERRA LEONE',
									            'country_code' => 'SL'
									         ),
							    '378' => Array(
									            'country_name' => 'SAN MARINO',
									            'country_code' => 'SM'
									         ),
							    '221' => Array(
									            'country_name' => 'SENEGAL',
									            'country_code' => 'SN'
									         ),
							    '252' => Array(
									            'country_name' => 'SOMALIA',
									            'country_code' => 'SO'
									         ),
							    '597' => Array(
									            'country_name' => 'SURINAME',
									            'country_code' => 'SR'
									         ),
							    '239' => Array(
									            'country_name' => 'SAO TOME AND PRINCIPE',
									            'country_code' => 'ST'
									         ),
								'503' => Array(
									            'country_name' => 'EL SALVADOR',
									            'country_code' => 'SV'
										     ),
							    '963' => Array(
									            'country_name' => 'SYRIAN ARAB REPUBLIC',
									            'country_code' => 'SY'
										     ),
							    '268' => Array(
									            'country_name' => 'SWAZILAND',
									            'country_code' => 'SZ'
									         ),
							    '1649' => Array(
									            'country_name' => 'TURKS AND CAICOS ISLANDS',
									            'country_code' => 'TC'
									          ),
							    '235' => Array(
									            'country_name' => 'CHAD',
									            'country_code' => 'TD'
									         ),
							    '228' => Array(
									            'country_name' => 'TOGO',
									            'country_code' => 'TG'
									         ),
							    '66' => Array(
									            'country_name' => 'THAILAND',
									            'country_code' => 'TH'
									        ),
							    '992' => Array(
									            'country_name' => 'TAJIKISTAN',
									            'country_code' => 'TJ'
									         ),
							    '690' => Array(
									            'country_name' => 'TOKELAU',
									            'country_code' => 'TK'
									         ),
							    '670' => Array(
									            'country_name' => 'TIMOR-LESTE',
									            'country_code' => 'TL'
									         ),
							    '993' => Array(
									            'country_name' => 'TURKMENISTAN',
									            'country_code' => 'TM'
									         ),
							    '216' => Array(
									            'country_name' => 'TUNISIA',
									            'country_code' => 'TN'
									         ),
							    '676' => Array(
									            'country_name' => 'TONGA',
									            'country_code' => 'TO'
									         ),
							    '90' => Array(
									            'country_name' => 'TURKEY',
									            'country_code' => 'TR'
									        ),
							    '1868' => Array(
									            'country_name' => 'TRINIDAD AND TOBAGO',
									            'country_code' => 'TT'
									          ),
							    '688' => Array(
									            'country_name' => 'TUVALU',
									            'country_code' => 'TV'
									         ),
							    '886' => Array(
									            'country_name' => 'TAIWAN, PROVINCE OF CHINA',
									            'country_code' => 'TW'
									         ),
							    '255' => Array(
									            'country_name' => 'TANZANIA, UNITED REPUBLIC OF',
									            'country_code' => 'TZ'
									         ),
							    '380' => Array(
									            'country_name' => 'UKRAINE',
									            'country_code' => 'UA'
									         ),
							    '256' => Array(
									            'country_name' => 'UGANDA',
									            'country_code' => 'UG'
									         ),
							    '598' => Array(
									            'country_name' => 'URUGUAY',
									            'country_code' => 'UY'
									         ),
							    '998' => Array(
									            'country_name' => 'UZBEKISTAN',
									            'country_code' => 'UZ'
									         ),
							    '1784' => Array(
									            'country_name' => 'SAINT VINCENT AND THE GRENADINES',
										        'country_code' => 'VC'
									          ),
							    '58' => Array(
									            'country_name' => 'VENEZUELA',
									            'country_code' => 'VE'
									        ),
							    '1284' => Array(
									            'country_name' => 'VIRGIN ISLANDS, BRITISH',
									            'country_code' => 'VG'
									          ),
							    '1340' => Array(
									            'country_name' => 'VIRGIN ISLANDS, U.S.',
									            'country_code' => 'VI'
									          ),
							    '84' => Array(
									            'country_name' => 'VIET NAM',
									            'country_code' => 'VN'
								            ),
							    '678' => Array(
									            'country_name' => 'VANUATU',
									            'country_code' => 'VU'
									         ),
							    '681' => Array(
									            'country_name' => 'WALLIS AND FUTUNA',
									            'country_code' => 'WF'
									         ),
							    '685' => Array(
									            'country_name' => 'SAMOA',
									            'country_code' => 'WS'
									         ),
							    '967' => Array(
									            'country_name' => 'YEMEN',
									            'country_code' => 'YE'
									         ),
							    '262' => Array(
									            'country_name' => 'MAYOTTE',
									            'country_code' => 'YT'
									         ),
							    '27' => Array(
									            'country_name' => 'SOUTH AFRICA',
									            'country_code' => 'ZA'
									        ),
							    '260' => Array(
									            'country_name' => 'ZAMBIA',
									            'country_code' => 'ZM'
									         ),
							    '263' => Array(
									            'country_name' => 'ZIMBABWE',
									            'country_code' => 'ZW'
									         )
								 );

			return ($filter == '') ? $countryArray : (isset($countryArray[$filter]) ? $countryArray[$filter] : '');
		}


	};
?>
