<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "صبا سلز | نرم افزار مدیریت ارتباط با مشتری (سی آر ام) صبا", // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => 'نرم افزار CRM صبا سلز |   ۱۰۰ درصدر رضایت مشتری  | راه ایده آل برای فروش بیشتر
صبا به شما این امکان را میدهد تا تمام اطلاعات مشتریان خود را در یک مکان جمع آوری کرده و معاملات خود را پیگری کنید.', 
            'separator'    => ' - ',
            'keywords'     => [],
            'canonical'    => false, // Set null for using Url::current(), set false to total remove
            'robots'       => false, // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'        => "صبا سلز | نرم افزار مدیریت ارتباط با مشتری (سی آر ام) صبا", // set 
            'description'  => 'نرم افزار CRM صبا سلز |   ۱۰۰ درصدر رضایت مشتری  | راه ایده آل برای فروش بیشتر
صبا به شما این امکان را میدهد تا تمام اطلاعات مشتریان خود را در یک مکان جمع آوری کرده و معاملات خود را پیگری کنید.', 
            'url'         => false, // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => false,
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            //'card'        => 'summary',
            //'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'        => "صبا سلز | نرم افزار مدیریت ارتباط با مشتری (سی آر ام) صبا", // set false to total remove
                        'description'  => 'نرم افزار CRM صبا سلز |   ۱۰۰ درصدر رضایت مشتری  | راه ایده آل برای فروش بیشتر
صبا به شما این امکان را میدهد تا تمام اطلاعات مشتریان خود را در یک مکان جمع آوری کرده و معاملات خود را پیگری کنید.', 
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [],
        ],
    ],
];
