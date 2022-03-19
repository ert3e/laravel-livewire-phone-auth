<?php


namespace Ert3e\PhoneAuth;


/**
 * Class SmsServiceExample
 * @package Ert3e\PhoneAuth
 */
class SmsServiceExample implements SmsServiceInterface
{
    /**
     * @var
     */
    protected $client;

    /**
     * SmsServiceExample constructor.
     */
    public function __construct()
    {

    }

    /**
     * @param array $settings
     */
    public function settings(array $settings) : void {

    }

    /**
     * @param string $phone
     * @param string $message
     * @return bool
     */
    public function send(string $phone, string $message) : bool {
        return true;
    }
}