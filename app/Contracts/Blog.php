<?php
/**
 * Created by PhpStorm.
 * User: angga
 * Date: 24/05/18
 * Time: 19:40
 */

namespace App\Contracts;


interface Blog
{
    const CATEGORY = [
        'Technology' => 'Technology',
        'Nature' => 'Nature',
        'Science' => 'Science',
        'Food' => 'Food',
        'Business' => 'Business',
        'Education' => 'Education',
        'Non Profit' => 'Non Profit',
        'Government' => 'Government',
        'Public Service' => 'Public Service',
        'Health' => 'Health',
        'Finance' => 'Finance',
        'Entertainment' => 'Entertainment',
        'Game' => 'Game',
        'News' => 'News',
        'Religion' => 'Religion',
        'Personal' => 'Personal',
        'Other' => 'Other',
    ];
}