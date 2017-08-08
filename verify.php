<?php
$access_token = 'vj0T1mQAtxaoHFpa9s6Hi6xHrUQgwaOjsc6snBtrltypFIye2ozzEvRrvKyjW1H2JvImozWyloxwwwg6y57s7kLxB+KCe6Drg1sfls9dYX3mY4nEl0mDUd3nrAEttrV+gfsPfC4GIoP/H42pVcvEHwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
