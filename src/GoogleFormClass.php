<?php

namespace League\GoogleForm;

class GoogleFormClass
{

    /**
     * Create a new GoogleForm Instance
     */
    public function __construct()
    {
    }

    /**
     * Friendly welcome
     *
     * @param string $phrase Phrase to return
     *
     * @return string Returns the phrase passed in
     */
    public function echoPhrase($phrase)
    {
        return $phrase;
    }
}
