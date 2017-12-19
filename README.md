# Пример CORS #

## Настройка CORS
- на фронтенде необходимо, если требуется работа с сессией, отправлять параметр withCredentials = true
- на сервере в ответе должны отправляться заголовки:
```
Access-Control-Allow-Origin:<url фронтенд-сайта>
Access-Control-Allow-Credentials: true //если необходима работа с сессией
Access-Control-Allow-Methods:POST, GET, OPTIONS //необходимые методы
```  

## Запуск и просмотр примера

Для просмотра необходимо:   

- запустить сайты 
```
make sites
```
- в браузере ввести http://localhost:8088/
