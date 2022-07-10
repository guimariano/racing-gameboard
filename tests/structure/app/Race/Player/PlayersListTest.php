<?php

/**
 * Project structure test, generated automatically. DO NOT MODIFY.
 *
 * @noinspection ALL
 */
declare(strict_types=1);

namespace tests\structure\Race\Player;

use ReflectionClass;
use tests\structure\StructureTestCase;

require_once __DIR__ . '/../../../StructureTestCase.php';

class PlayersListTest extends StructureTestCase
{
    public function testClass(): ReflectionClass
    {
        $this->assertTrue(\class_exists(base64_decode('UmFjZVxQbGF5ZXJcUGxheWVyc0xpc3Q=')), base64_decode('Q2xhc3MgJ1JhY2VcUGxheWVyXFBsYXllcnNMaXN0JyBkb2VzIG5vdCBleGlzdC4='));
        $class = new ReflectionClass(base64_decode('UmFjZVxQbGF5ZXJcUGxheWVyc0xpc3Q='));
        $this->assertFalse($class->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxQbGF5ZXJcUGxheWVyc0xpc3QgaXMgYWJzdHJhY3Qu'));
        $this->assertFalse($class->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxQbGF5ZXJcUGxheWVyc0xpc3QgaXMgZmluYWwu'));
        $this->assertTrue($class->implementsInterface(\Iterator::class), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxQbGF5ZXJcUGxheWVyc0xpc3QgZG9lcyBub3QgaW1wbGVtZW50IGludGVyZmFjZSBJdGVyYXRvci4='));
        $this->assertTrue($class->implementsInterface(\Traversable::class), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxQbGF5ZXJcUGxheWVyc0xpc3QgZG9lcyBub3QgaW1wbGVtZW50IGludGVyZmFjZSBUcmF2ZXJzYWJsZS4='));
        $this->assertTrue($class->implementsInterface(\Countable::class), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxQbGF5ZXJcUGxheWVyc0xpc3QgZG9lcyBub3QgaW1wbGVtZW50IGludGVyZmFjZSBDb3VudGFibGUu'));
        $this->assertTrue($class->isInstantiable(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxQbGF5ZXJcUGxheWVyc0xpc3QgaXMgbm90IGluc3RhbnRpYWJsZS4='));
        return $class;
    }

    /** @depends testClass */
    public function testMethod__construct(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('X19jb25zdHJ1Y3Q=')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIF9fY29uc3RydWN0IG5vdCBmb3VuZCBpbiBjbGFzcyBSYWNlXFBsYXllclxQbGF5ZXJzTGlzdA=='));

        $method = $class->getMethod(base64_decode('X19jb25zdHJ1Y3Q='));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0OjpfX2NvbnN0cnVjdCgpIGlzIG5vdCBwdWJsaWMu'));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0OjpfX2NvbnN0cnVjdCgpIGlzIGFic3RyYWN0Lg=='));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0OjpfX2NvbnN0cnVjdCgpIGlzIGZpbmFsLg=='));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0OjpfX2NvbnN0cnVjdCgpIGlzIHN0YXRpYy4='));
        $this->assertEquals(0, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0OjpfX2NvbnN0cnVjdCgpIGhhcyBpbnZhbGlkIG51bWJlciBvZiByZXF1aXJlZCBwYXJhbWV0ZXJzLg=='));
        $this->assertGreaterThanOrEqual(1, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0OjpfX2NvbnN0cnVjdCgpIGhhcyBpbnZhbGlkIG51bWJlciBvZiBwYXJhbWV0ZXJzLg=='));
        $this->assertNull($this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0OjpfX2NvbnN0cnVjdCgpIGhhcyBpbnZhbGlkIHJldHVybiB0eXBlLg=='));

        $param0 = $method->getParameters()[0];
        $this->assertSame(base64_decode('cGxheWVycw=='), $param0->getName(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICMwIG9mIG1ldGhvZCBSYWNlXFBsYXllclxQbGF5ZXJzTGlzdDo6X19jb25zdHJ1Y3QoKSBoYXMgaW52YWxpZCBuYW1lLg=='));
        $this->assertNull($this->getType($param0->getType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRwbGF5ZXJzIG9mIG1ldGhvZCBSYWNlXFBsYXllclxQbGF5ZXJzTGlzdDo6X19jb25zdHJ1Y3QoKSBoYXMgaW52YWxpZCB0eXBlLiBFeHBlY3RlZCBubyB0eXBlIGRlY2xhcmF0aW9uLg=='));
        $this->assertTrue($param0->allowsNull(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRwbGF5ZXJzIG9mIG1ldGhvZCBSYWNlXFBsYXllclxQbGF5ZXJzTGlzdDo6X19jb25zdHJ1Y3QoKSBkb2VzIG5vdCBhbGxvdyBudWxsLg=='));
        $this->assertTrue($param0->isDefaultValueAvailable(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRwbGF5ZXJzIG9mIG1ldGhvZCBSYWNlXFBsYXllclxQbGF5ZXJzTGlzdDo6X19jb25zdHJ1Y3QoKSBkb2VzIG5vdCBoYXZlIGRlZmF1bHQgdmFsdWUu'));
        $this->assertEquals(array (
), $param0->getDefaultValue(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRwbGF5ZXJzIG9mIG1ldGhvZCBSYWNlXFBsYXllclxQbGF5ZXJzTGlzdDo6X19jb25zdHJ1Y3QoKSBoYXMgaW52YWxpZCBkZWZhdWx0IHZhbHVlLg=='));
    }

    /** @depends testClass */
    public function testMethodJoinPlayer(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('am9pblBsYXllcg==')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIGpvaW5QbGF5ZXIgbm90IGZvdW5kIGluIGNsYXNzIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0'));

        $method = $class->getMethod(base64_decode('am9pblBsYXllcg=='));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0Ojpqb2luUGxheWVyKCkgaXMgbm90IHB1YmxpYy4='));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0Ojpqb2luUGxheWVyKCkgaXMgYWJzdHJhY3Qu'));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0Ojpqb2luUGxheWVyKCkgaXMgZmluYWwu'));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0Ojpqb2luUGxheWVyKCkgaXMgc3RhdGljLg=='));
        $this->assertEquals(1, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0Ojpqb2luUGxheWVyKCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHJlcXVpcmVkIHBhcmFtZXRlcnMu'));
        $this->assertGreaterThanOrEqual(1, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0Ojpqb2luUGxheWVyKCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHBhcmFtZXRlcnMu'));
        $this->assertSame(base64_decode('dm9pZA=='), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0Ojpqb2luUGxheWVyKCkgaGFzIGludmFsaWQgcmV0dXJuIHR5cGUu'));

        $param0 = $method->getParameters()[0];
        $this->assertSame(base64_decode('cGxheWVy'), $param0->getName(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICMwIG9mIG1ldGhvZCBSYWNlXFBsYXllclxQbGF5ZXJzTGlzdDo6am9pblBsYXllcigpIGhhcyBpbnZhbGlkIG5hbWUu'));
        $this->assertSame(base64_decode('UmFjZVxQbGF5ZXJcUGxheWVy'), $this->getType($param0->getType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRwbGF5ZXIgb2YgbWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0Ojpqb2luUGxheWVyKCkgaGFzIGludmFsaWQgdHlwZS4='));
        $this->assertFalse($param0->allowsNull(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRwbGF5ZXIgb2YgbWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0Ojpqb2luUGxheWVyKCkgYWxsb3dzIG51bGwu'));
    }

    /** @depends testClass */
    public function testMethodGetPlayers(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('Z2V0UGxheWVycw==')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIGdldFBsYXllcnMgbm90IGZvdW5kIGluIGNsYXNzIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0'));

        $method = $class->getMethod(base64_decode('Z2V0UGxheWVycw=='));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0OjpnZXRQbGF5ZXJzKCkgaXMgbm90IHB1YmxpYy4='));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0OjpnZXRQbGF5ZXJzKCkgaXMgYWJzdHJhY3Qu'));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0OjpnZXRQbGF5ZXJzKCkgaXMgZmluYWwu'));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0OjpnZXRQbGF5ZXJzKCkgaXMgc3RhdGljLg=='));
        $this->assertEquals(0, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0OjpnZXRQbGF5ZXJzKCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHJlcXVpcmVkIHBhcmFtZXRlcnMu'));
        $this->assertGreaterThanOrEqual(0, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0OjpnZXRQbGF5ZXJzKCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHBhcmFtZXRlcnMu'));
        $this->assertSame(base64_decode('YXJyYXk='), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0OjpnZXRQbGF5ZXJzKCkgaGFzIGludmFsaWQgcmV0dXJuIHR5cGUu'));
    }

    /** @depends testClass */
    public function testMethodCurrent(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('Y3VycmVudA==')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIGN1cnJlbnQgbm90IGZvdW5kIGluIGNsYXNzIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0'));

        $method = $class->getMethod(base64_decode('Y3VycmVudA=='));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0OjpjdXJyZW50KCkgaXMgbm90IHB1YmxpYy4='));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0OjpjdXJyZW50KCkgaXMgYWJzdHJhY3Qu'));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0OjpjdXJyZW50KCkgaXMgZmluYWwu'));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0OjpjdXJyZW50KCkgaXMgc3RhdGljLg=='));
        $this->assertEquals(0, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0OjpjdXJyZW50KCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHJlcXVpcmVkIHBhcmFtZXRlcnMu'));
        $this->assertGreaterThanOrEqual(0, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0OjpjdXJyZW50KCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHBhcmFtZXRlcnMu'));
        $this->assertSame(base64_decode('UmFjZVxQbGF5ZXJcUGxheWVyfG51bGw='), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0OjpjdXJyZW50KCkgaGFzIGludmFsaWQgcmV0dXJuIHR5cGUu'));
    }

    /** @depends testClass */
    public function testMethodNext(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('bmV4dA==')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIG5leHQgbm90IGZvdW5kIGluIGNsYXNzIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0'));

        $method = $class->getMethod(base64_decode('bmV4dA=='));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0OjpuZXh0KCkgaXMgbm90IHB1YmxpYy4='));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0OjpuZXh0KCkgaXMgYWJzdHJhY3Qu'));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0OjpuZXh0KCkgaXMgZmluYWwu'));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0OjpuZXh0KCkgaXMgc3RhdGljLg=='));
        $this->assertEquals(0, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0OjpuZXh0KCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHJlcXVpcmVkIHBhcmFtZXRlcnMu'));
        $this->assertGreaterThanOrEqual(0, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0OjpuZXh0KCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHBhcmFtZXRlcnMu'));
        $this->assertSame(base64_decode('dm9pZA=='), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0OjpuZXh0KCkgaGFzIGludmFsaWQgcmV0dXJuIHR5cGUu'));
    }

    /** @depends testClass */
    public function testMethodKey(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('a2V5')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIGtleSBub3QgZm91bmQgaW4gY2xhc3MgUmFjZVxQbGF5ZXJcUGxheWVyc0xpc3Q='));

        $method = $class->getMethod(base64_decode('a2V5'));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0OjprZXkoKSBpcyBub3QgcHVibGljLg=='));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0OjprZXkoKSBpcyBhYnN0cmFjdC4='));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0OjprZXkoKSBpcyBmaW5hbC4='));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0OjprZXkoKSBpcyBzdGF0aWMu'));
        $this->assertEquals(0, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0OjprZXkoKSBoYXMgaW52YWxpZCBudW1iZXIgb2YgcmVxdWlyZWQgcGFyYW1ldGVycy4='));
        $this->assertGreaterThanOrEqual(0, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0OjprZXkoKSBoYXMgaW52YWxpZCBudW1iZXIgb2YgcGFyYW1ldGVycy4='));
        $this->assertSame(base64_decode('aW50fG51bGw='), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0OjprZXkoKSBoYXMgaW52YWxpZCByZXR1cm4gdHlwZS4='));
    }

    /** @depends testClass */
    public function testMethodValid(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('dmFsaWQ=')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIHZhbGlkIG5vdCBmb3VuZCBpbiBjbGFzcyBSYWNlXFBsYXllclxQbGF5ZXJzTGlzdA=='));

        $method = $class->getMethod(base64_decode('dmFsaWQ='));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0Ojp2YWxpZCgpIGlzIG5vdCBwdWJsaWMu'));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0Ojp2YWxpZCgpIGlzIGFic3RyYWN0Lg=='));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0Ojp2YWxpZCgpIGlzIGZpbmFsLg=='));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0Ojp2YWxpZCgpIGlzIHN0YXRpYy4='));
        $this->assertEquals(0, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0Ojp2YWxpZCgpIGhhcyBpbnZhbGlkIG51bWJlciBvZiByZXF1aXJlZCBwYXJhbWV0ZXJzLg=='));
        $this->assertGreaterThanOrEqual(0, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0Ojp2YWxpZCgpIGhhcyBpbnZhbGlkIG51bWJlciBvZiBwYXJhbWV0ZXJzLg=='));
        $this->assertSame(base64_decode('Ym9vbA=='), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0Ojp2YWxpZCgpIGhhcyBpbnZhbGlkIHJldHVybiB0eXBlLg=='));
    }

    /** @depends testClass */
    public function testMethodRewind(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('cmV3aW5k')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIHJld2luZCBub3QgZm91bmQgaW4gY2xhc3MgUmFjZVxQbGF5ZXJcUGxheWVyc0xpc3Q='));

        $method = $class->getMethod(base64_decode('cmV3aW5k'));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0OjpyZXdpbmQoKSBpcyBub3QgcHVibGljLg=='));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0OjpyZXdpbmQoKSBpcyBhYnN0cmFjdC4='));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0OjpyZXdpbmQoKSBpcyBmaW5hbC4='));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0OjpyZXdpbmQoKSBpcyBzdGF0aWMu'));
        $this->assertEquals(0, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0OjpyZXdpbmQoKSBoYXMgaW52YWxpZCBudW1iZXIgb2YgcmVxdWlyZWQgcGFyYW1ldGVycy4='));
        $this->assertGreaterThanOrEqual(0, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0OjpyZXdpbmQoKSBoYXMgaW52YWxpZCBudW1iZXIgb2YgcGFyYW1ldGVycy4='));
        $this->assertSame(base64_decode('dm9pZA=='), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0OjpyZXdpbmQoKSBoYXMgaW52YWxpZCByZXR1cm4gdHlwZS4='));
    }

    /** @depends testClass */
    public function testMethodCount(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('Y291bnQ=')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIGNvdW50IG5vdCBmb3VuZCBpbiBjbGFzcyBSYWNlXFBsYXllclxQbGF5ZXJzTGlzdA=='));

        $method = $class->getMethod(base64_decode('Y291bnQ='));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0Ojpjb3VudCgpIGlzIG5vdCBwdWJsaWMu'));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0Ojpjb3VudCgpIGlzIGFic3RyYWN0Lg=='));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0Ojpjb3VudCgpIGlzIGZpbmFsLg=='));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0Ojpjb3VudCgpIGlzIHN0YXRpYy4='));
        $this->assertEquals(0, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0Ojpjb3VudCgpIGhhcyBpbnZhbGlkIG51bWJlciBvZiByZXF1aXJlZCBwYXJhbWV0ZXJzLg=='));
        $this->assertGreaterThanOrEqual(0, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0Ojpjb3VudCgpIGhhcyBpbnZhbGlkIG51bWJlciBvZiBwYXJhbWV0ZXJzLg=='));
        $this->assertSame(base64_decode('aW50'), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcUGxheWVyXFBsYXllcnNMaXN0Ojpjb3VudCgpIGhhcyBpbnZhbGlkIHJldHVybiB0eXBlLg=='));
    }
}
