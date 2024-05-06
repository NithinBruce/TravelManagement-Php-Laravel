
<form action="{{ url('products/create')}}" method="post">
    @csrf
    <div class="mb-3">
        <label>Package Name</label>
        <input type="text" name="name" class="form-control" value="{{ old('packagename')}}">
    </div>
     <div class="mb-3">
        <label>Package Name</label>
        <input type="text" name="name" class="form-control" value="{{ old('packagename')}}">
    </div>
    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control" rows="3">"{{ old('description') }}"</textarea>
    </div>
    <div class="mb-3">
        <label>Price</label>
        <input type="text" name="price" class="form-control" value="{{ old('price')}}">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form> 
