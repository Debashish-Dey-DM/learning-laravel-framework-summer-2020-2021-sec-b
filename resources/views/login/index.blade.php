<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    
    <form method ="post">
    <table>
        {{-- @csrf --}}
        {{csrf_field()}}
    <tr>
    <td>Name</td>
    <td><input type="text" name="uname" value="{{old('uname')}}"></td>
    </tr>
    <tr>
    <td>Password</td>
    <td><input type="password" name="password" value="{{old('password')}}"></td>
    </tr>
    <tr>
    <td></td>
    <td><input type="submit" name="submit" value="submit"></td>
    </tr>
    </table>
    </form>
    {{session('msg')}}
    <br>
    @foreach ($errors->all() as $err)
    {{$err}}
    <br>
        
    @endforeach
</body>
</html>