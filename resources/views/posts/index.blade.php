@extends('welcome')

@section('app')
<h1>Pages#index</h1>

@foreach ($posts as $post)
    <li><a href="/post/{{$post->id}}">{{ $post->title }}</a> | 
    <a href="/post/{{$post->id}}/edit">
        <button>edit</button>
    </a>
    <a href="#" class="del" data-id="{{$post->id}}">
        <button>delete</button>
    </a>
    <form action="/post/{{$post->id}}/delete" method="post" id="form_{{$post->id}}" >
        {{ csrf_field() }}
        {{ method_field('delete') }}
    </form>
</li>
@endforeach

<script>
    const dels = document.getElementsByClassName('del');
    for(let i = 0; i < dels.length; i++){
        dels[i].addEventListener('click', function(e){
            e.preventDefault();
            const id = this.getAttribute('data-id');
            const form = document.getElementById('form_'+id);
            if(confirm( '本当に消していい？' )){
                form.submit();
            }else{
                return false;
            }
        });
    };
</script>



@endsection