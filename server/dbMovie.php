<?php


$movies = [
    new Movie('Shark', [Genres::getListGen()[0], Genres::getListGen()[3], Genres::getListGen()[6]], 'en', '1988'),
    new Movie('Puma', [Genres::getListGen()[2], Genres::getListGen()[4], Genres::getListGen()[5]], 'it', '2005'),
    new Movie('IT', [Genres::getListGen()[1], Genres::getListGen()[5]], 'en', '2011'),
    // Aggiungi altri film se necessario
];