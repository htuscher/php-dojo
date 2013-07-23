<?php

class MineSweeper
{

    /**
     * Transforms the multi-lined input string which specifies the fields, their size and
     * the position of the mines into a multi-dimensional array containing the fields and
     * the representation of the mines as boolean.
     * E.g. $myArray[0][2][1] = TRUE indicates that the first game-field has a mine
     * in the second column of the third row (as always counting starts with 0)
     * Fields not containing mines should be marked as FALSE
     *
     * @param string $input The input string describing the fields as specified in readme.md
     * @return array 3-dimensional array [field][row][column]
     * @throws InvalidArgumentException if the provided input is not of the expected syntax
     */
    public static function processInput($input){
        $processedArray = array();

        //@todo your code here

        return $processedArray;
    }


    /**
     *
     * Takes the processed input and calculates the hints for the fields surrounding the mines.
     * Every field that is a horizontal, vertical or diagonal neighbour of a mine contains a 1.
     * If the field has more than one mine as neighbour it contains the according int-value.
     *
     * @param array $mineFields A 3-dimensional array as generated by
     * @see MineSweeper::processInput()
     * @return array 3-dimensional array [field][row][column] => integer
     * @throws InvalidArgumentException if the provided mineField is not well-formed
     */
    public static function calculateHints($mineFields){
        $hintArray = array();

        //@todo your code here

        return $hintArray;
    }


}

?>