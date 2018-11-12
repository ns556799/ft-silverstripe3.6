<?php

class BrandStoryPage extends Page {
    static $singular_name = 'Brand Story Page';
    static $plural_name = 'Brand Story Pages';
    static $description = 'Use this page to create a Brand Story';
    static $icon = "mysite/images/icons/about-file.gif";
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

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldToTab('Root.Main', $fldDate = new DateField('StoryDate', 'Story date'));
        $fldDate->setConfig('showcalendar', true);
        $fldDate->setConfig('dateformat', 'dd-MM-yyyy');
        $fldDate->setRightTitle('Leave blank to un-show the date');
        $fields->addFieldToTab('Root.HeroImage', new UploadField('ArticleImage', 'Article Image'));

        $fields->addFieldToTab('Root.Main', $fldContent = new HtmlEditorField('Content'));


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

    public function getDateString() {
        $bsDate = $this->StoryDate;
        return  date("jS F Y", strtotime($bsDate));
    }

}

class BrandStoryPage_Controller extends Page_Controller {


}
