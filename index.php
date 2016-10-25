<?php

/*  $maVariable = 'Hello World !!';
    print $maVariable;

  $taVariable = 123;
    print $taVariable;

  $laVariable = TRUE; // les bouléens avec FALSE y a RIEN
    print $laVariable;

  $theVariable = [
      'title' => 'GOTLIB...',
    //  'author' => 'Gotlib (1934...)',
      'author' => [
        'name' => 'Gothlib',
        'birth' => '1934',
        'deceased' => FALSE,
      ],
      'publication' => 1984,
    ];

    print $theVariable['title']; */

    $books = [
      [
        'title' => 'GOTLIB...',
        'author' => [
          'name' => 'Gothlib',
          'birth' => '1934',
          'deceased' => FALSE,
            ],
            'publication' => 1984,
            'available' => TRUE,
      ],
      [
        'title' => 'CINEMASTOCK. 1',
        'author' => [
          'name' => 'Gothlib',
          'birth' => '1965',
          'deceased' => FALSE,
            ],
            'publication' => 1984,
            'available' => TRUE,
      ],
      [
        'title' => 'GAI-LURON OU LA JOIE DE VIVRE',
        'author' => [
          'name' => 'Gothlib',
          'birth' => '1934',
          'deceased' => '2010',
            ],
            'publication' => 1984,
            'available' => TRUE,
      ],
    ];

/* code d'affichage
  Sert à l'affichage de la page html
*/
    print '<section>';
    foreach ($books as $book) {

         $title_markup = show_title($book['title']); // première concaténation de html avec presence des .(+ en javascript) et ''
        print $title_markup;
        foreach ($book['author'] as $key => $value){
          print authorsDetails($key, $value); // ucfirst met la premiére lettre en maj
        }
    }
    print '</section>';

    /* Fonctions
      sert à simplifier notre code en l'automatisant
    */
    function show_title($title) {
      $markup = '<h2>' . $title . '</h2>';
      return $markup;
    }

   function authorsDetails($key, $value) {   // afficher

        if ($key == 'deceased' && $value != FALSE) {
        }
        else {
            return ucfirst($key) . ' : '. $value . '<hr />';
     }
    }
  //  print $books[0]['title']; /*print $theVariable[0];*/
  //  print $books[1]['title'];
  //  print $books[2]['title'];

    ?>
