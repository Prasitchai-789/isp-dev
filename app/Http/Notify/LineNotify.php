<?php

namespace App\Http\Notify;

class LineNotify
{
    public function sendLine($message, $token)
    {
        define('LINE_API', "https://notify-api.line.me/api/notify");
        define('LINE_TOKEN', $token);

        $queryData = array('message' => $message);
        $queryData = http_build_query($queryData, '', '&');
        $headerOptions = array(
            'http' => array(
                'method' => 'POST',
                'header' => "Content-Type: application/x-www-form-urlencoded\r\n"
                    . "Authorization: Bearer " . LINE_TOKEN . "\r\n"
                    . "Content-Length: " . strlen($queryData) . "\r\n",
                'content' => $queryData
            )
        );
        $context = stream_context_create($headerOptions);
        $result = file_get_contents(LINE_API, FALSE, $context);
        $res = json_decode($result);
        return $res;
    }

    // public function sendLine($message, $token)
    // {
    //     $ch = curl_init();
    //     curl_setopt($ch, CURLOPT_URL, "https://notify-api.line.me/api/notify");
    //     curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    //     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    //     curl_setopt($ch, CURLOPT_POST, 1);
    //     curl_setopt($ch, CURLOPT_POSTFIELDS, "message=" . urlencode($message));
    //     curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    //     $headers = array("Authorization: Bearer " . $token);
    //     curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    //     $result = curl_exec($ch);
    //     curl_close($ch);

    //     return $result;
    // }
}
