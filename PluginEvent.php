<?php

namespace App\Plugins\CalViewCustom;

use Exceedone\Exment\Services\Plugin\PluginEventBase;
use Illuminate\Support\Facades\Storage;

class PluginEvent extends PluginEventBase
{
    protected $useCustomOption = true;

    /**
     * Plugin Trigger
     */
    public function execute()
    {
        $PLUGIN_DIR = 'plugins/CalViewCustom/public/';
        $CSS_FILE = 'style.css';

        $css = "";

        if(empty($this->plugin->getCustomOption("text1")) == false ) $css .= '.fc-day-grid-event[data-original-title*="' . $this->plugin->getCustomOption("text1") . '"] * { background-color:' . $this->plugin->getCustomOption("bg_color1") . ' !important; color:' . $this->plugin->getCustomOption("color1") . ' !important; }';
        if(empty($this->plugin->getCustomOption("text2")) == false ) $css .= '.fc-day-grid-event[data-original-title*="' . $this->plugin->getCustomOption("text2") . '"] * { background-color:' . $this->plugin->getCustomOption("bg_color2") . ' !important; color:' . $this->plugin->getCustomOption("color2") . ' !important; }';
        if(empty($this->plugin->getCustomOption("text3")) == false ) $css .= '.fc-day-grid-event[data-original-title*="' . $this->plugin->getCustomOption("text3") . '"] * { background-color:' . $this->plugin->getCustomOption("bg_color3") . ' !important; color:' . $this->plugin->getCustomOption("color3") . ' !important; }';
        Storage::put($PLUGIN_DIR . $CSS_FILE, $css);
        return true;
    }
    
}
