<?php

class Logger{

    private static $logDirectory = '../logs'; // Directory to store log files

    // Log file path (adjust as needed) private static $logDirectory = 'logs'; // Directory to store log files

    public static function log($message){
        // Create a directory for logs if it doesn't exist
        if (!is_dir(self::$logDirectory)) {
            mkdir(self::$logDirectory, 0755, true);
        }

        // Generate a log filename with the current timestamp
        // $timestamp = date('Y-m-d_H-i-s');
        $timestamp = date('d-m-Y_H-i-s');
        $logFilePath = self::$logDirectory . "/request_$timestamp.log";

        // Log request information
        $logEntry = "Request received at $timestamp:\n";
        $logEntry .= print_r($message, true) . "\n \n"; // Include request details

        // Append the log entry to the file
        file_put_contents($logFilePath, $logEntry, FILE_APPEND);
    }

    /*
    private static $logFilePath;

    public function __construct(){
        // Set the log file path (use an appropriate directory)
        $this->logFilePath = 'Logs/log-' . date('Y-m-d Y-m-d H:i:s') . '.txt';
    }

    // public function _set(){
    //     self::$logFilePath = 'Logs/log-' . date('Y-m-d Y-m-d H:i:s') . '.txt';
    //     return self::$logFilePath;
    // }

    public static function log($message){
        //$timestamp = date('Y-m-d H:i:s');
        self::$logFilePath = 'Logs/log-' . date('Y-m-d Y-m-d H:i:s') . '.txt';
        $logEntry = $message. PHP_EOL;
        echo "inside the log method ";

        // Append the log entry to the file
        file_put_contents(self::$logFilePath, $logEntry, FILE_APPEND);
        echo "content added successfully ";
    }
    */
}

