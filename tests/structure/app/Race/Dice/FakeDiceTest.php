<?php

/**
 * Project structure test, generated automatically. DO NOT MODIFY.
 *
 * @noinspection ALL
 */
declare(strict_types=1);

namespace tests\structure\Race\Dice;

use ReflectionClass;
use tests\structure\StructureTestCase;

require_once __DIR__ . '/../../../StructureTestCase.php';

class FakeDiceTest extends StructureTestCase
{
    public function testClass(): ReflectionClass
    {
        $this->assertTrue(\class_exists(base64_decode('UmFjZVxEaWNlXEZha2VEaWNl')), base64_decode('Q2xhc3MgJ1JhY2VcRGljZVxGYWtlRGljZScgZG9lcyBub3QgZXhpc3Qu'));
        $class = new ReflectionClass(base64_decode('UmFjZVxEaWNlXEZha2VEaWNl'));
        $this->assertFalse($class->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxEaWNlXEZha2VEaWNlIGlzIGFic3RyYWN0Lg=='));
        $this->assertFalse($class->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxEaWNlXEZha2VEaWNlIGlzIGZpbmFsLg=='));
        $this->assertTrue($class->isSubclassOf(base64_decode('UmFjZVxEaWNlXFN0YW5kYXJkRGljZQ==')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxEaWNlXEZha2VEaWNlIGlzIG5vdCBhIHN1YmNsYXNzIG9mIFJhY2VcRGljZVxTdGFuZGFyZERpY2Uu'));
        $this->assertTrue($class->implementsInterface(base64_decode('UmFjZVxEaWNl')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxEaWNlXEZha2VEaWNlIGRvZXMgbm90IGltcGxlbWVudCBpbnRlcmZhY2UgUmFjZVxEaWNlLg=='));
        $this->assertTrue($class->isInstantiable(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxEaWNlXEZha2VEaWNlIGlzIG5vdCBpbnN0YW50aWFibGUu'));
        return $class;
    }

    /** @depends testClass */
    public function testMethod__construct(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('X19jb25zdHJ1Y3Q=')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIF9fY29uc3RydWN0IG5vdCBmb3VuZCBpbiBjbGFzcyBSYWNlXERpY2VcRmFrZURpY2U='));

        $method = $class->getMethod(base64_decode('X19jb25zdHJ1Y3Q='));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZVxGYWtlRGljZTo6X19jb25zdHJ1Y3QoKSBpcyBub3QgcHVibGljLg=='));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZVxGYWtlRGljZTo6X19jb25zdHJ1Y3QoKSBpcyBhYnN0cmFjdC4='));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZVxGYWtlRGljZTo6X19jb25zdHJ1Y3QoKSBpcyBmaW5hbC4='));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZVxGYWtlRGljZTo6X19jb25zdHJ1Y3QoKSBpcyBzdGF0aWMu'));
        $this->assertEquals(0, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZVxGYWtlRGljZTo6X19jb25zdHJ1Y3QoKSBoYXMgaW52YWxpZCBudW1iZXIgb2YgcmVxdWlyZWQgcGFyYW1ldGVycy4='));
        $this->assertGreaterThanOrEqual(2, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZVxGYWtlRGljZTo6X19jb25zdHJ1Y3QoKSBoYXMgaW52YWxpZCBudW1iZXIgb2YgcGFyYW1ldGVycy4='));
        $this->assertNull($this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZVxGYWtlRGljZTo6X19jb25zdHJ1Y3QoKSBoYXMgaW52YWxpZCByZXR1cm4gdHlwZS4='));

        $param0 = $method->getParameters()[0];
        $this->assertSame(base64_decode('c2lkZXM='), $param0->getName(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICMwIG9mIG1ldGhvZCBSYWNlXERpY2VcRmFrZURpY2U6Ol9fY29uc3RydWN0KCkgaGFzIGludmFsaWQgbmFtZS4='));
        $this->assertSame(base64_decode('aW50'), $this->getType($param0->getType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRzaWRlcyBvZiBtZXRob2QgUmFjZVxEaWNlXEZha2VEaWNlOjpfX2NvbnN0cnVjdCgpIGhhcyBpbnZhbGlkIHR5cGUu'));
        $this->assertFalse($param0->allowsNull(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRzaWRlcyBvZiBtZXRob2QgUmFjZVxEaWNlXEZha2VEaWNlOjpfX2NvbnN0cnVjdCgpIGFsbG93cyBudWxsLg=='));
        $this->assertTrue($param0->isDefaultValueAvailable(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRzaWRlcyBvZiBtZXRob2QgUmFjZVxEaWNlXEZha2VEaWNlOjpfX2NvbnN0cnVjdCgpIGRvZXMgbm90IGhhdmUgZGVmYXVsdCB2YWx1ZS4='));
        $this->assertEquals(6, $param0->getDefaultValue(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRzaWRlcyBvZiBtZXRob2QgUmFjZVxEaWNlXEZha2VEaWNlOjpfX2NvbnN0cnVjdCgpIGhhcyBpbnZhbGlkIGRlZmF1bHQgdmFsdWUu'));

        $param1 = $method->getParameters()[1];
        $this->assertSame(base64_decode('cmVzdWx0'), $param1->getName(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICMxIG9mIG1ldGhvZCBSYWNlXERpY2VcRmFrZURpY2U6Ol9fY29uc3RydWN0KCkgaGFzIGludmFsaWQgbmFtZS4='));
        $this->assertSame(base64_decode('aW50'), $this->getType($param1->getType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRyZXN1bHQgb2YgbWV0aG9kIFJhY2VcRGljZVxGYWtlRGljZTo6X19jb25zdHJ1Y3QoKSBoYXMgaW52YWxpZCB0eXBlLg=='));
        $this->assertFalse($param1->allowsNull(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRyZXN1bHQgb2YgbWV0aG9kIFJhY2VcRGljZVxGYWtlRGljZTo6X19jb25zdHJ1Y3QoKSBhbGxvd3MgbnVsbC4='));
        $this->assertTrue($param1->isDefaultValueAvailable(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRyZXN1bHQgb2YgbWV0aG9kIFJhY2VcRGljZVxGYWtlRGljZTo6X19jb25zdHJ1Y3QoKSBkb2VzIG5vdCBoYXZlIGRlZmF1bHQgdmFsdWUu'));
        $this->assertEquals(1, $param1->getDefaultValue(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRyZXN1bHQgb2YgbWV0aG9kIFJhY2VcRGljZVxGYWtlRGljZTo6X19jb25zdHJ1Y3QoKSBoYXMgaW52YWxpZCBkZWZhdWx0IHZhbHVlLg=='));
    }

    /** @depends testClass */
    public function testMethodRandom(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('cmFuZG9t')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIHJhbmRvbSBub3QgZm91bmQgaW4gY2xhc3MgUmFjZVxEaWNlXEZha2VEaWNl'));

        $method = $class->getMethod(base64_decode('cmFuZG9t'));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZVxGYWtlRGljZTo6cmFuZG9tKCkgaXMgbm90IHB1YmxpYy4='));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZVxGYWtlRGljZTo6cmFuZG9tKCkgaXMgYWJzdHJhY3Qu'));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZVxGYWtlRGljZTo6cmFuZG9tKCkgaXMgZmluYWwu'));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZVxGYWtlRGljZTo6cmFuZG9tKCkgaXMgc3RhdGljLg=='));
        $this->assertEquals(0, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZVxGYWtlRGljZTo6cmFuZG9tKCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHJlcXVpcmVkIHBhcmFtZXRlcnMu'));
        $this->assertGreaterThanOrEqual(0, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZVxGYWtlRGljZTo6cmFuZG9tKCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHBhcmFtZXRlcnMu'));
        $this->assertSame(base64_decode('aW50'), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZVxGYWtlRGljZTo6cmFuZG9tKCkgaGFzIGludmFsaWQgcmV0dXJuIHR5cGUu'));
    }
}
