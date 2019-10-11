<h1>Login form</h1>

@foreach($errors->all() as $error)
    <li>{{$error}}</li>
@endforeach

<form action="/login" method="post">
@csrf
    <input type="text" name="user" placeholder="username">
    <input type="password" name="password" placeholder="password">
    <input type="text" name="email" placeholder="email">
    <button type="submit">Login</button>
</form>