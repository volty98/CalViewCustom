<?php

namespace App\Plugins\CalViewCustom;

use Exceedone\Exment\Services\Plugin\PluginSettingBase;
use Exceedone\Exment\Model\CustomTable;

class PluginSetting extends PluginSettingBase
{
    protected $useCustomOption = true;

    /**
     * @param [type] $form
     * @return void
     */
    public function setCustomOptionForm(&$form)
    {
        $form->text('text1', 'キーワード(1)')
            ->help('対象のキーワードを記入してください。');

        $form->text('color1', '文字色(1)')
            ->help('blueなど、または#000000の形式');

        $form->text('bg_color1', '背景色(1)')
            ->help('lightgreenなど、または#000000の形式');

        $form->text('text2', 'キーワード(2)');
        $form->text('color2', '文字色(2)');
        $form->text('bg_color2', '背景色(2)');

        $form->text('text3', 'キーワード(3)');
        $form->text('color3', '文字色(3)');
        $form->text('bg_color3', '背景色(3)');

    }
}
