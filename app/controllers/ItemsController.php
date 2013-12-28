<?php 

class ItemsController extends BaseController {


  public $restful = true;
 // protected $layout = "layouts.default";


  



	public function index()
	{	
     

         $items = Item::all();

        //return View::make('items.index');

        return View::make('items.index')->with('items', $items);



	}

}


?>