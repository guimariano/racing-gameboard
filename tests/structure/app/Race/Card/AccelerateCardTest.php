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

class AccelerateCardTest extends StructureTestCase
{
    public function testClass(): ReflectionClass
    {
        $this->assertTrue(\class_exists(base64_decode('UmFjZVxDYXJkXEFjY2VsZXJhdGVDYXJk')), base64_decode('Q2xhc3MgJ1JhY2VcQ2FyZFxBY2NlbGVyYXRlQ2FyZCcgZG9lcyBub3QgZXhpc3Qu'));
        $class = new ReflectionClass(base64_decode('UmFjZVxDYXJkXEFjY2VsZXJhdGVDYXJk'));
        $this->assertFalse($class->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxDYXJkXEFjY2VsZXJhdGVDYXJkIGlzIGFic3RyYWN0Lg=='));
        $this->assertFalse($class->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxDYXJkXEFjY2VsZXJhdGVDYXJkIGlzIGZpbmFsLg=='));
        $this->assertTrue($class->isSubclassOf(base64_decode('UmFjZVxDYXJk')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxDYXJkXEFjY2VsZXJhdGVDYXJkIGlzIG5vdCBhIHN1YmNsYXNzIG9mIFJhY2VcQ2FyZC4='));
        $this->assertTrue($class->isInstantiable(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogQ2xhc3MgUmFjZVxDYXJkXEFjY2VsZXJhdGVDYXJkIGlzIG5vdCBpbnN0YW50aWFibGUu'));
        return $class;
    }

    /** @depends testClass */
    public function testMethod__construct(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('X19jb25zdHJ1Y3Q=')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIF9fY29uc3RydWN0IG5vdCBmb3VuZCBpbiBjbGFzcyBSYWNlXENhcmRcQWNjZWxlcmF0ZUNhcmQ='));

        $method = $class->getMethod(base64_decode('X19jb25zdHJ1Y3Q='));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZFxBY2NlbGVyYXRlQ2FyZDo6X19jb25zdHJ1Y3QoKSBpcyBub3QgcHVibGljLg=='));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZFxBY2NlbGVyYXRlQ2FyZDo6X19jb25zdHJ1Y3QoKSBpcyBhYnN0cmFjdC4='));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZFxBY2NlbGVyYXRlQ2FyZDo6X19jb25zdHJ1Y3QoKSBpcyBmaW5hbC4='));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZFxBY2NlbGVyYXRlQ2FyZDo6X19jb25zdHJ1Y3QoKSBpcyBzdGF0aWMu'));
        $this->assertEquals(0, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZFxBY2NlbGVyYXRlQ2FyZDo6X19jb25zdHJ1Y3QoKSBoYXMgaW52YWxpZCBudW1iZXIgb2YgcmVxdWlyZWQgcGFyYW1ldGVycy4='));
        $this->assertGreaterThanOrEqual(1, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZFxBY2NlbGVyYXRlQ2FyZDo6X19jb25zdHJ1Y3QoKSBoYXMgaW52YWxpZCBudW1iZXIgb2YgcGFyYW1ldGVycy4='));
        $this->assertNull($this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZFxBY2NlbGVyYXRlQ2FyZDo6X19jb25zdHJ1Y3QoKSBoYXMgaW52YWxpZCByZXR1cm4gdHlwZS4='));

        $param0 = $method->getParameters()[0];
        $this->assertSame(base64_decode('ZXh0cmFTdGVwcw=='), $param0->getName(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICMwIG9mIG1ldGhvZCBSYWNlXENhcmRcQWNjZWxlcmF0ZUNhcmQ6Ol9fY29uc3RydWN0KCkgaGFzIGludmFsaWQgbmFtZS4='));
        $this->assertSame(base64_decode('aW50'), $this->getType($param0->getType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRleHRyYVN0ZXBzIG9mIG1ldGhvZCBSYWNlXENhcmRcQWNjZWxlcmF0ZUNhcmQ6Ol9fY29uc3RydWN0KCkgaGFzIGludmFsaWQgdHlwZS4='));
        $this->assertFalse($param0->allowsNull(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRleHRyYVN0ZXBzIG9mIG1ldGhvZCBSYWNlXENhcmRcQWNjZWxlcmF0ZUNhcmQ6Ol9fY29uc3RydWN0KCkgYWxsb3dzIG51bGwu'));
        $this->assertTrue($param0->isDefaultValueAvailable(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRleHRyYVN0ZXBzIG9mIG1ldGhvZCBSYWNlXENhcmRcQWNjZWxlcmF0ZUNhcmQ6Ol9fY29uc3RydWN0KCkgZG9lcyBub3QgaGF2ZSBkZWZhdWx0IHZhbHVlLg=='));
        $this->assertEquals(1, $param0->getDefaultValue(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRleHRyYVN0ZXBzIG9mIG1ldGhvZCBSYWNlXENhcmRcQWNjZWxlcmF0ZUNhcmQ6Ol9fY29uc3RydWN0KCkgaGFzIGludmFsaWQgZGVmYXVsdCB2YWx1ZS4='));
    }

    /** @depends testClass */
    public function testMethodProcess(ReflectionClass $class): void
    {
        $this->assertTrue($class->hasMethod(base64_decode('cHJvY2Vzcw==')), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIHByb2Nlc3Mgbm90IGZvdW5kIGluIGNsYXNzIFJhY2VcQ2FyZFxBY2NlbGVyYXRlQ2FyZA=='));

        $method = $class->getMethod(base64_decode('cHJvY2Vzcw=='));
        $this->assertTrue($method->isPublic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZFxBY2NlbGVyYXRlQ2FyZDo6cHJvY2VzcygpIGlzIG5vdCBwdWJsaWMu'));
        $this->assertFalse($method->isAbstract(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZFxBY2NlbGVyYXRlQ2FyZDo6cHJvY2VzcygpIGlzIGFic3RyYWN0Lg=='));
        $this->assertFalse($method->isFinal(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZFxBY2NlbGVyYXRlQ2FyZDo6cHJvY2VzcygpIGlzIGZpbmFsLg=='));
        $this->assertFalse($method->isStatic(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZFxBY2NlbGVyYXRlQ2FyZDo6cHJvY2VzcygpIGlzIHN0YXRpYy4='));
        $this->assertEquals(1, $method->getNumberOfRequiredParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZFxBY2NlbGVyYXRlQ2FyZDo6cHJvY2VzcygpIGhhcyBpbnZhbGlkIG51bWJlciBvZiByZXF1aXJlZCBwYXJhbWV0ZXJzLg=='));
        $this->assertGreaterThanOrEqual(1, $method->getNumberOfParameters(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZFxBY2NlbGVyYXRlQ2FyZDo6cHJvY2VzcygpIGhhcyBpbnZhbGlkIG51bWJlciBvZiBwYXJhbWV0ZXJzLg=='));
        $this->assertSame(base64_decode('aW50'), $this->getType($method->getReturnType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogTWV0aG9kIFJhY2VcQ2FyZFxBY2NlbGVyYXRlQ2FyZDo6cHJvY2VzcygpIGhhcyBpbnZhbGlkIHJldHVybiB0eXBlLg=='));

        $param0 = $method->getParameters()[0];
        $this->assertSame(base64_decode('ZGljZVRocm93UmVzdWx0'), $param0->getName(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICMwIG9mIG1ldGhvZCBSYWNlXENhcmRcQWNjZWxlcmF0ZUNhcmQ6OnByb2Nlc3MoKSBoYXMgaW52YWxpZCBuYW1lLg=='));
        $this->assertSame(base64_decode('aW50'), $this->getType($param0->getType()), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRkaWNlVGhyb3dSZXN1bHQgb2YgbWV0aG9kIFJhY2VcQ2FyZFxBY2NlbGVyYXRlQ2FyZDo6cHJvY2VzcygpIGhhcyBpbnZhbGlkIHR5cGUu'));
        $this->assertFalse($param0->allowsNull(), base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUGFyYW1ldGVyICRkaWNlVGhyb3dSZXN1bHQgb2YgbWV0aG9kIFJhY2VcQ2FyZFxBY2NlbGVyYXRlQ2FyZDo6cHJvY2VzcygpIGFsbG93cyBudWxsLg=='));
    }
}
