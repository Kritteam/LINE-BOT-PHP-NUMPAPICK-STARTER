 <?php
  

function send_LINE($msg){
 $access_token = 'b9Gym9bgcV0vuc60J5ACBBmy0ZoOjO+iBHp4+qjkEVAc6W/RRFOkBAzsVL8tSTpmGhFh5qfAxiEcgvC+bjIouKZPiSZAGfxuVNIspZkyDOtraErzTT8fDMc2EOGe59ao1RiHGJxWJyVjy0rixEzt0gdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U2c81786bd097cb822f07c98ef8a50aa8',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
