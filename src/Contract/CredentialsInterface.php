<?php

namespace Ronanchilvers\ApiClientBase\Contract;

/**
 * Base interface for credentials objects
 * 
 * @author Ronan Chilvers <ronan@d3r.com>
 */
interface CredentialsInterface
{
    /**
     * Get the username
     *
     * @return string
     * @author Ronan Chilvers <ronan@d3r.com>
     */
    public function getUsername();

    /**
     * Get the password
     *
     * @return string
     * @author Ronan Chilvers <ronan@d3r.com>
     */
    public function getPassword();
}
