<?php

class VideoBlock extends Block
{
    static $singular_name = 'Video Block';
    static $plural_name = 'Video Blocks';
    static $description = 'Use this block to create a Video block';
    static $icon = "themes/tutorial/images/treeicons/news";
    static $defaults = array('ProvideComments' => true);

    private static $db = array(
        "YouTubeID" => "Text",
    );

    private static $has_one = array(
    );


    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->removeByName(['ExtraCSSClasses', 'Content']);

        $fields->addFieldToTab('Root.Main', new TextField('Title'));
        $fields->addFieldToTab('Root.Main', new TextField('YouTubeID', 'YouTubeID'));

        return $fields;

    }

}
