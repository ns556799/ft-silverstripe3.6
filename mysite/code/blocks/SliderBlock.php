<?php

class SliderBlock extends Block
{
    static $singular_name = 'Slider Block';
    static $plural_name = 'Slider Blocks';
    static $description = 'Use this block to create a Slider block';
    static $icon = "themes/tutorial/images/treeicons/news";
    static $defaults = array('ProvideComments' => true);

    private static $db = array(

    );

    private static $has_one = array(
    );

    private static $many_many = array(
        "SliderImages" => "Image"
    );


    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->removeByName(['ExtraCSSClasses', 'Content']);

        $fields->addFieldToTab('Root.Main', new UploadField('SliderImages', 'Slider Images'));

        return $fields;

    }

}
