<?php

namespace App\Operations\Checker;

/**
 * Pangrams, anagrams and palindromes
 * 
 * Implement each of the functions of the Checker class. 
 * Aim to spend about 10 minutes on each function. 
 */
class Checker
{
    /**
     * A palindrome is a word, phrase, number, or other sequence of characters 
     * which reads the same backward or forward.
     *
     * @param string $word
     * @return bool
     */
    public function isPalindrome(string $word) : bool
    {
        $middleWord = strlen($word) / 2;
        $firstHalfWord = substr($word, 0, floor($middleWord));
        $secondHalfWord = substr($word, ceil($middleWord));

        return $firstHalfWord == strrev($secondHalfWord);
    }
    
    /**
     * An anagram is the result of rearranging the letters of a word or phrase 
     * to produce a new word or phrase, using all the original letters 
     * exactly once.
     * 
     * @param string $word
     * @param string $comparison
     * @return bool
     */
    public function isAnagram(string $word, string $comparison) : bool
    {
        $new_word = preg_replace("/\s+/", "", $word);
        $new_comparison = preg_replace("/\s+/", "", $comparison);
        
        if (count_chars($new_word, 1) == count_chars($new_comparison, 1))
            return true;
        else 
            return false;      
    }

    /**
     * A Pangram for a given alphabet is a sentence using every letter of the 
     * alphabet at least once. 
     * 
     * @param string $phrase
     * @return bool
     */    
    public function isPangram(string $phrase) : bool
    {
    }
}