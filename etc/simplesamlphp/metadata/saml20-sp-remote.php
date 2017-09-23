<?php
$metadata['http://jenkins.example.com:8080/jenkins/securityRealm/finishLogin'] = array (
  'AssertionConsumerService' => 'http://jenkins.example.com:8080/jenkins/securityRealm/finishLogin',
  'SingleLogoutService' => 'http://jenkins.example.com:8080/jenkins/securityRealm/logOut',
  'authproc' => array(
    /* add the 'urn' prefix to all supported attributes (if available from authentication source) */
    90 => array(
      'class' => 'core:AttributeMap',
      'uid' => 'urn:mace:dir:attribute-def:uid',
      'sn' => 'urn:mace:dir:attribute-def:sn',
      'givenName' => 'urn:mace:dir:attribute-def:givenName',
      'cn' => 'urn:mace:dir:attribute-def:cn',
      'displayName' => 'urn:mace:dir:attribute-def:displayName',
      'mail' => 'urn:mace:dir:attribute-def:mail',
      'groups' => 'urn:mace:dir:attribute-def:groups',
    ),
  ),
);
$metadata['http://jenkins.example.com:9090/jenkins/securityRealm/finishLogin'] = array (
  'AssertionConsumerService' => 'http://jenkins.example.com:9090/jenkins/securityRealm/finishLogin',
  'SingleLogoutService' => 'http://jenkins.example.com:9090/jenkins/securityRealm/logOut',
  'authproc' => array(
    /* add the 'urn' prefix to all supported attributes (if available from authentication source) */
    90 => array(
      'class' => 'core:AttributeMap',
      'uid' => 'urn:mace:dir:attribute-def:uid',
      'sn' => 'urn:mace:dir:attribute-def:sn',
      'givenName' => 'urn:mace:dir:attribute-def:givenName',
      'cn' => 'urn:mace:dir:attribute-def:cn',
      'displayName' => 'urn:mace:dir:attribute-def:displayName',
      'mail' => 'urn:mace:dir:attribute-def:mail',
      'groups' => 'urn:mace:dir:attribute-def:groups',
    ),
  ),
);
