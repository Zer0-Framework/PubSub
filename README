# PubSub
Компонент реализует PubSub-сервис, используемый для рассылки сообщений (событий) по каналам.

## Конфигурация
|Имя|     Тип|       Описание| Значение по-умолчанию|
|:-------:|:---:|:--------------:|:---------------------:|
|type|string| Тип хранилища |Redis

## Пример использования

### Рассылка
```php
$pubsub = $this->app->broker('PubSub')->get();
$pubsub->publish(new \Zer0\PubSub\Message('someChannel', 'Hello world!'));
```

### Подписка (асинхронный вариант)

```php
$pubsub = $this->app->broker('PubSubAsync')->get();

// Подписка на определенный канал
$pubsub->subscribe('someChannel', function ($payload, string $chan) {
    var_dump($payload);
   // string(12) "Hello world!"
});

// Подписка по шаблону
$pubsub->psubscribe('some*', function ($payload, string $chan) {
   var_dump($payload);
   // string(12) "Hello world!"
});
```