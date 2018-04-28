<div class="row">
    <div class="col-lg-12">
        <ul class="nav nav-pills justify-content-center">
            <li class="nav-item ml-2">
                <a class="nav-link {{ $currentRouteName === 'wallet.transactions' ? 'active' : null }}" href="{{ route('wallet.transactions') }}">Wallet</a>
            </li>
            <li class="nav-item ml-2">
                <a class="nav-link {{ $currentRouteName === 'wallet.journal' ? 'active' : null }}" href="{{ route('wallet.journal') }}">Journal</a>
            </li>
        </ul>
        <hr />
    </div>
</div>
