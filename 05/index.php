<?php
$pages_to_crawl = 2;
// for ($p = 1; $p <= 1; $p++) {
$page_contents = file_get_contents('https://books.toscrape.com/catalogue/category/books/science_22/index.html');
// }

//extract all books
$books = explode('<section>', $page_contents);
$books = explode('</section>', $books[1]);

//for each book

$books = explode('<li ', $books[0]);
// echo count($books);
// print_r($books);

for ($i = 1; $i < 2; $i++) {
  //for book url
  $book_url = explode('<a href="', $books[$i]);
  $book_url = explode('">', $book_url[1]);
  $book_url = explode('../../../', $book_url[0]);
  // print_r($book_url[1]);
  //for book rating
  $book_rating = explode('<p class="star-rating ', $books[$i]);
  $book_rating = explode('">', $book_rating[1]);
  $book_rating = trim($book_rating[0]);

  //for book name
  $book_name = explode('title="', $books[$i]);
  $book_name = explode('">', $book_name[1]);
  $book_name = $book_name[0];

  //for price
  $book_price = explode('<p class="price_color">', $books[$i]);
  $book_price = explode('</p>', $book_price[1]);
  $book_price = $book_price[0];

  //for availability
  $book_availability = explode('<p class="instock availability">', $books[$i]);
  $book_availability = explode('</i>', $book_availability[1]);
  $book_availability = explode('</p>', $book_availability[1]);
  $book_availability = $book_availability[0];

  //for particular book
  $particular_book_url = 'https://books.toscrape.com/catalogue/' . $book_url[1];
  $particular_book = file_get_contents($particular_book_url);

  //for upc
  $book_UPC = explode('<th>UPC</th>', $particular_book);
  $book_UPC = explode('</td>', $book_UPC[1]);
  // $book_UPC = explode('</td>', $book_UPC[1]);
  $book_UPC = $book_UPC[0];

  //for available stocks
  $book_stocks = explode('<th>Availability</th>', $particular_book);
  $book_stocks = explode('<td>In stock (', $book_stocks[1]);
  $book_stocks = explode(' available)</td>', $book_stocks[1]);
  $book_stocks = $book_stocks[0];


  //for book reviews
  $book_review = explode('<th>Number of reviews</th>', $particular_book);
  $book_review = explode('</td>', $book_review[1]);
  $book_review = $book_review[0];
}
