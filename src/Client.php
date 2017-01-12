<?php

namespace pxgamer\GetiPlayer;

/**
 * Class Client.
 */
class Client
{
    const BASE_URL = 'https://open.live.bbc.co.uk';

    public $input_url;

    public $quality_array = [
        'highish' => '-audio_1=24000-video=1570000',
        'high' => '-audio_1=48000-video=5070000',
        'very_high' => '-audio_1=96000-video=5070000',
        'really_high' => '-audio_1=128000-video=8000000',
        'space' => '-audio_1=320000-video=8000000'
    ];

    public function setUrl($inputURL)
    {
        $this->input_url = $inputURL;
    }

    public function getSearch()
    {

    }

    public function getVideoId()
    {
        $ch = curl_init($this->input_url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

        $iPlayerPageData = curl_exec($ch);
        curl_close($ch);

        $search_Text = chr(0x22) . "vpid" . chr(0x22) . ":" . chr(0x22);

        $iPlayerPageData = strstr($iPlayerPageData, $search_Text);
        $iPlayerPageData = str_replace($search_Text, "", $iPlayerPageData);

        $search_Text = "" . chr(0x22);
        $iPlayerPageData = strstr($iPlayerPageData, $search_Text, true);
        $iPlayerPageData = str_replace($search_Text, "", $iPlayerPageData);

        $videoId = trim($iPlayerPageData);
        return $videoId;
    }

    public function deleteFiles()
    {
        return (rmdir("downloads\\*.ts")) ? true : false;
    }
}