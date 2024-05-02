<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DecryptionController extends Controller
{
    public function encrypt(Request $request)
    {
        $plainText = $request->input('plainText');
        $keyword = $request->input('keyword');
        $encryptedText = $this->vigenereEncrypt($plainText, $keyword);

        return view('home', ['encryptedText' => $encryptedText]);
    }

    public function decrypt(Request $request)
    {
        $plainText = $request->input('plainText');
        $keyword = $request->input('keyword');
        $decryptedText = $this->vigenereDecrypt($plainText, $keyword);

        return view('home', ['decryptedText' => $decryptedText]);
    }

    private function vigenereEncrypt($text, $key)
    {
        $text = strtoupper($text); // Convert text to uppercase
        $key = strtoupper($key); // Convert key to uppercase

        $encryptedText = ''; // Initialize encrypted text variable
        $keyLength = strlen($key);
        $keyIndex = 0;

        // Iterate over each character in the text
        for ($i = 0; $i < strlen($text); $i++) {
            $char = $text[$i]; // Get current character

            // Check if character is alphabetic
            if (ctype_alpha($char)) {
                // Determine shift value for current character
                $shift = ord($key[$keyIndex % $keyLength]) - 65;

                // Apply encryption shift to current character
                $encryptedChar = chr(((ord($char) - 65 + $shift) % 26) + 65);

                // Append encrypted character to encrypted text
                $encryptedText .= $encryptedChar;

                // Move to next character in key
                $keyIndex++;
            } else {
                // If character is not alphabetic, leave it unchanged
                $encryptedText .= $char;
            }
        }

        return $encryptedText;
    }

    private function vigenereDecrypt($text, $key)
    {
        $text = strtoupper($text); // Convert text to uppercase
        $key = strtoupper($key); // Convert key to uppercase

        $decryptedText = ''; // Initialize decrypted text variable
        $keyLength = strlen($key);
        $keyIndex = 0;

        // Iterate over each character in the text
        for ($i = 0; $i < strlen($text); $i++) {
            $char = $text[$i]; // Get current character

            // Check if character is alphabetic
            if (ctype_alpha($char)) {
                // Determine shift value for current character
                $shift = ord($key[$keyIndex % $keyLength]) - 65;

                // Apply decryption shift to current character
                $decryptedChar = chr(((ord($char) - 65 - $shift + 26) % 26) + 65);

                // Append decrypted character to decrypted text
                $decryptedText .= $decryptedChar;

                // Move to next character in key
                $keyIndex++;
            } else {
                // If character is not alphabetic, leave it unchanged
                $decryptedText .= $char;
            }
        }

        return $decryptedText;
    }

    public function process(Request $request)
{
    $plainText = $request->input('plainText');
    $keyword = $request->input('keyword');
    $operation = $request->input('operation');

    if ($operation === 'encrypt') {
        $result = $this->vigenereEncrypt($plainText, $keyword);
    } elseif ($operation === 'decrypt') {
        $result = $this->vigenereDecrypt($plainText, $keyword);
    } else {
        $result = 'Invalid operation';
    }

    return view('home', ['result' => $result]);
}

}
