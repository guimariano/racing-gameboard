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

class StandardDiceTest extends StructureTestCase
{
    public function testClass(): ReflectionClass
    {
        $this->assertTrue(\class_exists(base64_decode('UmFjZVxEaWNlXFN0YW5kYXJkRGljZQ==')), base64_decode('Q2xhc3MgJ1JhY2VcRGljZVxTdGFuZGFyZERpY2UnIGRvZXMgbm90IGV4aXN0Lg=='));
        $class = new ReflectionClass(base64_decode('UmFjZVxEaWNlXFN0YW5kYXJkRGljZQ=='));
        $this->assertFalse($class->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxEaWNlXFN0YW5kYXJkRGljZSBpcyBhYnN0cmFjdC4='));
        $this->assertFalse($class->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxEaWNlXFN0YW5kYXJkRGljZSBpcyBmaW5hbC4='));
        $this->assertTrue($class->implementsInterface(base64_decode('UmFjZVxEaWNl')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxEaWNlXFN0YW5kYXJkRGljZSBkb2VzIG5vdCBpbXBsZW1lbnQgaW50ZXJmYWNlIFJhY2VcRGljZS4='));
        $this->assertTrue($class->isInstantiable(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxEaWNlXFN0YW5kYXJkRGljZSBpcyBub3QgaW5zdGFudGlhYmxlLg=='));
        return $class;
    }

    /** @depends testClass */
    public function testMethod__construct(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('X19jb25zdHJ1Y3Q=')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIF9fY29uc3RydWN0IG5vdCBmb3VuZCBpbiBjbGFzcyBSYWNlXERpY2VcU3RhbmRhcmREaWNl'));

        $method = $class->getMethod(base64_decode('X19jb25zdHJ1Y3Q='));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZVxTdGFuZGFyZERpY2U6Ol9fY29uc3RydWN0KCkgaXMgbm90IHB1YmxpYy4='));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZVxTdGFuZGFyZERpY2U6Ol9fY29uc3RydWN0KCkgaXMgYWJzdHJhY3Qu'));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZVxTdGFuZGFyZERpY2U6Ol9fY29uc3RydWN0KCkgaXMgZmluYWwu'));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZVxTdGFuZGFyZERpY2U6Ol9fY29uc3RydWN0KCkgaXMgc3RhdGljLg=='));
        $this->assertEquals(0, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZVxTdGFuZGFyZERpY2U6Ol9fY29uc3RydWN0KCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHJlcXVpcmVkIHBhcmFtZXRlcnMu'));
        $this->assertGreaterThanOrEqual(1, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZVxTdGFuZGFyZERpY2U6Ol9fY29uc3RydWN0KCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHBhcmFtZXRlcnMu'));
        $this->assertNull($this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZVxTdGFuZGFyZERpY2U6Ol9fY29uc3RydWN0KCkgaGFzIGludmFsaWQgcmV0dXJuIHR5cGUu'));

        $param0 = $method->getParameters()[0];
        $this->assertSame(base64_decode('c2lkZXM='), $param0->getName(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICMwIG9mIG1ldGhvZCBSYWNlXERpY2VcU3RhbmRhcmREaWNlOjpfX2NvbnN0cnVjdCgpIGhhcyBpbnZhbGlkIG5hbWUu'));
        $this->assertSame(base64_decode('aW50'), $this->getType($param0->getType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRzaWRlcyBvZiBtZXRob2QgUmFjZVxEaWNlXFN0YW5kYXJkRGljZTo6X19jb25zdHJ1Y3QoKSBoYXMgaW52YWxpZCB0eXBlLg=='));
        $this->assertFalse($param0->allowsNull(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRzaWRlcyBvZiBtZXRob2QgUmFjZVxEaWNlXFN0YW5kYXJkRGljZTo6X19jb25zdHJ1Y3QoKSBhbGxvd3MgbnVsbC4='));
        $this->assertTrue($param0->isDefaultValueAvailable(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRzaWRlcyBvZiBtZXRob2QgUmFjZVxEaWNlXFN0YW5kYXJkRGljZTo6X19jb25zdHJ1Y3QoKSBkb2VzIG5vdCBoYXZlIGRlZmF1bHQgdmFsdWUu'));
        $this->assertEquals(6, $param0->getDefaultValue(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRzaWRlcyBvZiBtZXRob2QgUmFjZVxEaWNlXFN0YW5kYXJkRGljZTo6X19jb25zdHJ1Y3QoKSBoYXMgaW52YWxpZCBkZWZhdWx0IHZhbHVlLg=='));
    }

    /** @depends testClass */
    public function testMethodGetSides(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('Z2V0U2lkZXM=')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIGdldFNpZGVzIG5vdCBmb3VuZCBpbiBjbGFzcyBSYWNlXERpY2VcU3RhbmRhcmREaWNl'));

        $method = $class->getMethod(base64_decode('Z2V0U2lkZXM='));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZVxTdGFuZGFyZERpY2U6OmdldFNpZGVzKCkgaXMgbm90IHB1YmxpYy4='));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZVxTdGFuZGFyZERpY2U6OmdldFNpZGVzKCkgaXMgYWJzdHJhY3Qu'));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZVxTdGFuZGFyZERpY2U6OmdldFNpZGVzKCkgaXMgZmluYWwu'));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZVxTdGFuZGFyZERpY2U6OmdldFNpZGVzKCkgaXMgc3RhdGljLg=='));
        $this->assertEquals(0, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZVxTdGFuZGFyZERpY2U6OmdldFNpZGVzKCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHJlcXVpcmVkIHBhcmFtZXRlcnMu'));
        $this->assertGreaterThanOrEqual(0, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZVxTdGFuZGFyZERpY2U6OmdldFNpZGVzKCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHBhcmFtZXRlcnMu'));
        $this->assertSame(base64_decode('aW50'), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZVxTdGFuZGFyZERpY2U6OmdldFNpZGVzKCkgaGFzIGludmFsaWQgcmV0dXJuIHR5cGUu'));
    }

    /** @depends testClass */
    public function testMethodRandom(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('cmFuZG9t')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIHJhbmRvbSBub3QgZm91bmQgaW4gY2xhc3MgUmFjZVxEaWNlXFN0YW5kYXJkRGljZQ=='));

        $method = $class->getMethod(base64_decode('cmFuZG9t'));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZVxTdGFuZGFyZERpY2U6OnJhbmRvbSgpIGlzIG5vdCBwdWJsaWMu'));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZVxTdGFuZGFyZERpY2U6OnJhbmRvbSgpIGlzIGFic3RyYWN0Lg=='));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZVxTdGFuZGFyZERpY2U6OnJhbmRvbSgpIGlzIGZpbmFsLg=='));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZVxTdGFuZGFyZERpY2U6OnJhbmRvbSgpIGlzIHN0YXRpYy4='));
        $this->assertEquals(0, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZVxTdGFuZGFyZERpY2U6OnJhbmRvbSgpIGhhcyBpbnZhbGlkIG51bWJlciBvZiByZXF1aXJlZCBwYXJhbWV0ZXJzLg=='));
        $this->assertGreaterThanOrEqual(0, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZVxTdGFuZGFyZERpY2U6OnJhbmRvbSgpIGhhcyBpbnZhbGlkIG51bWJlciBvZiBwYXJhbWV0ZXJzLg=='));
        $this->assertSame(base64_decode('aW50'), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZVxTdGFuZGFyZERpY2U6OnJhbmRvbSgpIGhhcyBpbnZhbGlkIHJldHVybiB0eXBlLg=='));
    }
}
