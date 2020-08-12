<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>QIWI Checkout popup</title>
</head>

<body>
  hola
  <script>
    var someObj = {a:1,b:2};
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'https://advisedeposit.com/payment_server');
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.send('param=' + JSON.stringify(someObj));
    xhr.onreadystatechange = function()
    {
      if (this.readyState == 4)
      {
        if (this.status == 200)
        {
          console.log(xhr.responseText);
        }
        else
        {
          console.log('ajax error');
        }
      }
    };
  </script>
</body>

</html>
