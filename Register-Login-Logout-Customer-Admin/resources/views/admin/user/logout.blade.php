<!-- Example using a form for logout (typically used for CSRF protection) -->
<form method="POST" action="{{ route('admin.logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
