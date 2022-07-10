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

class RaceGameTest extends StructureTestCase
{
    public function testClass(): ReflectionClass
    {
        $this->assertTrue(\class_exists(base64_decode('UmFjZVxSYWNlR2FtZQ==')), base64_decode('Q2xhc3MgJ1JhY2VcUmFjZUdhbWUnIGRvZXMgbm90IGV4aXN0Lg=='));
        $class = new ReflectionClass(base64_decode('UmFjZVxSYWNlR2FtZQ=='));
        $this->assertFalse($class->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxSYWNlR2FtZSBpcyBhYnN0cmFjdC4='));
        $this->assertFalse($class->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxSYWNlR2FtZSBpcyBmaW5hbC4='));
        $this->assertTrue($class->implementsInterface(\SplSubject::class), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxSYWNlR2FtZSBkb2VzIG5vdCBpbXBsZW1lbnQgaW50ZXJmYWNlIFNwbFN1YmplY3Qu'));
        $this->assertTrue($class->isInstantiable(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxSYWNlR2FtZSBpcyBub3QgaW5zdGFudGlhYmxlLg=='));
        return $class;
    }

    /** @depends testClass */
    public function testMethod__construct(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('X19jb25zdHJ1Y3Q=')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIF9fY29uc3RydWN0IG5vdCBmb3VuZCBpbiBjbGFzcyBSYWNlXFJhY2VHYW1l'));

        $method = $class->getMethod(base64_decode('X19jb25zdHJ1Y3Q='));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6Ol9fY29uc3RydWN0KCkgaXMgbm90IHB1YmxpYy4='));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6Ol9fY29uc3RydWN0KCkgaXMgYWJzdHJhY3Qu'));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6Ol9fY29uc3RydWN0KCkgaXMgZmluYWwu'));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6Ol9fY29uc3RydWN0KCkgaXMgc3RhdGljLg=='));
        $this->assertEquals(4, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6Ol9fY29uc3RydWN0KCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHJlcXVpcmVkIHBhcmFtZXRlcnMu'));
        $this->assertGreaterThanOrEqual(4, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6Ol9fY29uc3RydWN0KCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHBhcmFtZXRlcnMu'));
        $this->assertNull($this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6Ol9fY29uc3RydWN0KCkgaGFzIGludmFsaWQgcmV0dXJuIHR5cGUu'));

        $param0 = $method->getParameters()[0];
        $this->assertSame(base64_decode('cGxheWVycw=='), $param0->getName(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICMwIG9mIG1ldGhvZCBSYWNlXFJhY2VHYW1lOjpfX2NvbnN0cnVjdCgpIGhhcyBpbnZhbGlkIG5hbWUu'));
        $this->assertSame(base64_decode('UmFjZVxQbGF5ZXJcUGxheWVyc0xpc3Q='), $this->getType($param0->getType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRwbGF5ZXJzIG9mIG1ldGhvZCBSYWNlXFJhY2VHYW1lOjpfX2NvbnN0cnVjdCgpIGhhcyBpbnZhbGlkIHR5cGUu'));
        $this->assertFalse($param0->allowsNull(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRwbGF5ZXJzIG9mIG1ldGhvZCBSYWNlXFJhY2VHYW1lOjpfX2NvbnN0cnVjdCgpIGFsbG93cyBudWxsLg=='));

        $param1 = $method->getParameters()[1];
        $this->assertSame(base64_decode('bW92aW5nU3RyYXRlZ3k='), $param1->getName(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICMxIG9mIG1ldGhvZCBSYWNlXFJhY2VHYW1lOjpfX2NvbnN0cnVjdCgpIGhhcyBpbnZhbGlkIG5hbWUu'));
        $this->assertSame(base64_decode('UmFjZVxNb3ZpbmdTdHJhdGVneQ=='), $this->getType($param1->getType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRtb3ZpbmdTdHJhdGVneSBvZiBtZXRob2QgUmFjZVxSYWNlR2FtZTo6X19jb25zdHJ1Y3QoKSBoYXMgaW52YWxpZCB0eXBlLg=='));
        $this->assertFalse($param1->allowsNull(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRtb3ZpbmdTdHJhdGVneSBvZiBtZXRob2QgUmFjZVxSYWNlR2FtZTo6X19jb25zdHJ1Y3QoKSBhbGxvd3MgbnVsbC4='));

        $param2 = $method->getParameters()[2];
        $this->assertSame(base64_decode('ZGljZQ=='), $param2->getName(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICMyIG9mIG1ldGhvZCBSYWNlXFJhY2VHYW1lOjpfX2NvbnN0cnVjdCgpIGhhcyBpbnZhbGlkIG5hbWUu'));
        $this->assertSame(base64_decode('UmFjZVxEaWNl'), $this->getType($param2->getType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRkaWNlIG9mIG1ldGhvZCBSYWNlXFJhY2VHYW1lOjpfX2NvbnN0cnVjdCgpIGhhcyBpbnZhbGlkIHR5cGUu'));
        $this->assertFalse($param2->allowsNull(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRkaWNlIG9mIG1ldGhvZCBSYWNlXFJhY2VHYW1lOjpfX2NvbnN0cnVjdCgpIGFsbG93cyBudWxsLg=='));

        $param3 = $method->getParameters()[3];
        $this->assertSame(base64_decode('Ym9hcmQ='), $param3->getName(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICMzIG9mIG1ldGhvZCBSYWNlXFJhY2VHYW1lOjpfX2NvbnN0cnVjdCgpIGhhcyBpbnZhbGlkIG5hbWUu'));
        $this->assertSame(base64_decode('UmFjZVxCb2FyZA=='), $this->getType($param3->getType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRib2FyZCBvZiBtZXRob2QgUmFjZVxSYWNlR2FtZTo6X19jb25zdHJ1Y3QoKSBoYXMgaW52YWxpZCB0eXBlLg=='));
        $this->assertFalse($param3->allowsNull(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRib2FyZCBvZiBtZXRob2QgUmFjZVxSYWNlR2FtZTo6X19jb25zdHJ1Y3QoKSBhbGxvd3MgbnVsbC4='));
    }

    /** @depends testClass */
    public function testMethodJoinPlayer(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('am9pblBsYXllcg==')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIGpvaW5QbGF5ZXIgbm90IGZvdW5kIGluIGNsYXNzIFJhY2VcUmFjZUdhbWU='));

        $method = $class->getMethod(base64_decode('am9pblBsYXllcg=='));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmpvaW5QbGF5ZXIoKSBpcyBub3QgcHVibGljLg=='));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmpvaW5QbGF5ZXIoKSBpcyBhYnN0cmFjdC4='));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmpvaW5QbGF5ZXIoKSBpcyBmaW5hbC4='));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmpvaW5QbGF5ZXIoKSBpcyBzdGF0aWMu'));
        $this->assertEquals(1, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmpvaW5QbGF5ZXIoKSBoYXMgaW52YWxpZCBudW1iZXIgb2YgcmVxdWlyZWQgcGFyYW1ldGVycy4='));
        $this->assertGreaterThanOrEqual(1, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmpvaW5QbGF5ZXIoKSBoYXMgaW52YWxpZCBudW1iZXIgb2YgcGFyYW1ldGVycy4='));
        $this->assertSame(base64_decode('dm9pZA=='), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmpvaW5QbGF5ZXIoKSBoYXMgaW52YWxpZCByZXR1cm4gdHlwZS4='));

        $param0 = $method->getParameters()[0];
        $this->assertSame(base64_decode('cGxheWVy'), $param0->getName(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICMwIG9mIG1ldGhvZCBSYWNlXFJhY2VHYW1lOjpqb2luUGxheWVyKCkgaGFzIGludmFsaWQgbmFtZS4='));
        $this->assertSame(base64_decode('UmFjZVxQbGF5ZXJcUGxheWVy'), $this->getType($param0->getType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRwbGF5ZXIgb2YgbWV0aG9kIFJhY2VcUmFjZUdhbWU6OmpvaW5QbGF5ZXIoKSBoYXMgaW52YWxpZCB0eXBlLg=='));
        $this->assertFalse($param0->allowsNull(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRwbGF5ZXIgb2YgbWV0aG9kIFJhY2VcUmFjZUdhbWU6OmpvaW5QbGF5ZXIoKSBhbGxvd3MgbnVsbC4='));
    }

    /** @depends testClass */
    public function testMethodStartGame(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('c3RhcnRHYW1l')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIHN0YXJ0R2FtZSBub3QgZm91bmQgaW4gY2xhc3MgUmFjZVxSYWNlR2FtZQ=='));

        $method = $class->getMethod(base64_decode('c3RhcnRHYW1l'));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OnN0YXJ0R2FtZSgpIGlzIG5vdCBwdWJsaWMu'));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OnN0YXJ0R2FtZSgpIGlzIGFic3RyYWN0Lg=='));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OnN0YXJ0R2FtZSgpIGlzIGZpbmFsLg=='));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OnN0YXJ0R2FtZSgpIGlzIHN0YXRpYy4='));
        $this->assertEquals(0, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OnN0YXJ0R2FtZSgpIGhhcyBpbnZhbGlkIG51bWJlciBvZiByZXF1aXJlZCBwYXJhbWV0ZXJzLg=='));
        $this->assertGreaterThanOrEqual(0, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OnN0YXJ0R2FtZSgpIGhhcyBpbnZhbGlkIG51bWJlciBvZiBwYXJhbWV0ZXJzLg=='));
        $this->assertSame(base64_decode('dm9pZA=='), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OnN0YXJ0R2FtZSgpIGhhcyBpbnZhbGlkIHJldHVybiB0eXBlLg=='));
    }

    /** @depends testClass */
    public function testMethodPlayTurn(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('cGxheVR1cm4=')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIHBsYXlUdXJuIG5vdCBmb3VuZCBpbiBjbGFzcyBSYWNlXFJhY2VHYW1l'));

        $method = $class->getMethod(base64_decode('cGxheVR1cm4='));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OnBsYXlUdXJuKCkgaXMgbm90IHB1YmxpYy4='));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OnBsYXlUdXJuKCkgaXMgYWJzdHJhY3Qu'));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OnBsYXlUdXJuKCkgaXMgZmluYWwu'));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OnBsYXlUdXJuKCkgaXMgc3RhdGljLg=='));
        $this->assertEquals(0, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OnBsYXlUdXJuKCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHJlcXVpcmVkIHBhcmFtZXRlcnMu'));
        $this->assertGreaterThanOrEqual(0, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OnBsYXlUdXJuKCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHBhcmFtZXRlcnMu'));
        $this->assertSame(base64_decode('dm9pZA=='), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OnBsYXlUdXJuKCkgaGFzIGludmFsaWQgcmV0dXJuIHR5cGUu'));
    }

    /** @depends testClass */
    public function testMethodThrowDice(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('dGhyb3dEaWNl')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIHRocm93RGljZSBub3QgZm91bmQgaW4gY2xhc3MgUmFjZVxSYWNlR2FtZQ=='));

        $method = $class->getMethod(base64_decode('dGhyb3dEaWNl'));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OnRocm93RGljZSgpIGlzIG5vdCBwdWJsaWMu'));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OnRocm93RGljZSgpIGlzIGFic3RyYWN0Lg=='));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OnRocm93RGljZSgpIGlzIGZpbmFsLg=='));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OnRocm93RGljZSgpIGlzIHN0YXRpYy4='));
        $this->assertEquals(0, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OnRocm93RGljZSgpIGhhcyBpbnZhbGlkIG51bWJlciBvZiByZXF1aXJlZCBwYXJhbWV0ZXJzLg=='));
        $this->assertGreaterThanOrEqual(0, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OnRocm93RGljZSgpIGhhcyBpbnZhbGlkIG51bWJlciBvZiBwYXJhbWV0ZXJzLg=='));
        $this->assertSame(base64_decode('aW50'), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OnRocm93RGljZSgpIGhhcyBpbnZhbGlkIHJldHVybiB0eXBlLg=='));
    }

    /** @depends testClass */
    public function testMethodGetBoard(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('Z2V0Qm9hcmQ=')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIGdldEJvYXJkIG5vdCBmb3VuZCBpbiBjbGFzcyBSYWNlXFJhY2VHYW1l'));

        $method = $class->getMethod(base64_decode('Z2V0Qm9hcmQ='));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmdldEJvYXJkKCkgaXMgbm90IHB1YmxpYy4='));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmdldEJvYXJkKCkgaXMgYWJzdHJhY3Qu'));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmdldEJvYXJkKCkgaXMgZmluYWwu'));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmdldEJvYXJkKCkgaXMgc3RhdGljLg=='));
        $this->assertEquals(0, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmdldEJvYXJkKCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHJlcXVpcmVkIHBhcmFtZXRlcnMu'));
        $this->assertGreaterThanOrEqual(0, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmdldEJvYXJkKCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHBhcmFtZXRlcnMu'));
        $this->assertSame(base64_decode('UmFjZVxCb2FyZA=='), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmdldEJvYXJkKCkgaGFzIGludmFsaWQgcmV0dXJuIHR5cGUu'));
    }

    /** @depends testClass */
    public function testMethodGetPlayers(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('Z2V0UGxheWVycw==')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIGdldFBsYXllcnMgbm90IGZvdW5kIGluIGNsYXNzIFJhY2VcUmFjZUdhbWU='));

        $method = $class->getMethod(base64_decode('Z2V0UGxheWVycw=='));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmdldFBsYXllcnMoKSBpcyBub3QgcHVibGljLg=='));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmdldFBsYXllcnMoKSBpcyBhYnN0cmFjdC4='));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmdldFBsYXllcnMoKSBpcyBmaW5hbC4='));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmdldFBsYXllcnMoKSBpcyBzdGF0aWMu'));
        $this->assertEquals(0, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmdldFBsYXllcnMoKSBoYXMgaW52YWxpZCBudW1iZXIgb2YgcmVxdWlyZWQgcGFyYW1ldGVycy4='));
        $this->assertGreaterThanOrEqual(0, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmdldFBsYXllcnMoKSBoYXMgaW52YWxpZCBudW1iZXIgb2YgcGFyYW1ldGVycy4='));
        $this->assertSame(base64_decode('UmFjZVxQbGF5ZXJcUGxheWVyc0xpc3Q='), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmdldFBsYXllcnMoKSBoYXMgaW52YWxpZCByZXR1cm4gdHlwZS4='));
    }

    /** @depends testClass */
    public function testMethodSetState(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('c2V0U3RhdGU=')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIHNldFN0YXRlIG5vdCBmb3VuZCBpbiBjbGFzcyBSYWNlXFJhY2VHYW1l'));

        $method = $class->getMethod(base64_decode('c2V0U3RhdGU='));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OnNldFN0YXRlKCkgaXMgbm90IHB1YmxpYy4='));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OnNldFN0YXRlKCkgaXMgYWJzdHJhY3Qu'));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OnNldFN0YXRlKCkgaXMgZmluYWwu'));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OnNldFN0YXRlKCkgaXMgc3RhdGljLg=='));
        $this->assertEquals(1, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OnNldFN0YXRlKCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHJlcXVpcmVkIHBhcmFtZXRlcnMu'));
        $this->assertGreaterThanOrEqual(1, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OnNldFN0YXRlKCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHBhcmFtZXRlcnMu'));
        $this->assertSame(base64_decode('dm9pZA=='), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OnNldFN0YXRlKCkgaGFzIGludmFsaWQgcmV0dXJuIHR5cGUu'));

        $param0 = $method->getParameters()[0];
        $this->assertSame(base64_decode('c3RhdGU='), $param0->getName(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICMwIG9mIG1ldGhvZCBSYWNlXFJhY2VHYW1lOjpzZXRTdGF0ZSgpIGhhcyBpbnZhbGlkIG5hbWUu'));
        $this->assertSame(base64_decode('UmFjZVxTdGF0ZQ=='), $this->getType($param0->getType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRzdGF0ZSBvZiBtZXRob2QgUmFjZVxSYWNlR2FtZTo6c2V0U3RhdGUoKSBoYXMgaW52YWxpZCB0eXBlLg=='));
        $this->assertFalse($param0->allowsNull(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRzdGF0ZSBvZiBtZXRob2QgUmFjZVxSYWNlR2FtZTo6c2V0U3RhdGUoKSBhbGxvd3MgbnVsbC4='));
    }

    /** @depends testClass */
    public function testMethodGetState(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('Z2V0U3RhdGU=')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIGdldFN0YXRlIG5vdCBmb3VuZCBpbiBjbGFzcyBSYWNlXFJhY2VHYW1l'));

        $method = $class->getMethod(base64_decode('Z2V0U3RhdGU='));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmdldFN0YXRlKCkgaXMgbm90IHB1YmxpYy4='));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmdldFN0YXRlKCkgaXMgYWJzdHJhY3Qu'));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmdldFN0YXRlKCkgaXMgZmluYWwu'));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmdldFN0YXRlKCkgaXMgc3RhdGljLg=='));
        $this->assertEquals(0, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmdldFN0YXRlKCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHJlcXVpcmVkIHBhcmFtZXRlcnMu'));
        $this->assertGreaterThanOrEqual(0, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmdldFN0YXRlKCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHBhcmFtZXRlcnMu'));
        $this->assertSame(base64_decode('UmFjZVxTdGF0ZQ=='), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmdldFN0YXRlKCkgaGFzIGludmFsaWQgcmV0dXJuIHR5cGUu'));
    }

    /** @depends testClass */
    public function testMethodGetObservers(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('Z2V0T2JzZXJ2ZXJz')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIGdldE9ic2VydmVycyBub3QgZm91bmQgaW4gY2xhc3MgUmFjZVxSYWNlR2FtZQ=='));

        $method = $class->getMethod(base64_decode('Z2V0T2JzZXJ2ZXJz'));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmdldE9ic2VydmVycygpIGlzIG5vdCBwdWJsaWMu'));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmdldE9ic2VydmVycygpIGlzIGFic3RyYWN0Lg=='));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmdldE9ic2VydmVycygpIGlzIGZpbmFsLg=='));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmdldE9ic2VydmVycygpIGlzIHN0YXRpYy4='));
        $this->assertEquals(0, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmdldE9ic2VydmVycygpIGhhcyBpbnZhbGlkIG51bWJlciBvZiByZXF1aXJlZCBwYXJhbWV0ZXJzLg=='));
        $this->assertGreaterThanOrEqual(0, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmdldE9ic2VydmVycygpIGhhcyBpbnZhbGlkIG51bWJlciBvZiBwYXJhbWV0ZXJzLg=='));
        $this->assertSame(base64_decode('YXJyYXk='), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmdldE9ic2VydmVycygpIGhhcyBpbnZhbGlkIHJldHVybiB0eXBlLg=='));
    }

    /** @depends testClass */
    public function testMethodAttach(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('YXR0YWNo')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIGF0dGFjaCBub3QgZm91bmQgaW4gY2xhc3MgUmFjZVxSYWNlR2FtZQ=='));

        $method = $class->getMethod(base64_decode('YXR0YWNo'));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmF0dGFjaCgpIGlzIG5vdCBwdWJsaWMu'));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmF0dGFjaCgpIGlzIGFic3RyYWN0Lg=='));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmF0dGFjaCgpIGlzIGZpbmFsLg=='));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmF0dGFjaCgpIGlzIHN0YXRpYy4='));
        $this->assertEquals(1, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmF0dGFjaCgpIGhhcyBpbnZhbGlkIG51bWJlciBvZiByZXF1aXJlZCBwYXJhbWV0ZXJzLg=='));
        $this->assertGreaterThanOrEqual(1, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmF0dGFjaCgpIGhhcyBpbnZhbGlkIG51bWJlciBvZiBwYXJhbWV0ZXJzLg=='));
        $this->assertSame(base64_decode('dm9pZA=='), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmF0dGFjaCgpIGhhcyBpbnZhbGlkIHJldHVybiB0eXBlLg=='));

        $param0 = $method->getParameters()[0];
        $this->assertSame(base64_decode('b2JzZXJ2ZXI='), $param0->getName(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICMwIG9mIG1ldGhvZCBSYWNlXFJhY2VHYW1lOjphdHRhY2goKSBoYXMgaW52YWxpZCBuYW1lLg=='));
        $this->assertSame(base64_decode('U3BsT2JzZXJ2ZXI='), $this->getType($param0->getType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRvYnNlcnZlciBvZiBtZXRob2QgUmFjZVxSYWNlR2FtZTo6YXR0YWNoKCkgaGFzIGludmFsaWQgdHlwZS4='));
        $this->assertFalse($param0->allowsNull(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRvYnNlcnZlciBvZiBtZXRob2QgUmFjZVxSYWNlR2FtZTo6YXR0YWNoKCkgYWxsb3dzIG51bGwu'));
    }

    /** @depends testClass */
    public function testMethodDetach(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('ZGV0YWNo')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIGRldGFjaCBub3QgZm91bmQgaW4gY2xhc3MgUmFjZVxSYWNlR2FtZQ=='));

        $method = $class->getMethod(base64_decode('ZGV0YWNo'));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmRldGFjaCgpIGlzIG5vdCBwdWJsaWMu'));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmRldGFjaCgpIGlzIGFic3RyYWN0Lg=='));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmRldGFjaCgpIGlzIGZpbmFsLg=='));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmRldGFjaCgpIGlzIHN0YXRpYy4='));
        $this->assertEquals(1, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmRldGFjaCgpIGhhcyBpbnZhbGlkIG51bWJlciBvZiByZXF1aXJlZCBwYXJhbWV0ZXJzLg=='));
        $this->assertGreaterThanOrEqual(1, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmRldGFjaCgpIGhhcyBpbnZhbGlkIG51bWJlciBvZiBwYXJhbWV0ZXJzLg=='));
        $this->assertSame(base64_decode('dm9pZA=='), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6OmRldGFjaCgpIGhhcyBpbnZhbGlkIHJldHVybiB0eXBlLg=='));

        $param0 = $method->getParameters()[0];
        $this->assertSame(base64_decode('b2JzZXJ2ZXI='), $param0->getName(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICMwIG9mIG1ldGhvZCBSYWNlXFJhY2VHYW1lOjpkZXRhY2goKSBoYXMgaW52YWxpZCBuYW1lLg=='));
        $this->assertSame(base64_decode('U3BsT2JzZXJ2ZXI='), $this->getType($param0->getType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRvYnNlcnZlciBvZiBtZXRob2QgUmFjZVxSYWNlR2FtZTo6ZGV0YWNoKCkgaGFzIGludmFsaWQgdHlwZS4='));
        $this->assertFalse($param0->allowsNull(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRvYnNlcnZlciBvZiBtZXRob2QgUmFjZVxSYWNlR2FtZTo6ZGV0YWNoKCkgYWxsb3dzIG51bGwu'));
    }

    /** @depends testClass */
    public function testMethodNotify(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('bm90aWZ5')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIG5vdGlmeSBub3QgZm91bmQgaW4gY2xhc3MgUmFjZVxSYWNlR2FtZQ=='));

        $method = $class->getMethod(base64_decode('bm90aWZ5'));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6Om5vdGlmeSgpIGlzIG5vdCBwdWJsaWMu'));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6Om5vdGlmeSgpIGlzIGFic3RyYWN0Lg=='));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6Om5vdGlmeSgpIGlzIGZpbmFsLg=='));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6Om5vdGlmeSgpIGlzIHN0YXRpYy4='));
        $this->assertEquals(0, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6Om5vdGlmeSgpIGhhcyBpbnZhbGlkIG51bWJlciBvZiByZXF1aXJlZCBwYXJhbWV0ZXJzLg=='));
        $this->assertGreaterThanOrEqual(0, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6Om5vdGlmeSgpIGhhcyBpbnZhbGlkIG51bWJlciBvZiBwYXJhbWV0ZXJzLg=='));
        $this->assertSame(base64_decode('dm9pZA=='), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUmFjZUdhbWU6Om5vdGlmeSgpIGhhcyBpbnZhbGlkIHJldHVybiB0eXBlLg=='));
    }
}
