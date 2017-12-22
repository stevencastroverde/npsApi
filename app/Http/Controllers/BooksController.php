<?php

namespace App\Http\Controllers;

use App\Models\Book;

/**
 * Class BooksController
 * @package App\Http\Controllers
 */
class BooksController {
	/**
	 * GET /books
	 * @return array
	 */
	public function index(){
		
		return Book::all();
	}




}