<?php

function getFullAddress($specifics, $city, $province, $country) {
    return "$specifics, $city, $province, $country";
}

function getLetterGrade($grade) {
    if ($grade >= 98) {
        return 'A+';
    } else if ($grade >= 95 && $grade <= 97) {
        return 'A';
    } else if ($grade >= 92 && $grade <= 94) {
        return 'A-';
    } else if ($grade >= 89 && $grade <= 91) {
        return 'B+';
    } else if ($grade >= 86 && $grade <= 88) {
        return 'B';
    } else if ($grade >= 83 && $grade <= 85) {
        return 'B-';
    } else if ($grade >= 80 && $grade <= 82) {
        return 'C+';
    } else if ($grade >= 77 && $grade <= 79) {
        return 'C';
    } else if ($grade >= 75 && $grade <= 76) {
        return 'C-';
    } else {
        return 'F';
    }
}