<?php

class ContentWithImageBlock extends Block
{
    static $singular_name = 'Content with Image Block';
    static $plural_name = 'Content with Image Blocks';
    static $description = 'Use this block to create a Content with Image block';
    static $icon = "themes/tutorial/images/treeicons/news";
    static $defaults = array('ProvideComments' => true);

    private static $db = array(
        "Content" => "HTMLText",
        "ImgCaption" => "HTMLText",
        "ImageAlignment" => "Boolean",

    );

    private static $has_one = array(
        "ContentImage" => "Image"
    );


    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->removeByName(['ExtraCSSClasses']);

        $fields->addFieldToTab('Root.Main', new TextField('Title'));
        $fields->addFieldToTab('Root.Main', new HtmlEditorField('Content'));
        $fields->addFieldToTab('Root.Main', new UploadField('ContentImage'));
        $fields->addFieldToTab('Root.Main', new TextareaField('ImgCaption'));


        $fields->addFieldToTab('Root.Main', new OptionsetField( $name = "ImageAlignment", $title = "Image Alignment",
            $source = array( "0" => "Right", "1" => "Left"),
            $value = "0" ));


        return $fields;

    }

    public function ImgAlign() {
        $alignment = null;
        $this->ImageAlignment ? $alignment = '-align-left' : $alignment = null;

        return $alignment;
    }


}
