<?php

namespace Ronanchilvers\ApiClientBase;

use Ronanchilvers\ApiClientBase\Contract\CredentialsInterface;

/**
 * Standard credentials object
 * 
 * @author Ronan Chilvers <ronan@d3r.com>
 */
class Credentials implements CredentialsInterface
{
    /**
     * The username
     * 
     * @var string
     */
    private $username;

    /**
     * The password
     * 
     * @var string
     */
    private $password;

    /**
     * Class constructor
     *
     * @author Ronan Chilvers <ronan@d3r.com>
     */
    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * @author Ronan Chilvers <ronan@d3r.com>
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @author Ronan Chilvers <ronan@d3r.com>
     */
    public function getPassword()
    {
        return $this->password;
    }
}
