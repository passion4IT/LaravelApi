<form method="POST", action="/users">
    {!! csrf_field() !!}
    <input type="text" placeholder="name " name="name" />
    <input type="email" placeholder="email" name="email" />
    <input type="password" placeholder="password" name="password" />
    <input type="submit" value="create" />
</form>