@section('scripts')
	@parent
    <!-- laravel-notify script -->
	<script type="text/javascript" charset="utf-8">
        $(function ()
        {
            @if (session('notify.content'))
                $.notify({
                    message: "{!! session('notify.content') !!}",
                }, {
                    type: "{{ session('notify.type') }}",
                    placement: {
                        from: "top",
                        align: "center"
                    },
					@foreach(session('notify.options') as $option => $value)
					{{ $option }}: '{{ $value }}',
					@endforeach
                    @if (session('notify.delay'))
                        delay: {{ session('notify.delay') }},
                    @endif
                });
            @endif
        });
	</script>
@endsection
