<?php

class HeroBannerBlock extends Block
{
    static $singular_name = 'Disclaimer Block';
    static $plural_name = 'Disclaimer Blocks';
    static $description = 'Use this block to create a Disclaimer block';

    private static $db = array(
        'BannerSize' => 'Int',
    );

    private static $has_one = array(
        'HeroImage' => 'Image',
    );


    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab('Root.Main', new TextField('Title'));

        return $fields;

    }


}
