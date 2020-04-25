<?php



abstract class Notify
{
    protected $channel;

    public function setChannel(Notifieble $notify)
    {
        $this->channel = $notify;
    }

    public function sendMessage()
    {
        $this->channel->sendMessage("Hello");
    }
}


interface Notifieble
{
    public function sendMessage(string $message);
}


class SmsNotify implements Notifieble
{
    public function sendMessage(string $message)
    {
        echo "Отправленно SMS c текстом" . $message;
    }
}


class TelegramNotify implements Notifieble
{
    public function sendMessage(string $message)
    {
        echo "Отправленно сообщение в телеграм c текстом" . $message;
    }
}


$Ivan->setChannel(new SmsNotify());
$Ivan->sendMessage("Привет");
