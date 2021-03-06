<?php
namespace verbb\navigation\assetbundles;

use Craft;
use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

class NavigationAsset extends AssetBundle
{
    // Public Methods
    // =========================================================================

    public function init()
    {
        $this->sourcePath = "@verbb/navigation/resources/dist";

        $this->depends = [
            CpAsset::class,
        ];

        $this->css = [
            'css/navigation.css',
        ];

        $this->js = [
            'js/navigation.js',
        ];

        parent::init();
    }
}
