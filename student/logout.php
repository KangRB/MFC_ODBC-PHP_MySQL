<?php
/**
 * Created by PhpStorm.
 * User: 83579
 * Date: 2018/6/20
 * Time: 16:10
 */
session_start();
session_destroy();
echo "<script>window.location.href='index.html';</script>";