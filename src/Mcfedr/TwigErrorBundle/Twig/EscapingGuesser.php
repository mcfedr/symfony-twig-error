<?php

namespace Mcfedr\TwigErrorBundle\Twig;

use Psr\Log\LoggerInterface;

class EscapingGuesser
{
    /**
     * @var \Psr\Log\LoggerInterface
     */
    protected $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function guess($filename)
    {
        $ext = substr($filename, strpos($filename, '.') + 1);
        switch ($ext) {
            case 'email.twig':
            case 'push.twig':
                $escape = false;
                break;
            default:
                $escape = 'html';
        }

        $this->logger->debug('Guessing escaping mode for file', [
                'filename' => $filename,
                'ext' => $ext,
                'escape' => $escape
            ]);

        return $escape;
    }
}
