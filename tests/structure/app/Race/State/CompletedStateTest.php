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

class CompletedStateTest extends StructureTestCase
{
    public function testClass(): ReflectionClass
    {
        $this->assertTrue(\class_exists(base64_decode('UmFjZVxTdGF0ZVxDb21wbGV0ZWRTdGF0ZQ==')), base64_decode('Q2xhc3MgJ1JhY2VcU3RhdGVcQ29tcGxldGVkU3RhdGUnIGRvZXMgbm90IGV4aXN0Lg=='));
        $class = new ReflectionClass(base64_decode('UmFjZVxTdGF0ZVxDb21wbGV0ZWRTdGF0ZQ=='));
        $this->assertFalse($class->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxTdGF0ZVxDb21wbGV0ZWRTdGF0ZSBpcyBhYnN0cmFjdC4='));
        $this->assertFalse($class->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxTdGF0ZVxDb21wbGV0ZWRTdGF0ZSBpcyBmaW5hbC4='));
        $this->assertTrue($class->implementsInterface(base64_decode('UmFjZVxTdGF0ZQ==')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxTdGF0ZVxDb21wbGV0ZWRTdGF0ZSBkb2VzIG5vdCBpbXBsZW1lbnQgaW50ZXJmYWNlIFJhY2VcU3RhdGUu'));
        $this->assertTrue($class->isInstantiable(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxTdGF0ZVxDb21wbGV0ZWRTdGF0ZSBpcyBub3QgaW5zdGFudGlhYmxlLg=='));
        return $class;
    }

    /** @depends testClass */
    public function testMethodSetGame(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('c2V0R2FtZQ==')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIHNldEdhbWUgbm90IGZvdW5kIGluIGNsYXNzIFJhY2VcU3RhdGVcQ29tcGxldGVkU3RhdGU='));

        $method = $class->getMethod(base64_decode('c2V0R2FtZQ=='));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcQ29tcGxldGVkU3RhdGU6OnNldEdhbWUoKSBpcyBub3QgcHVibGljLg=='));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcQ29tcGxldGVkU3RhdGU6OnNldEdhbWUoKSBpcyBhYnN0cmFjdC4='));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcQ29tcGxldGVkU3RhdGU6OnNldEdhbWUoKSBpcyBmaW5hbC4='));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcQ29tcGxldGVkU3RhdGU6OnNldEdhbWUoKSBpcyBzdGF0aWMu'));
        $this->assertEquals(1, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcQ29tcGxldGVkU3RhdGU6OnNldEdhbWUoKSBoYXMgaW52YWxpZCBudW1iZXIgb2YgcmVxdWlyZWQgcGFyYW1ldGVycy4='));
        $this->assertGreaterThanOrEqual(1, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcQ29tcGxldGVkU3RhdGU6OnNldEdhbWUoKSBoYXMgaW52YWxpZCBudW1iZXIgb2YgcGFyYW1ldGVycy4='));
        $this->assertSame(base64_decode('dm9pZA=='), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcQ29tcGxldGVkU3RhdGU6OnNldEdhbWUoKSBoYXMgaW52YWxpZCByZXR1cm4gdHlwZS4='));

        $param0 = $method->getParameters()[0];
        $this->assertSame(base64_decode('Z2FtZQ=='), $param0->getName(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICMwIG9mIG1ldGhvZCBSYWNlXFN0YXRlXENvbXBsZXRlZFN0YXRlOjpzZXRHYW1lKCkgaGFzIGludmFsaWQgbmFtZS4='));
        $this->assertSame(base64_decode('UmFjZVxSYWNlR2FtZQ=='), $this->getType($param0->getType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRnYW1lIG9mIG1ldGhvZCBSYWNlXFN0YXRlXENvbXBsZXRlZFN0YXRlOjpzZXRHYW1lKCkgaGFzIGludmFsaWQgdHlwZS4='));
        $this->assertFalse($param0->allowsNull(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRnYW1lIG9mIG1ldGhvZCBSYWNlXFN0YXRlXENvbXBsZXRlZFN0YXRlOjpzZXRHYW1lKCkgYWxsb3dzIG51bGwu'));
    }

    /** @depends testClass */
    public function testMethodJoinPlayer(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('am9pblBsYXllcg==')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIGpvaW5QbGF5ZXIgbm90IGZvdW5kIGluIGNsYXNzIFJhY2VcU3RhdGVcQ29tcGxldGVkU3RhdGU='));

        $method = $class->getMethod(base64_decode('am9pblBsYXllcg=='));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcQ29tcGxldGVkU3RhdGU6OmpvaW5QbGF5ZXIoKSBpcyBub3QgcHVibGljLg=='));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcQ29tcGxldGVkU3RhdGU6OmpvaW5QbGF5ZXIoKSBpcyBhYnN0cmFjdC4='));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcQ29tcGxldGVkU3RhdGU6OmpvaW5QbGF5ZXIoKSBpcyBmaW5hbC4='));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcQ29tcGxldGVkU3RhdGU6OmpvaW5QbGF5ZXIoKSBpcyBzdGF0aWMu'));
        $this->assertEquals(1, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcQ29tcGxldGVkU3RhdGU6OmpvaW5QbGF5ZXIoKSBoYXMgaW52YWxpZCBudW1iZXIgb2YgcmVxdWlyZWQgcGFyYW1ldGVycy4='));
        $this->assertGreaterThanOrEqual(1, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcQ29tcGxldGVkU3RhdGU6OmpvaW5QbGF5ZXIoKSBoYXMgaW52YWxpZCBudW1iZXIgb2YgcGFyYW1ldGVycy4='));
        $this->assertSame(base64_decode('dm9pZA=='), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcQ29tcGxldGVkU3RhdGU6OmpvaW5QbGF5ZXIoKSBoYXMgaW52YWxpZCByZXR1cm4gdHlwZS4='));

        $param0 = $method->getParameters()[0];
        $this->assertSame(base64_decode('cGxheWVy'), $param0->getName(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICMwIG9mIG1ldGhvZCBSYWNlXFN0YXRlXENvbXBsZXRlZFN0YXRlOjpqb2luUGxheWVyKCkgaGFzIGludmFsaWQgbmFtZS4='));
        $this->assertSame(base64_decode('UmFjZVxQbGF5ZXJcUGxheWVy'), $this->getType($param0->getType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRwbGF5ZXIgb2YgbWV0aG9kIFJhY2VcU3RhdGVcQ29tcGxldGVkU3RhdGU6OmpvaW5QbGF5ZXIoKSBoYXMgaW52YWxpZCB0eXBlLg=='));
        $this->assertFalse($param0->allowsNull(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRwbGF5ZXIgb2YgbWV0aG9kIFJhY2VcU3RhdGVcQ29tcGxldGVkU3RhdGU6OmpvaW5QbGF5ZXIoKSBhbGxvd3MgbnVsbC4='));
    }

    /** @depends testClass */
    public function testMethodStartGame(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('c3RhcnRHYW1l')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIHN0YXJ0R2FtZSBub3QgZm91bmQgaW4gY2xhc3MgUmFjZVxTdGF0ZVxDb21wbGV0ZWRTdGF0ZQ=='));

        $method = $class->getMethod(base64_decode('c3RhcnRHYW1l'));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcQ29tcGxldGVkU3RhdGU6OnN0YXJ0R2FtZSgpIGlzIG5vdCBwdWJsaWMu'));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcQ29tcGxldGVkU3RhdGU6OnN0YXJ0R2FtZSgpIGlzIGFic3RyYWN0Lg=='));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcQ29tcGxldGVkU3RhdGU6OnN0YXJ0R2FtZSgpIGlzIGZpbmFsLg=='));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcQ29tcGxldGVkU3RhdGU6OnN0YXJ0R2FtZSgpIGlzIHN0YXRpYy4='));
        $this->assertEquals(0, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcQ29tcGxldGVkU3RhdGU6OnN0YXJ0R2FtZSgpIGhhcyBpbnZhbGlkIG51bWJlciBvZiByZXF1aXJlZCBwYXJhbWV0ZXJzLg=='));
        $this->assertGreaterThanOrEqual(0, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcQ29tcGxldGVkU3RhdGU6OnN0YXJ0R2FtZSgpIGhhcyBpbnZhbGlkIG51bWJlciBvZiBwYXJhbWV0ZXJzLg=='));
        $this->assertSame(base64_decode('dm9pZA=='), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcQ29tcGxldGVkU3RhdGU6OnN0YXJ0R2FtZSgpIGhhcyBpbnZhbGlkIHJldHVybiB0eXBlLg=='));
    }

    /** @depends testClass */
    public function testMethodPlayTurn(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('cGxheVR1cm4=')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIHBsYXlUdXJuIG5vdCBmb3VuZCBpbiBjbGFzcyBSYWNlXFN0YXRlXENvbXBsZXRlZFN0YXRl'));

        $method = $class->getMethod(base64_decode('cGxheVR1cm4='));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcQ29tcGxldGVkU3RhdGU6OnBsYXlUdXJuKCkgaXMgbm90IHB1YmxpYy4='));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcQ29tcGxldGVkU3RhdGU6OnBsYXlUdXJuKCkgaXMgYWJzdHJhY3Qu'));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcQ29tcGxldGVkU3RhdGU6OnBsYXlUdXJuKCkgaXMgZmluYWwu'));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcQ29tcGxldGVkU3RhdGU6OnBsYXlUdXJuKCkgaXMgc3RhdGljLg=='));
        $this->assertEquals(0, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcQ29tcGxldGVkU3RhdGU6OnBsYXlUdXJuKCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHJlcXVpcmVkIHBhcmFtZXRlcnMu'));
        $this->assertGreaterThanOrEqual(0, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcQ29tcGxldGVkU3RhdGU6OnBsYXlUdXJuKCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHBhcmFtZXRlcnMu'));
        $this->assertSame(base64_decode('dm9pZA=='), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcU3RhdGVcQ29tcGxldGVkU3RhdGU6OnBsYXlUdXJuKCkgaGFzIGludmFsaWQgcmV0dXJuIHR5cGUu'));
    }
}
