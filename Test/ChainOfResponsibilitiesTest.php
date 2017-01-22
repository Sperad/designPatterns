<?php
namespace Test;

use design\ChainOfResponsibilities\CacheHandler;
use design\ChainOfResponsibilities\SlowHandler;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\UriInterface;

class ChainOfResponsibilitiesTest extends \PHPUnit_Framework_TestCase
{

    private $chain;

    protected function setUp()
    {
        $this->chain = new CacheHandler(['/foo/bar?index=1' => 'Hello In Memory!'], new SlowHandler());
    }

    public function testCanRequestKeyInCacheHandler()
    {
        $uri = $this->createMock(UriInterface::class);
        $uri->method('getPath')->willReturn('/foo/bar');
        $uri->method('getQuery')->willReturn('index=1');

        $request = $this->createMock(RequestInterface::class);
        $request->method('getMethod')->willReturn('GET');
        $request->method('getUri')->willReturn($uri);

        $this->assertEquals('Hello In Memory!', $this->chain->handle($request));
    }

    public function testCanRequestKeyInSlowHandler()
    {
        $uri = $this->createMock(UriInterface::class);
        $uri->method('getPath')->willReturn('/foo/baz');
        $uri->method('getQuery')->willReturn('');

        $request = $this->createMock(RequestInterface::class);
        $request->method('getMethod')->willReturn('GET');
        $request->method('getUri')->willReturn($uri);

        $this->assertEquals('Hello World!', $this->chain->handle($request));
    }
}
