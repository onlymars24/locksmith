<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
      body {
        font-family: Arial, sans-serif;
        color: #333;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
      }
      .container {
        width: 80%;
        margin: auto;
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }
      h1 {
        color: #ffe500;
        text-align: center;
        margin-bottom: 20px;
      }
      li {
        font-size: 1.8em;
        line-height: 2;
      }
      .footer {
        text-align: center;
        margin-top: 20px;
        font-size: 0.9em;
        color: #777;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Новая заявка от пользователя ${name}</h1>
      <ul>
        <li>Имя: {{$name}}</li>
        <li>Телефон: {{$phone}}</li>
        <li>Текст: {{$text}}</li>
      </ul>
    </div>
  </body>
</html>