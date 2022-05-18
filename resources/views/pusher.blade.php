<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Pusher - Trong Nhan</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style type="text/css" media="screen">
      body{
        width: 100%;
      }
      #messages{
        color: #1abc9c;
      }
      #messages li{
        max-width: 50%;
        margin-bottom:10px;
        border-color: #34495e;
      }
      .tb{
        display: none;
        position: fixed;
        top: 30px;
        right: 30px;
        height: 100px;
        width: 100px;
        padding: 10px;
        border: 1px solid black;
        border-radius: 3px;
      }
    </style>
</head>
<body>
    <div class="container">
      <div class="content">
        <h1>Laravel & Pusher: Demo real-time web application.</h1>
          <small>
            Author: <a href="https://trungquandev.com/" target="__blank">https://trungquandev.com/</a>
          </small><br><br>

        <p>Message preview:</p>
          <ul id="messages" class="list-group"></ul>
      </div>
    </div>
    <div class="tb">
      CÓ THÔNG BÁO MỚI
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://js.pusher.com/4.1/pusher.min.js"></script>
    <script>
      $(document).ready(function(){
        // Khởi tạo một đối tượng Pusher với app_key
        var pusher = new Pusher('d6d7d60d9e6eb9e6b44b', {
            cluster: 'ap1',
            encrypted: true
        });

        //Đăng ký với kênh chanel-demo-real-time mà ta đã tạo trong file DemoPusherEvent.php
        var channel = pusher.subscribe('channel-name');

        //Bind một function addMesagePusher với sự kiện DemoPusherEvent
        channel.bind('App\\Events\\PusherEvent', addMessageDemo);
      });

      //function add message
      function addMessageDemo(data) {
        // var liTag = $("<li class='list-group-item'></li>");
        // liTag.html(data.msg);
        // $('#messages').append(liTag);
        $(".tb").show();
        setTimeout(() => {
          $(".tb").hide();
          $("#messages").append('<h1>hahaah</h1>');
        }, 3000);
      }
    </script>
</body>
</html>