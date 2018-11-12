<?php

class CampaignPage extends Page
{
    static $singular_name = 'Campaign Page';
    static $plural_name = 'Campaign Page';
    static $description = 'Use this page to create a Campaign';
    static $icon = "mysite/images/icons/campaign.gif";
    static $defaults = array('ProvideComments' => true);

    private static $db = [
    ];

    private static $has_one = [];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->removeByName(['Content','Blocks']);

        return $fields;

    }

}

class CampaignPage_Controller extends Page_Controller
{

    public function init()
    {
        parent::init();

        $link = $this->Children()->First()->Link();

        $this->redirect($link, 301);
        return;
    }
}
