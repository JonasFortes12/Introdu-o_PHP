<?php

class MyFilter extends php_user_filter
{
    public $stream;

    public function onCreate(): bool
    {
        $this->stream = fopen('php://temp', 'w+');

        return $this->stream !== false;

    }

    public function filter($in, $out, &$consumed, bool $closing): int
    {
        $output = '';
        while ($bucket = stream_bucket_make_writeable($in)) {
            $lines = explode("\n", $bucket->data);

            foreach ($lines as $line){
                if(ctype_upper($line)){
                    $output .= $line . "\n";
                }
            }

        }

        $outBucket = stream_bucket_new($this->stream, $output);
        stream_bucket_append($out, $outBucket);

        return PSFS_PASS_ON;
    }


}