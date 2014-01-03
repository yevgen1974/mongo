<?php 

class ItemsController extends BaseController {


  public $restful = true;
 // protected $layout = "layouts.default";


  



	public function index()
	{	
     

         $items = Item::all();


        return View::make('items.index')->with('items', $items);



	}



  public function create() {

  $rules =array(

  	'name'=>'required', 
    'quantity'=>'required',
     'price'=>'required'
  	);


     $validators = Validator::make(Input::all(), $rules);

                if ($validator->fails()) {
                return Redirect::to('ietms/create')->withErrors($validators);      
                } 

                 else {

                 $item = new Item;
                 $item->name = Input::get('name');
                 $item->quantity = Input::get('quantity'); 
                 $item->price = Input::get('price');
                 $item->save(); 


             return Redirect::to('items/index')->with('message', 'New item was saved ok!');

        }


  }





   public function edit ($id) {


   $item = Item::find($id);

   return View::make ('items.edit')->with('item', $item);



  }



  public function update() {


     $item = Item::find($id);
     $item->name = Input::get('name');
     $item->quantity = Input::get('quantity'); 
     $item->price = Input::get('price');
     $item->save(); 

   return View::make ('items.show')->with('item', $item);


  }


 public function show () {


  return View::make ('items.show')->with('item', Item::find($id));



 }




 public function delete() {


 $item = Item::find($id);
 $item->delete();

 Session::flash ('message', 'Item was deleted well!');

 return View::make ('items.index');


 }




}


?>