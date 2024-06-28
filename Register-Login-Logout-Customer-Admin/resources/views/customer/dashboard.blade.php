
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Customer Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in as a customer!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form method="POST" action="{{ route('customer.logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
