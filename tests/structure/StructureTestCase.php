<?php

/**
 * Project structure test, generated automatically. DO NOT MODIFY.
 *
 * @noinspection ALL
 */
declare(strict_types=1);

namespace tests\structure;

use PHPUnit\Framework\TestCase;
use ReflectionType;

abstract class StructureTestCase extends TestCase
{
    protected function getType(?ReflectionType $type): ?string
    {
        if (!$type) {
            return null;
        }

        // Function ReflectionType::__toString() is deprecated in PHP 7.x. But it's no longer the case for PHP 8.
        if (version_compare(PHP_VERSION, '8.0', '<')) {
            /** @noinspection PhpPossiblePolymorphicInvocationInspection */
            /** @var \ReflectionNamedType $type */
            return $type->getName() . ($type->allowsNull() ? '|null' : '');
        }

        $typeStr = (string) $type;

        // PHP 8.0 represents nullable types with ? prefix (except mixed, because ?mixed is syntactically invalid).
        // In PHP 8.1 the existing ?T notation is considered a shorthand for the common case of T|null.
        if (substr($typeStr, 0, 1) === '?') {
            $typeStr = substr($typeStr, 1) . '|null';
        }

        return $typeStr;
    }
}
