<form action="/submit_form" method="POST">
    @csrf 
    <input type="text" name="username" />
    <button type="submit">Submit</button>
</form>

<hr>

<form action="/submit_form" method="POST">
    @csrf 
    <input type="hidden" name="_method" value="PUT" >
    <input type="text" name="username1" />
    <button type="submit">Submit Put</button>
</form>

<hr>

<form action="/submit_form/1" method="POST">
    @csrf 
    <input type="text" name="username1" />
    <button type="submit">Submit ID</button>
</form>

<hr>

<form action="/submit_form/1" method="POST">
    @csrf 
    @method('DELETE')
    
    <button type="submit">Delete the ID</button>
</form>