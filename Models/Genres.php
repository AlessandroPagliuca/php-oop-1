<?php 
class Genres{
    private static $listGen = [
        'Action',
        'Comedy',
        'Drama',
        'Fantasy',
        'Horror',
        'Mystery',
        'Thriller',
    ];

    public static function getListGen(): array
    {
        return self::$listGen;
    }
}