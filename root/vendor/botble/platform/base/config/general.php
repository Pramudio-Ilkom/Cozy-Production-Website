<?php

return [
    'admin_dir'                 => env('ADMIN_DIR', 'admin'),
    'default-theme'             => env('DEFAULT_THEME', 'default'),
    'base_name'                 => env('APP_NAME', 'Botble Technologies'),
    'logo'                      => '/vendor/core/core/base/images/logo_white.png',
    'favicon'                   => '/vendor/core/core/base/images/favicon.png',
    'editor'                    => [
        'ckeditor' => [
            'js' => [
                '/vendor/core/core/base/libraries/ckeditor/ckeditor.js',
            ],
        ],
        'tinymce'  => [
            'js' => [
                '/vendor/core/core/base/libraries/tinymce/tinymce.min.js',
            ],
        ],
        'primary'  => env('PRIMARY_EDITOR', 'ckeditor'),
    ],
    'error_reporting'           => [
        'to'           => null,
        'via_slack'    => env('SLACK_REPORT_ENABLED', false),
        'ignored_bots' => [
            'googlebot',        // Googlebot
            'bingbot',          // Microsoft Bingbot
            'slurp',            // Yahoo! Slurp
            'ia_archiver',      // Alexa
        ],
    ],
    'enable_https_support'      => env('ENABLE_HTTPS_SUPPORT', false),
    'force_root_url'            => env('FORCE_ROOT_URL'),
    'force_schema'              => env('FORCE_SCHEMA'),
    'memory_limit'              => env('CMS_MEMORY_LIMIT'),
    'date_format'               => [
        'date'      => env('CMS_DATE_FORMAT', 'Y-m-d'),
        'date_time' => env('CMS_DATE_TIME_FORMAT', 'Y-m-d H:i:s'),
        'js'        => [
            'date'      => env('CMS_JS_DATE_FORMAT', 'yyyy-mm-dd'),
            'date_time' => env('CMS_JS_DATE_TIME_FORMAT', 'yyyy-mm-dd H:i:s'),
        ],
    ],
    'cache_site_map'            => env('ENABLE_CACHE_SITE_MAP', false),
    'public_single_ending_url'  => env('PUBLIC_SINGLE_ENDING_URL'),
    'send_mail_using_job_queue' => env('SEND_MAIL_USING_JOB_QUEUE', false),
    'locale'                    => env('APP_LOCALE', 'en'),
    'can_execute_command'       => env('CAN_EXECUTE_COMMAND', true),
    'demo'                      => [
        'account' => [
            'username' => env('CMS_DEMO_ACCOUNT_USERNAME', 'botble'),
            'password' => env('CMS_DEMO_ACCOUNT_PASSWORD', '159357'),
        ],
    ],
    'google_fonts'              => [
        'Aclonica',
        'Allan',
        'Annie Use Your Telescope',
        'Anonymous Pro',
        'Allerta Stencil',
        'Allerta',
        'Amaranth',
        'Anton',
        'Archivo',
        'Architects Daughter',
        'Arimo',
        'Artifika',
        'Arvo',
        'Asset',
        'Astloch',
        'Bangers',
        'Bentham',
        'Bevan',
        'Bigshot One',
        'Bowlby One',
        'Bowlby One SC',
        'Brawler',
        'Buda:300',
        'Cabin',
        'Calligraffitti',
        'Candal',
        'Cantarell',
        'Cardo',
        'Carter One',
        'Caudex',
        'Cedarville Cursive',
        'Cherry Cream Soda',
        'Chewy',
        'Coda',
        'Coming Soon',
        'Copse',
        'Corben:700',
        'Cousine',
        'Covered By Your Grace',
        'Crafty Girls',
        'Crimson Text',
        'Crushed',
        'Cuprum',
        'Damion',
        'Dancing Script',
        'Dawning of a New Day',
        'DM Sans',
        'Didact Gothic',
        'Droid Sans',
        'Droid Sans Mono',
        'Droid Serif',
        'EB Garamond',
        'Expletus Sans',
        'Fontdiner Swanky',
        'Forum',
        'Francois One',
        'Geo',
        'Give You Glory',
        'Goblin One',
        'Goudy Bookletter 1911',
        'Gravitas One',
        'Gruppo',
        'Hammersmith One',
        'Holtwood One SC',
        'Homemade Apple',
        'Inconsolata',
        'Indie Flower',
        'IM Fell DW Pica',
        'IM Fell DW Pica SC',
        'IM Fell Double Pica',
        'IM Fell Double Pica SC',
        'IM Fell English',
        'IM Fell English SC',
        'IM Fell French Canon',
        'IM Fell French Canon SC',
        'IM Fell Great Primer',
        'IM Fell Great Primer SC',
        'Irish Grover',
        'Irish Growler',
        'Istok Web',
        'Josefin Sans',
        'Josefin Slab',
        'Jost',
        'Judson',
        'Jura',
        'Jura:500',
        'Jura:600',
        'Just Another Hand',
        'Just Me Again Down Here',
        'Kameron',
        'Kenia',
        'Kranky',
        'Kreon',
        'Kristi',
        'La Belle Aurore',
        'Lato:100',
        'Lato:100italic',
        'Lato:300',
        'Lato',
        'Lato:bold',
        'Lato:900',
        'League Script',
        'Lekton',
        'Libre Baskerville',
        'Limelight',
        'Lobster',
        'Lobster Two',
        'Lora',
        'Love Ya Like A Sister',
        'Loved by the King',
        'Luckiest Guy',
        'Maiden Orange',
        'Mako',
        'Maven Pro',
        'Maven Pro:500',
        'Maven Pro:700',
        'Maven Pro:900',
        'Meddon',
        'MedievalSharp',
        'Megrim',
        'Merriweather',
        'Metrophobic',
        'Michroma',
        'Miltonian Tattoo',
        'Miltonian',
        'Modern Antiqua',
        'Monofett',
        'Molengo',
        'Montserrat',
        'Mountains of Christmas',
        'Muli:300',
        'Muli',
        'Neucha',
        'Neuton',
        'News Cycle',
        'Nixie One',
        'Nobile',
        'Noto Sans',
        'Nova Cut',
        'Nova Flat',
        'Nova Mono',
        'Nova Oval',
        'Nova Round',
        'Nova Script',
        'Nova Slim',
        'Nova Square',
        'Nunito:light',
        'Nunito',
        'Nunito Sans',
        'OFL Sorts Mill Goudy TT',
        'Old Standard TT',
        'Open Sans:300',
        'Open Sans',
        'Open Sans:600',
        'Open Sans:800',
        'Open Sans Condensed:300',
        'Orbitron',
        'Orbitron:500',
        'Orbitron:700',
        'Orbitron:900',
        'Oswald',
        'Over the Rainbow',
        'Reenie Beanie',
        'Pacifico',
        'Patrick Hand',
        'Paytone One',
        'Permanent Marker',
        'Philosopher',
        'Play',
        'Playfair Display',
        'Podkova',
        'Poppins',
        'PT Sans',
        'PT Sans Narrow',
        'PT Sans Narrow:regular,bold',
        'PT Serif',
        'PT Serif Caption',
        'Puritan',
        'Quattrocento',
        'Quattrocento Sans',
        'Radley',
        'Raleway',
        'Raleway:100',
        'Redressed',
        'Rock Salt',
        'Rokkitt',
        'Roboto',
        'Roboto Condensed',
        'Roboto Slab',
        'Ruslan Display',
        'Schoolbell',
        'Shadows Into Light',
        'Shanti',
        'Sigmar One',
        'Six Caps',
        'Slackey',
        'Smythe',
        'Sniglet:800',
        'Source Sans Pro',
        'Special Elite',
        'Stardos Stencil',
        'Sue Ellen Francisco',
        'Sunshiney',
        'Swanky and Moo Moo',
        'Syncopate',
        'Tajawal',
        'Tangerine',
        'Tenor Sans',
        'Terminal Dosis Light',
        'The Girl Next Door',
        'Tinos',
        'Ubuntu',
        'Ultra',
        'Unkempt',
        'UnifrakturCook:bold',
        'UnifrakturMaguntia',
        'Varela',
        'Varela Round',
        'Vibur',
        'Vollkorn',
        'VT323',
        'Waiting for the Sunrise',
        'Wallpoet',
        'Walter Turncoat',
        'Wire One',
        'Work Sans',
        'Yanone Kaffeesatz',
        'Yanone Kaffeesatz:300',
        'Yanone Kaffeesatz:400',
        'Yanone Kaffeesatz:700',
        'Yeseva One',
        'Zeyada',
    ],

    'countries' => [
        'AF' => 'Afghanistan',
        'AX' => 'Åland Islands',
        'AL' => 'Albania',
        'DZ' => 'Algeria',
        'AS' => 'American Samoa',
        'AD' => 'Andorra',
        'AO' => 'Angola',
        'AI' => 'Anguilla',
        'AQ' => 'Antarctica',
        'AG' => 'Antigua and Barbuda',
        'AR' => 'Argentina',
        'AM' => 'Armenia',
        'AW' => 'Aruba',
        'AU' => 'Australia',
        'AT' => 'Austria',
        'AZ' => 'Azerbaijan',
        'BS' => 'Bahamas',
        'BH' => 'Bahrain',
        'BD' => 'Bangladesh',
        'BB' => 'Barbados',
        'BY' => 'Belarus',
        'BE' => 'Belgium',
        'PW' => 'Belau',
        'BZ' => 'Belize',
        'BJ' => 'Benin',
        'BM' => 'Bermuda',
        'BT' => 'Bhutan',
        'BO' => 'Bolivia',
        'BQ' => 'Bonaire, Saint Eustatius and Saba',
        'BA' => 'Bosnia and Herzegovina',
        'BW' => 'Botswana',
        'BV' => 'Bouvet Island',
        'BR' => 'Brazil',
        'IO' => 'British Indian Ocean Territory',
        'BN' => 'Brunei',
        'BG' => 'Bulgaria',
        'BF' => 'Burkina Faso',
        'BI' => 'Burundi',
        'KH' => 'Cambodia',
        'CM' => 'Cameroon',
        'CA' => 'Canada',
        'CV' => 'Cape Verde',
        'KY' => 'Cayman Islands',
        'CF' => 'Central African Republic',
        'TD' => 'Chad',
        'CL' => 'Chile',
        'CN' => 'China',
        'CX' => 'Christmas Island',
        'CC' => 'Cocos (Keeling) Islands',
        'CO' => 'Colombia',
        'KM' => 'Comoros',
        'CG' => 'Congo (Brazzaville)',
        'CD' => 'Congo (Kinshasa)',
        'CK' => 'Cook Islands',
        'CR' => 'Costa Rica',
        'HR' => 'Croatia',
        'CU' => 'Cuba',
        'CW' => 'Cura&ccedil;ao',
        'CY' => 'Cyprus',
        'CZ' => 'Czech Republic',
        'DK' => 'Denmark',
        'DJ' => 'Djibouti',
        'DM' => 'Dominica',
        'DO' => 'Dominican Republic',
        'EC' => 'Ecuador',
        'EG' => 'Egypt',
        'SV' => 'El Salvador',
        'GQ' => 'Equatorial Guinea',
        'ER' => 'Eritrea',
        'EE' => 'Estonia',
        'ET' => 'Ethiopia',
        'FK' => 'Falkland Islands',
        'FO' => 'Faroe Islands',
        'FJ' => 'Fiji',
        'FI' => 'Finland',
        'FR' => 'France',
        'GF' => 'French Guiana',
        'PF' => 'French Polynesia',
        'TF' => 'French Southern Territories',
        'GA' => 'Gabon',
        'GM' => 'Gambia',
        'GE' => 'Georgia',
        'DE' => 'Germany',
        'GH' => 'Ghana',
        'GI' => 'Gibraltar',
        'GR' => 'Greece',
        'GL' => 'Greenland',
        'GD' => 'Grenada',
        'GP' => 'Guadeloupe',
        'GU' => 'Guam',
        'GT' => 'Guatemala',
        'GG' => 'Guernsey',
        'GN' => 'Guinea',
        'GW' => 'Guinea-Bissau',
        'GY' => 'Guyana',
        'HT' => 'Haiti',
        'HM' => 'Heard Island and McDonald Islands',
        'HN' => 'Honduras',
        'HK' => 'Hong Kong',
        'HU' => 'Hungary',
        'IS' => 'Iceland',
        'IN' => 'India',
        'ID' => 'Indonesia',
        'IR' => 'Iran',
        'IQ' => 'Iraq',
        'IE' => 'Ireland',
        'IM' => 'Isle of Man',
        'IL' => 'Israel',
        'IT' => 'Italy',
        'CI' => 'Ivory Coast',
        'JM' => 'Jamaica',
        'JP' => 'Japan',
        'JE' => 'Jersey',
        'JO' => 'Jordan',
        'KZ' => 'Kazakhstan',
        'KE' => 'Kenya',
        'KI' => 'Kiribati',
        'KW' => 'Kuwait',
        'XK' => 'Kosovo',
        'KG' => 'Kyrgyzstan',
        'LA' => 'Laos',
        'LV' => 'Latvia',
        'LB' => 'Lebanon',
        'LS' => 'Lesotho',
        'LR' => 'Liberia',
        'LY' => 'Libya',
        'LI' => 'Liechtenstein',
        'LT' => 'Lithuania',
        'LU' => 'Luxembourg',
        'MO' => 'Macao',
        'MK' => 'North Macedonia',
        'MG' => 'Madagascar',
        'MW' => 'Malawi',
        'MY' => 'Malaysia',
        'MV' => 'Maldives',
        'ML' => 'Mali',
        'MT' => 'Malta',
        'MH' => 'Marshall Islands',
        'MQ' => 'Martinique',
        'MR' => 'Mauritania',
        'MU' => 'Mauritius',
        'YT' => 'Mayotte',
        'MX' => 'Mexico',
        'FM' => 'Micronesia',
        'MD' => 'Moldova',
        'MC' => 'Monaco',
        'MN' => 'Mongolia',
        'ME' => 'Montenegro',
        'MS' => 'Montserrat',
        'MA' => 'Morocco',
        'MZ' => 'Mozambique',
        'MM' => 'Myanmar',
        'NA' => 'Namibia',
        'NR' => 'Nauru',
        'NP' => 'Nepal',
        'NL' => 'Netherlands',
        'NC' => 'New Caledonia',
        'NZ' => 'New Zealand',
        'NI' => 'Nicaragua',
        'NE' => 'Niger',
        'NG' => 'Nigeria',
        'NU' => 'Niue',
        'NF' => 'Norfolk Island',
        'MP' => 'Northern Mariana Islands',
        'KP' => 'North Korea',
        'NO' => 'Norway',
        'OM' => 'Oman',
        'PK' => 'Pakistan',
        'PS' => 'Palestinian Territory',
        'PA' => 'Panama',
        'PG' => 'Papua New Guinea',
        'PY' => 'Paraguay',
        'PE' => 'Peru',
        'PH' => 'Philippines',
        'PN' => 'Pitcairn',
        'PL' => 'Poland',
        'PT' => 'Portugal',
        'PR' => 'Puerto Rico',
        'QA' => 'Qatar',
        'RE' => 'Reunion',
        'RO' => 'Romania',
        'RU' => 'Russia',
        'RW' => 'Rwanda',
        'BL' => 'Saint Barth&eacute;lemy',
        'SH' => 'Saint Helena',
        'KN' => 'Saint Kitts and Nevis',
        'LC' => 'Saint Lucia',
        'MF' => 'Saint Martin (French part)',
        'SX' => 'Saint Martin (Dutch part)',
        'PM' => 'Saint Pierre and Miquelon',
        'VC' => 'Saint Vincent and the Grenadines',
        'SM' => 'San Marino',
        'ST' => 'S&atilde;o Tom&eacute; and Pr&iacute;ncipe',
        'SA' => 'Saudi Arabia',
        'SN' => 'Senegal',
        'RS' => 'Serbia',
        'SC' => 'Seychelles',
        'SL' => 'Sierra Leone',
        'SG' => 'Singapore',
        'SK' => 'Slovakia',
        'SI' => 'Slovenia',
        'SB' => 'Solomon Islands',
        'SO' => 'Somalia',
        'ZA' => 'South Africa',
        'GS' => 'South Georgia/Sandwich Islands',
        'KR' => 'South Korea',
        'SS' => 'South Sudan',
        'ES' => 'Spain',
        'LK' => 'Sri Lanka',
        'SD' => 'Sudan',
        'SR' => 'Suriname',
        'SJ' => 'Svalbard and Jan Mayen',
        'SZ' => 'Swaziland',
        'SE' => 'Sweden',
        'CH' => 'Switzerland',
        'SY' => 'Syria',
        'TW' => 'Taiwan',
        'TJ' => 'Tajikistan',
        'TZ' => 'Tanzania',
        'TH' => 'Thailand',
        'TL' => 'Timor-Leste',
        'TG' => 'Togo',
        'TK' => 'Tokelau',
        'TO' => 'Tonga',
        'TT' => 'Trinidad and Tobago',
        'TN' => 'Tunisia',
        'TR' => 'Turkey',
        'TM' => 'Turkmenistan',
        'TC' => 'Turks and Caicos Islands',
        'TV' => 'Tuvalu',
        'UG' => 'Uganda',
        'UA' => 'Ukraine',
        'AE' => 'United Arab Emirates',
        'GB' => 'United Kingdom (UK)',
        'US' => 'United States (US)',
        'UM' => 'United States (US) Minor Outlying Islands',
        'UY' => 'Uruguay',
        'UZ' => 'Uzbekistan',
        'VU' => 'Vanuatu',
        'VA' => 'Vatican',
        'VE' => 'Venezuela',
        'VN' => 'Vietnam',
        'VG' => 'Virgin Islands (British)',
        'VI' => 'Virgin Islands (US)',
        'WF' => 'Wallis and Futuna',
        'EH' => 'Western Sahara',
        'WS' => 'Samoa',
        'YE' => 'Yemen',
        'ZM' => 'Zambia',
        'ZW' => 'Zimbabwe',
    ],
    'purifier'  => [
        'HTML.Doctype'             => 'HTML 4.01 Transitional',
        'HTML.Allowed'             => 'div,b,strong,i,em,u,a[href|title],ul,ol,li,p[style],br,span[style],img[width|height|alt|src|style]',
        'HTML.AllowedElements'     => [
            'a',
            'b',
            'blockquote',
            'br',
            'code',
            'em',
            'h1',
            'h2',
            'h3',
            'h4',
            'h5',
            'h6',
            'hr',
            'i',
            'img',
            'li',
            'ol',
            'p',
            'pre',
            's',
            'span',
            'strong',
            'sub',
            'sup',
            'table',
            'tbody',
            'td',
            'th',
            'thead',
            'tr',
            'u',
            'ul',
            'pre',
            'abbr',
            'kbd',
            'var',
            'samp',
            'hr',
            'iframe',
            'figure',
            'figcaption',
            'section',
            'article',
            'aside',
            'blockquote',
            'caption',
            'del',
        ],
        'HTML.SafeIframe'          => 'true',
        'URI.SafeIframeRegexp'     => '%^(http://|https://|//)(www.youtube.com/embed/|player.vimeo.com/video/)%',
        'CSS.AllowedProperties'    => [
            'font',
            'font-size',
            'font-weight',
            'font-style',
            'font-family',
            'text-decoration',
            'padding-left',
            'color',
            'background-color',
            'text-align',
            'max-width',
            'border',
            'width',
            'line-height',
            'word-spacing',
            'border-style',
            'list-style-type',
            'border-color',
            'height',
            'min-width',
            'min-height',
            'max-height',
        ],
        'CSS.MaxImgLength'         => null,
        'AutoFormat.AutoParagraph' => false,
        'AutoFormat.RemoveEmpty'   => false,
    ],
];
