<?php

include("Child.php");

class ThreadTest extends Thread_Child {

    public function process() {
        $i = 0;
        while ($this->isRunning && $i < 10) {
            pcntl_signal_dispatch();
            echo $this->pid . "\t" . $i . PHP_EOL;
            sleep(rand(1,3));
            $i++;
        }

    }

}