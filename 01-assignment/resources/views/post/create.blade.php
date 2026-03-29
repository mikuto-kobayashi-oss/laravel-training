<!DOCTYPE html>
<html>
    <head>
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        <h1>物件登録</h1>

        <form method="POST"
        action="{{ isset($office) ? route('post.update', $office) : route('post.store') }}">
        @csrf

        @if(isset($office))
            @method('PUT')
        @endif
        
            <input type="text" name="name" value="{{ old('name', $office->name ?? '') }}" placeholder="施設名">
            <input type="text" name="address" value="{{ old('address', $office->address ?? '') }}" placeholder="ビル名">
            <input type="text" name="post_code" value="{{ old('post_code', $office->post_code ?? '') }}" placeholder="郵便番号">
            <input type="text" name="stair" value="{{ old('stair', $office->stair ?? '') }}" placeholder="階数">
            <input type="text" name="comment" value="{{ old('comment', $office->comment ?? '') }}" placeholder="コメント">
            <button type="submit">{{ isset($office) ? '更新' : '登録' }}</button>
            @if(!isset($office))<button type="button" class="ajax-submit">Ajax登録</button>@endif
        </form>

        <script>
        $('.ajax-submit').on('click', function(){
            const name = $('input[name="name"]').val();
            const address = $('input[name="address"]').val();
            const post_code = $('input[name="post_code"]').val();
            const stair = $('input[name="stair"]').val();
            const comment = $('input[name="comment"]').val();
            console.log(name, address, post_code, stair, comment);

            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });

            $.ajax({
            url: '/post',
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            data: {
                name: name,
                address: address,
                post_code: post_code,
                stair: stair,
                comment: comment,
            }
            })
            
            .done(function (response) {
            alert(response.message); 
            })

            .fail(function (response) {
                if (response.status === 422 && response.responseJSON && response.responseJSON.errors) {
                    var errors = response.responseJSON.errors;
                    var msg = [];
                    $.each(errors, function (field, messages) {
                        msg.push(messages[0]);
                    });
                    alert(msg.join('\n'));
                }
            });
        });
        </script>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if (session('success'))
        <div class="alert alert-danger">
            <ul>
                <li>{{ session('success') }}</li>
            </ul>
        </div>
        @endif

    </body>
</html>
