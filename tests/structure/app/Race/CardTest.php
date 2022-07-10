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

class CardTest extends StructureTestCase
{
    public function testClass(): ReflectionClass
    {
        $this->assertTrue(\class_exists(base64_decode('UmFjZVxDYXJk')), base64_decode('Q2xhc3MgJ1JhY2VcQ2FyZCcgZG9lcyBub3QgZXhpc3Qu'));
        $class = new ReflectionClass(base64_decode('UmFjZVxDYXJk'));
        $this->assertTrue($class->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxDYXJkIGlzIG5vdCBhYnN0cmFjdC4='));
        $this->assertFalse($class->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxDYXJkIGlzIGZpbmFsLg=='));
        return $class;
    }

    /** @depends testClass */
    public function testMethodAppend(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('YXBwZW5k')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIGFwcGVuZCBub3QgZm91bmQgaW4gY2xhc3MgUmFjZVxDYXJk'));

        $method = $class->getMethod(base64_decode('YXBwZW5k'));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZDo6YXBwZW5kKCkgaXMgbm90IHB1YmxpYy4='));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZDo6YXBwZW5kKCkgaXMgYWJzdHJhY3Qu'));
        $this->assertTrue($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZDo6YXBwZW5kKCkgaXMgbm90IGZpbmFsLg=='));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZDo6YXBwZW5kKCkgaXMgc3RhdGljLg=='));
        $this->assertEquals(1, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZDo6YXBwZW5kKCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHJlcXVpcmVkIHBhcmFtZXRlcnMu'));
        $this->assertGreaterThanOrEqual(1, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZDo6YXBwZW5kKCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHBhcmFtZXRlcnMu'));
        $this->assertSame(base64_decode('dm9pZA=='), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZDo6YXBwZW5kKCkgaGFzIGludmFsaWQgcmV0dXJuIHR5cGUu'));

        $param0 = $method->getParameters()[0];
        $this->assertSame(base64_decode('Y2FyZA=='), $param0->getName(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICMwIG9mIG1ldGhvZCBSYWNlXENhcmQ6OmFwcGVuZCgpIGhhcyBpbnZhbGlkIG5hbWUu'));
        $this->assertSame(base64_decode('UmFjZVxDYXJk'), $this->getType($param0->getType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRjYXJkIG9mIG1ldGhvZCBSYWNlXENhcmQ6OmFwcGVuZCgpIGhhcyBpbnZhbGlkIHR5cGUu'));
        $this->assertFalse($param0->allowsNull(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRjYXJkIG9mIG1ldGhvZCBSYWNlXENhcmQ6OmFwcGVuZCgpIGFsbG93cyBudWxsLg=='));
    }

    /** @depends testClass */
    public function testMethodHandle(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('aGFuZGxl')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIGhhbmRsZSBub3QgZm91bmQgaW4gY2xhc3MgUmFjZVxDYXJk'));

        $method = $class->getMethod(base64_decode('aGFuZGxl'));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZDo6aGFuZGxlKCkgaXMgbm90IHB1YmxpYy4='));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZDo6aGFuZGxlKCkgaXMgYWJzdHJhY3Qu'));
        $this->assertTrue($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZDo6aGFuZGxlKCkgaXMgbm90IGZpbmFsLg=='));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZDo6aGFuZGxlKCkgaXMgc3RhdGljLg=='));
        $this->assertEquals(1, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZDo6aGFuZGxlKCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHJlcXVpcmVkIHBhcmFtZXRlcnMu'));
        $this->assertGreaterThanOrEqual(1, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZDo6aGFuZGxlKCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHBhcmFtZXRlcnMu'));
        $this->assertNull($this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZDo6aGFuZGxlKCkgaGFzIGludmFsaWQgcmV0dXJuIHR5cGUu'));

        $param0 = $method->getParameters()[0];
        $this->assertSame(base64_decode('ZGljZVRocm93UmVzdWx0'), $param0->getName(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICMwIG9mIG1ldGhvZCBSYWNlXENhcmQ6OmhhbmRsZSgpIGhhcyBpbnZhbGlkIG5hbWUu'));
        $this->assertSame(base64_decode('aW50'), $this->getType($param0->getType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRkaWNlVGhyb3dSZXN1bHQgb2YgbWV0aG9kIFJhY2VcQ2FyZDo6aGFuZGxlKCkgaGFzIGludmFsaWQgdHlwZS4='));
        $this->assertFalse($param0->allowsNull(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRkaWNlVGhyb3dSZXN1bHQgb2YgbWV0aG9kIFJhY2VcQ2FyZDo6aGFuZGxlKCkgYWxsb3dzIG51bGwu'));
    }

    /** @depends testClass */
    public function testMethodGetNext(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('Z2V0TmV4dA==')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIGdldE5leHQgbm90IGZvdW5kIGluIGNsYXNzIFJhY2VcQ2FyZA=='));

        $method = $class->getMethod(base64_decode('Z2V0TmV4dA=='));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZDo6Z2V0TmV4dCgpIGlzIG5vdCBwdWJsaWMu'));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZDo6Z2V0TmV4dCgpIGlzIGFic3RyYWN0Lg=='));
        $this->assertTrue($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZDo6Z2V0TmV4dCgpIGlzIG5vdCBmaW5hbC4='));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZDo6Z2V0TmV4dCgpIGlzIHN0YXRpYy4='));
        $this->assertEquals(0, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZDo6Z2V0TmV4dCgpIGhhcyBpbnZhbGlkIG51bWJlciBvZiByZXF1aXJlZCBwYXJhbWV0ZXJzLg=='));
        $this->assertGreaterThanOrEqual(0, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZDo6Z2V0TmV4dCgpIGhhcyBpbnZhbGlkIG51bWJlciBvZiBwYXJhbWV0ZXJzLg=='));
        $this->assertSame(base64_decode('UmFjZVxDYXJkfG51bGw='), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZDo6Z2V0TmV4dCgpIGhhcyBpbnZhbGlkIHJldHVybiB0eXBlLg=='));
    }
}
