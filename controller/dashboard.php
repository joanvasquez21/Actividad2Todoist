<?php
session_start();

require '../src/render.php';

header("Location: ../src/template/dashboard.tpl.php?uname=" . $_SESSION['uname']);

