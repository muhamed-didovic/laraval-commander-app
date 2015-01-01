<?php


class UserUploadCommandHandlerTest extends \Codeception\TestCase\Test
{
   /**
    * @var \IntegrationTester
    */
    protected $tester;

    protected function _before()
    {
        $this->csvArray = array(

            array(
                'id'  => 1,
                'firstname'  => 'John',
                'lastname'  => 'Doe',
            ),
            array(
                'id'  => 2,
                'firstname'  => 'Adam',
                'lastname'  => 'Ant',
            ),
            array(
                'id'  => 3,
                'firstname'  => 'Victor',
                'lastname'  => 'Hugo',
            ),
            array(
                'id'  => 4,
                'firstname'  => 'Britannie',
                'lastname'  => 'Spears',
            )
        );

        $file = $this->tester->attachFile('Select File:', 'test.csv');
        $this->command = $this->tester->grabService("Westwing\\User\\UserUploadCommand('john@doe.com', $file)");
        $this->commandHandler = $this->tester->grabService('Westwing\User\UserUploadCommandHandler');

    }

    /*protected function _after()
    {
    }*/

    /** @test **/
    public function test_handle_upload_of_file()
    {
        $result = $this->commandHandler->handle($this->command);
        $this->assertCount(2, count($result->toArray()));
        $this->assertEquals($this->csvArray, $result->toArray());

    }

}