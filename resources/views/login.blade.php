<html><body>
    <form method="post" action="login/ingresar">
        <span style="color:red;">{{$error}}</span><br/>
        @csrf
        Usuario:<input type="text" name="usuario"><br/>
        Password:<input type="password" name="password"><br/>
        <input type="submit" value="entrar">
    </form>
    </body>
</html>
