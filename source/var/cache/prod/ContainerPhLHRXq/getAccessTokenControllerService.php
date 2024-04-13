<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController' shared service.

$a = new \League\OAuth2\Server\AuthorizationServer(new \PrestaShopBundle\Security\OAuth2\Repository\ClientRepository(($this->privates['security.user.provider.concrete.oauth2'] ?? ($this->privates['security.user.provider.concrete.oauth2'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider([]))), ($this->services['security.password_encoder'] ?? $this->load('getSecurity_PasswordEncoderService.php'))), new \PrestaShopBundle\Security\OAuth2\Repository\AccessTokenRepository(), new \PrestaShopBundle\Security\OAuth2\Repository\NullScopeRepository(), new \League\OAuth2\Server\CryptKey('-----BEGIN PRIVATE KEY-----'."\n".'MIIEugIBADANBgkqhkiG9w0BAQEFAASCBKQwggSgAgEAAoIBAQCKBgrSWI3oVYxf'."\n".'hEcwzCtVPlvwp1g6N94yRCZp1mer/enWuaJipOzE3ohJBnlnloW48IBidrzumni2'."\n".'Cz1vYYKtQU4alwXNhRupwKRD9R9bmNjsNi3I79fQw0u1NVaCoOxlJ4C7iow8lb4E'."\n".'fw2Ilwu2j1aENSyVTOxJdIcrFyrwCJ1XublT3yrC0Mr/W7n63rOO4tqISxwHDbrQ'."\n".'WekKMNPfm2ECIHKPMmfvwOWMj1n7yZH+D46Wf9KErI77HPPDMQw85U7zrNrJV4JH'."\n".'dwUDnoCXgx8w4eMN9ynDHVQ9ic0aCeuGbQNOx3zqb/FdOnt2jYgiZ7+zMmf2NLOo'."\n".'IO0ZFQ6dAgMBAAECgf8MDc2GRlxxws39NC8BjsP3rWJVapeezaIFt17Flnkqj3Gx'."\n".'cZyP3ck0Qls5fOX0n9cQsOMGaJ9gamB8YYOoGo+mvIzXi82NKZvLxS2ZD4EFR2Kw'."\n".'IfKDnEi7XkePaxPdYPpoO9oePsH2JA6Jk54qmg/fA1q/jQs2D9PAcnx2E0GsPjXk'."\n".'eJbkS300pzg/llsR7XngTXKlvfvtTOlTs2qDuk912neFdQEdMHct6/S9T3yi9fGb'."\n".'0bv9j0O7FpAbrZoZVrv6jesk1YjR37eihJalBU9oPgXmHRnF7Cw4FfCsrvytXK/O'."\n".'y+G6ef0aN0D0nNQayuhw3wJnNAPCidraCajnVhkCgYEAvl/lbCAnZeZf6aFva4+W'."\n".'fWIk+DkTbfx48iWMt2qy50CCYZKwTjjQ0qZ0uNlbt7hF+nEE5CkAkCDDXODMUVI/'."\n".'J990gpLrNxCu7chsp0WPAQ+ObZR4xx/cKrntA9eyEPKWAwAMcouQdLoBz5H2/C28'."\n".'tPntDt1eM9Wu+tCtcaFulYkCgYEAuZpLwx7ynj3bcC5dqOt2NLtEjamDsmyYX4Tw'."\n".'PVedsxTbcpwuTi/RwT2nahtWiAEGE0Sw/OLIp0iyKEkhbKdFLvOyenbidRyKmI1l'."\n".'JqMhuKzH4c28TH2a3QOOzRFpXHaTo9QoHKj5rsy9QosfzVSo/FW8QFKkZVHOpNSx'."\n".'tnNOP3UCgYBg41lV4D9s4wRpWRnluhwzD+IU2qeC0H2Vb3rgVlNa0kAI/KjyBoRw'."\n".'0PqSoTzGkeg7f42nuR5qO+JxwI77zEoMNvOLCM7hJYKBzgFOWF5hgdNQ/cFCRnq8'."\n".'3Ac+b2ZWrb+fI0Uyfsk0Pv5w766txXFHAfOeHxe0dcoqKE49iJVJUQKBgGzRYgoM'."\n".'YwMUEUw8Yv1ez/cqtI66DFTYBp46OwA8FmGgoOkZWKzOrJQ3qag0Tw9+SimR5JLg'."\n".'A/TQUmP8PHSPvahBiSrz+OHg0gGPJPb6PhMgejCRhwzxt5JNO7RPuQ5VF0q+YKYt'."\n".'C/bIY05Yc1TXhhwryCuOSIR+6kEJ0we9ourhAoGAQepAHUy4v4Tr7kg4RFqRs2Ff'."\n".'b21F7d1KTB4MBdJZ8H3Rd3+91nSLq5SwZQTZFCBMOyuIHTxWT0foPQp/4mTgQtk0'."\n".'Qj3rIYMyhoXFggtG+ScRICmB1APl7qeyZDltE2OQM2VQxgj0IQq9IAxckYF5ArFF'."\n".'27VY0ihZtWvHB7CS/Lo='."\n".'-----END PRIVATE KEY-----'."\n".''), 'def000009c30c859fc83e90a6907e064226f1e3bc42235da8fc87c358ea644764ec67ed2282797f23cb20c869d5a8aa48124113ceda873917131530adda03bcc150b5848');
$a->enableGrantType(new \League\OAuth2\Server\Grant\ClientCredentialsGrant());
$b = new \Nyholm\Psr7\Factory\Psr17Factory();

return $this->services['PrestaShopBundle\\Controller\\Api\\OAuth2\\AccessTokenController'] = new \PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController($a, new \Symfony\Bridge\PsrHttpMessage\Factory\PsrHttpFactory($b, $b, $b, $b), new \Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory(), $b);