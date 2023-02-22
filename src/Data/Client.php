<?php

namespace Cblink\Service\Form\Data;

use Cblink\Service\Foundation\BaseApi;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;

class Client extends BaseApi
{
    /**
     * @param $formCode
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function index($formCode, array $query = [])
    {
        return $this->httpGet(sprintf('/form/%s/data', $formCode), $query);
    }

    /**
     * @param $formCode
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function store($formCode, array $data = [])
    {
        return $this->httpPost(sprintf('/form/%s/data', $formCode), $data);
    }

    /**
     * @param $formCode
     * @param $id
     * @param array $query
     * @return array|ResponseInterface|string
     * @throws GuzzleException
     */
    public function show($formCode, $id, array $query = [])
    {
        return $this->httpGet(sprintf('/form/%s/data/%s', $formCode, $id), $query);
    }

    /**
     * @param $formCode
     * @param $id
     * @param array $data
     * @return array|ResponseInterface|string
     * @throws GuzzleException
     */
    public function update($formCode, $id, array $data = [])
    {
        return $this->httpPut(sprintf('/form/%s/data/%s', $formCode, $id), $data);
    }

    /**
     * @param $formCode
     * @param $id
     * @param array $query
     * @return array|ResponseInterface|string
     * @throws GuzzleException
     */
    public function destroy($formCode, $id, array $query = [])
    {
        return $this->httpDelete(sprintf('/form/%s/data/%s', $formCode, $id), $query);
    }
}