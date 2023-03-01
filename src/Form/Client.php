<?php

namespace Cblink\Service\Form\Form;

use Cblink\Service\Foundation\BaseApi;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;

class Client extends BaseApi
{
    /**
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function index(array $query = [])
    {
        return $this->httpGet('/form', $query);
    }

    /**
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function store(array $data = [])
    {
        return $this->httpPost('/form', $data);
    }

    /**
     * @param $formCode
     * @param array $query
     * @return array|ResponseInterface|string
     * @throws GuzzleException
     */
    public function show($formCode, array $query = [])
    {
        return $this->httpGet(sprintf('/form/%s', $formCode), $query);
    }

    /**
     * @param $formCode
     * @param array $data
     * @return array|ResponseInterface|string
     * @throws GuzzleException
     */
    public function update($formCode, array $data = [])
    {
        return $this->httpPut(sprintf('/form/%s', $formCode), $data);
    }

    /**
     * @param $formCode
     * @param array $query
     * @return array|ResponseInterface|string
     * @throws GuzzleException
     */
    public function destroy($formCode, array $query = [])
    {
        return $this->httpDelete(sprintf('/form/%s', $formCode), $query);
    }
}