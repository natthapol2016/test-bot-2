 <?php
  

function send_LINE($msg){
 $access_token = 'O1lqnq1hp2ajfb1Os0OyRupw9Gj8LZz9Oj3plGX9WEuL1dD6hmF4IMebhFIqY9ncxsCjRDjkCGrRpektx0vHTGZuk/pNYsz9GB+b5Z7K9MYXcoEOAGlMHgoQVu5PZXib1mo3n4WaPKWa4rlkT6AGHgdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U7690da000c84b5421da70b278b2fd81b',
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
