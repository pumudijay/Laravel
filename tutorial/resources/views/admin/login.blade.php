<h1>Login form</h1>

<form action="/login" method="post">
@csrf
    <input type="text" name="user">
    <input type="password" name="password">
    <button type="submit">Login</button>
</form>