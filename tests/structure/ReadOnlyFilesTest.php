<?php

/**
 * Project structure test, generated automatically. DO NOT MODIFY.
 *
 * @noinspection ALL
 */
declare(strict_types=1);

namespace tests\structure;

use PHPUnit\Framework\TestCase;

class ReadOnlyFilesTest extends TestCase
{
    const BASE_DIR = __DIR__ . '/../../';

    /** @readonly */
    private $readOnlyFiles = [
        ['d8028ba01ea8ebd46dab72bb3f10870e', 'YnVpbGQvYnVpbGQueG1s'],
        ['d783867a102ffe4384f5e19d39afc1ea', 'cGhwdW5pdC54bWw='],
        ['4fa426c3e18805a90bb94554ea4cebdf', 'dGVzdHMvc3RydWN0dXJlL1N0cnVjdHVyZVRlc3RDYXNlLnBocA=='],
        ['b3d12710d84397ae1545cf8e00a705f2', 'dGVzdHMvc3RydWN0dXJlL2FwcC9SYWNlL0JvYXJkVGVzdC5waHA='],
        ['18a966f38e38f09efda4df0ce6882029', 'dGVzdHMvc3RydWN0dXJlL2FwcC9SYWNlL0NhcmQvQWNjZWxlcmF0ZUNhcmRUZXN0LnBocA=='],
        ['608f67921f6b044e9e886b652e4e4d01', 'dGVzdHMvc3RydWN0dXJlL2FwcC9SYWNlL0NhcmQvUmV0cmVhdENhcmRUZXN0LnBocA=='],
        ['87a14b1b3f72e473f59b312ebe04c906', 'dGVzdHMvc3RydWN0dXJlL2FwcC9SYWNlL0NhcmRUZXN0LnBocA=='],
        ['f6bb66bd69f7bf2e3841dafb717c484c', 'dGVzdHMvc3RydWN0dXJlL2FwcC9SYWNlL0RpY2UvRmFrZURpY2VUZXN0LnBocA=='],
        ['5c71971923addc3dcf4deb0ef5c1d5d0', 'dGVzdHMvc3RydWN0dXJlL2FwcC9SYWNlL0RpY2UvU3RhbmRhcmREaWNlVGVzdC5waHA='],
        ['62a05cd730855dbb9fd602644167cc99', 'dGVzdHMvc3RydWN0dXJlL2FwcC9SYWNlL0RpY2VUZXN0LnBocA=='],
        ['d2de9276deb71b1a8db6b2f8f564064e', 'dGVzdHMvc3RydWN0dXJlL2FwcC9SYWNlL0dhbWVMb2dnZXJUZXN0LnBocA=='],
        ['a37eb5945b4c5e63f4f81cbd82d3e026', 'dGVzdHMvc3RydWN0dXJlL2FwcC9SYWNlL01vdmluZ1N0cmF0ZWd5L0RvdWJsZVRocm93U3RyYXRlZ3lUZXN0LnBocA=='],
        ['e49b979d7f6277a53f120403defc736e', 'dGVzdHMvc3RydWN0dXJlL2FwcC9SYWNlL01vdmluZ1N0cmF0ZWd5L1N0YW5kYXJkU3RyYXRlZ3lUZXN0LnBocA=='],
        ['fbbe9e8df60b387b59d08d87e3338c9f', 'dGVzdHMvc3RydWN0dXJlL2FwcC9SYWNlL01vdmluZ1N0cmF0ZWd5L1R1cnRsZVN0cmF0ZWd5VGVzdC5waHA='],
        ['e2ba972422a5c4564961fb45a394e829', 'dGVzdHMvc3RydWN0dXJlL2FwcC9SYWNlL01vdmluZ1N0cmF0ZWd5VGVzdC5waHA='],
        ['952ae47d8ca1544c68a278ebe19c08b8', 'dGVzdHMvc3RydWN0dXJlL2FwcC9SYWNlL1BsYXllci9QbGF5ZXJUZXN0LnBocA=='],
        ['c904fc89299e77c170bf8eb4d97a9787', 'dGVzdHMvc3RydWN0dXJlL2FwcC9SYWNlL1BsYXllci9QbGF5ZXJzTGlzdFRlc3QucGhw'],
        ['cb7c5474ec7a461af712498b4e31d436', 'dGVzdHMvc3RydWN0dXJlL2FwcC9SYWNlL1JhY2VHYW1lVGVzdC5waHA='],
        ['2f159fef9a1087065490a6c40ec16c24', 'dGVzdHMvc3RydWN0dXJlL2FwcC9SYWNlL1Njb3JpbmdCb2FyZFRlc3QucGhw'],
        ['c0cf6af5ff13d9f42d17b0c28ab6498d', 'dGVzdHMvc3RydWN0dXJlL2FwcC9SYWNlL1N0YXRlL0NvbXBsZXRlZFN0YXRlVGVzdC5waHA='],
        ['f98c28cd2c69a084a5a556915e8019fa', 'dGVzdHMvc3RydWN0dXJlL2FwcC9SYWNlL1N0YXRlL1BsYXlpbmdTdGF0ZVRlc3QucGhw'],
        ['dd26d00cfa7576866e125c1b40638495', 'dGVzdHMvc3RydWN0dXJlL2FwcC9SYWNlL1N0YXRlL1dhaXRpbmdGb3JQbGF5ZXJzU3RhdGVUZXN0LnBocA=='],
        ['a7e803e2949467b7e67fbaff5704d840', 'dGVzdHMvc3RydWN0dXJlL2FwcC9SYWNlL1N0YXRlVGVzdC5waHA='],
    ];

    public function testReadOnlyFiles(): void
    {
        foreach ($this->readOnlyFiles as [$checksum, $file]) {
            $this->assertFileExists(self::BASE_DIR . base64_decode($file));
            $this->assertTrue(
                $checksum === md5_file(self::BASE_DIR . base64_decode($file)),
                sprintf(base64_decode('U3RydWN0dXJlIHZpb2xhdGlvbjogUmVhZC1vbmx5IGZpbGUgIiVzIiB3YXMgbW9kaWZpZWQu'), base64_decode($file))
            );
        }
    }
}
