<?php
/**
 * Created by PhpStorm.
 * User: mariano
 * Date: 30/10/18
 * Time: 8:58
 */

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProductControllerTest extends WebTestCase
{
    public function testNew()
    {
        $client = static::createClient();
        $client->request('GET', '/product/new');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}
