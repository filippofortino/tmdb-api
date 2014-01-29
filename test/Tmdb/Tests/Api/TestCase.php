<?php
/**
 * This file is part of the Tmdb PHP API created by Michael Roterman.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package Tmdb
 * @author Michael Roterman <michael@wtfz.net>
 * @copyright (c) 2013, Michael Roterman
 * @version 0.0.1
 */
namespace Tmdb\Tests\Api;

use Tmdb\ApiToken;

abstract class TestCase extends \PHPUnit_Framework_TestCase
{
    private $_api = null;

    abstract protected function getApiClass();

    protected function getApiMock(array $methods = array())
    {
        if ($this->_api) {
            return $this->_api;
        }

        $client = $this->getClientWithMockedHttpClient();

        return $this->getMockBuilder($this->getApiClass())
            ->setMethods(
                array_merge(
                    array('get', 'post', 'postRaw', 'patch', 'delete', 'put'),
                    $methods
                )
            )
            ->setConstructorArgs(array($client))
            ->getMock();
    }

    protected function getClientWithMockedHttpClient()
    {
        $token      = new ApiToken('abcdef');

        $httpClient = $this->getMockedHttpClient();
        $httpClient
            ->expects($this->any())
            ->method('send');

        $mock = $this->getMock(
            'Tmdb\HttpClient\HttpClientInterface',
            array(),
            array(array(), $httpClient)
        );

        $client = new \Tmdb\Client($token, $httpClient);
        $client->setHttpClient($mock);

        return $client;
    }

    protected function getMockedHttpClient()
    {
        return $this->getMock('Guzzle\Http\Client', array('send'));
    }
}