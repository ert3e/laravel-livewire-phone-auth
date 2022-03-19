<?php


namespace Ert3e\PhoneAuth;


/**
 * Interface SmsServiceInterface
 * @package Ert3e\PhoneAuth
 */
interface SmsServiceInterface
{
    /**
     * @param array $settings
     */
    public function settings(array $settings) : void;

    /**
     * @param string $phone
     * @param string $message
     * @return bool
     */
    public function send(string $phone, string $message) : bool;
}