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

class DiceTest extends StructureTestCase
{
    public function testClass(): ReflectionClass
    {
        $this->assertTrue(\interface_exists(base64_decode('UmFjZVxEaWNl')), base64_decode('SW50ZXJmYWNlICdSYWNlXERpY2UnIGRvZXMgbm90IGV4aXN0Lg=='));
        $class = new ReflectionClass(base64_decode('UmFjZVxEaWNl'));
        $this->assertTrue($class->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxEaWNlIGlzIG5vdCBhYnN0cmFjdC4='));
        $this->assertFalse($class->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxEaWNlIGlzIGZpbmFsLg=='));
        return $class;
    }

    /** @depends testClass */
    public function testMethodGetSides(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('Z2V0U2lkZXM=')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIGdldFNpZGVzIG5vdCBmb3VuZCBpbiBjbGFzcyBSYWNlXERpY2U='));

        $method = $class->getMethod(base64_decode('Z2V0U2lkZXM='));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZTo6Z2V0U2lkZXMoKSBpcyBub3QgcHVibGljLg=='));
        $this->assertTrue($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZTo6Z2V0U2lkZXMoKSBpcyBub3QgYWJzdHJhY3Qu'));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZTo6Z2V0U2lkZXMoKSBpcyBmaW5hbC4='));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZTo6Z2V0U2lkZXMoKSBpcyBzdGF0aWMu'));
        $this->assertEquals(0, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZTo6Z2V0U2lkZXMoKSBoYXMgaW52YWxpZCBudW1iZXIgb2YgcmVxdWlyZWQgcGFyYW1ldGVycy4='));
        $this->assertGreaterThanOrEqual(0, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZTo6Z2V0U2lkZXMoKSBoYXMgaW52YWxpZCBudW1iZXIgb2YgcGFyYW1ldGVycy4='));
        $this->assertSame(base64_decode('aW50'), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZTo6Z2V0U2lkZXMoKSBoYXMgaW52YWxpZCByZXR1cm4gdHlwZS4='));
    }

    /** @depends testClass */
    public function testMethodRandom(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('cmFuZG9t')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIHJhbmRvbSBub3QgZm91bmQgaW4gY2xhc3MgUmFjZVxEaWNl'));

        $method = $class->getMethod(base64_decode('cmFuZG9t'));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZTo6cmFuZG9tKCkgaXMgbm90IHB1YmxpYy4='));
        $this->assertTrue($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZTo6cmFuZG9tKCkgaXMgbm90IGFic3RyYWN0Lg=='));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZTo6cmFuZG9tKCkgaXMgZmluYWwu'));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZTo6cmFuZG9tKCkgaXMgc3RhdGljLg=='));
        $this->assertEquals(0, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZTo6cmFuZG9tKCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHJlcXVpcmVkIHBhcmFtZXRlcnMu'));
        $this->assertGreaterThanOrEqual(0, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZTo6cmFuZG9tKCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHBhcmFtZXRlcnMu'));
        $this->assertSame(base64_decode('aW50'), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcRGljZTo6cmFuZG9tKCkgaGFzIGludmFsaWQgcmV0dXJuIHR5cGUu'));
    }
}
