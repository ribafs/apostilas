<?php

/**
 * Class HtmlHelper
 *
 * @package AndreasGlaser\Helpers
 */
class HtmlHelper
{
    /**
     * @param      $value
     * @param bool $double_encode
     *
     * @return string
     */
    public static function chars($value, $double_encode = true)
    {
        return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8', $double_encode);
    }

    /**
     * @param      $value
     * @param bool $double_encode
     *
     * @return string
     */
    public static function entities($value, $double_encode = true)
    {
        return htmlentities((string)$value, ENT_QUOTES, 'UTF-8', $double_encode);
    }

    /**
     * @param                                                         $content
     * @param \AndreasGlaser\Helpers\Html\AttributesHelper|array|null $attributesHelper
     *
     * @return string
     */
    public static function div($content, $attributesHelper = null)
    {
        return '<div' . ($attributesHelper ? AttributesHelper::f($attributesHelper) : null) . '>' . $content . '</div>';
    }

    /**
     * @param                                                         $content
     * @param \AndreasGlaser\Helpers\Html\AttributesHelper|array|null $attributesHelper
     *
     * @return string
     */
    public static function p($content, $attributesHelper = null)
    {
        return '<p' . ($attributesHelper ? AttributesHelper::f($attributesHelper) : null) . '>' . $content . '</p>';
    }

    /**
     * @param                                                         $content
     * @param \AndreasGlaser\Helpers\Html\AttributesHelper|array|null $attributesHelper
     *
     * @return string
     */
    public static function span($content, $attributesHelper = null)
    {
        return '<span' . ($attributesHelper ? AttributesHelper::f($attributesHelper) : null) . '>' . $content . '</span>';
    }

    /**
     * @param                                                         $content
     * @param \AndreasGlaser\Helpers\Html\AttributesHelper|array|null $attributesHelper
     *
     * @return string
     */
    public static function h1($content, $attributesHelper = null)
    {
        return '<h1' . ($attributesHelper ? AttributesHelper::f($attributesHelper) : null) . '>' . $content . '</h1>';
    }

    /**
     * @param                                                         $content
     * @param \AndreasGlaser\Helpers\Html\AttributesHelper|array|null $attributesHelper
     *
     * @return string
     */
    public static function h2($content, $attributesHelper = null)
    {
        return '<h2' . ($attributesHelper ? AttributesHelper::f($attributesHelper) : null) . '>' . $content . '</h2>';
    }

    /**
     * @param                                                         $content
     * @param \AndreasGlaser\Helpers\Html\AttributesHelper|array|null $attributesHelper
     *
     * @return string
     */
    public static function h3($content, $attributesHelper = null)
    {
        return '<h3' . ($attributesHelper ? AttributesHelper::f($attributesHelper) : null) . '>' . $content . '</h3>';
    }

    /**
     * @param                                                         $content
     * @param \AndreasGlaser\Helpers\Html\AttributesHelper|array|null $attributesHelper
     *
     * @return string
     */
    public static function h4($content, $attributesHelper = null)
    {
        return '<h4' . ($attributesHelper ? AttributesHelper::f($attributesHelper) : null) . '>' . $content . '</h4>';
    }

    /**
     * @param                                                         $content
     * @param \AndreasGlaser\Helpers\Html\AttributesHelper|array|null $attributesHelper
     *
     * @return string
     */
    public static function h5($content, $attributesHelper = null)
    {
        return '<h5' . ($attributesHelper ? AttributesHelper::f($attributesHelper) : null) . '>' . $content . '</h5>';
    }

    /**
     * @param                                                         $content
     * @param \AndreasGlaser\Helpers\Html\AttributesHelper|array|null $attributesHelper
     *
     * @return string
     */
    public static function h6($content, $attributesHelper = null)
    {
        return '<h6' . ($attributesHelper ? AttributesHelper::f($attributesHelper) : null) . '>' . $content . '</h6>';
    }

    /**
     * @param                                                         $href
     * @param                                                         $content
     * @param \AndreasGlaser\Helpers\Html\AttributesHelper|array|null $attributesHelper
     *
     * @return string
     */
    public static function a($href, $content, $attributesHelper = null)
    {
        $attributesHelper = AttributesHelper::f($attributesHelper);
        $attributesHelper->set('href', $href);

        return '<a' . $attributesHelper . ' >' . $content . '</a>';
    }

    /**
     * @param                                                         $src
     * @param \AndreasGlaser\Helpers\Html\AttributesHelper|array|null $attributesHelper
     *
     * @return string
     */
    public static function image($src, $attributesHelper = null)
    {
        $attributesHelper = AttributesHelper::f($attributesHelper);
        $attributesHelper->set('src', $src);

        return '<img' . $attributesHelper . ' />';
    }

    /**
     * Automatically applies "p" and "br" markup to text.
     * Basically [nl2br](http://php.net/nl2br) on steroids.
     *     echo static::auto_p($text);
     * [!!] This method is not foolproof since it uses regex to parse HTML.
     *
     * @param string  $str subject
     * @param boolean $br convert single linebreaks to <br />
     *
     * @return  string
     */
    public static function autoParagraph($str, $br = true)
    {
        // Trim whitespace
        if (($str = trim($str)) === '') {
            return '';
        }

        // Standardize newlines
        $str = str_replace(["\r\n", "\r"], "\n", $str);

        // Trim whitespace on each line
        $str = preg_replace('~^[ \t]+~m', '', $str);
        $str = preg_replace('~[ \t]+$~m', '', $str);

        // The following regexes only need to be executed if the string contains html
        if ($html_found = (strpos($str, '<') !== false)) {
            // Elements that should not be surrounded by p tags
            $no_p = '(?:p|div|h[1-6r]|ul|ol|li|blockquote|d[dlt]|pre|t[dhr]|t(?:able|body|foot|head)|c(?:aption|olgroup)|form|s(?:elect|tyle)|a(?:ddress|rea)|ma(?:p|th))';

            // Put at least two linebreaks before and after $no_p elements
            $str = preg_replace('~^<' . $no_p . '[^>]*+>~im', "\n$0", $str);
            $str = preg_replace('~</' . $no_p . '\s*+>$~im', "$0\n", $str);
        }

        // Do the <p> magic!
        $str = '<p>' . trim($str) . '</p>';
        $str = preg_replace('~\n{2,}~', "</p>\n\n<p>", $str);

        // The following regexes only need to be executed if the string contains html
        if ($html_found !== false) {
            // Remove p tags around $no_p elements
            $str = preg_replace('~<p>(?=</?' . $no_p . '[^>]*+>)~i', '', $str);
            $str = preg_replace('~(</?' . $no_p . '[^>]*+>)</p>~i', '$1', $str);
        }

        // Convert single linebreaks to <br />
        if ($br === true) {
            $str = preg_replace('~(?<!\n)\n(?!\n)~', "<br />\n", $str);
        }

        return $str;
    }

    /**
     * @param $paragraphs
     *
     * @return string
     */
    public static function arrayToParagraphs($paragraphs)
    {
        $html = '';

        foreach ($paragraphs AS $paragraph) {
            $html .= static::p($paragraph);
        }

        return $html;
    }
}
