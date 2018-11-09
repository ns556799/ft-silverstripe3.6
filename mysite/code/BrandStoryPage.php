<?php

class BrandStoryPage extends Page {
    static $singular_name = 'Brand Story Page';
    static $plural_name = 'Brand Story Pages';
    static $description = 'Use this page to create a Brand Story';
    static $icon = "themes/tutorial/images/treeicons/news";
    static $defaults = array('ProvideComments' => true);

    private static $db = [
        "EnableHeroImage" => "Boolean",
        "IsPaidPost" => "Boolean",
        "SortOrder" => "Int",
        "StoryDate" => "Date",
    ];

    private static $has_one = [
        "ArticleImage" => "Image"
    ];

    private static $many_many = [
        "BrandStorySinglePages" => "BrandStoryPages"
    ];


    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldToTab('Root.Main', $dateField = new DateField('StoryDate', 'Story date'));
        $dateField->setConfig('showcalendar', true);
        $dateField->setConfig('dateformat', 'dd-MM-yyyy');
        $dateField->setRightTitle('Leave blank to un-show the date');
        $fields->addFieldToTab('Root.HeroImage', new UploadField('ArticleImage', 'Article Image'));

        $fields->addFieldToTab('Root.HeroImage',new OptionsetField(
            $name = "EnableHeroImage",
            $title = "Enable Hero banner on Brand Story?",
            $source = array( "0" => "Show", "1" => "Hide"),
            $value = "0" ));

        $fields->addFieldToTab('Root.HeroImage',new OptionsetField(
            $name = "IsPaidPost",
            $title = "Is this a Paid Post??",
            $source = array( "0" => "No", "1" => "Yes"),
            $value = "1" ));


        return $fields;

    }

    public function GetAllArticles() {
        $data = $this->Parent()->Children();

        return $data;
    }

    public function GetParentContext() {
        return $this->Parent()->Parent();
    }

}

class BrandStoryPage_Controller extends Page_Controller {


}
