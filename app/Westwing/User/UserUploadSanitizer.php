<?php
namespace Westwing\User;

use Laracasts\Commander\CommandBus;

class UserUploadSanitizer implements CommandBus{


    public function execute($command){

        if ($command->file->getClientOriginalExtension() != "csv"){
            throw new ValidationFailedException('Wrong format of file, upload only CSV file!', null);
        }
    }
} 