<?php
/**
 * Created by PhpStorm.
 * User: hyds
 * Date: 12/8/2018
 * Time: 10:06 PM
 */


function typesList($key = null)
{
  
    $typeList = [
        '' => 'Select Value',
        'brunch-bols' => 'Brunch Bols',
        'small-bols' => 'Small Bols',
        'smoothie-bols' => 'Smoothie Bols',
        'quinoa-bols' => 'Quinoa Bols',
        'signature-bols' => 'Signature Bols',
    ];
//   dd($key);
    if ($key != null) return $typeList[$key];
    return $typeList;
}

function navList($key = null)
{
    $typeList = [
        'brunch-bols' => 'Brunch Bols',
        'small-bols' => 'Small Bols',
        'soup' => 'SOUP',
        'wrap' => 'wrap',
        'signature-salad' => 'SALAD',
        'signature-bols' => 'BOWL',
        'quinoa-bols' => 'Quinoa Bols',
    ];

    if ($key != null) return $typeList[$key];
    return $typeList;
}

function specsList($key = null)
{
    $specList = [
        'v' => 'VEGETARIANO (V)',
        've' => 'VEGAN (VE)',
        'gf' => 'GLUTEN FREE (GF)',
        'sf' => 'SUPER FOODS (SF)',
        'fs' => 'FRUTOS SECOS (FS)',
        's' => 'SPICY/PICANTE (S)',
        'se' => 'SESAMO (SE)',
        'so' => 'SOJA (SO)',
        'l' => 'LACTOSA (L)',
        'c' => 'CACHUETE (C)',
        'h' => 'HUEVO (H)',
        'gl' => 'GLUTEN (GL)',
    ];

    if ($key != null) {

        $specString = '';
        $key = json_decode($key);
        // dd($key);
        if($key != null){
            foreach ($key as $index) {
            $specString .= $specList[$index] . ',';
         }
        }
    
        //dd($specString);
        $specString = rtrim(trim($specString), ',');
        return $specString;
    }

    return $specList;
}

function customIngredientCategory($key = null)
{
    $customIngred = [
        '' => 'Select Value',
        'main-components' => 'Main Components',
        'tuner' => 'Tuner',
        'dressing' => 'Dressing',
        'top-ups' => 'Top-Ups',
    ];

    if ($key != null) return $customIngred[$key];
    return $customIngred;
}
