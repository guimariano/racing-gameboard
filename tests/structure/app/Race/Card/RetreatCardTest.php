<?php

/**
 * Project structure test, generated automatically. DO NOT MODIFY.
 *
 * @noinspection ALL
 */
declare(strict_types=1);

namespace tests\structure\Race\Card;

use ReflectionClass;
use tests\structure\StructureTestCase;

require_once __DIR__ . '/../../../StructureTestCase.php';

class RetreatCardTest extends StructureTestCase
{
    public function testClass(): ReflectionClass
    {
        $this->assertTrue(\class_exists(base64_decode('UmFjZVxDYXJkXFJldHJlYXRDYXJk')), base64_decode('Q2xhc3MgJ1JhY2VcQ2FyZFxSZXRyZWF0Q2FyZCcgZG9lcyBub3QgZXhpc3Qu'));
        $class = new ReflectionClass(base64_decode('UmFjZVxDYXJkXFJldHJlYXRDYXJk'));
        $this->assertFalse($class->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxDYXJkXFJldHJlYXRDYXJkIGlzIGFic3RyYWN0Lg=='));
        $this->assertFalse($class->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxDYXJkXFJldHJlYXRDYXJkIGlzIGZpbmFsLg=='));
        $this->assertTrue($class->isSubclassOf(base64_decode('UmFjZVxDYXJk')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxDYXJkXFJldHJlYXRDYXJkIGlzIG5vdCBhIHN1YmNsYXNzIG9mIFJhY2VcQ2FyZC4='));
        $this->assertTrue($class->isInstantiable(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxDYXJkXFJldHJlYXRDYXJkIGlzIG5vdCBpbnN0YW50aWFibGUu'));
        return $class;
    }

    /** @depends testClass */
    public function testMethod__construct(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('X19jb25zdHJ1Y3Q=')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIF9fY29uc3RydWN0IG5vdCBmb3VuZCBpbiBjbGFzcyBSYWNlXENhcmRcUmV0cmVhdENhcmQ='));

        $method = $class->getMethod(base64_decode('X19jb25zdHJ1Y3Q='));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZFxSZXRyZWF0Q2FyZDo6X19jb25zdHJ1Y3QoKSBpcyBub3QgcHVibGljLg=='));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZFxSZXRyZWF0Q2FyZDo6X19jb25zdHJ1Y3QoKSBpcyBhYnN0cmFjdC4='));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZFxSZXRyZWF0Q2FyZDo6X19jb25zdHJ1Y3QoKSBpcyBmaW5hbC4='));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZFxSZXRyZWF0Q2FyZDo6X19jb25zdHJ1Y3QoKSBpcyBzdGF0aWMu'));
        $this->assertEquals(2, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZFxSZXRyZWF0Q2FyZDo6X19jb25zdHJ1Y3QoKSBoYXMgaW52YWxpZCBudW1iZXIgb2YgcmVxdWlyZWQgcGFyYW1ldGVycy4='));
        $this->assertGreaterThanOrEqual(2, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZFxSZXRyZWF0Q2FyZDo6X19jb25zdHJ1Y3QoKSBoYXMgaW52YWxpZCBudW1iZXIgb2YgcGFyYW1ldGVycy4='));
        $this->assertNull($this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZFxSZXRyZWF0Q2FyZDo6X19jb25zdHJ1Y3QoKSBoYXMgaW52YWxpZCByZXR1cm4gdHlwZS4='));

        $param0 = $method->getParameters()[0];
        $this->assertSame(base64_decode('dGhyb3duUmVzdWx0'), $param0->getName(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICMwIG9mIG1ldGhvZCBSYWNlXENhcmRcUmV0cmVhdENhcmQ6Ol9fY29uc3RydWN0KCkgaGFzIGludmFsaWQgbmFtZS4='));
        $this->assertSame(base64_decode('aW50'), $this->getType($param0->getType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICR0aHJvd25SZXN1bHQgb2YgbWV0aG9kIFJhY2VcQ2FyZFxSZXRyZWF0Q2FyZDo6X19jb25zdHJ1Y3QoKSBoYXMgaW52YWxpZCB0eXBlLg=='));
        $this->assertFalse($param0->allowsNull(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICR0aHJvd25SZXN1bHQgb2YgbWV0aG9kIFJhY2VcQ2FyZFxSZXRyZWF0Q2FyZDo6X19jb25zdHJ1Y3QoKSBhbGxvd3MgbnVsbC4='));

        $param1 = $method->getParameters()[1];
        $this->assertSame(base64_decode('cmV0cmVhdFN0ZXBz'), $param1->getName(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICMxIG9mIG1ldGhvZCBSYWNlXENhcmRcUmV0cmVhdENhcmQ6Ol9fY29uc3RydWN0KCkgaGFzIGludmFsaWQgbmFtZS4='));
        $this->assertSame(base64_decode('aW50'), $this->getType($param1->getType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRyZXRyZWF0U3RlcHMgb2YgbWV0aG9kIFJhY2VcQ2FyZFxSZXRyZWF0Q2FyZDo6X19jb25zdHJ1Y3QoKSBoYXMgaW52YWxpZCB0eXBlLg=='));
        $this->assertFalse($param1->allowsNull(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRyZXRyZWF0U3RlcHMgb2YgbWV0aG9kIFJhY2VcQ2FyZFxSZXRyZWF0Q2FyZDo6X19jb25zdHJ1Y3QoKSBhbGxvd3MgbnVsbC4='));
    }

    /** @depends testClass */
    public function testMethodProcess(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('cHJvY2Vzcw==')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIHByb2Nlc3Mgbm90IGZvdW5kIGluIGNsYXNzIFJhY2VcQ2FyZFxSZXRyZWF0Q2FyZA=='));

        $method = $class->getMethod(base64_decode('cHJvY2Vzcw=='));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZFxSZXRyZWF0Q2FyZDo6cHJvY2VzcygpIGlzIG5vdCBwdWJsaWMu'));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZFxSZXRyZWF0Q2FyZDo6cHJvY2VzcygpIGlzIGFic3RyYWN0Lg=='));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZFxSZXRyZWF0Q2FyZDo6cHJvY2VzcygpIGlzIGZpbmFsLg=='));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZFxSZXRyZWF0Q2FyZDo6cHJvY2VzcygpIGlzIHN0YXRpYy4='));
        $this->assertEquals(1, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZFxSZXRyZWF0Q2FyZDo6cHJvY2VzcygpIGhhcyBpbnZhbGlkIG51bWJlciBvZiByZXF1aXJlZCBwYXJhbWV0ZXJzLg=='));
        $this->assertGreaterThanOrEqual(1, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZFxSZXRyZWF0Q2FyZDo6cHJvY2VzcygpIGhhcyBpbnZhbGlkIG51bWJlciBvZiBwYXJhbWV0ZXJzLg=='));
        $this->assertSame(base64_decode('aW50'), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZFxSZXRyZWF0Q2FyZDo6cHJvY2VzcygpIGhhcyBpbnZhbGlkIHJldHVybiB0eXBlLg=='));

        $param0 = $method->getParameters()[0];
        $this->assertSame(base64_decode('ZGljZVRocm93UmVzdWx0'), $param0->getName(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICMwIG9mIG1ldGhvZCBSYWNlXENhcmRcUmV0cmVhdENhcmQ6OnByb2Nlc3MoKSBoYXMgaW52YWxpZCBuYW1lLg=='));
        $this->assertNull($this->getType($param0->getType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRkaWNlVGhyb3dSZXN1bHQgb2YgbWV0aG9kIFJhY2VcQ2FyZFxSZXRyZWF0Q2FyZDo6cHJvY2VzcygpIGhhcyBpbnZhbGlkIHR5cGUuIEV4cGVjdGVkIG5vIHR5cGUgZGVjbGFyYXRpb24u'));
        $this->assertTrue($param0->allowsNull(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRkaWNlVGhyb3dSZXN1bHQgb2YgbWV0aG9kIFJhY2VcQ2FyZFxSZXRyZWF0Q2FyZDo6cHJvY2VzcygpIGRvZXMgbm90IGFsbG93IG51bGwu'));
    }
}
