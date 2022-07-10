<?php

/**
 * Project structure test, generated automatically. DO NOT MODIFY.
 *
 * @noinspection ALL
 */
declare(strict_types=1);

namespace tests\structure\Race\State;

use ReflectionClass;
use tests\structure\StructureTestCase;

require_once __DIR__ . '/../../../StructureTestCase.php';

class WaitingForPlayersStateTest extends StructureTestCase
{
    public function testClass(): ReflectionClass
    {
        $this->assertTrue(\class_exists(base64_decode('UmFjZVxTdGF0ZVxXYWl0aW5nRm9yUGxheWVyc1N0YXRl')), base64_decode('Q2xhc3MgJ1JhY2VcU3RhdGVcV2FpdGluZ0ZvclBsYXllcnNTdGF0ZScgZG9lcyBub3QgZXhpc3Qu'));
        $class = new ReflectionClass(base64_decode('UmFjZVxTdGF0ZVxXYWl0aW5nRm9yUGxheWVyc1N0YXRl'));
        $this->assertFalse($class->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxTdGF0ZVxXYWl0aW5nRm9yUGxheWVyc1N0YXRlIGlzIGFic3RyYWN0Lg=='));
        $this->assertFalse($class->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxTdGF0ZVxXYWl0aW5nRm9yUGxheWVyc1N0YXRlIGlzIGZpbmFsLg=='));
        $this->assertTrue($class->implementsInterface(base64_decode('UmFjZVxTdGF0ZQ==')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxTdGF0ZVxXYWl0aW5nRm9yUGxheWVyc1N0YXRlIGRvZXMgbm90IGltcGxlbWVudCBpbnRlcmZhY2UgUmFjZVxTdGF0ZS4='));
        $this->assertTrue($class->isInstantiable(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxTdGF0ZVxXYWl0aW5nRm9yUGxheWVyc1N0YXRlIGlzIG5vdCBpbnN0YW50aWFibGUu'));
        return $class;
    }

    /** @depends testClass */
    public function testMethodSetGame(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('c2V0R2FtZQ==')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIHNldEdhbWUgbm90IGZvdW5kIGluIGNsYXNzIFJhY2VcU3RhdGVcV2FpdGluZ0ZvclBsYXllcnNTdGF0ZQ=='));

        $method = $class->getMethod(base64_decode('c2V0R2FtZQ=='));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcV2FpdGluZ0ZvclBsYXllcnNTdGF0ZTo6c2V0R2FtZSgpIGlzIG5vdCBwdWJsaWMu'));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcV2FpdGluZ0ZvclBsYXllcnNTdGF0ZTo6c2V0R2FtZSgpIGlzIGFic3RyYWN0Lg=='));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcV2FpdGluZ0ZvclBsYXllcnNTdGF0ZTo6c2V0R2FtZSgpIGlzIGZpbmFsLg=='));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcV2FpdGluZ0ZvclBsYXllcnNTdGF0ZTo6c2V0R2FtZSgpIGlzIHN0YXRpYy4='));
        $this->assertEquals(1, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcV2FpdGluZ0ZvclBsYXllcnNTdGF0ZTo6c2V0R2FtZSgpIGhhcyBpbnZhbGlkIG51bWJlciBvZiByZXF1aXJlZCBwYXJhbWV0ZXJzLg=='));
        $this->assertGreaterThanOrEqual(1, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcV2FpdGluZ0ZvclBsYXllcnNTdGF0ZTo6c2V0R2FtZSgpIGhhcyBpbnZhbGlkIG51bWJlciBvZiBwYXJhbWV0ZXJzLg=='));
        $this->assertSame(base64_decode('dm9pZA=='), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcV2FpdGluZ0ZvclBsYXllcnNTdGF0ZTo6c2V0R2FtZSgpIGhhcyBpbnZhbGlkIHJldHVybiB0eXBlLg=='));

        $param0 = $method->getParameters()[0];
        $this->assertSame(base64_decode('Z2FtZQ=='), $param0->getName(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICMwIG9mIG1ldGhvZCBSYWNlXFN0YXRlXFdhaXRpbmdGb3JQbGF5ZXJzU3RhdGU6OnNldEdhbWUoKSBoYXMgaW52YWxpZCBuYW1lLg=='));
        $this->assertSame(base64_decode('UmFjZVxSYWNlR2FtZQ=='), $this->getType($param0->getType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRnYW1lIG9mIG1ldGhvZCBSYWNlXFN0YXRlXFdhaXRpbmdGb3JQbGF5ZXJzU3RhdGU6OnNldEdhbWUoKSBoYXMgaW52YWxpZCB0eXBlLg=='));
        $this->assertFalse($param0->allowsNull(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRnYW1lIG9mIG1ldGhvZCBSYWNlXFN0YXRlXFdhaXRpbmdGb3JQbGF5ZXJzU3RhdGU6OnNldEdhbWUoKSBhbGxvd3MgbnVsbC4='));
    }

    /** @depends testClass */
    public function testMethodJoinPlayer(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('am9pblBsYXllcg==')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIGpvaW5QbGF5ZXIgbm90IGZvdW5kIGluIGNsYXNzIFJhY2VcU3RhdGVcV2FpdGluZ0ZvclBsYXllcnNTdGF0ZQ=='));

        $method = $class->getMethod(base64_decode('am9pblBsYXllcg=='));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcV2FpdGluZ0ZvclBsYXllcnNTdGF0ZTo6am9pblBsYXllcigpIGlzIG5vdCBwdWJsaWMu'));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcV2FpdGluZ0ZvclBsYXllcnNTdGF0ZTo6am9pblBsYXllcigpIGlzIGFic3RyYWN0Lg=='));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcV2FpdGluZ0ZvclBsYXllcnNTdGF0ZTo6am9pblBsYXllcigpIGlzIGZpbmFsLg=='));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcV2FpdGluZ0ZvclBsYXllcnNTdGF0ZTo6am9pblBsYXllcigpIGlzIHN0YXRpYy4='));
        $this->assertEquals(1, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcV2FpdGluZ0ZvclBsYXllcnNTdGF0ZTo6am9pblBsYXllcigpIGhhcyBpbnZhbGlkIG51bWJlciBvZiByZXF1aXJlZCBwYXJhbWV0ZXJzLg=='));
        $this->assertGreaterThanOrEqual(1, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcV2FpdGluZ0ZvclBsYXllcnNTdGF0ZTo6am9pblBsYXllcigpIGhhcyBpbnZhbGlkIG51bWJlciBvZiBwYXJhbWV0ZXJzLg=='));
        $this->assertSame(base64_decode('dm9pZA=='), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcV2FpdGluZ0ZvclBsYXllcnNTdGF0ZTo6am9pblBsYXllcigpIGhhcyBpbnZhbGlkIHJldHVybiB0eXBlLg=='));

        $param0 = $method->getParameters()[0];
        $this->assertSame(base64_decode('cGxheWVy'), $param0->getName(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICMwIG9mIG1ldGhvZCBSYWNlXFN0YXRlXFdhaXRpbmdGb3JQbGF5ZXJzU3RhdGU6OmpvaW5QbGF5ZXIoKSBoYXMgaW52YWxpZCBuYW1lLg=='));
        $this->assertSame(base64_decode('UmFjZVxQbGF5ZXJcUGxheWVy'), $this->getType($param0->getType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRwbGF5ZXIgb2YgbWV0aG9kIFJhY2VcU3RhdGVcV2FpdGluZ0ZvclBsYXllcnNTdGF0ZTo6am9pblBsYXllcigpIGhhcyBpbnZhbGlkIHR5cGUu'));
        $this->assertFalse($param0->allowsNull(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRwbGF5ZXIgb2YgbWV0aG9kIFJhY2VcU3RhdGVcV2FpdGluZ0ZvclBsYXllcnNTdGF0ZTo6am9pblBsYXllcigpIGFsbG93cyBudWxsLg=='));
    }

    /** @depends testClass */
    public function testMethodStartGame(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('c3RhcnRHYW1l')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIHN0YXJ0R2FtZSBub3QgZm91bmQgaW4gY2xhc3MgUmFjZVxTdGF0ZVxXYWl0aW5nRm9yUGxheWVyc1N0YXRl'));

        $method = $class->getMethod(base64_decode('c3RhcnRHYW1l'));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcV2FpdGluZ0ZvclBsYXllcnNTdGF0ZTo6c3RhcnRHYW1lKCkgaXMgbm90IHB1YmxpYy4='));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcV2FpdGluZ0ZvclBsYXllcnNTdGF0ZTo6c3RhcnRHYW1lKCkgaXMgYWJzdHJhY3Qu'));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcV2FpdGluZ0ZvclBsYXllcnNTdGF0ZTo6c3RhcnRHYW1lKCkgaXMgZmluYWwu'));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcV2FpdGluZ0ZvclBsYXllcnNTdGF0ZTo6c3RhcnRHYW1lKCkgaXMgc3RhdGljLg=='));
        $this->assertEquals(0, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcV2FpdGluZ0ZvclBsYXllcnNTdGF0ZTo6c3RhcnRHYW1lKCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHJlcXVpcmVkIHBhcmFtZXRlcnMu'));
        $this->assertGreaterThanOrEqual(0, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcV2FpdGluZ0ZvclBsYXllcnNTdGF0ZTo6c3RhcnRHYW1lKCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHBhcmFtZXRlcnMu'));
        $this->assertSame(base64_decode('dm9pZA=='), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcV2FpdGluZ0ZvclBsYXllcnNTdGF0ZTo6c3RhcnRHYW1lKCkgaGFzIGludmFsaWQgcmV0dXJuIHR5cGUu'));
    }

    /** @depends testClass */
    public function testMethodPlayTurn(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('cGxheVR1cm4=')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIHBsYXlUdXJuIG5vdCBmb3VuZCBpbiBjbGFzcyBSYWNlXFN0YXRlXFdhaXRpbmdGb3JQbGF5ZXJzU3RhdGU='));

        $method = $class->getMethod(base64_decode('cGxheVR1cm4='));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcV2FpdGluZ0ZvclBsYXllcnNTdGF0ZTo6cGxheVR1cm4oKSBpcyBub3QgcHVibGljLg=='));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcV2FpdGluZ0ZvclBsYXllcnNTdGF0ZTo6cGxheVR1cm4oKSBpcyBhYnN0cmFjdC4='));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcV2FpdGluZ0ZvclBsYXllcnNTdGF0ZTo6cGxheVR1cm4oKSBpcyBmaW5hbC4='));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcV2FpdGluZ0ZvclBsYXllcnNTdGF0ZTo6cGxheVR1cm4oKSBpcyBzdGF0aWMu'));
        $this->assertEquals(0, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcV2FpdGluZ0ZvclBsYXllcnNTdGF0ZTo6cGxheVR1cm4oKSBoYXMgaW52YWxpZCBudW1iZXIgb2YgcmVxdWlyZWQgcGFyYW1ldGVycy4='));
        $this->assertGreaterThanOrEqual(0, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcV2FpdGluZ0ZvclBsYXllcnNTdGF0ZTo6cGxheVR1cm4oKSBoYXMgaW52YWxpZCBudW1iZXIgb2YgcGFyYW1ldGVycy4='));
        $this->assertSame(base64_decode('dm9pZA=='), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcV2FpdGluZ0ZvclBsYXllcnNTdGF0ZTo6cGxheVR1cm4oKSBoYXMgaW52YWxpZCByZXR1cm4gdHlwZS4='));
    }
}
