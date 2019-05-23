<?php

namespace Ammonkc\SabreApi\HttpClient\Auth;

use Ammonkc\SabreApi\Client;
use Ammonkc\SabreApi\HttpClient\Auth\Provider\SabreProvider;
use GuzzleHttp\ClientInterface;
use League\OAuth2\Client\Token\AccessToken;
use Somoza\OAuth2Middleware\OAuth2Middleware;
use Somoza\OAuth2Middleware\TokenService\Bearer;

class Authenticator
{
    protected $clientId;
    protected $clientSecret;
    protected $token;
    protected $method;
    protected $base_uri;
    protected $urlAuthorize;
    protected $urlAccesstoken;
    protected $urlResourceOwnerDetails;
    protected $oauthClient;
    protected $tokenStore;

    public function __construct(ClientInterface $client = null, $clientId, $clientSecret = null, $token = null, $method = null, $tokenStore = null)
    {
        if (is_array($clientId)) {
            if (isset($clientId['method'])) {
                $method = $clientId['method'];
            }
            if ($method == Client::OAUTH_CLIENT_CREDENTIALS) {
                if (isset($clientId['clientSecret'])) {
                    $this->clientSecret = $clientId['clientSecret'];
                }
                if (isset($clientId['token'])) {
                    $this->token = $clientId['token'];
                }
                if (isset($clientId['clientId'])) {
                    $this->clientId = $clientId['clientId'];
                }
            }
        } else {
            $this->clientId = $clientId;
            $this->clientSecret = $clientSecret;
            $this->token = is_null($token) ? $token : new AccessToken($token);
        }

        $this->method = $method;
        $this->tokenStore = $tokenStore;
        $this->oauthClient = $client;
        $this->base_uri = (string) $client->getConfig('base_uri');
        $this->urlAuthorize = $this->base_uri . 'v2/auth/authorize';
        $this->urlAccesstoken = $this->base_uri . 'v2/auth/token';
        $this->urlResourceOwnerDetails = $this->base_uri . 'v2/auth/resource';
    }

    public function authenticate()
    {
        $tokenStore = $this->tokenStore;
        $provider = new SabreProvider([
            'clientId'                => $this->clientId,    // The client ID assigned to you by the provider
            'clientSecret'            => $this->clientSecret,    // The client password assigned to you by the provider
            'urlAuthorize'            => $this->urlAuthorize,
            'urlAccessToken'          => $this->urlAccesstoken,
            'urlResourceOwnerDetails' => null,
        ], ['httpClient' => $this->oauthClient]);

        $oauth = new OAuth2Middleware(
            new Bearer(
                $provider,
                $this->token,
                function (AccessToken $newToken, AccessToken $oldToken) use ($tokenStore) {
                    if (! is_null($tokenStore)) {
                        $tokenStore->save($newToken->jsonSerialize());
                    }
                }
            )
        );

        return $oauth;
    }

    public function getAccessToken()
    {
        $provider = new SabreProvider([
            'clientId'                => $this->clientId,    // The client ID assigned to you by the provider
            'clientSecret'            => $this->clientSecret,    // The client password assigned to you by the provider
            'urlAuthorize'            => $this->urlAuthorize,
            'urlAccessToken'          => $this->urlAccesstoken,
            'urlResourceOwnerDetails' => null,
        ], ['httpClient' => $this->oauthClient]);

        try {
            // Try to get an access token using the client credentials grant.
            $accessToken = $provider->getAccessToken('client_credentials');
        } catch (\League\OAuth2\Client\Provider\Exception\IdentityProviderException $e) {
            // Failed to get the access token
            exit($e->getMessage());
        }

        return $accessToken;
    }
}
