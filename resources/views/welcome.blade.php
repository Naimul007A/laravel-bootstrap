<x-app-layout>
    <x-slot name="title">
        {{ __('Dashboard') }}
    </x-slot>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="bg-info">{{ __('Dashboard') }}</h1>
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
