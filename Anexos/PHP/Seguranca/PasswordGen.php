<?php

    function generatePassword()
    {
        $length = 10;
        $symbols = ['!', '#', '=', '@', '+', '('];
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        $charactersLength = strlen($characters);

        $randomString = '';

        // Generate the random alphanumeric string
        for ($i = 0; $i < $length; ++$i) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }

        // Make space for symbols by "cutting" the string
        $randomString = substr($randomString, 0, strlen($randomString) - count($symbols));

        foreach ($symbols as $key) {
            // Insert each symbol at random position
            $randomString = substr_replace($randomString, $key, random_int(1, strlen($randomString) - 1), 0);
        }

        return $randomString;
    }
