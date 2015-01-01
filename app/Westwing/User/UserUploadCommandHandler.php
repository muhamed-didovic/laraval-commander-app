<?php  namespace Westwing\User;

use Maatwebsite\Excel\Excel;
use Laracasts\Commander\CommandHandler;
use Laracasts\Commander\Events\DispatchableTrait;
use View;

class UserUploadCommandHandler implements CommandHandler
{
    use DispatchableTrait;

    /*
     * var $document
     */
    protected $document;

    /**
     * @param Excel $document
     */
    public function __construct(Excel $document)
    {
        $this->document = $document;
    }

    /**
     * Handle the command
     * @param $command
     * @return array|mixed
     * @throws ValidationFailedException
     */
    public function handle( $command )
    {
        $email = $command->email;

        $results = $this->document->load($command->file->getRealPath())->get(array('id', 'firstname', 'lastname'));

        if (! array_filter($results->toArray())){
            throw new ValidationFailedException('Please check you CSV file!', null);
        }

        $results = $results->sortBy(function($item){
            return $item->firstname;
        });

        //$results = array_add($results, 'email', $command->email);

        return ['items' => $results, 'email' => $email];
    }
}