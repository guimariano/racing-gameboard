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

class GameLoggerTest extends StructureTestCase
{
    public function testClass(): ReflectionClass
    {
        $this->assertTrue(\class_exists(base64_decode('UmFjZVxHYW1lTG9nZ2Vy')), base64_decode('Q2xhc3MgJ1JhY2VcR2FtZUxvZ2dlcicgZG9lcyBub3QgZXhpc3Qu'));
        $class = new ReflectionClass(base64_decode('UmFjZVxHYW1lTG9nZ2Vy'));
        $this->assertFalse($class->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxHYW1lTG9nZ2VyIGlzIGFic3RyYWN0Lg=='));
        $this->assertFalse($class->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxHYW1lTG9nZ2VyIGlzIGZpbmFsLg=='));
        $this->assertTrue($class->implementsInterface(\SplObserver::class), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxHYW1lTG9nZ2VyIGRvZXMgbm90IGltcGxlbWVudCBpbnRlcmZhY2UgU3BsT2JzZXJ2ZXIu'));
        $this->assertTrue($class->isInstantiable(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxHYW1lTG9nZ2VyIGlzIG5vdCBpbnN0YW50aWFibGUu'));
        return $class;
    }

    /** @depends testClass */
    public function testMethod__construct(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('X19jb25zdHJ1Y3Q=')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIF9fY29uc3RydWN0IG5vdCBmb3VuZCBpbiBjbGFzcyBSYWNlXEdhbWVMb2dnZXI='));

        $method = $class->getMethod(base64_decode('X19jb25zdHJ1Y3Q='));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcR2FtZUxvZ2dlcjo6X19jb25zdHJ1Y3QoKSBpcyBub3QgcHVibGljLg=='));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcR2FtZUxvZ2dlcjo6X19jb25zdHJ1Y3QoKSBpcyBhYnN0cmFjdC4='));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcR2FtZUxvZ2dlcjo6X19jb25zdHJ1Y3QoKSBpcyBmaW5hbC4='));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcR2FtZUxvZ2dlcjo6X19jb25zdHJ1Y3QoKSBpcyBzdGF0aWMu'));
        $this->assertEquals(1, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcR2FtZUxvZ2dlcjo6X19jb25zdHJ1Y3QoKSBoYXMgaW52YWxpZCBudW1iZXIgb2YgcmVxdWlyZWQgcGFyYW1ldGVycy4='));
        $this->assertGreaterThanOrEqual(1, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcR2FtZUxvZ2dlcjo6X19jb25zdHJ1Y3QoKSBoYXMgaW52YWxpZCBudW1iZXIgb2YgcGFyYW1ldGVycy4='));
        $this->assertNull($this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcR2FtZUxvZ2dlcjo6X19jb25zdHJ1Y3QoKSBoYXMgaW52YWxpZCByZXR1cm4gdHlwZS4='));

        $param0 = $method->getParameters()[0];
        $this->assertSame(base64_decode('bG9nZ2Vy'), $param0->getName(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICMwIG9mIG1ldGhvZCBSYWNlXEdhbWVMb2dnZXI6Ol9fY29uc3RydWN0KCkgaGFzIGludmFsaWQgbmFtZS4='));
        $this->assertSame(base64_decode('UHNyXExvZ1xMb2dnZXJJbnRlcmZhY2U='), $this->getType($param0->getType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRsb2dnZXIgb2YgbWV0aG9kIFJhY2VcR2FtZUxvZ2dlcjo6X19jb25zdHJ1Y3QoKSBoYXMgaW52YWxpZCB0eXBlLg=='));
        $this->assertFalse($param0->allowsNull(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRsb2dnZXIgb2YgbWV0aG9kIFJhY2VcR2FtZUxvZ2dlcjo6X19jb25zdHJ1Y3QoKSBhbGxvd3MgbnVsbC4='));
    }

    /** @depends testClass */
    public function testMethodUpdate(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('dXBkYXRl')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIHVwZGF0ZSBub3QgZm91bmQgaW4gY2xhc3MgUmFjZVxHYW1lTG9nZ2Vy'));

        $method = $class->getMethod(base64_decode('dXBkYXRl'));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcR2FtZUxvZ2dlcjo6dXBkYXRlKCkgaXMgbm90IHB1YmxpYy4='));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcR2FtZUxvZ2dlcjo6dXBkYXRlKCkgaXMgYWJzdHJhY3Qu'));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcR2FtZUxvZ2dlcjo6dXBkYXRlKCkgaXMgZmluYWwu'));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcR2FtZUxvZ2dlcjo6dXBkYXRlKCkgaXMgc3RhdGljLg=='));
        $this->assertEquals(1, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcR2FtZUxvZ2dlcjo6dXBkYXRlKCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHJlcXVpcmVkIHBhcmFtZXRlcnMu'));
        $this->assertGreaterThanOrEqual(1, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcR2FtZUxvZ2dlcjo6dXBkYXRlKCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHBhcmFtZXRlcnMu'));
        $this->assertSame(base64_decode('dm9pZA=='), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcR2FtZUxvZ2dlcjo6dXBkYXRlKCkgaGFzIGludmFsaWQgcmV0dXJuIHR5cGUu'));

        $param0 = $method->getParameters()[0];
        $this->assertSame(base64_decode('c3ViamVjdA=='), $param0->getName(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICMwIG9mIG1ldGhvZCBSYWNlXEdhbWVMb2dnZXI6OnVwZGF0ZSgpIGhhcyBpbnZhbGlkIG5hbWUu'));
        $this->assertSame(base64_decode('U3BsU3ViamVjdA=='), $this->getType($param0->getType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRzdWJqZWN0IG9mIG1ldGhvZCBSYWNlXEdhbWVMb2dnZXI6OnVwZGF0ZSgpIGhhcyBpbnZhbGlkIHR5cGUu'));
        $this->assertFalse($param0->allowsNull(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRzdWJqZWN0IG9mIG1ldGhvZCBSYWNlXEdhbWVMb2dnZXI6OnVwZGF0ZSgpIGFsbG93cyBudWxsLg=='));
    }
}
