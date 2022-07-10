<?php

/**
 * Project structure test, generated automatically. DO NOT MODIFY.
 *
 * @noinspection ALL
 */
declare(strict_types=1);

namespace tests\structure\Race;

use ReflectionClass;
use tests\structure\StructureTestCase;

require_once __DIR__ . '/../../StructureTestCase.php';

class ScoringBoardTest extends StructureTestCase
{
    public function testClass(): ReflectionClass
    {
        $this->assertTrue(\class_exists(base64_decode('UmFjZVxTY29yaW5nQm9hcmQ=')), base64_decode('Q2xhc3MgJ1JhY2VcU2NvcmluZ0JvYXJkJyBkb2VzIG5vdCBleGlzdC4='));
        $class = new ReflectionClass(base64_decode('UmFjZVxTY29yaW5nQm9hcmQ='));
        $this->assertFalse($class->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxTY29yaW5nQm9hcmQgaXMgYWJzdHJhY3Qu'));
        $this->assertFalse($class->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxTY29yaW5nQm9hcmQgaXMgZmluYWwu'));
        $this->assertTrue($class->implementsInterface(\SplObserver::class), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxTY29yaW5nQm9hcmQgZG9lcyBub3QgaW1wbGVtZW50IGludGVyZmFjZSBTcGxPYnNlcnZlci4='));
        $this->assertTrue($class->isInstantiable(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxTY29yaW5nQm9hcmQgaXMgbm90IGluc3RhbnRpYWJsZS4='));
        return $class;
    }

    /** @depends testClass */
    public function testMethodGetTopPlayers(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('Z2V0VG9wUGxheWVycw==')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIGdldFRvcFBsYXllcnMgbm90IGZvdW5kIGluIGNsYXNzIFJhY2VcU2NvcmluZ0JvYXJk'));

        $method = $class->getMethod(base64_decode('Z2V0VG9wUGxheWVycw=='));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU2NvcmluZ0JvYXJkOjpnZXRUb3BQbGF5ZXJzKCkgaXMgbm90IHB1YmxpYy4='));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU2NvcmluZ0JvYXJkOjpnZXRUb3BQbGF5ZXJzKCkgaXMgYWJzdHJhY3Qu'));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU2NvcmluZ0JvYXJkOjpnZXRUb3BQbGF5ZXJzKCkgaXMgZmluYWwu'));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU2NvcmluZ0JvYXJkOjpnZXRUb3BQbGF5ZXJzKCkgaXMgc3RhdGljLg=='));
        $this->assertEquals(0, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU2NvcmluZ0JvYXJkOjpnZXRUb3BQbGF5ZXJzKCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHJlcXVpcmVkIHBhcmFtZXRlcnMu'));
        $this->assertGreaterThanOrEqual(1, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU2NvcmluZ0JvYXJkOjpnZXRUb3BQbGF5ZXJzKCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHBhcmFtZXRlcnMu'));
        $this->assertSame(base64_decode('YXJyYXk='), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU2NvcmluZ0JvYXJkOjpnZXRUb3BQbGF5ZXJzKCkgaGFzIGludmFsaWQgcmV0dXJuIHR5cGUu'));

        $param0 = $method->getParameters()[0];
        $this->assertSame(base64_decode('bGVuZ3Ro'), $param0->getName(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICMwIG9mIG1ldGhvZCBSYWNlXFNjb3JpbmdCb2FyZDo6Z2V0VG9wUGxheWVycygpIGhhcyBpbnZhbGlkIG5hbWUu'));
        $this->assertSame(base64_decode('aW50'), $this->getType($param0->getType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRsZW5ndGggb2YgbWV0aG9kIFJhY2VcU2NvcmluZ0JvYXJkOjpnZXRUb3BQbGF5ZXJzKCkgaGFzIGludmFsaWQgdHlwZS4='));
        $this->assertFalse($param0->allowsNull(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRsZW5ndGggb2YgbWV0aG9kIFJhY2VcU2NvcmluZ0JvYXJkOjpnZXRUb3BQbGF5ZXJzKCkgYWxsb3dzIG51bGwu'));
        $this->assertTrue($param0->isDefaultValueAvailable(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRsZW5ndGggb2YgbWV0aG9kIFJhY2VcU2NvcmluZ0JvYXJkOjpnZXRUb3BQbGF5ZXJzKCkgZG9lcyBub3QgaGF2ZSBkZWZhdWx0IHZhbHVlLg=='));
        $this->assertEquals(3, $param0->getDefaultValue(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRsZW5ndGggb2YgbWV0aG9kIFJhY2VcU2NvcmluZ0JvYXJkOjpnZXRUb3BQbGF5ZXJzKCkgaGFzIGludmFsaWQgZGVmYXVsdCB2YWx1ZS4='));
    }

    /** @depends testClass */
    public function testMethodUpdate(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('dXBkYXRl')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIHVwZGF0ZSBub3QgZm91bmQgaW4gY2xhc3MgUmFjZVxTY29yaW5nQm9hcmQ='));

        $method = $class->getMethod(base64_decode('dXBkYXRl'));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU2NvcmluZ0JvYXJkOjp1cGRhdGUoKSBpcyBub3QgcHVibGljLg=='));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU2NvcmluZ0JvYXJkOjp1cGRhdGUoKSBpcyBhYnN0cmFjdC4='));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU2NvcmluZ0JvYXJkOjp1cGRhdGUoKSBpcyBmaW5hbC4='));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU2NvcmluZ0JvYXJkOjp1cGRhdGUoKSBpcyBzdGF0aWMu'));
        $this->assertEquals(1, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU2NvcmluZ0JvYXJkOjp1cGRhdGUoKSBoYXMgaW52YWxpZCBudW1iZXIgb2YgcmVxdWlyZWQgcGFyYW1ldGVycy4='));
        $this->assertGreaterThanOrEqual(1, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU2NvcmluZ0JvYXJkOjp1cGRhdGUoKSBoYXMgaW52YWxpZCBudW1iZXIgb2YgcGFyYW1ldGVycy4='));
        $this->assertSame(base64_decode('dm9pZA=='), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU2NvcmluZ0JvYXJkOjp1cGRhdGUoKSBoYXMgaW52YWxpZCByZXR1cm4gdHlwZS4='));

        $param0 = $method->getParameters()[0];
        $this->assertSame(base64_decode('c3ViamVjdA=='), $param0->getName(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICMwIG9mIG1ldGhvZCBSYWNlXFNjb3JpbmdCb2FyZDo6dXBkYXRlKCkgaGFzIGludmFsaWQgbmFtZS4='));
        $this->assertSame(base64_decode('U3BsU3ViamVjdA=='), $this->getType($param0->getType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRzdWJqZWN0IG9mIG1ldGhvZCBSYWNlXFNjb3JpbmdCb2FyZDo6dXBkYXRlKCkgaGFzIGludmFsaWQgdHlwZS4='));
        $this->assertFalse($param0->allowsNull(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRzdWJqZWN0IG9mIG1ldGhvZCBSYWNlXFNjb3JpbmdCb2FyZDo6dXBkYXRlKCkgYWxsb3dzIG51bGwu'));
    }
}
