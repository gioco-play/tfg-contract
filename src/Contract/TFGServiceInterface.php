<?php

declare(strict_types=1);
namespace GiocoPlus\TFG\Contract;

interface TFGServiceInterface
{
    /**
     * 遊戲啟動
     *
     * @param string $op_code
     * @param string $vendor_code
     * @param string $account
     * @param string $game_code
     * @param string $language
     * @param string $odd_type
     * @return mixed
     */
    function gameLaunch(string $op_code, string $vendor_code, string $account, string $game_code, string $language, string $odd_type);

    /**
     * 遊戲詳情
     * @param string $op_code
     * @param string $account
     * @param string $bet_id
     * @param string $vendor_code
     * @return mixed
     */
    function gameDetail(string $op_code, string $account, string $bet_id, string $vendor_code);

    /**
     * 抓取遊戲紀錄
     *
     * @param string $op_code
     * @param string $vendor_code
     * @param integer $past_minutes
     * @param string $cache_key
     * @return mixed
     */
    function betLogGrabber(string $op_code, string $vendor_code, int $past_minutes, string $cache_key);

    /**
     * 全營商 抓取遊戲紀錄
     *
     * @param string $vendor_code
     * @param integer $past_minutes
     * @return mixed
     */
    function betLogGrabberAll(string $vendor_code, int $past_minutes);
}