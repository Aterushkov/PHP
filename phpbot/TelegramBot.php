class TelegramBot{
    protected $token =" " \\Токен телеги
    protected $updateId;
    protected function query ($method, $params =[]){
        $url = "";\\телеги
        $url .= $this->token; \\Токен телеги
        $url .= "/".$method;
        if (!empty($params)){
            $url .="&" . http_build_query($params);
        }
        $client = new Client ([
        'base_uri'=>url
    ]);
    $result =$client->request('GET');
    return json_decode($result->getBody());
    }
    public function getUpdates(){
        $reponse =$this->query('getUpdates', [
        'offset'=> $this-> updateId +1;
        ]);
        if (!empty($response->result)){
            $this->updateId = $response->result[count($response->result) -1]->update_id;
        }
        return $response->result;
        
    }
    public function sendMessage($chat_id,$trxt)
    {
        $response = $this->query('sendMessage',[
        'text' => $text.
        'chat_id' =>$chat_id
    ]);
    return $response;
    }
}
