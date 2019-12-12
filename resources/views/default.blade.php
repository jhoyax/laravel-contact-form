{{-- This view can be included anywhere: @include('contact_form::default') --}}
<form action="{{ route('contact_form.submit') }}" method="post">
    @csrf
    <div class="form-group">
        <label>{{ __('contact_form::fields.name') }}</label>
        <input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
    </div>
    <div class="form-group">
        <label>{{ __('contact_form::fields.email_address') }}</label>
        <input type="email" class="form-control" name="email_address" value="{{ old('email_address') }}" required>
    </div>
    <div class="form-group">
        <label>{{ __('contact_form::fields.message') }}</label>
        <textarea class="form-control" name="message" required>{{ old('message') }}</textarea>
    </div>
    <button class="btn btn-primary" type="submit">{{ __('contact_form::fields.submit') }}</button>
</form>

@if (session('message'))
    <div class="alert alert-success mt-2">
        {{ session('message') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger mt-2">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
