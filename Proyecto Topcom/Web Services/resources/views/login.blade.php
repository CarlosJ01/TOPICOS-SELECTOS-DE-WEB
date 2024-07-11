<form action="" method="post">
    @csrf
    <input type="text" name="usuario" placeholder="Usuario">
    <input type="text" name="password" placeholder="password">
    <input type="submit" value="Enviar">
</form>

@if ($errors->any())
        @foreach ($errors->all() as $error)
        {{$error}}<br>
        @endforeach
    @endif