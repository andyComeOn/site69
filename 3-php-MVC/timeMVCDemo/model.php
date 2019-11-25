<?php 

class DataTime {
    public function getDate() {
        return date("Y-m-d");
    }

    public function getTime() {
        return date("H:i:s");
    }

    public function getDataTime() {
        return date("Y-m-d H:i:s");
    }
}