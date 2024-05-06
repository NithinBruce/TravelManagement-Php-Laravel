@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ url('form-submit') }}" method="POST">
  @csrf
  <label for="name">Name:</label>
  <input type="text" name="name" id="name">
   <br>
  <label for="email">Email:</label>
  <input type="email" name="email" id="email">
  <br>
  <button type="submit">Submit</button>
</form>