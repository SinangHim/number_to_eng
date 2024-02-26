<?php
  $number = 1234;
  $f = new NumberFormatter("en", NumberFormatter::SPELLOUT);
  $word = explode(" ", $f->format($number));
  $combind_word = '';
  if($number >= 0 && $number < 10000){
    foreach( $word as $k => $v ){
      if($v == 'thousand'){
        if($word[$k - 1] == 'one'){
          $combind_word = $combind_word .' '. $v .',';
        }else{
          $combind_word = $combind_word .' '. $v .'s,';
        }
      }
      else if($v == 'hundred'){
        if($word[$k - 1] == 'one'){
          $combind_word = $combind_word .' '. $v;
        }else{
          $combind_word = $combind_word .' '. $v.'s';
        }
      }else if(count($word) - $k == 1){
        $combind_word = $combind_word .' and '. $v;
      }
      else{
        $combind_word = $combind_word .' '. $v;
      }
    }
  }else{
    echo "<h1>Error</h1>";
  }
echo $combind_word;

