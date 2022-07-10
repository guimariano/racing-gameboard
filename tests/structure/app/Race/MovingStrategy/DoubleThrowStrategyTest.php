<?php

/**
 * Project structure test, generated automatically. DO NOT MODIFY.
 *
 * @noinspection ALL
 */
declare(strict_types=1);

namespace tests\structure\Race\MovingStrategy;

use ReflectionClass;
use tests\structure\StructureTestCase;

require_once __DIR__ . '/../../../StructureTestCase.php';

class DoubleThrowStrategyTest extends StructureTestCase
{
    public function testClass(): ReflectionClass
    {
        $this->assertTrue(\class_exists(base64_decode('UmFjZVxNb3ZpbmdTdHJhdGVneVxEb3VibGVUaHJvd1N0cmF0ZWd5')), base64_decode('Q2xhc3MgJ1JhY2VcTW92aW5nU3RyYXRlZ3lcRG91YmxlVGhyb3dTdHJhdGVneScgZG9lcyBub3QgZXhpc3Qu'));
        $class = new ReflectionClass(base64_decode('UmFjZVxNb3ZpbmdTdHJhdGVneVxEb3VibGVUaHJvd1N0cmF0ZWd5'));
        $this->assertFalse($class->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxNb3ZpbmdTdHJhdGVneVxEb3VibGVUaHJvd1N0cmF0ZWd5IGlzIGFic3RyYWN0Lg=='));
        $this->assertFalse($class->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxNb3ZpbmdTdHJhdGVneVxEb3VibGVUaHJvd1N0cmF0ZWd5IGlzIGZpbmFsLg=='));
        $this->assertTrue($class->implementsInterface(base64_decode('UmFjZVxNb3ZpbmdTdHJhdGVneQ==')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxNb3ZpbmdTdHJhdGVneVxEb3VibGVUaHJvd1N0cmF0ZWd5IGRvZXMgbm90IGltcGxlbWVudCBpbnRlcmZhY2UgUmFjZVxNb3ZpbmdTdHJhdGVneS4='));
        $this->assertTrue($class->isInstantiable(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxNb3ZpbmdTdHJhdGVneVxEb3VibGVUaHJvd1N0cmF0ZWd5IGlzIG5vdCBpbnN0YW50aWFibGUu'));
        return $class;
    }

    /** @depends testClass */
    public function testMethodCalculate(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('Y2FsY3VsYXRl')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIGNhbGN1bGF0ZSBub3QgZm91bmQgaW4gY2xhc3MgUmFjZVxNb3ZpbmdTdHJhdGVneVxEb3VibGVUaHJvd1N0cmF0ZWd5'));

        $method = $class->getMethod(base64_decode('Y2FsY3VsYXRl'));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcTW92aW5nU3RyYXRlZ3lcRG91YmxlVGhyb3dTdHJhdGVneTo6Y2FsY3VsYXRlKCkgaXMgbm90IHB1YmxpYy4='));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcTW92aW5nU3RyYXRlZ3lcRG91YmxlVGhyb3dTdHJhdGVneTo6Y2FsY3VsYXRlKCkgaXMgYWJzdHJhY3Qu'));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcTW92aW5nU3RyYXRlZ3lcRG91YmxlVGhyb3dTdHJhdGVneTo6Y2FsY3VsYXRlKCkgaXMgZmluYWwu'));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcTW92aW5nU3RyYXRlZ3lcRG91YmxlVGhyb3dTdHJhdGVneTo6Y2FsY3VsYXRlKCkgaXMgc3RhdGljLg=='));
        $this->assertEquals(1, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcTW92aW5nU3RyYXRlZ3lcRG91YmxlVGhyb3dTdHJhdGVneTo6Y2FsY3VsYXRlKCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHJlcXVpcmVkIHBhcmFtZXRlcnMu'));
        $this->assertGreaterThanOrEqual(1, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcTW92aW5nU3RyYXRlZ3lcRG91YmxlVGhyb3dTdHJhdGVneTo6Y2FsY3VsYXRlKCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHBhcmFtZXRlcnMu'));
        $this->assertSame(base64_decode('aW50'), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcTW92aW5nU3RyYXRlZ3lcRG91YmxlVGhyb3dTdHJhdGVneTo6Y2FsY3VsYXRlKCkgaGFzIGludmFsaWQgcmV0dXJuIHR5cGUu'));

        $param0 = $method->getParameters()[0];
        $this->assertSame(base64_decode('ZGljZQ=='), $param0->getName(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICMwIG9mIG1ldGhvZCBSYWNlXE1vdmluZ1N0cmF0ZWd5XERvdWJsZVRocm93U3RyYXRlZ3k6OmNhbGN1bGF0ZSgpIGhhcyBpbnZhbGlkIG5hbWUu'));
        $this->assertSame(base64_decode('UmFjZVxEaWNl'), $this->getType($param0->getType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRkaWNlIG9mIG1ldGhvZCBSYWNlXE1vdmluZ1N0cmF0ZWd5XERvdWJsZVRocm93U3RyYXRlZ3k6OmNhbGN1bGF0ZSgpIGhhcyBpbnZhbGlkIHR5cGUu'));
        $this->assertFalse($param0->allowsNull(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRkaWNlIG9mIG1ldGhvZCBSYWNlXE1vdmluZ1N0cmF0ZWd5XERvdWJsZVRocm93U3RyYXRlZ3k6OmNhbGN1bGF0ZSgpIGFsbG93cyBudWxsLg=='));
    }
}
