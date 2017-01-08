
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>VK Ajax informations</h3>
                <form>
                    <div class="form-group center-block">
                        <label for="id">Введите id пользователя</label>
                        <input type="text" id="id" placeholder="id пользователя">
                    </div>
                </form>

                <table class="table table-bordered">
                    <tr>
                        <td>Имя</td>
                        <td>Фамилия</td>
                        <td>Дата рождения</td>
                        <td>Фотография</td>
                    </tr>
                      <tr>
                          <td ><a href="#" class="link table-name"></a></td>
                          <td ><a href="#" class="link table-family"></a></td>
                          <td ><a href="#" class="table-bdate"></a></td>
                          <td class="table-photo"><img id='img' src="" alt=""></td>
                      </tr>
                </table>
            </div>
        </div>

    </div>


    <script>
        function funcSuccess (data){
            object = JSON.parse(data);
            $('.link').attr('href','http://vk.com/id'+object.response[0].uid);

            $('.table-name').html(object.response[0].first_name);
            $('.table-family').html(object.response[0].last_name);
            $('.table-bdate').html(object.response[0].bdate);
            $('#img').attr("src",object.response[0].photo_medium);
            console.log(data);
        }
        setInterval(function() {
            $(document).ready(function(){

                var id = $("#id").val()
                $.ajax ({
                    url: "main_script/handler.php",
                    type: "POST",
                    data: {
                        id:id
                    },
                    success: funcSuccess
                });

            });
        },1000);
    </script>
</body>
</html>
