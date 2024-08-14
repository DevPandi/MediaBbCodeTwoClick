<?php

namespace DevPandi\MediaBbCodeTwoClick\BbCode;

class MediaBbCode extends XFCP_MediaBbCode
{
    public function renderTagMedia(array $children, $option, array $tag, array $options)
    {
        $content = parent::renderTagMedia($children, $option, $tag, $options);
    }
}
