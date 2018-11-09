<?php

class HeroBannerBlock extends Block
{
    static $singular_name = 'Hero Banner Block';
    static $plural_name = 'Hero Banner Blocks';
    static $description = 'Use this block to create a hero banner';

    private static $db = array(
        'BannerSize' => 'Int',
    );

    private static $has_one = array(
        'HeroImage' => 'Image',
    );


    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab('Root.Main', new OptionsetField( $name = "BannerSize", $title = "Hero Banner Size",
                $source = array( "0" => "Small", "1" => "Medium", "2" => "Large" ),
                $value = "0" ));
        $fields->addFieldToTab('Root.Main', new UploadField('HeroImage', 'Hero Banner Image'));

        return $fields;

    }

    public function BannerSizeClass() {
        $size = null;
        switch ($this->BannerSize) {
            case 0:
                $size = '-small';
             break;
            case 1:
                $size = '-med';
             break;
            case 2:
                $size = '-large';
             break;
        }
        return $size;
    }
}
