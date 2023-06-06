<h1>Users</h1>
<table>
    <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Password</td>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{ $user['name']}}</td>
        <td>{{ $user['Email']}}</td>
        <td>{{ $user['Password']}}</td>
    </tr>
    @endforeach
</table>