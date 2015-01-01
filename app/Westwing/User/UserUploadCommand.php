<?php  namespace Westwing\User;

/**
 * Simple DTO object
 * Class UserUploadCommand
 * @package Westwing\User
 */
class UserUploadCommand
{

    /**
     * @var $username
     */
    public $email;

    /**
     * @var $file
     */
    public $file;

    /**
     * Constructor
     * @param $email
     * @param $file
     */
    function __construct($email, $file)
    {
        $this->email = $email;
        $this->file = $file;
    }


}