<form action="{{url('/item/update/' .$items->id)}}" method="POST">
                     @csrf
  <div class="mb-3">
    <label for="exampleInputEmail" >Name</label>
    <input type="text" name="item_name" class="form-control" id="exampleInputEmail" value="{{$items->item_name}}">
    <div id="emailHelp" class="form-text">Item addition</div>
    
  </div>


  <button type="submit" class="btn btn-primary">Add</button>
</form>
