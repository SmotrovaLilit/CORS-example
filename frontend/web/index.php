<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CORS Example Frontend</title>
</head>
<body>
<?php
$serverUrl = 'http://localhost:8089';
?>
<h1>Frontend</h1>
<div>
    При запуске страницы делается аякс запрос к серверу, который возвращает текущее время из своей сессии.
    То есть при повторном запросе ответ от сервера не поменяется.
</div>
<div>
    Response - <span id="response"></span>
</div>
<script>
    var xhr = new XMLHttpRequest();
    xhr.withCredentials = true;
    xhr.onload = function() {
        document.getElementById("response").innerHTML = this.responseText;
    };

    xhr.onerror = function() {
        alert( 'Error ' + this.status );
    };
    xhr.open('GET', '<?=$serverUrl; ?>', true);
    xhr.send();
</script>
</body>
</html>