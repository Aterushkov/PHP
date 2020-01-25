<?
function send_mail($mail, $title,$text ){
  mail($mail, $title, '

<!DOCTYPE html>
  <html>
  <head>
  <title>'.$title.'</title>
  <meta charset="UTF-8">
  <link href="https://fonts.googleapis.com/css?family=Alegreya+SC|Ledger&display=swap&subset=cyrillic" rel="stylesheet">
  <style>
  * {margin: 0; padding: 0;}
  a{text-decoration: none;}

  p {
    margin: 20px;
  }

  h1 {
    color:#576369;
    font-family: "Ledger", serif;
    font-size: 24px;
    text-align: center;
  }

  body {
    font-family: "Alegreya SC", serif;
    font-size: 18px;
  }
  button{
    background:#34C0E2;
    color: #fff;
    padding: 5px;
    border: 1px solid #34C0E2;
    border-radius: 5px;
    font-family: "Alegreya SC", serif;
    font-size: 18px;
    box-shadow:0 0 5px rgba(0,0,0,0.5);

  }
  button:hover{
    cursor: pointer;
    opacity: 0.8;
  }

  input {
    padding: 5px;
    border: 1px solid #eeeff2;
    border-radius: 10px;
    font-family: "Alegreya SC", serif;
    font-size: 18px;
    color: #576369;
    box-shadow:0 0 5px rgba(0,0,0,0.5);
  }

  .walls {
    background: #F1F6FC;
    color: #000;
    padding: 15px;
    border-radius: 10px;
    margin: 10px 0;

  }
  .walls span {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
  font-size: 14px;

  }

  .lents {
    padding: 5px;
    border: 1px solid #eeeff2;
    border-radius: 10px;
    font-family: "Alegreya SC", serif;
    font-size: 18px;
    color: #576369;
    box-shadow:0 0 5px rgba(0,0,0,0.5);
  }


  .lifts {
    color:#576369;
    font-family: "Ledger", serif;
    font-size: 24px;
    text-align: center;
  }

  .content, .wrapper, .menu, body, html {
    height: 100%;
  }

  .wrapper {
    display: flex;

  }

  .content {
    display: flex;
    align-items: flex-start;
    flex: 1;
    background: url(http://www.reforma-sk.ru/storage/news/227.jpg);
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    justify-content: flex-start;
    flex-direction: column;

  }
  .block {
  margin: 40px;
  padding: 20px;
  background: #fff;
  border: 1px solid #eeeff2;
  border-radius: 5px;
  display: inline-block;
  box-shadow:5px 5px 15px rgba(0,0,0,0.5);
  width: 90%;
  position: static;
  }

  </style>
</head>
  <body>
  <div class="wrapper">
  <div class="content">
  <div class="block">
  <h1>'.$title.'<h1>
  <p>'.$text.'</p>
  <form action="/sopr.icu/">
    <button type="submit">Перейти на сайт</button>
  </form>
  </div>
  </div>
  </div>
  </body>
  </html>
  ?>', "From: Корпортал\r\nMIME-Version:1.0\r\nContent-Type:text/html; charset=UTF-8");
}
