<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
    <script
      src="https://code.jquery.com/jquery-3.6.0.js"
      integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
      crossorigin="anonymous">
    </script>
    
</head>
<body>
    <h1>Welcome</h1>
    <div id="wrapper">
        <div class="chat-wrapper">
            <div id="chat">
            
            </div>
            <form method="POST">
                <textarea name="message" cols="30" rows="10" class="textarea"></textarea>
            </form>
        </div>
    </div>
    <script>
        $('.textarea').keyup(function(e){
            if(e.which==13)
            {
                $('form').submit();
            }
        });
        $('form').submit(function(){
            var message = $('.textarea').val();
            $.post('handlers/messages.php?action=sendMessage&message='+message,function(
                response){
                    alert(response);
                });
            return false;
        });
    </script>
</body>
</html>