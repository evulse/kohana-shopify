<?php defined('SYSPATH') or die('No direct script access.');

class Shopify {

    protected $_primary_id;

    public static function factory($endpoint, $id = NULL)
    {
    // Set class name
    $endpoint = 'Shopify_'.ucfirst($endpoint);

    return new $endpoint($id);
    }

    public function __construct($id = NULL)
    {
        if ($id !== NULL)
        {
                // Passing the primary key
                $this->_primary_id = $id;

        }
    }

    public function exectue()
    {

    }

}