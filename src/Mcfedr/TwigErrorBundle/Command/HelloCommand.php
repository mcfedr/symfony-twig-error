<?php

namespace Mcfedr\TwigErrorBundle\Command;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloCommand extends Command
{
    /**
     * @var \Symfony\Bundle\FrameworkBundle\Templating\EngineInterface
     */
    protected $templating;

    public function __construct(EngineInterface $templating)
    {
        parent::__construct();
        $this->templating = $templating;
    }

    protected function configure()
    {
        $this
            ->setName('twig-error:hello')
            ->setDescription('Test the template');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln($this->templating->render('McfedrTwigErrorBundle:Default:hello.push.twig', [
            'name' => 'Fred\'s name'
        ]));
    }
} 