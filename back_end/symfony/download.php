<?php


$installer_data = file_get_contents('https://symfony.com/installer');
file_put_contents('symfony_installer', $installer_data);