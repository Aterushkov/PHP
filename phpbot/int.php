<?php 
include ('vendor/autoload.php');
include('TelegramBot.php');
include('Weather.php');
$telegramApi = new TelegramBot();
$weatherApi = new Weather();

while(true){
    sleep(2);
    $getUpdates =$telegramApi->getUpdates();

foreach ($updates as $update){
    if (isset ($update->message->location)){
        $result= $weatherApi->getWeather($update->message->location->latintude, $update->message->location->longitude);
        switch($result->weather[0]-main) {
            
        case"Clear":
        $response = "На улице безоблачно. Зонтик не нужен. Хорошего дня.";
        break;
        case"Clouds":
        $response = "На улице облачно. Возьмите зонтик. Хорошего дня.";
        break;
        case"Rain":
        $response = "На улице Дождь. Зонт нужен. Хорошего дня.";
        break;
        case"Snow":
        $response = "На улице снег. Зонтик не нужен. Хорошего дня.";
        break;
        defaut:
        $response = "Непонятно! Зонтик лучше возьмите.";
        }
        $telegramApi->sendMessage($update->message->chat->id, $response);
        
    }else{$telegramApi->sendMessage($update->message->chat->id, 'Отправь локацию');
        
    }
}
}
