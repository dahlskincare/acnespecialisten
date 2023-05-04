<?php
/**
 * Created by PhpStorm.
 * User: Johan
 * Date: 2016-01-17
 * Time: 20:16
 */

namespace HelmutSchneider\Swish\Tests;

use HelmutSchneider\Swish\Client;
use HelmutSchneider\Swish\PaymentRequest;
use HelmutSchneider\Swish\Refund;
use HelmutSchneider\Swish\ValidationException;

class ClientTest extends TestCase
{

    /**
     * @var Client
     */
    private $client;

    /**
     * @var array
     */
    private $paymentRequest = [
        'callbackUrl' => 'https://localhost/swish',
        'payeePaymentReference' => '12345',
        'payerAlias' => '4671234768',
        'payeeAlias' => '1231181189',
        'amount' => '100',
        'currency' => 'SEK',
    ];

    public function setUp(): void
    {
        parent::setUp();

        $rootCert = __DIR__ . '/_data/root.pem';
        $clientCert = [__DIR__ . '/_data/client.pem', ''];
        $this->client = Client::make($rootCert, $clientCert, Client::SWISH_TEST_URL);
    }

    /**
     * Randomize a 10-digit phone number
     * @return string
     */
    public function randomSwedishPhoneNumber(): string
    {
        $nums = '';
        for ($i = 0; $i < 8; $i++) {
            $nums .= mt_rand(0, 9);
        }
        return '46' . $nums;
    }

    public function testCreateGetPaymentRequest(): void
    {
        $paymentRequest = new PaymentRequest($this->paymentRequest);
        $paymentRequest->payerAlias = $this->randomSwedishPhoneNumber();
        $paymentRequestResponse = $this->client->createPaymentRequest($paymentRequest);
        $res = $this->client->getPaymentRequest($paymentRequestResponse->id);
        $this->assertEquals($paymentRequestResponse->id, $res->id);
        $this->assertSame('', $paymentRequestResponse->paymentRequestToken);
    }

    public function testThrowsValidationException(): void
    {
        $this->expectException(ValidationException::class);

        $paymentRequest = new PaymentRequest($this->paymentRequest);
        $paymentRequest->payerAlias = '123';

        $this->client->createPaymentRequest($paymentRequest);
    }

    public function testCreateRefund(): void
    {
        $pr = new PaymentRequest([
            'callbackUrl' => 'https://localhost/swish',
            'payeePaymentReference' => '12345',
            'payerAlias' => '4671234768',
            'payeeAlias' => '1231181189',
            'amount' => '100',
        ]);

        $paymentRequestResponse = $this->client->createPaymentRequest($pr);

        // the test server automatically sets the request
        // to "PAID" if we wait a couple of seconds.
        sleep(5);

        $res = $this->client->getPaymentRequest($paymentRequestResponse->id);

        $id = $this->client->createRefund(new Refund([
            'originalPaymentReference' => $res->paymentReference,
            'payerAlias' => '1231181189',
            'callbackUrl' => 'https://localhost/swish',
            'amount' => '100',
            'message' => 'Some test message',
        ]));

        $this->assertNotEmpty($id);
    }

    public function testThrowsValidationExceptionOnInvalidSwishNumber(): void
    {
        $this->expectException(ValidationException::class);

        $paymentRequest = new PaymentRequest($this->paymentRequest);
        $paymentRequest->payeeAlias = '123';

        $this->client->createPaymentRequest($paymentRequest);
    }

}
