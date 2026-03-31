<form method='post' action='{{ route('password.email') }}'>@csrf<input name='email' placeholder='Email'><button>Send reset link</button></form>
