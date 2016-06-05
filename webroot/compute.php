<?php

include('/var/www/html/slackathon/vendor/wolfram/wa_wrapper/WolframAlphaEngine.php');

define('DIR', '/var/www/html/slackathon/webroot/img/request');

$url = $argv[1];
$text = $argv[2];
$id = $argv[3];

if($text == "stats"){

    sleep(3);

    $reply = [
        "response_type" => "ephemeral",
        "attachments" => [
                [
                    "color" => "#36a64f",
                    "pretext" => 'Résultat pour: `'.$text.'`',
                    "text" => 'Your Stats',
                    "mrkdwn_in" => ["text", "pretext"],
                    "image_url" => 'https://sciencebot.me/img/request/werddqhrewasdfsofndso2-35243f2ewrwe4232_32342.png'
                ]
        ]
    ];

    $json = json_encode($reply);

    $cht = curl_init();
    curl_setopt($cht,CURLOPT_URL, $url);
    curl_setopt($cht,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.17 (KHTML, like Gecko) Chrome/24.0.1312.52 Safari/537.17');
    curl_setopt($cht, CURLOPT_AUTOREFERER, true);
    curl_setopt($cht, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($cht, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($cht, CURLOPT_VERBOSE, true);
    curl_setopt($cht, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($cht,CURLOPT_POSTFIELDS, $json);
    curl_exec($cht);
    curl_close($cht);

    $secReply = [
        "response_type" => "ephemeral",
        "attachments" => [
                [
                    "color" => "#36a64f",
                    "text" => 'Global graph',
                    "mrkdwn_in" => ["text"],
                    "image_url" => 'https://sciencebot.me/img/request/asdfghrewasdfsofndso24235243fjif232_32342.png'
                ]
        ]
    ];

    $json = json_encode($secReply);

    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.17 (KHTML, like Gecko) Chrome/24.0.1312.52 Safari/537.17');
    curl_setopt($ch, CURLOPT_AUTOREFERER, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_VERBOSE, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($ch,CURLOPT_POSTFIELDS, $json);
    curl_exec($ch);
    curl_close($ch);

}else{
    $appID = '9JE3GL-7Y9UQRAK7U';

    // instantiate an engine object with your app id
    $engine = new WolframAlphaEngine( $appID );

    $response = $engine->getResults( $text, ['format' => 'PNG'] );

    $timing = $response->attributes['timing'];

    if(count($response->getPods()) > 0){
        $firstpod = null;
        $secndpod = null;

        $i = 0;

        foreach ($response->getPods() as $pod) {
            if(!preg_match("/Input/i", $pod->attributes['title'])){
                if($i == 0){
                    $firstpod = $pod;
                }else if($i == 1){
                    $secndpod = $pod;
                }else{
                    goto kk;
                }
                $i += 1;
            }
        }

        kk:
        $firstsub = $firstpod->getSubpods()[0];
        $img = file_get_contents('"'.$firstsub->image->attributes['src'].'"');
        $name = $id . '_1.png';
        file_put_contents(DIR.'/'.$name, $img);
        $reply = [
            "response_type" => "in_channel",
            "attachments" => [
                    [
                        "color" => "#36a64f",
                        "pretext" => 'Résultat pour: `'.$text.'`',
                        "text" => $firstpod->attributes['title'],
                        "mrkdwn_in" => ["text", "pretext"],
                        "image_url" => $firstsub->image->attributes['src']
                    ]
            ]
        ];

        $json = json_encode($reply);

        $cht = curl_init();
        curl_setopt($cht,CURLOPT_URL, $url);
        curl_setopt($cht,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.17 (KHTML, like Gecko) Chrome/24.0.1312.52 Safari/537.17');
        curl_setopt($cht, CURLOPT_AUTOREFERER, true);
        curl_setopt($cht, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($cht, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($cht, CURLOPT_VERBOSE, true);
        curl_setopt($cht, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($cht,CURLOPT_POSTFIELDS, $json);
        curl_exec($cht);
        curl_close($cht);

        $secndsub = null;
        $secReply = null;
        if($i == 2){
            $secndsub = $secndpod->getSubpods()[0];
            $secReply = [
                "response_type" => "in_channel",
                "attachments" => [
                        [
                            "color" => "#36a64f",
                            "text" => $secndpod->attributes['title'],
                            "mrkdwn_in" => ["text"],
                            "image_url" => $secndsub->image->attributes['src']
                        ]
                ]
            ];
        }
    }else{
        $secReply = [
            "response_type" => "ephemeral",
            "text" => 'Votre requête a échoué... :dizzy_face:'
        ];
    }

    $json = json_encode($secReply);

    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.17 (KHTML, like Gecko) Chrome/24.0.1312.52 Safari/537.17');
    curl_setopt($ch, CURLOPT_AUTOREFERER, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_VERBOSE, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($ch,CURLOPT_POSTFIELDS, $json);
    curl_exec($ch);
    curl_close($ch);
}
