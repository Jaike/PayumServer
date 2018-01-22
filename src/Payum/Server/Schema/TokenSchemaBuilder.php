<?php
declare(strict_types=1);

namespace Payum\Server\Schema;

use Payum\Server\Util\StringUtil;

/**
 * Class TokenSchemaBuilder
 * @package Payum\Server\Schema
 */
class TokenSchemaBuilder
{
    /**
     * @return object
     */
    public function buildNew()
    {
        return (object) [
            '$schema' => 'http://json-schema.org/schema#',
            'type' => 'object',
            'properties' => (object) [
                'type' => (object) [
                    'type' => 'string',
                    'enum' => ['authorize', 'capture'],
                    'title' => StringUtil::nameToTitle('type'),
                ],
                'afterUrl' => (object) [
                    'type' => 'string',
                    'title' => StringUtil::nameToTitle('afterUrl'),
                ],
                'paymentId' => (object) [
                    'type' => 'string',
                    'title' => StringUtil::nameToTitle('paymentId'),
                ],
            ],
            "required" => ["type", "afterUrl", "paymentId"],
        ];
    }
}
