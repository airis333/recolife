<?php

namespace Denki;

class DescriptionController extends \BaseController
{
    public function index()
    {
        return \View::make($this->getTemplate());
    }

    /**
     * デバイス判定をしてテンプレートを返す
     */
    public function getTemplate()
    {
        // デバイス判定
        $ua = new \UserAgent();
        $device = $ua->getDevice();

        $template = 'denki.free.description.index';

        // デバイス別にテンプレートを変える
        if ($device === 'pc') {

            // PC用テンプレートを返す
            return $template;

        } else {

            // PC以外の共通テンプレートを返す(モバイル)
            return 'm.'.$template;
        }   
    }
}
