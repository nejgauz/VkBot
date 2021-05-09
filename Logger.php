<?php


class Logger
{
    public static function writeLog(string $message): void
    {
        $trace = debug_backtrace();
        $function_name = isset($trace[2]) ? $trace[2]['function'] : '-';
        $mark = date("H:i:s") . ' [' . $function_name . ']';
        $log_name = '/logs/log_' . date("j.n.Y") . '.txt';
        file_put_contents($log_name, $mark . " : " . $message . PHP_EOL, FILE_APPEND);
    }

}