<?php
namespace Helper;

class Acceptance extends \Codeception\Module
{
    /**
     * Marks a pending Gherkin step with a clear TODO message.
     */
    public function pending(string $message = 'Passo BDD ainda não implementado.'): void
    {
        $this->debug($message);
    }
}
