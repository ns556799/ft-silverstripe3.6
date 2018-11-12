<?php

class ClientPage extends Page
{
    static $singular_name = 'Client Page';
    static $plural_name = 'Client Page';
    static $description = 'Use this page to create a Client page';
    static $icon = "mysite/images/icons/client.gif";
    static $defaults = array('ProvideComments' => true);

    private static $db = [
        'ClientLink' => 'HTMLText'
    ];

    private static $has_one = [];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->removeByName(['Content', 'Blocks']);

        $fields->addFieldToTab('Root.Main', $fldClientsLink = new TextField('ClientLink', 'Clients External Link'));
        $fldClientsLink->setRightTitle('Enter the clients URL using the http:// format');

        return $fields;

    }

}

class ClientPage_Controller extends Page_Controller
{

    public function init()
    {
        parent::init();

        $link = $this->Children()->First()->Link();

        $this->redirect($link, 301);
        return;
    }
}
