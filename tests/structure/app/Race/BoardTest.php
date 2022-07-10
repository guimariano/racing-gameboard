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

class BoardTest extends StructureTestCase
{
    public function testClass(): ReflectionClass
    {
        $this->assertTrue(\class_exists(base64_decode('UmFjZVxCb2FyZA==')), base64_decode('Q2xhc3MgJ1JhY2VcQm9hcmQnIGRvZXMgbm90IGV4aXN0Lg=='));
        $class = new ReflectionClass(base64_decode('UmFjZVxCb2FyZA=='));
        $this->assertFalse($class->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxCb2FyZCBpcyBhYnN0cmFjdC4='));
        $this->assertFalse($class->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxCb2FyZCBpcyBmaW5hbC4='));
        $this->assertTrue($class->isInstantiable(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxCb2FyZCBpcyBub3QgaW5zdGFudGlhYmxlLg=='));
        return $class;
    }

    /** @depends testClass */
    public function testMethod__construct(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('X19jb25zdHJ1Y3Q=')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIF9fY29uc3RydWN0IG5vdCBmb3VuZCBpbiBjbGFzcyBSYWNlXEJvYXJk'));

        $method = $class->getMethod(base64_decode('X19jb25zdHJ1Y3Q='));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6Ol9fY29uc3RydWN0KCkgaXMgbm90IHB1YmxpYy4='));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6Ol9fY29uc3RydWN0KCkgaXMgYWJzdHJhY3Qu'));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6Ol9fY29uc3RydWN0KCkgaXMgZmluYWwu'));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6Ol9fY29uc3RydWN0KCkgaXMgc3RhdGljLg=='));
        $this->assertEquals(0, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6Ol9fY29uc3RydWN0KCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHJlcXVpcmVkIHBhcmFtZXRlcnMu'));
        $this->assertGreaterThanOrEqual(1, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6Ol9fY29uc3RydWN0KCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHBhcmFtZXRlcnMu'));
        $this->assertNull($this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6Ol9fY29uc3RydWN0KCkgaGFzIGludmFsaWQgcmV0dXJuIHR5cGUu'));

        $param0 = $method->getParameters()[0];
        $this->assertSame(base64_decode('c2l6ZQ=='), $param0->getName(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICMwIG9mIG1ldGhvZCBSYWNlXEJvYXJkOjpfX2NvbnN0cnVjdCgpIGhhcyBpbnZhbGlkIG5hbWUu'));
        $this->assertSame(base64_decode('aW50'), $this->getType($param0->getType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRzaXplIG9mIG1ldGhvZCBSYWNlXEJvYXJkOjpfX2NvbnN0cnVjdCgpIGhhcyBpbnZhbGlkIHR5cGUu'));
        $this->assertFalse($param0->allowsNull(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRzaXplIG9mIG1ldGhvZCBSYWNlXEJvYXJkOjpfX2NvbnN0cnVjdCgpIGFsbG93cyBudWxsLg=='));
        $this->assertTrue($param0->isDefaultValueAvailable(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRzaXplIG9mIG1ldGhvZCBSYWNlXEJvYXJkOjpfX2NvbnN0cnVjdCgpIGRvZXMgbm90IGhhdmUgZGVmYXVsdCB2YWx1ZS4='));
        $this->assertEquals(30, $param0->getDefaultValue(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRzaXplIG9mIG1ldGhvZCBSYWNlXEJvYXJkOjpfX2NvbnN0cnVjdCgpIGhhcyBpbnZhbGlkIGRlZmF1bHQgdmFsdWUu'));
    }

    /** @depends testClass */
    public function testMethodAddCard(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('YWRkQ2FyZA==')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIGFkZENhcmQgbm90IGZvdW5kIGluIGNsYXNzIFJhY2VcQm9hcmQ='));

        $method = $class->getMethod(base64_decode('YWRkQ2FyZA=='));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6OmFkZENhcmQoKSBpcyBub3QgcHVibGljLg=='));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6OmFkZENhcmQoKSBpcyBhYnN0cmFjdC4='));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6OmFkZENhcmQoKSBpcyBmaW5hbC4='));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6OmFkZENhcmQoKSBpcyBzdGF0aWMu'));
        $this->assertEquals(2, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6OmFkZENhcmQoKSBoYXMgaW52YWxpZCBudW1iZXIgb2YgcmVxdWlyZWQgcGFyYW1ldGVycy4='));
        $this->assertGreaterThanOrEqual(2, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6OmFkZENhcmQoKSBoYXMgaW52YWxpZCBudW1iZXIgb2YgcGFyYW1ldGVycy4='));
        $this->assertSame(base64_decode('dm9pZA=='), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6OmFkZENhcmQoKSBoYXMgaW52YWxpZCByZXR1cm4gdHlwZS4='));

        $param0 = $method->getParameters()[0];
        $this->assertSame(base64_decode('Y2FyZA=='), $param0->getName(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICMwIG9mIG1ldGhvZCBSYWNlXEJvYXJkOjphZGRDYXJkKCkgaGFzIGludmFsaWQgbmFtZS4='));
        $this->assertSame(base64_decode('UmFjZVxDYXJk'), $this->getType($param0->getType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRjYXJkIG9mIG1ldGhvZCBSYWNlXEJvYXJkOjphZGRDYXJkKCkgaGFzIGludmFsaWQgdHlwZS4='));
        $this->assertFalse($param0->allowsNull(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRjYXJkIG9mIG1ldGhvZCBSYWNlXEJvYXJkOjphZGRDYXJkKCkgYWxsb3dzIG51bGwu'));

        $param1 = $method->getParameters()[1];
        $this->assertSame(base64_decode('cG9zaXRpb24='), $param1->getName(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICMxIG9mIG1ldGhvZCBSYWNlXEJvYXJkOjphZGRDYXJkKCkgaGFzIGludmFsaWQgbmFtZS4='));
        $this->assertSame(base64_decode('aW50'), $this->getType($param1->getType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRwb3NpdGlvbiBvZiBtZXRob2QgUmFjZVxCb2FyZDo6YWRkQ2FyZCgpIGhhcyBpbnZhbGlkIHR5cGUu'));
        $this->assertFalse($param1->allowsNull(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRwb3NpdGlvbiBvZiBtZXRob2QgUmFjZVxCb2FyZDo6YWRkQ2FyZCgpIGFsbG93cyBudWxsLg=='));
    }

    /** @depends testClass */
    public function testMethodGetCard(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('Z2V0Q2FyZA==')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIGdldENhcmQgbm90IGZvdW5kIGluIGNsYXNzIFJhY2VcQm9hcmQ='));

        $method = $class->getMethod(base64_decode('Z2V0Q2FyZA=='));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6OmdldENhcmQoKSBpcyBub3QgcHVibGljLg=='));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6OmdldENhcmQoKSBpcyBhYnN0cmFjdC4='));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6OmdldENhcmQoKSBpcyBmaW5hbC4='));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6OmdldENhcmQoKSBpcyBzdGF0aWMu'));
        $this->assertEquals(1, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6OmdldENhcmQoKSBoYXMgaW52YWxpZCBudW1iZXIgb2YgcmVxdWlyZWQgcGFyYW1ldGVycy4='));
        $this->assertGreaterThanOrEqual(1, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6OmdldENhcmQoKSBoYXMgaW52YWxpZCBudW1iZXIgb2YgcGFyYW1ldGVycy4='));
        $this->assertSame(base64_decode('UmFjZVxDYXJkfG51bGw='), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6OmdldENhcmQoKSBoYXMgaW52YWxpZCByZXR1cm4gdHlwZS4='));

        $param0 = $method->getParameters()[0];
        $this->assertSame(base64_decode('cG9zaXRpb24='), $param0->getName(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICMwIG9mIG1ldGhvZCBSYWNlXEJvYXJkOjpnZXRDYXJkKCkgaGFzIGludmFsaWQgbmFtZS4='));
        $this->assertSame(base64_decode('aW50'), $this->getType($param0->getType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRwb3NpdGlvbiBvZiBtZXRob2QgUmFjZVxCb2FyZDo6Z2V0Q2FyZCgpIGhhcyBpbnZhbGlkIHR5cGUu'));
        $this->assertFalse($param0->allowsNull(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRwb3NpdGlvbiBvZiBtZXRob2QgUmFjZVxCb2FyZDo6Z2V0Q2FyZCgpIGFsbG93cyBudWxsLg=='));
    }

    /** @depends testClass */
    public function testMethodPut(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('cHV0')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIHB1dCBub3QgZm91bmQgaW4gY2xhc3MgUmFjZVxCb2FyZA=='));

        $method = $class->getMethod(base64_decode('cHV0'));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6OnB1dCgpIGlzIG5vdCBwdWJsaWMu'));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6OnB1dCgpIGlzIGFic3RyYWN0Lg=='));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6OnB1dCgpIGlzIGZpbmFsLg=='));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6OnB1dCgpIGlzIHN0YXRpYy4='));
        $this->assertEquals(1, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6OnB1dCgpIGhhcyBpbnZhbGlkIG51bWJlciBvZiByZXF1aXJlZCBwYXJhbWV0ZXJzLg=='));
        $this->assertGreaterThanOrEqual(1, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6OnB1dCgpIGhhcyBpbnZhbGlkIG51bWJlciBvZiBwYXJhbWV0ZXJzLg=='));
        $this->assertSame(base64_decode('dm9pZA=='), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6OnB1dCgpIGhhcyBpbnZhbGlkIHJldHVybiB0eXBlLg=='));

        $param0 = $method->getParameters()[0];
        $this->assertSame(base64_decode('cGxheWVy'), $param0->getName(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICMwIG9mIG1ldGhvZCBSYWNlXEJvYXJkOjpwdXQoKSBoYXMgaW52YWxpZCBuYW1lLg=='));
        $this->assertSame(base64_decode('UmFjZVxQbGF5ZXJcUGxheWVy'), $this->getType($param0->getType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRwbGF5ZXIgb2YgbWV0aG9kIFJhY2VcQm9hcmQ6OnB1dCgpIGhhcyBpbnZhbGlkIHR5cGUu'));
        $this->assertFalse($param0->allowsNull(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRwbGF5ZXIgb2YgbWV0aG9kIFJhY2VcQm9hcmQ6OnB1dCgpIGFsbG93cyBudWxsLg=='));
    }

    /** @depends testClass */
    public function testMethodMove(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('bW92ZQ==')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIG1vdmUgbm90IGZvdW5kIGluIGNsYXNzIFJhY2VcQm9hcmQ='));

        $method = $class->getMethod(base64_decode('bW92ZQ=='));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6Om1vdmUoKSBpcyBub3QgcHVibGljLg=='));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6Om1vdmUoKSBpcyBhYnN0cmFjdC4='));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6Om1vdmUoKSBpcyBmaW5hbC4='));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6Om1vdmUoKSBpcyBzdGF0aWMu'));
        $this->assertEquals(2, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6Om1vdmUoKSBoYXMgaW52YWxpZCBudW1iZXIgb2YgcmVxdWlyZWQgcGFyYW1ldGVycy4='));
        $this->assertGreaterThanOrEqual(2, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6Om1vdmUoKSBoYXMgaW52YWxpZCBudW1iZXIgb2YgcGFyYW1ldGVycy4='));
        $this->assertSame(base64_decode('dm9pZA=='), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6Om1vdmUoKSBoYXMgaW52YWxpZCByZXR1cm4gdHlwZS4='));

        $param0 = $method->getParameters()[0];
        $this->assertSame(base64_decode('cGxheWVy'), $param0->getName(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICMwIG9mIG1ldGhvZCBSYWNlXEJvYXJkOjptb3ZlKCkgaGFzIGludmFsaWQgbmFtZS4='));
        $this->assertSame(base64_decode('UmFjZVxQbGF5ZXJcUGxheWVy'), $this->getType($param0->getType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRwbGF5ZXIgb2YgbWV0aG9kIFJhY2VcQm9hcmQ6Om1vdmUoKSBoYXMgaW52YWxpZCB0eXBlLg=='));
        $this->assertFalse($param0->allowsNull(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRwbGF5ZXIgb2YgbWV0aG9kIFJhY2VcQm9hcmQ6Om1vdmUoKSBhbGxvd3MgbnVsbC4='));

        $param1 = $method->getParameters()[1];
        $this->assertSame(base64_decode('c3RlcHM='), $param1->getName(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICMxIG9mIG1ldGhvZCBSYWNlXEJvYXJkOjptb3ZlKCkgaGFzIGludmFsaWQgbmFtZS4='));
        $this->assertSame(base64_decode('aW50'), $this->getType($param1->getType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRzdGVwcyBvZiBtZXRob2QgUmFjZVxCb2FyZDo6bW92ZSgpIGhhcyBpbnZhbGlkIHR5cGUu'));
        $this->assertFalse($param1->allowsNull(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRzdGVwcyBvZiBtZXRob2QgUmFjZVxCb2FyZDo6bW92ZSgpIGFsbG93cyBudWxsLg=='));
    }

    /** @depends testClass */
    public function testMethodMoveTo(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('bW92ZVRv')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIG1vdmVUbyBub3QgZm91bmQgaW4gY2xhc3MgUmFjZVxCb2FyZA=='));

        $method = $class->getMethod(base64_decode('bW92ZVRv'));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6Om1vdmVUbygpIGlzIG5vdCBwdWJsaWMu'));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6Om1vdmVUbygpIGlzIGFic3RyYWN0Lg=='));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6Om1vdmVUbygpIGlzIGZpbmFsLg=='));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6Om1vdmVUbygpIGlzIHN0YXRpYy4='));
        $this->assertEquals(2, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6Om1vdmVUbygpIGhhcyBpbnZhbGlkIG51bWJlciBvZiByZXF1aXJlZCBwYXJhbWV0ZXJzLg=='));
        $this->assertGreaterThanOrEqual(2, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6Om1vdmVUbygpIGhhcyBpbnZhbGlkIG51bWJlciBvZiBwYXJhbWV0ZXJzLg=='));
        $this->assertSame(base64_decode('dm9pZA=='), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6Om1vdmVUbygpIGhhcyBpbnZhbGlkIHJldHVybiB0eXBlLg=='));

        $param0 = $method->getParameters()[0];
        $this->assertSame(base64_decode('cGxheWVy'), $param0->getName(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICMwIG9mIG1ldGhvZCBSYWNlXEJvYXJkOjptb3ZlVG8oKSBoYXMgaW52YWxpZCBuYW1lLg=='));
        $this->assertSame(base64_decode('UmFjZVxQbGF5ZXJcUGxheWVy'), $this->getType($param0->getType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRwbGF5ZXIgb2YgbWV0aG9kIFJhY2VcQm9hcmQ6Om1vdmVUbygpIGhhcyBpbnZhbGlkIHR5cGUu'));
        $this->assertFalse($param0->allowsNull(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRwbGF5ZXIgb2YgbWV0aG9kIFJhY2VcQm9hcmQ6Om1vdmVUbygpIGFsbG93cyBudWxsLg=='));

        $param1 = $method->getParameters()[1];
        $this->assertSame(base64_decode('cG9zaXRpb24='), $param1->getName(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICMxIG9mIG1ldGhvZCBSYWNlXEJvYXJkOjptb3ZlVG8oKSBoYXMgaW52YWxpZCBuYW1lLg=='));
        $this->assertSame(base64_decode('aW50'), $this->getType($param1->getType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRwb3NpdGlvbiBvZiBtZXRob2QgUmFjZVxCb2FyZDo6bW92ZVRvKCkgaGFzIGludmFsaWQgdHlwZS4='));
        $this->assertFalse($param1->allowsNull(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRwb3NpdGlvbiBvZiBtZXRob2QgUmFjZVxCb2FyZDo6bW92ZVRvKCkgYWxsb3dzIG51bGwu'));
    }

    /** @depends testClass */
    public function testMethodCompleted(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('Y29tcGxldGVk')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIGNvbXBsZXRlZCBub3QgZm91bmQgaW4gY2xhc3MgUmFjZVxCb2FyZA=='));

        $method = $class->getMethod(base64_decode('Y29tcGxldGVk'));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6OmNvbXBsZXRlZCgpIGlzIG5vdCBwdWJsaWMu'));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6OmNvbXBsZXRlZCgpIGlzIGFic3RyYWN0Lg=='));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6OmNvbXBsZXRlZCgpIGlzIGZpbmFsLg=='));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6OmNvbXBsZXRlZCgpIGlzIHN0YXRpYy4='));
        $this->assertEquals(1, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6OmNvbXBsZXRlZCgpIGhhcyBpbnZhbGlkIG51bWJlciBvZiByZXF1aXJlZCBwYXJhbWV0ZXJzLg=='));
        $this->assertGreaterThanOrEqual(1, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6OmNvbXBsZXRlZCgpIGhhcyBpbnZhbGlkIG51bWJlciBvZiBwYXJhbWV0ZXJzLg=='));
        $this->assertSame(base64_decode('Ym9vbA=='), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6OmNvbXBsZXRlZCgpIGhhcyBpbnZhbGlkIHJldHVybiB0eXBlLg=='));

        $param0 = $method->getParameters()[0];
        $this->assertSame(base64_decode('cGxheWVy'), $param0->getName(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICMwIG9mIG1ldGhvZCBSYWNlXEJvYXJkOjpjb21wbGV0ZWQoKSBoYXMgaW52YWxpZCBuYW1lLg=='));
        $this->assertSame(base64_decode('UmFjZVxQbGF5ZXJcUGxheWVy'), $this->getType($param0->getType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRwbGF5ZXIgb2YgbWV0aG9kIFJhY2VcQm9hcmQ6OmNvbXBsZXRlZCgpIGhhcyBpbnZhbGlkIHR5cGUu'));
        $this->assertFalse($param0->allowsNull(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRwbGF5ZXIgb2YgbWV0aG9kIFJhY2VcQm9hcmQ6OmNvbXBsZXRlZCgpIGFsbG93cyBudWxsLg=='));
    }

    /** @depends testClass */
    public function testMethodGetPosition(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('Z2V0UG9zaXRpb24=')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIGdldFBvc2l0aW9uIG5vdCBmb3VuZCBpbiBjbGFzcyBSYWNlXEJvYXJk'));

        $method = $class->getMethod(base64_decode('Z2V0UG9zaXRpb24='));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6OmdldFBvc2l0aW9uKCkgaXMgbm90IHB1YmxpYy4='));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6OmdldFBvc2l0aW9uKCkgaXMgYWJzdHJhY3Qu'));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6OmdldFBvc2l0aW9uKCkgaXMgZmluYWwu'));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6OmdldFBvc2l0aW9uKCkgaXMgc3RhdGljLg=='));
        $this->assertEquals(1, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6OmdldFBvc2l0aW9uKCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHJlcXVpcmVkIHBhcmFtZXRlcnMu'));
        $this->assertGreaterThanOrEqual(1, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6OmdldFBvc2l0aW9uKCkgaGFzIGludmFsaWQgbnVtYmVyIG9mIHBhcmFtZXRlcnMu'));
        $this->assertSame(base64_decode('aW50'), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6OmdldFBvc2l0aW9uKCkgaGFzIGludmFsaWQgcmV0dXJuIHR5cGUu'));

        $param0 = $method->getParameters()[0];
        $this->assertSame(base64_decode('cGxheWVy'), $param0->getName(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICMwIG9mIG1ldGhvZCBSYWNlXEJvYXJkOjpnZXRQb3NpdGlvbigpIGhhcyBpbnZhbGlkIG5hbWUu'));
        $this->assertSame(base64_decode('UmFjZVxQbGF5ZXJcUGxheWVy'), $this->getType($param0->getType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRwbGF5ZXIgb2YgbWV0aG9kIFJhY2VcQm9hcmQ6OmdldFBvc2l0aW9uKCkgaGFzIGludmFsaWQgdHlwZS4='));
        $this->assertFalse($param0->allowsNull(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRwbGF5ZXIgb2YgbWV0aG9kIFJhY2VcQm9hcmQ6OmdldFBvc2l0aW9uKCkgYWxsb3dzIG51bGwu'));
    }

    /** @depends testClass */
    public function testMethodGetSize(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('Z2V0U2l6ZQ==')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIGdldFNpemUgbm90IGZvdW5kIGluIGNsYXNzIFJhY2VcQm9hcmQ='));

        $method = $class->getMethod(base64_decode('Z2V0U2l6ZQ=='));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6OmdldFNpemUoKSBpcyBub3QgcHVibGljLg=='));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6OmdldFNpemUoKSBpcyBhYnN0cmFjdC4='));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6OmdldFNpemUoKSBpcyBmaW5hbC4='));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6OmdldFNpemUoKSBpcyBzdGF0aWMu'));
        $this->assertEquals(0, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6OmdldFNpemUoKSBoYXMgaW52YWxpZCBudW1iZXIgb2YgcmVxdWlyZWQgcGFyYW1ldGVycy4='));
        $this->assertGreaterThanOrEqual(0, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6OmdldFNpemUoKSBoYXMgaW52YWxpZCBudW1iZXIgb2YgcGFyYW1ldGVycy4='));
        $this->assertSame(base64_decode('aW50'), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQm9hcmQ6OmdldFNpemUoKSBoYXMgaW52YWxpZCByZXR1cm4gdHlwZS4='));
    }
}
