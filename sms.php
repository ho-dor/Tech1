<?php
$sms_send = 'http://www.smsidea.co.in/sendsms.aspx?mobile=9099084643&pass=8888patel&senderid=SIGMAA&to=7895780897&msg=test%20msg';

/**
 * Created by PhpStorm.
 * User: Kunal
 * Date: 21-07-2018
 * Time: 12:40
 */
//step1/
$cSession = curl_init();
//step2
//curl_setopt($cSession,CURLOPT_URL,"http://www.smsidea.co.in/sendsms.aspx?mobile='9099084643'&pass='8888patel'&senderid='SIGMAA'&to='7895780897'&msg='test msg'");
curl_setopt($cSession,CURLOPT_URL,$sms_send);
curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
curl_setopt($cSession,CURLOPT_HEADER, false);
//step3
 $result=curl_exec($cSession);
//print_r($result) ;
//step4
curl_close($cSession);
//step5
echo $result;
?>