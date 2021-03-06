<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

// @see http://docs.openstack.org/api/openstack-identity-service/2.0/content/GET_validateToken_v2.0_tokens__tokenId__Admin_API_Service_Developer_Operations-d1e1356.html
return array(
    'url' => '/v2.0/tokens/' . urlencode($params[0]),
    'header' => array(
        'Content-Type' => 'application/json'
    ),
    'method' => 'HEAD',
    'response' => array(
        'valid_codes' => array('200', '203')
    )
);
