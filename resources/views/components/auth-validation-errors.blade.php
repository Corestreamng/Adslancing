@if ($errors->any())
    <div {{ $attributes ?? '' }}>
        <div class="font-medium text-red-600">
            {{ __('Whoops! Something went wrong.') }}
        </div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
{{-- custom mesages --}}
@if(session('msg'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span>{{session('msg')}}</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
@endif
@if(session('err'))
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>{{session('err')}}</strong>
    </div>
@endif
