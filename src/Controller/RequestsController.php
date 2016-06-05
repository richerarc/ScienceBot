<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

use Cake\Network\Http\Client;
use WolframAlphaEngine;

function compute($url, $text, $user){
    $path = ROOT . DS . 'webroot/compute.php';
    exec('bash -c "exec nohup setsid /usr/bin/php -f '.$path.' \"'.$url.'\" \"'.$text.'\" \"'.$user.'\" > /dev/null 2>&1 &"');
}

class RequestsController extends AppController{

    public function initialize(){
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    public function add(){
        $text = $_POST['text'];
        $url = $_POST['response_url'];
        $user = $_POST['user_id'];

        if($text != ''){
            if($text == 'help'){
                $reply = [
                   "response_type" => "ephemeral",
                    "text" => "Demandez n'importe quoi à `/sciencebot` pour résoudre vos problème. \n Quelques examples : \n`/sciencebot derive` : Calcul la rérivée d'une fonction \n`/sciencebot integrate` : Calcul l'intégrale d'une fonction \n`/sciencebot solve` : Résous une équation mathématique \n`/sciencebot now` : Retourne l'heure actuelle \n`/sciencebot Albert Einstein` : Retourne la bibliographie d'Albert Einstein \n`/sciencebot work F=,d=` : Calcul le travail selon une force et une distance \n`/sciencebot star chart` : Retourne la charte des étoiles \n`/sciencebot weather in Montreal` : Retourne la température actuelle de Montréal \n`/sciencebot carbon` : Retourne les informations sur l'élément chimique carbone \n`/sciencebot 1000th prime number` : Retourne le millième nombre premier \n`/sciencebot you + me` : La relation entre toi et moi",
                    "mrkdwn" => ["text"]
                ];
            }else{
                $reply = [
                    "response_type" => "ephemeral",
                    "text" => 'Veuillez patienter pendant que je traite votre requête'
                ];
                compute($url, $text, $user);
            }
        }else{
            $reply = [
                "response_type" => "ephemeral",
                "text" => 'Rien à traiter, si vous avez besoin d\'aide, entrez `/sciencebot help`'
            ];
        }
        $this->autoRender = false;
        $this->response->type('json');

        $json = json_encode($reply);
        $this->response->body($json);
    }


}
