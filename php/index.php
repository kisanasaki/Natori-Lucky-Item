<!DOCTYPE html>
<html lang="Ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</head>
<body>
  <div class="container">
    <div id="display" class="text-center mt-5">
      <p>0</p>
    </div>

    <div class="text-center">
      <button class="btn btn-primary" onclick="refresh()">PHSH</button>
    </div>
  </div>

  <script src="https://unpkg.com/react@17/umd/react.development.js" crossorigin></script>
  <script src="https://unpkg.com/react-dom@17/umd/react-dom.development.js" crossorigin></script>

  <script>
    let dom = document.getElementById('display');

    let refresh = () => {
      let num = Math.floor(Math.random() * 6) + 1;
      let el = React.createElement(
      'p',{},num
      );
      ReactDOM.render(el,dom);
    }


  </script>
</body>
</html>
