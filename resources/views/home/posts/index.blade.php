@extends('layouts.home.app')

@section('content')
    <div class="container">

        <main>
            @auth('patient')
                <form action="{{ route('posts.store', Auth::user()->id) }}" method="POST">
                    @csrf
                    <div class="post-box">
                        <input type="text" class="my-form-control" name="title" placeholder="العنوان" required>
                        <textarea class="my-form-control" name="desc" placeholder="منشور جديد ..."></textarea>
                        <button type="submit" class="post-btn">نشر</button>
                    </div>
                </form>
            @endauth
            <div class="posts">
                @foreach ($posts as $post)
                    <div class="post">
                        <div class="post-header">
                            <img src="{{ asset('images/patients/' . $post->patientRel->img) }}" alt="User 1"
                                class="profile-pic">
                            <div class="user-info">
                                <h2 class="user-name">{{ $post->patientRel->name }}</h2>
                                <p class="post-time">{{ $post->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                        <div class="post-content">
                            <h1>{{ $post->title }}</h1>
                            <p>{{ $post->desc }}</p>
                        </div>

                    </div>
                @endforeach


                <!-- Add more posts as needed -->
            </div>
        </main>
    </div>
@endsection
