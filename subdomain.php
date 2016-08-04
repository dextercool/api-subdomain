<?php
  include "api/xmlapi.php";
 
  $cpanelusr = 'username_cpanel';
  $cpanelpass = 'pass_cpanel';
  $xmlapi = new xmlapi('127.0.0.1');
  $xmlapi->set_port( 2082 );
  $xmlapi->password_auth($cpanelusr,$cpanelpass);
  $xmlapi->set_debug(0); //output actions in the error log 1 for true and 0 false 
  $result = $xmlapi->api1_query($cpanelusr, 'SubDomain', 'addsubdomain', array('namasubdomainnya','domain-kalian.com',0,0, '/public_html/namasubdomainnya'));
?>