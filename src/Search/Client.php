<?php

namespace Cblink\Service\Form\Search;

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
        return $this->httpGet(sprintf('/form/%s/search', $formCode), $query);
    }

    /**
     * @param $formCode
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function store($formCode, array $data = [])
    {
        return $this->httpPost(sprintf('/form/%s/search', $formCode), $data);
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
        return $this->httpDelete(sprintf('/form/%s/search/%s', $formCode, $id), $query);
    }
}