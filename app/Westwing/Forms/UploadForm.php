<?php  namespace Westwing\Forms;

use Laracasts\Validation\FormValidator;

class UploadForm extends FormValidator
{

    /**
     * Validation rules for the upload form
     * @var array
     */
    protected $rules = [
        'email' => 'required|email|',
        'file' => 'required'
    ];

    
} 