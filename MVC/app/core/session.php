<?php
class Session
{
    public $_asession_keys = [];

    public function __construct()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
    }

    public function setSession($key, $val)
    {
        $_SESSION[$key] = $val;
        array_push($this->_asession_keys, $key);
    }

    public function unsetSession($key)
    {
        unset($_SESSION[$key]);
        $index = array_search($key, $this->_asession_keys);
        if ($index !== true)
            unset($this->_asession_keys[$index]);
        $this->_asession_keys = array_values($this->_asession_keys);
    }

    public function destroySession()
    {
        session_destroy();
        $this->_asession_keys = [];
    }

    public function getSessionKeys()
    {
        print_r($this->_asession_keys);
    }
}