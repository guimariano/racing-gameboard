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

class MovingStrategyTest extends StructureTestCase
{
    public function testClass(): ReflectionClass
    {
        $this->assertTrue(\interface_exists(base64_decode('UmFjZVxNb3ZpbmdTdHJhdGVneQ==')), base64_decode('SW50ZXJmYWNlICdSYWNlXE1vdmluZ1N0cmF0ZWd5JyBkb2VzIG5vdCBleGlzdC4='));
        $class = new ReflectionClass(base64_decode('UmFjZVxNb3ZpbmdTdHJhdGVneQ=='));
        $this->assertTrue($class->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxNb3ZpbmdTdHJhdGVneSBpcyBub3QgYWJzdHJhY3Qu'));
        $this->assertFalse($class->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxNb3ZpbmdTdHJhdGVneSBpcyBmaW5hbC4='));
        return $class;
    }

    /** @depends testClass */
    public function testMethodCalculate(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('Y2FsY3VsYXRl')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIGNhbGN1bGF0ZSBub3QgZm91bmQgaW4gY2xhc3MgUmFjZVxNb3ZpbmdTdHJhdGVneQ=='));

        $method = $class->getMethod(base64_decode('Y2FsY3VsYXRl'));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcTW92aW5nU3RyYXRlZ3k6OmNhbGN1bGF0ZSgpIGlzIG5vdCBwdWJsaWMu'));
        $this->assertTrue($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcTW92aW5nU3RyYXRlZ3k6OmNhbGN1bGF0ZSgpIGlzIG5vdCBhYnN0cmFjdC4='));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcTW92aW5nU3RyYXRlZ3k6OmNhbGN1bGF0ZSgpIGlzIGZpbmFsLg=='));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcTW92aW5nU3RyYXRlZ3k6OmNhbGN1bGF0ZSgpIGlzIHN0YXRpYy4='));
        $this->assertEquals(1, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcTW92aW5nU3RyYXRlZ3k6OmNhbGN1bGF0ZSgpIGhhcyBpbnZhbGlkIG51bWJlciBvZiByZXF1aXJlZCBwYXJhbWV0ZXJzLg=='));
        $this->assertGreaterThanOrEqual(1, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcTW92aW5nU3RyYXRlZ3k6OmNhbGN1bGF0ZSgpIGhhcyBpbnZhbGlkIG51bWJlciBvZiBwYXJhbWV0ZXJzLg=='));
        $this->assertSame(base64_decode('aW50'), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcTW92aW5nU3RyYXRlZ3k6OmNhbGN1bGF0ZSgpIGhhcyBpbnZhbGlkIHJldHVybiB0eXBlLg=='));

        $param0 = $method->getParameters()[0];
        $this->assertSame(base64_decode('ZGljZQ=='), $param0->getName(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICMwIG9mIG1ldGhvZCBSYWNlXE1vdmluZ1N0cmF0ZWd5OjpjYWxjdWxhdGUoKSBoYXMgaW52YWxpZCBuYW1lLg=='));
        $this->assertSame(base64_decode('UmFjZVxEaWNl'), $this->getType($param0->getType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRkaWNlIG9mIG1ldGhvZCBSYWNlXE1vdmluZ1N0cmF0ZWd5OjpjYWxjdWxhdGUoKSBoYXMgaW52YWxpZCB0eXBlLg=='));
        $this->assertFalse($param0->allowsNull(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRkaWNlIG9mIG1ldGhvZCBSYWNlXE1vdmluZ1N0cmF0ZWd5OjpjYWxjdWxhdGUoKSBhbGxvd3MgbnVsbC4='));
    }
}
