<?php

namespace App\Tests\Util;

use App\Util\Checker\Checker;
use PHPUnit\Framework\TestCase;


class CheckerTest extends TestCase 
{

    public function testisPalindrome() : void
    {
        $checker = new Checker;
        $word = "anna";
        $result = $checker->isPalindrome($word);

        // assert that your word is Palindrome !
        $this->assertEquals(true, $result);                       
    }

    public function testisNotPalindrome() : void
    {
        $checker = new Checker;
        $word = "“Bark”";
        $result = $checker->isPalindrome($word);

        // assert that your word is not Palindrome !
        $this->assertEquals(false, $result);               
    }
    
    
    public function testisAnagram() : void
    {
        $checker = new Checker;        
        $word = "coalface";
        $comparison = "cacao elf";
        $result = $checker->isAnagram($word,$comparison);

        // assert that your word is Anagram !
        $this->assertEquals(true, $result);               
    }

    public function testisNotAnagram() : void
    {
        $checker = new Checker;        
        $word = "coalface";
        $comparison = "dark elf";
        $result = $checker->isAnagram($word,$comparison);

        // assert that your word is not Anagram !
        $this->assertEquals(false, $result);               
    }

    public function isPangram() : void
    {
        $checker = new Checker;        
        $phrase = "The quick brown fox jumps over the lazy dog";
        $result = $checker->isPangram($phrase);

        // assert that your word is Pangram !
        $this->assertEquals(true, $result);               
    }

    public function isNotPangram() : void
    {
        $checker = new Checker;        
        $phrase = "The British Broadcasting Corporation (BBC) is a British public
        service broadcaster";
        $result = $checker->isPangram($phrase);

        // assert that your word is not Pangram !
        $this->assertEquals(false, $result);               
    }
}