@include('inc/navbar')

<div class="container mx-auto mt-5">

    <h2 class="text-3xl font-bold mt-10 mb-5 text-center">Popular Posts</h2>
    @include('post/popular-post', ['post' => $popularPosts])

    <h2 class="text-3xl font-bold mb-5 text-center">All Posts</h2>
    @include('post/all-post', ['post' => $allPosts])


</div>
@include('inc/footer')
