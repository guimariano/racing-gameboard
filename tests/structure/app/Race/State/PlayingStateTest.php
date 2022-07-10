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

class PlayingStateTest extends StructureTestCase
{
    public function testClass(): ReflectionClass
    {
        $this->assertTrue(\class_exists(base64_decode('UmFjZVxTdGF0ZVxQbGF5aW5nU3RhdGU=')), base64_decode('Q2xhc3MgJ1JhY2VcU3RhdGVcUGxheWluZ1N0YXRlJyBkb2VzIG5vdCBleGlzdC4='));
        $class = new ReflectionClass(base64_decode('UmFjZVxTdGF0ZVxQbGF5aW5nU3RhdGU='));
        $this->assertFalse($class->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxTdGF0ZVxQbGF5aW5nU3RhdGUgaXMgYWJzdHJhY3Qu'));
        $this->assertFalse($class->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxTdGF0ZVxQbGF5aW5nU3RhdGUgaXMgZmluYWwu'));
        $this->assertTrue($class->implementsInterface(base64_decode('UmFjZVxTdGF0ZQ==')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxTdGF0ZVxQbGF5aW5nU3RhdGUgZG9lcyBub3QgaW1wbGVtZW50IGludGVyZmFjZSBSYWNlXFN0YXRlLg=='));
        $this->assertTrue($class->isInstantiable(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxTdGF0ZVxQbGF5aW5nU3RhdGUgaXMgbm90IGluc3RhbnRpYWJsZS4='));
        return $class;
    }

    /** @depends testClass */
    public function testMethodSetGame(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('c2V0R2FtZQ==')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIHNldEdhbWUgbm90IGZvdW5kIGluIGNsYXNzIFJhY2VcU3RhdGVcUGxheWluZ1N0YXRl'));

        $method = $class->getMethod(base64_decode('c2V0R2FtZQ=='));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcUGxheWluZ1N0YXRlOjpzZXRHYW1lKCkgaXMgbm90IHB1YmxpYy4='));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcUGxheWluZ1N0YXRlOjpzZXRHYW1lKCkgaXMgYWJzdHJhY3Qu'));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcUGxheWluZ1N0YXRlOjpzZXRHYW1lKCkgaXMgZmluYWwu'));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcUGxheWluZ1N0YXRlOjpzZXRHYW1lKCkgaXMgc3RhdGljLg=='));
        $this->assertEquals(1, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcUGxheWluZ1N0YXRlOjpzZXRHYW1lKCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHJlcXVpcmVkIHBhcmFtZXRlcnMu'));
        $this->assertGreaterThanOrEqual(1, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcUGxheWluZ1N0YXRlOjpzZXRHYW1lKCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHBhcmFtZXRlcnMu'));
        $this->assertSame(base64_decode('dm9pZA=='), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcUGxheWluZ1N0YXRlOjpzZXRHYW1lKCkgaGFzIGludmFsaWQgcmV0dXJuIHR5cGUu'));

        $param0 = $method->getParameters()[0];
        $this->assertSame(base64_decode('Z2FtZQ=='), $param0->getName(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICMwIG9mIG1ldGhvZCBSYWNlXFN0YXRlXFBsYXlpbmdTdGF0ZTo6c2V0R2FtZSgpIGhhcyBpbnZhbGlkIG5hbWUu'));
        $this->assertSame(base64_decode('UmFjZVxSYWNlR2FtZQ=='), $this->getType($param0->getType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRnYW1lIG9mIG1ldGhvZCBSYWNlXFN0YXRlXFBsYXlpbmdTdGF0ZTo6c2V0R2FtZSgpIGhhcyBpbnZhbGlkIHR5cGUu'));
        $this->assertFalse($param0->allowsNull(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRnYW1lIG9mIG1ldGhvZCBSYWNlXFN0YXRlXFBsYXlpbmdTdGF0ZTo6c2V0R2FtZSgpIGFsbG93cyBudWxsLg=='));
    }

    /** @depends testClass */
    public function testMethodJoinPlayer(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('am9pblBsYXllcg==')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIGpvaW5QbGF5ZXIgbm90IGZvdW5kIGluIGNsYXNzIFJhY2VcU3RhdGVcUGxheWluZ1N0YXRl'));

        $method = $class->getMethod(base64_decode('am9pblBsYXllcg=='));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcUGxheWluZ1N0YXRlOjpqb2luUGxheWVyKCkgaXMgbm90IHB1YmxpYy4='));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcUGxheWluZ1N0YXRlOjpqb2luUGxheWVyKCkgaXMgYWJzdHJhY3Qu'));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcUGxheWluZ1N0YXRlOjpqb2luUGxheWVyKCkgaXMgZmluYWwu'));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcUGxheWluZ1N0YXRlOjpqb2luUGxheWVyKCkgaXMgc3RhdGljLg=='));
        $this->assertEquals(1, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcUGxheWluZ1N0YXRlOjpqb2luUGxheWVyKCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHJlcXVpcmVkIHBhcmFtZXRlcnMu'));
        $this->assertGreaterThanOrEqual(1, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcUGxheWluZ1N0YXRlOjpqb2luUGxheWVyKCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHBhcmFtZXRlcnMu'));
        $this->assertSame(base64_decode('dm9pZA=='), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcUGxheWluZ1N0YXRlOjpqb2luUGxheWVyKCkgaGFzIGludmFsaWQgcmV0dXJuIHR5cGUu'));

        $param0 = $method->getParameters()[0];
        $this->assertSame(base64_decode('cGxheWVy'), $param0->getName(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICMwIG9mIG1ldGhvZCBSYWNlXFN0YXRlXFBsYXlpbmdTdGF0ZTo6am9pblBsYXllcigpIGhhcyBpbnZhbGlkIG5hbWUu'));
        $this->assertSame(base64_decode('UmFjZVxQbGF5ZXJcUGxheWVy'), $this->getType($param0->getType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRwbGF5ZXIgb2YgbWV0aG9kIFJhY2VcU3RhdGVcUGxheWluZ1N0YXRlOjpqb2luUGxheWVyKCkgaGFzIGludmFsaWQgdHlwZS4='));
        $this->assertFalse($param0->allowsNull(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRwbGF5ZXIgb2YgbWV0aG9kIFJhY2VcU3RhdGVcUGxheWluZ1N0YXRlOjpqb2luUGxheWVyKCkgYWxsb3dzIG51bGwu'));
    }

    /** @depends testClass */
    public function testMethodStartGame(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('c3RhcnRHYW1l')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIHN0YXJ0R2FtZSBub3QgZm91bmQgaW4gY2xhc3MgUmFjZVxTdGF0ZVxQbGF5aW5nU3RhdGU='));

        $method = $class->getMethod(base64_decode('c3RhcnRHYW1l'));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcUGxheWluZ1N0YXRlOjpzdGFydEdhbWUoKSBpcyBub3QgcHVibGljLg=='));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcUGxheWluZ1N0YXRlOjpzdGFydEdhbWUoKSBpcyBhYnN0cmFjdC4='));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcUGxheWluZ1N0YXRlOjpzdGFydEdhbWUoKSBpcyBmaW5hbC4='));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcUGxheWluZ1N0YXRlOjpzdGFydEdhbWUoKSBpcyBzdGF0aWMu'));
        $this->assertEquals(0, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcUGxheWluZ1N0YXRlOjpzdGFydEdhbWUoKSBoYXMgaW52YWxpZCBudW1iZXIgb2YgcmVxdWlyZWQgcGFyYW1ldGVycy4='));
        $this->assertGreaterThanOrEqual(0, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcUGxheWluZ1N0YXRlOjpzdGFydEdhbWUoKSBoYXMgaW52YWxpZCBudW1iZXIgb2YgcGFyYW1ldGVycy4='));
        $this->assertSame(base64_decode('dm9pZA=='), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcUGxheWluZ1N0YXRlOjpzdGFydEdhbWUoKSBoYXMgaW52YWxpZCByZXR1cm4gdHlwZS4='));
    }

    /** @depends testClass */
    public function testMethodPlayTurn(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('cGxheVR1cm4=')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIHBsYXlUdXJuIG5vdCBmb3VuZCBpbiBjbGFzcyBSYWNlXFN0YXRlXFBsYXlpbmdTdGF0ZQ=='));

        $method = $class->getMethod(base64_decode('cGxheVR1cm4='));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcUGxheWluZ1N0YXRlOjpwbGF5VHVybigpIGlzIG5vdCBwdWJsaWMu'));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcUGxheWluZ1N0YXRlOjpwbGF5VHVybigpIGlzIGFic3RyYWN0Lg=='));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcUGxheWluZ1N0YXRlOjpwbGF5VHVybigpIGlzIGZpbmFsLg=='));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcUGxheWluZ1N0YXRlOjpwbGF5VHVybigpIGlzIHN0YXRpYy4='));
        $this->assertEquals(0, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcUGxheWluZ1N0YXRlOjpwbGF5VHVybigpIGhhcyBpbnZhbGlkIG51bWJlciBvZiByZXF1aXJlZCBwYXJhbWV0ZXJzLg=='));
        $this->assertGreaterThanOrEqual(0, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcUGxheWluZ1N0YXRlOjpwbGF5VHVybigpIGhhcyBpbnZhbGlkIG51bWJlciBvZiBwYXJhbWV0ZXJzLg=='));
        $this->assertSame(base64_decode('dm9pZA=='), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcUGxheWluZ1N0YXRlOjpwbGF5VHVybigpIGhhcyBpbnZhbGlkIHJldHVybiB0eXBlLg=='));
    }
}
