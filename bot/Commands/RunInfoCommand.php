<?php
/**
 * This file is part of the TelegramBot package.
 *
 * (c) Avtandil Kikabidze aka LONGMAN <akalongman@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Longman\TelegramBot\Commands\UserCommands;
use function Couchbase\defaultDecoder;
use Longman\TelegramBot\Commands\Command;
use Longman\TelegramBot\Commands\UserCommand;


use phpcron\CronBot\CM;

/**
 * User "/Config" command
 *
 * Command that lists all available commands and displays them in User and Admin sections.
 */
class RunInfoCommand extends UserCommand
{
    /**
     * @var string
     */
    protected $name = 'SetLink';
    /**
     * @var string
     */
    protected $description = 'Show bot commands Lang User';
    /**
     * @var string
     */
    protected $usage = '/runinfo';
    /**
     * @var string
     */
    protected $version = '1.3.0';
    /**
     * @inheritdoc
     */
    public function execute()
    {
        CM::CM_RunInfo();
    }


}
