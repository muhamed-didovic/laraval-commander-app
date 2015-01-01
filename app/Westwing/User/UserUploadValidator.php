<?php namespace Westwing\User;

use Westwing\Forms\UploadForm;

class UserUploadValidator {

    /**
     * @var uploadForm
     */
    private $uploadForm;

    /**
     * @param UploadForm $uploadForm
     */
    function __construct(UploadForm $uploadForm)
    {
        $this->uploadForm = $uploadForm;
    }


    /**
     * Validate the form
     * @param $command
     * @throws \Laracasts\Validation\FormValidationException
     */
    public function validate($command)
    {
        $email = $command->email;
        $file = $command->file;
        $this->uploadForm->validate(compact('email', 'file'));
    }
}