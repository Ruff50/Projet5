<form action="{{ route('post', $post['id']) }}" method="post">
    @csrf
    
    
    <button type="submit">
        <i class="material-icons-outlined text-base">visibility</i>
    </button>
 </form>