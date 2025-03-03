<?php

namespace Apps\Fintech\Packages\Mf\Navs\Install\Schema;

use Phalcon\Db\Column;
use Phalcon\Db\Index;

class MfNavs
{
    public function columns()
    {
        return
        [
           'columns' => [
                new Column(
                    'id',
                    [
                        'type'          => Column::TYPE_INTEGER,
                        'notNull'       => true,
                        'autoIncrement' => true,
                        'primary'       => true,
                    ]
                ),
                new Column(
                    'amfi_code',
                    [
                        'type'          => Column::TYPE_INTEGER,
                        'notNull'       => true,
                    ]
                ),
                new Column(
                    'last_updated',
                    [
                        'type'          => Column::TYPE_VARCHAR,
                        'size'          => 50,
                        'notNull'       => true,
                    ]
                ),
                new Column(
                    'latest_nav',
                    [
                        'type'          => Column::TYPE_FLOAT,
                        'notNull'       => true,
                    ]
                ),
                new Column(
                    'diff',
                    [
                        'type'          => Column::TYPE_FLOAT,
                        'notNull'       => false,
                    ]
                ),
                new Column(
                    'diff_percent',
                    [
                        'type'          => Column::TYPE_FLOAT,
                        'notNull'       => false,
                    ]
                ),
                new Column(
                    'trajectory',
                    [
                        'type'          => Column::TYPE_VARCHAR,
                        'size'          => 5,
                        'notNull'       => false,
                    ]
                ),
                new Column(
                    'navs',
                    [
                        'type'          => Column::TYPE_JSON,
                        'notNull'       => true,
                    ]
                ),
                new Column(
                    'navs_chunks',
                    [
                        'type'          => Column::TYPE_JSON,
                        'notNull'       => true,
                    ]
                )
            ],
            'indexes' => [
                new Index(
                    'column_UNIQUE',
                    [
                        'amfi_code'
                    ],
                    'UNIQUE'
                )
            ],
            'options' => [
                'TABLE_COLLATION' => 'utf8mb4_general_ci'
            ]
        ];
    }

    public function indexes()
    {
        return
        [
            new Index(
                'column_INDEX',
                [
                    'amfi_code'
                ],
                'INDEX'
            )
        ];
    }
}
