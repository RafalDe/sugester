<?php
namespace Sugester;

class Sugester {
    private $api_token;

    public function __construct($token) {
        $this->api_token = $token;
    }

    public function addClient(Client $client) {
      return $this->send(HttpMethod::POST, 'clients.json', ['client' => $client->get()]);
    }

    public function send($type, $url, $data) {
        $body = array(
            'api_token' => $this->api_token
        );

        $body = array_merge($body, $data);
        $payload = json_encode($body);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://sungrey.sugester.pl/app/'.$url);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $type);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($payload))
        );
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);

        return curl_exec($ch);
    }
}
