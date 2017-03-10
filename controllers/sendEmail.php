<?php
require '../vendor/autoload.php';
require '../core/bootstrap.php';

// error_reporting(-1);
// ini_set('display_errors', 'On');
// set_error_handler("var_dump");
//
// // Special mail settings that can make mail less likely to be considered spam
// // and offers logging in case of technical difficulties.
//
// ini_set("mail.log", "/tmp/mail.log");
// ini_set("mail.add_x_header", TRUE);
// $headers = implode("\r\n", [
//     'From: yassermohsen101010@gmail.com',
//     'Reply-To: webmaster@example.com',
//     'X-Mailer: PHP/' . PHP_VERSION
// ]);
// die(var_dump(mail('yassermohsen101010@gmail.com','theSubject','hellooooo',$headers)));
// mail('yassermohsen101010@gmail.com','the subject','hellooooo',$headers);

// function send_mail($email,$subject,$msg) {
//    //$api_key="pubkey-eae3f4d051f4ca95eaeb20d5fed59112";/* Api Key got from https://mailgun.com/cp/my_account */
//    $api_key="key-6ec6c261975fd4feaad7c980ca6c75f5";
//    //$domain ="sandboxe04ae10162fe4188961c3a20c3da9970.mailgun.org";/* Domain Name you given to Mailgun */
//    $domain ="yasser.mydomain.com";
//    $ch = curl_init();
//    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
//    curl_setopt($ch, CURLOPT_USERPWD, 'api:'.$api_key);
//    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
//    curl_setopt($ch, CURLOPT_URL, 'https://api.mailgun.net/v3/'.$domain.'/messages');
//    curl_setopt($ch, CURLOPT_POSTFIELDS, array(
//     'from' => 'Open <mail@youriste.com>',
//     'to' => $email,
//     'subject' => $subject,
//     'html' => $msg
//    ));
//    $result = curl_exec($ch);
//    curl_close($ch);
//    return $result;
// }
// var_dump(send_mail("ehab.g.sh@gmail.com", "Hello", "hii"));
// die(var_dump(1));

// using SendGrid's PHP Library
// https://github.com/sendgrid/sendgrid-php
// If you are using Composer (recommended)
//require 'vendor/autoload.php';
// If you are not using Composer
require("../sendgrid-php/sendgrid-php.php");
$request_body = json_decode('{
  "personalizations": [
    {
      "to": [
        {
          "email": "ehab.g.sh@gmail.com"
        }
      ],
      "subject": "Hello man! again 2"
    }
  ],
  "from": {
    "email": "support@osd-developers.com"
  },
  "content": [
    {
      "type": "text/plain",
      "value": "visit facebook"
    }
  ]
}');

//$apiKey = getenv('SENDGRID_API_KEY');
$apiKey = "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";
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($request_body);
echo $response->statusCode();
echo $response->body();
//echo $response->headers();
//die(var_dump(1));
?>
