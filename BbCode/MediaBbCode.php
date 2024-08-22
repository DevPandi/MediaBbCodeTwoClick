<?php

namespace DevPandi\MediaBbCodeTwoClick\BbCode;

use XF;

class MediaBbCode extends XFCP_MediaBbCode
{
    public function renderTagMedia(array $children, $option, array $tag, array $options)
    {
        if (XF::visitor()->getValue('load_embedded')) {
            return parent::renderTagMedia($children, $option, $tag, $options);
        }

        $content = parent::renderTagMedia($children, $option, $tag, $options);

        if ($content === '') {
            return '';
        }

        return $this->templater->renderTemplate('public:devpandi_media_bbcode_two_click', [
            'mediaID' => sha1(mt_rand()),
            'mediaProvider' => strtolower($option),
            'htmlContent' => ['content' => $content]
        ]);
    }
}
