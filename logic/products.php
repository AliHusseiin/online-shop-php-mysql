<?php
function getProducts()
{
  $products = [];
  $file = fopen('./data/products.csv', 'r') or die();
  while (!feof($file)) {
    $line = fgets($file);
    $arr = explode(',', $line);
    $sProduct = [
      'id' => $arr[0],
      'name' => $arr[1],
      'price' => (float) $arr[2],
      'discount' => (float) $arr[3],
      'rating' => (float) $arr[4],
      'is_featured' => $arr[5] == 'true' ? true : false,
      'rating_count' => (int) $arr[6],
      'image' => $arr[7],
      'is_recent' => trim($arr[8]) == 'true' ? true : false

    ];
    array_push($products, $sProduct);

    
  }
  fclose($file);
  return $products;
  
}