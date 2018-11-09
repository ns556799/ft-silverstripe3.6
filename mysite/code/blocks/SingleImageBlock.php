<?php

class SingleImageBlock extends Block
{
    static $singular_name = 'Single Image Block';
    static $plural_name = 'Single Image Blocks';
    static $description = 'Use this block to create a single image with an optional date below';
    static $icon = "themes/tutorial/images/treeicons/news";
    static $defaults = array('ProvideComments' => true);

    private static $db = array(
        'ImageDate' => 'Date'
    );

    private static $has_one = array(
        'BlockImage' => 'Image',
    );


    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->removeByName(['ExtraCSSClasses']);

        $fields->addFieldToTab('Root.Main', new TextField('Title'));
        $fields->addFieldToTab('Root.Main', $dateField = new DateField('ImageDate', 'Image date'));
        $dateField->setConfig('showcalendar', true);
        $dateField->setConfig('dateformat', 'dd-MM-yyyy');
        $dateField->setRightTitle('Leave blank to un-show the date');

        $fields->addFieldToTab('Root.Main', new UploadField('BlockImage', 'Image'));

        return $fields;

    }

    public function getDateString() {
        $bsDate = $this->ImageDate;
        return  date("jS F Y", strtotime($bsDate));
    }

}
